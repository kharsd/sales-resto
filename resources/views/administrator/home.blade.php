@extends('layout.admin')

@section('title', 'Haii ... ')

@section('content')
    {{-- manajemen kasir terkait login --}}
    <h3 class="mb-3">Menu</h3>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <div class="col">
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
          <div class="card h-100">
            <img src="{{ URL('images/Main Course.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Main Course</h5>
              <a href="/admin/menu" class="link-dark">
                  <p class="card-text">Lihat semua main course ...</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="{{ URL('images/Appetizer.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Appetizer</h5>
              <a href="/admin/menu" class="link-dark">
                  <p class="card-text">Lihat semua appetizer ...</p>
              </a>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card h-100">
              <img src="{{ URL('images/Dessert.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dessert</h5>
                <a href="/admin/menu" class="link-dark">
                    <p class="card-text">Lihat semua dessert ...</p>
                </a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="{{ URL('images/Drinks.jpg') }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Drinks</h5>
                <a href="/admin/menu" class="link-dark">
                    <p class="card-text">Lihat semua drinks ...</p>
                </a>
              </div>
            </div>
          </div>
      </div>
    <h3 class="mt-4 mb-3">Meja</h3>
    <h3>Kasir</h3>
@endsection