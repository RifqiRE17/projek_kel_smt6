@extends('layouts.frontend.master')
@section('content')

<!-- Contact Start -->
<div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">PENERIMAAN PESERTA DIDIK BARU</h1>
                <h2 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">SDN KOTAKULON 1</h2>
                 <form method="POST" action="{{}}">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Nama Lengkap</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Nama Panggilan</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                                            <label for="subject">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="ttl" placeholder="TTL">
                                            <label for="subject">Tempat, Tanggal Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Pesan</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ijazah">Ijazah TK</label>
                                        <input type="file" class="form-control" name="ijazah" aria-describedby="ijazahHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="akta">Akta Kelahiran</label>
                                        <input type="file" class="form-control" name="akta" aria-describedby="aktaHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="ktp">KTP Orang Tua</label>
                                        <input type="file" class="form-control" name="ktp" aria-describedby="ktpHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="kk">Kartu Keluarga</label>
                                        <input type="file" class="form-control" name="kk" aria-describedby="kkHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="sertifikat">Sertifikat Penghargaan (jika ada)</label>
                                        <input type="file" class="form-control" name="sertifikat" aria-describedby="sertifikatHelp">
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                    </div>
                                </div>
                 </form>
            </div>
</div>

@stop




            