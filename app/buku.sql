-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 08:41 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `jum_halaman` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `jum_halaman`, `gambar`) VALUES
(1, 'Metodologi Ilmu Pemerintah', 'Taliziduhu Ndraha', 'Rineka Cipta', 199, 'metodologi ilmu pemerintahan.jpg'),
(2, 'Ragam Metode Mengajarkan Eksakta Pada Murid', 'Mastur faizi', 'Diva Press', 201, 'ragam-metode -mengajarkan-eksakta.jpg'),
(3, 'Sosiologi Pendidikan Islam', 'Abuddin Nata', 'Raja Grafrafindo Persada', 250, 'Buku_Sosiologi_Pendidikan_Islam__pengarang_Prof_Dr_H_Abuddin_Nata_MA.jpg'),
(4, 'Kumpulan Aplikasi PHP Untuk Pemula', 'Jubilee Enterprise', 'Elex Media Komputindo', 160, 'aplikasi-php-untuk-pemula.jpg'),
(5, 'Pemrograman Java Untuk Programmer', 'Rh SiaNipar', 'Andi Publiser', 286, 'Pemrograman_Java_Untuk_Programmer.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
