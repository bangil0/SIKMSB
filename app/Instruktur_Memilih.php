<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruktur_Memilih extends Model
{
    protected $table = 'instruktur_memilih';
    protected $primarykey = ['id_instruktur', 'id_jadwal'];
    protected $fillable = ['id_instruktur', 'id_jadwal'];
    public function jadwal()
    {
      return $this->belongsTo('App\Jadwal', 'id_jadwal');
    }

    public function instruktur()
    {
      return $this->belongsTo('App\Peserta');
    }
}
