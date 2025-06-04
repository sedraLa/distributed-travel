<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'location',
        'description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
