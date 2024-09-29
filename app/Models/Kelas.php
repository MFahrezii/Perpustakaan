<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    public function siswa()
    {
        return $this->hasMany(siswa::class, 'kode_kelas', 'kode_kelas');
    }
}
