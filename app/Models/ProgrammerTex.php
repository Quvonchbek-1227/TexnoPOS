<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammerTex extends Model
{
    use HasFactory;
    protected $table = 'texnalogies_programmer';
    protected $fillable = [
        'id_texnalogiy',
        'id_programmer',
        'procent'
    ];
}
