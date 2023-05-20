@extends('komponen/aplikasi')
@section('konten')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"> <a href="/user" class="btn btn-secondary"><<</a> &ensp; Profile {{$data->name}}</h4><hr>
              <div class="card-body">
                <div class="row">
                  <h4>Avatar</h4>
                    <div class="col-4">
                        @if($data->avatar)
                            <img src="{{ url('avatar'.'/'.$data->avatar) }}" class="img-thumbnail mx-auto d-block">
                         @else
                            <img src="{{ url('images/profile.png') }}" class="img-thumbnail mx-auto d-block">
                        @endif
                    </div>
                      
                    <div class="col-6">
                        <h4>ID User : <span class="text-muted">{{ $data->id }}</span> </h4> 
                        <h4>Nama Lengkap : <span class="text-muted">{{ $data->name }}</span> </h4> 
                        <h4>Jenis Kelamin : <span class="text-muted">@if($data->jenis_kelamin == 'L')Laki - Laki @else Perempuan @endif</span> </h4>
                        <h4>Tanggal Lahir : <span class="text-muted">{{ $data->tanggal_lahir }}</span> </h4>
                        <h4>Email : <span class="text-muted">{{  $data->email }}</span> </h4>
                        <h4>No Telepon : <span class="text-muted">{{ $data->no_telp }}</span> </h4>
                        <h4>Saldo : <span class="currency text-muted">{{ $data->saldo }}</span> </h4>
                    </div>
                </div>
            </div>         
       </div>
    </div>
  </div>
</div>
@endsection