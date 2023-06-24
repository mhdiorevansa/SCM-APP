@section('title','Edit Sayur')
@extends('layout.main-layout')
@section('content')
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h3>Edit sayur</h3>
        <p class="mb-3">Admin dapat mengedit data sayur</p>
        @if (count($errors)>0)
          <div class="alert alert-danger" role="alert">
            <ul>
              @foreach ($errors->all() as $error)
                <li class="mb-2">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/edit-sayur/{{ $editSayur->id }}" autocomplete="off" method="POST" enctype="multipart/form-data">
          @csrf
          {{ method_field('PUT') }}
          <div class="mb-3">
            <label for="floatingInputSayur" class="form-label">Nama Sayur</label>
            <input type="text" class="form-control" id="floatingInputSayur" placeholder="masukkan nama sayur" name="nama_sayur" value="{{ $editSayur->nama_sayur }}">
          </div>
          <div class="mb-3">
            <label for="floatingHargaSayur" class="form-label">Harga Sayur</label>
            <input type="number" class="form-control" id="floatingHargaSayur" placeholder="masukkan harga sayur" name="harga_sayur" value="{{ $editSayur->harga_sayur }}">
          </div>
          <div class="mb-4">
            <label for="floatingGambarSayur" class="form-label">Gambar Sayur</label>
            <input type="file" class="form-control" id="floatingGambarSayur" name="gambar">
            @if ($editSayur->gambar_sayur)
              <p class="mt-3">File yang diunggah sebelumnya: {{ $editSayur->gambar_sayur }}</p>
            @endif
          </div>
          <div class="mb-3 d-flex gap-3">
            <a href="/control-sayur" class="btn btn-outline-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection