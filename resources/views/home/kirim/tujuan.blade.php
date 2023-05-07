@extends('komponen/aplikasi')
<title>Kirim Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Kirim Saldo (nama wallet)<h2>
                <h4><small class="text-muted">Masukan Nomor Tujuan Kamu</small></h4><hr>
                <div class="form-group">
                    <label for="no_tujuan">Nomor Tujuan</label>
                    <input type="number" class="form-control" id="no_tujuan" placeholder="Nomor Tujuan">
                </div>
                <a href="/jumlahtrf" type="button" class="btn btn-primary me-2">Lanjutkan</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection