@extends('komponen/aplikasi')
<title>Kirim Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body">
                <h2>Kirim Saldo<h2>
                <h3><small class="text-muted">Pilih Saldo Digital Tujuan Kamu</small></h3><hr>
                @foreach ($wallets as $wallet)
                <div class="mb-3 d-grid ">
                  <a type="button" class="btn btn-outline-dark btn-fw" href="{{ url('/kirim/'.$wallet->id)}}" style="text-align: left"><img src="{{ url('wallet_logo'.'/'.$wallet->logo) }}" width="50" height="50"> {{$wallet->name}}</a>
                </div>
                @endforeach
                  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection