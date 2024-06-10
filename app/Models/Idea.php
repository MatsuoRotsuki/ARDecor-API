<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\RoomType;
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
        'placements',
    ];

    public function images()
    {
        return $this->hasMany(IdeaImage::class, 'idea_id', 'id');
    }

    public function roomType()
    {
        return $this->belongsTo(RoomType::Class, 'room_type_id', 'id');
    }

    protected $appends = ['created_at_human', 'updated_at_human'];

    public function getCreatedAtHumanAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public function getUpdatedAtHumanAttribute()
    {
        return Carbon::parse($this->updated_at)->diffForHumans();
    }
}
