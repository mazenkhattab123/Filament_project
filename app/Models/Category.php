<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
        protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'is_visible',
        'description', 
    ];

    public function parent() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function children() : HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function products() : BelongsToMany 
    {
        return $this->belongsToMany(Product::class);
    }
}
