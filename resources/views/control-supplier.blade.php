@section('title','Control Supplier')
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
      <h3>Control data supplier</h3>
      <p>Admin dapat mengontrol data supplier</p>
      @if (Auth::user()->role_id != 1 )
      
      @else
        <a href="/tambah-supplier" class="btn btn-primary mb-4">Tambah data supplier</a>
      @endif
 
      @if (Session::has('status-supplier-created'))
      <div class="col-12">
        <div class="alert alert-success" role="alert">
          {{ Session::get('message-supplier-created') }}
        </div>
      </div>
      @endif
      @if (Session::has('status-supplier-deleted'))
        <div class="col-12">
          <div class="alert alert-success" role="alert">
            {{ Session::get('message-supplier-deleted') }}
         </div>
        </div>
      @endif
      @if (Session::has('status-supplier-updated'))
        <div class="col-12">
          <div class="alert alert-success" role="alert">
            {{ Session::get('message-supplier-updated') }}
         </div>
        </div>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered border-secondary text-center">
          <tr>
            <th>No</th>
            <th>Nama supplier</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No.Hp</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
          @foreach ($controlSupplier as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_supplier }}</td>
            <td>{{ $item->email_supplier }}</td>
            <td>{{ $item->alamat_supplier }}</td>
            <td>{{ $item->nohp_supplier }}</td>
            <td>
              @if ($item->gambar != '')
                <img src="{{ asset('storage/image/gambar-supplier/'. $item->gambar)}}" width="60" height="60">
              @else 
                <img src="{{ asset('storage/image/gambar-supplier/default_pp.png')}}" width="60" height="60">
              @endif
            </td>
            <td class="d-flex gap-2 justify-content-center mt-2">
              @if (Auth::user()->role_id != 1 )
                -
              @else
              <form action="/destroy-supplier/{{ $item->id }}" method="POST" onsubmit="return confirm('apakah anda yakin ingin menghapus data ini?')">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Hapus</button>
              </form>
              <a href="/edit-supplier/{{ $item->id }}" class="btn btn-warning">Edit</a>
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