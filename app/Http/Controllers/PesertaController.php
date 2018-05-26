<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use App\User;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Peserta::paginate(10);
        return view('admin.peserta.peserta', ['peserta' => $peserta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::findorfail($id);
        $user = User::findorfail($peserta->id);
        return view("admin.peserta.edit", ['peserta' => $peserta, 'user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $peserta = Peserta::findorfail($id);
      $user = User::findorfail($peserta->id);
      $peserta->update([
        'nama' => $request['nama'],
        'jenis_kelamin' => $request['jenis_kelamin'],
        'tanggal_lahir' => $request['tanggal_lahir'],
        'nomor_telepon' => $request['nomor_telepon'],
        'alamat' => $request['alamat'],
      ]);

      $user->update([
        'nama' => $request['nama'],
        'email' => $request['email'],
      ]);

      if($request['password'] != ""){
        $user->update([
          'password' => bcrypt($request['email']),
        ]);
      }
      return redirect('/admin/peserta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
