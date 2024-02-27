-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 03:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahans`
--

CREATE TABLE `bahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ukuran_x` int(11) NOT NULL,
  `ukuran_y` int(11) NOT NULL,
  `ukuran_z` int(11) NOT NULL,
  `harga_bahan` bigint(20) NOT NULL,
  `id_jenis` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahans`
--

INSERT INTO `bahans` (`id`, `nama`, `ukuran_x`, `ukuran_y`, `ukuran_z`, `harga_bahan`, `id_jenis`, `created_at`, `updated_at`) VALUES
(1, 'besiu', 75, 75, 50, 310000, 1, '2024-01-30 08:45:33', '2024-01-30 08:45:33'),
(2, 'adidas accelelator', 20, 10, 20, 100000, 1, '2024-01-31 08:54:38', '2024-01-31 08:54:38'),
(3, 'permata', 75, 50, 50, 300000, 2, '2024-02-17 21:49:54', '2024-02-17 21:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `detail_produksis`
--

CREATE TABLE `detail_produksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_model` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `note` text NOT NULL,
  `model` text NOT NULL,
  `id_pemesan` bigint(20) NOT NULL,
  `jumlah_produksi` int(11) NOT NULL,
  `profit` int(11) NOT NULL,
  `id_bahan` bigint(20) NOT NULL,
  `id_produksi` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `harga_jual` bigint(20) NOT NULL,
  `id_mesin` bigint(20) NOT NULL,
  `petugas` varchar(250) NOT NULL,
  `waktu` bigint(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_produksis`
--

INSERT INTO `detail_produksis` (`id`, `nama_model`, `tanggal`, `note`, `model`, `id_pemesan`, `jumlah_produksi`, `profit`, `id_bahan`, `id_produksi`, `created_at`, `updated_at`, `harga_jual`, `id_mesin`, `petugas`, `waktu`, `status`, `berat`) VALUES
(10, 'testing 3', '2024-02-18', 'bhuyf asdbasd asdawdsda sd', '1790940241878534.pptx', 5, 10, 5, 2, 208845, '2024-02-17 22:12:27', '2024-02-17 22:12:27', 285000, 1, 'gavi', 3, 'dalam proses', 3),
(11, 'testing 3', '2024-02-18', 'bhuyf asdbasd asdawdsda sd', '1790940241878534.pptx', 5, 10, 5, 2, 208845, '2024-02-17 22:12:27', '2024-02-17 22:12:27', 285000, 2, 'gavi', 3, 'dalam proses', 3),
(12, 'testing 31', '2024-02-18', 'asd asdasd awds fnkaslfasd nsaj', '1791212369060508.jpeg', 5, 40, 3, 3, 208846, '2024-02-17 22:15:09', '2024-02-18 06:34:52', 95000, 1, 'gavi', 1, 'Ditahan', 31),
(13, 'testing 31', '2024-02-18', 'asd asdasd awds fnkaslfasd nsaj', '1791212369060508.jpeg', 5, 40, 3, 3, 208846, '2024-02-17 22:15:09', '2024-02-18 06:34:39', 280000, 1, 'gavi', 3, 'Selesai', 31);

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
-- Table structure for table `jenis_bahans`
--

CREATE TABLE `jenis_bahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_bahans`
--

INSERT INTO `jenis_bahans` (`id`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'aluminium', '2024-01-30 08:44:19', '2024-01-30 08:44:19'),
(2, 'mineral', '2024-02-09 09:46:12', '2024-02-09 09:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `mesins`
--

CREATE TABLE `mesins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_mesin` varchar(255) NOT NULL,
  `tgl_beli` date NOT NULL,
  `harga_asli` int(11) NOT NULL,
  `harga_buku` int(11) NOT NULL,
  `umur` int(11) NOT NULL,
  `inflansi` int(11) NOT NULL,
  `jam_bln` int(11) NOT NULL,
  `kebutuhan_ruang` int(11) NOT NULL,
  `by_ruang` int(11) NOT NULL,
  `daya_mesin` int(11) NOT NULL,
  `biaya_listrik` int(11) NOT NULL,
  `biaya_operator` bigint(20) NOT NULL,
  `total_biaya` bigint(20) NOT NULL,
  `pembulatan_biaya` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mesins`
--

INSERT INTO `mesins` (`id`, `nama`, `jenis_mesin`, `tgl_beli`, `harga_asli`, `harga_buku`, `umur`, `inflansi`, `jam_bln`, `kebutuhan_ruang`, `by_ruang`, `daya_mesin`, `biaya_listrik`, `biaya_operator`, `total_biaya`, `pembulatan_biaya`, `created_at`, `updated_at`) VALUES
(1, 'CNC ajah', 'mesin bubut', '2024-01-30', 1150000000, 575000000, 6, 4, 200, 9, 20000, 12, 500, 15000, 85056, 90000, '2024-01-30 08:47:14', '2024-01-30 08:47:14'),
(2, 'CNC ajah', 'mesin bubut', '2024-01-30', 1150000000, 575000000, 6, 4, 200, 9, 20000, 12, 500, 15000, 85056, 90000, '2024-01-30 08:47:14', '2024-01-30 08:47:14');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2024_01_24_060152_create_mesins_table', 1),
(16, '2024_01_24_060203_create_bahans_table', 1),
(17, '2024_01_24_060247_create_pesanans_table', 1),
(18, '2024_01_24_145156_create_detail_produksis_table', 1),
(19, '2024_01_24_145156_create_produksis_table', 1),
(20, '2024_01_27_080529_create_jenis_bahans_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_model` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `note` text NOT NULL,
  `model` text NOT NULL,
  `id_pemesan` bigint(20) NOT NULL,
  `berat` int(11) NOT NULL,
  `id_bahan` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `nama_model`, `status`, `tanggal`, `note`, `model`, `id_pemesan`, `berat`, `id_bahan`, `created_at`, `updated_at`) VALUES
(1, 'testing', 'dalam proses', '2024-01-30', 'bnas jkdasd aukwigdsad s', '1789531067919773.jpg', 1, 3, 1, '2024-01-30 08:50:17', '2024-01-30 10:30:54'),
(6, 'testing 3', 'dalam proses', '2024-02-15', 'bhuyf asdbasd asdawdsda sd', '1790940241878534.pptx', 5, 3, 2, '2024-02-14 22:08:30', '2024-02-17 22:12:27'),
(7, 'testing 31', 'dalam proses', '2024-02-18', 'asd asdasd awds fnkaslfasd nsaj', '1791212369060508.jpeg', 5, 31, 3, '2024-02-17 22:13:51', '2024-02-17 22:15:09');

-- --------------------------------------------------------

--
-- Table structure for table `produksis`
--

CREATE TABLE `produksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produksis`
--

INSERT INTO `produksis` (`id`, `keterangan`, `created_at`, `updated_at`) VALUES
(208839, 'keterangan masih kosong', '2024-02-17 21:52:26', '2024-02-17 21:52:26'),
(208840, 'keterangan masih kosong', '2024-02-17 21:54:33', '2024-02-17 21:54:33'),
(208841, 'keterangan masih kosong', '2024-02-17 22:06:19', '2024-02-17 22:06:19'),
(208842, 'keterangan masih kosong', '2024-02-17 22:06:44', '2024-02-17 22:06:44'),
(208843, 'keterangan masih kosong', '2024-02-17 22:07:24', '2024-02-17 22:07:24'),
(208844, 'keterangan masih kosong', '2024-02-17 22:11:58', '2024-02-17 22:11:58'),
(208845, 'keterangan masih kosong', '2024-02-17 22:12:27', '2024-02-17 22:12:27'),
(208846, 'keterangan masih kosong', '2024-02-17 22:15:09', '2024-02-17 22:15:09'),
(208847, 'keterangan masih kosong', '2024-02-18 05:47:31', '2024-02-18 05:47:31'),
(208848, 'keterangan masih kosong', '2024-02-18 06:14:44', '2024-02-18 06:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` enum('Petugas','Admin','Customer') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `no_telp`, `alamat`, `foto`, `level`, `created_at`, `updated_at`) VALUES
(1, 'xavi', 'customer', '$2y$10$lsW0ei3QiOZbw4UUowaJC.8WgYcKdnpL2b8QfMTi1Tmgo1MURF/0m', '089012736', 'dasd ghuid sagdg awydsfv', '1789621500386239.jpg', 'Customer', '2024-01-30 08:49:25', '2024-01-31 08:47:41'),
(2, 'gavi', 'petug1', '$2y$10$VgQzfD0A6299QqlEbYtUQOSEbALFpGF3T3.wqYrHaILq7zQrDm4Ua', '0896124124', 'g syadfuoad asdug7adasd aasda', '1789621487733115.jpg', 'Petugas', '2024-01-30 09:43:53', '2024-01-31 08:47:28'),
(3, 'fir\'aun', 'petug2', '$2y$10$DbpRBPiaxDLj7AHi06rS5e6On2hIbrfjiwBO9l92SPSofuL3lhsc6', '0896124124', 'asd basd sadasdasd asdaw sd', '1789621442799724.png', 'Petugas', '2024-01-30 09:44:20', '2024-01-31 08:46:46'),
(4, 'Musk Elon', 'admin', '$2y$10$LXPcKWp3SywtdwLHWmOcqOQizKYfbvHz5lut7SkY5dNjRrzTIVymm', '0896124124', 'asjk dbasdasdawd asuydadas dawdas', '1789621851207750.jpg', 'Admin', '2024-01-30 20:44:54', '2024-01-31 08:53:15'),
(5, 'Apip Hojlund', 'test', '$2y$10$zNwkC/RMJQsFiVQglCnaXu1OWZySmixJ55D7Kb7ApDPfKd1Wrfmxm', '0896124124', 'denmark', '1789621817524113.jpg', 'Customer', '2024-01-30 21:30:30', '2024-01-31 08:52:43'),
(6, 'el mejor del mundo', 'testing10', '$2y$10$NkXfuk5aS4iZ96LX4/TnBed9gemVUsKdQHJpg0UWxXZ3qZBYAcvuu', '12345678', 'gasd asd sdadad sda', '1791209687091443.png', 'Petugas', '2024-02-17 21:31:14', '2024-02-17 21:31:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahans`
--
ALTER TABLE `bahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_produksis`
--
ALTER TABLE `detail_produksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_bahans`
--
ALTER TABLE `jenis_bahans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesins`
--
ALTER TABLE `mesins`
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
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksis`
--
ALTER TABLE `produksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahans`
--
ALTER TABLE `bahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detail_produksis`
--
ALTER TABLE `detail_produksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_bahans`
--
ALTER TABLE `jenis_bahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mesins`
--
ALTER TABLE `mesins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanans`
--
ALTER TABLE `pesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produksis`
--
ALTER TABLE `produksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208849;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
