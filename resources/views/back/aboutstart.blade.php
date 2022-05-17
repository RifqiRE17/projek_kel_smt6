@extends('layouts.frontend.back.inc.app')
@section('content')
</br>
    <a class="btn btn-info" href="{{route('admin.aboutstart.create')}}">Tambah</a>
    </br>
    <div class="card-body">
        <table class="table table-bordered"
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar1</th>
            <th>Gambar2</th>
            <th>Gambar3</th>
            <th>Gambar4</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item['judul']}}</td>
            <td>{{$item['isi']}}</td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->gambar1)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->gambar2)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->gambar3)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <img src="{{asset('img/aboutstart/'.$item->gambar4)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <a href="{{route('admin.aboutstart.edit',$item->id)}}">Edit</a> | <a href="{{route('admin.aboutstart.delete',$item->id)}}" style="color: red">Delete</a>
            </td> 
        </tr>
    </div>
    @endforeach
@endsection