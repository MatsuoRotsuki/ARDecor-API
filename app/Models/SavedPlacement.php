<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Idea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SavedPlacement extends Model
{
    use HasFactory;

    protected $table = 'saved_placements';

    protected $fillable = [
        'name',
        'placements',
        'user_id',
    ];

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
