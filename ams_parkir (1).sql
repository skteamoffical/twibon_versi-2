-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 11:47 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_mem` char(8) NOT NULL,
  `no_pol` char(9) DEFAULT NULL,
  `jenis` enum('Motor','Mobil') DEFAULT NULL,
  `merek_ken` varchar(50) DEFAULT NULL,
  `pemilik` varchar(50) DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_mem`, `no_pol`, `jenis`, `merek_ken`, `pemilik`, `status`) VALUES
('M2019001', 'BF438SL', 'Motor', 'Suzuki', 'Li Ming Chep', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `parkirin`
--

CREATE TABLE `parkirin` (
  `id_par` char(10) NOT NULL,
  `no_pol` char(9) DEFAULT NULL,
  `status` enum('member','nonmember') DEFAULT NULL,
  `waktu_mas` time DEFAULT NULL,
  `waktu_kel` time DEFAULT NULL,
  `aksi` enum('masuk','keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkirin`
--

INSERT INTO `parkirin` (`id_par`, `no_pol`, `status`, `waktu_mas`, `waktu_kel`, `aksi`) VALUES
('B00001', 'BF438SL', 'member', '10:52:23', '04:25:46', 'keluar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` char(25) NOT NULL,
  `password` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'kepoin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_mem`),
  ADD UNIQUE KEY `no_pol` (`no_pol`);

--
-- Indexes for table `parkirin`
--
ALTER TABLE `parkirin`
  ADD PRIMARY KEY (`id_par`),
  ADD UNIQUE KEY `no_pol` (`no_pol`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parkirin`
--
ALTER TABLE `parkirin`
  ADD CONSTRAINT `FK_MemberParkirin` FOREIGN KEY (`no_pol`) REFERENCES `member` (`no_pol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
