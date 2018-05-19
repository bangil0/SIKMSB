<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    public $timestamps = false;
    protected $table = 'peserta';
    protected $primarykey = 'id_peserta';
    protected $fillable = ['id_instruktur', 'id', 'id_jadwal', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'nomor_telepon', 'verifikasi', 'sisa_kursus'];

    public function jadwal()
    {
      return $this->belongsTo('App\Jadwal');
    }

    public function pembayaran()
    {
      return $this->hasMany('App\Pembayaran');
    }

    public function kursus()
    {
      return $this->hasMany('App\Kursus');
    }

    public function user()
    {
      return $this->hasOne('App\User');
    }
}
