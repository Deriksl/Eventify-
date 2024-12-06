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

    /**
     * @property int $id
     * @property string $name
     * @property string $lastname
     * @property string|null $phone_number
     * @property string $username
     * @property string $email
     * @property string|null $profile_picture
     */


    protected $hidden = [
        'password', 'remember_token',
    ];
}

