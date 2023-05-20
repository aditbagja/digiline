@extends('komponen/aplikasi')
<title>Beli Pulsa</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body">
                <h2>Beli Pulsa<h2>
                <h3><small class="text-muted">Silahkan Pilih Pulsa yang kamu mau</small></h3><hr>
                <div class="container mb-5 mt-5">
                    <div class="container d-flex justify-content-between">
                        @foreach ($pulsas as $pulsa)
                        <a href="{{ url('pulsa') }}/{{ $pulsa->id }}" class="btn btn-outline-secondary">
                          <p style="color: black">{{$pulsa->varian}}</p>
                          <p style="color:chocolate">Rp. {{number_format($pulsa->harga)}}</p>
                        </a>
                        @endforeach
                    </div>
                </div>
                    
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection