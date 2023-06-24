@section('title','Tambah Supplier')
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
      <h3>Tambah Supplier</h3>
      <p class="mb-3">Admin dapat menambahkan data supplier</p>
      @if (count($errors)>0)
          <div class="alert alert-danger" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
                <li class="mb-2">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
      <form action="/tambah-supplier" autocomplete="off" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="mb-3">
          <label for="floatingNamaSupplier" class="form-label">Nama Supplier</label>
          <input type="text" class="form-control" id="floatingNamaSupplier" placeholder="masukkan nama supplier" name="nama_supplier">
        </div>
        <div class="mb-3">
          <label for="floatingEmailSupplier" class="form-label">Email Supplier</label>
          <input type="email" class="form-control" id="floatingEmailSupplier" placeholder="masukkan email supplier" name="email_supplier">
        </div>
        <div class="mb-3">
          <label for="floatingAlamatSupplier" class="form-label">Alamat Supplier</label>
          <input type="text" class="form-control" id="floatingAlamatSupplier" placeholder="masukkan alamat supplier" name="alamat_supplier">
        </div>
        <div class="mb-3">
          <label for="floatingNoHP" class="form-label">Nomor Handphone</label>
          <input type="text" class="form-control" id="floatingNoHP" placeholder="masukkan nomor handphone supplier" name="nohp_supplier">
        </div>
        <div class="mb-4">
          <label for="" class="form-label mb-2">Upload Gambar</label>
          <input type="file" class="form-control" name="gambar">
        </div>
        <div class="mb-3 d-flex gap-3">
          <a href="/control-supplier" class="btn btn-outline-secondary">Kembali</a>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection