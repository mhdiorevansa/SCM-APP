@section('title','Supplier')
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
        <h3>Semua data supplier</h3>
        <p>Admin dapat mengontrol data supplier</p>
        <div class="row">
          @foreach ($allSupplier as $item)
          <div class="col-4">
            <div class="card border">
              <div class="card-header text-center">
                @if ($item->gambar != '')
                  <img src="{{ asset('storage/image/gambar-supplier/'. $item->gambar)}}" width="100" height="100">
                @else 
                  <img src="{{ asset('storage/image/gambar-supplier/default_pp.png')}}" width="100" height="100">
                @endif
              </div>
              <div class="card-body text-center">
                <h5>{{ $item->nama_supplier }}</h5>
                <p class="mb-1">{{ $item->email_supplier }}</p>
                <small class="text-muted">{{ $item->alamat_supplier }}</small>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection