<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    protected $primarykey = 'id_mobil';
    protected $fillable = ['nomor_polisi', 'jenis_merk', 'warna', 'tahun'];

    public function kursus()
    {
      return $this->hasMany('App\Kursus');
    }
}
