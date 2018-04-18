@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Data Mobil baru</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label>Jenis/merk</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label>Nomor polisi</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>Warna</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Tahun</label>
                <input class="form-control" id="exampleInputLastName" type="text" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Simpan</a>
        </form>
      </div>
    </div>
  </div>
</body>
@endsection
