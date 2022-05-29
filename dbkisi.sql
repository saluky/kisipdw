-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 01:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkisi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tsiswaprestasi`
--

CREATE TABLE `tsiswaprestasi` (
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_uas` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tsiswaprestasi`
--

INSERT INTO `tsiswaprestasi` (`nis`, `nama_siswa`, `asal_sekolah`, `nilai_uas`) VALUES
('2022002', 'Budi Saja Saja', 'SMPN 2 Kuningan', 99),
('2022003', 'Cica Cica', 'SMPN 3 Cirebon', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tsiswaprestasi`
--
ALTER TABLE `tsiswaprestasi`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
