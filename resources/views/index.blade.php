<title>DigiLine</title>
@extends('komponen/header')
@section('konten')
<section id="hero" class="d-flex justify-cntent-center align-items-center mb-3">
    <div id="heroCarousel" class="container carousel carousel-fade " data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to DigiLine</h2>
          <p class="animate__animated animate__fadeInUp">Solusi Transfer antar E-Wallet yang Mudah dan Terpercaya</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Beli Pulsa Aman</h2>
          <p class="animate__animated animate__fadeInUp">Kamu juga bisa beli pulsa disini dengan Aman dan Nyaman serta Terjangkau</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section>

@endsection