-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Apr 2016 pada 06.38
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-office`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `Nomor_Berita` varchar(50) NOT NULL,
  `Judul_Berita` varchar(50) NOT NULL,
  `Isi_Berita` varchar(50) NOT NULL,
  `Tgl_Berita` varchar(50) NOT NULL,
  `Kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `e-letter`
--

CREATE TABLE IF NOT EXISTS `e-letter` (
  `No.Surat` varchar(50) NOT NULL,
  `Judul_Surat` varchar(50) NOT NULL,
  `Lampiran` varchar(50) NOT NULL,
  `Acc.Kaprodi` varchar(50) NOT NULL,
  `Acc.Kadep` varchar(50) NOT NULL,
  `Gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id_agenda` int(11) NOT NULL,
  `Nama` varchar(45) NOT NULL,
  `Kategori` varchar(45) NOT NULL,
  `Lokasi` varchar(45) NOT NULL,
  `Waktu` varchar(45) NOT NULL,
  `Keterangan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_agenda`, `Nama`, `Kategori`, `Lokasi`, `Waktu`, `Keterangan`) VALUES
(1, 'Seminar Sertifikasi oracle', 'Seminar', 'Labkom 2', '15 April 2016 (13.00-15.00)', 'Seminar untuk mendapatkan sertifikasi oracle'),
(2, 'Sidang Skripsi', 'Sidang', 'Labkom 3', '15 April 2016 (14.00-15.00)', 'Sidang skripsi ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Nik` varchar(50) NOT NULL,
  `Nama_Karyawan` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telp_Karyawan` int(11) NOT NULL,
  `Email_Karyawan` varchar(50) NOT NULL,
  `Jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
