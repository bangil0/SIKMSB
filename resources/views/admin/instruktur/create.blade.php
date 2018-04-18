@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Data instruktur baru</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label>Nama</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>No KTP</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">No SIM</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label>No Telepon</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label>Alamat</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Kirim</a>
        </form>
      </div>
    </div>
  </div>
</body>
@endsection
