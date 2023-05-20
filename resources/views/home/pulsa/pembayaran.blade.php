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
                @include('komponen/pesan')
                <form action="{{ url('pulsa/bayar') }}/{{ $transaksi->id }}" method="post">
                  @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                      <p>Jenis Pulsa</p>
                      <p>Nomor Telepon Tujuan</p>
                      <p>Total Harga</p>
                    </div>
                    <div class="col-md-6">
                      <p style="text-align: right">{{ $transaksi->keterangan }}</p>
                      <p style="text-align: right">{{ $transaksi->no_tujuan }}</p>
                      <p style="text-align: right">Rp. {{ number_format($transaksi->jumlah_harga) }}</p>
                    </div>
                      <p>Mau bayar pake apa ?</p>
                      <div class="col-4">
                      <select class="form-select mb-3" name="wallet" id="wallet">
                        @foreach ($wallets as $wallet)
                        <option value="{{ $wallet->name }}">{{ $wallet->name }}</option>                        
                        @endforeach
                      </select>
                    </div>
                </div>
                <div class="row">
                  <div class="col-2">
                    <button type="submit" class="btn btn-primary mr-3">Lanjut Bayar</button>
                  </div></form>
                  <div class="col">
                    <form onsubmit="return confirm('Apakah kamu yakin mau batal beli pulsa ?')" class='d-inline' action="{{$transaksi->id}}" method="post">
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
    </div>
    
  </div>
@endsection