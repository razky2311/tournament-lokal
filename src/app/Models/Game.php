<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $fillable = ['name', 'description'];

    public function tournaments(): HasMany
    {
        return $this->hasMany(Tournament::class);
    }

}
