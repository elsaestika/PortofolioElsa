@extends('template')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body{
            background-color:#AEC2B6;  
        }
    </style>
</head>
<body> --}}
<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="container-fluid">
            <div class="col-md-6">
                <form action="">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Portofolio</label>
                    <td><input type="text" name="nama_portofolio" id="nama_portofolio" class="form-control" value="{{ $portofolio->nama_portofolio }}" placeholder="Masukan nama portofolio"></td>
                </div>
                <div>
                    <label for="" class="form-label">Kategori</label>
                    <td><input type="text" name="kategori" id="kategori" class="form-control" value="{{ $portofolio->kategori }}" placeholder="Masukan kategori"></td>
                </div>
                <div>
                    <label for="" class="form-label">Deskripsi</label>
                    <td><input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $portofolio->deskripsi }}" placeholder="Masukan Deskripsi"></td>
                </div>
                <div>
                    <label for="" class="form-label">Gambar</label>
                    <img src="/storage/{{ $portofolio->gambar }}" width="100" height="100" alt="">
                    <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Masukan gambar">
                </div>
                <div class="my-3">
                    <input type="submit" value="{{ $tombol }}" class="btn btn-primary btn-sm">
                </div>
            </form>
        </div>
    </div>
</form>
{{-- </body>
</html> --}}
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@endsection


