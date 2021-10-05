<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePenerimaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_penerimaan', function (Blueprint $table) {
            $table->char('id_terima', 5)->primary();
            $table->date('tgl_terima');
            $table->integer('total_harga');
            $table->char('tatus_terima', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_penerimaan');
    }
}
