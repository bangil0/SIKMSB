<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/login', function () {
    return redirect('/#login');
});

Route::get('/logout', 'Auth\LoginController@logout');

//Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['middleware'=>['admin']],function(){
        Route::resource('/admin/verifikasi', 'VerifikasiController');
        Route::resource('/admin/pembayaran', 'PembayaranController');
        Route::resource('/admin/jadwal', 'JadwalController');
        Route::resource('/admin/mobil', 'MobilController');
        Route::resource('/admin/instruktur', 'InstrukturController');
        Route::resource('/admin/peserta', 'PesertaController');
    });

    Route::group(['middleware'=>['peserta']],function(){
        Route::post('/masukkan-rekening', 'MasukkanRekeningController@update');
        Route::get('/masukkan-rekening/{id}', 'MasukkanRekeningController@show');

        Route::get('/jadwal', 'PilihJadwalController@index');
        Route::post('/jadwal', 'PilihJadwalController@store');

        Route::get('/menunggu-bayar', function () {
            return view('peserta.menunggu-bayar');
        });
        Route::get('/menunggu-verifikasi', function () {
            return view('peserta.menunggu-verifikasi');
        });
        Route::get('/user/evaluasi1', function () {
            return view('peserta.evaluasi');
        });
    });
    Route::group(['middleware'=>['instruktur']],function(){

        Route::get('/instruktur/jadwal', 'JadwalController@lihatJadwal');
        Route::resource('/instruktur/evaluasi', 'KursusController');
    });
//});
