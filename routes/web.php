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

Route::get('/user/evaluasi1', function () {
    return view('peserta\evaluasi');
});

Route::get('/home1', function () {
    return view('peserta.home1');
});



Route::get('/admin/jadwal', function () {
    return view('admin\jadwal\jadwal');
});

Route::get('/admin/peserta', function () {
    return view('admin\peserta\peserta');
});

Route::get('/admin/peserta/edit', function () {
    return view('admin\peserta\edit');
});

Route::get('/admin/jadwal/edit', function () {
    return view('admin\jadwal\edit');
});

Route::get('/admin/mobil', function () {
    return view('admin\mobil\mobil');
});

Route::get('/admin/mobil/create', function () {
    return view('admin\mobil\create');
});

Route::get('/admin/instruktur', function () {
    return view('admin\instruktur\instruktur');
});

Route::get('/admin/instruktur/create', function () {
    return view('admin\instruktur\create');
});

Route::get('/admin/pembayaran', function () {
    return view('admin\pembayaran');
});

Route::get('/admin/verifikasi', function () {
    return view('admin\verifikasi');
});

Route::get('/instruktur/jadwal', function () {
    return view('instruktur\jadwal');
});

Route::get('/instruktur/evaluasi', function () {
    return view('instruktur\evaluasi');
});

Route::get('/jadwal', function () {
    return view('peserta\jadwal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');
