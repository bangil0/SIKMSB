<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembayaran;

class DashboardPesertaController extends Controller
{



  public function showMasukkanRekening($id)
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
    $pembayaran = Pembayaran::where('id_peserta', $id)->first();
    return view('peserta.masukkan-rekening', ['jumlahtagihan' => $jumlahtagihan, 'pembayaran' => $pembayaran]);
  }

  public function updateMasukkanRekening(Request $request)
  {
    $pembayaran = Pembayaran::findorfail($request->id_pembayaran);
    $pembayaran->update([
      'nomor_rekening' => $request->nomor_rekening,
    ]);
    return redirect('/home');

  }


}
