<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $limit = $request->input('limit', 10);
        try {
            $subQuery = Product::join('variations', 'products.id', '=', 'variations.product_id')
                ->join('variation_collections', 'variations.variation_collection_id', '=', 'variation_collections.id')
                ->selectRaw('MIN(products.id) as min_id, variation_collection_id')
                ->groupBy('variation_collection_id');

            $products = Product::with(['images', 'category', 'variations'])
                // ->whereIn('id', function($query) use ($subQuery) {
                //     $query->select('min_id')->fromSub($subQuery, 'max_products');
                // })
                ->latest()
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
