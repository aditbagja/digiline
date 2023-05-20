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
                <?php 
                  $timestamp = (strtotime($transaksi_detail->tanggal));
                  $date = date('d-m-Y', $timestamp);
                  $time = date('H:i:s', $timestamp);
                ?>
                <p>{{ $date }} - {{ $time }}</p><hr>
                <div class="row">
                    <p>{{ $transaksi_detail->keterangan }} - {{ $transaksi_detail->no_tujuan }}</p></div>
                    <button type="button" class="btn btn-inverse-dark btn-fw mb-2">{{ $transaksi_detail->jenis }}</button>
                    <div class="row mb-3">
                    <div class="col-md-6">
                      <p>Total Bayar</p>
                      <p>Metode Pembayaran</p>
                      <p>No. Telepon Tujuan</p>
                      <p>ID Transaksi</p>
                    </div>
                    <div class="col-md-6">
                      <p style="text-align: right">Rp. {{ number_format($transaksi_detail->jumlah_harga) }}</p>
                      <p style="text-align: right">{{ $transaksi_detail->pembayaran }}</p>
                      <p style="text-align: right">{{ $transaksi_detail->no_tujuan }}</p>
                      <p style="text-align: right">{{ @$transaksi_detail->transaksi->id }}</p>
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