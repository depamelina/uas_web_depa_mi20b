-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2010 at 06:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_depa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`) VALUES
(1, 'Depa'),
(2, 'Melina');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` varchar(14) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `id_admin`, `nama`, `tempat_lahir`, `jenis_kelamin`) VALUES
('20101231222230', 1, 'Choi Woo Shik', 'Ilsan', '1'),
('20211102053959', 2, 'Lee Jongsuk', 'Seoul', '1'),
('20211102054106', 1, 'Kang Daniel', 'Seoul', '1'),
('20211102084845', 2, 'Lee Dong Hyun', 'Ilsan', '1'),
('20211102154734', 1, 'Kang Daniel', 'China', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_paket`
--

CREATE TABLE `tbl_jenis_paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_paket`
--

INSERT INTO `tbl_jenis_paket` (`id_paket`, `nama_paket`, `harga`) VALUES
(1, 'Bronze', 10000),
(2, 'Silver', 20000),
(3, 'Gold', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontrak_mapel`
--

CREATE TABLE `tbl_kontrak_mapel` (
  `id_mapel` int(11) NOT NULL,
  `id_anggota` varchar(14) NOT NULL,
  `id_jenis_paket` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kontrak_mapel`
--

INSERT INTO `tbl_kontrak_mapel` (`id_mapel`, `id_anggota`, `id_jenis_paket`, `harga`) VALUES
(1, '20211102053959', 2, 20000),
(2, '20211102053959', 2, 20000),
(1, '20211102084845', 2, 20000),
(2, '20211102084845', 2, 20000),
(3, '20211102084845', 2, 20000),
(1, '20211102154734', 6, 4500),
(1, '20211102154734', 6, 4500),
(2, '20211102154734', 6, 4500),
(2, '20211102054106', 1, 10000),
(2, '20211102054106', 1, 10000),
(3, '20211102054106', 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Biologi'),
(2, 'Fisika'),
(3, 'Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_login`, `username`, `password`, `nama_pengguna`, `telepon`, `email`, `alamat`) VALUES
(1, 'depa', '957d2d6c2852ca4d6e867133cb758abd', 'Depa Melina', '089618173609', 'fauzan1892@codekop.com', 'Bekasi'),
(2, 'faiz', '202cb962ac59075b964b07152d234b70', 'M Faiz', '081298669897', 'faiz@gmail.com', 'Bekasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_jenis_paket`
--
ALTER TABLE `tbl_jenis_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jenis_paket`
--
ALTER TABLE `tbl_jenis_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
