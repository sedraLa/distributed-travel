<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


}
