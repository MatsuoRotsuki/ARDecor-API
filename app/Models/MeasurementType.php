<?php

namespace App\Models;

use App\Models\Measurement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeasurementType extends Model
{
    use HasFactory;

    protected $table = 'measurement_types';

    protected $fillable = [
        'name',
        'unit',
    ];

    public $timestamps = false;

    public function measurements()
    {
        return $this->hasMany(Measurement::class, 'measurement_type_id', 'id');
    }
}
