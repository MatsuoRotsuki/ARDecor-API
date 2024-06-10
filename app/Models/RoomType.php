<?php

namespace App\Models;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'room_types';

    protected $fillable = [
        'name',
        'image_url',
    ];

    public $timestamps = false;

    public function ideas()
    {
        return $this->hasMany(Idea::class, 'room_type_id', 'id');
    }
}
