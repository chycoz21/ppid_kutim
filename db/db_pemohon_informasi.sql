-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2020 pada 17.39
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
(2, 'KEWAJIBAN PEMOHON DAN PENGGUNA INFORMASI', '<p>a.&nbsp;<span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pemohon wajib memenuhi syarat yang ditetapkan peraturan perundang-undangan dalam mengajukan permohonan atau keberatan;<br>b.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informasi wajib menggunakan informasi publik sesuai ketentuan peraturan perundang-undangan;<br>c.&nbsp;</span><span style=\"color: rgb(83, 83, 83); font-family: sans-serif; font-size: 13.6px;\">Pengguna informai wajib mencantumkan sumber informasi sesuai ketentuan peraturan perundang-undangan;</span></p>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
