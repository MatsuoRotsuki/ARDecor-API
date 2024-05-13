<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Variation;
use App\Models\ProductImage;
use App\Models\VariationCollection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'model_path',
        'is_stackable',
        'description',
        'source',
        'image_url',
        'specification_id',
        'category_id',
    ];

    protected $appends = ['product_variations'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    // public function variations()
    // {
    //     return $this->hasMany(Variation::class, 'product_id', 'id');
    // }
    public function variations()
    {
        return $this->hasMany(Variation::class, 'product_id', 'id');
    }

    public function getProductVariationsAttribute()
    {
        if ($this->variations->count() > 0)
        {
            $variationCollectionId = $this->variations->first()->variation_collection_id;
            $variationCollection = VariationCollection::find($variationCollectionId);
            return $variationCollection->products->makeHidden(['product_variations']);
        }
        else return [];
    }
}
