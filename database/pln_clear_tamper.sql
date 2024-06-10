-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 10 Jun 2024 pada 21.05
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `tb_clear_temper`
--

CREATE TABLE `tb_clear_temper` (
  `id_clear_temper` int(11) NOT NULL,
  `bondg` varchar(50) NOT NULL,
  `tgl_permintaan` varchar(50) NOT NULL,
  `nama_pelapor` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_kwh` varchar(50) NOT NULL,
  `indikasi` varchar(50) NOT NULL,
  `photo_kwh` varchar(50) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `clear_temper` varchar(50) NOT NULL,
  `status_permintaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_clear_temper`
--

INSERT INTO `tb_clear_temper` (`id_clear_temper`, `bondg`, `tgl_permintaan`, `nama_pelapor`, `alamat`, `no_hp`, `no_kwh`, `indikasi`, `photo_kwh`, `id_user`, `clear_temper`, `status_permintaan`) VALUES
(1, '1', '2024-06-12', '1', '1', '1', '1', '1', 'photo_kwh_20240610_141856.png', '1', '1', 'terkirim'),
(2, '2', '2024-06-12', '2', '2', '2', '1', '2', 'photo_kwh_20240610_141912.png', '2', '1', 'terkirim'),
(3, '1', '2024-06-11', '1', '1', '1', '1', '1', 'photo_kwh_20240610_144542.png', '2', '1', 'terkirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nik`, `nama_petugas`, `jabatan`, `wilker`, `status`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1', 'bambang', 'admin', '1', 'admin'),
(2, 'Yanto', '356a192b7913b04c54574d18c28d46e6395428ab', '1', 'yanto', 'petugas', '1', 'petugas'),
(3, 'chaeunwoo', '356a192b7913b04c54574d18c28d46e6395428ab', '19271', 'eun woo', 'manager', '1', 'manager'),
(4, 'supri', '356a192b7913b04c54574d18c28d46e6395428ab', '1', 'Supri', 'petugas', '1', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_clear_temper`
--
ALTER TABLE `tb_clear_temper`
  ADD PRIMARY KEY (`id_clear_temper`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_clear_temper`
--
ALTER TABLE `tb_clear_temper`
  MODIFY `id_clear_temper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
