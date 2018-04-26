<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mobil', function (Blueprint $table) {
          $table->increments('id_mobil');
          $table->string('nomor_polisi')->unique();
          $table->string('jenis_merk');
          $table->string('warna');
          $table->char('tahun', 4);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
