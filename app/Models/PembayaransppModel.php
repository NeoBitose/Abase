<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaransppModel extends Model
{
    use HasFactory;
    protected $table = 'pembayaran_spp';
    protected $guarded  = 'id_pembayaran_spp' ;
    protected $fillable  = ['detail_spp','no_kwitansi','user','nominal_pembayaran','waktu_pembayaran'] ;
    public $timestamps = false;
   
}
