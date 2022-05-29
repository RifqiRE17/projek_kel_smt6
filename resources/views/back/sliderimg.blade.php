@extends('layouts.frontend.back.inc.app')
@section('content')
    
    <h2 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Halaman Administrator</h2>
    <h3 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Landing Page</h3>
    </br>
    <a class="btn btn-info" href="{{route('admin.sliderimg.create')}}">Tambah</a>
    </br>
    <div class="card-body">
        <table class="table table-bordered"
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item['judul']}}</td>
            <td>{{$item['isi']}}</td>
            <td>
                <img src="{{asset('img/slideimg/'.$item->gambar)}}" width="70px" height="70px" alt="image">
            </td>
            <td>
                <a href="{{route('admin.sliderimg.edit',$item->id)}}">Edit</a> | <a href="{{route('admin.sliderimg.delete',$item->id)}}" style="color: red">Delete</a>
            </td> 
        </tr>
    </div>

    @endforeach
@endsection