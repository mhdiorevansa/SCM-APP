@section('title','Tambah Sayur')
@extends('layout.main-layout')
@section('content')
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h3>Tambah sayur</h3>
        <p class="mb-3">Admin dapat menambahkan data sayur</p>
        @if (count($errors)>0)
          <div class="alert alert-danger" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
                <li class="mb-2">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/tambah-sayur" autocomplete="off" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="floatingInputSayur" class="form-label">Nama Sayur</label>
            <input type="text" class="form-control" id="floatingInputSayur" placeholder="masukkan nama sayur" name="nama_sayur">
          </div>
          <div class="mb-3">
            <label for="floatingHargaSayur" class="form-label">Harga Sayur</label>
            <input type="number" class="form-control" id="floatingHargaSayur" placeholder="masukkan harga sayur" name="harga_sayur">
          </div>
          <div class="mb-4">
            <label for="floatingGambarSayur" class="form-label">Gambar Sayur</label>
            <input type="file" class="form-control" id="floatingGambarSayur" name="gambar">
          </div>
          <div class="mb-3 d-flex gap-3">
            <a href="/control-sayur" class="btn btn-outline-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection