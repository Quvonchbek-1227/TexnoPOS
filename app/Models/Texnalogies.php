<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Texnalogies extends Model
{
    use HasFactory;
    protected $table = 'texnalogies';
    protected $fillable = [
        'name'
    ];
}
