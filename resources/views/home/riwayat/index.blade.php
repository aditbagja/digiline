@extends('komponen/aplikasi')
<title>Riwayat Transaksi</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body mb-3">
                <h2>Riwayat Transaksi<h2><hr>
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="sukses-tab" data-bs-toggle="tab" data-bs-target="#sukses" type="button" role="tab" aria-controls="sukses" aria-selected="true">Sukses</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#berlangsung" type="button" role="tab" aria-controls="berlangsung" aria-selected="false">Berlangsung</button>
                    </li>
                  </ul>
                  <div class="tab-content mb-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="sukses" role="tabpanel" aria-labelledby="sukses-tab" style="background-color: white">
                      @foreach ($transaksi_detail as $transaksi_detail)
                      @if(auth()->user()->id == @$transaksi_detail->transaksi->user_id && @$transaksi_detail->transaksi->status == "1")
                      <div class="container d-grid mb-3">
                        <a @if($transaksi_detail->jenis == "KIRIM SALDO") href="{{ ('/kirim/detail/').$transaksi_detail->id }}" 
                          @elseif($transaksi_detail->jenis == "BELI PULSA") href="{{ ('/pulsa/rincian/').$transaksi_detail->id }}" @endif type="button" class="btn btn-outline-primary btn-fw" style="text-align: left">
                        <div class="row">
                          <div class="col-sm-2">
                            <img src="@if(@$transaksi_detail->transaksi->jenis == "KIRIM SALDO") {{ url('images/cash-multiple.svg') }}
                             @elseif(@$transaksi_detail->transaksi->jenis == "BELI PULSA") {{ url('images/cellphone.svg') }} @endif" width="70" height="50"></div>
                              <?php 
                              $timestamp = (strtotime($transaksi_detail->tanggal));
                              $date = date('d-m-Y', $timestamp);
                              $time = date('H:i:s', $timestamp);
                              ?>
                          <div class="col align-self-center"> {{ $transaksi_detail->jenis }} <br> {{ $date }} - {{ $time }}</div>
                          <div class="col align-self-center" style="text-align: right">Rp. {{ number_format($transaksi_detail->jumlah_harga) }}</div>
                        </div></a>
                    </div>
                    @endif
                    @endforeach
                    </div>

                    <div class="tab-pane fade" id="berlangsung" role="tabpanel" aria-labelledby="berlangsung-tab" style="background-color: white">
                      @foreach ($transaksis as $transaksi)
                      @if(auth()->user()->id == $transaksi->user_id && $transaksi->status == "0")
                      <div class="container d-grid mb-3">
                        <a 
                        @if($transaksi->harga == "0" && $transaksi->jenis == "KIRIM SALDO") href="{{ ('/kirim/jumlah/').$transaksi->id }}"
                        @elseif($transaksi->jenis == "KIRIM SALDO") href="{{ ('/kirim/rinciantrf/').$transaksi->id }}" 
                        @elseif($transaksi->jenis == "BELI PULSA") href="{{ ('/pulsa/bayar/').$transaksi->id }}" 
                        @endif type="button" class="btn btn-outline-primary btn-fw" style="text-align: left">
                        <div class="row">
                          <div class="col-sm-2">
                            <img src="@if($transaksi->jenis == "KIRIM SALDO") {{ url('/images/cash-multiple.svg') }}
                             @elseif($transaksi->jenis == "BELI PULSA") {{ url('/images/cellphone.svg') }} @endif" width="70" height="50"></div>
                              <?php 
                              $timestamp = (strtotime($transaksi->tanggal));
                              $date = date('d-m-Y', $timestamp);
                              $time = date('H:i:s', $timestamp);
                              ?>
                          <div class="col align-self-center"> {{ $transaksi->jenis }} <br> {{ $date }} - {{ $time }}</div>
                          <div class="col align-self-center" style="text-align: right">Rp. {{ number_format($transaksi->jumlah_harga) }}</div>
                        </div></a>
                    </div>
                    @endif
                    @endforeach
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