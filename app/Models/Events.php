<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $table = 'event';
    protected $fillable = [
        'date',
        'price',
        'adress',
        'mentor_id',
        'title',
        'time',
        'text',
        'img'
    ];
}
