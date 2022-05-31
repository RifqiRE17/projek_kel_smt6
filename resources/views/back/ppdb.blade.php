@extends('layouts.frontend.back.inc.app')
@section('content')
</br>
    <a class="btn btn-info" href="{{route('admin.ppdb.create')}}">Tambah</a>
    </br>
    <div class="card-body">
        <table class="table table-bordered"
        <tr>
            <th>Nama Lengkap</th>
            <th>Nama Panggilan</th>
            <th>Alamat</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Pesan</th>
            <th>Ijazah TK</th>
            <th>Akta Kelahiran</th>
            <th>KTP Orang Tua</th>
            <th>Kartu Keluarga</th>
            <th>Sertifikat Penghargaan</th>
            <th>Edit</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item['nama_lengkap']}}</td>
            <td>{{$item['nama_panggilan']}}</td>
            <td>{{$item['Alamat']}}</td>
            <td>{{$item['tempat_tangal_lahir']}}</td>
            <td>{{$item['pesan']}}</td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->ijazah_tk)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->akta_kelahiran)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->ktp_orang_tua)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->kartu_keluarga)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->sertifikat_penghargaan)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <a href="{{route('admin.aboutstart.edit',$item->id)}}">Edit</a> | <a href="{{route('admin.aboutstart.delete',$item->id)}}" style="color: red">Delete</a>
            </td> 
        </tr>
    </div>
    @endforeach
@endsection