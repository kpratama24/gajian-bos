-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 05:45 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `ID_USER` int(2) NOT NULL,
  `HARI` varchar(100) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAM_MASUK` time NOT NULL,
  `JAM_PULANG` time NOT NULL,
  `TOTAL_JAM` int(2) NOT NULL,
  `ISTIRAHAT` int(2) NOT NULL,
  `WAKTU_REAL` int(2) NOT NULL,
  `TOTAL_BAYAR` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(2) NOT NULL,
  `USERNAME` varchar(64) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `NAMA` varchar(64) NOT NULL,
  `NIK` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `NAMA`, `NIK`) VALUES
(1, 'henggkyy@gmail.com', 'coba', 'Hengky Surya Hanadi', 20180014),
(2, 'hengkihan@yahoo.com', '321', 'Hengky', 2018212);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarlaporan`
--
ALTER TABLE `daftarlaporan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarlaporan`
--
ALTER TABLE `daftarlaporan`
  ADD CONSTRAINT `daftarlaporan_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
