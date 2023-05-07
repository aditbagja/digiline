@extends('komponen/aplikasi')
<title>Kirim Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Kirim Saldo (nama wallet)<h2>
                <h4><small class="text-muted">Masukan Jumlah Transfer yang kamu mau</small></h4><hr>
                <div class="mb-3">
                    <label>Nomor Tujuan</label>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-outline-success btn-fw">Samsul Rusmani - 089999812321</button>
                </div>
                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah Transfer</label>
                    <input type="number" class="form-control" id="jumlah" placeholder="Jumlah Transfer">
                </div>
                <a href="/rinciantrf" type="button" class="btn btn-primary me-2">Lanjutkan</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection