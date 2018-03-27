-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 08:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaji_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftarlaporan`
--

CREATE TABLE `daftarlaporan` (
  `ID` int(10) NOT NULL,
  `ID_USER` varchar(64) NOT NULL,
  `HARI` varchar(100) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM_MASUK` time NOT NULL,
  `JAM_PULANG` time NOT NULL,
  `TOTAL_JAM` int(2) NOT NULL,
  `ISTIRAHAT` int(2) NOT NULL,
  `WAKTU_REAL` int(2) NOT NULL,
  `TOTAL_BAYAR` int(15) NOT NULL,
  `PERIODE` int(2) NOT NULL,
  `TAHUN` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftarlaporan`
--
ALTER TABLE `daftarlaporan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarlaporan`
--
ALTER TABLE `daftarlaporan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarlaporan`
--
ALTER TABLE `daftarlaporan`
  ADD CONSTRAINT `daftarlaporan_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`USERNAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
