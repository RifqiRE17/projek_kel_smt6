<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{csrf_token()}}">

        <title>Halaman Adminstrator</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('back/assets/favicon.ico')}}" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('back/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/admin" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">SDN Kotakulon 1</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Beranda</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/admin/sliderimg" class="dropdown-item">Foto Landing Page</a>
                            <a href="/admin/aboutstart" class="dropdown-item">Foto Sambutan KS</a>
                            <a href="/admin/aboutstart#!" class="dropdown-item">Sambutan KS</a>
                            <a href="/admin/aboutstart#!" class="dropdown-item">Prestasi</a>
                            <a href="/admin/aboutstart#!" class="dropdown-item">Komentar Alumni</a>   
                            <!-- <a href="profil" class="dropdown-item">PPDB</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/admin/sliderimg#!" class="dropdown-item">Sejarah</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Visi - Misi</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Struktur Organisasi</a>
                            <!-- <a href="prestasi" class="dropdown-item">PPDB</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/admin/sliderimg#!" class="dropdown-item">Pengumuman</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Prestasi</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Fasilitas</a>
                            <!-- <a href="prestasi" class="dropdown-item">PPDB</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="direktori" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Direktori</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="direktori" class="dropdown-item">Kepala Sekolah</a>
                            <a href="direktori" class="dropdown-item">Guru</a>
                            <a href="direktori" class="dropdown-item">Pegawai</a>
                            <a href="direktori" class="dropdown-item">Siswa</a>
                            <!-- <a href="direktori" class="dropdown-item">PPDB</a> -->
                        </div>
                    </div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">Job Category</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div> -->
                <a href="ppdb" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">PPDB<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            @section('sidebar')
                @include('layouts.frontend.back.inc.sidebar')
            @show
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
            @section('header')
                @include('layouts.frontend.back.inc.header')
            @show
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('back/js/scripts.js')}}"></script>
    </body>
</html>
