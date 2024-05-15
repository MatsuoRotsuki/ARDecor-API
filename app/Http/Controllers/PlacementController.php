<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\SavedPlacement;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PlacementController extends Controller
{
    public function index(Request $request)
    {
        try {
            $placements = SavedPlacement::with('idea')
                ->when($request->user_id, function ($query) use ($request) {
                    $query->where('user_id', $request->user_id);
                })
                ->get();

            foreach ($placements as $placement)
            {
                $products = collect(json_decode($placement->placements, true));
                $productIds = $products->pluck('productId')->toArray();
                $placement['products'] = Product::whereIn('id', $productIds)->get();
            }

            return response()->json([
                'data' => $placements,
                'message' => 'Get all products successfully',
                'success' => true,
            ], 200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }

    public function show($id) {
        try {
            $placement = SavedPlacement::find($id);

            $products = collect(json_decode($placement->placements, true));
            $productIds = $products->pluck('productId')->toArray();
            $placement['products'] = Product::whereIn('id', $productIds)->get();

            if (!isset($placement))
            {
                return response()->json([
                    'message' => 'Placement not found',
                    'success' => false,
                ], 404);
            }

            return response()->json([
                'data' => $placement,
                'message' => 'Get placement successfully',
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
                'name' => ['required', 'string', 'min:6'],
                'placements' => ['required', 'json'],
                'user_id' => ['required', 'string'],
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails())
            {
                return response()->json([
                    'message' => $validator->errors(),
                    'success' => false,
                ], 422);
            }

            $placement = SavedPlacement::create([
                'name' => $request->name,
                'placements' => $request->placements,
                'user_id' => $request->user_id,
            ]);

            return response()->json([
                'data' => $placement,
                'message' => 'Create new placements successfully',
                'success' => true,
            ], 200);
        }
        catch(Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $rules = [
                'id' => ['required', 'exists:saved_placements'],
                'name' => ['required', 'string', 'min:6'],
                'placements' => ['required', 'json'],
                'user_id' => ['required', 'string'],
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails())
            {
                return response()->json([
                    'message' => $validator->errors(),
                    'success' => false,
                ], 422);
            }

            $placement = SavedPlacement::find($request->id);
            $placement->name = $request->name;
            $placement->placements = $request->placements;
            $placement->save();

            return response()->json([
                'data' => $placement,
                'message' => 'Updated placement successfully',
                'success' => true,
            ], 200);

        } catch(Exception $e)
        {
            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $placement = SavedPlacement::find($id);

            if (!isset($placement)) {
                return response()->json([
                    'data' => null,
                    'message' => 'Placement not found',
                    'success' => false,
                ], 404);
            }

            $placement->delete();

            return response()->json([
                'data' => $placement,
                'message' => 'Placement deleted successfully',
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
