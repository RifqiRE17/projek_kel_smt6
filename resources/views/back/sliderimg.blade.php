@extends('layouts.frontend.back.inc.app')
@section('content')
    </br>
    <a class="btn btn-info" href="{{route('admin.sliderimg.create')}}">Tambah</a>
    </br>
    <div class="card-body">
        <table class="table table-bordered"
        <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item['judul']}}</td>
            <td>{{$item['isi']}}</td>
            <td>
                <a href="{{route('admin.sliderimg.edit',$item->id)}}">Edit</a> | <a href="{{route('admin.sliderimg.delete',$item->id)}}" style="color: red">Delete</a>
            </td> 
        </tr>
    </div>
    @endforeach
@endsection