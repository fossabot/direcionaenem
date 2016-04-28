<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Instructor extends User
{
    protected $table = 'users';
    
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('instructor', function (Builder $builder) {
            $builder->where('role', '=', 'instructor');
        });
    }
}
