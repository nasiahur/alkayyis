-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 09:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alkayyis`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `email`) VALUES
('hikmahaj', 'hikmahaj', 'hikmahaj@gmail.com'),
('latifahrme', 'latifahrme', 'latifahrme@gmail.com'),
('nasalsabila', 'nasalsabila', 'nasalsabila@gmail.com'),
('nasiahur', 'nasiahur', 'nasiahur@gmail.com'),
('sikdewa', 'sikdewa', 'sikdewa@gmail.com'),
('umiyati', 'umiyati', 'umiyati@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `benarsalah`
--

CREATE TABLE `benarsalah` (
  `idkuisbs` int(11) NOT NULL,
  `idcerita` int(11) NOT NULL,
  `namafile` varchar(50) NOT NULL,
  `pertanyaan` varchar(30) NOT NULL,
  `jawaban` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benarsalah`
--

INSERT INTO `benarsalah` (`idkuisbs`, `idcerita`, `namafile`, `pertanyaan`, `jawaban`) VALUES
(1, 1, '0.png', '-1.PNG', 'Benar'),
(2, 2, '1.png', '-1.PNG', 'Salah');

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `idcerita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggalunggah` date NOT NULL,
  `filethumbnail` varchar(50) NOT NULL,
  `namadokumen` varchar(50) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`idcerita`, `judul`, `tanggalunggah`, `filethumbnail`, `namadokumen`, `views`, `likes`) VALUES
(1, 'A', '2017-07-02', 'p1.PNG', '0.PNG', 10, 3),
(2, 'B', '2017-07-02', 'p2.PNG', '1.png', 4, 3),
(3, 'C', '2017-07-04', 'p3.PNG', '2.png', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `idkarya` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `kreator` varchar(50) NOT NULL,
  `deskripsikarya` text NOT NULL,
  `judulkarya` varchar(100) NOT NULL,
  `tanggalunggah` date NOT NULL,
  `namadokumen` varchar(50) NOT NULL,
  `privacyterms` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`idkarya`, `idpengguna`, `kreator`, `deskripsikarya`, `judulkarya`, `tanggalunggah`, `namadokumen`, `privacyterms`) VALUES
(1, 1, 'Kalila, 2 tahun', 'Ini karyaku yang pertama loh!', 'Ciptaan Allah', '2017-07-02', '1.png', 1),
(2, 2, 'Isyana, 10 tahun', 'Rumahku seperti ini. Aku senang sekali.', 'Rumahku Surgaku', '2017-07-18', '2.jpg', 1),
(3, 3, 'Asha, 8 tahun', 'Apa aja boleh', 'Apa aja boleh', '2017-07-10', '3.jpg', 1),
(4, 2, 'Lala, 10 tahun', 'Hm', 'Hm', '2017-07-09', '4.jpg', 1),
(5, 4, 'Haha, 6 tahun', 'HmHahaha', 'Hahaha', '2017-07-09', '5.jpg', 0),
(6, 5, 'Tara, 11 tahun', 'Taraaaaa~', 'Taraaa~', '2017-07-09', '6.jpg', 1),
(7, 1, 'Saha, 4 tahun', 'saha eta', 'saha eta', '2017-07-10', '7.jpg', 1),
(8, 3, 'Param, 1 tahun', 'Hiyuh', 'hiyuh', '2017-07-02', '8.jpg', 1),
(9, 2, 'Two, 2 tahun', 'duaaa sarimi isi dua', 'Dua', '2017-07-02', '9.jpg', 1),
(10, 3, 'Kaka, 11 tahun', 'Ini kakakku', 'Ini kakakku', '2017-07-11', '9.jpg', 1),
(11, 5, 'Lula,7 tahun', 'Lula kamal kali ah', 'Apa lu?', '2017-07-02', '10.jpg', 1),
(12, 1, 'One, 1 tahun', 'Satu satu aku sayang ibu', 'Satukanlahrasacintawooo', '2017-07-16', '11.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `nama`, `ttl`) VALUES
(1, 'Nikmatun Aliyah Salsabila', '1995-02-23'),
(2, 'Nur Asiah', '1996-02-24'),
(3, 'Hikmah Al Jannah', '1996-06-21'),
(4, 'Latifah Ramadhana M E', '1996-02-07'),
(5, 'Sitti Fatimah Sikdewa', '1996-05-11'),
(6, 'Umiyati', '1996-08-06');

-- --------------------------------------------------------

--
-- Table structure for table `pengikutkuis`
--

CREATE TABLE `pengikutkuis` (
  `idpengikutkuis` int(11) NOT NULL,
  `idkuis` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jawabanpengguna` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengikutkuis`
--

INSERT INTO `pengikutkuis` (`idpengikutkuis`, `idkuis`, `idpengguna`, `status`, `jawabanpengguna`) VALUES
(1, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `permainan`
--

CREATE TABLE `permainan` (
  `idgambargames` int(11) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `namafile` varchar(50) NOT NULL,
  `tanggalunggah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tebakan`
--

CREATE TABLE `tebakan` (
  `idkuistebakan` int(11) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `namafile1` varchar(50) NOT NULL,
  `namafile2` varchar(50) NOT NULL,
  `namafile3` varchar(50) NOT NULL,
  `namafile4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tebakan`
--

INSERT INTO `tebakan` (`idkuistebakan`, `pertanyaan`, `jawaban`, `level`, `namafile1`, `namafile2`, `namafile3`, `namafile4`) VALUES
(1, 'Bagaimana wajah kita saat bertemu teman?', '2.png', 1, '1.png', '2.png', '3.png', '4.png'),
(2, 'Bagaimana wajah kita terhadap guru?', '1.png', 2, '1.png', '2.png', '3.png', '4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `benarsalah`
--
ALTER TABLE `benarsalah`
  ADD PRIMARY KEY (`idkuisbs`);

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`idcerita`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`idkarya`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `pengikutkuis`
--
ALTER TABLE `pengikutkuis`
  ADD PRIMARY KEY (`idpengikutkuis`);

--
-- Indexes for table `permainan`
--
ALTER TABLE `permainan`
  ADD PRIMARY KEY (`idgambargames`);

--
-- Indexes for table `tebakan`
--
ALTER TABLE `tebakan`
  ADD PRIMARY KEY (`idkuistebakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benarsalah`
--
ALTER TABLE `benarsalah`
  MODIFY `idkuisbs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `idcerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `idkarya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pengikutkuis`
--
ALTER TABLE `pengikutkuis`
  MODIFY `idpengikutkuis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permainan`
--
ALTER TABLE `permainan`
  MODIFY `idgambargames` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tebakan`
--
ALTER TABLE `tebakan`
  MODIFY `idkuistebakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
