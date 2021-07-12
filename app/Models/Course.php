<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'name',
        'hour',
        'age',
        'student_cout',
        'id_mentor',
        'price',
        'days',
        'file1',
        'file2',
        'file3',
        'description',  
    ];
}
