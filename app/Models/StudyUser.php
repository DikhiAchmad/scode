<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyUser extends Model
{
    use HasFactory;
    protected $table = 'study';

    protected $fillable = ['user_id', 'kelas_id', 'materi_id', 'long_time_page'];
}