<title>Login</title>
@extends('komponen/header')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto mb-3 mt-3">
    @include('komponen/pesan')
        <h1 style="text-align:center;">Welcome</h1>
        <p style="text-align:center;">Silahkan Login untuk melanjutkan</p>
        <form action="/auth/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="from-label">Email</label>
                <input type="email" value="{{Cookie::get('useremail')}}" name="email" class="form-control @error('email') is-invalid @enderror" @if(Cookie::has('useremail')) @endif>
            </div>
            <div class="mb-3">
                <label for="password" class="from-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" @if(Cookie::has('userpassword')) @endif value="{{Cookie::get('userpassword')}}">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label text-muted remember">
                  <input type="checkbox" @if(Cookie::has('useremail')) checked @endif class="form-check-input" name="remember" id="remember" value="1">
                  Remember me
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        
        <p style="text-align:center;">Login dengan Akun Sosial Media</p>
        <div class="container row justify-content-center">
            <div class="col-5">
                <button class="loginBtn loginBtn--facebook">
                    Login with Facebook
                  </button>
            </div>
            <div class="col-4">
                <button class="loginBtn loginBtn--google">
                    Login with Google
                  </button>
            </div>
          </div>
          <hr>
          <label for="register">Belum punya akun ? <a href="/register">Daftar Disini</a></label>
    </div>
    
@endsection
