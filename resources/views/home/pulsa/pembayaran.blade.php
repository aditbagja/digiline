@extends('komponen/aplikasi')
<title>Beli Pulsa</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Konfirmasi Pembayaran<h2>
                <h4><small class="text-muted">Rincian Tagihan</small></h4><hr>
                <div class="row mb-3">
                    <div class="col-md-6">
                      <p>Jenis Pulsa</p>
                      <p>Nomor Telepon Tujuan</p>
                      <p>Total Harga</p>
                    </div>
                    <div class="col-md-6">
                      <p style="text-align: right">Pulsa TELKOMSEL 5000</p>
                      <p style="text-align: right">081321123321</p>
                      <p style="text-align: right">Rp. 5.500</p>
                    </div>
                    <div class="container">
                      <select>
                        <option value="1">Saldo DigiLine</option>
                        <option value="2">DANA</option>
                        <option value="3">Gopay</option>
                        <option value="4">OVO</option>
                        <option value="5">ShopeePay</option>
                      </select>
                    </div>
                </div>
                <a href="/rincian" type="button" class="btn btn-primary me-2">Lanjut Bayar</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection