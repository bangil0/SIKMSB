@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<div class="content-wrapper">
  <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Mobil</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Jenis/merk</th>
                <th>Nomor polisi</th>
                <th>Warna</th>
                <th>Tahun</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ABC</td>
                <td>L 111 LL</td>
                <td>Hitam</td>
                <td>2018</td>
              </tr>
              <tr>
                <td>ABC</td>
                <td>L 111 LL</td>
                <td>Hitam</td>
                <td>2018</td>
              </tr>
              <tr>
                <td>ABC</td>
                <td>L 111 LL</td>
                <td>Hitam</td>
                <td>2018</td>
              </tr>
              <tr>
                <td>ABC</td>
                <td>L 111 LL</td>
                <td>Hitam</td>
                <td>2018</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
@endsection
