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
                <a class="nav-link active" href="{{ route('tabel-beasiswa') }}">
                    <i class="bi bi-book-half"></i>
                    <span>Daftar Beasiswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tabel-user') }}">
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
                    <li class="breadcrumb-item active">Tabel Beasiswa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Beasiswa</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col" style="width: 20%">Nama Beasiswa</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Deadline</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" style="width: 10%;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($beasiswa as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>{{ $item->namabeasiswa }}</td>
                                                    <td>{!! \Illuminate\Support\Str::limit($item->deskripsi, 50) !!}</td>
                                                    <td>{{ $item->kategori }}</td>
                                                    <td>{{ $item->deadline }}</td>
                                                    <td>
                                                        @if ($item->status == 'diterima')
                                                            <span
                                                                class="badge rounded-pill bg-success">{{ $item->status }}</span>
                                                        @elseif($item->status == 'ditolak')
                                                            <span
                                                                class="badge rounded-pill bg-danger">{{ $item->status }}</span>
                                                        @else
                                                            <span
                                                                class="badge rounded-pill bg-warning">{{ $item->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#detail{{ $item->id }}">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-danger"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#hapus{{ $item->id }}">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card" style="width: 100%">
                    <div class="card-header">
                        <h5 class="card-title
                            text-center">Unggah Beasiswa</h5>
                    </div>

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
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" cols="50" maxlength="1000"
                                    required></textarea>
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
        </section><!-- End Left side columns -->

        {{-- modal all  --}}
        <!-- Modal detail -->
        @foreach ($beasiswa as $item)
            <div class="modal fade" id="detail{{ $item->id }}" tabindex="-1"
                aria-labelledby="detailModalLabel{{ $item->id }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="detailModalLabel{{ $item->id }}">
                                {{ $item->namabeasiswa }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label fw-bold">Deskripsi</label>
                                <p>{!! $item->deskripsi !!}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Kategori</label>
                                <p>{{ $item->kategori }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Deadline</label>
                                <p>{{ $item->deadline }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Syarat dan Ketentuan</label>
                                <p>{!! $item->syarat !!}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Tautan Pendaftaran</label>
                                <p><a href="{{ $item->tautan }}" target="_blank">{{ $item->tautan }}</a></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Email Kontak</label>
                                <p><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Status</label>
                                <p>{{ $item->status }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Poster Beasiswa</label>
                                <br>
                                <a href="{{ asset('storage/' . $item->poster) }}" download
                                    class="btn btn-primary">Unduh
                                    Poster</a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('beasiswa.updateStatus') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <input type="hidden" name="status" value="ditolak">
                                <button type="submit" class="btn btn-danger">Tolak</button>
                            </form>
                            <form action="{{ route('beasiswa.updateStatus') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <input type="hidden" name="status"
                                    value="{{ $item->status == 'dalam proses' ? 'diterima' : 'dalam proses' }}">
                                @if ($item->status == 'diterima')
                                    <button type="submit" class="btn btn-warning">Validasi Kembali</button>
                                @elseif($item->status == 'dalam proses')
                                    <button type="submit" class="btn btn-success">Terima</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Modal hapus -->
        @foreach ($beasiswa as $item)
            <div class="modal fade" id="hapus{{ $item->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Beasiswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus beasiswa {{ $item->namabeasiswa }}?</p>
                        </div>
                        <div class="modal-footer">
                            <form action="{{ route('beasiswa.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- medal all end --}}
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
