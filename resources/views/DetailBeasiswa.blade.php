<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NemuBeasiswa</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/detailBeasiswa.css') }}">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="apple-touch-icon">


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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda<br></a></li>
                    <li><a href="#" class="active">Beasiswa</a></li>
                    <li><a href="{{ route('favorit') }}">Favorit</a></li>
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
    <main style="margin-top: 7%">
        <div class="back-button">
            <a href="{{ route('daftar') }}">
                <i class="fa-solid fa-arrow-left" style="color: #000000;"></i>
                <span class="page-title">Detail Beasiswa</span>
            </a>
        </div>
        <div class="content">
            <div class="left-column">
                <img src="{{ asset($beasiswa->poster) }}" alt="Poster Beasiswa Djarum">
            </div>
            <div class="right-column">
                <h2 class="fw-bold">{{ $beasiswa->namabeasiswa }}</h2>
                <p class="text-muted">Kategori : {{ $beasiswa->kategori }}</p>
                <p class="text-muted">Batas pengumpulan:
                    {{ \Carbon\Carbon::parse($beasiswa->deadline)->isoFormat('D MMMM YYYY') }}</p>
                <p>{!! $beasiswa->deskripsi !!}</p>
                <div class="buttons">
                    @if ($isFavorited)
                        <!-- Separate Form for Deleting a Favorite -->
                        <form action="{{ route('favorites.destroy', $favoriteId) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="unfavorite-btn">Hapus dari Favorit</button>
                        </form>
                    @else
                        <!-- Form for Adding a Favorite -->
                        <form method="POST" action="{{ route('favorit.store') }}" style="display: inline;">
                            @csrf
                            <input type="text" name="id" value="{{ $beasiswa->id }}" hidden>
                            <input type="hidden" name="username" value="{{ session('username') }}">
                            <input type="hidden" name="namabeasiswa" value="{{ $beasiswa->namabeasiswa }}">
                            <input type="hidden" name="deskripsi" value="{{ $beasiswa->deskripsi }}">
                            <input type="hidden" name="kategori" value="{{ $beasiswa->kategori }}">
                            <input type="hidden" name="deadline" value="{{ $beasiswa->deadline }}">
                            <input type="hidden" name="syarat" value="{{ $beasiswa->syarat }}">
                            <input type="hidden" name="tautan" value="{{ $beasiswa->tautan }}">
                            <input type="hidden" name="poster" value="{{ $beasiswa->poster }}">
                            <input type="hidden" name="email" value="{{ $beasiswa->email }}">
                            <button class="favorite-btn" type="submit">Tambahkan ke Favorit</button>
                        </form>
                    @endif
                    <a href="{{ $beasiswa->tautan }}" class="apply-btn">Daftar Beasiswa</a>
                </div>
            </div>
        </div>
        <div class="additional-info mt-4">
            <h2 class="fw-bold">Informasi Beasiswa</h2>
            <div class="info-row" style="margin-left: 1%">
                <div class="info-column">
                    <h3 class="fw-bold">Deskripsi</h3>
                    <p>{!! $beasiswa->syarat !!}</p>
                </div>
            </div>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif

    @if (session('alert'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('alert') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
</body>

</html>
