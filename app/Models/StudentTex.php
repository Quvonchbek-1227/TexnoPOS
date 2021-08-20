<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTex extends Model
{
    use HasFactory;
    protected $table = 'texnalogies_student';
    protected $fillable = [
        'id_texnalogiy',
        'id_student',
        'procent'
    ];
}
