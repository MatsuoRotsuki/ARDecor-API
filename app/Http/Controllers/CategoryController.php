<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            $categories = Category::with('roomType')
                ->get();

            return response()->json([
                'data' => $categories,
                'message' => 'Get all categories successfully',
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
            $category = Category::with('products', 'roomType')
                ->where('id', $id)
                ->get();
            if (!isset($category))
            {
                return response()->json([
                    'message' => 'Category not found',
                    'success' => false,
                ], 404);
            }

            return response()->json([
                'data' => $category,
                'message' => 'Get category successfully',
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
