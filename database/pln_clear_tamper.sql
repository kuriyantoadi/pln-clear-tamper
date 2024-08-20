-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2024 at 12:44 AM
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
-- Table structure for table `tb_clear_tamper`
--

CREATE TABLE `tb_clear_tamper` (
  `id_clear_tamper` int(11) NOT NULL,
  `bondg` varchar(50) NOT NULL,
  `tgl_permintaan` varchar(50) NOT NULL,
  `nama_pelapor` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_kwh` varchar(50) NOT NULL,
  `indikasi` varchar(50) NOT NULL,
  `photo_kwh` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `clear_tamper` varchar(50) NOT NULL,
  `status_permintaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clear_tamper`
--

INSERT INTO `tb_clear_tamper` (`id_clear_tamper`, `bondg`, `tgl_permintaan`, `nama_pelapor`, `alamat`, `no_hp`, `no_kwh`, `indikasi`, `photo_kwh`, `id_user`, `clear_tamper`, `status_permintaan`) VALUES
(4, '1122334455', '2024-05-12', 'supri', 'Taman Ciruas Permai', '082398382739', '11223344556', '2', 'photo_kwh_20240612_073013.png', '2', '12345678901234567890', 'terkirim'),
(61, '23045671', '2024-06-23', 'Ramdhani', 'Kp. Mayabon Rt.03 Rw.06 Kelurahan Banjarsari Kecam', '081717198721', '56235059233', 'Kwh Timbul Periksa Akibat Konslet Instalasi', 'photo_kwh_20240623_144941.jpg', '2', '12345678901234567890', 'terkirim'),
(62, '112233445566', '2024-06-23', 'siti', 'mandala wangi', '123456789000', '112233445566', 'listrik rusak', 'photo_kwh_20240623_220936.png', '2', '12345678901234567890', 'terkirim'),
(63, '112233445566', '2024-06-23', 'siti', 'mandala wangi', '123456789000', '112233445566', 'listrik rusak', 'photo_kwh_20240623_221455.png', '18', '', 'proses'),
(65, '230456783', '2024-06-30', 'Nurul', 'Kp. Mayabon Rt.03 Rw.06 Kelurahan Banjarsari Kecam', '081717198721', '140291923453', 'Kwh Timbul Periksa Akibat Konslet Instalasi', 'photo_kwh_20240630_165926.jpg', '19', '', 'proses'),
(66, '11223344', '2024-07-16', 'Blanditiis accusanti', 'hydunib@mailinator.com', '0811111111111', '11223344551', 'Non asperiores aperi', 'photo_kwh_20240716_022835.png', '2', '', 'proses'),
(67, '11223344', '2024-07-18', 'test', 'gusijas@mailinator.com', '0811111111111', '11223344551', 'Non asperiores aperi', 'photo_kwh_20240718_175852.png', '2', '', 'proses'),
(68, '11223344', '2024-07-18', 'test', 'tygepa@mailinator.com', '0811111111111', '11223344556', 'Non asperiores aperi', 'photo_kwh_20240718_180230.png', '2', '', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clear_tamper_regu`
--

CREATE TABLE `tb_clear_tamper_regu` (
  `id_clear_tamper_regu` int(11) NOT NULL,
  `bondg` varchar(50) NOT NULL,
  `tgl_permintaan` varchar(50) NOT NULL,
  `nama_pelapor` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_kwh` varchar(50) NOT NULL,
  `indikasi` varchar(50) NOT NULL,
  `photo_kwh` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nama_petugas_2` varchar(100) NOT NULL,
  `nama_petugas_3` varchar(100) NOT NULL,
  `clear_tamper` varchar(50) NOT NULL,
  `status_permintaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clear_tamper_regu`
--

INSERT INTO `tb_clear_tamper_regu` (`id_clear_tamper_regu`, `bondg`, `tgl_permintaan`, `nama_pelapor`, `alamat`, `no_hp`, `no_kwh`, `indikasi`, `photo_kwh`, `id_user`, `nama_petugas_2`, `nama_petugas_3`, `clear_tamper`, `status_permintaan`) VALUES
(15, '1122334455', '2024-07-21', 'Blanditiis accusanti', 'hydunib@mailinator.com', '0811111111111', '11223344556', 'Non asperiores aperi', 'photo_kwh_20240720_203709.png', '1', 'petugas2', 'petugas', '12345678901234567890', 'terkirim'),
(16, '1122334455', '2024-07-24', 'test pelapor', 'hydunib@mailinator.com', '0811111111111', '11223344556', 'Non asperiores aperi', 'photo_kwh_20240724_111350.png', '2', 'petugas2', 'petugas 2', '', 'proses'),
(17, '1122334455', '2024-07-24', 'Blanditiis accusanti', 'hydunib@mailinator.com', '0811111111111', '11223344556', 'Non asperiores aperi', 'photo_kwh_20240724_112237.png', '9', 'petugas2', 'petugas2', '', 'proses'),
(18, '1122334455', '2024-07-24', 'Blanditiis accusanti', 'hydunib@mailinator.com', '0811111111111', '11223344556', 'Non asperiores aperi', 'photo_kwh_20240724_182042.png', '9', 'petugas2', 'petugas2', '', 'proses');

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
  `status` varchar(50) NOT NULL,
  `id_regu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nik`, `nama_petugas`, `jabatan`, `wilker`, `status`, `id_regu`) VALUES
(1, 'operator', 'fe96dd39756ac41b74283a9292652d366d73931f', 'operator', 'operator', 'operator', 'operator', 'operator', 1),
(6, 'manager', '1a8565a9dc72048ba03b4156be3e569f22771f23', '1', 'manager', 'manager', 'serang', 'manager', 1),
(7, 'asep', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '3627727272991627', 'asep', 'Yandal', 'Mandalawangi', 'petugas', 1),
(8, 'ramdhani', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '3604022811010142', 'ramdhani', 'Yandal', 'Mandalawangi', 'petugas', 1),
(9, 'agus', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '360406189662621', 'agus', 'Yandal', 'Mandalawangi', 'petugas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_regu`
--

CREATE TABLE `tb_user_regu` (
  `id_regu` int(11) NOT NULL,
  `nama_regu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_regu`
--

INSERT INTO `tb_user_regu` (`id_regu`, `nama_regu`) VALUES
(1, 'Mandalawangi 51'),
(2, 'Saketi 51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_clear_tamper`
--
ALTER TABLE `tb_clear_tamper`
  ADD PRIMARY KEY (`id_clear_tamper`);

--
-- Indexes for table `tb_clear_tamper_regu`
--
ALTER TABLE `tb_clear_tamper_regu`
  ADD PRIMARY KEY (`id_clear_tamper_regu`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_regu`
--
ALTER TABLE `tb_user_regu`
  ADD PRIMARY KEY (`id_regu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_clear_tamper`
--
ALTER TABLE `tb_clear_tamper`
  MODIFY `id_clear_tamper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tb_clear_tamper_regu`
--
ALTER TABLE `tb_clear_tamper_regu`
  MODIFY `id_clear_tamper_regu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user_regu`
--
ALTER TABLE `tb_user_regu`
  MODIFY `id_regu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
