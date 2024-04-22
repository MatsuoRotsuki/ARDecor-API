<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Variation extends Model
{
    use HasFactory;

    protected $table = 'variations';

    // protected $fillable = [
    //     'product_id',
    //     'model_path',
    //     'is_stackable',
    //     'main_image_url',
    // ];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'product_id', 'id');
    // }
    protected $fillable = [
        'product_id',
        'variation_collection_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function variationCollection()
    {
        return $this->belongsTo(VariationCollection::class, 'variation_collection_id', 'id');
    }
}
