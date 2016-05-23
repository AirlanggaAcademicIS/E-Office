-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 12:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

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
-- Table structure for table `tulismemo`
--

CREATE TABLE `tulismemo` (
  `No.Agenda` int(100) NOT NULL,
  `Tanggal Surat` date NOT NULL,
  `Nomor Surat` int(100) NOT NULL,
  `Lampiran` varchar(100) NOT NULL,
  `Kode` varchar(100) NOT NULL,
  `Kepada` char(100) NOT NULL,
  `Diteruskan kepada` char(100) NOT NULL,
  `Sifat Pengelolaan` char(100) NOT NULL,
  `Keterangan` char(100) NOT NULL,
  `File Upload` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tulismemo`
--
ALTER TABLE `tulismemo`
  ADD PRIMARY KEY (`No.Agenda`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
