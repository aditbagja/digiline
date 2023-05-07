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
                <h4><small class="text-muted">Rincian Transfer</small></h4><hr>
                <div class="row mb-3">
                    <div class="col-md-6">
                      <p>Nama Penerima</p>
                      <p>Nomor Rekening Tujuan</p>
                      <p>Jumlah Transfer</p>
                      <p>Saldo Digital Tujuan</p>
                      <p>Biaya Admin</p>
                      <p>Total Bayar</p>
                    </div>
                    <div class="col-md-6">
                      <p style="text-align: right">Samsul Rusmani</p>
                      <p style="text-align: right">089999812321</p>
                      <p style="text-align: right">Rp. 100.000</p>
                      <p style="text-align: right">DANA</p>
                      <p style="text-align: right">Rp. 500</p>
                      <p style="text-align: right">Rp. 100.500</p>
                    </div>
                  </div>
                <a href="/metodebayar" type="button" class="btn btn-primary me-2">Lanjut Bayar</a>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection