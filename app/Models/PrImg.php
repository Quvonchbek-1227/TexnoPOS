<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrImg extends Model
{
    use HasFactory;
    protected $table = 'proect_img';
    protected $fillable = [
        'img',
        'id_proect'
    ];
}
