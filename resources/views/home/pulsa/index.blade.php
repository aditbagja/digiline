@extends('komponen/aplikasi')
<title>Beli Pulsa</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body">
                <h2>Beli Pulsa<h2><hr>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="number" class="form-control" id="no_telp" placeholder="Nomor Telepon" maxlength="4" size="4">
                    </div>
                    <div class="form-group">
                        <label>Pulsa</label>
                    <div class="container d-flex justify-content-between ">
                        <a href="/pembayaran" type="button" class="btn btn-outline-secondary">
                            <p style="color: black">5.000</p>
                            <p style="color:chocolate">Rp. 5.500</p>
                        </a>
                        <button type="button" class="btn btn-outline-secondary">
                            <p style="color: black">10.000</p>
                            <p style="color:chocolate">Rp. 10.500</p>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <p style="color: black">20.000</p>
                            <p style="color:chocolate">Rp. 20.500</p>
                        </button>
                      </div>
                      <div class="container d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-outline-secondary">
                            <p style="color: black">30.000</p>
                            <p style="color:chocolate">Rp. 30.500</p>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <p style="color: black">40.000</p>
                            <p style="color:chocolate">Rp. 40.500</p>
                        </button>
                        <button type="button" class="btn btn-outline-secondary">
                            <p style="color: black">50.000</p>
                            <p style="color:chocolate">Rp. 50.500</p>
                        </button>
                      </div>
                    </div>
                    
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection