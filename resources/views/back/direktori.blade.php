@extends('layouts.frontend.back.inc.app')
@section('content')
</br>
    <a class="btn btn-info" href="{{route('admin.direktori.create')}}">Tambah</a>
    </br>
    <div class="card-body">
        <table class="table table-bordered"
        <tr>
            <th>Nama Kepala Sekolah</th>
            <th>Foto Kepala Sekolah</th>
            <th>Nama guru</th>
            <th>Foto Guru</th>
            <th>Nama pegawai</th>
            <th>Foto Pegawai</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item['nama_kepala_sekolah']}}</td>
            <td>
                <img src="{{asset('img/direktori/'.$item->foto_kepala_sekloah)}}" width="70px" height="70px" alt="image">
            </td>
            <td>{{$item['nama_guru']}}</td>
            <td>
                <img src="{{asset('img/direktori/'.$item->foto_guru)}}" width="70px" height="70px" alt="image">
            </td>
            <td>{{$item['nama_pegawai']}}</td>
            <td>
                <img src="{{asset('img/direktori/'.$item->foto_pegawai)}}" width="70px" height="70px" alt="image">
            </td>
        </tr>
    </div>
    @endforeach
@endsection