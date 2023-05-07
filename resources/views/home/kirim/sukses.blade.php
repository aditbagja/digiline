@extends('komponen/aplikasi')
<title>Berhasil</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Transaksi Berhasil<h2>
                <h4><small class="text-muted"></small>Rincian Transfer</h4><hr>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p>17 April 2023 - 16:08</p>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: right">OVO ID 085****3321</p>
                    </div>
                </div><hr>
                <div class="row">
                  <p>Pembayaran ke VA DANA ********12321</p></div>
                  <button type="button" class="btn btn-inverse-dark btn-fw mb-2">KIRIM SALDO</button>
                <div class="row mb-3">
                    <div class="col-md-6">
                      <p>Total Bayar</p>
                      <p>Biaya Admin</p>
                      <p>Nama Penerima</p>
                      <p>Rekening Tujuan</p>
                      <p>Metode Pembayaran</p>
                      <p>ID Transaksi</p>
                    </div>
                    <div class="col-md-6">
                      <p style="text-align: right">Rp. 100.500</p>
                      <p style="text-align: right">Rp. 500</p>
                      <p style="text-align: right">Samsul Rusmani</p>
                      <p style="text-align: right">DANA - 089999812321</p>
                      <p style="text-align: right">OVO</p>
                      <p style="text-align: right">0000000000000000001</p>
                    </div>
                  </div>
                <a href="/dashboard" type="button" class="btn btn-primary me-2">Selesai</a>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection