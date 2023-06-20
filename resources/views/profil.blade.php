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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body{
            
            background-color:#C3B091;  
        }
    </style>
</head>
<body>
    {{-- <table> --}}
        <section id="setting profil">
            <div class="container p-2">
                <h3 class="fw-bold text-center" mb-3>Setting profil</h3>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <form action="{{ $action }}">
                            <div class="mb-1">
                                <label for="form" class="form-label">Nis</label>
                                <input type="text" name="nis" id="nis" class="form-control" value="{{ $nis }}" placeholder="Masukan Nis">
                            </div>
                            <div class="mb-1">
                                <label for="form" class="form-label">Nama lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control" value="{{ $nama }}" placeholder="Masukan Nama lengkap">
                            </div>
                            <div class="mb-1">
                                <label for="form" class="form-label" >Jenis kelamin</label>
                                <select name="jk" id="jk" class="form-select">
                                    <option>Jenis kelamin</option>
                                    <option value="L" {{ $jk=='L'?'selected':'' }}>Laki-Laki</option>
                                    <option value="P" {{ $jk=='P'?'selected':'' }}>Perempuan</option>
                                    
                                </select>
                                {{-- <input type="checkbox" name="jk" id="jk" value="L" {{ $profil->jk=="L"?"checked":"" }}>Laki-laki 
                                <input type="checkbox" name="jk" id="jk" value="P" {{ $profil->jk=="P"?"checked":"" }}>Perempuan --}}
                            </div>
                            <div class="mb-1">
                                <label for="form" class="form-label">Tempat Tanggal lahir</label>
                                <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $ttl }}" placeholder="Masukan Tempat tanggal-lahir">
                            </div>
                            <div class="mb-1">
                                <label for="form" class="form-label">Pendidikan</label>
                                <input type="text" name="pendidikan" id="pendidikan" class="form-control" value="{{ $pendidikan }}" placeholder="Masukan Pendidikan">
                            </div>
                            <div class="mb-1">
                                <label for="form" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" class="form-control" rows="2" placeholder="Masukan Alamat">{{ $alamat }}</textarea>
                            </div>
                            <div class="mb-1">
                                <label for="form" class="form-label">Foto</label>
                                <img src="/storage/{{ $foto }}" width="50" height="100" alt="">
                                <input type="file" name="foto" id="foto" class="form-control" value="{{ $foto }}">
                            </div>
                            <div class="mb-1">
                                <label for="form" class="form-label">About</label>
                                <textarea name="about" id="about" cols="30" class="form-control" rows="4" placeholder="Silahkan isi about">{{ $about }}</textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</form>
</body>
</html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@endsection
