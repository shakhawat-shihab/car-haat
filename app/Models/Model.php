<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Model extends EloquentModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'maker_id'
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function makers(): BelongsTo
    {
        return $this->belongsTo(related: Maker::class);
    }
}
