@extends('layouts.app')

@section('content')
<section id="contact" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">
        <h2>Daftar Kursus</h2>
        <p>Anda akan mendaftar kursus untuk 16 kali pertemuan</p>
        <hr class="bottom-line">
      </div>

      <!-- <div id="sendmessage">Your message has been sent. Thank you!</div>
      <div id="errormessage"></div> -->

      <form action="" method="post" class="contactForm" action="{{ route('register') }}">
        {{ csrf_field() }}
        <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-1">

        </div>

        <div class="col-md-6 col-sm-6 col-xs-10">
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label>Nama :</label>
            <input type="text" name="name" class="form-control form" id="name" placeholder="Nama anda"/>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif

          </div>
          <div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
            <label>Jenis Kelamin :</label><br>
              <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="L">Laki-laki</label>
              <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="P">Perempuan</label>
              @if ($errors->has('jenis_kelamin'))
                  <span class="help-block">
                      <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('tanggal_lahir') ? ' has-error' : '' }}">
            <label>Tanggal lahir :</label>
            <input type="date" name="tanggal_lahir" class="form-control form" id="tanggal lahir" placeholder="Tanggal lahir anda"/>
            @if ($errors->has('tanggal_lahir'))
                <span class="help-block">
                    <strong>{{ $errors->first('tanggal_lahir') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
            <label>Alamat :</label>
            <input type="text" name="alamat" class="form-control form" id="alamat" placeholder="Alamat penjemputan anda" />
            @if ($errors->has('alamat'))
                <span class="help-block">
                    <strong>{{ $errors->first('alamat') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('telepon') ? ' has-error' : '' }}">
            <label>Nomor telepon :</label>
            <input type="tel" name="telepon" class="form-control form" id="telepon" placeholder="Nomor telepon anda"  />
            @if ($errors->has('telepon'))
                <span class="help-block">
                    <strong>{{ $errors->first('telepon') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label>Alamat E-Mail :</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email anda" />
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label>Password :</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password untuk akun peserta anda"/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <!-- <div class="validation"></div> -->
          </div>
          <div class="form-group">
            <label>Konfirmasi password :</label>
            <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="ketikkan password anda sekali lagi"/>
          </div>

        </div>

        <div class="col-md-3 col-sm-3 col-xs-1">
          <!-- <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validation"></div>
          </div> -->
        </div>
      </div>

        <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-1">

        </div>
        <div class="col-md-6 col-sm-6 col-xs-10">
          <!-- Button -->
          <button type="submit" class="form contact-form-button light-form-button oswald light">Daftar</button>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-1">

        </div>
      </div>
      </form>

    </div>
  </div>
</section>
@endsection
