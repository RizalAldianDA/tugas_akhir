-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 04:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websistem_covid19`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usernameadmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordadmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `usernameadmin`, `passwordadmin`, `created_at`, `updated_at`) VALUES
(1, 'roko', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `file_name`, `file`, `publisher_file`, `description`, `created_at`, `updated_at`) VALUES
(1, 'File Basis Pengisian Data Warga', 'assets/files\\file-1654749627.xlsx', 'Admin', 'Tata cara mengisi akun warga menggunakan EXCEL \r\n\r\n1. Unduh terlebih dahulu file excel yang sudah disediakan\r\n2. Kemudian isi file tersebut (disesuaikan pada filenya)\r\n3. Lalu unggah file tersebut pada kolom file \r\n4. Kemudian pilih simpan', '2022-05-18 11:56:55', '2022-06-08 21:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `tipe`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'bnp', 'Pesan Dari : Admin', 'Maaf sebelum mengisi data diri vaksinasi diwajibkan bagi warga yang telah masuk tidak menggunakan password untuk membuat password terlebih dahulu\r\ncaranya adalah\r\n\r\n1. Pilih menu Pengaturan pada bagian atas disebelah menu Tentang Kami\r\n2. Pilih Profil \r\n3. Kemudian isikan kolom Passwordnya \r\n4. Lalu pilih Simpan\r\n\r\nketika sudah maka pengguna dapat memulai mengisi data vaksinasi yang telah dilakukan', 'ON', '2022-05-24 11:48:06', '2022-06-04 23:58:31'),
(2, 'bp', 'Pesan Dari : Admin', 'Pada tahap ini pengguna dapat memulai mengisi data vaksinasi yang nantinya dapat di lihat oleh Ketua RT nya masing-masing\r\nCara pengisiannya \r\n\r\n1. Masuk ke menu yang baru muncul yaitu Vaksinasi\r\n2. kemudian pilih Tambah Data\r\n3. Lalu isi Kolom yang ada (untuk bagian kolom keluhan jika tidak ada, cukup kosongkan saja kolomnya)\r\n4. Lalu pilih Simpan\r\n\r\nCatatan Bahwa ketika sudah mengisi kolom Password pada pengaturan maka ketika akan masuk kembali diharuskan menggunakan password tersebut', 'ON', '2022-05-24 11:53:50', '2022-05-24 11:55:31'),
(3, 'log', 'Tata Cara Masuk Sebagai Warga', 'Tolong perhatikan tata cara masuk ke dalam website nya, untuk melancarkan proses pendataan vaksinasi warga\r\n\r\n(Yang Belum memiliki Kata Kunci)\r\n1. Masukan NIK sendiri pada kolom NIK\r\n2. Masukan Tanggal Lahir pada Kolom Password dengan penulisan (tttt-bb-hh)\r\nsebagai contoh : terlahir pada 1 Maret 2001 maka isi 2001-02-01\r\n3.  Lalu klik Masuk\r\n\r\n(Yang Sudah Memiliki Kata Kunci)\r\n1. Masukan NIK sendiri pada kolom NIK\r\n2. Masukan Password sendiri pada kolom NIK\r\n3. lalu klik Masuk', 'ON', '2022-06-04 23:54:19', '2022-06-08 23:41:24'),
(4, 'logket', 'Tata Cara Masuk Sebagai Ketua RT', 'Tata cara ini dikhusus kan untuk Ketua RT dikarenakan berhubungan dengan Admin dari website ini.\r\n\r\n1. Masukan Username yang sudah dibuat oleh Admin untuk Ketua RT\r\n2. Masukan Password yang sudah dibuat oleh Admin untuk Ketua RT\r\n3. Lalu Klik Login\r\n4. Ketika sudah masuk website, disarankan untuk mengubah password yang sudah diberi oleh Admin', 'ON', '2022-06-04 23:57:56', '2022-06-04 23:57:56'),
(5, 'ab', 'Mengenai Kami', 'Mengenai Website ini, difungsikan untuk mendata warga mengenai pelaksanaan vaksinasi yang sudah dijalankan, serta mendata status mengenai warga yang sudah terjangkit, belum terjangkit, dan sedang terjangkit Virus Covid-19.\r\n\r\nInfo Admin\r\nNo Hp : 082133455117\r\nNo Whasapp : 082133455117\r\n\r\nTerima Kasih', 'ON', '2022-06-05 00:03:24', '2022-06-08 21:16:49');

-- --------------------------------------------------------

--
-- Table structure for table `ketuas`
--

CREATE TABLE `ketuas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usernameket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwordket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `nomorhp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ketuas`
--

INSERT INTO `ketuas` (`id`, `nik`, `nama`, `usernameket`, `passwordket`, `rt`, `rw`, `nomorhp`, `created_at`, `updated_at`) VALUES
(1, '1234567898765432', 'Shinta', 'shinta888', '$2y$10$p/fcCh2WXjqsr98gXkqnt.AffcDYUX.19t2z1O/Q3mNFzX.jFNy7i', 1, 2, NULL, '2022-05-19 10:52:52', '2022-05-26 11:12:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_05_10_121632_create_ketuas_table', 1),
(5, '2022_05_10_121647_create_wargas_table', 1),
(6, '2022_05_10_121701_create_vaksinasis_table', 1),
(7, '2022_05_10_121717_create_admins_table', 1),
(8, '2022_05_12_035018_create_infos_table', 1),
(9, '2022_05_18_114947_create_files_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaksinasis`
--

CREATE TABLE `vaksinasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaksin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_vaksinasi` date NOT NULL,
  `vaksinasi_ke` int(11) NOT NULL,
  `keluhan_vaksinasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaksinasis`
--

INSERT INTO `vaksinasis` (`id`, `nik`, `vaksin`, `tanggal_vaksinasi`, `vaksinasi_ke`, `keluhan_vaksinasi`, `created_at`, `updated_at`) VALUES
(3, '1234567890987654', 'AB11003', '2022-05-25', 1, 'Tidak Ada', '2022-05-21 03:53:25', '2022-05-21 03:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `wargas`
--

CREATE TABLE `wargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nokk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `passwordwarga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomorhp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wargas`
--

INSERT INTO `wargas` (`id`, `nik`, `nokk`, `nama`, `gender`, `tanggal_lahir`, `rt`, `rw`, `passwordwarga`, `nomorhp`, `alamat`, `status`, `created_at`, `updated_at`) VALUES
(7, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(8, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(9, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(10, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(11, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(12, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(13, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(14, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(15, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(16, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(17, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(18, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(19, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(20, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(21, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(22, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(23, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(24, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(25, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(26, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(27, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(28, '1234567890987654', '0989876543212444', 'Loko', 'p', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(29, '9089786756453423', '0989876543212555', 'Poko', 'p', '2022-08-12', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48'),
(30, '1234567890987333', '0989876543212444', 'Mono', 'l', '2022-04-05', 1, 2, NULL, NULL, NULL, NULL, '2022-06-08 21:44:48', '2022-06-08 21:44:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketuas`
--
ALTER TABLE `ketuas`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaksinasis`
--
ALTER TABLE `vaksinasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wargas`
--
ALTER TABLE `wargas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ketuas`
--
ALTER TABLE `ketuas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaksinasis`
--
ALTER TABLE `vaksinasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wargas`
--
ALTER TABLE `wargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
