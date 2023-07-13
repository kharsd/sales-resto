@extends('layout.admin')

@section('title', 'Tambah Kasir')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="{{ route('kasir.tambah.simpan') }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name" autofocus="" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar Produk" name="gambar" autofocus="" required="" >
        </div> --}}
        <button type="submit" class="btn btn-success my-3">Simpan Account</button>
        </form>
    </div>
@endsection