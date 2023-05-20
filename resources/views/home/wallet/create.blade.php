@extends('komponen/aplikasi')
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> <a href="/wallet" class="btn btn-secondary"><<</a> &ensp; Tambah Wallet Baru</h4><hr>              
              @include('komponen/pesan')
              <form method="post" action="/wallet" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-8">
                  <label for="nama">Nama Wallet</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ Session::get('name')}}">
                </div>
                <div class="form-group col-8">
                  <label for="avatar">Logo</label>
                  <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection