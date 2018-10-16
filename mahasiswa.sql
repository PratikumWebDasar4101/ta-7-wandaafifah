-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 06:30 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(15) NOT NULL,
  `nama` text NOT NULL,
  `nim` int(10) NOT NULL,
  `jeniskelamin` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `motohidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `nim`, `jeniskelamin`, `prodi`, `fakultas`, `asal`, `motohidup`) VALUES
(2, 'dis', 45, 'Laki-Laki', 'Manajemen Informatika', 'FIT', 'jakarta', 'creating the future'),
(4, 'uti', 3436, 'Perempuan', 'DKV', 'FIT', 'jakarta', 'creating the future'),
(5, 'uti', 3436, 'Perempuan', 'DKV', 'FIT', 'jakarta', 'creating the future'),
(6, 'sri', 8368, 'Perempuan', 'perhotelan', 'FIT', 'bandung', 'creating the future'),
(7, 'vgbj', 789, 'Laki-Laki', 'Manajemen Informatika', 'FIT', 'bandung', 'creating the future');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
