<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';
    protected $primarykey = 'id_kursus';
    protected $fillable = ['id_instruktur', 'id_peserta', 'id_mobil', 'kursus_ke', 'evaluasi', 'sudah_isi'];

    public function peserta()
    {
      return $this->belongsTo('App\Peserta');
    }

    public function mobil()
    {
      return $this->belongsTo('App\Mobil');
    }

    public function instruktur()
    {
      return $this->belongsTo('App\Instrukur');
    }
}
