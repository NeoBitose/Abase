<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nisn','nis','nama','kelas','jurusan','nohp','jk','foto','tahun_masuk','tipe_siswa'];
    public $timestamps = false;
   

}
