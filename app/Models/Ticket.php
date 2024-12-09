<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
use HasFactory;

protected $fillable = [
'price', 'purchase_date', 'ticket_code', 'status', 'user_id', 'event_id',
];
}
