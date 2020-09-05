-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2020 pada 21.14
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
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `alamat`, `no_hp`, `email`) VALUES
(1, 'Jl.imam Bonjol', 'Aditya Maulidan', 'razeon0492@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_layanan`
--

CREATE TABLE `biaya_layanan` (
  `id_biaya_layanan` int(1) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `biaya_layanan`
--

INSERT INTO `biaya_layanan` (`id_biaya_layanan`, `judul`, `foto`) VALUES
(1, 'BIAYA LAYANAN', '1598190468.png');

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
(1, 1, 'Laporan Realisasi Anggaran Satker Periode Juni 202', 'https://drive.google.com/file/d/1N6n1LhpUx1GjHczEaHCkwdFPlnpMFt-S/view', '1'),
(3, 1, 'E Book Kinerja Pengawas Pemilu di Kalimantan Timur', 'https://drive.google.com/file/d/13t2R2T7EPGaERfoXk_pUvz1P6zzrFCFX/view', '1'),
(4, 1, 'E Book Jejak Pengawalan Demokrasi di Bumi Etam', 'https://drive.google.com/file/d/1PCB6YM4Umjei8Tj8s9WJ5fwxYOIZwG3u/view', '1'),
(5, 1, 'Buletin April - Juni 2020', 'https://drive.google.com/file/d/1S3kC8oH9GPzfruMb6D-yDq9OTLyv2P2J/view', '1'),
(6, 1, 'Ringkasan Anggaran 2019 dan 2020', 'https://drive.google.com/file/d/1K3A-WX0-Ah7QE5AFOdl9pz9umSiA1jvx/view', '1'),
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `icon`) VALUES
(1, 'Informasi Setiap Saat ', 'fa fa-users'),
(2, 'Informasi Berkala ', 'fa fa-file '),
(3, 'Informasi Serta Merta', 'fa fa-user'),
(4, 'Informasi Dikecualikan', 'fa fa-th');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kewajiban_bawaslu`
--

CREATE TABLE `kewajiban_bawaslu` (
  `id_kewajiban_bawaslu` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kewajiban_bawaslu`
--

INSERT INTO `kewajiban_bawaslu` (`id_kewajiban_bawaslu`, `judul`, `deskripsi`) VALUES
(1, 'HAK DAN KEWAJIBAN BAWASLU DALAM PELAYANAN INFORMASI', '<h6><span style=\"font-family: Arial;\">﻿</span><span style=\"font-family: Arial;\">﻿</span><span style=\"font-family: Arial;\">HAK BAWASLU DALAM PELAYANAN INFORMASI</span><br></h6><p><span style=\"font-family: Arial; font-weight: 700; color: rgb(147, 147, 147); font-size: 1.5rem; text-transform: uppercase;\"></span></p>'),
(2, 'KEWAJIBAN BAWASLU DALAM PELAYANAN INFORMASI', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kewajiban_pemohon`
--

CREATE TABLE `kewajiban_pemohon` (
  `id_kewajiban_pemohon` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kewajiban_pemohon`
--

INSERT INTO `kewajiban_pemohon` (`id_kewajiban_pemohon`, `judul`, `deskripsi`) VALUES
(1, 'HAK PEMOHON INFORMASI', '<p>a.&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan permohonan dengan sarana yang telah disediakan oleh Bawaslu;<br>b.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bantuan pada saat mengajukan permohonan informasi atau pendampingan bagi </span>&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">pemohon berkebutuhan khusus.</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\"><br>c.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak menyampaikan pertanyaan, saran, dan pengaduan terkait pelayanan informasi;<br>d.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bukti tanda terima permohonan informasi;<br>e.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan pemberitahuan atas permohonan yang diajukan;<br>f.&nbsp;&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi tentang perpanjangan masa pemberitahuan dari Bawaslu;<br>g.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bukti tanda terima pemberian informasi;<br>h.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan keberatan terhadap prosedur pelayanan, biaya pelayanan atau terhadap </span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">penolakan </span>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">permohonan informasi;<br>i.&nbsp;&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi sesuai permintaan (subjek informasi, cara mendapatkan, bentuk informasi);<br>j.&nbsp;&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi tentang prosedur pelayanan, maklumat pelayanan, hak pemohon, dan </span>&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">informasi lain terkait proses pemenuhan hak atas informasi;<br>k.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan perlindungan data pribadi;<br>l.&nbsp;&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan permohonan sengketa ke Komisi Informasi jika tidak dapat menerima atau tidak puas </span>&nbsp;&nbsp;&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">dengan respon Badan Publik (Atasan PPID) terhadap keberatan yang diajukan pemohon.</span></p>'),
(2, 'KEWAJIBAN PEMOHON DAN PENGGUNA INFORMASI', '<p>a.&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon wajib memenuhi syarat yang ditetapkan peraturan perundang-undangan dalam mengajukan <br>permohonan&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">atau </span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">keberatan;<br>b.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informasi wajib menggunakan informasi publik sesuai ketentuan peraturan perundang-undangan;<br>c.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informai wajib mencantumkan sumber informasi sesuai ketentuan peraturan perundang-undangan;</span></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maklumat_pelayanan`
--

CREATE TABLE `maklumat_pelayanan` (
  `id_maklumat_pelayanan` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maklumat_pelayanan`
--

INSERT INTO `maklumat_pelayanan` (`id_maklumat_pelayanan`, `judul`, `foto`) VALUES
(1, 'MAKLUMAT PELAYANAN', '1598190981.jpg'),
(1, 'MAKLUMAT PELAYANAN', '1598144099.jpg'),
(1, 'MAKLUMAT PELAYANAN', '1598144099.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media_sosial`
--

CREATE TABLE `media_sosial` (
  `id` int(11) NOT NULL,
  `media_sosial` varchar(225) NOT NULL,
  `icon` varchar(30) NOT NULL,
  `url` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `media_sosial`
--

INSERT INTO `media_sosial` (`id`, `media_sosial`, `icon`, `url`) VALUES
(1, 'Facebook', 'fab fa-facebook', ''),
(2, 'Instagram', 'fab fa-instagram', ''),
(3, 'Twitter', 'fab fa-twitter', ''),
(4, 'YouTube', 'fab fa-youtube', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `page`
--

INSERT INTO `page` (`id`, `judul`, `deskripsi`) VALUES
(1, 'dsdffsf', 'dfsdfsdfsdfsdfs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan_informasi`
--

CREATE TABLE `pelayanan_informasi` (
  `id_pelayanan_informasi` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelayanan_informasi`
--

INSERT INTO `pelayanan_informasi` (`id_pelayanan_informasi`, `judul`, `deskripsi`) VALUES
(1, 'HAK DAN KEWAJIBAN BAWASLU DALAM PELAYANAN INFORMASI', '<p><span style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\">a. Bawaslu berhak menolak memberikan informasi yang dikecualikan sesuai dengan peraturan perundang-</span><span style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\">undangan;<br></span>b.&nbsp;<span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1rem;\"=\"\">Bawaslu berhak menolak permohonan dan menolak memberikan informasi apabila tidak sesuai dengan peraturan perundang-undangan;<br>c.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1rem;\"=\"\">Bawaslu berhak mengolah atau memperlakukan secara khusus informasi yang dinilai bersifat sensitif;<br>d.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu berhak membangun inovasi-inovasi untuk pemenuhan hak atas informasi, sesuai ketentuan perundang-undangan.</span></p>'),
(2, 'KEWAJIBAN BAWASLU DALAM PELAYANAN INFORMASI', '<p>a.&nbsp;<span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib menyediakan, memberikan, dan/atau menerbitkan informasi publik yang berada di bawah kewenangannya kepada pemohon informasi, selain informasi yang dikecualikan, sesuai dengan ketentuan perundang-undangan;<br>b.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib menyediakan informasi publik yang akurat, benar, dan tidak menyesatkan;<br>c.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib mengembangkan sistem pengelolaan dan pelayanan informasi untuk menjamin pemenuhan hak atas informasi secara cepat, tepat waktu, biaya ringan, dan cara sederhana;<br>d.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan bantuan atau pendampingan bagi pemohon informasi berkebutuhan khusus;<br>e.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib menanggapi/menindaklanjuti pertanyaan, saran, pengaduan, dan keberatan terkait pelayanan informasi;<br>f.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan bukti tanda terima permohonan informasi;<br>g.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan pemberitahuan atas permohonan informasi publik;<br>h.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan pemberitahuan tentang perpanjangan masa pemberitahuan permohonan informasi publik;<br>i.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan tanda terima pemberian informasi;<br>j.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan informasi sesuai permintaan pemohon sesuai ketentuan peraturan perundang-undangan;<br>k.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan perlindungan data pribadi pemohon informasi;<br>i.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan informasi tentang prosedur pelayanan, maklumat pelayanan, hak pemohon, dan informasi lain terkait proses pemenuhan hak atas informasi;</span></p>'),
(1, 'HAK DAN KEWAJIBAN BAWASLU DALAM PELAYANAN INFORMASI', '<p><span style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\">a. Bawaslu berhak menolak memberikan informasi yang dikecualikan sesuai dengan peraturan perundang-</span><span style=\"\" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";\"=\"\">undangan;<br></span>b.&nbsp;<span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1rem;\"=\"\">Bawaslu berhak menolak permohonan dan menolak memberikan informasi apabila tidak sesuai dengan peraturan perundang-undangan;<br>c.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, \" segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" \"noto=\"\" sans\",=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" \"segoe=\"\" ui=\"\" symbol\",=\"\" emoji\";=\"\" font-size:=\"\" 1rem;\"=\"\">Bawaslu berhak mengolah atau memperlakukan secara khusus informasi yang dinilai bersifat sensitif;<br>d.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu berhak membangun inovasi-inovasi untuk pemenuhan hak atas informasi, sesuai ketentuan perundang-undangan.</span></p>'),
(2, 'KEWAJIBAN BAWASLU DALAM PELAYANAN INFORMASI', '<p>a.&nbsp;<span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib menyediakan, memberikan, dan/atau menerbitkan informasi publik yang berada di bawah kewenangannya kepada pemohon informasi, selain informasi yang dikecualikan, sesuai dengan ketentuan perundang-undangan;<br>b.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib menyediakan informasi publik yang akurat, benar, dan tidak menyesatkan;<br>c.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib mengembangkan sistem pengelolaan dan pelayanan informasi untuk menjamin pemenuhan hak atas informasi secara cepat, tepat waktu, biaya ringan, dan cara sederhana;<br>d.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan bantuan atau pendampingan bagi pemohon informasi berkebutuhan khusus;<br>e.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib menanggapi/menindaklanjuti pertanyaan, saran, pengaduan, dan keberatan terkait pelayanan informasi;<br>f.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan bukti tanda terima permohonan informasi;<br>g.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan pemberitahuan atas permohonan informasi publik;<br>h.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan pemberitahuan tentang perpanjangan masa pemberitahuan permohonan informasi publik;<br>i.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan tanda terima pemberian informasi;<br>j.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan informasi sesuai permintaan pemohon sesuai ketentuan peraturan perundang-undangan;<br>k.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan perlindungan data pribadi pemohon informasi;<br>i.&nbsp;</span><span style=\"font-family: Rubik, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;\">Bawaslu wajib memberikan informasi tentang prosedur pelayanan, maklumat pelayanan, hak pemohon, dan informasi lain terkait proses pemenuhan hak atas informasi;</span></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemohon_informasi`
--

CREATE TABLE `pemohon_informasi` (
  `id_pemohon_informasi` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemohon_informasi`
--

INSERT INTO `pemohon_informasi` (`id_pemohon_informasi`, `judul`, `deskripsi`) VALUES
(1, 'HAK PEMOHON INFORMASI', '<p>a.&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan permohonan dengan sarana yang telah disediakan oleh Bawaslu;<br>b.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bantuan pada saat mengajukan permohonan informasi atau </span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">pendampingan bagi pemohon berkebutuhan khusus.<br></span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">c.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak menyampaikan pertanyaan, saran, dan pengaduan terkait pelayanan informasi;<br></span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">d.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bukti tanda terima permohonan informasi;<br>e.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan pemberitahuan atas permohonan yang diajukan;<br>f.&nbsp;&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi tentang perpanjangan masa pemberitahuan dari Bawaslu;<br>g.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bukti tanda terima pemberian informasi;<br>h.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan keberatan terhadap prosedur pelayanan, biaya pelayanan atau terhadap&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">penolakan permohonan informasi;<br>i.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi sesuai permintaan (subjek informasi, cara mendapatkan,&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">bentuk informasi);<br>j.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi tentang prosedur pelayanan, maklumat pelayanan, hak </span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">pemohon, dan informasi lain terkait proses pemenuhan hak atas informasi;<br>k.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan perlindungan data pribadi;<br>l.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan permohonan sengketa ke Komisi Informasi jika tidak dapat menerima atau tidak puas dengan respon Badan Publik (Atasan PPID) terhadap keberatan yang diajukan pemohon.</span></p>'),
(2, 'KEWAJIBAN PEMOHON DAN PENGGUNA INFORMASI', '<p>a.&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon wajib memenuhi syarat yang ditetapkan peraturan perundang-undangan dalam mengajukan permohonan atau keberatan;<br>b.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informasi wajib menggunakan informasi publik sesuai ketentuan peraturan perundang-undangan;<br>c.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informai wajib mencantumkan sumber informasi sesuai ketentuan peraturan perundang-undangan;</span></p>'),
(1, 'HAK PEMOHON INFORMASI', '<p>a.&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan permohonan dengan sarana yang telah disediakan oleh Bawaslu;<br>b.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bantuan pada saat mengajukan permohonan informasi atau </span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">pendampingan bagi pemohon berkebutuhan khusus.<br></span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">c.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak menyampaikan pertanyaan, saran, dan pengaduan terkait pelayanan informasi;<br></span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">d.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bukti tanda terima permohonan informasi;<br>e.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan pemberitahuan atas permohonan yang diajukan;<br>f.&nbsp;&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi tentang perpanjangan masa pemberitahuan dari Bawaslu;<br>g.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan bukti tanda terima pemberian informasi;<br>h.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan keberatan terhadap prosedur pelayanan, biaya pelayanan atau terhadap&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">penolakan permohonan informasi;<br>i.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi sesuai permintaan (subjek informasi, cara mendapatkan,&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">bentuk informasi);<br>j.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan informasi tentang prosedur pelayanan, maklumat pelayanan, hak </span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">pemohon, dan informasi lain terkait proses pemenuhan hak atas informasi;<br>k.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mendapatkan perlindungan data pribadi;<br>l.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon berhak mengajukan permohonan sengketa ke Komisi Informasi jika tidak dapat menerima atau tidak puas dengan respon Badan Publik (Atasan PPID) terhadap keberatan yang diajukan pemohon.</span></p>'),
(2, 'KEWAJIBAN PEMOHON DAN PENGGUNA INFORMASI', '<p>a.&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon wajib memenuhi syarat yang ditetapkan peraturan perundang-undangan dalam mengajukan permohonan atau keberatan;<br>b.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informasi wajib menggunakan informasi publik sesuai ketentuan peraturan perundang-undangan;<br>c.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informai wajib mencantumkan sumber informasi sesuai ketentuan peraturan perundang-undangan;</span></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_informasi`
--

CREATE TABLE `permohonan_informasi` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_register` int(11) NOT NULL,
  `rincian` mediumtext NOT NULL,
  `tujuan` mediumtext NOT NULL,
  `memperoleh` int(11) NOT NULL,
  `ktp` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `mendapatkan` int(11) NOT NULL,
  `status_permintaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permohonan_informasi`
--

INSERT INTO `permohonan_informasi` (`id`, `tanggal`, `id_register`, `rincian`, `tujuan`, `memperoleh`, `ktp`, `status`, `mendapatkan`, `status_permintaan`) VALUES
(5, '0000-00-00 00:00:00', 5, 'asda', 'asd', 1, '001619c6b37452a213d0df8cdd41fff3.jpg', 2, 2, 2),
(6, '0000-00-00 00:00:00', 6, 'sjdksdfkjsdfksdf', 'skdfjksjfksjfks', 1, 'd8102856fc400cea22344bb12bacc60f.png', 2, 2, 2),
(7, '0000-00-00 00:00:00', 7, 'sjidjfksjfksdfksd', 'skdfjkfksf', 1, '5be30235b1ee6d443cda157f40edbf65.png', 2, 4, 3),
(8, '2020-08-28 03:27:33', 0, 'asd', 'asd', 1, 'c9770318629b32f8d581527dbff8d553.jpeg', 1, 2, 3),
(9, '2020-08-28 03:43:39', 12, 'ads', 'asd', 2, 'a7a081c5f9626c49cad0e8e0ebed5eaa.jpeg', 2, 2, 1),
(10, '2020-09-01 18:30:30', 5, 'Halo', 'Test', 1, '', 1, 2, 1),
(11, '2020-09-01 18:31:26', 5, 'asd', 'asd', 1, '', 0, 2, 1),
(12, '2020-09-01 19:18:01', 13, 'Anu', 'Anu', 2, '4ac572d3643e509b902e622384c77f66.jpg', 1, 2, 1),
(13, '2020-09-01 19:23:24', 14, 'ads', 'sda', 1, '575420055346c5b35027a8681c10b248.jpg', 1, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil_singkat`
--

CREATE TABLE `profil_singkat` (
  `id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil_singkat`
--

INSERT INTO `profil_singkat` (`id`, `gambar`) VALUES
(1, '60698a2481ec25893318390f254df8b4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_pelayanan`
--

CREATE TABLE `prosedur_pelayanan` (
  `id_prosedur_pelayanan` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prosedur_pelayanan`
--

INSERT INTO `prosedur_pelayanan` (`id_prosedur_pelayanan`, `judul`, `foto`) VALUES
(1, 'PROSEDUR PELAYANAN INFORMASI', '1598185873.png'),
(1, 'PROSEDUR PELAYANAN INFORMASI', '1598185873.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_pengajuan`
--

CREATE TABLE `prosedur_pengajuan` (
  `id_prosedur_pengajuan` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prosedur_pengajuan`
--

INSERT INTO `prosedur_pengajuan` (`id_prosedur_pengajuan`, `judul`, `foto`) VALUES
(1, 'PROSEDUR PENGAJUAN KEBERATAN', '1598187372.png'),
(1, 'PROSEDUR PENGAJUAN KEBERATAN', '1598187372.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prosedur_permohonan`
--

CREATE TABLE `prosedur_permohonan` (
  `id_prosedur_permohonan` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prosedur_permohonan`
--

INSERT INTO `prosedur_permohonan` (`id_prosedur_permohonan`, `judul`, `foto`) VALUES
(1, 'PROSEDUR PERMOHONAN PENYELESAIAN SENGKETA INFORMASI', '1598188742.png'),
(1, 'PROSEDUR PERMOHONAN PENYELESAIAN SENGKETA INFORMASI', '1598188742.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register_pemohon`
--

CREATE TABLE `register_pemohon` (
  `id` int(11) NOT NULL,
  `nik` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `notelp` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `ktp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register_pemohon`
--

INSERT INTO `register_pemohon` (`id`, `nik`, `nama`, `alamat`, `pekerjaan`, `email`, `notelp`, `password`, `status`, `ktp`) VALUES
(5, 'asddd', 'Aditya', 'sad', 'asd', 'bijionta@gmail.com', '0812321313', '$2y$10$D.B7jI1mstqqg2QNGL1TkenL4tYotUKakMQbN8Wp40faR.BRSGKbG', 2, ''),
(6, '5654645', 'Fanta', 'sdfsdfsdf', 'Big Boss', 'gudang123@yahoo.com', '345353', '$2y$10$uEgYP6CiVi/P1TOPECJRYOCCWgNvMT47Dt4r2BmyLFF3x3.PgCSbW', 2, ''),
(7, '3453535', 'David', 'skjdfsdhfk', 'jksdfhksfjl', 'gondrong.coding26@gmail.com', '453534', '$2y$10$U.915KP48fifTSZ6RwX6WeJsTsp9mtCCD97LodhaiAjstve6W/qIq', 2, ''),
(8, '6408181311990001', 'Aditya', 'asdsdsdsdsdsdsd', 'sdsdads', 'user@root.com', 'dasasas', '$2y$10$FE/7r.VhLimQyMSY/gX02OoeBbLj1ycqbtlMVzoX3gTtXVyKPDhqa', 1, ''),
(12, 'asddd', 'sad', 'das', 'asd', 'batu@anu.co', 'asdasdasdasdasdasdasdasd', '$2y$10$be5CjYwhGrCRxtwm899fH.UMstEtC8yJPH/V8tLU2EGle9KpFOdVW', 2, ''),
(13, '6408181311990001', 'Aditya Sundawa', 'Jl Diponegori XII', 'Web Developer', 'utter@gmail.com', '081232131324', '$2y$10$Y8I9iP.RTPQglEYBcJbfhuoRg5wYteHVwM0y/cj9CnGTNzE1mMgWy', 2, ''),
(14, '64081813119900012', 'Hendra', 'Jl Imam Besuki', 'Web Developer', 'hendra0maulidan@gmail.com', '081232131324', '$2y$10$YGWeUo0aBWyQEdP9rwcdH.zsPr9kgk53X4ygXwRM/pNtCccABt29S', 2, '575420055346c5b35027a8681c10b248.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regulasi`
--

CREATE TABLE `regulasi` (
  `id_regulasi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tentang` varchar(255) NOT NULL,
  `link_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `regulasi`
--

INSERT INTO `regulasi` (`id_regulasi`, `judul`, `tentang`, `link_file`) VALUES
(2, 'Undang-Undang No 14 Tahun 2008', 'Keterbukaan Informasi Publik', 'tesssassdfsdfsdfsdfsdfsdffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ringkasan_layanan`
--

CREATE TABLE `ringkasan_layanan` (
  `id_ringkasan_layanan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ringkasan_layanan`
--

INSERT INTO `ringkasan_layanan` (`id_ringkasan_layanan`, `judul`, `link_file`) VALUES
(1, 'Ringkasan Permohonan Informasi Bulanan', 'https://www.google.com/search?q=google&rlz=1C1CHBF_enID913ID913&oq=google&aqs=chrome..69i57j69i59l3j69i60l3j69i65.4110j0j7&sourceid=chrome&ie=UTF-8'),
(2, 'Jumlah Permohonan Informasi yang Diberikan', 'https://www.google.com/search?q=google&rlz=1C1CHBF_enID913ID913&oq=google&aqs=chrome..69i57j69i59l3j69i60l3j69i65.4110j0j7&sourceid=chrome&ie=UTF-8'),
(3, 'Jumlah Permohonan Informasi yang Diberikan Sebagian dan Seluruhnya', 'https://www.google.com/search?q=google&rlz=1C1CHBF_enID913ID913&oq=google&aqs=chrome..69i57j69i59l3j69i60l3j69i65.4110j0j7&sourceid=chrome&ie=UTF-8'),
(4, 'Waktu Pemenuhan Permohonan Informasi Berdasarkan Hari', 'https://www.google.com/search?q=google&rlz=1C1CHBF_enID913ID913&oq=google&aqs=chrome..69i57j69i59l3j69i60l3j69i65.4110j0j7&sourceid=chrome&ie=UTF-8'),
(5, 'Ringkasan Laporan Layanan Informasi berdasarkan Alasan Penolakan', 'https://www.google.com/search?q=google&rlz=1C1CHBF_enID913ID913&oq=google&aqs=chrome..69i57j69i59l3j69i60l3j69i65.4110j0j7&sourceid=chrome&ie=UTF-8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_login`
--

CREATE TABLE `riwayat_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `sistem_oprasi` varchar(125) NOT NULL,
  `browser` varchar(125) NOT NULL,
  `tanggal_login` text NOT NULL,
  `jam` varchar(12) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat_login`
--

INSERT INTO `riwayat_login` (`id`, `username`, `ip`, `sistem_oprasi`, `browser`, `tanggal_login`, `jam`, `level`, `status`) VALUES
(1, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '05:52:01am', 1, 0),
(2, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '05:52:59am', 1, 0),
(3, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '05:55:05am', 1, 0),
(4, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '05:59:09am', 1, 0),
(5, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '06:18:51am', 1, 0),
(6, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '06:19:36am', 1, 0),
(7, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '06:44:19am', 1, 0),
(8, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '06:44:30am', 1, 0),
(9, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '06:45:07am', 1, 0),
(10, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '07:08:08am', 1, 0),
(11, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '07:10:23am', 1, 0),
(12, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '07:31:34am', 1, 0),
(13, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '07:31:56am', 1, 0),
(14, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '03:18:59pm', 1, 0),
(15, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '03:36:57pm', 1, 0),
(16, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '06:02:07pm', 1, 0),
(17, 'administrator', '::1', 'Windows 10', 'Chrome', '22-08-2020', '12:12:31am', 1, 0),
(18, 'administrator', '::1', 'Windows 10', 'Chrome', '22-08-2020', '04:01:57am', 1, 0),
(19, 'administrator', '::1', 'Windows 10', 'Chrome', '22-08-2020', '05:20:22am', 1, 0),
(20, 'administrator', '::1', 'Windows 10', 'Chrome', '22-08-2020', '03:36:18pm', 1, 0),
(21, 'administrator', '::1', 'Windows 10', 'Chrome', '22-08-2020', '06:09:41pm', 1, 0),
(22, 'administrator', '::1', 'Windows 10', 'Chrome', '22-08-2020', '09:13:59pm', 1, 0),
(23, 'administrator', '::1', 'Windows 10', 'Chrome', '23-08-2020', '01:54:15am', 1, 0),
(24, 'administrator', '::1', 'Windows 10', 'Chrome', '23-08-2020', '02:46:26am', 1, 0),
(25, 'administrator', '::1', 'Windows 10', 'Chrome', '23-08-2020', '04:14:13am', 1, 0),
(26, 'administrator', '::1', 'Windows 10', 'Chrome', '23-08-2020', '04:49:11pm', 1, 0),
(27, 'administrator', '::1', 'Windows 10', 'Chrome', '23-08-2020', '07:21:42pm', 1, 0),
(28, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '01:12:21am', 1, 0),
(29, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '03:20:41am', 1, 0),
(30, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '10:50:25pm', 1, 0),
(31, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '10:55:04pm', 1, 0),
(32, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '10:55:21pm', 1, 0),
(33, 'administrator', '::1', 'Windows 10', 'Chrome', '25-08-2020', '12:55:23am', 1, 0),
(34, 'administrator', '::1', 'Windows 10', 'Chrome', '25-08-2020', '02:33:04am', 1, 0),
(35, 'administrator', '::1', 'Windows 10', 'Chrome', '25-08-2020', '04:10:19am', 1, 0),
(36, 'administrator', '::1', 'Windows 10', 'Chrome', '25-08-2020', '08:32:08pm', 1, 0),
(37, 'administrator', '::1', 'Windows 10', 'Chrome', '25-08-2020', '08:38:21pm', 1, 0),
(38, 'administrator', '::1', 'Windows 10', 'Chrome', '26-08-2020', '03:48:26am', 1, 0),
(39, 'administrator', '::1', 'Windows 10', 'Chrome', '26-08-2020', '12:10:43pm', 1, 0),
(40, 'administrator', '::1', 'Windows 10', 'Chrome', '26-08-2020', '05:43:28pm', 1, 0),
(41, 'administrator', '::1', 'Windows 10', 'Chrome', '26-08-2020', '05:49:46pm', 1, 0),
(42, 'administrator', '::1', 'Windows 10', 'Chrome', '28-08-2020', '10:28:02am', 1, 0),
(43, 'administrator', '::1', 'Windows 10', 'Chrome', '31-08-2020', '09:36:27pm', 1, 0),
(44, 'administrator', '::1', 'Windows 10', 'Chrome', '02-09-2020', '12:37:27am', 1, 0),
(45, 'administrator', '::1', 'Windows 10', 'Chrome', '02-09-2020', '01:31:46am', 1, 0),
(46, 'administrator', '::1', 'Windows 10', 'Chrome', '02-09-2020', '02:18:12am', 1, 0),
(47, 'administrator', '::1', 'Windows 10', 'Chrome', '02-09-2020', '02:21:15am', 1, 0),
(48, 'administrator', '::1', 'Windows 10', 'Chrome', '02-09-2020', '02:24:14am', 1, 0),
(49, 'administrator', '::1', 'Windows 10', 'Chrome', '06-09-2020', '01:29:39am', 1, 1),
(50, 'administrator', '::1', 'Windows 10', 'Chrome', '06-09-2020', '01:52:14am', 1, 1),
(51, 'administrator', '::1', 'Windows 10', 'Chrome', '05-09-2020', '08:52:20pm', 1, 2),
(52, 'administrator', '::1', 'Windows 10', 'Chrome', '06-09-2020', '01:57:48am', 1, 1),
(53, 'administrator', '::1', 'Windows 10', 'Chrome', '05-09-2020', '09:06:05pm', 1, 2),
(54, 'administrator', '192.168.0.101', 'Android', 'Chrome', '06-09-2020', '02:06:35am', 1, 1),
(55, 'administrator', '::1', 'Windows 10', 'Chrome', '05-09-2020', '09:12:56pm', 1, 3),
(56, 'administrator', '192.168.0.101', 'Android', 'Chrome', '05-09-2020', '09:12:59pm', 1, 2),
(57, 'administrator', '::1', 'Windows 10', 'Chrome', '06-09-2020', '02:13:04am', 1, 1),
(58, 'administrator', '192.168.0.101', 'Android', 'Chrome', '05-09-2020', '09:13:49pm', 1, 3),
(59, 'administrator', '::1', 'Windows 10', 'Chrome', '05-09-2020', '09:13:56pm', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider_image`
--

CREATE TABLE `slider_image` (
  `id_slider` int(3) NOT NULL,
  `src_image` varchar(255) NOT NULL,
  `caption` varchar(30) NOT NULL,
  `link_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slider_image`
--

INSERT INTO `slider_image` (`id_slider`, `src_image`, `caption`, `link_url`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_ppid`
--

CREATE TABLE `struktur_ppid` (
  `id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `struktur_ppid`
--

INSERT INTO `struktur_ppid` (`id`, `gambar`) VALUES
(1, '1530861.png');

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
  `user_lvl` enum('1','2','3') NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nm`, `user_email`, `user_usrnm`, `user_pass`, `user_lvl`, `user_status`) VALUES
(1, 'tono', 'administrator@test.com', 'administrator', '0192023a7bbd73250516f069df18b500', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_management`
--

CREATE TABLE `user_management` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_management`
--

INSERT INTO `user_management` (`id`, `email`, `nama`, `password`, `level`) VALUES
(1, 'administratorasd', 'adsdas', '0192023a7bbd73250516f069df18b500', '3'),
(2, 'administrator', 'adsadas', '0192023a7bbd73250516f069df18b500', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(1) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `judul`, `foto`) VALUES
(1, 'Visi Misi', '1598304353.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu_layanan`
--

CREATE TABLE `waktu_layanan` (
  `id_waktu_layanan` int(1) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `waktu_layanan`
--

INSERT INTO `waktu_layanan` (`id_waktu_layanan`, `judul`, `foto`) VALUES
(1, 'WAKTU LAYANAN', '1598189726.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_informasi`
--
ALTER TABLE `daftar_informasi`
  ADD PRIMARY KEY (`id_daftar_informasi`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permohonan_informasi`
--
ALTER TABLE `permohonan_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `register_pemohon`
--
ALTER TABLE `register_pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regulasi`
--
ALTER TABLE `regulasi`
  ADD PRIMARY KEY (`id_regulasi`);

--
-- Indeks untuk tabel `ringkasan_layanan`
--
ALTER TABLE `ringkasan_layanan`
  ADD PRIMARY KEY (`id_ringkasan_layanan`);

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
-- AUTO_INCREMENT untuk tabel `daftar_informasi`
--
ALTER TABLE `daftar_informasi`
  MODIFY `id_daftar_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permohonan_informasi`
--
ALTER TABLE `permohonan_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `register_pemohon`
--
ALTER TABLE `register_pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `regulasi`
--
ALTER TABLE `regulasi`
  MODIFY `id_regulasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ringkasan_layanan`
--
ALTER TABLE `ringkasan_layanan`
  MODIFY `id_ringkasan_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat_login`
--
ALTER TABLE `riwayat_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;