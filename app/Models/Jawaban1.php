<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban1 extends Model
{
    use HasFactory;
    protected $table = 'jawaban1s';
    protected $fillable = [
        'choice',
        'skor',
    ];
}
