@section('title','Sayur Keluar')
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
      <h3>Control data sayur keluar</h3>
      <p>Admin dapat mengontrol data sayur keluar</p>
      <div class="d-flex justify-content-between">
        @if (Auth::user()->role_id === 2 )
        <a href="/tambah-sayur-keluar" class="btn btn-primary mb-4">Tambah data sayur keluar</a>
        @else
        @endif

        @if (Auth::user()->role_id === 1 )
        <a href="/print-pdf-sayur-keluar" class="btn btn-danger mb-4"><i class="bi bi-filetype-pdf me-1"></i>Cetak PDF</a>
        @else
        @endif       
      </div>
      <div class="table-responsive">
        <table class="table table-bordered border-secondary text-center">
          <tr>
            <th>No</th>
            <th>Nama sayur</th>
            <th>Jumlah sayur keluar</th>
            <th>Tanggal Keluar</th>
          </tr>
          @foreach ($sayurKeluar as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->sayur->nama_sayur }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>{{ $item->tanggal_keluar->format('d/m/Y') }}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
    </div>
  </div>
</div>
@endsection