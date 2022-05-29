<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="/admin" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h2 class="m-0 text-primary">SDN Kotakulon 1</h2>
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
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/admin/sliderimg#!" class="dropdown-item">Sejarah</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Visi - Misi</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Struktur Organisasi</a>
                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/admin/sliderimg#!" class="dropdown-item">Pengumuman</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Prestasi</a>
                            <a href="/admin/sliderimg#!" class="dropdown-item">Fasilitas</a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="direktori" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Direktori</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="direktori" class="dropdown-item">Kepala Sekolah</a>
                                <a href="direktori" class="dropdown-item">Guru</a>
                                <a href="direktori" class="dropdown-item">Pegawai</a>
                                <a href="direktori" class="dropdown-item">Siswa</a>
                                
                            </div>
                    </div>
                    <div>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="ppdb" class="nav-item nav-link">PPDB</a>  
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="ppdb" class="dropdown-item">Data Peserta PPDB</a>                            
                            </div>
                    </div>
                    <li class="btn btn-primary rounded-0 py-2 px-lg-2 d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::guard('adminMiddle')->user()->name}}</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('admin.logout')}}">{{__('Logout')}}</a>
                                        <!-- <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a> -->
                                    </div>
                    </li>
            </div>
        </nav>
        <!-- Navbar End -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <!-- <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li> -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::guard('adminMiddle')->user()->name}}</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{route('admin.logout')}}">{{__('Logout')}}</a>
                                        <!-- <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a> -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
    </nav>