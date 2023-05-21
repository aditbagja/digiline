@extends('komponen/aplikasi')
<title>Beli Pulsa</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Beli Pulsa {{$pulsa->varian}}<h2>
                <h4><small class="text-muted">Masukan Nomor Telepon Kamu</small></h4><hr>
                @include('komponen.pesan')
                <div class="form-group col-4">
                  <label for="no_telp">Nomor Telepon</label>
                  <form action="{{ url('pulsa') }}/{{ $pulsa->id }}" method="post">
                    @csrf
                    <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor Telepon">
                </div>
                <button type="submit" class="btn btn-primary me-2">Lanjutkan</button>
              </form>
                <a href="/pulsa" class="btn btn-danger">Batal</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection