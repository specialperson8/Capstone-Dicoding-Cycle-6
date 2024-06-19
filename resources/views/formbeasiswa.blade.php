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

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda<br></a></li>
                    <li><a href="{{ route('daftar') }}" class="active">Beasiswa</a></li>
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
                        @if(session('email') === 'admin@gmail.com')
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
                <p>Form Tambahkan Beasiswa<br></p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <form action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3" style="text-align: left;">
                                <label for="namabeasiswa" class="form-label">Nama Beasiswa</label>
                                <input type="text" class="form-control" id="namabeasiswa" name="namabeasiswa"
                                    required>
                            </div>
                            <div class="mb-3" style="text-align: left;">
                                <label for="deskripsi" class="form-label">Deskripsi beasiswa</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" cols="50" maxlength="1000" required></textarea>
                            </div>
                            <div class="mb-3" style="text-align: left;">
                                <label for="kategori" class="form-label">Kategori pendidikan beasiswa</label>
                                <select class="form-select" id="kategori" name="kategori" required>
                                    <option selected disabled>Pilih kategori pendidikan beasiswa</option>
                                    <option value="SD atau sederajat">SD atau sederajat</option>
                                    <option value="SMP atau sederajat">SMP atau sederajat</option>
                                    <option value="SMA atau sederajat">SMA atau sederajat</option>
                                    <option value="D3 atau sederajat">D3 atau sederajat</option>
                                    <option value="S1 atau sederajat">S1 atau sederajat</option>
                                    <option value="S2 atau S3">S2 atau S3</option>
                                </select>
                            </div>
                            <div class="mb-3" style="text-align: left;">
                                <label for="deadline" class="form-label">Deadline Beasiswa</label>
                                <input type="date" class="form-control" id="deadline" name="deadline" required>
                            </div>
                            <div class="mb-3" style="text-align: left;">
                                <label for="syarat" class="form-label">Syarat dan ketentuan pendaftaran</label>
                                <textarea class="form-control" id="syarat" name="syarat" rows="10" cols="50" maxlength="1000"
                                    required></textarea>
                            </div>
                            <div class="mb-3" style="text-align: left;">
                                <label for="tautan" class="form-label">Tautan pendaftaran atau informasi
                                    pendaftaran</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">Tautan Pendaftaran</span>
                                    </div>
                                    <input type="text" class="form-control" id="tautan" name="tautan"
                                        aria-describedby="basic-addon3" required>
                                </div>
                            </div>
                            <div class="mb-3" style="text-align: left;">
                                <label for="poster" class="form-label">Gambar atau poster beasiswa</label>
                                <input class="form-control" type="file" id="poster" name="poster"
                                    accept="application/pdf,image/png,image/jpeg" required>
                                <div id="emailHelp" class="form-text">*Unggah poster dalam bentuk PDF, PNG, JPG.</div>
                            </div>
                            <div class="mb-3" style="text-align: left;">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value=" {{ session('email') }}" aria-describedby="emailHelp" readonly required>
                                <div id="emailHelp" class="form-text">*Pastikan alamat email yang anda berikan dapat
                                    kami hubungi untuk
                                    proses validasi keabsahan data beasiswa, jika ingin merubah alamat email silahkan
                                    cek dihalaman profil anda.</div>
                            </div>
                            <input type="hidden" value="dalam proses" name="status">
                            <button type="submit" class="btn btn-success w-100 mt-2 fw-bold">Unggah Beasiswa</button>
                        </form>
                    </div>
                </div>
            </div>

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
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');
        CKEDITOR.replace('syarat');
    </script>

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
