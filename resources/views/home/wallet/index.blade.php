@extends('komponen.aplikasi')
<title>Wallet List</title>
@section('konten')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin"> 
          <div class="card">
            <div class="card-body">
                <h4>Wallet List<h4><hr>
                  @include('komponen/pesan')
                  <a href="/wallet/create" class="btn btn-primary mb-3">+ Tambah Data Wallet</a>
                    <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Logo</th>
                              <th>Nama Wallet</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $item)
                        <tr>
                          <td>{{$item->id}}</td>
                          <td>@if($item->logo)
                            <img src="{{ url('wallet_logo'.'/'.$item->logo) }}" class="mx-auto d-block">
                              @endif</td>
                          <td>{{$item->name}}</td>
                          <td><a href="{{ url('/wallet/'.$item->id)}}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ url('/wallet/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Apakah anda yakin mau hapus data ?')" class='d-inline' action="{{'/wallet/'.$item->id}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                        </tr>
                      </tbody>
                      @endforeach
                  </table>
                  {{$data->links()}}
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection