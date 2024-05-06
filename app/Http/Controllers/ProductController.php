<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
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

        $limit = $request->input('limit', 12);

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

            $products = Product::with(['images', 'category', 'variations'])
                ->when(!$request->hasAny([
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
                ->limit($limit)
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

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        try {
            $product = Product::with(['images', 'category', 'variations.variationCollection'])
                ->find($id);

            if (!isset($product))
            {
                return response()->json([
                    'message' => 'Product not found',
                    'success' => false,
                ], 404);
            }

            $product['product_variations'] = $product->product_variations;

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

    public function update(Request $request, Product $product)
    {

    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!isset($product))
        {
            return response()->json([
                'message' => 'Product not found',
                'success' => false,
            ], 404);
        }

        $product->delete();

        return response()->json([
            'message' => 'Deleted product successfully',
            'success' => true,
        ], 200);
    }
}
