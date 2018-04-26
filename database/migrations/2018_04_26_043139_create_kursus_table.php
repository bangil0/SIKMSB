<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKursusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kursus', function (Blueprint $table) {
          $table->increments('id_kursus');
          $table->integer('id_instruktur');
          $table->integer('id_pelanggan');
          $table->integer('id_mobil');
          $table->integer('kursus_ke');
          $table->text('evaluasi');
          $table->char('sudah_isi', 1);

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
