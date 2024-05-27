<?php

namespace App\Models;

use App\Models\Product;
use App\Models\MeasurementType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Measurement extends Model
{
    use HasFactory;

    protected $table = 'measurements';

    protected $fillable = [
        'product_id',
        'value',
        'measurement_type_id',
    ];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function measurement_type()
    {
        return $this->belongsTo(MeasurementType::class, 'measurement_type_id', 'id');
    }
}
