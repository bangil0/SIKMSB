@extends('layouts.adminapp')

@section('content')
@include('instruktur.nav')
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Isi evaluasi</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label>Nama peserta</label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Tanggal latihan</label>
                <input class="form-control" id="exampleInputLastName" type="date" aria-describedby="nameHelp">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Evaluasi latihan</label>
            <textarea class="form-control" rows="5" placeholder="Isi evaluasi"></textarea>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Kirim</a>
        </form>
      </div>
    </div>
  </div>
</body>
@endsection
