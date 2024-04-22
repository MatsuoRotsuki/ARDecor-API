<?php

namespace App\Models;

use App\Models\Product;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'room_type_id',
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');
    }
}
