-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 07:08 AM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilubismillah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindamai`
--

CREATE TABLE `admindamai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admindamai`
--

INSERT INTO `admindamai` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin1', '$2y$10$7W1f21fk6FI2nRCT3wy2oO2ORDzA1oLe9.7KsGU518QTjFnAoXcHW', '2024-06-12 23:48:08', '2024-06-12 23:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `formulir` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `ijazah` varchar(255) DEFAULT NULL,
  `surat_pernyataan` varchar(255) DEFAULT NULL,
  `surat_bebas_narkoba` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_05_23_020121_create_userpemilu_table', 1),
(5, '2024_05_23_063205_create_admindamai_table', 1),
(6, '2024_05_24_002936_create_partai_pemilu_table', 1),
(7, '2024_05_27_143847_add_profile_picture_to_users_table', 1),
(8, '2024_06_04_065608_create_pengaduanuser_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partaipemilu`
--

CREATE TABLE `partaipemilu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partaipemilu`
--

INSERT INTO `partaipemilu` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'PDIPERJUANGAN', '$2y$10$2NYHHiWvjm4B9jeQk7Mhb.WZTXVX4NFWmPWjFW4YiJwEvm8hMjLl6', '2024-06-12 23:48:08', '2024-06-12 23:48:08'),
(2, 'GERINDA', '$2y$10$25Cemdizd03HGS9YWw4Ra.570oPavYGRfFhjeXS6cef5jWta.Z7sy', '2024-06-12 23:48:08', '2024-06-12 23:48:08'),
(3, 'PAN', '$2y$10$9Da6qJAUc8JKCk2Ne9ZQ..3rJFayAe6H5Qsmke1Cn9vz.BJyKSCP2', '2024-06-12 23:48:08', '2024-06-12 23:48:08'),
(4, 'PKB', '$2y$10$HROVBD.dPOLYW48R7KlwHeOvVkcyMYgmm.YQHKk0rwwaduyAnR2xG', '2024-06-12 23:48:08', '2024-06-12 23:48:08'),
(5, 'GOLKAR', '$2y$10$2jEX2D0exQLQxUNa1uZPUOSkeqX0eoxq4ZEQ.AMALgxAWRUn.ugsi', '2024-06-12 23:48:09', '2024-06-12 23:48:09'),
(6, 'NASDEN', '$2y$10$gUkdvBX/qjliiKb3Xe40T.A87leg/sx1QTaYNpy54zz/pAq7UKbOC', '2024-06-12 23:48:09', '2024-06-12 23:48:09'),
(7, 'PSI', '$2y$10$7SyPaCPYn1y8Ef4t5O8L8OYhNRzhg3kirc26UlaztSwumBNpxwi8O', '2024-06-12 23:48:09', '2024-06-12 23:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelaporans`
--

CREATE TABLE `pelaporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_peserta` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduanuser`
--

CREATE TABLE `pengaduanuser` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal_pengaduan` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `response` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengaduanuser`
--

INSERT INTO `pengaduanuser` (`id`, `nik`, `judul`, `isi_laporan`, `foto`, `tanggal_pengaduan`, `status`, `response`, `created_at`, `updated_at`) VALUES
(5, '1234567890123456', 'berita pengaduan kecurangan', ' Ada debat istri capres-cawapres', 'public/complaints/zX02QjdB8rvTkPakwB5H1qCAEMpks0wGeTb26Ayr.jpg', '2024-06-14', 'resolved', 'berita valid', '2024-06-14 07:20:15', '2024-06-14 07:22:30');

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
-- Table structure for table `portofolio_caleg`
--

CREATE TABLE `portofolio_caleg` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `partai` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `visi_misi` text NOT NULL,
  `pendidikan` text NOT NULL,
  `pengalaman_kerja` text NOT NULL,
  `organisasi` text NOT NULL,
  `prestasi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpemilu`
--

CREATE TABLE `userpemilu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpemilu`
--

INSERT INTO `userpemilu` (`id`, `nik`, `username`, `nama_lengkap`, `tanggal_lahir`, `alamat`, `password`, `foto_ktp`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, '1234567890123456', 'Anisa', 'Anisa Rahma', '1990-01-01', 'Jl. Kebon Jeruk No. 1', '$2y$10$YRfHUWDZCnCs284Tmk6tKuaxbjfNE8UA.MAiepkGk.DbO4Lozozhe', 'path/to/ktp1.jpg', 'path/to/profile1.jpg', '2024-06-12 23:52:43', '2024-06-12 23:52:43'),
(2, '2345678901234567', 'Farah', 'Farah Diba', '1991-02-02', 'Jl. Mangga Dua No. 2', '$2y$10$ZBbeD4XgQDWZWIoTBE84Ge7PoNVv0l9ZpnhuI4dlp4DN9U92cnITW', 'path/to/ktp2.jpg', 'path/to/profile2.jpg', '2024-06-12 23:52:43', '2024-06-12 23:52:43'),
(3, '3456789012345678', 'Ramdan', 'Ramdan Saputra', '1992-03-03', 'Jl. Melati No. 3', '$2y$10$BWYyuVBefiQJ/cqxkwO/CO2arwX56lnkCAqpft1pbnZaUNyHiv4Wa', 'path/to/ktp3.jpg', 'path/to/profile3.jpg', '2024-06-12 23:52:43', '2024-06-12 23:52:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindamai`
--
ALTER TABLE `admindamai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admindamai_username_unique` (`username`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partaipemilu`
--
ALTER TABLE `partaipemilu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partaipemilu_username_unique` (`username`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelaporans`
--
ALTER TABLE `pelaporans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduanuser`
--
ALTER TABLE `pengaduanuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portofolio_caleg`
--
ALTER TABLE `portofolio_caleg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpemilu`
--
ALTER TABLE `userpemilu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userpemilu_nik_unique` (`nik`),
  ADD UNIQUE KEY `userpemilu_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindamai`
--
ALTER TABLE `admindamai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partaipemilu`
--
ALTER TABLE `partaipemilu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pelaporans`
--
ALTER TABLE `pelaporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengaduanuser`
--
ALTER TABLE `pengaduanuser`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolio_caleg`
--
ALTER TABLE `portofolio_caleg`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userpemilu`
--
ALTER TABLE `userpemilu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
