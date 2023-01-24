-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 02:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prediksidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `CreatedBy` varchar(50) DEFAULT NULL,
  `CreatedUtc` datetime DEFAULT NULL,
  `LastModifiedBy` varchar(50) DEFAULT NULL,
  `LastModifiedUtc` datetime DEFAULT NULL,
  `DeletedBy` varchar(50) DEFAULT NULL,
  `DeletedUtc` datetime DEFAULT NULL,
  `Nama` varchar(75) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`CreatedBy`, `CreatedUtc`, `LastModifiedBy`, `LastModifiedUtc`, `DeletedBy`, `DeletedUtc`, `Nama`, `Username`, `Password`, `Id`) VALUES
('admin', '2023-01-19 09:39:19', NULL, NULL, NULL, NULL, 'Super Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('SA', '2023-01-21 07:53:01', 'Super Admin', '2023-01-21 11:01:35', NULL, NULL, 'Adit Batik Solo', 'Adit', 'c93ccd78b2076528346216b3b2f701e6', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `Id` int(6) NOT NULL,
  `CreatedBy` varchar(50) DEFAULT NULL,
  `CreatedUtc` datetime DEFAULT NULL,
  `LastModifiedBy` varchar(50) DEFAULT NULL,
  `LastModifiedUtc` datetime DEFAULT NULL,
  `DeletedBy` varchar(50) DEFAULT NULL,
  `DeletedUtc` datetime DEFAULT NULL,
  `NamaBarang` varchar(150) DEFAULT NULL,
  `Harga` float(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`Id`, `CreatedBy`, `CreatedUtc`, `LastModifiedBy`, `LastModifiedUtc`, `DeletedBy`, `DeletedUtc`, `NamaBarang`, `Harga`) VALUES
(2, 'Ardana Gama Prasetyo', '2023-01-19 04:20:34', 'Ardana Gama Prasetyo', '2023-01-19 04:27:16', NULL, NULL, 'batik solo men shirt L/S', 150000.00),
(3, 'Ardana Gama Prasetyo', '2023-01-19 04:21:55', NULL, NULL, NULL, NULL, 'batik solo men shirt S/S', 150000.00),
(4, 'Ardana Gama Prasetyo', '2023-01-19 04:22:15', NULL, NULL, NULL, NULL, 'batik solo ladies blouse', 170000.00),
(5, 'Ardana Gama Prasetyo', '2023-01-19 04:22:40', NULL, NULL, NULL, NULL, 'batik solo ladies dress', 130000.00),
(6, 'Ardana Gama Prasetyo', '2023-01-19 04:23:07', NULL, NULL, NULL, NULL, 'batik solo ladies skirt', 185000.00);

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `Id` int(3) NOT NULL,
  `NamaBulan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`Id`, `NamaBulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `Id` int(6) NOT NULL,
  `CreatedBy` varchar(50) DEFAULT NULL,
  `CreatedUtc` datetime DEFAULT NULL,
  `LastModifiedBy` varchar(50) DEFAULT NULL,
  `LastModifiedUtc` datetime DEFAULT NULL,
  `DeletedBy` varchar(50) DEFAULT NULL,
  `DeletedUtc` datetime DEFAULT NULL,
  `BarangId` int(6) DEFAULT NULL,
  `Tahun` int(6) DEFAULT NULL,
  `Jumlah` int(6) DEFAULT NULL,
  `Bulan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`Id`, `CreatedBy`, `CreatedUtc`, `LastModifiedBy`, `LastModifiedUtc`, `DeletedBy`, `DeletedUtc`, `BarangId`, `Tahun`, `Jumlah`, `Bulan`) VALUES
(22, 'Super Admin', '2023-01-23 04:39:14', 'Super Admin', '2023-01-23 04:55:24', NULL, NULL, 2, 2023, 200, 'Januari'),
(23, 'Super Admin', '2023-01-23 04:59:33', NULL, NULL, NULL, NULL, 2, 2023, 300, 'Januari'),
(24, 'Super Admin', '2023-01-23 05:00:27', NULL, NULL, NULL, NULL, 2, 2022, 600, 'Februari'),
(25, 'Super Admin', '2023-01-23 05:03:28', NULL, NULL, NULL, NULL, 2, 2022, 400, 'Maret'),
(26, 'Super Admin', '2023-01-23 07:56:57', NULL, NULL, NULL, NULL, 2, 2021, 150, 'Januari'),
(27, 'Super Admin', '2023-01-23 07:57:10', NULL, NULL, NULL, NULL, 2, 2021, 900, 'Februari'),
(28, 'Super Admin', '2023-01-23 07:57:24', NULL, NULL, NULL, NULL, 2, 2020, 100, 'Maret'),
(29, 'Super Admin', '2023-01-23 07:57:37', NULL, NULL, NULL, NULL, 2, 2020, 150, 'Februari'),
(30, 'Super Admin', '2023-01-23 07:57:55', NULL, NULL, NULL, NULL, 2, 2019, 150, 'Februari'),
(31, 'Super Admin', '2023-01-23 07:58:07', NULL, NULL, NULL, NULL, 2, 2019, 250, 'Januari'),
(32, 'Super Admin', '2023-01-23 11:10:58', NULL, NULL, NULL, NULL, 2, 2018, 500, 'Februari'),
(33, 'Super Admin', '2023-01-23 11:11:12', NULL, NULL, NULL, NULL, 2, 2018, 250, 'Maret'),
(34, 'Super Admin', '2023-01-23 11:11:29', NULL, NULL, NULL, NULL, 2, 2017, 210, 'Maret'),
(35, 'Super Admin', '2023-01-23 11:11:41', NULL, NULL, NULL, NULL, 2, 2017, 300, 'Juli'),
(36, 'Super Admin', '2023-01-23 11:12:03', NULL, NULL, NULL, NULL, 2, 2016, 250, 'Februari'),
(37, 'Super Admin', '2023-01-23 11:12:15', NULL, NULL, NULL, NULL, 2, 2016, 210, 'Juni'),
(38, 'Super Admin', '2023-01-23 11:12:33', NULL, NULL, NULL, NULL, 2, 2015, 300, 'Agustus'),
(39, 'Super Admin', '2023-01-23 11:12:44', NULL, NULL, NULL, NULL, 2, 2015, 210, 'Agustus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
