@extends('komponen/aplikasi')
<title>Topup Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body">
                <h2>Topup Saldo<h2>
                <h3><small class="text-muted">Mau isi saldo DigiLine kamu dengan cara apa ?</small></h3><hr>
                <p>E-Wallet</p>
                <div class="mb-3 d-grid ">
                    <a type="button" class="btn btn-outline-primary btn-fw" href="topup/dana" style="text-align: left"><img src="/images/DANA.png" width="50" height="50"> DANA</a>
                </div>
                <div class="mb-3 d-grid">
                    <a type="button" class="btn btn-outline-success btn-fw" href="topup/gopay" style="text-align: left"><img src="/images/Gopay.png" width="50" height="50"> Gopay</a>
                </div>
                <div class="mb-3 d-grid ">
                    <a type="button" class="btn btn-outline-dark btn-fw" href="topup/ovo" style="text-align: left"><img src="/images/OVO.png" width="50" height="50"> OVO</a>
                </div>
                <div class="mb-3 d-grid">
                    <a type="button" class="btn btn-outline-danger btn-fw" href="topup/shopeepay" style="text-align: left"><img src="/images/Shopeepay.png" width="50" height="50"> ShopeePay</a>
                </div>
                <p>Transfer Bank</p>
                <div class="mb-3 d-grid ">
                    <a type="button" class="btn btn-outline-primary btn-fw" href="topup/bri" style="text-align: left"><img src="/images/bri.png" width="70" height="50">BANK BRI</a>
                </div>
                <div class="mb-3 d-grid">
                    <a type="button" class="btn btn-outline-primary btn-fw" href="topup/mandiri" style="text-align: left"><img src="/images/mandiri.png" width="70" height="50">BANK Mandiri</a>
                </div>
                <div class="mb-3 d-grid">
                  <button class="accordion">Tampilkan Bank Lainnya</button>
                  <div class="panel">
                    <div class="mb-1 d-grid"><a type="button" class="btn btn-outline-primary btn-fw" href="topup/bca" style="text-align: left"><img src="/images/bca.png" width="70" height="50">BANK BCA</a></div>
                    <div class="mb-1 d-grid"><a type="button" class="btn btn-outline-danger btn-fw" href="topup/bni" style="text-align: left"><img src="/images/bni.png" width="70" height="50">BANK BNI</a></div>
                    <div class="d-grid"><a type="button" class="btn btn-outline-primary btn-fw" href="topup/other" style="text-align: left"><img src="/images/other.png" width="70" height="50">BANK lainnya</a></div>
                  </div>
                </div>
                <p>Agen</p>
                <div class="mb-3 d-grid ">
                <a type="button" class="btn btn-outline-primary btn-fw" href="topup/agen" style="text-align: left"><img src="/images/merchant.png" width="70" height="50">Alfamart/Indomaret</a>
                </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection