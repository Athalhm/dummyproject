<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Tambahkan ini 👇
    protected $fillable = [
        'title',
        'description',
        'event_time',
        'email',
    ];
}
