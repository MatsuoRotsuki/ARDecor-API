<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        try {
            $roomTypes = RoomType::with(['categories'])
                ->get();

            return response()->json([
                'data' => $roomTypes,
                'message' => 'Get all room types successfully',
                'success' => true,
            ], 200);

        } catch (Exception $e) {

            return response()->json([
                'message' => $e->getMessage(),
                'success' => false,
            ], 500);
        }
    }
}
