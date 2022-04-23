@extends('layouts.frontend.back.inc.app')
@section('content')
</br>
<form method="POST" action="{{url('admin/sliderimg/update/'.$model->id)}}">
@csrf
<div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control" name="judul" aria-describedby="judulHelp" placeholder="Isikan Judulnya" value="{{$model->judul}}">
</div>
<div class="form-group">
    <label for="isi">Isi</label>
    <input type="text" class="form-control" name="isi" aria-describedby="isiHelp" placeholder="Masukkan Isinya" value="{{$model->isi}}">
</div>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection