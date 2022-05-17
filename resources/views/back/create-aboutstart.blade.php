@extends('layouts.frontend.back.inc.app')
@section('content')
<form method="POST" action="{{route('admin.aboutstart.store'.$model->id)}}" enctype="multipart/form-data">
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
    <label for="gambar">Gambar1</label>
    <input type="file" class="form-control" name="gambar1" aria-describedby="gambar1Help">
</div>
<div class="form-group">
    <label for="gambar">Gambar2</label>
    <input type="file" class="form-control" name="gambar2" aria-describedby="gambar2Help">
</div>
<div class="form-group">
    <label for="gambar">Gambar3</label>
    <input type="file" class="form-control" name="gambar3" aria-describedby="gambar3Help">
</div>
<div class="form-group">
    <label for="gambar">Gambar4</label>
    <input type="file" class="form-control" name="gambar4" aria-describedby="gambar4Help">
</div>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection