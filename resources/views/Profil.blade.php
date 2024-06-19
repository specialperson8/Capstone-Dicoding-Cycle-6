<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NemuBeasiswa</title>

    {{-- fontawesome --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="apple-touch-icon">

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
                    <li><a href="">Beasiswa</a></li>
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
    <main class="main">



        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" style="margin-top: 5%;" data-aos="fade-up">
                <h2>Menu Profil</h2>
                <p>Profil Anda<br></p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="mb-3">
                    <label for="username" class="form-label fw-bold">Username Anda</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                        value=" {{ session('username') }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Email anda</label>
                    <input type="email" class="form-control" id="exampleInputPassword1"
                        value=" {{ session('email') }}" disabled>
                </div>
                <button class="btn btn-warning" id="update-data" data-bs-toggle="modal" data-bs-target="#updateModal">
                    <i class="fas fa-edit"></i> Perbarui data anda
                </button>
            </div>
            <div class="container section-title" style="margin-top: 5%;" data-aos="fade-up">
                <h2>Daftar Beasiswa yang kamu daftarkan</h2>
            </div>
            <div class="container">
                @if ($beasiswa->isEmpty())
                    <div class="text-center mt-4">
                        <h4 class="fw-bold">Belum ada data beasiswa yang kamu daftarkan</h4>
                    </div>
                @else
                    <div class="row">
                        @foreach ($beasiswa as $key => $item)
                            <div class="col-lg-6">
                                <div class="icon-box d-flex align-items-center p-3 shadow-sm rounded bg-white"
                                    data-aos="fade-up">
                                    <div class="me-3">
                                        <img src="{{ asset($item->poster) }}" alt="Beasiswa"
                                            class="rounded-circle img-fluid" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h3 class="fw-bold mb-1">{{ $item->namabeasiswa }}</h3>
                                        @if ($item->status == 'dalam proses')
                                            <span class="badge rounded-pill bg-warning mb-2">Dalam Proses</span>
                                        @elseif($item->status == 'diterima')
                                            <span class="badge rounded-pill bg-success mb-2">Diterima</span>
                                        @elseif($item->status == 'ditolak')
                                            <span class="badge rounded-pill bg-danger mb-2">Ditolak</span>
                                        @endif
                                        <p class="mb-2">{!! \Illuminate\Support\Str::limit($item->deskripsi, 100) !!}</p>
                                        <button class="btn btn-warning fw-bold" data-bs-toggle="modal"
                                            data-bs-target="#beasiswaModal{{ $item->id }}">Lihat
                                            Informasi</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            </div>
            </div>

            <!-- Beasiswa Modal -->
            @foreach ($beasiswa as $item)
                <div class="modal fade" id="beasiswaModal{{ $item->id }}" tabindex="-1"
                    aria-labelledby="beasiswaModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="beasiswaModalLabel">Detail Beasiswa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="mb-2 fw-bold">Nama Beasiswa</p>
                                <p class="mb-4 ">{{ $item->namabeasiswa }}</p>
                                <p class="mb-2 fw-bold">Deskripsi singkat beasiswa</p>
                                <p class="mb-4 ">{!! \Illuminate\Support\Str::limit($item->deskripsi, 100) !!}</p>
                                <p class="mb-2 fw-bold">Kategori Beasiswa</p>
                                <p class="mb-4 ">{{ $item->kategori }}</p>
                                @if ($item->status == 'dalam proses')
                                    <p class="mb-2 fw-bold">Status Pendaftaran</p>
                                    <span class="badge rounded-pill bg-warning mb-4">Dalam Proses</span>
                                    <p class="mb-2 fw-bold">Catatan Admin :</p>
                                    <p class="mb-4 ">Tolong Cek secara berkala email yang anda guanakan saat mendaftar
                                        karena proses validasi akan berlangsung melalui email bersama tim kami</p>
                                @elseif($item->status == 'diterima')
                                    <p class="mb-2 fw-bold">Status Pendaftaran</p>
                                    <span class="badge rounded-pill bg-success mb-4">Diterima</span>
                                    <p class="mb-2 fw-bold">Catatan Admin</p>
                                    <p class="mb-4 ">Selamat beasiswa kamu telah kami validasi dan disetujui silahkan
                                        berikan pelayanan dan beasiswa yang terbaik untuk sahabat hebat kita ya!</p>
                                @elseif($item->status == 'ditolak')
                                    <p class="mb-2 fw-bold">Status Pendaftaran</p>
                                    <span class="badge rounded-pill bg-danger mb-4">Ditolak</span>
                                    <p class="mb-2 fw-bold">Catatan Admin</p>
                                    <p class="mb-4 ">Mohon maaf beasiswa yang kamu daftarkan belum bisa kamu terima
                                        karena belum memenuhi kriteria yang tepat dan sesuai saat proses validasi yang
                                        dilakukan oleh tim dan anda</p>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- End Beasiswa Modal -->

            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateModalLabel">Form Pembaruan Profil anda</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Add your form fields here -->
                            <form action="{{ route('profil.update') }}" method="POST">
                                @csrf
                                <input type="hidden" class="form-control" id="newUsername" name="username"
                                    value="{{ session('username') }}">
                                <div class="mb-3">
                                    <label for="newEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="newEmail" name="email"
                                        value="{{ session('email') }}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-warning">Perbarui Email</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- End Update Modal -->
        </section><!-- /Values Section -->

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
