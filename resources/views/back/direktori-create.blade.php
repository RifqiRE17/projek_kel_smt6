@extends('layouts.frontend.back.inc.app')
@section('content')
<form method="POST" action="{{route('admin.direktori.store'.$model->id)}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="nama_kepala_sekolah">Nama Kepala Sekolah</label>
    <input type="text" class="form-control" name="nama_kepala_sekolah" aria-describedby="nama_kepala_sekolahHelp" placeholder="Isikan Nama Kepala Sekolah">
</div>
<div class="form-group">
    <label for="foto_kepala_sekolah">Foto Kepala Sekolah</label>
    <input type="file" class="form-control" name="foto_kepala_sekolah" aria-describedby="gambar1Help">
</div>
<div class="form-group">
    <label for="nama_guru">Nama Guru</label>
    <input type="text" class="form-control" name="nama_guru" aria-describedby="nama_guruHelp" placeholder="Isikan Nama Guru">
</div>
<div class="form-group">
    <label for="foto_guru">Foto Guru</label>
    <input type="file" class="form-control" name="foto_guru" aria-describedby="foto_guruHelp">
</div>
<div class="form-group">
    <label for="nama_pegawai">Nama Pegawai</label>
    <input type="text" class="form-control" name="nama_pegawai" aria-describedby="nama_pegawaiHelp" placeholder="Isikan Nama Pegawai">
</div>
<div class="form-group">
    <label for="foto_pegawai">Foto Pegawai</label>
    <input type="file" class="form-control" name="foto_pegawai" aria-describedby="foto_pegawaiHelp">
</div>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection