-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2023 pada 14.17
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `p_id` int(64) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` varchar(4000) NOT NULL,
  `harga` int(25) NOT NULL,
  `s_id` int(11) NOT NULL,
  `img_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`p_id`, `nama_produk`, `deskripsi`, `harga`, `s_id`, `img_url`) VALUES
(1, 'Rumah 7 Lantai', 'Rumah yang punya 7 Lantai', 2000000000, 1, 'https://www.minutoencancha.com/u/fotografias/m/2022/9/1/f768x1-28748_28875_31.jpg'),
(2, 'Mobil Tua', 'Keluaran 1943', 200000000, 1, 'https://awsimages.detik.net.id/community/media/visual/2022/08/20/mobil-fiat-konde-keluaran-1943-koleksi-dr-i-gusti-ngurah-bagus-mahayasa-di-tabanan-bali_169.jpeg?w=1200'),
(3, 'Palu Nokia', 'Sanggup Menggemparkan Dunia', 10000000, 1, 'https://i.redd.it/gman57akngb51.jpg'),
(5, 'Sapi', '2 Ton', 300000000, 2, 'https://assets.ayobandung.com/crop/0x59:1220x908/750x500/webp/photo/2023/06/26/938a195f8810cb9b31c6503221891897_XL-3406860655.jpg'),
(6, 'Naga Berkepala Tiga', 'Yang Terakhir Geger Otak', 100000000, 2, 'https://i.pinimg.com/736x/7f/7c/43/7f7c43fd7bba1a3b956cdce7f6b9ce80.jpg'),
(7, 'Gajah Gajah Mada', 'Ditunggangi langsung oleh Patih Gajah Mada dari Kerajaan Majapahit', 1000000000, 2, 'https://merahputih.com/media/35/19/70/3519703752810ea7d72ad45da54aacba.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`u_id`, `username`, `password`, `role`) VALUES
(1, 'nikimarco', '8d499001b07671ff7e7f794ea0fd4a84', 'Jual'),
(2, 'Irgi', '31dd23cb2c2f7f7cfbac09c0c2f45e81', 'Jual'),
(3, 'Amar', 'fdf9ece15ca52aa6915d3e812ddc24bc', 'Jual');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
