<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'lastname', 'email', 'phone_number', 'username', 'password', 'profile_picture',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

