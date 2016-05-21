-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2016 at 06:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-office`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `Nomor_Berita` varchar(50) NOT NULL,
  `Judul_Berita` varchar(50) NOT NULL,
  `Isi_Berita` varchar(50) NOT NULL,
  `Tgl_Berita` varchar(50) NOT NULL,
  `Kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_agenda` int(10) NOT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Kategori` varchar(45) DEFAULT NULL,
  `Lokasi` varchar(45) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Pukul` time DEFAULT NULL,
  `Keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_agenda`, `Nama`, `Kategori`, `Lokasi`, `Tanggal`, `Pukul`, `Keterangan`) VALUES
(1, 'rapat mingguan', 'rapat', 'labkom', '0000-00-00', '12:00:00', 'mohon kehadirannya'),
(2, 'sidang skripsi', 'sidang', 'labkom ', '0000-00-00', '13:00:00', 'moohon kerjasamanya'),
(3, 'rapat mingguan', 'rapat', 'labkom', '2016-05-11', '06:02:00', 'rapat membhas jadwal ujian'),
(4, 'rapat rutin bulanan', 'rapat', 'labkom', '2016-05-18', '13:00:00', 'membahas pemilihan calon kaprodi'),
(5, 'rapat bos', 'dikusi', 'lapangan', '2016-05-20', '23:05:00', 'blabla'),
(6, 'rapat tahunan', 'rapt', 'labkom', '2016-05-29', '12:00:00', 'harus datangbos'),
(7, 'diskusi', 'diskusi', 'labkom', '2016-05-29', '23:05:00', 'ayo dateng\r\nbos');

-- --------------------------------------------------------

--
-- Table structure for table `lembar_disposisi`
--

CREATE TABLE `lembar_disposisi` (
  `No_Agenda` int(11) NOT NULL,
  `Tanggal_Surat` date NOT NULL,
  `Kode` varchar(12) NOT NULL,
  `Perihal` varchar(30) NOT NULL,
  `Sifat_Pengelolaan` int(11) NOT NULL,
  `Isi_Disposisi` varchar(1000) NOT NULL,
  `Keterangan` varchar(1000) NOT NULL,
  `No_Pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `Nip` int(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Nama_Pegawai` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telp_Pegawai` int(11) NOT NULL,
  `Email_Pegawai` varchar(50) NOT NULL,
  `Jabatan` varchar(30) NOT NULL,
  `Gelar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `No_Pesan` int(15) NOT NULL,
  `Judul_Pesan` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Waktu` datetime NOT NULL,
  `Keterangan` varchar(1000) NOT NULL,
  `File` blob NOT NULL,
  `Pengirim` varchar(30) NOT NULL,
  `Penerima` varchar(30) NOT NULL,
  `Tanggal_kirim` date NOT NULL,
  `Status_pengirim` int(1) NOT NULL,
  `Status_penerima` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`No_Pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_agenda` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
