<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('jadwal', function (Blueprint $table) {
          $table->increments('id_pembayaran');
          $table->integer('id_pelanggan');
          $table->timestamp('tanggal_waktu_bayar');
          $table->string('nomor_rekening');
          $table->char('verifikasi', 1);

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
