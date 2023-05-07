@extends('komponen/aplikasi')
<title>Change Password</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Change Password</h4><hr>
                <div class="form-group col-6">
                    <label for="password_lama">Password Lama</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group col-6">
                    <label for="password_baru">Password Baru</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group col-6">
                    <label for="konfirm_password_baru">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection