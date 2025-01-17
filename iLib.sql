-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2020 at 03:38 PM
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
(1, 8, 'Data Structure and Program Design in C', '1608702326_strukdat.jpg', 30, NULL, NULL, 'Pemrograman', 'Pearson', 1984),
(2, 7, 'Shopping with Dad', '1608720534_Shopping_with_Dad.jpg', 8, NULL, NULL, 'Children', 'Barefoot Books', 2010),
(3, 1, 'Teen Titans Go!', '1608723337_TeenTitansGo!.jpg', 30, NULL, NULL, 'Children', 'DC Comics', 2004),
(4, 1, 'The Very Hungry Caterpillar', '1608723430_TheVeryHungryCaterpillar.jpg', 12, NULL, NULL, 'Children', 'World Publishing Company', 1969),
(5, 3, 'The Lion, the Witch and the Wardrobe', '1608723509_The_Lion.jpg', 43, NULL, NULL, 'Children', 'C. S. Lewis', 1950),
(6, 20, 'Alices Adventures in Wonderland', '1608723712_Alices.jpg', 3, NULL, NULL, 'Children', 'Macmilian Publishers', 2016),
(7, 8, 'Think and Grow Rich', '1608727357_ThinkandGrowRich.jpg', 35, NULL, NULL, 'Business', 'The Ralston Society', 1937),
(8, 1, 'The 7 Habits of Highly Effective People', '1608727562_The7Habits.jpg', 20, NULL, NULL, 'Business', 'Free Press', 1989),
(9, 3, 'Thinking, Fast and Slow', '1608727767_ThinkingFastandSlow.jpg', 33, NULL, NULL, 'Business', 'Farrar, Straus, and Giroux', 2011),
(10, 18, 'The Lean Startup', '1608728026_TheLeanStartup.jpg', 9, NULL, NULL, 'Business', 'Eric Ries', 2011),
(11, 20, 'Deep Work', '1608728093_DeepWork.jpg', 37, NULL, NULL, 'Business', 'Grand Central Publishing', 2016),
(12, 5, 'Foundations of Bilingual Education and Bilingualism', '1608728724_Foundation.jpg', 31, NULL, NULL, 'Education', 'Colin Baker', 2009),
(13, 16, 'Physical Education: Essential Issues', '1608728845_Physical.jpg', 21, NULL, NULL, 'Education', 'a SAGE Publications Comp.', 2005),
(14, 15, 'WANGSIT (PAWANG SOAL SULIT) HOTS UTBK SBMPTN SAINTEK 2021', '1608728916_Wangsit.jpg', 8, NULL, NULL, 'Education', 'TIM TENTOR MASTER', 2009),
(15, 12, 'Buku Pintar Matematika SMP Untuk Kelas 1, 2 dan 3', '1608729303_BukuPintarMTK.jpg', 25, NULL, NULL, 'Education', 'Wahyu medfo', 2015),
(16, 1, 'Matematika SMP Kelas 8', '1608729492_Mtksmp-compressed.jpg', 23, NULL, NULL, 'Education', 'Gramedia', 2016),
(17, 5, 'Technology and Values: Essential Readings', '1608729842_TechnologyandValues.jpg', 15, NULL, NULL, 'Technology', 'Willey Blackwell', 2004),
(18, 14, 'Super Food Technology', '1608729914_SuperFood.jpg', 43, NULL, NULL, 'Technology', 'Marlen Sunyoto', 2010),
(19, 8, 'Artificial Intelligence for Humans', '1608730023_AIforHumans.jpg', 31, NULL, NULL, 'Technology', 'Jon Gabriel', 2007),
(20, 9, 'Agile Machine Learning', '1608730065_AgileML.jpg', 12, NULL, NULL, 'Technology', 'Apress', 2011),
(21, 1, 'The Essential PIC18 Microcontroller', '1608730226_PIC18.jpg', 41, NULL, NULL, 'Technology', 'Springer', 2009);

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detail` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`id_detail`, `id_pinjam`, `id_buku`) VALUES
(1, 1, 1),
(2, 1, 7),
(3, 1, 5);

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
(2, 2, 'pustakawan123', 'e10adc3949ba59abbe56e057f20f883e', 'pustakawan123', '-', 'pustakawan@iLib.com', '081234567890', 'Sistem Informasi', 'Sidoarjo', NULL),
(3, 1, 'mhilmi999', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Hilmi Ramadhan', '05311940000044', 'mhilmi999@gmail.com', '081230480221', 'Teknologi Informasi', 'Bekasi', '1608775775_hilmi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `set_kembali` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `denda` decimal(10,0) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_member`, `tgl_pinjam`, `set_kembali`, `tgl_kembali`, `denda`, `status`) VALUES
(1, 1, NULL, NULL, NULL, NULL, 0);

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
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_pinjam` (`id_pinjam`);

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
  ADD KEY `id_member` (`id_member`);

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
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id_author`);

--
-- Constraints for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD CONSTRAINT `id_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `id_pinjam` FOREIGN KEY (`id_pinjam`) REFERENCES `peminjaman` (`id_pinjam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
