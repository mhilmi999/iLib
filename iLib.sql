-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 23, 2020 at 07:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iLib`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id_author` int(11) NOT NULL,
  `nama_author` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id_author`, `nama_author`) VALUES
(1, 'Archibald Gislason'),
(2, 'Mr. Saul Muller DDS'),
(3, 'Virgie Paucek I'),
(4, 'Anastacio Cremin'),
(5, 'Cody Eichmann'),
(6, 'Stanford Hirthe'),
(7, 'Efrain Ullrich'),
(8, 'Dr. Carmel Bergstrom IV'),
(9, 'Prof. Rosendo Price I'),
(10, 'Demarco Carroll'),
(11, 'Chadrick Howell'),
(12, 'Prof. Jerry Labadie'),
(13, 'Mr. Columbus Wisoky'),
(14, 'Jody Hodkiewicz'),
(15, 'Carmen Bechtelar II'),
(16, 'Alfreda Kilback'),
(17, 'Prof. Vallie Fay PhD'),
(18, 'Caroline Mills'),
(19, 'Jules Ullrich'),
(20, 'Nadia Greenholt');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_author` int(11) NOT NULL,
  `nama_buku` varchar(100) DEFAULT NULL,
  `cover_book` varchar(200) DEFAULT NULL,
  `amountTotal` int(11) DEFAULT NULL,
  `amountOut` int(11) DEFAULT NULL,
  `amountRemaining` int(11) DEFAULT NULL,
  `klasifikasi` varchar(100) DEFAULT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_author`, `nama_buku`, `cover_book`, `amountTotal`, `amountOut`, `amountRemaining`, `klasifikasi`, `penerbit`, `tahun`) VALUES
(1, 8, 'Data Structure and Program Design in C', '1608702326_coverC++.jpg', 30, NULL, NULL, 'Pemrograman', 'Pearson', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `role` int(5) DEFAULT 1,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(300) NOT NULL,
  `nrp` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `photo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `role`, `username`, `password`, `nama`, `nrp`, `email`, `no_hp`, `departemen`, `alamat`, `photo`) VALUES
(1, 1, 'test123', 'e10adc3949ba59abbe56e057f20f883e', 'test123', '05311940000000', 'tes@gmail.com', '081230480221', 'teknologi informasi', 'jakarta', '1608634949_rahmad_Gumilar.jpg'),
(2, 2, 'pustakawan123', 'e10adc3949ba59abbe56e057f20f883e', 'pustakawan123', '-', 'pustakawan@iLib.com', '081234567890', 'Sistem Informasi', 'Sidoarjo', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_pustakawan` int(11) NOT NULL,
  `tgl_pinjam` date DEFAULT current_timestamp(),
  `set_kembali` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_member`, `id_buku`, `id_pustakawan`, `tgl_pinjam`, `set_kembali`, `tgl_kembali`) VALUES
(1, 41, 1, 1, '2020-04-27', '2021-03-25', NULL),
(2, 42, 2, 2, '2019-05-11', '2022-06-05', NULL),
(3, 43, 3, 3, '2019-06-10', '2021-02-14', NULL),
(4, 44, 4, 4, '2020-03-06', '2022-10-04', NULL),
(5, 45, 5, 5, '2020-06-10', '2022-03-05', NULL),
(6, 46, 6, 6, '2020-05-02', '2022-09-29', NULL),
(7, 47, 7, 7, '2019-04-29', '2021-09-06', NULL),
(8, 48, 8, 8, '2018-12-26', '2021-01-16', NULL),
(9, 49, 9, 9, '2020-06-27', '2021-09-13', NULL),
(10, 50, 10, 10, '2020-05-05', '2022-10-02', NULL),
(11, 51, 11, 11, '2019-05-05', '2020-12-06', NULL),
(12, 52, 12, 12, '2019-08-03', '2021-03-16', NULL),
(13, 53, 13, 13, '2020-06-30', '2021-03-27', NULL),
(14, 54, 14, 14, '2018-12-02', '2022-02-18', NULL),
(15, 55, 15, 15, '2019-03-16', '2022-01-23', NULL),
(16, 56, 16, 16, '2019-03-13', '2021-04-06', NULL),
(17, 57, 17, 17, '2019-05-22', '2021-08-04', NULL),
(18, 58, 18, 18, '2020-04-04', '2021-11-17', NULL),
(19, 59, 19, 19, '2019-10-10', '2021-12-14', NULL),
(20, 60, 20, 20, '2020-09-15', '2020-12-18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_author` (`id_author`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_pustakawan` (`id_pustakawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id_author`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_pustakawan`) REFERENCES `perpusFp`.`pustakawan` (`id_pustakawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
