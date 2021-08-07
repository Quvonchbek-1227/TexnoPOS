<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proect extends Model
{
    use HasFactory;

    protected $table = 'proects';
    protected $fillable = [
        'is_mentor',
        'is_programmer',
        'is_student',
        'type',
        'text',
        'title',
        'id_person'
    ];

}
