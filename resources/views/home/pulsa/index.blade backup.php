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
                  <div class="form-group col-4">
                    <label for="no_telp">Nomor Telepon</label>
                  <form action="/pulsa/pesanan" method="post">
                    @csrf
                    <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required>
                  </div>
                    <div class="form-group col-4">
                      <label>Pulsa</label>
                        <select class="form-select">
                          @foreach ($pulsas as $pulsa)
                          <option value="{{$pulsa->id}}">Pulsa {{$pulsa->varian}} - Rp. {{number_format($pulsa->harga)}}</option>
                          @endforeach
                        </select>
                          {{-- <div class="container d-flex justify-content-between ">
                            @foreach ($data as $item)
                            <button  type="submit" class="btn btn-outline-secondary">
                              <p style="color: black">{{$item->varian}}</p>
                              <p style="color:chocolate">Rp. {{number_format($item->harga)}}</p>
                            </button>
                            @endforeach
                          </div> --}}
                        <button type="submit" class="btn btn-primary mt-3">Pesan</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection