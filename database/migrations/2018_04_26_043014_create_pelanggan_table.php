<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pelanggan', function (Blueprint $table) {
          $table->increments('id_pelanggan');
          $table->integer('id_instruktur');
          $table->integer('id_jadwal');
          $table->string('name');
          $table->char('jenis_kelamin', 1);
          $table->date('tanggal_lahir');
          $table->string('alamat');
          $table->integer('role')->default('0');
          $table->string('telepon', 20);
          $table->char('verifikasi', 1)->default('0');
          $table->string('no_rek')->nullable();
          $table->rememberToken();
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
        //
    }
}
