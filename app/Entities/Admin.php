<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Admin extends Usuario
{
    protected $table = 'usuarios';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('admin', function (Builder $builder) {
            $builder->where('role', '=', 'admin');
        });
    }
}
