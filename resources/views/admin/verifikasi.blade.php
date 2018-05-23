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
                <th>Alamat</th>
                <th>Tanggal lahir</th>
                <th>No telepon</th>
                <th>Status terverifikasi</th>
                <th>tombol verifikasi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($peserta as $p)
              <tr>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->tanggal_lahir }}</td>
                <td>{{ $p->nomor_telepon }}</td>
                @if($p->verifikasi == '0')
                  <td>Belum terverifikasi</td>
                  <td>
                    <form action="{{ url('/admin/verifikasi', [$p->id_peserta]) }}" method="post" id="workshop-newsletter-form">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="verifikasi" value="1">
                    <input class="btn btn-primary btn-block" value="Verifikasi" type="submit">
                    </form>
                  </td>
                @elseif($p->verifikasi == '1')
                  <td>Terverifikasi</td>
                  <td></td>
                @endif

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
