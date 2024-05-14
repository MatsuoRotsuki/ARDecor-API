<?php

namespace App\Models;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IdeaImage extends Model
{
    use HasFactory;

    public function idea()
    {
        return $this->belongsTo(Idea::class, 'idea_id', 'id');
    }
}
