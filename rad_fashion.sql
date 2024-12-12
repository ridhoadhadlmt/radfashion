-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2021 pada 15.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad_fashion`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(10) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_slug` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `blog_title`, `blog_slug`, `blog_content`, `blog_image`, `created_at`) VALUES
(2, 'What Curling Irons Are The Best Ones', 'what-curling-irons-are-the-best-ones', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'blog-1.jpg', '2021-08-26 15:52:38'),
(3, 'Eternity Bands Do Last Forever', 'eternity-bands-do-last-forever', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'blog-2.jpg', '2021-08-26 15:58:52'),
(4, 'The Health Benefits Of Sunglasses', 'the-health-benefits-of-sunglasses', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'blog-3.jpg', '2021-08-26 15:59:43'),
(5, 'Aiming For Higher The Mastopexy', 'aiming-for-higher-the-mastopexy', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'blog-4.jpg', '2021-08-26 16:00:09'),
(6, 'Wedding Rings A Gift For A Lifetime', 'wedding-rings-a-gift-for-a-lifetime', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'blog-5.jpg', '2021-08-26 16:00:32'),
(7, 'The Different Methods Of Hair Removal', 'the-different-methods-of-hair-removal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 'blog-6.jpg', '2021-08-26 16:00:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id_category` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `category_slug`) VALUES
(1, 'Baju', 'baju'),
(2, 'Sepatu', 'sepatu'),
(3, 'Accessories', 'accessories'),
(4, 'Jaket', 'jaket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_discount` int(10) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_subcategory` varchar(255) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_slug`, `product_price`, `product_discount`, `product_category`, `product_subcategory`, `product_quantity`, `product_image`) VALUES
(1, 'Sepatu Sports Adidas', 'sepatu-sports-adidas', 350000, 8, 'Sepatu', 'Sepatu Sports', 5, 'product-1.jpg'),
(2, 'Sepatu Casual Pria', 'sepatu-casual-pria', 450000, 20, 'Sepatu', 'Sepatu Casual', 5, 'product-3.jpg'),
(3, 'Kacamata Pria', 'kacamata-pria', 120000, 8, 'Accessories', 'Kacamata', 5, 'product-14.jpg'),
(4, 'Jaket Hoodie Pria', 'jaket-hoodie-pria', 330000, 20, 'Jaket', 'Hoodie', 5, 'product-12.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subcategory`
--

CREATE TABLE `subcategory` (
  `id_subcategory` int(10) NOT NULL,
  `id_category` int(10) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subcategory`
--

INSERT INTO `subcategory` (`id_subcategory`, `id_category`, `subcategory_name`, `subcategory_slug`) VALUES
(1, 1, 'Lengan Pendek', 'lengan-pendek'),
(2, 1, 'Lengan Panjang', 'lengan-panjang'),
(3, 4, 'Denim', 'denim'),
(4, 4, 'Parka', 'parka'),
(7, 2, 'Sepatu Sports', 'sepatu-sports'),
(8, 2, 'Sepatu Casual', 'sepatu-casual'),
(9, 3, 'Kacamata', 'kacamata'),
(10, 4, 'Hoodie', 'hoodie');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id_subcategory`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id_subcategory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
