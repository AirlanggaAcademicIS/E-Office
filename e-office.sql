-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2016 at 11:13 AM
-- Server version: 5.6.20
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
-- Table structure for table `berita`
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
-- Table structure for table `e-letter`
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
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
`id_agenda` int(10) NOT NULL,
  `Nama` varchar(45) DEFAULT NULL,
  `Kategori` varchar(45) DEFAULT NULL,
  `Lokasi` varchar(45) DEFAULT NULL,
  `Tanggal` date DEFAULT NULL,
  `Pukul` time DEFAULT NULL,
  `Keterangan` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

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
-- Table structure for table `signup`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
 ADD PRIMARY KEY (`id_agenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
MODIFY `id_agenda` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
