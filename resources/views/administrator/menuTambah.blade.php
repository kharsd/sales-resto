@extends('layout.admin')

@section('title', 'Tambah Menu')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="{{ route('menu.tambah.simpan') }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Menu</label>
            <input type="text" class="form-control" placeholder="Nama Menu" name="nama" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select class="form-select" aria-label="Default select example" name="kategori">
                <option selected>Kategori</option>
                <option value="Main Course">Main Course</option>
                <option value="Chef's Specials">Chef's Specials</option>
                <option value="Appetizer">Appetizer</option>
                <option value="Dessert">Dessert</option>
                <option value="Drinks">Drinks</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" placeholder="Harga Produk" name="harga">
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar Produk" name="gambar" autofocus="" required="" >
        </div> --}}
        <button type="submit" class="btn btn-success my-3">Simpan Menu</button>
        </form>
    </div>
@endsection