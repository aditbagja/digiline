<title>Login</title>
@extends('komponen/header')

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto mb-3 mt-3">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
    <strong>{{ $message }}</strong>
        </div>
    @endif
        <h1 style="text-align:center;">Welcome</h1>
        <p style="text-align:center;">Silahkan Login untuk melanjutkan</p>
        <form action="/auth/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="from-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control @error('email') is-invalid @enderror">
            </div>
            <div class="mb-3">
                <label for="password" class="from-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label text-muted remember">
                  <input type="checkbox" class="form-check-input" name="remember" id="remember" value="1">
                  Remember me
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
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
