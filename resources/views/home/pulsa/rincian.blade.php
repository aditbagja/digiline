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
                <h4><small class="text-muted"></small>Rincian Transaksi</h4><hr>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p>19 April 2023 - 14:26</p>
                    </div>
                    <div class="col-md-6">
                        <p style="text-align: right">DIGILINE ID 081*****3321</p>
                    </div>
                </div><hr>
                <div class="row">
                    <p>PULSA TELKOMSEL 5.000 081321123321</p></div>
                    <button type="button" class="btn btn-inverse-dark btn-fw mb-2">BELI PULSA</button>
                    <div class="row mb-3">
                    <div class="col-md-6">
                      <p>Total Bayar</p>
                      <p>Metode Pembayaran</p>
                      <p>No. Telepon Tujuan</p>
                      <p>ID Transaksi</p>
                    </div>
                    <div class="col-md-6">
                      <p style="text-align: right">Rp. 5.500</p>
                      <p style="text-align: right">Saldo DigiLine</p>
                      <p style="text-align: right">081321123321</p>
                      <p style="text-align: right">0000000000000000002</p>
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