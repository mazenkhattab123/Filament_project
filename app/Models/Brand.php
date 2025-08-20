<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'url',
        'primary_hax',
        'is_visible',
        'description', 
    ];

    public function brands() : HasMany 
    {
        return $this->hasMany(Product::class);
    }
}
