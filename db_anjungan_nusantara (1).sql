-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 03:55 AM
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
-- Database: `db_anjungan_nusantara`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'Suvenir'),
(2, 'Makanan'),
(4, 'Oleh-oleh'),
(5, 'Alat rumah tangga');

-- --------------------------------------------------------

--
-- Table structure for table `list_gambar_produk`
--

CREATE TABLE `list_gambar_produk` (
  `list_produk_id` int(11) NOT NULL,
  `list_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_gambar_produk`
--

INSERT INTO `list_gambar_produk` (`list_produk_id`, `list_gambar`) VALUES
(1, '1_1.jpg'),
(1, '1_2.jpg'),
(1, '1_3.jpg'),
(1, '1_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `login_level` varchar(255) NOT NULL,
  `login_status` varchar(255) NOT NULL,
  `login_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `e_mail`, `password`, `login_level`, `login_status`, `login_profile_id`) VALUES
(1, 'admin', 'admin', 'Admin', 'Terverifikasi', 1),
(2, 'andi@gmail.com', '12345678', 'Penjual', 'Terverifikasi', 2),
(3, 'afi@yahoo.com', 'abcd1234', 'Penjual', 'Terverifikasi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(255) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_stock` int(11) NOT NULL,
  `produk_terjual` int(11) NOT NULL,
  `produk_deskripsi` text NOT NULL,
  `produk_foto_depan` varchar(255) NOT NULL,
  `produk_status` varchar(255) NOT NULL,
  `produk_diupload` timestamp NOT NULL DEFAULT current_timestamp(),
  `produk_rilis` timestamp NULL DEFAULT NULL,
  `produk_terakhir_dibeli` timestamp NULL DEFAULT NULL,
  `produk_subkategori_id` int(11) NOT NULL,
  `produk_usaha_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_harga`, `produk_stock`, `produk_terjual`, `produk_deskripsi`, `produk_foto_depan`, `produk_status`, `produk_diupload`, `produk_rilis`, `produk_terakhir_dibeli`, `produk_subkategori_id`, `produk_usaha_id`) VALUES
(1, 'Gantungan Kunci Owl', 8000, 12, 0, 'Gantungan kunci gambar Owl terbuat dari kayu', '1_1.jpg', 'Disetujui', '2019-11-07 02:26:41', '2019-11-07 02:29:32', NULL, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_nama` varchar(255) NOT NULL,
  `profile_no_hp` varchar(255) NOT NULL,
  `profile_alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `profile_nama`, `profile_no_hp`, `profile_alamat`) VALUES
(1, 'Yudistira', '0812345678', ''),
(2, 'andi', '0812345678', ''),
(3, 'afi', '099', '');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_produk_id` int(11) NOT NULL,
  `rating_profile_id` int(11) NOT NULL,
  `rating_nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_produk_id`, `rating_profile_id`, `rating_nilai`) VALUES
(3, 98, 3),
(3, 99, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subkategori`
--

CREATE TABLE `subkategori` (
  `subkategori_id` int(11) NOT NULL,
  `subkategori_nama` varchar(255) NOT NULL,
  `subkategori_kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkategori`
--

INSERT INTO `subkategori` (`subkategori_id`, `subkategori_nama`, `subkategori_kategori_id`) VALUES
(1, 'Mug', 1),
(2, 'Kipas', 1),
(3, 'Camilan', 2),
(4, 'Kripik', 2),
(5, 'Suvenir kayu', 1),
(6, 'Peralatan Makan', 5),
(7, 'Oleh - oleh Khas Malang', 4),
(8, 'Peralatan dapur', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`nama`) VALUES
('aa'),
('bb'),
('cc'),
('cc'),
('cc'),
('cc'),
('dd'),
('bb'),
('tt'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `usaha_id` int(11) NOT NULL,
  `usaha_nama` varchar(255) NOT NULL,
  `usaha_alamat` varchar(255) NOT NULL,
  `usaha_no_telp` varchar(255) NOT NULL,
  `usaha_email` varchar(255) NOT NULL,
  `usaha_foto` varchar(255) NOT NULL,
  `usaha_keterangan` text NOT NULL,
  `usaha_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`usaha_id`, `usaha_nama`, `usaha_alamat`, `usaha_no_telp`, `usaha_email`, `usaha_foto`, `usaha_keterangan`, `usaha_profile_id`) VALUES
(1, 'Sumber Makmur Batu', 'Jl. Alun-alun Batu', '0812345678', 'sumbermakmu@gmail.com', '1.png', 'Toko Kami Menjual Segala Macam macam oleh-oleh.', 2),
(2, 'Sumber Maju Jaya', 'jl. afi', '908', 'afitoko@gmail.com', '2.jpg', 'tooko', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_ibfk_1` (`login_profile_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `subkategori`
--
ALTER TABLE `subkategori`
  ADD PRIMARY KEY (`subkategori_id`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`usaha_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subkategori`
--
ALTER TABLE `subkategori`
  MODIFY `subkategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `usaha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`login_profile_id`) REFERENCES `profile` (`profile_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;