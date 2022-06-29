<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizDetail extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function quiz_data(){
        return $this->belongsTo(QuizData::class);
    }

    public function materi(){
        return $this->belongsTo(Materi::class);
    }

    public function quiz_soal(){
        return $this->belongsTo(QuizSoal::class, 'soal_id');
    }

    public function quiz_jawaban(){
        return $this->belongsTo(QuizJawaban::class);
    }
}
