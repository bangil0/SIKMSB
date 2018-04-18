@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<div class="content-wrapper">
  <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Peserta</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama Peserta</th>
                <th>Alamat</th>
                <th>Jenis kelamin</th>
                <th>No telp</th>
                <th>tanggal lahir</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Peserta 1</td>
                <td>JL abc</td>
                <td>L</td>
                <td>0800</td>
                <td>12/12/12</td>
              </tr>
              <tr>
                <td>Peserta 1</td>
                <td>JL abc</td>
                <td>L</td>
                <td>0800</td>
                <td>12/12/12</td>
              </tr>
              <tr>
                <td>Peserta 1</td>
                <td>JL abc</td>
                <td>L</td>
                <td>0800</td>
                <td>12/12/12</td>
              </tr>
              <tr>
                <td>Peserta 1</td>
                <td>JL abc</td>
                <td>L</td>
                <td>0800</td>
                <td>12/12/12</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
@endsection
