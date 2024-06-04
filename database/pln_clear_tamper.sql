-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2024 at 06:46 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pln_clear_tamper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_clear_temper`
--

CREATE TABLE `tb_clear_temper` (
  `id_clear_temper` int(11) NOT NULL,
  `bondg` varchar(50) NOT NULL,
  `tgl_permintaan` varchar(50) NOT NULL,
  `nama_pelapor` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_pelanggan` varchar(50) NOT NULL,
  `no_meter` varchar(50) NOT NULL,
  `indikasi` varchar(50) NOT NULL,
  `photo_kwh` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `kode_temper` varchar(50) NOT NULL,
  `status_permintaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clear_temper`
--

INSERT INTO `tb_clear_temper` (`id_clear_temper`, `bondg`, `tgl_permintaan`, `nama_pelapor`, `alamat`, `no_hp`, `id_pelanggan`, `no_meter`, `indikasi`, `photo_kwh`, `id_user`, `kode_temper`, `status_permintaan`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `wilker` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nik`, `nama_petugas`, `jabatan`, `wilker`, `status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'admin', 'admin', 'admin', 'admin'),
(2, 'petugas2', '356a192b7913b04c54574d18c28d46e6395428ab', '123', 'petugas2', 'petugas', 'serang', 'petugas'),
(3, '1', '356a192b7913b04c54574d18c28d46e6395428ab', '1', '1', '1', '1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_clear_temper`
--
ALTER TABLE `tb_clear_temper`
  ADD PRIMARY KEY (`id_clear_temper`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_clear_temper`
--
ALTER TABLE `tb_clear_temper`
  MODIFY `id_clear_temper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
