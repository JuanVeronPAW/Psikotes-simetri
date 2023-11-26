<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtes1 extends Model
{
    use HasFactory;
    protected $table = 'subtes1s';
    protected $fillable = [
        'url',
        'kunci'
    ];
}
