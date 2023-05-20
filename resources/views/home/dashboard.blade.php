@extends('komponen.aplikasi')
@section('konten')
<div class="main-panel">
    <div class="content-wrapper">
      <h2>Dashboard<h2><hr>
      @include('komponen.pesan')
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Riwayat Transaksi</h4>
              @foreach ($transaksi_details as $transaksi_detail)
              <div class="list align-items-center border-bottom py-2">
                <div class="wrapper w-100">
                  <p class="mb-2 font-weight-medium">{{ $transaksi_detail->jenis }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="mdi mdi-calendar text-muted me-1"></i>
                      <?php 
                      $timestamp = (strtotime($transaksi_detail->tanggal));
                      $date = date('d-m-Y', $timestamp);
                      $time = date('H:i:s', $timestamp);
                      ?>
                      <p class="mb-0 text-small text-muted">{{ $date }} - {{ $time }}</p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="list align-items-center pt-3">
                <div class="wrapper w-100">
                  <p class="mb-0">
                    <a href="/riwayat" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Activities</h4>
              <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FJakarta&showTitle=0&showNav=0&showDate=1&showPrint=0&showTabs=1&showTz=1&showCalendars=0&hl=id&src=YWRpdGJhZ2phNDRAZ21haWwuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=Y2xhc3Nyb29tMTA3OTg5NDMwNzE5ODY4NjUxNDU5QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTA4MDQxMzE4NTk2NzAzMzI3MzUyQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZmFtaWx5MTEwNjEzNjk0ODUwNDQwNDg0NjBAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=Y2xhc3Nyb29tMTEwOTcyNzg1NzkwMzA2OTM3MDk5QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=Y2xhc3Nyb29tMTAyNzY0OTQ1OTAzODE1MTU4Nzg3QGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&src=dXBpLmVkdV9jbGFzc3Jvb21iMDEwM2QyN0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%2333B679&color=%23202124&color=%230047a8&color=%230B8043&color=%23795548&color=%23c26401&color=%23202124&color=%23007b83" style="border-width:0" width="465" height="400" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
        </div>
      </div>
      <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
          <div class="card card-rounded">
            <div class="card-body">
              <div class="d-sm-flex justify-content-between align-items-start">
                <div>
                  <h4 class="card-title card-title-dash">Aktivitas Transaksimu</h4>
                 <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                </div>
              </div>
              <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                <div class="d-sm-flex align-items-center mt-4 justify-content-between"><h2 class="me-2 fw-bold">Rp.362.531</h2><h4 class="me-2">Rupiah</h4><h4 class="text-success">(+1.37%)</h4></div>
                <div class="me-3"><div id="marketing-overview-legend"></div></div>
              </div>
              <div class="chartjs-bar-wrapper mt-3">
                <canvas id="marketingOverview"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
@endsection
