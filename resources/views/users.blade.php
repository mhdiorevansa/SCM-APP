@section('title','Users')
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
    <h3>Data users</h3>
    <p>Admin dapat mengelola data user</p>
        <div class="table-responsive mb-3">
          <table class="table table-bordered border-secondary text-center">
            <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Email</th>
            </tr>
            @foreach ($user as $item)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->username }}</td>
              <td>{{ $item->email }}</td>
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