<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quiz';

    protected $fillable = ['pertanyaan', 'pilihan_1', 'pilihan_2', 'pilihan_3', 'pilihan_4', 'jawaban_benar'];
}