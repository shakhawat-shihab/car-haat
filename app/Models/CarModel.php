<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model ;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CarModel extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'maker_id'
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function maker(): BelongsTo
    {
        return $this->belongsTo(related: Maker::class);
    }
}
