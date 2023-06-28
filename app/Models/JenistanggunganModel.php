<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenistanggunganModel extends Model
{
    use HasFactory;
    protected $table = 'jenis_tanggungan';
    protected $guarded  = 'id_jenis_tanggungan' ;
    protected $fillable  = ['nama_jenis_tanggungan','nominal_kls_10','nominal_kls_11', 'nominal_kls_10','jangka_waktu','awal_aktif_tanggungan','akhir_aktif_tanggungan'] ;
    public $timestamps = false;
}
