-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 02:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nemubeasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswas`
--

CREATE TABLE `beasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namabeasiswa` varchar(999) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `syarat` longtext NOT NULL,
  `tautan` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswas`
--

INSERT INTO `beasiswas` (`id`, `namabeasiswa`, `deskripsi`, `kategori`, `deadline`, `syarat`, `tautan`, `poster`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Beasiswa pendidikan pemkab Sidoarjo', '<p>Beasiswa Sidoarjo adalah program bantuan pendidikan yang diberikan oleh Pemerintah Kabupaten Sidoarjo untuk membantu mahasiswa berprestasi atau yang kurang mampu secara finansial agar dapat melanjutkan pendidikan ke jenjang yang lebih tinggi. Beasiswa ini bertujuan untuk mendukung pengembangan sumber daya manusia di daerah Sidoarjo.</p>', 'D3 atau sederajat', '2024-06-15', '<p><strong>Jenis Beasiswa:</strong></p>\n\n<ol>\n	<li><strong>Beasiswa Prestasi:</strong> Diberikan kepada mahasiswa dengan prestasi akademik yang sangat baik.</li>\n	<li><strong>Beasiswa Kurang Mampu:</strong> Diperuntukkan bagi mahasiswa yang berasal dari keluarga kurang mampu secara ekonomi.</li>\n</ol>\n\n<p><strong>Syarat dan Ketentuan Umum:</strong></p>\n\n<ul>\n	<li>Warga Sidoarjo (memiliki KTP Sidoarjo).</li>\n	<li>Terdaftar sebagai mahasiswa aktif.</li>\n	<li>IPK minimum untuk beasiswa prestasi.</li>\n	<li>Surat Keterangan Tidak Mampu untuk beasiswa kurang mampu.</li>\n	<li>Surat rekomendasi (jika diperlukan).</li>\n</ul>\n\n<p><strong>Proses Pendaftaran:</strong></p>\n\n<ol>\n	<li>Pengumuman beasiswa melalui situs resmi atau dinas terkait.</li>\n	<li>Pengumpulan berkas pendaftaran.</li>\n	<li>Seleksi administrasi berkas.</li>\n	<li>Wawancara (jika diperlukan).</li>\n	<li>Pengumuman penerima beasiswa.</li>\n</ol>\n\n<p><strong>Manfaat Beasiswa:</strong></p>\n\n<ul>\n	<li>Pembiayaan kuliah, termasuk biaya kuliah, uang buku, atau biaya hidup.</li>\n	<li>Dukungan non-finansial seperti pelatihan atau bimbingan.</li>\n</ul>\n\n<p>Beasiswa Sidoarjo memberikan kesempatan bagi mahasiswa untuk mendapatkan dukungan finansial dan non-finansial dalam melanjutkan pendidikan tinggi.</p>', 'http://127.0.0.1:8000/home', 'posters/b2FOjC7DjesymoM4UbhCuxYoktMzBOrLH7A573Kq.jpg', 'pemkab123@gmail.com', 'diterima', '2024-06-14 23:42:15', '2024-06-14 23:42:15'),
(3, 'Beasiswa S1 di Binus University', '<p>Hai Sobat Beasiswa.ID! Satu lagi tawaran&nbsp;<a href=\"https://beasiswa.id/\" target=\"_blank\">beasiswa kuliah</a>&nbsp;S1 yang bisa kamu coba! Universitas Bina Nusantara (<a href=\"https://beasiswa.id/tag/Binus-University\">Binus University</a>)&nbsp;melalui&nbsp;PT Mega Central Finance &amp; PT Mega Auto Finance&nbsp;kembali menawarkan gratis kuliah S1 dan pengalaman magang serta berkarir secara profesional. Beasiswa ini ditujukan untuk lulusan SMA/SMK tahun 2023 dan 2024.</p>', 'S1 atau sederajat', '2024-06-15', '<p>saasasasa</p>', 'http://127.0.0.1:8000/home', 'posters/mkMtiIez5Qj3ztEiNJztzk3PCQ3dVA2Cro4mMCxe.jpg', 'fachry150503@gmail.com', 'diterima', '2024-06-15 00:36:07', '2024-06-15 00:36:07'),
(4, 'test', '<p>dsdsds</p>', 'SMA atau sederajat', '2024-06-16', '<p>dsdsds</p>', 'http://127.0.0.1:8000/home', 'posters/s91oPvkljgNUWi4GmfNNI8DnxfWCNkMAoYis5XGm.jpg', 'fachry150503@gmail.com', 'diterima', '2024-06-16 07:54:16', '2024-06-16 07:54:16'),
(5, 'sasa', '<p>sasasasa</p>', 'SD atau sederajat', '2024-06-17', '<p>sasasa</p>', 'http://127.0.0.1:8000/home', 'posters/B1g4jwYoUDPNT4GOip3wBdSNbZINdGEnchCjxGsW.jpg', 'fachry150503@gmail.com', 'dalam proses', '2024-06-16 22:48:57', '2024-06-16 22:48:57'),
(6, 'Beasiswa pendidikan Agama', '<p>sasasasa</p>', 'SMA atau sederajat', '2024-06-26', '<p>sasasa</p>', 'http://127.0.0.1:8000/home', 'posters/q6R2DIJOUAGnnf115XiJTtvVa9xnMeTASoTqLzzY.jpg', 'fachry150503@gmail.com', 'dalam proses', '2024-06-16 22:54:50', '2024-06-16 22:54:50'),
(7, 'Beasiswa pendidikan Agama Islam', '<p>Deskripsi beasiswa</p>', 'S2 atau sederajat', '2024-06-17', '<p>Syarat</p>', 'https://www.youtube.com/', 'posters/qB9vvD7GPg4qXm6YLAdweBNKcOmFL2yUbplIt0Ku.jpg', 'fachry150503@gmail.com', 'dalam proses', '2024-06-17 00:17:03', '2024-06-17 00:17:03'),
(8, 'Beasiswa pendidikan', '<p>asasasasa</p>', 'S2 atau sederajat', '2024-06-17', '<p>asasasasa</p>', 'http://127.0.0.1:8000/home', 'posters/nwI8kVKGyrWIM11RHQod2XwDyZGfFvvNzjsXXhGD.png', 'rizkyzky1505@gmail.com', 'dalam proses', '2024-06-17 02:31:42', '2024-06-17 02:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `detail_beasiswa`
--

CREATE TABLE `detail_beasiswa` (
  `id` int(12) NOT NULL,
  `nama_beasiswa` varchar(50) NOT NULL,
  `deadline` date NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `link_daftar` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `syarat_daftar` varchar(500) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `namabeasiswa` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deadline` date NOT NULL,
  `syarat` text NOT NULL,
  `tautan` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_05_105028_create_laporanbeasiswas_table', 2),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(7, '2024_06_05_122307_create_sessions_table', 3),
(8, '2024_06_05_143046_create_beasiswas_table', 4),
(9, '2024_06_16_151033_create_favorites_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('M4LnbBkvEQqcf3Wtc64FTLKS1kuDJsD6JgvSgSbI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejNpTGE0ZmREMlgxTjh6S0U1R1BmNlp3WFRGVGFicXJzcHZEZjZUaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717590791);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nisa', 'nisa123@gmail.com', NULL, '$2y$10$Su.8d0wo/QMrE/ZAOpaFIeXIbvwKBFXo.odSXw3aWSXxp14WxdALO', NULL, NULL, NULL, NULL, '2024-06-05 00:13:07', '2024-06-05 00:13:07'),
(2, 'nisa', 'admin@gmail.com', NULL, '$2y$10$o6G3wiNe231IJhbxNgS49OfXvjeh7T3UocasDa1UveuYZlEnl1ME.', NULL, NULL, NULL, NULL, '2024-06-05 03:49:17', '2024-06-05 03:49:17'),
(3, 'tegar', 'tegar123@gmail.com', NULL, '$2y$10$l.ReGg/6VcVZ03cd9GGL9O4FQkhcwm9GeMww4vcrGQR68e9C4dS5i', NULL, NULL, NULL, NULL, '2024-06-16 04:46:59', '2024-06-16 04:46:59'),
(5, 'bangotot', 'tegar1234@gmail.com', NULL, '$2y$10$SmpAfJQxoN1VEfMgt9iZiOfJm7DCFBtINarSC2QUWIYJ4SezJRO7m', NULL, NULL, NULL, NULL, '2024-06-16 04:54:08', '2024-06-16 04:54:08'),
(6, 'putri', 'putri@gmail.com', NULL, '$2y$10$7jdz7n14H.9RoT9CAxO8y.NOfVsMc3UgV8qSR6BAomfGwWcGhqpe.', NULL, NULL, NULL, NULL, '2024-06-16 04:59:40', '2024-06-16 04:59:40'),
(7, 'mas', 'mas1@gmail.com', NULL, '$2y$10$LvjFCaZsV2LEPwAHKEpwUue3DSUCcV8GCP6Ny1cikt1HIBQDIwFU2', NULL, NULL, NULL, NULL, '2024-06-16 05:05:18', '2024-06-16 05:05:18'),
(8, 'Fachry', 'fa@gmail.com', NULL, '$2y$10$.bGsMVt5KpqPlWqyFSf66OWFW1J1BtJNeqAfaVDlyQyE.VudoIKty', NULL, NULL, NULL, NULL, '2024-06-16 05:13:25', '2024-06-17 02:15:48'),
(9, 'PutriNisa', 'putrinisa@gmail.com', NULL, '$2y$10$tB5//dpxymLCYF7wJvt0DOgzdtFUJycoYymGB.aOmq4LefakeekiS', NULL, NULL, NULL, NULL, '2024-06-16 22:13:29', '2024-06-16 22:13:29'),
(10, 'polije', 'polije@gmail.com', NULL, '$2y$10$LfkdmCAxzUzgGZDO.VoMLe0qrM1YNq6gcqToTPchMOYhCOBqJdrfK', NULL, NULL, NULL, NULL, '2024-06-16 23:58:26', '2024-06-16 23:58:26'),
(11, 'Rizky', 'rizkyzky15@gmail.com', NULL, '$2y$10$AzcGFqr7GZvaKKOSgFKgMOcPSdqnJlYu/IAUqkPDvDDPCEYwCcR4O', NULL, NULL, NULL, NULL, '2024-06-17 02:20:26', '2024-06-17 02:24:25'),
(12, 'Masadam', 'adam1@gmail.com', NULL, '$2y$10$F8PJCKXuoY2QUnYrmKcGTOucckeIMMHswlfSONgj8Z6dF/9B0Tn6G', NULL, NULL, NULL, NULL, '2024-06-17 03:21:51', '2024-06-17 03:26:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beasiswas`
--
ALTER TABLE `beasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_beasiswa`
--
ALTER TABLE `detail_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beasiswas`
--
ALTER TABLE `beasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_beasiswa`
--
ALTER TABLE `detail_beasiswa`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
