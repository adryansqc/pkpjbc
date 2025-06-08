<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukList extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'kode_ruko',
        'no_ruko',
        'l_tanah',
        'p_tanah',
        'luas_tanah',
        'type_bangunan',
        'l_bangunan',
        'h_jual_exc_ppn',
        'ppn',
        'h_jual_inc_ppn',
    ];
}
