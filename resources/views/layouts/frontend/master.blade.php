<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Official Website - SDN Kotakulon 1</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets/img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">SDN Kotakulon 1</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="profil" class="dropdown-item">Sejarah</a>
                            <a href="profil" class="dropdown-item">Visi - Misi</a>
                            <a href="profil" class="dropdown-item">Struktur Organisasi</a>   
                            <!-- <a href="profil" class="dropdown-item">PPDB</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="prestasi" class="dropdown-item">Pengumuman</a>
                            <a href="prestasi" class="dropdown-item">Prestasi</a>
                            <a href="prestasi" class="dropdown-item">Fasilitas</a>
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

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    @foreach ($data as $item)
                    <img class="img-fluid" src="{{asset('img/slideimg/'.$item->gambar)}}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">{{$item->judul}}</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">{{$item->isi}}</p>
                    @endforeach
                                    <a href="ppdb" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Daftar PPDB</a>
                                    <a href="direktori" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Direktori</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        @yield('content')
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Direktori</h5>
                        <a class="btn btn-link text-white-50" href="direktori">Kepala Sekolah</a>
                        <a class="btn btn-link text-white-50" href="direktori">Guru</a>
                        <a class="btn btn-link text-white-50" href="direktori">Pegawai</a>
                        <a class="btn btn-link text-white-50" href="direktori">Siswa</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Profil</h5>
                        <a class="btn btn-link text-white-50" href="profil">Sejarah</a>
                        <a class="btn btn-link text-white-50" href="profil">Visi - Misi</a>
                        <a class="btn btn-link text-white-50" href="profil">Struktur Organisasi</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact Person</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>JL. Letnan Sutarman, No. 12, Kotakulon, Potos, Kotakulon, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68213</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62-817-7503-3556</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>sdnkotakulon1@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://wa.me/+6289525409020"><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/syarif.ryan/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Sign Up</h5>
                        <p>Daftar akun untuk memiliki akses PPDB (Penerimaan Peserta Didik Baru) di SDN Kotakulon 1</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="/">Official Website SDN Kotakulon 1</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author???s credit link/attribution link/backlink. If you'd like to use the template without the footer author???s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://polije.ac.id/teknik-informatika/">Mbadog Team - TIF Polije</a>
                            </br>All Hail <a class="border-bottom" href="/" target="_blank">Lord Ryan</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="/">Home</a>
                                <a href="profil">Profil</a>
                                <a href="prestasi">Informasi</a>
                                <a href="direktori">Direktori</a>
                                <a href="contact">Contact</a>
                                <a href="ppdb">PPDB</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/lib/wow/wow.min.js"></script>
    <script src="assets/lib/easing/easing.min.js"></script>
    <script src="assets/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/main.js"></script>
</body>

</html>