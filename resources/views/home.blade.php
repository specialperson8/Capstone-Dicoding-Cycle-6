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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                    <li><a href="#" class="active">Beranda<br></a></li>
                    <li><a href="{{ route('daftar') }}">Beasiswa</a></li>
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

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Kami telah menemukan Beasiswa yang cocok dengan anda
                            <p data-aos="fade-up" data-aos-delay="100">Dapatkan beasiswa terbaik untuk masa depan yang
                                cerah</p>
                            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                                <a href="#about" class="btn-get-started">Jalajahi <i class="bi bi-arrow-right"></i></a>
                            </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Tentang</h3>
                            <h2>Nemu Beasiswa.</h2>
                            <p>
                                Selamat datang di NemuBeasiswa, platform untuk mencari informasi beasiswa dengan mudah.
                                Kami berupaya
                                menghilangkan hambatan finansial pendidikan tinggi. NemuBeasiswa menyediakan informasi
                                terpusat tentang
                                berbagai beasiswa, termasuk persyaratan, tenggat waktu, dan proses aplikasi.
                                Bergabunglah sekarang untuk
                                masa depan cerah!
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="{{ asset('assets/img/about.png') }}" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Values Section -->
        <section id="values" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kamu harus tau</h2>
                <p>Kenapa harus NemuBeasiswa ?<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="{{ asset('assets/img/values-1.png') }}" class="img-fluid" alt="">
                            <h3>Mudah Digunakan</h3>
                            <p>Platform kami dirancang untuk kemudahan penggunaan. Dengan antarmuka yang intuitif,
                                Anda dapat dengan mudah menemukan dan mengajukan beasiswa yang sesuai dengan
                                kebutuhan Anda.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="{{ asset('assets/img/values-2.png') }}" class="img-fluid" alt="">
                            <h3>Platform bebas biaya</h3>
                            <p>Semua layanan yang kami tawarkan adalah gratis. Anda tidak perlu membayar sepeser pun
                                untuk mencari dan mengakses informasi beasiswa terbaik yang tersedia.
                            </p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="{{ asset('assets/img/values-3.png') }}" class="img-fluid" alt="">
                            <h3>Beasiswa Terpercaya.</h3>
                            <p>Kami akan memberikan daftar beasiswa yang terpercaya dan divalidasi langsung oleh orang
                                orang
                                terpercaya.</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Values Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Fitur</h2>
                <p>Kelebihan Nemu Beasiswa<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="assets/img/features.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-xl-6 d-flex">
                        <div class="row align-self-center gy-4">

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Ramah pengguna</h3>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Terpercaya</h3>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Keamanan terpercaya</h3>
                                </div>
                            </div><!-- End Feature Item -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="feature-box d-flex align-items-center">
                                    <i class="bi bi-check"></i>
                                    <h3>Fleksibelitas</h3>
                                </div>
                            </div><!-- End Feature Item -->

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Alt Features Section -->


        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kategori</h2>
                <p>Kategori Beasiswa<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-orange position-relative">
                            <img src="{{ asset('assets/img/logo-kategori/sd.png') }}" width="100"
                                class="img-fluid animated rounded mb-4" alt="">
                            <h3>Beasiswa Sekolah Dasar</h3>
                            <p>Beasiswa tingkat sekolah dasar (SD) atau sederajat yang memiliki motivasi
                                tinggi dalam belajar dan memiliki prestasi yang baik.</p>
                            <a href="{{ route('filterBeasiswa', 'SD atau sederajat') }}"
                                class="read-more stretched-link"><span>Lihat Beasiswa</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-cyan position-relative">
                            <img src="{{ asset('assets/img/logo-kategori/smp.png') }}" width="100"
                                class="img-fluid animated rounded mb-4" alt="">
                            <h3>Beaiswa Sekolah Menengah Pertama</h3>
                            <p>Beasiswa tingkat Sekolah Menengah Pertama (SMP) atau sederajat yang memiliki motivasi
                                tinggi dalam belajar dan memiliki prestasi yang baik.</p>
                            <a href="{{ route('filterBeasiswa', 'SMP atau sederajat') }}"
                                class="read-more stretched-link"><span>Lihat Beasiswa</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-teal position-relative">
                            <img src="{{ asset('assets/img/logo-kategori/sma.png') }}" width="100"
                                class="img-fluid animated rounded mb-4" alt="">
                            <h3>Beasiswa Sekolah Menengah Atas</h3>
                            <p>Beasiswa tingkat Sekolah Menengah Atas (SMA) atau sederajat yang memiliki motivasi
                                tinggi dalam belajar dan memiliki prestasi yang baik.</p>
                            <a href="{{ route('filterBeasiswa', 'SMA atau sederajat') }}"
                                class="read-more stretched-link"><span>Lihat Beasiswa</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-red position-relative">
                            <img src="{{ asset('assets/img/logo-kategori/d3.png') }}" width="100"
                                class="img-fluid animated rounded mb-4" alt="">
                            <h3>Beasiswa D3 - Sederajat</h3>
                            <p>Beasiswa tingkat Diploma 3 atau sederajat yang memiliki motivasi
                                tinggi dalam belajar dan memiliki prestasi yang baik.</p>
                            <a href="{{ route('filterBeasiswa', 'D3 atau sederajat') }}"
                                class="read-more stretched-link"><span>Lihat Beasiswa</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item item-indigo position-relative">
                            <img src="{{ asset('assets/img/logo-kategori/s1.png') }}" width="100"
                                class="img-fluid animated rounded mb-4" alt="">
                            <h3>Beasiswa S1 - Sederajat</h3>
                            <p>Beasiswa tingkat Sarjana atau sederajat yang memiliki motivasi
                                tinggi dalam belajar dan memiliki prestasi yang baik.</p>
                            <a href="{{ route('filterBeasiswa', 'S1 atau sederajat') }}"
                                class="read-more stretched-link"><span>Lihat Beasiswa</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item item-pink position-relative">
                            <img src="{{ asset('assets/img/logo-kategori/master.png') }}" width="100"
                                class="img-fluid animated rounded mb-4" alt="">
                            <h3>Beasiswa S2 atau S3</h3>
                            <p>Beasiswa tingkat Magister atau Doktoral yang memiliki motivasi
                                tinggi dalam belajar dan memiliki prestasi yang baik.</p>
                            <a href="{{ route('filterBeasiswa', 'S2 atau S3') }}"
                                class="read-more stretched-link"><span>Lihat Beasiswa</span> <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->


        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p>Frequently Asked Questions</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3>Apa Itu NemuBeasiswa ?</h3>
                                <div class="faq-content">
                                    <p>Website informasi beasiswa untuk menciptakan sumber daya informasi yang terpusat,
                                        mudah diakses,
                                        dan komprehensif bagi para pencari beasiswa. Dengan menyediakan platform yang
                                        intuitif dan
                                        terstruktur dengan baik, kami berkomitmen untuk mempermudah para pencari
                                        beasiswa dalam menemukan
                                        berbagai informasi yang diperlukan, seperti persyaratan, tenggat waktu, cakupan
                                        beasiswa, dan proses
                                        aplikasi.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah NemuBeasiswa gratis digunakan ?</h3>
                                <div class="faq-content">
                                    <p>Kamu dapat mengakses informasi beasiswa secara lengkap di website NemuBeasiswa
                                        tanpa dipungut
                                        biaya. Di NemuBeasiswa, kamu bukan hanya bisa mendapatkan informasi beasiswa,
                                        tetapi juga bisa
                                        berbagi informasi beasiswa dengan pengguna lain yang membutuhkan. Platform ini
                                        dirancang untuk
                                        mendukung kolaborasi dan saling membantu antar pencari beasiswa, sehingga setiap
                                        orang memiliki
                                        kesempatan yang lebih besar untuk menemukan dan meraih beasiswa yang sesuai
                                        dengan kebutuhan mereka.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana mencari beasiswa yang pas di NemuBeasiswa ?</h3>
                                <div class="faq-content">
                                    <p>Kami menyediakan fitur pencarian yang memungkinkan kamu mencari beasiswa yang
                                        sesuai dengan
                                        kebutuhanmu. Selain itu, ada juga fitur yang mengkategorikan beasiswa
                                        berdasarkan jenjang
                                        pendidikan, sehingga memudahkanmu menemukan peluang beasiswa yang relevan dengan
                                        tahap pendidikan
                                        yang sedang kamu jalani. Dengan fitur-fitur ini, kami berharap dapat membantu
                                        kamu dalam menemukan
                                        beasiswa yang tepat dengan lebih cepat dan efisien.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">

                            <div class="faq-item">
                                <h3>Apakah NemuBeasiswa memberikan informasi beasiswa dari berbagai jenjang pendidikan?
                                </h3>
                                <div class="faq-content">
                                    <p>Kami menyediakan informasi beasiswa yang komprehensif untuk berbagai jenjang
                                        pendidikan, mulai dari
                                        SD, SMP, SMA, hingga pendidikan tinggi seperti S1, S2, dan S3. Setiap jenjang
                                        pendidikan ini
                                        memiliki kategori beasiswa yang beragam, disesuaikan dengan kebutuhan dan
                                        kondisi para pencari
                                        beasiswa. Untuk detail lebih lanjutnya dapat kamu kunjungi di bagian <a
                                            href="{{ route('daftar') }}"
                                            style="color: #191d88; font-weight: bold;">Daftar Beasiswa</a>.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah NemuBeasiswa dapat menjamin kita untuk diterima beasiswa ?</h3>
                                <div class="faq-content">
                                    <p>NemuBeasiswa adalah platform yang menyediakan informasi lengkap tentang berbagai
                                        beasiswa, termasuk
                                        persyaratan, timeline pendaftaran, cakupan, dan proses aplikasi. Kami membantu
                                        kamu menemukan
                                        beasiswa yang sesuai dengan kebutuhan dan kualifikasimu, namun tidak bertanggung
                                        jawab atas
                                        penjurian atau penilaian penerimaan beasiswa, karena itu sepenuhnya wewenang
                                        penyedia beasiswa. Kami
                                        menyediakan fitur tanya jawab melalui WhatsApp untuk mendukung kamu dalam proses
                                        aplikasi,
                                        memberikan informasi terbaru, dan solusi yang relevan. Dengan dukungan ini, kami
                                        berharap dapat
                                        membantu mengurangi kebingungan dan meningkatkan peluang kamu meraih beasiswa
                                        yang diimpikan. Jangan
                                        ragu menghubungi kami untuk bantuan atau pertanyaan seputar aplikasi beasiswa.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana cara saya mengupload atau mendaftarkan beasiswa pada NemuBeasiswa?</h3>
                                <div class="faq-content">
                                    <p>Untuk menggunakan fitur upload beasiswa di NemuBeasiswa, kamu perlu mendaftar
                                        akun terlebih dahulu.
                                        Setelah mendaftar, akses halaman upload beasiswa dan isi form yang tersedia
                                        dengan informasi seperti
                                        nama beasiswa, deskripsi, kategori pendidikan, deadline, tautan pendaftaran, dan
                                        gambar/poster jika
                                        ada. Setelah semua informasi lengkap, tekan tombol submit. Tim kami akan
                                        memverifikasi validitas
                                        informasi sebelum menampilkannya di website. Jika valid, beasiswa akan
                                        dipublikasikan dan kamu akan
                                        diberitahu. Fitur ini membantu memperluas jaringan informasi beasiswa dan
                                        meningkatkan aksesibilitas
                                        bagi pengguna lainnya..</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->



        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Lihat orang yang beperan aktif</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-3">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/dara.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Dara Dona</h4>
                                <span>Leader Team</span>
                                <p>"Hari ini adalah tonggak sejarah. Ini menunjukkan seberapa jauh Anda telah melangkah.
                                    Terus belajar, terus mencoba, terus mencapai, dan terus menjelajahi perjalanan
                                    Anda."</p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/tegar.jpg') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Tegar Alam Qussoyi</h4>
                                <span>Back-end Web Developers</span>
                                <p>"Menghadirkan solusi backend yang handal dan efisien. Setiap baris kode adalah
                                    langkah menuju kesempurnaan dalam setiap aplikasi yang saya bangun."</p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/nisa.jpg') }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Putri Adelia Khairunnisa</h4>
                                <span>Frontend Web Developers</span>
                                <p>"Bukan berarti Tuhan tidak tahu kesedihanmu, tapi Tuhan tahu kamu kuat. Memberikan
                                    tampilan terbaik untuk setiap aplikasi, agar pengalaman pengguna menjadi luar
                                    biasa."</p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/team/angga.png') }}" class="img-fluid"
                                    alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Ivan Aulia Rahman</h4>
                                <span>Advisor</span>
                                <p>Seorang backend developer bertanggung jawab untuk mengembangkan dan memelihara sisi
                                    server dari sebuah aplikasi web. </p>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->


        <!-- Recent Posts Section -->
        <section id="recent-posts" class="recent-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita Terkini</h2>
                <p>Lihat Berita Terkini</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/berita/berita-1.jpeg') }}" class="img-fluid"
                                    alt="">
                                <span class="post-date">15 Agustus 2020</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Kisah Inspiratif Wanita Yogya Raih Beasiswa S-3 di Kampus
                                    Oxford, Inggris</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Gresnia Arela Febriani -
                                            wolipop</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="https://wolipop.detik.com/worklife/d-5134708/kisah-inspiratif-wanita-yogya-raih-beasiswa-s-3-di-kampus-oxford-inggris"
                                    class="readmore stretched-link"><span>Lihat berita</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/berita/berita-2.jpg') }}" class="img-fluid"
                                    alt="">
                                <span class="post-date">16 Februari 2023</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Kisah Inspiratif Beasiswa Luar Negeri, dari Anak Petani hingga
                                    Satpam yang Jadi
                                    Lulusan Luar Negeri</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Shifa Nurhaliza Putri -
                                            Okezone.com</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="https://www.idxchannel.com/inspirator/kisah-inspiratif-beasiswa-luar-negeri-dari-anak-petani-hingga-satpam-yang-jadi-lulusan-luar-negeri"
                                    class="readmore stretched-link"><span>Lihat Berita</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="{{ asset('assets/img/berita/berita03.jpg') }}" class="img-fluid"
                                    alt="">
                                <span class="post-date">23 Desember 2022</span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title">Cerita Mahasiswa Inspiratif, Pantang Menyerah Raih Prestasi
                                    Tertinggi</h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">Ayunda Pininita Kasih -
                                            Kompas.com</span>
                                    </div>
                                </div>

                                <hr>

                                <a href="https://www.kompas.com/edu/read/2022/12/23/162015271/cerita-mahasiswa-inspiratif-pantang-menyerah-raih-prestasi-tertinggi"
                                    class="readmore stretched-link"><span>Lihat Berita</span><i
                                        class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post item -->

                </div>

            </div>

        </section><!-- /Recent Posts Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Kontak Kami</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>
                                    <p>Gedangan, Sidoarjo</p>
                                    <p>Jawa Timur, Indonesia</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>WhatsApp</h3>
                                    <p>+62 857-9127-2641</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email</h3>
                                    <p>nemubeasiswa@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Jam Kerja</h3>
                                    <p>Senin - Sabtu</p>
                                    <p>08:00 - 17:00</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="https://formspree.io/f/moqggbde" method="POST" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Nama kamu" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email Kamu" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subjek"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Pesan yang ingin kamu sampaikan...."
                                        required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="sent-message">Pesan kamu berhasil dikirim ke email tim nemu beasiswa
                                    </div>
                                    <button type="submit">Kirim Pesan</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

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
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.querySelector('.php-email-form');

            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData(form);

                fetch('https://formspree.io/f/moqggbde', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'Accept': 'application/json'
                        },
                    })
                    .then(response => {
                        if (response.ok) {
                            Swal.fire({
                                title: 'Success!',
                                text: 'Pesan kamu berhasil dikirim ke email tim nemu beasiswa',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            });
                            form.reset(); // Clear the form fields on success
                        } else {
                            throw new Error('Something went wrong');
                        }
                    })
                    .catch(error => {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Pesan kamu gagal dikirim',
                            icon: 'error',
                            confirmButtonText: 'Ok'
                        });
                    });
            });
        });
    </script>

</body>

</html>
