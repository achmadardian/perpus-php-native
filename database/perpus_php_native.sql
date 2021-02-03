-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 06:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ardian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(1) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(5) NOT NULL,
  `nama_buku` varchar(30) NOT NULL,
  `pengarang` varchar(25) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES
('A0001', 'Madilog', 'Tan Malaka', 'Gramedia', '1943'),
('A0002', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Gramedia', '1980'),
('A0003', 'Rumah Kertas', 'Carlos', 'Marjin Kiri', '2016'),
('A0004', 'Harry Potter', 'J.K Rowling', 'Gramedia', '2003'),
('A0005', 'Kami Bukan Sarjana Kertas', 'J.S Khairen', 'Bukune', '2019'),
('A0006', 'Mari Belajar Seni Rupa', 'Tri Edy Margono dan Abdul', 'Erlangga', '2006'),
('A0007', 'Ilmu Pengetahuan Alam', 'Wasis Sukarmin', 'Erlangga', '2006'),
('A0008', 'Bahasa dan Sastra Indonesia', 'Sawali Ch Susanto', 'Erlangga', '2004'),
('A0009', 'IPA Terpadu VII', 'Anni Winarsih', 'Erlangga', '2004'),
('A0010', 'Pendidikan Kewarganegaraan', 'Wahyu Nugroho', 'Erlangga', '2004'),
('A0011', 'Bahasa Indonesia', 'Sawali Ch Susanto', 'Erlangga', '2004'),
('A0012', 'Matematika', 'Agung Lukito, Ali Mahmudi', 'Erlangga', '2017'),
('A0013', 'Perahu Kertas', 'Dee Lestary', 'Bentang Pustaka', '2009');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah_pinjam` varchar(2) DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `kembali` varchar(1) DEFAULT NULL,
  `nis` varchar(5) DEFAULT NULL,
  `id_buku` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `tgl_pinjam`, `jumlah_pinjam`, `tgl_kembali`, `kembali`, `nis`, `id_buku`) VALUES
(69, '2020-03-17', '1', '2020-03-18', '2', '41003', 'A0001'),
(70, '2020-03-17', '1', '2020-03-18', '2', '41002', 'A0003'),
(71, '2020-03-17', '1', '2020-03-18', '2', '41001', 'A0003'),
(76, '2020-03-17', '1', '2020-03-18', '2', '41001', 'A0001'),
(81, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0002'),
(82, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0002'),
(83, '2020-03-18', '1', '2020-03-26', '2', '41002', 'A0001'),
(84, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0003'),
(85, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0003'),
(86, '2020-03-18', '1', '2020-03-26', '2', '41002', 'A0002'),
(87, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0002'),
(88, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0002'),
(89, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0002'),
(90, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0002'),
(91, '2020-03-18', '1', '2020-03-26', '2', '41001', 'A0002'),
(92, '2020-03-25', '1', '2020-03-26', '2', '41001', 'A0003'),
(93, '2020-03-25', '1', '2020-03-26', '2', '41003', 'A0002'),
(94, '2020-03-25', '1', '2020-03-25', '2', '41003', 'A0002'),
(95, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0003'),
(96, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0003'),
(97, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0001'),
(98, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0001'),
(99, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0001'),
(100, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0001'),
(101, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0001'),
(102, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0001'),
(103, '2020-03-26', '1', '2020-03-26', '2', '41004', 'A0001'),
(104, '2020-03-26', '1', '2020-03-29', '2', '41004', 'A0001'),
(105, '2020-03-27', NULL, '2020-03-27', '1', '41007', 'A0004'),
(106, '2020-03-27', NULL, '2020-03-27', '2', '41007', 'A0004'),
(107, '2020-03-27', NULL, '2020-03-29', '2', '41008', 'A0005'),
(112, '2020-03-29', NULL, '2020-03-29', '1', '41009', 'A0004'),
(113, '2020-03-29', NULL, '2020-03-29', '2', '41009', 'A0004'),
(114, '2020-03-29', NULL, '2020-03-29', '2', '41009', 'A0002'),
(115, '2020-03-29', NULL, '2020-03-29', '2', '41009', 'A0004'),
(116, '2020-03-29', NULL, '2020-03-29', '2', '41009', 'A0004'),
(117, '2020-03-29', NULL, '2020-03-29', '2', '41013', 'A0006'),
(118, '2020-03-29', NULL, '2020-03-29', '1', '41013', 'A0006'),
(119, '2020-03-29', NULL, '2020-03-29', '1', '41010', 'A0008'),
(120, '2020-03-29', NULL, '2020-03-29', '1', '41012', 'A0010'),
(121, '2020-03-29', NULL, '2020-03-29', '1', '41015', 'A0010'),
(122, '2020-03-29', NULL, '2020-03-29', '1', '41013', 'A0007'),
(123, '2020-03-29', NULL, '2020-03-30', '2', '41009', 'A0005'),
(124, '2020-03-30', NULL, '2020-03-30', '2', '41009', 'A0005'),
(125, '2020-03-30', NULL, '2020-03-30', '2', '41009', 'A0005'),
(126, '2020-03-30', NULL, '2020-03-30', '2', '41009', 'A0005'),
(127, '2020-03-30', NULL, '2020-03-30', '2', '41013', 'A0007'),
(128, '2020-03-30', NULL, '2020-03-30', '1', '41010', 'A0009'),
(129, '2020-03-30', NULL, '2020-03-30', '2', '41010', 'A0009'),
(130, '2020-03-30', NULL, '2020-03-30', '2', '41010', 'A0009'),
(131, '2020-04-01', NULL, '2020-04-01', '1', '41020', 'A0012'),
(132, '2020-04-02', NULL, '2020-04-02', '1', '41017', 'A0007'),
(134, '2020-04-05', NULL, '2020-04-05', '2', '41021', 'A0013');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(5) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `kelas`) VALUES
('12', 'qwqw', 'X-A'),
('41001', 'Ardian', 'XI-A'),
('41002', 'Achmad', 'X-A'),
('41003', 'Lestiowo', 'X-A'),
('41004', 'Fauzi', 'X-B'),
('41005', 'Riambodho', 'X-A'),
('41006', 'Angga', 'X-A'),
('41007', 'Fahni Dian Pratama', 'XII-B'),
('41008', 'Mohammad Ibrahim', 'X-A'),
('41009', 'Arya Wiyoga Bismaka', 'X-A'),
('41010', 'Immanuel Januver', 'XI-C'),
('41011', 'Faisal Imam', 'XI-C'),
('41012', 'Arif Yudi', 'X-B'),
('41013', 'Bagus Sunan', 'XI-C'),
('41014', 'Novianto Puji', 'X-C'),
('41015', 'Dicky Prasetya', 'XI-A'),
('41016', 'Kevin Aprilio', 'X-A'),
('41017', 'Jonathan Anderson', 'X-A'),
('41018', 'Adam Malik', 'X-A'),
('41019', 'Ikhwan Dewa', 'X-A'),
('41020', 'Dhandi Ibnu', 'X-A'),
('41021', 'Achmad Ardian Lestiowo', 'XII-C'),
('41022', 'Muhammad Fulan', 'XII-A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `id_buku` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `nis` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
