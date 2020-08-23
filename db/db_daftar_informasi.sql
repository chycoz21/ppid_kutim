-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2020 pada 13.37
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

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
-- Struktur dari tabel `daftar_informasi`
--

CREATE TABLE `daftar_informasi` (
  `id_daftar_informasi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `link_file` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_informasi`
--

INSERT INTO `daftar_informasi` (`id_daftar_informasi`, `id_kategori`, `nama_file`, `link_file`, `status`) VALUES
(1, 1, 'Laporan Realisasi Anggaran Satker Periode Juni 202', 'https://drive.google.com/file/d/1N6n1LhpUx1GjHczEaHCkwdFPlnpMFt-S/view', '0'),
(3, 1, 'E Book Kinerja Pengawas Pemilu di Kalimantan Timur', 'https://drive.google.com/file/d/13t2R2T7EPGaERfoXk_pUvz1P6zzrFCFX/view', '0'),
(4, 1, 'E Book Jejak Pengawalan Demokrasi di Bumi Etam', 'https://drive.google.com/file/d/1PCB6YM4Umjei8Tj8s9WJ5fwxYOIZwG3u/view', '0'),
(5, 1, 'Buletin April - Juni 2020', 'https://drive.google.com/file/d/1S3kC8oH9GPzfruMb6D-yDq9OTLyv2P2J/view', '0'),
(6, 1, 'Ringkasan Anggaran 2019 dan 2020', 'https://drive.google.com/file/d/1K3A-WX0-Ah7QE5AFOdl9pz9umSiA1jvx/view', '0'),
(7, 2, 'Rekapitulasi Penindakan Pelanggaran Pemilu 2019', 'https://drive.google.com/file/d/1dF6bGiSIqxzp25vtq7E3ieRzU5g_LViZ/view', '0'),
(8, 2, 'Rekapitulasi Penyelesaian Sengketa Pemilu 2019', 'https://drive.google.com/file/d/1095eSHDOtF8jA4PC1aJ1L5h32OFDSOSS/view', '0'),
(9, 2, 'Rekap Penyerahan Dukungan Bapaslon Perseorangan Pi', 'https://drive.google.com/file/d/1Lm2oRMDrawo0kC8C-0SMeC2pu6IKUrng/view', '0'),
(10, 2, 'Rekap Temuan Hasil Pengawasan Rekrutmen PPK 2020', 'https://drive.google.com/file/d/1YiWHOmNrfo0AXBvvGxgAWux4ZpDOU00b/view', '0'),
(11, 2, 'Struktur Organisasi', '', '0'),
(12, 2, 'Profil Singkat Ketua / Kordiv SDMO', '', '0'),
(13, 2, 'Profil Singkat Anggota / Kordiv Pengawasan dan Hub', '', '0'),
(14, 2, 'Profil Singkat Anggota / Kordiv Penanganan Pelanggan', '', '0'),
(15, 2, 'Profil Singkat Anggota / Kordiv Penyelesaian Sengketa', '', '0'),
(16, 2, 'Profil Singkat Anggota / Kordiv Hukum Humas Datin', '', '0'),
(18, 3, 'Laporan Akhir Hasil Pengawasan Pemilu 2019', 'https://drive.google.com/file/d/1GCAX5fxr4JjhaUOC7z_XTvPaBjoVYBCK/view', '0'),
(19, 3, 'Laporan Akhir Penindakan Pelanggaran Pemilu 2019', 'https://drive.google.com/file/d/1MRcZDK8CEwicSLNx7V5lZqdQxl0FANEq/view', '0'),
(20, 3, 'Laporan Akhir Penyelesaian Sengketa Pemilu 2019', 'https://drive.google.com/file/d/1kMUJZobuQLhCiodcEq4wDUvfyLBUsZl1/view', '0'),
(21, 3, 'Laporan Komprehensif Hasil Pengawasan Pemilu 2019', 'https://drive.google.com/file/d/1fRO5Z1D3tgkyYdsyfhcKU_v3Z58k2Swt/view', '0'),
(22, 3, 'Putusan Penyelesaian Sengketa 2019 Bawaslu Prov/', 'https://drive.google.com/drive/folders/1_FWUhiYzxLfetCqE-EQbfUoi7aBlvnFW', '0'),
(23, 3, 'Putusan Penyelesaian Sengketa 2019 Bawaslu Kab/Kota', 'https://drive.google.com/drive/folders/1LObMNQCjOb4FeYqcDu6GMuNL0TWVND5T', '0'),
(24, 3, 'Putusan Pidana Pemilu 2019 Kab/Kota', 'https://drive.google.com/drive/folders/1BnMzT_gXtfygQmWWH0MD2LDZgZoV_myi', '0'),
(25, 3, 'Putusan Administrasi Pemilu 2019 Prov & Kab/Kota', 'https://drive.google.com/drive/folders/1D1Y2s7MdHbBX4hfMqYjZJOgNXGewkryu', '0'),
(26, 3, 'Pemetaan Kerawanan Pilkada 2020', 'https://drive.google.com/file/d/1iMEPyLL7PB6_ar-udn3lcnSvO9Psm8aR/view', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_informasi`
--
ALTER TABLE `daftar_informasi`
  ADD PRIMARY KEY (`id_daftar_informasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_informasi`
--
ALTER TABLE `daftar_informasi`
  MODIFY `id_daftar_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
