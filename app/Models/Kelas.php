<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $fillable = ['gambar', 'nama_kelas', 'deskripsi', 'user_id'];

    protected $guarded=['id'];

    public function having_class(){
        return $this->hasMany(HavingClass::class);
    }

    public function materi(){
        return $this->hasMany(Materi::class);
    }

}
