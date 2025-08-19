<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'code',
        'phoneCode'
    ];

    public function states() 
    {
        return $this->hasMany(State::class);
    }
    
    public function employees()  
    {
        return $this->hasMany(Employee::class);
    }
}
