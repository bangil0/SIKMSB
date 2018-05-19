<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primarykey = 'id_pembayaran';
    protected $fillable = ['id_peserta', 'tanggal_waktu_bayar', 'nomor_rekening', 'verifikasi'];

    public function peserta()
    {
      return $this->belongsTo('App\Peserta');
    }
}
