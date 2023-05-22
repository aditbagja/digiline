@extends('komponen/aplikasi')
<title>Detail User</title>
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
                    <div class="col-1">
                      <table class="table table-borderless">
                        <tr>
                          <td><h5>ID User</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>{{ $data->id }}</h5></td>
                        </tr>
                        <tr>
                          <td><h5>Nama Lengkap</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>{{ $data->name }}</h5></td>
                        </tr>
                        <tr>
                          <td><h5>Jenis Kelamin</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>@if($data->jenis_kelamin == 'L')Laki - Laki @else Perempuan @endif</h5></td>
                        </tr>
                        <tr>
                          <td><h5>Tanggal Lahir</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>{{ $data->tanggal_lahir }}</h5></td>
                        </tr>
                        <tr>
                          <td><h5>Email</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>{{ $data->email }}</h5></td>
                        </tr>
                        <tr>
                          <td><h5>No. Telepon</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>{{  $data->no_telp }}</h5></td>
                        </tr>
                        <tr>
                          <td><h5>Saldo</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>Rp. {{ number_format($data->saldo) }}</h5></td>
                        </tr>
                        <tr>
                          <td><h5>Status</h5></td>
                          <td><h5>:</h5></td>
                          <td><h5>@if($data->is_admin == "1")Admin @else User @endif</h5></td>
                        </tr>
                      </table>
                    </div>
                </div>
            </div>         
       </div>
    </div>
  </div>
</div>
@endsection