<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';

    protected $fillable = ['kelas_id', 'link_video', 'judul', 'isi'];

    protected $guarded=['id'];

    public function quiziz(){
        return $this->hasMany(Quiziz::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function quiz_detail(){
        return $this->hasMany(QuizDetail::class);
    }
}
