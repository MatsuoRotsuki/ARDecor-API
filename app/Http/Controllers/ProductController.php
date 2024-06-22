<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\MeasurementType;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->input('page', 1);
        $perPage = 24;
        $offset = ($page - 1) * $perPage;
        try {
            $firstInCollectionQ = Product::join('variations', 'products.id', '=', 'variations.product_id')
                ->selectRaw('MIN(products.id) as id')
                ->groupBy('variation_collection_id');

            $representatives = Product::leftJoin('variations', 'products.id', '=', 'variations.product_id')
                ->whereNull('variation_collection_id')
                ->select('products.id as id')
                ->union($firstInCollectionQ)
                ->orderBy('id');

            $productsQuery = Product::with(['category', 'variations'])
                ->inRandomOrder()
                ->whereIn('id', function($innerQuery) use ($representatives) {
                    $innerQuery->select('id')->fromSub($representatives, 'representatives');
                });

            $totalProducts = $productsQuery->count();
            $totalPages = ceil($totalProducts / $perPage);
            $products = $productsQuery
                ->skip($offset)
                ->take($perPage)
                ->get();


            return response()->json([
                'data' => $products,
                'totalPages' => $totalPages,
                'message' => 'Get all products successfully',
                'success' => true,
            ], 200);
        } catch (Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }

    // public function index(Request $request)
    // {
    //     $limit = $request->input('limit', 24);
    //     try {
    //         $firstInCollectionQ = Product::join('variations', 'products.id', '=', 'variations.product_id')
    //             ->selectRaw('MIN(products.id) as id')
    //             ->groupBy('variation_collection_id');

    //         $representatives = Product::leftJoin('variations', 'products.id', '=', 'variations.product_id')
    //             ->whereNull('variation_collection_id')
    //             ->select('products.id as id')
    //             ->union($firstInCollectionQ)
    //             ->orderBy('id');

    //         $products = Product::with(['category', 'variations'])
    //             ->whereIn('id', function($innerQuery) use ($representatives) {
    //                 $innerQuery->select('id')->fromSub($representatives, 'representatives');
    //             })
    //             ->limit($limit)
    //             ->get();

    //         return response()->json([
    //             'data' => $products,
    //             'message' => 'Get all products successfully',
    //             'success' => true,
    //         ], 200);
    //     } catch (Exception $e)
    //     {
    //         return response()->json([
    //             'message' => $e->getMessage(),
    //             'success' => false,
    //         ], 500);
    //     }
    // }

    public function search(Request $request)
    {
        $regExp = [
            '/[aáảàạãăắẳằặẵâấẩầậẫ]/iu' => '[aáảàạãăắẳằặẵâấẩầậẫ]',
            '/[eéẻèẹẽêếểềệễ]/iu' => '[eéẻèẹẽêếểềệễ]',
            '/[iíỉìịĩ]/iu' => '[iíỉìịĩ]',
            '/[uúủùụũưứửừựữ]/iu' => '[uúủùụũưứửừựữ]',
            '/[oóỏòọõôốổồộỗơớởờợỡ]/iu' => '[oóỏòọõôốổồộỗơớởờợỡ]',
            '/[yýỷỳỵỹ]/iu' => '[yýỷỳỵỹ]',
            '/[dđ]/iu' => '[dđ]',
        ];

        try {
            $result = $request->keyword;
            foreach ($regExp as $key => $value) {
                $result = preg_replace($key, $value, $result);
            }

            $firstInCollectionQ = Product::join('variations', 'products.id', '=', 'variations.product_id')
                ->selectRaw('MIN(products.id) as id')
                ->groupBy('variation_collection_id');

            $representatives = Product::leftJoin('variations', 'products.id', '=', 'variations.product_id')
                ->whereNull('variation_collection_id')
                ->select('products.id as id')
                ->union($firstInCollectionQ)
                ->orderBy('id');

            if ($request->has('representative')) {
                $products = Product::with(['images', 'category', 'variations', 'measurements.measurement_type'])
                    ->whereIn('id', function($innerQuery) use ($representatives) {
                        $innerQuery->select('id')->fromSub($representatives, 'representatives');
                    })
                    ->when($request->keyword, function ($query) use ($result) {
                        $query->where('products.name', 'REGEXP', $result);
                    })->get();

                    $filteredProducts = $products->filter(function ($product) {
                        return count($product->variations) == 0;
                    });

                    // If you need the filtered result as a plain array
                    $filteredProductsArray = $filteredProducts->values()->all();

                return response()->json([
                    'data' => $filteredProductsArray,
                    'message' => 'Get all products successfully',
                    'success' => true,
                ], 200);
            }

            $products = Product::with(['images', 'category', 'variations', 'measurements.measurement_type'])
                ->when(!$request->hasAny([
                    'category',
                    'keyword',
                    'maxPrice',
                    'minPrice',
                ]), function ($query) use ($representatives) {
                    $query->whereIn('id', function($innerQuery) use ($representatives) {
                        $innerQuery->select('id')->fromSub($representatives, 'representatives');
                    });
                })
                ->when($request->keyword, function ($query) use ($result) {
                    $query->where('products.name', 'REGEXP', $result);
                })
                ->when($request->category_id, function ($query) use ($request) {
                    $query->where('category_id', $request->category_id);
                })
                ->when($request->sortBy, function ($query) use ($request) {
                    if ($request->sortBy == 'priceHighToLow') $query->orderBy('price', 'desc');
                    else if ($request->sortBy == 'priceLowToHigh') $query->orderBy('price', 'asc');
                    else if ($request->sortBy == 'newest') $query->orderBy('created_at', 'desc');
                    else if ($request->sortBy == 'oldest') $query->orderBy('created_at', 'asc');
                    else if ($request->sortBy == 'name') $query->orderBy('name', 'asc');
                    else $query->orderBy('id', 'asc');
                })
                ->when($request->maxPrice, function ($query) use ($request) {
                    $query->where('price', '<=', $request->maxPrice);
                })
                ->when($request->minPrice, function ($query) use ($request) {
                    $query->where('price', '>=', $request->minPrice);
                })
                ->get();

            return response()->json([
                'data' => $products,
                'message' => 'Get all products successfully',
                'success' => true,
            ], 200);
        } catch (Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $product = Product::with(['images', 'category', 'variations.variationCollection', 'measurements.measurement_type'])
                ->find($id);

            if (!isset($product))
            {
                return response()->json([
                    'message' => 'Product not found',
                    'success' => false,
                ], 404);
            }

            return response()->json([
                'data' => $product,
                'message' => 'Get product successfully',
                'success' => true,
            ], 200);
        } catch (Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }
}
