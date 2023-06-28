<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SppModel extends Model
{
    use HasFactory;
    protected $table = 'spp';
    protected $guarded  = 'id_spp' ;
    protected $fillable  = ['nama_spp','nominal_spp','tahun'] ;
    public $timestamps = false;
   

}
