@extends('komponen/aplikasi')
<title>Topup Saldo</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Riwayat Transaksi<h2><hr>
                <div class="container d-grid mb-3">
                    <a href="/sukses" type="button" class="btn btn-outline-primary btn-fw" style="text-align: left">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="/assets/img/images/cash-multiple.svg" width="70" height="50"></div>
                      <div class="col align-self-center"> Kirim Saldo <br> 17 April 2023 - 16:08
                      </div>
                      <div class="col align-self-center" style="text-align: right">Rp. 100.000</div>
                    </div></a>
                </div>
                <div class="container d-grid mb-3">
                  <a href="/rincian" type="button" class="btn btn-outline-primary btn-fw" style="text-align: left">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="/assets/img/images/cellphone.svg" width="70" height="50"></div>
                    <div class="col align-self-center"> Beli Pulsa <br> 19 April 2023 - 14:26
                    </div>
                    <div class="col align-self-center" style="text-align: right">Rp. 5.500</div>
                  </div></a>
              </div>
              <div class="container d-grid mb-3">
                <a type="button" class="btn btn-outline-primary btn-fw" style="text-align: left">
                <div class="row">
                  <div class="col-sm-2">
                    <img src="/assets/img/images/plus-circle-outline.svg" width="70" height="50"></div>
                  <div class="col align-self-center"> Topup Saldo <br> 19 April 2023 - 16:47
                  </div>
                  <div class="col align-self-center" style="text-align: right">Rp. 200.000</div>
                </div></a>
            </div>
            <div class="container">
              <div class="row">
                <div class="col" style="text-align: right">
                  <button class="btn btn-outline-primary"><img src="/assets/img/images/sort.svg" width="70" height="50">Urutkan</button>
                </div>
                <div class="col">
                  <button class="btn btn-outline-primary"><img src="/assets/img/images/filter-variant.svg" width="70" height="50">Filter</button>
                </div>
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