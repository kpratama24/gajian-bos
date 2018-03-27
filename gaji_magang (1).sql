-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 09:27 AM
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
-- Dumping data for table `daftarlaporan`
--

INSERT INTO `daftarlaporan` (`ID`, `ID_USER`, `HARI`, `TANGGAL`, `JAM_MASUK`, `JAM_PULANG`, `TOTAL_JAM`, `ISTIRAHAT`, `WAKTU_REAL`, `TOTAL_BAYAR`, `PERIODE`, `TAHUN`) VALUES
(1, 'henggkyy@gmail.com', 'Senin', '2018-03-27', '10:10:00', '12:12:00', 2, 0, 2, 18000, 3, 2018),
(2, 'test@test.com', 'Senin', '2018-03-27', '10:10:00', '15:15:00', 3, 0, 3, 0, 3, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `kategorimagang`
--

CREATE TABLE `kategorimagang` (
  `ID` int(11) NOT NULL,
  `KATEGORI` varchar(64) NOT NULL,
  `HARGA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorimagang`
--

INSERT INTO `kategorimagang` (`ID`, `KATEGORI`, `HARGA`) VALUES
(1, '1A', 9000),
(2, '2', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(64) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL,
  `NAMA` varchar(64) NOT NULL,
  `NIK` int(10) NOT NULL,
  `ID_KATEGORI` int(2) NOT NULL,
  `ID_ROLE` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `PASSWORD`, `NAMA`, `NIK`, `ID_KATEGORI`, `ID_ROLE`) VALUES
('admin@nearkevin.tk', '$2y$10$Qr2U0HhRAgzqtdMidgfnzOPSToJcQeXOb5nfTQ6.9o.K4BEFpe3Ia', 'Kevin Pratama', 20170122, 1, 1),
('henggkyy@gmail.com', '$2y$10$PVdBdUK9mOgKgK1CBy2m1e7NKqRnq3Cy6QTAqrX68aqFye36MsLuq', 'Hengky Surya Hanadi', 20180014, 1, 1),
('test@test.com', '$2y$10$YkOrcsfeaxyYxLGQvO2iH.VGJmvO3CzjkYdphTFyBQ3YMUxh6KmLu', 'Test', 2000000, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `ID` int(2) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`ID`, `NAME`) VALUES
(1, 'Administrator'),
(2, 'User');

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
-- Indexes for table `kategorimagang`
--
ALTER TABLE `kategorimagang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD KEY `ID_KATEGORI` (`ID_KATEGORI`),
  ADD KEY `ID_ROLE` (`ID_ROLE`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftarlaporan`
--
ALTER TABLE `daftarlaporan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategorimagang`
--
ALTER TABLE `kategorimagang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarlaporan`
--
ALTER TABLE `daftarlaporan`
  ADD CONSTRAINT `daftarlaporan_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`USERNAME`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ID_KATEGORI`) REFERENCES `kategorimagang` (`ID`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`ID_ROLE`) REFERENCES `user_role` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
