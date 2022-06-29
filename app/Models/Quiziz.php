<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiziz extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function materi(){
        return $this->belongsTo(Materi::class);
    }
    public function quiz_soal(){
        return $this->hasMany(QuizSoal::class);
    }

    public function quiz_data(){
        return $this->hasMany(QuizData::class);
    }
}
