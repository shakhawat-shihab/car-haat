<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;

    // which columns are fillable
    protected $fillable = [
        'year',
        'price',
        'vin',
        'mileage',
        'address',
        'phone',
        'description',
        'published_at',
        'deleted_at',
        'maker_id',
        'model_id',
        'user_id',
        'car_type_id',
        'fuel_type_id',
        'city_id',
        'color'
    ];

    // which columns are not fillable
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

}

