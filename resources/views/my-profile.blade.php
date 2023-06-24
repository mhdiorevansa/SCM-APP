@section('title','My Profile')
@extends('layout.main-layout')
@section('content')
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h4 class="mb-3">My Profile</h4>
        <div class="d-flex flex-column align-items-center">
          <img src="{{ asset('storage/image/gambar-supplier/default_pp.png') }}" class="mb-3" width="100" height="100" alt="">
          <h5 class="text-capitalize">{{ $user->username }}</h5>
          <h6>{{ $user->email }}</h6>
        </div>
      </div>
    </div>
  </div>
@endsection