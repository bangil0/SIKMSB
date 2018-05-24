@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<div class="content-wrapper">
  <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <div class="col-md-3 pull-left">
          <h3 class="align-middle">Jadwal</h3>
        </div>
        <div class="col-md-3 pull-right">
          <a class="btn btn-primary btn-md float-right" href="/admin/jadwal/create">Data baru</a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Hari kursus</th>
                <th>Waktu mulai</th>
                <th>Waktu selesai</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($jadwal as $j)
              <tr>
                <td class="align-middle">{{$j->hari}}</td>
                <td class="align-middle">{{$j->jam_mulai}}</td>
                <td class="align-middle">{{$j->jam_selesai}}</td>
                <td><a class="btn btn-primary btn-block" href="{{ url('/admin/jadwal/'.$j->id_jadwal.'/edit') }}">Edit</a></td>
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
