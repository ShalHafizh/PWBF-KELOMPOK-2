<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDetailBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_detail_barang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::table('table_detail_barang', function (Blueprint $table) {
            $table->foreignId('kode_bar')->constrained('table_barang');
            $table->foreignId('id_ukuran')->constrained('table_ukuran');
            $table->foreignId('id_warna')->constrained('table_warna');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_barang');
    }
}