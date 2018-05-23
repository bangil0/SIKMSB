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
                <th>Hari kursus</th>
                <th>Waktu mulai</th>
                <th>Waktu selesai</th>
              </tr>
            </thead>
            <tbody>
              @foreach($jadwal as $j)
              <tr>
                <td>{{$j->hari}}</td>
                <td>{{$j->jam_mulai}}</td>
                <td>{{$j->jam_selesai}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
@endsection
