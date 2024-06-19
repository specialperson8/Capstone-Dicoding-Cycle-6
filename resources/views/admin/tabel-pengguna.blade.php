<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NemuBeasiswa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo-nemu1.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor-admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor-admin/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor-admin/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor-admin/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor-admin/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor-admin/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor-admin/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('dashboard') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/logo-nemu2.png') }}" alt="">
                <span class="d-none d-lg-block">NemuBeasiswa</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ session('username') }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ session('username') }}</h6>
                            <span>Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex align-items-center">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </button>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tabel-beasiswa') }}">
                    <i class="bi bi-book-half"></i>
                    <span>Daftar Beasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('tabel-user') }}">
                    <i class="bi bi-person-circle"></i>
                    <span>Daftar Pengguna</span>
                </a>
            </li>
            
            <!-- End Dashboard Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Halaman Fitur</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Tabel Pengguna</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Pengguna</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Pengguna</th>
                                            <th scope="col">Alamat Email</th>
                                            <th scope="col">Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $key => $data)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $data->username }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>
                                                    @if($data->email == 'admin@gmail.com')
                                                        Admin
                                                    @else
                                                        User
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- End Reports -->
                </div>
            </div>
        </section><!-- End Left side columns -->

            </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NemuBeasiswa</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">NemuBeasiswa</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor-admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor-admin/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/admin.js') }}"></script>

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
