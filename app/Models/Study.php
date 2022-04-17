<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    protected $table = 'study';

    protected $fillable = ['urutan', 'type', 'user_id', 'kelas_id', 'materi_id', 'quiz_id'];
}