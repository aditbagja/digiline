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
              <form class="forms-sample" method="post" action="/profile" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label for="nama">Avatar</label>
                  <div class="row">
                    <div class="col-2">
                        <img alt="image" src="images/faces/face7.jpg" height="100" width="100" class="rounded-circle profile-widget-picture">
                    </div>
                    <div class="col">
                        <form>
                            <div class="form-group">
                              <input type="file" class="form-control-file" id="avatar" name="avatar">
                            </div>
                        </form>
                    </div>
                  </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="col-1"></div>
                    <div class="form-group col">
                        <label for="nama">Ubah Password ?</label><br>
                        <a href="/password" class="btn btn-primary me-2" type="button">Ubah Password</a>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="nama">Jenis Kelamin</label>
                    <div class="row">
                         <div class="col-2">
                            <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin" {{Auth::user()->jenis_kelamin == 'L'? 'checked' : ''}} >
                            <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="col">
                            <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin" {{Auth::user()->jenis_kelamin == 'P'? 'checked' : ''}} >
                            <label class="form-check-label">Perempuan</label>
                        </div> 
                        
                    </div>
                </div>
                <div class="form-group col-6">
                  <label for="tanggal_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal Lahir" value="{{Auth::user()->tanggal_lahir}}">
                </div>
                <div class="form-group col-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" value="{{Auth::user()->email}}">
                </div>
                <div class="form-group col-6">
                    <label for="no_telp">No. Telepon</label>
                    <input type="number" class="form-control" id="no_telp" value="{{Auth::user()->no_telp}}">
                </div>
                
                
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
@endsection