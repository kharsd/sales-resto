@extends('layout.admin')

@section('title', 'Daftar Menu')

@section('content')
  <div class="container">
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <form action="" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" placeholder="Search">
        </form>
      </div>
    </div>
    <div class="d-md-flex justify-content-md-end p-3">
      <a href="{{ route('menu.tambah') }}">
        <button type="submit" class="btn btn-light">+ &nbsp; Tambah Menu</button>
      </a>
    </div>
    <br>
    <table class="table">
      <thead class="text-white">
        <tr class="text-center text-uppercase fs-6 fw-bold">
          <th class="p-2">No</th>
          <th class="p-2">Nama Menu</th>
          <th class="p-2">Kategori</th>
          <th class="p-2">Harga</th>
          <th class="p-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @php ($no = 1)
        @foreach ($data as $key=>$row)
        <tr>
          <td class="text-center text-white p-3"> {{ $no++ }}</td>
          <td class="text-white p-3">{{ $row->nama }}</td>
          <td class="text-white p-3">{{ $row->kategori }}</td>
          <td class="text-white p-3">{{ formatRupiah($row->harga) }}</td>
          <td class="p-3">
            <a href="{{ route('menu.edit', $row->id) }}">
              <button type="submit" class="btn btn-outline-light">Edit</button>
            </a>
            <a href="{{ route('menu.hapus', $row->id) }}" onclick="return confirm('Anda yakin akan menghapus data ini?')">
              <button type="submit" class="btn btn-outline-light">Hapus</button>
            </a>
          </td>
        </tr>        
        @endforeach
      </tbody>
    </table>
  </div>    
@endsection