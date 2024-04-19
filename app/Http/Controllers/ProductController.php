<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $newProduct = Product::create([
            'name' => 'product name',
            'price' => 3.4,
            'description' => 'description',
            'source' => null,
            'thumbnail_image_url' => 'https://api.bplusfurniture.com.vn/admin/uploads/5d3231701bce4914a16a3da93c1e7a2b.jpg'
        ]);

        return response()->json($newProduct, 200);
    }
}
