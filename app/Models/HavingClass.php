<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HavingClass extends Model
{
    use HasFactory;

    protected $table = 'having_class';

    protected $fillable = ['user_id', 'kelas_id'];
}