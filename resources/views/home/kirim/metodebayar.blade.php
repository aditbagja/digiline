@extends('komponen/aplikasi')
<title>Kirim Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body">
                <h2>Metode Pembayaran<h2>
                <h3><small class="text-muted">Mau Bayar Lewat Apa ?</small></h3><hr>
                <div class="mb-3 d-grid">
                    <a type="button" class="btn btn-outline-primary btn-fw" href="/sukses" style="text-align: left"><img src="/assets/img/images/DANA.png" width="50" height="50"> DANA</a>
                </div>
                <div class="mb-3 d-grid">
                    <a type="button" class="btn btn-outline-success btn-fw" href="/sukses" style="text-align: left"><img src="/assets/img/images/Gopay.png" width="50" height="50"> Gopay</a>
                </div>
                <div class="mb-3 d-grid ">
                    <a type="button" class="btn btn-outline-dark btn-fw" href="/sukses" style="text-align: left"><img src="/assets/img/images/OVO.png" width="50" height="50"> OVO</a>
                </div>
                <div class="mb-3 d-grid">
                    <a type="button" class="btn btn-outline-danger btn-fw" href="/sukses" style="text-align: left"><img src="/assets/img/images/Shopeepay.png" width="50" height="50"> ShopeePay</a>
                </div>
                <div class="mb-3 d-grid">
                    <a type="button" class="btn btn-outline-primary btn-fw" href="/sukses" style="text-align: left"><img src="/assets/img/images/digiline.png" width="50" height="50"> DigiLine</a>
                </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection