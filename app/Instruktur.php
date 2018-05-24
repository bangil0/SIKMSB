<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    public $timestamps = false;
    protected $table = 'instruktur';
    protected $primaryKey = 'id_instruktur';
    protected $fillable = ['id', 'nama', 'jenis_kelamin', 'no_ktp', 'no_sim', 'nomor_telepon', 'alamat'];

    public function instruktur_memilih()
    {
      return $this->hasMany('App\Instruktur_Memilih');
    }

    public function peserta()
    {
      return $this->hasMany('App\Peserta');
    }

    public function kursus()
    {
      return $this->hasMany('App\kursus');
    }

    public function user()
    {
      return $this->hasOne('App\User');
    }
}
