<?php

// app/Models/Event.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'location',
        'date',
        'logo',
        'status',
    ];

    // Relación entre Evento y Usuario (un evento pertenece a un usuario)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación muchos a muchos con los usuarios que asisten al evento
    public function attendees()
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
    }
}
