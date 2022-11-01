-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 08.34
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
  `jenis_bisnis` varchar(30) NOT NULL,
  `dokumen` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_bisnis`
--

INSERT INTO `pendaftaran_bisnis` (`id`, `pemilik_bisnis`, `nama_bisnis`, `telpon`, `alamat`, `email`, `jenis_bisnis`, `dokumen`, `waktu`) VALUES
(53, 'ananta yusra', 'ck', 2147483647, 'kaltim', 'anandiva381@gmail.com', 'Toko', 'ananta yusra.jpg', '2022-10-27 13:15:32'),
(54, 'ahwang ', 'Toko Listrk', 2147483647, 'sungai kunjang, samarinda', 'anandiva381@gmail.com', 'Toko', 'ahwang .jpg', '2022-10-27 14:33:12');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
