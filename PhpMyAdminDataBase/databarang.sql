-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2018 at 05:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `isbn` int(11) NOT NULL,
  `idpgr` varchar(255) DEFAULT NULL,
  `kodebk` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `stokbk` int(11) DEFAULT NULL,
  `hargabk` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`isbn`, `idpgr`, `kodebk`, `judul`, `kota`, `tahun`, `stokbk`, `hargabk`) VALUES
(101, 'P-004', 'JB-004', '1001 Soal Kehidupan', 'Banjarmasin', '2015', 33, 115000),
(201, 'P-005', 'JB-005', 'Sejarah Umat Islam', 'Banjarmasin', '2014', 10, 230000),
(231, 'P-003', 'JB-003', 'Keep Positive Thingking', 'Palangkaraya', '2016', 20, 35000),
(978, 'P-001', 'JB-001', 'Kemenangan Mimpi', 'Jakarta', '2017', 50, 39000),
(3210, 'P-003', 'JB-003', 'Nusantara World', 'Samarinda', '2012', 33, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
