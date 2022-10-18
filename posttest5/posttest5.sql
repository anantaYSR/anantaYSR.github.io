-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2022 pada 06.32
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posttest5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_bisnis`
--

CREATE TABLE `pendaftaran_bisnis` (
  `id` int(11) NOT NULL,
  `pemilik_bisnis` varchar(30) NOT NULL,
  `nama_bisnis` varchar(30) NOT NULL,
  `telpon` int(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_bisnis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_bisnis`
--

INSERT INTO `pendaftaran_bisnis` (`id`, `pemilik_bisnis`, `nama_bisnis`, `telpon`, `alamat`, `email`, `jenis_bisnis`) VALUES
(11, 'bayu2', 'Toko', 2147483647, 'sungai', 'bayustwn@gmail.com', 'Toko'),
(12, 'ahwang ', 'Toko Listrk', 2147483647, 'Rapak Indah', 'ahwang@gmail.com', 'Toko'),
(13, 'Herni ', 'Bangsalan Etam', 2147483647, 'Balikpapan', 'Hernishrti@gmail.com', 'Persewaan'),
(14, 'alfi', 'caffe seboh', 2147483647, 'samarinda', 'alfi@gmail.com', 'Cafe'),
(15, 'dimas', 'dims caffe', 2147483647, 'samarinda', 'dimas@gmail.com', 'Cafe');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran_bisnis`
--
ALTER TABLE `pendaftaran_bisnis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_bisnis`
--
ALTER TABLE `pendaftaran_bisnis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
