@section('title','Tambah Sayur Masuk')
@extends('layout.main-layout')
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <h3>Tambah sayur masuk</h3>
      <p class="mb-3">Admin dapat menambahkan data sayur masuk</p>
      <form action="" autocomplete="off" method="POST">
        @csrf
        <div class="mb-3">
          <label for="floatingHargaSayur" class="form-label">Nama Sayur</label>
          <select class="form-select" aria-label="Default select example" name="sayur_id">
            <option selected>Nama Sayur</option>
            @foreach ($sayur as $item)
              <option value="{{ $item->id }}">{{ $item->nama_sayur }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="floatingHargaSayur" class="form-label">Jumlah Sayur Masuk</label>
          <input type="number" class="form-control" id="floatingHargaSayur" placeholder="masukkan jumlah sayur masuk" name="jumlah">
        </div>
        <div class="mb-3">
          <label for="floatingHargaSayur" class="form-label">Nama Supplier</label>
          <select class="form-select" aria-label="Default select example" name="supplier_id">
            <option selected>Pilih Supplier</option>
            @foreach ($supplier as $item)
              <option value="{{ $item->id }}">{{ $item->nama_supplier }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-4">
          <label for="floatingHargaSayur" class="form-label">Tanggal Masuk</label>
          <input type="date" class="form-control" id="floatingHargaSayur" name="tanggal_masuk">
        </div>
        <div class="mb-3 d-flex gap-3">
          <a href="/sayur-masuk" class="btn btn-outline-secondary">Kembali</a>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection