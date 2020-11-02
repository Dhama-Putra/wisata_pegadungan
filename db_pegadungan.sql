-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Nov 2020 pada 15.41
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegadungan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `email`, `username`, `password`, `jabatan`, `foto`) VALUES
(1, 'dhama', 'dhmptr@gmail.com', 'dhm', '222', 'admin', 'dhama putra.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(100) DEFAULT NULL,
  `id_wisata` int(100) NOT NULL,
  `nama_pengunjung` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telpon` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tgl_berkunjung` date NOT NULL,
  `berkunjung` varchar(20) NOT NULL,
  `total_transaksi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(20) NOT NULL,
  `nama_wisata` varchar(25) NOT NULL,
  `informasi_wisata` varchar(500) NOT NULL,
  `harga_tiket` int(20) NOT NULL,
  `tgl_informasi` date NOT NULL,
  `jam_buka` time(6) NOT NULL,
  `jam_tutup` time(6) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `informasi_wisata`, `harga_tiket`, `tgl_informasi`, `jam_buka`, `jam_tutup`, `foto`) VALUES
(1, 'Air Terjun Tirta Buana', 'Air terjun Tirta Buana atau disebut dengan nama Air Terjun Tibuan berlokasi di tempekan Panti Banjar Dinas Batudingding Desa Pegadungan, Sukasada, dengan menempuh tracking sejauh 300 meter dari lokasi parkir. Air Terjun Tibuan menawarkan pemandangan yang indah dengan air yang jernih.Potensi air terjun yang ada di Kecamatan Sukasada hendaknya di garap dan dikembangkan dengan karakter yang berbeda sehingga destinasi ini memiliki karakter.', 15000, '2020-11-01', '07:00:00.000000', '17:00:00.000000', 'tirta buana.JPG'),
(2, 'Tibuan Kembar', 'Tibuan Kembar terletak di desa Pegadungan, pada tibuan kembar disejukan dengan pemandangan yang indah dan airnya yang begitu sejuk. ', 10000, '2020-11-01', '07:00:00.000000', '17:00:00.000000', 'tibuan kembar.JPG'),
(3, 'View Sawah', 'View Sawah terletak di desa pegadungan dusun sudemiu, pemandangan sawah disini sangat menyejukan mata dan biasa digunakan sebagai spot foto wedding.', 10000, '2020-11-01', '07:00:00.000000', '19:00:00.000000', 'sawah.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
