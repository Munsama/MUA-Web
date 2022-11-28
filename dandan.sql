-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 02:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dandan`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` bigint(20) NOT NULL,
  `nama_perias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_rias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uname` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `harga`, `nama_perias`, `jenis_rias`, `alamat`, `tanggal`, `created_at`, `updated_at`, `uname`) VALUES
(1, 250000, 'Liliana', '1', 'Surabaya, Indonesia', '2019-05-17', '2019-05-21 11:47:41', '2019-05-21 11:47:41', ''),
(2, 120000, 'Liliana', '1', 'Surabaya, Indonesia', '2019-05-24', '2019-05-21 11:54:27', '2019-05-21 11:54:27', 'Ariescha');

-- --------------------------------------------------------

--
-- Table structure for table `jenisriasans`
--

CREATE TABLE `jenisriasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_rias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jenisriasans`
--

INSERT INTO `jenisriasans` (`id`, `jenis_rias`, `created_at`, `updated_at`) VALUES
(1, 'Traditional Wedding', '2019-05-21 11:42:39', '2019-05-21 11:42:39'),
(2, 'Natural Looks', '2019-05-21 11:42:44', '2019-05-21 11:42:44'),
(3, 'Korean Looks', '2019-05-21 11:42:48', '2019-05-21 11:42:48'),
(4, 'Modern Wedding Looks', '2019-05-21 11:42:54', '2019-05-21 11:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_05_01_182837_create_modelusersses_table', 1),
(3, '2019_05_04_071445_create_perias_table', 1),
(4, '2019_05_04_071512_create_jenisriasans_table', 1),
(5, '2019_05_04_071600_create_orders_table', 1),
(6, '2019_05_05_041259_create_modeladmins_table', 1),
(7, '2019_05_21_154033_booking', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modeladmins`
--

CREATE TABLE `modeladmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modeladmins`
--

INSERT INTO `modeladmins` (`id`, `uname`, `psw`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` bigint(20) NOT NULL,
  `nama_perias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_rias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `harga`, `nama_perias`, `jenis_rias`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 250000, 'Liliana', 'Traditional Wedding', 'Jakarta, Indonesia', '2019-05-21 11:43:23', '2019-05-21 11:43:23'),
(2, 300000, 'Devienna', 'Traditional Wedding', 'Jakarta, Indonesia', '2019-05-21 11:43:34', '2019-05-21 11:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perias`
--

CREATE TABLE `perias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `perias`
--

INSERT INTO `perias` (`id`, `nama_perias`, `created_at`, `updated_at`) VALUES
(1, 'Liliana', '2019-05-21 11:42:18', '2019-05-21 11:42:18'),
(2, 'Devienna', '2019-05-21 11:42:22', '2019-05-21 11:42:22'),
(3, 'James Charles', '2019-05-21 11:42:25', '2019-05-21 11:42:25'),
(4, 'Khadijah Azzahra', '2019-05-21 11:42:28', '2019-05-21 11:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `psw`, `uname`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lalala@gmail.com', 'lalala', 'lalala', NULL, NULL, NULL),
(2, 'rrinjana@gmail.com', '$2y$10$keHMi5p8HpfymlfFrUFIR.MjVmvVNYNDvQyfwSeGhZyjJVBw.BxRe', 'Ariescha', NULL, '2019-05-21 11:47:03', '2019-05-21 11:47:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisriasans`
--
ALTER TABLE `jenisriasans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modeladmins`
--
ALTER TABLE `modeladmins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perias`
--
ALTER TABLE `perias`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenisriasans`
--
ALTER TABLE `jenisriasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `modeladmins`
--
ALTER TABLE `modeladmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perias`
--
ALTER TABLE `perias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
