@extends('komponen/aplikasi')
<title>Topup Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>GoPay<h2>
                <h4><small class="text-muted">Saya akan topup saldo menggunakan Gopay</small></h4><hr>
                <div class="container d-grid mb-3">
                    <button type="button" class="btn btn-outline-info btn-fw" style="text-align: left">
                    <div class="row">
                      <div class="col align-self-center">
                        <img src="/assets/img/images/gopay.png" width="50" height="50"> Gopay
                      </div>
                      <div class="col align-self-center" style="text-align: right">
                        <a href="/topup" style="text-decoration: none;">Ganti &#10093;</a>
                      </div>
                    </div>
                </div>
                <div class="mb-3" style="text-align: center">
                    <h2>Nomor Virtual Akun Gopay</h2>
                    <h1 class="text-danger">9999 0855 5512 3321</h1>
                    <button type="button" class="btn btn-primary btn-fw mb-2">SALIN KODE</button>
                    <h4>Nama akun : RUSDI</h4>
                    <h4>Ikuti instruksi pembayaran di bawah ini :</h4>
                </div>
                <div class="mb-3">
                  <button class="accordion">Gojek Apps</button>
                  <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <button class="accordion">Syarat dan Ketentuan Biaya</button>
                <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection