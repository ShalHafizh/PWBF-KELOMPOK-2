<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailPenerimaan extends Model
{
    //use HasFactory;

    protected $table = 'table_detail_penerimaan';

    public function modelbarang()
    {
	return $this->belongsTo(Barang::class,'kode_bar','id');
    }
    public function Penerimaan()
    {
	return $this->belongsTo(Penerimaan::class,'id_terima','id');
    }
}
