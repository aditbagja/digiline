@extends('komponen/aplikasi')
<title>Kirim Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Kirim Saldo {{ $transaksi->wallet_tujuan }}<h2>
                <h4><small class="text-muted">Rincian Transfer</small></h4><hr>
                @include('komponen.pesan')
                <div class="row mb-3">
                    <div class="col-md-6">
                      <p>Nama Penerima</p>
                      <p>Nomor Rekening Tujuan</p>
                      <p>Jumlah Transfer</p>
                      <p>Saldo Digital Tujuan</p>
                      <p>Biaya Admin</p>
                      <p>Total Bayar</p>
                    </div>
                    <?php
                    $target = $transaksi->nama_penerima ;
                    $count = strlen($target) - 4;
                    $output = substr_replace($target, str_repeat('X', $count), 7, $count);
                    ?>
                    <div class="col-md-6">
                      <p style="text-align: right;text-transform:uppercase" >{{ $output }}</p>
                      <p style="text-align: right">{{ $transaksi->no_tujuan }}</p>
                      <p style="text-align: right">Rp. {{ number_format($transaksi->harga) }}</p>
                      <p style="text-align: right">{{ $transaksi->wallet_tujuan }}</p>
                      <p style="text-align: right">Rp. 500</p>
                      <p style="text-align: right">Rp. {{ number_format($transaksi->jumlah_harga) }}</p>
                    </div>
                      
                  </div>
                  <a href="{{ 'pembayaran/'.$transaksi->id }}" class="btn btn-primary me-2">Lanjut Bayar</a>
                  <form onsubmit="return confirm('Apakah kamu yakin mau batal kirim saldo ?')" class='d-inline' action="{{$transaksi->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Batal</button>
                  </form>
                      
                   
                    
                      
                    
                  
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection