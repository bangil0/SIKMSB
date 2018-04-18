@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<div class="content-wrapper">
  <div class="container-fluid">

    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <div class="col-md-3 pull-left">
          <i class="fa fa-table"></i> Instruktur
        </div>
        <div class="col-md-3 pull-right">
          <a class="btn btn-primary btn-sm float-right" href="/admin/instruktur/create">Data baru</a>
        </div>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama Instruktur</th>
                <th>Jenis kelamin</th>
                <th>No SIM</th>
                <th>No KTP</th>
                <th>Alamat</th>
                <th>Telepon</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Herman</td>
                <td>L</td>
                <td>1234567812345678</td>
                <td>8765432187654321</td>
                <td>Keputih</td>
                <td>0808080808080</td>
              </tr>
              <tr>
                <td>Herman</td>
                <td>L</td>
                <td>1234567812345678</td>
                <td>8765432187654321</td>
                <td>Keputih</td>
                <td>0808080808080</td>
              </tr>
              <tr>
                <td>Herman</td>
                <td>L</td>
                <td>1234567812345678</td>
                <td>8765432187654321</td>
                <td>Keputih</td>
                <td>0808080808080</td>
              </tr>
              <tr>
                <td>Herman</td>
                <td>L</td>
                <td>1234567812345678</td>
                <td>8765432187654321</td>
                <td>Keputih</td>
                <td>0808080808080</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
@endsection
