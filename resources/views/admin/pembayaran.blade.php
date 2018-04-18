@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<div class="content-wrapper">
  <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Jadwal</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama Peserta</th>
                <th>No rekening</th>
                <th>gambar</th>
                <th>Waktu pembayaran</th>
                <th>Verifikasi pembayaran</th>
                <th>Tombol verifikasi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Peserta 1</td>
                <td>12345678</td>
                <td>bayar.jpg</td>
                <td>12/12/17 09:00</td>
                <td>Belum terverifikasi</td>
                <td><a class="btn btn-primary btn-block" href="login.html">Verifikasi</a></td>
              </tr>
              <tr>
                <td>Peserta 1</td>
                <td>12345678</td>
                <td>bayar.jpg</td>
                <td>12/12/17 09:00</td>
                <td>Belum terverifikasi</td>
                <td><a class="btn btn-primary btn-block" href="login.html">Verifikasi</a></td>
              </tr>
              <tr>
                <td>Peserta 1</td>
                <td>12345678</td>
                <td>bayar.jpg</td>
                <td>12/12/17 09:00</td>
                <td>Belum terverifikasi</td>
                <td><a class="btn btn-primary btn-block" href="login.html">Verifikasi</a></td>
              </tr>
              <tr>
                <td>Peserta 1</td>
                <td>12345678</td>
                <td>bayar.jpg</td>
                <td>12/12/17 09:00</td>
                <td>Belum terverifikasi</td>
                <td><a class="btn btn-primary btn-block" href="login.html">Verifikasi</a></td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
@endsection
