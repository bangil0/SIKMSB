<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $primarykey = 'id_jadwal';
    protected $fillable = ['hari', 'jam_mulai', 'jam_selesai'];

    public function peserta()
    {
      return $this->hasMany('App\Peserta', 'id_jadwal');
    }

    public function instruktur_memilih()
    {
      return $this->hasMany('App\Instruktur_Memilih', 'id_jadwal');
    }
}
