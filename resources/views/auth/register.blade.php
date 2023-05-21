@extends('komponen/header')
<title>Register</title>
@section('konten')
    <div class="w-50 center border rounded px-3 mt-3 py-3 mx-auto mb-3">
        <h1 style="text-align: center">Register</h1>
        <p style="text-align:center;">Silahkan isi form berikut untuk melanjutkan</p>
        @include('komponen.pesan')
        <form action="/auth/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="from-label">Nama Lengkap</label>
                <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="email" class="from-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="no_telp" class="from-label">No. Telepon</label>
                <input type="number" value="{{ Session::get('no_telp') }}" name="no_telp" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="from-label">Password</label>
                <input type="password" name="password" class="form-control" >
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label text-muted">
                  <input type="checkbox" class="form-check-input" required>
                  Saya setuju dengan ketentuan yang berlaku
                <i class="input-helper"></i></label>
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </form>
    </div>
        
@endsection
