@extends('layout.admin')

@section('title', 'Daftar Meja')

@section('content')
  {{-- manajemen table (list harga, nama) [edit, update, delete] --}}
  <div class="container">
    <div class="row g-3 align-items-center">
      <div class="col-auto">
        <form action="" method="GET">
          <input type="search" id="inputPassword6" name="search" class="form-control" placeholder="Search">
        </form>
      </div>
    </div>    
    <div class="d-md-flex justify-content-md-end p-3">
      <a href="{{ route('meja.tambah') }}" class="btn btn-outline-light" role="button" data-bs-toggle="button">+ &nbsp; Tambah Meja</a>
    </div>
    <br>
    <table class="table">
      <thead class="text-white">
        <tr class="text-center text-uppercase fs-6 fw-bold">
          <th class="p-2">No</th>
          <th class="p-2">No Meja</th>
          <th class="p-2">Harga</th>
          <th class="p-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @php ($no = 1)
        @foreach ($data as $key=>$row)
        <tr>
          <td class="text-center text-white p-3"> {{ $no++ }}</td>
          <td class="text-white p-3">{{ $row->no_meja }}</td>
          <td class="text-white p-3">{{ $row->harga }}</td>
          {{-- <td class="p-3"></td> --}}
          <td class="p-3">
            <a href="{{ route('meja.edit', $row->id) }}}" class="btn btn-outline-light" role="button" data-bs-toggle="button">Edit</a>|
            <a href="{{ route('meja.hapus', $row->id) }}}" onclick="return confirm('Anda yakin akan menghapus data ini?')" class="btn btn-outline-light" role="button" data-bs-toggle="button">Hapus</a>
          </td>
        </tr>
        
        @endforeach
      </tbody>
    </table>
  </div>    
@endsection