<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailPemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detail_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignid('kode_barang');
            $table->foreignid('id_pesan');
            $table->integer('jumlah_up');
            $table->integer('harga_up');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_detail_pemesanan');
    }
}
