<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    //
    // protected $table="car_fuel_types";
    // protected $primaryKey="fuel_type_id";
    // public $incrementing=false;
    // protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

}
