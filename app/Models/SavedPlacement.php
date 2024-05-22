<?php

namespace App\Models;

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
}
