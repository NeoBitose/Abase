<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailsppModel extends Model
{
    use HasFactory;
     protected $table = 'detail_spp';
    protected $guarded  = 'id_detail_spp' ;
    protected $fillable  = ['data_spp','siswa','bulan','tahun','selisih_spp','status_bayar'] ;
    public $timestamps = false;
}
