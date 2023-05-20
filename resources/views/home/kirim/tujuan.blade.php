@extends('komponen/aplikasi')
<title>Kirim Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Kirim Saldo {{$wallet->name}}<h2>
                <h4><small class="text-muted">Masukan Nomor Tujuan Kamu</small></h4><hr>
                @include('komponen.pesan')
                <div class="form-group col-4">
                    <label for="no_tujuan">Nomor Tujuan</label>
                    <form action="{{ '/kirim'.'/'.$wallet->id }}" method="post">
                      @csrf
                      <input type="number" class="form-control" name="no_tujuan" id="no_tujuan" placeholder="Nomor Tujuan">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Lanjutkan</button>
                    </form>
                <a href="/kirim" class="btn btn-danger">Batal</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection