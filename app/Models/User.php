<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    // 🟩 هذه أهم خطوة لحل الخطأ اللي ظهرلك
    protected $fillable = [
        'name',
        'email',
        'password',
        // أضف أي حقل ثاني عم ترسله
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];



    // 🟩 JWT methods
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
