<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizData extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function quiziz(){
        return $this->belongsTo(Quiziz::class);
    }

    public function quiz_detail(){
        return $this->hasMany(QuizDetail::class);
    }
}
