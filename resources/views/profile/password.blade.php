@extends('komponen/aplikasi')
<title>Change Password</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title"><a href="/profile" class="btn btn-secondary"><<</a> &ensp; Change Password</h4><hr>
              @if(session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ session('status') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
              <form method="POST" action="{{ route('profile.changepassword', $user->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="form-group col-4">
                    <label for="password_lama">Password Lama</label>
                    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password">
                    @error('old_password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group col-4">
                    <label for="password_baru">Password Baru</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group col-4">
                    <label for="konfirm_password_baru">Konfirmasi Password Baru</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection