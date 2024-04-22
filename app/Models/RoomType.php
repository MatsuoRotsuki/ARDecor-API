<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'room_types';

    protected $fillable = [
        'name',
        'main_image_url',
    ];

    public $timestamps = false;

    public function categories()
    {
        return $this->hasMany(Category::class, 'room_type_id', 'id');
    }
}
