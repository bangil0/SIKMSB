<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;

class MasukkanRekeningController extends Controller
{

  public function show($id)
  {
    $jumlahkursus = Pembayaran::where([['id_peserta', $id],['nomor_rekening', NULL]])->value('jumlah_kursus');
    if($jumlahkursus == 8){
      $jumlahtagihan = 160000;
    }
    elseif($jumlahkursus == 12){
      $jumlahtagihan = 200000;
    }
    elseif($jumlahkursus == 16){
      $jumlahtagihan = 240000;
    }
    return view('peserta.masukkan-rekening', ['jumlahtagihan' => $jumlahtagihan, 'id_peserta' => $id]);

  }

  public function update(Request $request)
  {
    $pembayaran = Pembayaran::where([['id_peserta', $request->id_peserta],['nomor_rekening', NULL]])->update(['nomor_rekening' => $request->no_rekening]);
    return redirect('/home');

  }
}
