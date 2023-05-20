@extends('komponen/aplikasi')
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"> <a href="/wallet" class="btn btn-secondary"><<</a> &ensp; Edit Data Wallet</h4><hr>              
              @include('komponen/pesan')
              <form method="post" action="{{'/wallet/'.$data->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <h5 for="id">ID wallet : {{$data->id}}</h5>
                  </div>
                <div class="form-group col-8">
                  <label for="nama">Nama Wallet</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
                </div>
                @if ($data->logo)
                    <div class="mb-3">
                      <img style="max-width:50px;max-height:50px" src="{{url('wallet_logo').'/'.$data->logo}}"/>
                    </div>
                @endif
                <div class="form-group col-8">
                  <label for="logo">Logo</label>
                  <input type="file" class="form-control" id="logo" name="logo">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
            </div>
          </div>
      </div>
    </div>
</div>
@endsection