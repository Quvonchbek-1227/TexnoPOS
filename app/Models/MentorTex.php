<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorTex extends Model
{
    use HasFactory;
    protected $table = 'texnalogies_mentors';
    protected $fillable = [
        'id_texnalogiy',
        'id_mentor',
        'procent'
    ];
    
}
