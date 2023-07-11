@extends('layout.admin')

@section('title', 'Tambah Meja')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="{{ route('meja.tambah.simpan') }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">No Meja</label>
            <input type="text" class="form-control" placeholder="No Menu" name="no_meja" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Harga (Rp)</label>
            <input type="text" class="form-control" placeholder="Harga Meja" name="harga">
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar Produk" name="gambar" autofocus="" required="" >
        </div> --}}
        <button type="submit" class="btn btn-success my-3">Simpan Meja</button>
        </form>
    </div>
@endsection