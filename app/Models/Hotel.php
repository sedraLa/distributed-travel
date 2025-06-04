<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'location',
        'rating'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
