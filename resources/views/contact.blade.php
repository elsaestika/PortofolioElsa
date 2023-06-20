@extends('template')
@section('content')

<a href="{{ url('contact/add') }}"></a>
<table border="1" class="table table-hover table-bordered">
    <tr class="text-center table-primary">
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Aksi</th>
    </tr>
@foreach ($contact as $key=>$item)
    <tr class="text-center">
        <th>{{ $key+1 }}</th>
        <th>{{ $item->nama }}</th>
        <th>{{ $item->email }}</th>
        <th>{{ $item->pesan }}</th>
        <td>
            <a href="contact/hapus/ {{ $item->id }}" onclick="return window.confirm('hapus pesan ini?')" class="btn btn-danger">hapus</a>
        </td>
    </tr>
@endforeach
</table>

    
@endsection