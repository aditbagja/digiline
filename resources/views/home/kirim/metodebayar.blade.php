@extends('komponen/aplikasi')
<title>Kirim Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body">
                <h2><a href="{{ url('/kirim/rinciantrf').'/'.$transaksi->id }}" class="btn btn-secondary"><<</a> &ensp; Metode Pembayaran<h2>
                <h3><small class="text-muted">Mau Bayar Lewat Apa ?</small></h3><hr>
                <form action="{{ $transaksi->id }}" method="post">
                @csrf
                @method('PUT')
                @foreach ($wallets as $wallet)
                <div class="mb-3 d-grid">
                  <button name="wallet" value="{{ $wallet->name }}" class="btn btn-outline-dark btn-fw" style="text-align: left"><img src="{{ url('wallet_logo'.'/'.$wallet->logo) }}" width="50" height="50"> {{$wallet->name}} </button> 
                </div>
                @endforeach
                </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection