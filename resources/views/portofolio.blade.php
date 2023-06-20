@extends('template')
@section('content')
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin: 10px;
    }
    body{
        background-color:#C3B091;
    }
</style>
    {{-- <form action="{{ url('portofolio/cari') }}" method="get">
        <input type="search" name="cari" id="cari" value="{{ $cari }}">
        <input type="submit" value="Cari">
    </form> --}}
<button class="btn py-4 ms-auto">
    <a href="{{ url('portofolio/add') }}" class="btn btn-sm text-light" style="background-color:#8E806A ";>Tambah Portofolio</a>
</button>
<table border="1" class="table table-hover table-bordered table-striped">
    <tr class="table-primary text-center">
        <th>No</th>
        <th>Nama Portofolio</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    @foreach ($portofolio as $key => $item)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->nama_portofolio}}</td>
        <td>{{ $item->kategori }}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>
            <img src="/storage/{{ $item->gambar }}" alt="" width="100">
        </td>
        <td class="text-center">
            <a href="portofolio/hapus/ {{ $item->id }}" onclick="return window.confirm('hapus data ini?')" class="btn btn-danger">hapus</a>
            <a href="portofolio/edit/ {{ $item->id }}" class="btn btn-success">edit</a>
        </td> 
    </tr>   
    @endforeach
</table>
total portofolio : {{ $portofolio->count() }} <br>
total perhalaman : {{ $portofolio->perpage() }}
{{ $portofolio->links() }}
@endsection