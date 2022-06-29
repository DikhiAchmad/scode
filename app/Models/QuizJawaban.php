<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizJawaban extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function quiz_soal(){
        return $this->belongsTo(QuizSoal::class);
    }

    public function quiz_detail(){
        return $this->hasMany(QuizDetail::class);
    }
}
