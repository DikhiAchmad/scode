<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizSoal extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function quiziz(){
        return $this->belongsTo(Quiziz::class);
    }

    public function quiz_jawaban(){
        return $this->hasMany(QuizJawaban::class);
    }

    public function quiz_detail(){
        return $this->hasMany(QuizDetail::class);
    }
}
