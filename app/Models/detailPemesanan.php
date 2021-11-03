<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPemesanan extends Model
{
    //use HasFactory;

    protected $table = 'table_detail_pemesanan';

    public function modelbarang()
    {
        return $this->belongsTo(Barang::class,'kode_bar','id');
    }

    public function Pemesanan()
    {
        return $this->belongsTo(Pemesanan::class,'id_pesan','id');
    }
}
