@extends('komponen/aplikasi')
<title>Tambah User Baru</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> <a href="/user" class="btn btn-secondary"><<</a> &ensp; Tambah User Baru</h4><hr>              @include('komponen/pesan')
              <form method="post" action="/user" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-8">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="name" value="{{ Session::get('name')}}">
                </div>
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin</label>
                    <div class="row">
                      <div class="col-2">
                        <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin">
                        <label class="form-check-label">Laki-Laki</label>
                      </div>
                      <div class="col">
                        <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin">
                        <label class="form-check-label">Perempuan</label>
                      </div>
                    </div>
                </div> 
                <div class="form-group col-8">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ Session::get('email')}}">
                </div>
                <div class="form-group col-8">
                  <label for="no_telp">No. Telepon</label>
                  <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{ Session::get('no_telp')}}">
                </div>
                <div class="form-group col-8">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ Session::get('tanggal_lahir')}}">
                </div>
                <div class="form-group col-8">
                  <label for="avatar">Avatar</label>
                  <input type="file" class="form-control" id="avatar" name="avatar">
                </div>
                <div class="form-group col-8">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group col-8">
                    <label for="konfirm_password">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection