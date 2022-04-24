@extends('layouts.frontend.back.inc.app')
@section('content')
</br>
<form method="POST" action="{{url('admin/sliderimg/update/'.$model->id)}}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul" aria-describedby="judulHelp" placeholder="Isikan Judulnya" value="{{$model->judul}}">
</div>
<div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" name="isi" aria-describedby="isiHelp" placeholder="Masukkan Isinya" value="{{$model->isi}}">
</div>
<div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" class="form-control" name="gambar">
    <br>
    <img src="{{asset('img/slideimg/'.$model->gambar)}}" width="70px" height="70px" alt="image">
</div>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection