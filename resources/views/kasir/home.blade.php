@extends('layout.kasir')

@section('content')
    <div class="main-title">
        <h2 class="mb-5">
            Selamat Datang {{ Auth::user()->name }}....
        </h2> 
    </div>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <div class="col">
            <h3 class="mb-3">Pesan Langsung</h3>
            <div class="card h-100">
                <img src="{{ URL('images/All.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Pesan Langsung</h5>
                    <a href="/kasir/pesan langsung" class="link-dark">
                        <p class="card-text">Lihat semua pesan langsung ...</p>
                    </a>
                </div>
            </div>
        </div>
            <div class="col">
                <h3 class="mb-3">Reservasi</h3>
                <div class="card h-100">
                    <img src="{{ URL('images/Table.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Reservasi</h5>
                        <a href="/kasir/reservasi" class="link-dark">
                            <p class="card-text">Lihat semua reservasi ...</p>
                        </a>
                    </div>
                </div>
            </div>
      </div>
@endsection