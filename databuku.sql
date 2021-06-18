-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2021 at 12:17 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_pusyuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `databuku`
--

CREATE TABLE `databuku` (
  `id` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databuku`
--

INSERT INTO `databuku` (`id`, `judul`, `kategori`, `jumlah`) VALUES
(1, 'Bumi Manusia', 'Novel sastra', 3),
(2, 'Laskar Pelangi', 'Novel sastra', 3),
(3, 'Negeri 5 Menara', 'Novel sastra', 2),
(4, 'Dilan 1990', 'Novel Romantis', 2),
(5, 'Harry Potter', 'Novel Fiksi', 2),
(6, 'Barack Obama', 'Biografi', 1),
(7, 'Elon Musk', 'Biografi', 1),
(8, 'Si Kancil', 'Fabel', 3),
(9, 'Aladin dan Si Jin', 'Fiksi', 2),
(10, 'Princess', 'Fiksi', 3),
(11, 'Semut Yang Cerdik', 'Fabel', 2),
(12, 'Amazon Unbound', 'Bisnis', 1),
(13, 'Think and Grow Rich', 'Bisnis', 1),
(14, 'Sherlock Holmes', 'Fantasi', 2),
(15, 'One Piece', 'Fiksi', 3),
(16, 'Danur', 'Horor', 2),
(17, 'Rumah Angker', 'Horor', 2),
(18, 'Detektif Cilik', 'Misteri', 2),
(19, 'Matt & Mou', 'Novel Romantis', 3),
(20, 'Senja, Hujan, Cerita', 'Novel Romantis', 2),
(21, 'How Music Works', 'Musik', 1),
(22, 'Belajar Kunci Gitar', 'Musik', 1),
(23, 'Sebuah Seni Untuk Bersikap Bodo Amat', 'Psikologi', 2),
(24, 'Mindset', 'Psikologi', 1),
(25, 'The Grand Design', 'Sains', 2),
(26, 'Indahnya Indonesia', 'Sains', 2),
(27, 'Atlas', 'Sains', 3),
(28, 'Heart and Soul', 'Travel', 2),
(29, 'The Road Trip', 'Travel', 2),
(30, 'Winter', 'Novel Romantis', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databuku`
--
ALTER TABLE `databuku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databuku`
--
ALTER TABLE `databuku`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
