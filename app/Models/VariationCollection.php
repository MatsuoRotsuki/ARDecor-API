<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariationCollection extends Model
{
    use HasFactory;

    protected $table = 'variation_collections';

    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'variations', 'variation_collection_id', 'product_id');
    }
}
