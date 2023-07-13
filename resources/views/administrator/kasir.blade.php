@extends('layout.admin')

@section('title', 'Daftar Kasir')

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
      <a href="{{ route('kasir.tambah') }}">
        <button type="submit" class="btn btn-light">+ &nbsp; Tambah Kasir</button>
      </a>
    </div>
    <br>
    <table class="table">
      <thead class="text-white">
        <tr class="text-center text-uppercase fs-6 fw-bold">
          <th class="p-2">No</th>
          <th class="p-2">Nama</th>
          <th class="p-2">Email</th>
          <th class="p-2">Action</th>
        </tr>
      </thead>
      <tbody>
        @php ($no = 1)
        @foreach ($data as $key=>$row)
        <tr>
          <td class="text-center text-white p-3"> {{ $no++ }}</td>
          <td class="text-white p-3">{{ $row->name }}</td>
          <td class="text-white p-3">{{ $row->email }}</td>
          <td class="p-3">
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