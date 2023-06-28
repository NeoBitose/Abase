<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayarantanggunganModel extends Model
{
    use HasFactory;
    protected $table = 'pembayaran_tanggungan';
    protected $guarded  = 'id_pembayaran_tanggungan' ;
    protected $fillable  = ['detail_tanggungan','no_kwitansi','user','nominal_pembayaran','waktu_bayar'] ;
    public $timestamps = false;
}
