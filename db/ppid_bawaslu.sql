-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2020 pada 22.50
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppid_bawaslu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_login`
--

CREATE TABLE `riwayat_login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `ip` varchar(225) NOT NULL,
  `sistem_oprasi` varchar(225) NOT NULL,
  `browser` varchar(225) NOT NULL,
  `tanggal_login` text NOT NULL,
  `jam` varchar(12) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nm` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_usrnm` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_lvl` enum('admin','editor','distributor') NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nm`, `user_email`, `user_usrnm`, `user_pass`, `user_lvl`, `user_status`) VALUES
(1, 'tono', 'administrator@test.com', 'administrator', '0192023a7bbd73250516f069df18b500', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `riwayat_login`
--
ALTER TABLE `riwayat_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat_login`
--
ALTER TABLE `riwayat_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;