@section('title','Dashboard')
@extends('layout.main-layout')
@section('content')
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h3 style="text-transform: capitalize;" class="mb-2">Analytics Dashboard</h3>
                <p class="mb-1">Pada halaman ini, terdapat fitur pemantauan dan analisis data dalam waktu real-time. dan memperlihatkan seluruh data reporting dalam satu halaman</p>
              </div>
            </div>
          </div>
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> --}}
        <div class="page-heading">
            <h3>Overview</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon purple mb-2 d-flex align-items-start" style="padding-right: 0.7em">
                                                <i class="bi bi-box-seam"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Jumlah Sayur</h6>
                                            <h6 class="font-extrabold mb-0">{{ $sayur }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon blue mb-2 d-flex align-items-start" style="padding-right: 0.7em">
                                                <i class="bi bi-person"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Users</h6>
                                            <h6 class="font-extrabold mb-0">{{ $user }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon green mb-2 d-flex align-items-start" style="padding-right: 0.7em">
                                                <i class="bi bi-box-arrow-in-up"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Sayur Masuk</h6>
                                            <h6 class="font-extrabold mb-0">{{ $jmlSayurMasuk }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-4 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                            <div class="stats-icon red mb-2 d-flex align-items-start" style="padding-right: 0.7em">
                                                <i class="bi bi-box-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                            <h6 class="text-muted font-semibold">Sayur Keluar</h6>
                                            <h6 class="font-extrabold mb-0">{{ $jmlSayurKeluar }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-12">
          <h3 class="mb-4">Jumlah stok sayur</h3>
          <div class="row">
            @foreach ($sayurGet as $item)
            <div class="col-lg-3 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5>{{ $item->nama_sayur }}</h5>
                        <p class="p-0 mb-0">Stok : {{ $item->stok }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
      
@endsection


