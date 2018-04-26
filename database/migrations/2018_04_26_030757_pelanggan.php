<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pelanggan', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->char('jenis_kelamin', 1);
          $table->date('tanggal_lahir');
          $table->string('alamat');
          $table->integer('role')->default('0');
          $table->string('telepon', 20);
          $table->string('email')->unique();
          $table->string('password');
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
