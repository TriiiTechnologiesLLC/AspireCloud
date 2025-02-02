<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    // use HasUuids;  // can't be undone, so it's better to define on each subclass

    public $timestamps = false;

    protected $guarded = [];    // everything is fillable by default

    /**
     * @param array<string, mixed> $attributes
     */
    protected static function _create(array $attributes = []): static
    {
        return static::query()->create($attributes);
    }
}
