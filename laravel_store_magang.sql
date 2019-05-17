-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2019 at 05:24 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_store_magang`
--

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
(3, '2017_11_03_033957_create_product_table', 1),
(4, '2017_12_22_070400_create_penjualan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membeli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_brg` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_trans` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `email`, `nama`, `alamat`, `telepon`, `membeli`, `jumlah_brg`, `harga`, `total`, `kode_trans`) VALUES
(9, 'user5@gmail.com', 'Wildan', 'Surabaya', '23424141234', 'soklin', '', NULL, NULL, 1514343071),
(10, 'user5@gmail.com', 'Wildan', 'Surabaya', '23424141234', 'Ini Roti', '', NULL, NULL, 1514343071),
(11, 'user1@gmail.com', 'Wildan', 'Jombang, Surabaya, East java', '432314', 'soklin', '', NULL, NULL, 1514343150),
(12, 'user1@gmail.com', 'Wildan', 'Jombang, Surabaya, East java', '432314', 'Ini Roti', '', NULL, NULL, 1514343150),
(13, 'apaaja99x@gmail.com', 'Kagura', 'Papua, Indonesia', '09812308808', 'soklin', '', NULL, NULL, 1514355533),
(14, 'apaaja99x@gmail.com', 'Kagura', 'Papua, Indonesia', '09812308808', 'Ini Roti', '', NULL, NULL, 1514355533),
(15, 'apaaja99x@gmail.com', 'Kagura', 'Papua, Indonesia', '09812308808', 'soklin', '', NULL, NULL, 1514355818),
(16, 'apaaja99x@gmail.com', 'Kagura', 'Papua, Indonesia', '09812308808', 'Ini Roti', '', NULL, NULL, 1514355818),
(21, 'email@gmail.com', 'Naruto', 'Konoha, Samping Suna', '082144904425', 'soklin', NULL, NULL, '21,000.00', 1514358860),
(22, 'email@gmail.com', 'Naruto', 'Konoha, Samping Suna', '082144904425', 'Ini Roti', NULL, NULL, '21,000.00', 1514358860),
(29, 'email@gmail.com', 'Boruto', 'Mars', '081515851296', 'Kecap manis', NULL, NULL, '11,000.00', 1514359615),
(30, 'email@gmail.com', 'Boruto', 'Mars', '081515851296', 'Ini Roti', NULL, NULL, '11,000.00', 1514359615),
(36, 'user8@gmail.com', 'erw', 'Jombang, Surabaya, East java', '082144904425', 'Kecap manis', NULL, NULL, '1000', 1514360865),
(37, 'user8@gmail.com', 'erw', 'Jombang, Surabaya, East java', '082144904425', 'Ini Roti', NULL, NULL, '1000', 1514360865),
(40, 'dohansi81@gmail.com', 'qwe', 'qewr', 'qwer', 'Kecap manis', NULL, NULL, '11,000.00', 1514360964),
(41, 'dohansi81@gmail.com', 'qwe', 'qewr', 'qwer', 'Ini Roti', NULL, NULL, '11,000.00', 1514360964),
(80, 'apaaja99x@gmail.com', 'Wildan', 'Surabaya', '081515851296', 'Kecap manis', '1', NULL, '11,000.00', 1514363454),
(81, 'apaaja99x@gmail.com', 'Wildan', 'Surabaya', '081515851296', 'Ini Roti', '1', NULL, '11,000.00', 1514363454),
(82, 'email@gmail.com', 'Wahyu', 'Jombang', '1298381326986', 'Kecap manis', '1', NULL, '26,000.00', 1514364004),
(83, 'email@gmail.com', 'Wahyu', 'Jombang', '1298381326986', 'Ini Roti', '1', NULL, '26,000.00', 1514364004),
(84, 'email@gmail.com', 'Wahyu', 'Jombang', '1298381326986', 'Nasi Goreng', '1', NULL, '26,000.00', 1514364004),
(85, 'admin@gmail.com', 'Ini', 'Mojokerto', '123124241', 'Kecap manis', '1', '10000', '26,000.00', 1514364851),
(86, 'admin@gmail.com', 'Ini', 'Mojokerto', '123124241', 'Ini Roti', '1', '1000', '26,000.00', 1514364851),
(87, 'admin@gmail.com', 'Ini', 'Mojokerto', '123124241', 'Nasi Goreng', '1', '15000', '26,000.00', 1514364851),
(88, 'asdasd', 'asd', 'asd', '142134124', 'Kecap manis', '1', '10000', '26,000.00', 1514365721),
(89, 'asdasd', 'asd', 'asd', '142134124', 'Ini Roti', '1', '1000', '26,000.00', 1514365721),
(90, 'asdasd', 'asd', 'asd', '142134124', 'Nasi Goreng', '1', '15000', '26,000.00', 1514365721),
(91, 'apaaja99x@gmail.com', 'Wildan', 'Jombang, Surabaya, East java', '081515851296', 'soklin', '5', '100000', '283,000.00', 1514443228),
(92, 'apaaja99x@gmail.com', 'Wildan', 'Jombang, Surabaya, East java', '081515851296', 'Ini Roti', '3', '3000', '283,000.00', 1514443228),
(93, 'apaaja99x@gmail.com', 'Wildan', 'Jombang, Surabaya, East java', '081515851296', 'Kecap manis', '3', '30000', '283,000.00', 1514443228),
(94, 'apaaja99x@gmail.com', 'Wildan', 'Jombang, Surabaya, East java', '081515851296', 'Nasi Goreng', '10', '150000', '283,000.00', 1514443228);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `stock`, `category`, `size`, `picture`) VALUES
(2, 'Shampoo', 'Shampoo untuk rambut manusia', 10000, 100, 'Bahan', '0', 'sampo.jpg'),
(5, 'Kecap', 'Kecap murah cocok untuk minuman', 15000, 99, 'Minuman', '100cm', 'kecap.jpg'),
(6, 'Sandal Jepit', 'Sandal murah meriah gampang jebol', 190000, 10, 'Bahan', '92', 'sandal.jpeg'),
(7, 'Soklin', 'soklin murah hemat', 12000, 100, 'perabot', NULL, 'so-klin-softergent-pink-pouch-900gr-1447270790-6258502-1.jpg'),
(8, 'soklin', 'soklin', 10000, 100, 'bahan', NULL, 'so-klin-softergent-pink-pouch-900gr-1447270790-6258502-1.jpg'),
(9, 'Sabun', 'Sabun murah', 3000, 100, 'Perabot', NULL, 'sa-bun-mandi.jpg'),
(10, 'Roti', 'Roti kapuk murah', 21000, 100, 'Makanan', NULL, '284197_roti_663_382.jpg'),
(11, 'Buku', 'Ini buku', 30000, 99, 'Pendidikan', NULL, 'book.jpg'),
(33, 'Baju', 'baju murah', 10000, 99, 'pernak pernik', 'xxl', 'baju.jpg'),
(34, 'Nasi Goreng', 'makanan', 15000, 986, '1000', '100', 'nasgor.jpg'),
(58, 'lagi lagi sabun', 'sabun mandi', 1000, 100, '100', NULL, 'sa-bun-mandi.jpg'),
(61, 'Promax', 'promax hebat', 35000, 122, 'obat', NULL, 'promag.jpg'),
(79, 'Sabun lagi dan lagi', 'buk sabun', 1000, 999, 'sabun', '5m', 'sa-bun-mandi.jpg'),
(90, 'soklin', 'Ini soklin untuk pembersih pakaian atau bisa juga digunakan untuk minuman', 20000, 1000, 'Sabun', NULL, 'so-klin-softergent-pink-pouch-900gr-1447270790-6258502-1.jpg'),
(103, 'Kecap manis', 'Bumbu masakan murah', 10000, 1000, 'Bumbu', 'xxl', '1440559896bango_kecap_manis_660ml.jpg'),
(104, 'Ini Roti', 'ini roti yang bisa bikin sakit perut', 1000, 1000, 'Makanan', 's', '284197_roti_663_382.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wildan', 'apaaja99x@gmail.com', '$2y$10$K0ZT5dJ3dANYZXI.e4PX.uuqiFRW6e7u75cxRQmE4tlbGeIdmUvwa', 'bp0WFdYJMc7lgT2uuhwc3M3Ax7DcMC4cQIhm8W00jf9UodzFl5cmrPQhIYto', '2017-11-08 22:10:39', '2017-11-08 22:10:39'),
(2, 'abc', 'abc@abc.com', '$2y$10$iGuKoAc.gKcTTKmTdm6Lw.lO8vk8j.O8VyNcaacdRXgUkM7gPBmVS', 'FlH5qlO0O7OwMp090udOJNtZSel6a4LewcCD7wOqprpE00gOeJ4gAocc7GD6', '2017-12-06 20:32:12', '2017-12-06 20:32:12');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
