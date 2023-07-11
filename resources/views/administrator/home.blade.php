@extends('layout.admin')

@section('title', 'Selamat Datang ... ')

@section('content')
    {{-- manajemen kasir terkait login --}}
    <div class="row row-cols-1 row-cols-md-5 g-4">
      <div class="col">
        <h3 class="mb-3">Menu</h3>
        <div class="card h-100">
          <img src="{{ URL('images/All.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">All Categories</h5>
              <a href="/admin/menu" class="link-dark">
                  <p class="card-text">Lihat semua menu ...</p>
              </a>
          </div>
        </div>
      </div>
        <div class="col">
          <h3 class="mb-3">Meja</h3>
          <div class="card h-100">
            <img src="{{ URL('images/Table.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">All Table</h5>
                <a href="/admin/menu" class="link-dark">
                    <p class="card-text">Lihat semua meja ...</p>
                </a>
            </div>
          </div>
        </div>
    </div>
    {{-- <h3>Kasir</h3> --}}
@endsection