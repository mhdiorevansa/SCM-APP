@section('title','Sayur')
@extends('layout.main-layout')
@section('content')
<div class="col-12">
  <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
  </header>
  <div class="card">
    <div class="card-body">
      <h3>Semua data sayur</h3>
      <p>Admin dapat mengontrol data sayur</p>
      <div class="row">
        @foreach ($sayur as $item)
        <div class="col-lg-4 col-12">
          <div class="card border mt-3">
            <div class="card-header bg-dark text-center">
              <img src="{{asset('storage/image/gambar-sayur/' . $item->gambar_sayur)}}" class="img-fluid" alt="..." width="200" height="200">
            </div>
            <div class="card-body py-4 text-center">
              <h5 class="card-title">{{ $item->nama_sayur }}</h5>
              <p class="card-text">Rp.{{ $item->harga_sayur }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection