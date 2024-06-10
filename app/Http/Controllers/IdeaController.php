<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Product;
use App\Models\IdeaImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class IdeaController extends Controller
{
    public function index()
    {
        try {
            $ideas = Idea::with(['images', 'roomType'])
                ->get();

            foreach($ideas as $idea)
            {
                $products = collect(json_decode($idea->placements, true));
                $productIds = $products->pluck('productId')->toArray();
                $idea['products'] = Product::whereIn('id', $productIds)->get();
            }

            return response()->json([
                'data' => $ideas,
                'message' => 'Get all ideas successfully',
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
            $result = $request->q;
            foreach ($regExp as $key => $value) {
                $result = preg_replace($key, $value, $result);
            }

            $ideas = Idea::with(['images', 'roomType'])
                ->when($request->q, function ($query) use ($result) {
                    $query->where('name', 'REGEXP', $result);
                })
                ->when($request->room_type_id, function ($query) use ($request) {
                    $query->where('room_type_id', $request->room_type_id);
                })
                ->get();

            foreach($ideas as $idea)
            {
                $products = collect(json_decode($idea->placements, true));
                $productIds = $products->pluck('productId')->toArray();
                $idea['products'] = Product::whereIn('id', $productIds)->get();
            }

            return response()->json([
                'data' => $ideas,
                'message' => 'Get all ideas successfully',
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

    public function show($id)
    {
        try {
            $idea = Idea::with(['images', 'roomType'])
                ->find($id);

            if (!isset($idea)) {
                return response()->json([
                    'message' => 'Idea not found',
                    'success' => false,
                ], 404);
            }

            $products = collect(json_decode($idea->placements, true));
            $productIds = $products->pluck('productId')->toArray();
            $idea['products'] = Product::whereIn('id', $productIds)->get();

            return response()->json([
                'data' => $idea,
                'message' => 'Get idea successfully',
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

    public function store(Request $request)
    {
        try {
            $rules = [
                'name' => ['required', 'string', 'min:6'],
                'description' => ['required', 'string', 'min:6'],
                'image_url' => ['required', 'string'],
                'placements' => ['required', 'json'],
                'user_id' => ['required', 'string'],
                'room_type_id' => ['required', 'numeric'],
                'images' => ['required','min:1','array'],
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails())
            {
                Log::debug("validator fails". $validator->errors());
                return response()->json([
                    'message' => $validator->errors(),
                    'success' => false,
                ], 422);
            }

            $newIdea = Idea::create([
                'name' => $request->name,
                'description' => $request->description,
                'image_url' => $request->image_url,
                'room_type_id' => $request->room_type_id,
                'user_id' => $request->user_id,
                'placements' => $request->placements,
            ]);

            foreach($request->images as $ideaImage) {
                $newIdea->images()->create([
                    'image_url' => $ideaImage["image_url"],
                ]);
            }

            return response()->json([
                'data' => $newIdea,
                'message' => 'Create new idea successfully',
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

    public function destroy($id)
    {
        try {
            $idea = Idea::find($id);

            if (!isset($idea)) {
                return response()->json([
                    'data' => null,
                    'message' => 'Idea not found',
                    'success' => false,
                ], 404);
            }

            $idea->delete();

            return response()->json([
                'data' => $idea,
                'message' => 'Idea deleted successfully',
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
}
