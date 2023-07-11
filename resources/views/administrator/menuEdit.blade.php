@extends('layout.admin')

@section('title', ' Edit Menu')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="{{ route('menu.tambah.update', $menu->id) }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Menu</label>
            <input type="text" class="form-control" placeholder="Nama Menu" name="nama" value="{{ isset($menu) ? $menu->nama : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select class="form-select" aria-label="Default select example" name="kategori">
                <option selected>{{ isset($menu) ? $menu->kategori : '' }}</option>
                <option value="Main Course">Main Courses</option>
                <option value="Starters">Starters</option>
                <option value="Snacks">Snacks</option>
                <option value="Desserts">Desserts</option>
                <option value="Drinks">Drinks</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" placeholder="Harga Produk" name="harga" value="{{ isset($menu) ? $menu->harga : '' }}" autofocus="" required="" >
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar Produk" name="gambar" autofocus="" required="" >
        </div> --}}
        <button type="submit" class="btn btn-success my-3">Simpan Menu</button>
        </form>
    </div>
@endsection