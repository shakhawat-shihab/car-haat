<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

}
