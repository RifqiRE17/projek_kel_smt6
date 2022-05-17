@extends('layouts.frontend.back.inc.app')
@section('content')
<form method="POST" action="{{url('admin/aboutstart/update/'.$model->id)}}" enctype="multipart/form-data">
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
    <label for="gambar">Gambar1</label>
    <input type="file" class="form-control" name="gambar1" aria-describedby="gambar1Help">
    <br>
    <img src="{{asset('img/aboutstart/'.$model->gambar1)}}" width="70px" height="70px" alt="image">
</div>
<div class="form-group">
    <label for="gambar">Gambar2</label>
    <input type="file" class="form-control" name="gambar2" aria-describedby="gambar2Help">
    <br>
    <img src="{{asset('img/aboutstart/'.$model->gambar2)}}" width="70px" height="70px" alt="image">
</div>
<div class="form-group">
    <label for="gambar">Gambar3</label>
    <input type="file" class="form-control" name="gambar3" aria-describedby="gambar3Help">
    <br>
    <img src="{{asset('img/aboutstart/'.$model->gambar3)}}" width="70px" height="70px" alt="image">
</div>
<div class="form-group">
    <label for="gambar">Gambar4</label>
    <input type="file" class="form-control" name="gambar4" aria-describedby="gambar4Help" value="{{$model->gambar4}}">
    <br>
    <img src="{{asset('img/aboutstart/'.$model->gambar4)}}" width="70px" height="70px" alt="image">
</div>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
<br>
<br>
<br>
<br>
</form>
@endsection