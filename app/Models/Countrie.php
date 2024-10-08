<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Countrie extends Model
{
    use HasFactory;

    public function location():HasMany
    {
        return $this->hasMany(Location::class);
    }
}
