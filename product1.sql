-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Feb 2021 pada 04.42
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'Widget 1'),
(2, 'Widget 2'),
(3, 'Widget 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_variants`
--

CREATE TABLE `product_variants` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `name`) VALUES
(1, 1, 'Size'),
(2, 1, 'Color'),
(3, 2, 'Size'),
(4, 3, 'Class'),
(5, 2, 'Size'),
(6, 3, 'Widget 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_variant_options`
--

CREATE TABLE `product_variant_options` (
  `id` int(11) NOT NULL,
  `product_varian_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_variant_options`
--

INSERT INTO `product_variant_options` (`id`, `product_varian_id`, `name`) VALUES
(1, 1, 'Small'),
(2, 1, 'Large'),
(3, 2, 'White'),
(4, 2, 'Black'),
(5, 3, 'Small'),
(6, 3, 'Medium'),
(7, 4, 'Amateur'),
(8, 4, 'Professional'),
(9, 5, 'Medium'),
(10, 5, 'Large'),
(22, 1, 'sfa'),
(32, 4, 'dad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_variant_option_combinations`
--

CREATE TABLE `product_variant_option_combinations` (
  `product_variant_option_id` int(11) NOT NULL,
  `sku_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product_variant_option_combinations`
--

INSERT INTO `product_variant_option_combinations` (`product_variant_option_id`, `sku_id`) VALUES
(1, 1),
(1, 2),
(3, 1),
(3, 3),
(4, 2),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(7, 8),
(8, 9),
(8, 10),
(9, 7),
(9, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skus`
--

CREATE TABLE `skus` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skus`
--

INSERT INTO `skus` (`id`, `product_id`, `sku`, `price`) VALUES
(1, 1, 'W1SSCW', 10),
(2, 1, 'W1SSCB', 10),
(3, 1, 'W1SLCW', 12),
(4, 1, 'W1SLCB', 15),
(5, 2, 'W2SS', 100),
(6, 2, 'W2SM', 100),
(7, 3, 'W3CASM', 50),
(8, 3, 'W3CASL', 50),
(9, 3, 'W3CPSM', 150),
(10, 3, 'W3CPSL', 160),
(11, 3, 'WSSSWS', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeks untuk tabel `product_variant_options`
--
ALTER TABLE `product_variant_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_varian_id` (`product_varian_id`);

--
-- Indeks untuk tabel `product_variant_option_combinations`
--
ALTER TABLE `product_variant_option_combinations`
  ADD KEY `product_variant_option_id` (`product_variant_option_id`,`sku_id`),
  ADD KEY `sku_id` (`sku_id`);

--
-- Indeks untuk tabel `skus`
--
ALTER TABLE `skus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_variant_options`
--
ALTER TABLE `product_variant_options`
  ADD CONSTRAINT `product_variant_options_ibfk_1` FOREIGN KEY (`product_varian_id`) REFERENCES `product_variants` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_variant_option_combinations`
--
ALTER TABLE `product_variant_option_combinations`
  ADD CONSTRAINT `product_variant_option_combinations_ibfk_1` FOREIGN KEY (`product_variant_option_id`) REFERENCES `product_variant_options` (`id`),
  ADD CONSTRAINT `product_variant_option_combinations_ibfk_2` FOREIGN KEY (`sku_id`) REFERENCES `skus` (`id`);

--
-- Ketidakleluasaan untuk tabel `skus`
--
ALTER TABLE `skus`
  ADD CONSTRAINT `skus_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
