<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>NemuBeasiswa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="apple-touch-icon">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- fontawesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda<br></a></li>
                    <li><a href="{{ route('daftar') }}">Beasiswa</a></li>
                    <li><a href="#" class="active">Favorit</a></li>
                    <li><a href="{{ route('tentang') }}">Tentang</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            @if (session('username'))
                <div class="dropdown">
                    <a class="btn-getstarted flex-md-shrink-0 dropdown-toggle" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ session('username') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('profil') }}">Lihat Profil</a></li>
                        @if (session('email') === 'admin@gmail.com')
                            <li><a href="{{ route('tabel-beasiswa') }}" class="dropdown-item">Dashboard</a></li>
                        @endif
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a class="btn-getstarted flex-md-shrink-0" href="{{ route('login') }}">Login</a>
            @endif

        </div>
    </header>

    <main class="main">
        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" style="margin-top: 5%;" data-aos="fade-up">
                <h2>Menu Beasiswa</h2>
                <p>Daftar Beasiswa Favorit<br></p>
            </div><!-- End Section Title -->
            <div class="container mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('searchBeasiswa') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari beasiswa..."
                                    name="q">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div </div>

                    <div class="container">
                        <div class="row">
                            @if ($favorites->isEmpty())
                                <div class="text-center mt-4">
                                    <h3 class="fw-bold">Belum ada data beasiswa yang kamu favoritkan</h3>
                                </div>
                            @else
                                @foreach ($favorites as $key => $item)
                                    <div class="col-lg-6 mb-2">
                                        <div class="icon-box d-flex align-items-center p-3 shadow-sm rounded bg-white"
                                            data-aos="fade-up">
                                            <div class="me-3">
                                                <img src="{{ asset($item->poster) }}" alt="Beasiswa"
                                                    class="rounded-circle img-fluid"
                                                    style="width: 100px; height: 100px;">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h3 class="fw-bold mb-1">{{ $item->namabeasiswa }}</h3>
                                                <span class="badge rounded-pill bg-warning text-dark mb-2">SMA atau
                                                    sederajat</span>
                                                <p class="mb-2">{!! \Illuminate\Support\Str::limit($item->deskripsi, 100) !!}</p>
                                                <p class="text-muted mb-2">Deadline: {{ $item->deadline }}</p>
                                                <a href="{{ route('detail', $item->id) }}"
                                                    class="btn btn-warning fw-bold rounded-pill">Lihat Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
        </section>

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">NemuBeasiswa</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Gedangan, Sidoarjo</p>
                        <p>Jawa Timur Indonesia</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 857-9127-2641</span></p>
                        <p><strong>Email:</strong> <span>nemubeasiswa@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Link website</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('daftar') }}">Beasiswa</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('favorit') }}">Favorit</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('tentang') }}">Tentang</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Fitur Kami</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ route('form') }}">Form Beasiswa</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Favorit</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Ikuti kami</h4>
                    <p>Ikuti kami dan berikan tanggapan langsung sosial media kami dibawah ini</p>
                    <div class="social-links d-flex">
                        <a href="https://api.whatsapp.com/send?phone=6285791272641"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">NemuBeasiswa.</strong> <span>All Rights
                    Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
