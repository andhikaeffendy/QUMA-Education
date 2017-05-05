-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2017 at 06:36 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laporan`
--

-- --------------------------------------------------------

--
-- Table structure for table `pernyataan`
--

CREATE TABLE IF NOT EXISTS `pernyataan` (
  `id` int(10) NOT NULL,
  `no_ktp` varchar(10) NOT NULL,
  `umur` int(3) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jalan` varchar(20) NOT NULL,
  `rt` varchar(2) NOT NULL,
  `rw` varchar(2) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `kotamadya` varchar(20) NOT NULL,
  `spptpbb` varchar(10) NOT NULL,
  `utara` varchar(10) NOT NULL,
  `timur` varchar(10) NOT NULL,
  `selatan` varchar(10) NOT NULL,
  `barat` varchar(10) NOT NULL,
  `nama_saksi1` varchar(20) NOT NULL,
  `umur_saksi1` int(3) NOT NULL,
  `pekerjaan_saksi1` varchar(10) NOT NULL,
  `alamat_saksi1` varchar(50) NOT NULL,
  `nama_saksi2` varchar(20) NOT NULL,
  `umur_saksi2` int(3) NOT NULL,
  `pekerjaan_saksi2` varchar(10) NOT NULL,
  `alamat_saksi2` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pernyataan`
--

INSERT INTO `pernyataan` (`id`, `no_ktp`, `umur`, `pekerjaan`, `nama`, `alamat`, `jalan`, `rt`, `rw`, `desa`, `kelurahan`, `kabupaten`, `kotamadya`, `spptpbb`, `utara`, `timur`, `selatan`, `barat`, `nama_saksi1`, `umur_saksi1`, `pekerjaan_saksi1`, `alamat_saksi1`, `nama_saksi2`, `umur_saksi2`, `pekerjaan_saksi2`, `alamat_saksi2`) VALUES
(1, '1001', 20, 'Wiraswasta', 'Ahmad Saepuloh', 'Banjaran', 'Pajagalan', '01', '12', 'Banjaran', 'Kel. Banjaran', 'Bandung', '', '80201024', '21', '24', '25', '32', 'Iman Ruhiyat', 22, 'Pegawai', 'Ciapus', 'Deden', 26, 'Pegawai', 'Cipaku'),
(2, '1002', 26, 'Guru', 'Otang Surotang', 'Cigembreng', 'Pesona', '01', '12', 'Waas', 'Waas', 'Bandung', '', '1529172', '25', '66', '32', '63', 'Isna', 25, 'Pegawai', 'Banjaran', 'Ibnu', 42, 'Pegawai', 'Banjaran');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(30) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `no_telepon`, `level`) VALUES
(0, 'rifal', '133ce0c1d8fafa145b9fd1cf7ce9a39d1ee3bc51', 'tes123@yahoo.com', '085798160154', 'user'),
(9, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'jenovasystem@ymail.com', '081320118244', 'admin'),
(15, 'rani', '70e0294c86cf544230a9e9ba8d474d01a5a1e2a4', 'rani123@yahoo.com', '087665473837', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pernyataan`
--
ALTER TABLE `pernyataan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pernyataan`
--
ALTER TABLE `pernyataan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
