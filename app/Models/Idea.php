<?php

namespace App\Models;

use App\Models\IdeaImage;
use App\Models\SavedPlacement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea extends Model
{
    use HasFactory;

    protected $table = 'ideas';

    protected $fillable = [
        'name',
        'image_url',
        'description',
        'room_type_id',
        'user_id',
        'placement_id',
    ];

    public function images()
    {
        return $this->hasMany(IdeaImage::class, 'idea_id', 'id');
    }

    public function saved_placement()
    {
        return $this->belongsTo(SavedPlacement::class, 'placement_id', 'id');
    }
}
