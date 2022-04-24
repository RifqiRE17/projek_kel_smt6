@extends('layouts.frontend.back.inc.app')
@section('content')
</br>
<form method="POST" action="{{route('admin.sliderimg.store'.$model->id)}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul" aria-describedby="judulHelp" placeholder="Isikan Judulnya">
</div>
<div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" name="isi" aria-describedby="isiHelp" placeholder="Masukkan Isinya">
</div>
<div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" class="form-control" name="gambar" aria-describedby="gambarHelp">
</div>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection