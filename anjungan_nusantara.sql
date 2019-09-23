-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 03:53 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anjungan_nusantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ol_kategori`
--

CREATE TABLE `ol_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ol_subkategori`
--

CREATE TABLE `ol_subkategori` (
  `subkategori_id` int(11) NOT NULL,
  `subkategori_nama` varchar(255) NOT NULL,
  `subkategori_kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ol_usaha`
--

CREATE TABLE `ol_usaha` (
  `usaha_id` int(11) NOT NULL,
  `usaha_nama` varchar(255) NOT NULL,
  `usaha_alamat` varchar(255) NOT NULL,
  `usaha_no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_nama` varchar(255) NOT NULL,
  `profile_alamat` varchar(255) NOT NULL,
  `profile_jenis_kelamin` varchar(255) NOT NULL,
  `profile_no_telp` varchar(255) NOT NULL,
  `profile_email` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_profile_id` (`login_profile_id`);

--
-- Indexes for table `ol_kategori`
--
ALTER TABLE `ol_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `ol_subkategori`
--
ALTER TABLE `ol_subkategori`
  ADD PRIMARY KEY (`subkategori_id`),
  ADD KEY `subkategori_kategori_id` (`subkategori_kategori_id`);

--
-- Indexes for table `ol_usaha`
--
ALTER TABLE `ol_usaha`
  ADD PRIMARY KEY (`usaha_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ol_kategori`
--
ALTER TABLE `ol_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ol_subkategori`
--
ALTER TABLE `ol_subkategori`
  MODIFY `subkategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ol_usaha`
--
ALTER TABLE `ol_usaha`
  MODIFY `usaha_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`login_profile_id`) REFERENCES `login` (`login_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
