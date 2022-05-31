@extends('layouts.frontend.back.inc.app')
@section('content')
</br>
<form method="POST" action="{{route('admin.ppdb.store'.$model->id)}}" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label for="nama_lengkap">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama_lengkap" aria-describedby="nama_lengkapHelp" placeholder="Isikan Nama Lengkapnya">
</div>
<div class="form-group">
    <label for="nama_panggilan">Nama Panggilan</label>
    <input type="text" class="form-control" name="nama_panggilan" aria-describedby="nama_panggilanHelp" placeholder="Masukkan Nama Panggilan">
</div>
<div class="form-group">
    <label for="tempat_tangal_lahir">tempat,Tanggal Lahir</label>
    <input type="text" class="form-control" name="tempat_tanggal_lahir" aria-describedby="tempat_tanggal_lahirHelp" placeholder="Masukkan Tempat, Tanggal Lahir">
</div>
<div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" name="alamat" aria-describedby="alamatHelp" placeholder="Masukkan Alamat">
</div>
<div class="form-group">
    <label for="pesan">Pesan</label>
    <input type="text" class="form-control" name="pesan" aria-describedby="pesanHelp" placeholder="Masukkan Pesan">
</div>
<div class="form-group">
    <label for="ijazah_tk">Ijazah TK</label>
    <input type="file" class="form-control" name="ijazah_tk" aria-describedby="ijazah_tkHelp">
</div>
<div class="form-group">
    <label for="akta_kelahiran">Akta Kelahiran</label>
    <input type="file" class="form-control" name="akta_kelahiran" aria-describedby="akta_kelahiranHelp">
</div>
<div class="form-group">
    <label for="ktp_orang_tua">Ktp Orang Tua</label>
    <input type="file" class="form-control" name="ktp_orang_tua" aria-describedby="ktp_orang_tuaHelp">
</div>
<div class="form-group">
    <label for="kartu_keluarga">Kartu Keluarga</label>
    <input type="file" class="form-control" name="kartu_keluarga" aria-describedby="kartu_keluargaHelp">
</div>
<div class="form-group">
    <label for="sertifikat_penghargaan">Sertifikat Penghargaan</label>
    <input type="file" class="form-control" name="sertifikat_penghargaan" aria-describedby="sertifikat_penghargaanHelp">
</div>
<br>
<div class="form-group">
<input type="checkbox" name="sertifikat_penghargaan" value="sertifikat_penghargaan"> Tidak Ada<br>
</div>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection