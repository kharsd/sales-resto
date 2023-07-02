@extends('layout.admin')

@section('title', ' Edit Meja')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="{{ route('meja.tambah.update', $meja->id) }}" enctype="multipart/form-data" >
        @csrf
        <div class="mb-3">
            <label class="form-label">No Meja</label>
            <input type="text" class="form-control" placeholder="No Meja" name="no_meja" value="{{ isset($meja) ? $meja->no_meja : '' }}" autofocus="" required="" >
        </div>
        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="text" class="form-control" placeholder="Harga Meja" name="harga" value="{{ isset($meja) ? $meja->harga : '' }}" autofocus="" required="" >
        </div>
        {{-- <div class="mb-3">
            <label class="form-label">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar Produk" name="gambar" autofocus="" required="" >
        </div> --}}
        <button type="submit" class="btn btn-success my-3">Simpan Meja</button>
        </form>
    </div>
@endsection