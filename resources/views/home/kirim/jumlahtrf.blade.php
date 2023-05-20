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
                <h4><small class="text-muted">Masukan Jumlah Transfer yang kamu mau</small></h4><hr>
                @include('komponen/pesan')
                <div class="mb-3">
                    <label>Nomor Tujuan</label>
                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-outline-success btn-fw">{{ $transaksi->wallet_tujuan }} - {{ $transaksi->no_tujuan }}</button>
                </div>
                <form action="{{ $transaksi->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-3 col-3">
                    <label for="jumlah">Jumlah Transfer (*minimum 10.000)</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah Transfer">
                </div>
                <div class="row">
                  <div class="col-2">
                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
                  </div></form>
                  <div class="col">
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
    </div>
    
  </div>
@endsection