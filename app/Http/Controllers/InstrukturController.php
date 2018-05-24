<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruktur;
use App\User;

class InstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instruktur = Instruktur::paginate(10);
        return view('admin.instruktur.instruktur', ['instruktur' => $instruktur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instruktur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'email' => $request['email'],
            'nama' => $request['nama'],
            'password' => bcrypt($request['password']),
            'role' => "I",
        ]);
        $id = User::where('email', $request['email'])->value('id');
        $instruktur = Instruktur::create([
            'id' => $id,
            'nama' => $request['nama'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'no_ktp' => $request['no_ktp'],
            'no_sim' => $request['no_sim'],
            'nomor_telepon' => $request['nomor_telepon'],
            'alamat' => $request['alamat'],
        ]);
        return redirect('/admin/instruktur');
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
        $instruktur = Instruktur::findorfail($id);
        $user = User::findorfail($instruktur->id);
        return view("admin.instruktur.edit", ['instruktur' => $instruktur, 'user' => $user]);
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
      $instruktur = Instruktur::findorfail($id);
      $user = User::findorfail($instruktur->id);
      $instruktur->update([
        'nama' => $request['nama'],
        'jenis_kelamin' => $request['jenis_kelamin'],
        'no_ktp' => $request['no_ktp'],
        'no_sim' => $request['no_sim'],
        'nomor_telepon' => $request['nomor_telepon'],
        'alamat' => $request['alamat'],
      ]);

      $user->update([
        'email' => $request['email'],
      ]);

      if($request['password'] != ""){
        $user->update([
          'password' => bcrypt($request['email']),
        ]);
      }
      return redirect('/admin/instruktur');
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
