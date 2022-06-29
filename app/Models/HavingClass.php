<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HavingClass extends Model
{
    use HasFactory;

    protected $table = 'having_class';

    protected $fillable = ['user_id', 'kelas_id'];

    protected $guarded=['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}
