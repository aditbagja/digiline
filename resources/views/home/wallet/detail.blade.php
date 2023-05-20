@extends('komponen/aplikasi')
@section('konten')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> <a href="/wallet" class="btn btn-secondary"><<</a> &ensp; Data {{$data->name}}</h4><hr>
              <div class="card-body">
                <div class="row">
                  <h4>Logo</h4>
                    <div class="col-4">
                        @if($data->logo)
                            <img src="{{ url('wallet_logo'.'/'.$data->logo) }}" class="img-thumbnail mx-auto d-block">
                        @endif
                    </div>
                    <div class="col-6">
                        <h4>ID Wallet : <span class="text-muted">{{ $data->id }}</span> </h4> 
                        <h4>Nama Wallet : <span class="text-muted">{{ $data->name }}</span> </h4> 
                    </div>
                </div>
            </div>         
       </div>
    </div>
  </div>
</div>
@endsection