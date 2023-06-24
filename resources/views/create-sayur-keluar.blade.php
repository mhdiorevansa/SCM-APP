@section('title','Tambah Sayur Keluar')
@extends('layout.main-layout')
@section('content')
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <h3>Tambah sayur keluar</h3>
      <p class="mb-3">Admin dapat menambahkan data sayur keluar</p>
      <form action="/tambah-sayur-keluar" autocomplete="off" method="POST">
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
          <label for="floatingHargaSayur" class="form-label">Jumlah Sayur Keluar</label>
          <input type="number" class="form-control" id="floatingHargaSayur" placeholder="Masukkan jumlah sayur keluar" name="jumlah">
        </div>
        <div class="mb-4">
          <label for="floatingHargaSayur" class="form-label">Tanggal Keluar</label>
          <input type="date" class="form-control" id="floatingHargaSayur" name="tanggal_keluar">
        </div>
        <div class="mb-3 d-flex gap-3">
          <a href="/sayur-keluar" class="btn btn-outline-secondary">Kembali</a>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection