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

    public function webIndex()
    {
        try {
            $firstInCollectionQ = Product::join('variations', 'products.id', '=', 'variations.product_id')
            ->selectRaw('MIN(products.id) as id')
            ->groupBy('variation_collection_id');

            $representatives = Product::leftJoin('variations', 'products.id', '=', 'variations.product_id')
                ->whereNull('variation_collection_id')
                ->select('products.id as id')
                ->union($firstInCollectionQ)
                ->orderBy('id');

            $products = Product::with(['category', 'variations'])
                ->whereIn('id', function($innerQuery) use ($representatives) {
                    $innerQuery->select('id')->fromSub($representatives, 'representatives');
                })
                ->get();

            $categories = Category::withCount('products')
                ->get();

            return view('dashboard', [
                'categories' => $categories,
                'products' => $products,
            ]);

        } catch (Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ]);
        }
    }

    public function webShow($id)
    {
        try {
            $product = Product::with(['images', 'category', 'variations.variationCollection', 'measurements.measurement_type'])
                ->find($id);

            return view('product-show', [
                'product' => $product,
            ]);
        } catch (Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ]);
        }
    }

    public function create()
    {
        $categories = Category::all();
        $measurementTypes = MeasurementType::all();
        return view('product-create', [
            'categories' => $categories,
            'measurementTypes' => $measurementTypes,
        ]);
    }

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

    public function store(Request $request)
    {
        try {
            $rules = [
                'name' => ['required', 'string', 'min:10'],
                'price' => ['required', 'numeric', 'min:0'],
                'description' => ['required', 'string', 'min:10'],
                'is_stackable' => ['required', 'boolean'],
                'source' => ['required', 'url:http,https'],
                'category_id' => ['required', 'exists:App\Models\Category,id'],
                'model_path' => ['required', 'string'],
                'images' => ['required'],
                'images.*' => ['url:http,https'],
                'measurements.*.measurement_type_id' => ['required', 'exists:App\Models\MeasurementType,id'],
                'measurements.*.value' => ['required', 'numeric', 'min:0'],
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails())
            {
                Log::debug($validator->errors());
                return response()->json([
                    'message' => $validator->errors(),
                    'success' => false,
                ], 422);
            }

            $product = Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
                'is_stackable' => $request->is_stackable ? 1 : 0,
                'source' => $request->source,
                'category_id' => $request->category_id,
                'model_path' => $request->model_path,
                'image_url' => $request->images[0],
            ]);

            foreach ($request->images as $imageUrl)
            {
                $product->images()->create([
                    'image_url' => $imageUrl,
                ]);
            }

            foreach ($request->measurements as $requestMeasurement)
            {
                $product->measurements()->create([
                    'measurement_type_id' => $requestMeasurement["measurement_type_id"],
                    'value' => $requestMeasurement["value"],
                ]);
            }

            return response()->json([
                'data' => $product,
                'message' => 'Created new product successfully',
                'success' => true,
            ], 200);

        } catch (Exception $e)
        {
            Log::error($e->getTraceAsString());
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

    public function edit(Request $request, $id)
    {
        try {
            $categories = Category::all();
            $measurementTypes = MeasurementType::all();
            $product = Product::with(['images', 'category', 'variations.variationCollection', 'measurements.measurement_type'])
                ->find($id);

            if (!isset($product))
            {
                return response()->json([
                    'message' => 'Product not found',
                    'success' => false,
                ], 404);
            }

            return view('product-edit', [
                'categories' => $categories,
                'measurementTypes' => $measurementTypes,
                'product' => $product,
            ]);
        } catch (Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }

    public function update(Request $request, $id)
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

        // return response()->json([
        //     'message' => 'Deleted product successfully',
        //     'success' => true,
        // ], 200);
        return redirect()->route('dashboard');
    }
}
