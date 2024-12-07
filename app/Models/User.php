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

    // app/Models/User.php

    public function attendingEvents()
    {
        return $this->belongsToMany(Event::class, 'event_user', 'user_id', 'event_id');
    }

}

