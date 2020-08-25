-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2020 pada 19.55
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

-- -------------------------------------ads-------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `alamat`, `no_hp`) VALUES
(1, 'sad', 'asd');

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
(1, 'MAKLUMAT PELAYANAN', '1598144099.jpg'),
(1, 'MAKLUMAT PELAYANAN', '1598144099.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `tanggal` varchar(225) NOT NULL,
  `id_register` int(11) NOT NULL,
  `rincian` mediumtext NOT NULL,
  `tujuan` mediumtext NOT NULL,
  `memperoleh` int(11) NOT NULL,
  `ktp` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `mendapatkan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permohonan_informasi`
--

INSERT INTO `permohonan_informasi` (`id`, `tanggal`, `id_register`, `rincian`, `tujuan`, `memperoleh`, `ktp`, `status`, `mendapatkan`) VALUES
(5, '', 6, 'asda', 'asd', 1, '001619c6b37452a213d0df8cdd41fff3.jpg', 1, 2);

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
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register_pemohon`
--

INSERT INTO `register_pemohon` (`id`, `nik`, `nama`, `alamat`, `pekerjaan`, `email`, `notelp`, `password`, `status`) VALUES
(6, 'asddd', 'Aditya', 'sad', 'asd', 'bijionta@gmail.com', '0812321313', '$2y$10$D.B7jI1mstqqg2QNGL1TkenL4tYotUKakMQbN8Wp40faR.BRSGKbG', 1);

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

--
-- Dumping data untuk tabel `riwayat_login`
--

INSERT INTO `riwayat_login` (`id`, `username`, `ip`, `sistem_oprasi`, `browser`, `tanggal_login`, `jam`, `level`) VALUES
(3, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '06:39:57pm', 1),
(4, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '10:25:46pm', 1),
(5, 'administrator', '::1', 'Windows 10', 'Chrome', '21-08-2020', '11:20:17pm', 1),
(6, 'administrator', '::1', 'Windows 10', 'Chrome', '22-08-2020', '02:16:54am', 1),
(7, 'administrator', '::1', 'Windows 10', 'Chrome', '23-08-2020', '09:06:10am', 1),
(8, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '02:10:07pm', 1),
(9, 'Aditya232es', '::1', 'Windows 10', 'Chrome', '24-08-2020', '03:00:14pm', 1),
(10, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '03:00:46pm', 1),
(11, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '03:01:04pm', 1),
(12, 'Aditya232es', '::1', 'Windows 10', 'Chrome', '24-08-2020', '03:01:21pm', 1),
(13, 'administrator', '::1', 'Windows 10', 'Chrome', '24-08-2020', '03:02:02pm', 1);

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
  `user_lvl` varchar(14) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nm`, `user_email`, `user_usrnm`, `user_pass`, `user_lvl`, `user_status`) VALUES
(1, 'tono', 'administrator@test.com', 'administrator', '0192023a7bbd73250516f069df18b500', '1', 1),
(2, 'Aditya', 'bangjekwartal31@gmail.com', 'Aditya232es', '956e70451d813c7c7a9b2680387bbf51', '2', 1);

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
  `id` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `judul`, `deskripsi`) VALUES
(1, 'visiasd', 'dasad'),
(2, 'misi', 'das');

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
-- Indeks untuk tabel `profil_singkat`
--
ALTER TABLE `profil_singkat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `register_pemohon`
--
ALTER TABLE `register_pemohon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `riwayat_login`
--
ALTER TABLE `riwayat_login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur_ppid`
--
ALTER TABLE `struktur_ppid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `daftar_informasi`
--
ALTER TABLE `daftar_informasi`
  MODIFY `id_daftar_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permohonan_informasi`
--
ALTER TABLE `permohonan_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profil_singkat`
--
ALTER TABLE `profil_singkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `register_pemohon`
--
ALTER TABLE `register_pemohon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat_login`
--
ALTER TABLE `riwayat_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `struktur_ppid`
--
ALTER TABLE `struktur_ppid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;