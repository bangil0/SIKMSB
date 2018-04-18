@extends('layouts.adminapp')

@section('content')
@include('admin.nav')
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Edit peserta</div>
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
                <label>Jenis kelamin</label>
                <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="L">Laki-laki</label>
                <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="P">Perempuan</label>
              </div>
              <div class="col-md-6">
                <label>Tangal lahir</label>
                <input class="form-control" id="exampleInputLastName" type="date" aria-describedby="nameHelp">
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
          <a class="btn btn-primary btn-block" href="login.html">Simpan</a>
        </form>
      </div>
    </div>
  </div>
</body>
@endsection
