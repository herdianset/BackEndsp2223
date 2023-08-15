-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 04:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_jurusan` char(3) NOT NULL,
  `nama_jurusan` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_jurusan`, `nama_jurusan`) VALUES
('J01', 'Sistem Komputer'),
('J02', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mhs` varchar(150) NOT NULL,
  `kode_jurusan` char(3) NOT NULL,
  `gender` int(11) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama_foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_mhs`, `kode_jurusan`, `gender`, `no_hp`, `alamat`, `email`, `nama_foto`) VALUES
(200010101, 'Made Aksara', 'J01', 1, 'Denpasar', '08751515151', 'aksa@gmail.com', 'foto1.jpg'),
(220010101, 'Made Budu', 'J01', 1, '081515151', 'Denpasar', 'budi@gmail.com', ''),
(220010102, 'Made Joni', 'J01', 1, '1312312', 'Denpasar', 'joni@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
