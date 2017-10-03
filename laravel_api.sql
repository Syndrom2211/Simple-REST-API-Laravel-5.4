-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 03, 2017 at 09:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kecamatan`
--

CREATE TABLE `data_kecamatan` (
  `id_kecamatan` int(5) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kecamatan`
--

INSERT INTO `data_kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Andir'),
(2, 'Antapani'),
(3, 'Arcamanik'),
(4, 'Astanaanyar'),
(5, 'Babakanciparay'),
(6, 'Bandung Kidul'),
(7, 'Bandung Kulon'),
(8, 'Bandung Wetan'),
(9, 'Batununggal'),
(10, 'Bojongloa Kaler'),
(11, 'Bojongloa Kidul'),
(12, 'Buahbatu'),
(13, 'Cibeunying Kaler'),
(14, 'Cibeunying Kidul'),
(15, 'Cibiru'),
(16, 'Cicendo'),
(17, 'Cidadap'),
(18, 'Cinambo'),
(19, 'Coblong'),
(20, 'Gedebage'),
(21, 'Kiaracondong'),
(22, 'Lengkong'),
(23, 'Mandalajati'),
(24, 'Panyileukan'),
(25, 'Rancasari'),
(26, 'Regol'),
(27, 'Sukajadi'),
(28, 'Sukasari'),
(29, 'Sumurbandung'),
(30, 'Ujungberung'),
(31, 'Banjaran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kecamatan`
--
ALTER TABLE `data_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kecamatan`
--
ALTER TABLE `data_kecamatan`
  MODIFY `id_kecamatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
