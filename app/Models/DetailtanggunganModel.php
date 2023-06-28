<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailtanggunganModel extends Model
{
    use HasFactory;
    protected $table = 'detail_tanggungan';
    protected $guarded  = 'id_detail_tanggungan' ;
    public $timestamps = false;
}
