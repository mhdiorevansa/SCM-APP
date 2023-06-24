@section('title','Control Sayur')
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
      <h3>Control data sayur</h3>
      <p>Admin dapat mengontrol data sayur</p>
      @if (Auth::user()->role_id != 1 )
        
      @else
      <a href="/tambah-sayur" class="btn btn-primary mb-4">Tambah data sayur</a>
      @endif
      @if (Session::has('status-sayur-created'))
        <div class="col-12">
          <div class="alert alert-success" role="alert">
            {{ Session::get('message-sayur-created') }}
          </div>
        </div>
      @endif
      @if (Session::has('status-sayur-deleted'))
        <div class="col-12">
          <div class="alert alert-success" role="alert">
            {{ Session::get('message-sayur-deleted') }}
          </div>
        </div>
      @endif
      @if (Session::has('status-sayur-updated'))
        <div class="col-12">
          <div class="alert alert-success" role="alert">
            {{ Session::get('message-sayur-updated') }}
          </div>
        </div>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered border-secondary text-center">
          <tr>
            <th>No</th>
            <th>Nama sayur</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
          </tr>
          @foreach ($sayur as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_sayur }}</td>
            <td>{{ $item->harga_sayur }}</td>
            <td>
              <img src="{{ asset('storage/image/gambar-sayur/' . $item->gambar_sayur) }}" alt="" width="60" height="60">
            </td>
            <td class="d-flex gap-2 justify-content-center mt-2">
              @if (Auth::user()->role_id != 1 )
                -
              @else
              <form action="/destroy-sayur/{{ $item->id }}" method="POST" onsubmit="return confirm('apakah anda yakin ingin menghapus data ini?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/edit-sayur/{{ $item->id }}" class="btn btn-warning">Edit</a>
              @endif
            </td>
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