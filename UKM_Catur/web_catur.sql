-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 01:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_catur`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` int(13) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `judul`, `isi`) VALUES
(1, 'Gens Una Sumus Kita Satu Keluarga', 'Unit Kegiatan Mahasiswa (UKM) Catur Universitas Lampung, yang berdiri pada 12 Mei 2021, adalah wadah bagi mahasiswa yang berminat dalam olahraga catur. UKM ini bertujuan mengembangkan keterampilan bermain, berpikir strategis, dan melatih sportivitas. Berbagai kegiatan seperti pelatihan, turnamen, dan seminar rutin diadakan untuk meningkatkan kemampuan anggota. Selain itu, UKM aktif mengikuti kompetisi regional dan nasional, meraih prestasi yang mengharumkan nama Universitas Lampung. Kerja sama dengan komunitas catur luar kampus juga dilakukan untuk memperluas pengalaman. UKM ini terbuka bagi semua mahasiswa, baik pemula maupun yang berpengalaman. Dukungan universitas menjadi kunci keberhasilan dalam menjalankan program-programnya. Dengan semangat kebersamaan, UKM Catur Unila berkomitmen mencetak generasi pemain catur yang inspiratif.');

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` int(32) NOT NULL,
  `nama_lomba` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_lomba` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `nama_lomba`, `keterangan`, `tanggal_lomba`, `gambar`) VALUES
(1, 'Catur Esport', 'asdasd asldjdsa sadjllsdakj asldjsalkjds laskjlasd alsjlasdlas asldjalsk lkajsdkl ljaslkjdas alsdklasjas lasjjdlksaj', '2024-12-25', 'img/E-Sport.png');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id_postingan` int(12) NOT NULL,
  `Judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `penulis` int(3) NOT NULL,
  `tangal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `Judul`, `isi`, `gambar`, `penulis`, `tangal`) VALUES
(1, 'CATUR PARA GAMES', 'Lorem ipsum odor amet, consectetuer adipiscing elit. Augue nibh a litora mi sociosqu consectetur nullam mi. ', 'img/Catur_paragames.png', 1, '2024-12-11'),
(3, 'ads', 'asd', 'asdasd', 1, '2024-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `jabatan`, `masa_berlaku`, `nama`, `password`) VALUES
(1, 'ketua', '2024-12-31', 'aidil', 'aidil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id_postingan`),
  ADD KEY `penulis` (`penulis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_postingan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`penulis`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
