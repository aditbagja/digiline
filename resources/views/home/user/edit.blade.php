@extends('komponen/aplikasi')
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> <a href="/user" class="btn btn-secondary"><<</a> &ensp; Edit User</h4><hr>
              @include('komponen/pesan')
              <form method="post" action="{{'/user/'.$data->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <h5 for="id">ID User : {{$data->id}}</h5>
                </div>
                <div class="form-group col-8">
                  <label for="nama">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin</label>
                    <div class="row">
                      <div class="col-2">
                        <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin" {{ $data->jenis_kelamin  == 'L'? 'checked' : ''}}>
                        <label class="form-check-label">Laki-Laki</label>
                      </div>
                      <div class="col">
                        <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin" {{ $data->jenis_kelamin  == 'P'? 'checked' : ''}}>
                        <label class="form-check-label">Perempuan</label>
                      </div>
                    </div>
                </div> 
                <div class="form-group col-8">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                </div>
                <div class="form-group col-8">
                  <label for="no_telp">No. Telepon</label>
                  <input type="number" class="form-control" id="no_telp" name="no_telp" value="{{$data->no_telp}}">
                </div>
                <div class="form-group col-8">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                </div>
                @if ($data->avatar)
                    <div class="mb-3">
                      <img style="max-width:50px;max-height:50px" src="{{url('avatar').'/'.$data->avatar}}"/>
                    </div>
                @endif
                <div class="form-group col-8">
                  <label for="avatar">Avatar</label>
                  <input type="file" class="form-control" id="avatar" name="avatar">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection