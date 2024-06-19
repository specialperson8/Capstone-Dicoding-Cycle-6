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


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- style carousel -->
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('asset/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
</head>

<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda<br></a></li>
                    <li><a href="{{ route('daftar') }}">Beasiswa</a></li>
                    <li><a href="{{ route('favorit') }}">Favorit</a></li>
                    <li><a href="{{ route('tentang') }}" class="active">Tentang</a></li>

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

    <div class="container-xxl bg-white p-0">
        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Beasiswa</a></li>
                        <li class="breadcrumb-item"><a href="#">Favorit</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp">
                        <h2 data-aos="zoom-out" data-aos-delay="200">Tentang Kami</h2>
                        <h3 data-aos="zoom-out" data-aos-delay="300">Nemu Beasiswa.</h3>
                        <p data-aos="zoom-out" data-aos-delay="400"> Selamat datang di NemuBeasiswa, platform untuk
                            mencari informasi beasiswa dengan mudah.
                            Kami berupaya
                            menghilangkan hambatan finansial pendidikan tinggi. NemuBeasiswa menyediakan informasi
                            terpusat tentang
                            berbagai beasiswa, termasuk persyaratan, tenggat waktu, dan proses aplikasi.
                            Bergabunglah sekarang untuk
                            masa depan cerah!
                        </p>
                        <p class="mb-4" data-aos="zoom-out" data-aos-delay="500">NemuBeasiswa hadir dengan tampilan
                            yang ramah pengguna, sehingga Anda dapat
                            dengan mudah menemukan beasiswa yang sesuai dengan kebutuhan Anda. Kami menyediakan
                            informasi terpusat yang mencakup persyaratan, tenggat waktu, cakupan beasiswa, dan proses
                            aplikasi untuk berbagai program beasiswa, baik di dalam maupun luar negeri.
                        </p>
                        <h4 class="mb-4" data-aos="zoom-out" data-aos-delay="600">
                            Visi
                        </h4>
                        <p class="mb-4" data-aos="zoom-out" data-aos-delay="700">Menjadi platform terdepan dalam
                            menyediakan informasi beasiswa yang dapat
                            diakses oleh setiap pelajar di Indonesia, guna mewujudkan generasi yang lebih cerdas dan
                            berpendidikan tinggi.
                        </p>
                        <h4 class="mb-4"data-aos="zoom-out" data-aos-delay="800">
                            Misi
                        </h4>
                        <p class="mb-4" data-aos="zoom-out" data-aos-delay="850">
                            <i class="bi bi-check">Memberikan Akses Informasi: Menyediakan informasi lengkap dan
                                terkini
                                mengenai beasiswa dari berbagai sumber terpercaya.
                            </i>
                        </p>
                        <p class="mb-4"data-aos="zoom-out" data-aos-delay="950">
                            <i class="bi bi-check">Menyederhanakan Proses Pencarian: Menghadirkan antarmuka yang mudah
                                digunakan untuk mempermudah pengguna dalam mencari dan menemukan beasiswa yang sesuai.
                            </i>
                        </p>
                        <p class="mb-4"data-aos="zoom-out" data-aos-delay="960">
                            <i class="bi bi-check">Mendukung Kesuksesan Akademis: Membantu pelajar Indonesia mengatasi
                                hambatan finansial dalam pendidikan dan meraih cita-cita akademis mereka.
                            </i>
                        </p>
                        <p class="mb-4"data-aos="zoom-out" data-aos-delay="970">
                            <i class="bi bi-check">Memperluas Jaringan Beasiswa: Berkolaborasi dengan berbagai
                                institusi
                                pendidikan, pemerintah, dan organisasi lainnya untuk memperluas akses beasiswa bagi
                                pelajar Indonesia.
                            </i>
                        </p>
                        <p class="mb-4"data-aos="zoom-out" data-aos-delay="980">
                            <i class="bi bi-check"> Bergabunglah dengan NemuBeasiswa sekarang dan jadilah bagian dari
                                komunitas yang mendukung masa depan pendidikan yang lebih cerah. Mari kita wujudkan
                                mimpi dan aspirasi akademis bersama-sama!
                            </i>
                        </p>
                    </div>
                    <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img class="img-fluid w-75 rounded-circle bg-light p-3"
                                    src="{{ asset('assets/img/tentang/about1.jpg') }}" alt="">
                            </div>
                            <div class="col-6 text-start" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3"
                                    src="{{ asset('assets/img/tentang/about2.jpeg') }}" alt="">
                            </div>
                            <div class="col-6 text-end" style="margin-top: -150px;">
                                <img class="img-fluid w-100 rounded-circle bg-light p-3"
                                    src="{{ asset('assets/img/tentang/about3.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <main class="main">
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
                                <p>Kami akan memberikan daftar beasiswa yang terpercaya dan divalidasi langsung oleh
                                    orang
                                    orang
                                    terpercaya.</p>
                            </div>
                        </div><!-- End Card Item -->

                    </div>

                </div>

            </section><!-- /Values Section -->

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

            <!-- Team Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 600px;">
                        <h1 class="mb-3">Team</h1>
                        <p>Lihat Orang Yang Berperan Aktif</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item position-relative">
                                <img class="img-fluid rounded-circle w-75"
                                    src="{{ asset('assets/img/team/dara.jpg') }}" alt="">
                                <div class="team-text">
                                    <h3>Dara Dona</h3>
                                    <p>Leader Team</p>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-square btn-primary mx-1" href=""><i
                                                class="fab fa-whatsapp"></i></a>
                                        <a class="btn btn-square btn-primary  mx-1" href=""><i
                                                class="fab fa-github"></i></a>
                                        <a class="btn btn-square btn-primary  mx-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item position-relative">
                                <img class="img-fluid rounded-circle w-75"
                                    src="{{ asset('assets/img/team/tegar.jpg') }}" alt="">
                                <div class="team-text">
                                    <h3>Tegar Alam Q</h3>
                                    <p>Back-end Developers</p>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-square btn-primary mx-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary  mx-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary  mx-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="team-item position-relative">
                                <img class="img-fluid rounded-circle w-75"
                                    src="{{ asset('assets/img/team/nisa.jpg') }}" alt="">
                                <div class="team-text">
                                    <h3>Putri Adelia K</h3>
                                    <p>Front-end Developers</p>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-square btn-primary mx-1" href=""><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-square btn-primary  mx-1" href=""><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-square btn-primary  mx-1" href=""><i
                                                class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->

        </main>
    </div>

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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>


    <!-- Style JS File -->
    <script src="{{ asset('assets/js/style.js') }}"></script>
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
