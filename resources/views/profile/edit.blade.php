@extends('komponen/aplikasi')
<title>Profile Settings</title>
@section('konten')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Profile Settings</h4><hr>
              <div class="card-body">
                  @if(session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('status') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <div class="row">
                      <div class="col-4">
                        <label for="avatar" class="mb-3">Avatar</label>
                          @if($user->avatar)
                              <img src="{{ url('avatar'.'/'.$user->avatar) }}" class="img-thumbnail mx-auto d-block">
                          @else
                              <img src="{{ url('images/profile.png') }}" class="img-thumbnail mx-auto d-block">
                          @endif
                      </div>
                  <div class="col-md-8">
                      <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                      @method('PATCH')
                      @csrf
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="name">Nama Lengkap</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" autocomplete="name">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                      </div>
                      <div class="col-1"></div>
                        <div class="form-group col">
                            <label for="nama">Ubah Password ?</label><br>
                            <a href="{{ route('profile.password') }}" class="btn btn-primary me-2" type="button">Ubah Password</a>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="nama">Jenis Kelamin</label>
                        <div class="row">
                          <div class="col-2">
                            <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin" {{ $user->jenis_kelamin  == 'L'? 'checked' : ''}} >
                            <label class="form-check-label">Laki-Laki</label>
                          </div>
                          <div class="col">
                            <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin" {{ $user->jenis_kelamin == 'P'? 'checked' : ''}} >
                            <label class="form-check-label">Perempuan</label>
                          </div>
                        </div>
                      </div> 
                      
                      <div class="form-group col-6">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}" required autocomplete="tanggal_lahir">
                      </div> 

                      <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{  $user->email }}" autocomplete="email">
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                          @enderror
                      </div>

                      <div class="form-group col-6">
                        <label for="no_telp">No. Telepon</label>
                        <input id="no_telp" type="number" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" autocomplete="no_telp">
                        @error('no_telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

                      <div class="form-group col-6">
                        <label for="avatar">Change Avatar</label>
                        <input id="avatar" type="file" class="form-control" name="avatar">
                      </div>

                      <div class="form-group col-6">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                        </form>
                        
                      </div>
                  </div>
              </div>
          </div>
        </div>         
       </div>
    </div>
  </div>
</div>
 
@endsection