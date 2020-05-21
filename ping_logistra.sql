-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2020 at 11:40 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ping_logistra`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'produksi'),
(2, 'logistik'),
(3, 'marketing'),
(4, 'keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `gaji_karyawan`
--

CREATE TABLE `gaji_karyawan` (
  `id_gaji` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji_karyawan`
--

INSERT INTO `gaji_karyawan` (`id_gaji`, `salary`, `id_karyawan`) VALUES
(11, 6000000, 24),
(12, 7800000, 25),
(13, 7000000, 26);

-- --------------------------------------------------------

--
-- Table structure for table `Jenis_kelamin_cat`
--

CREATE TABLE `Jenis_kelamin_cat` (
  `id_jk` int(11) NOT NULL,
  `jk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Jenis_kelamin_cat`
--

INSERT INTO `Jenis_kelamin_cat` (`id_jk`, `jk`) VALUES
(1, 'laki-laki'),
(2, 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jk` int(11) NOT NULL,
  `ttl` date NOT NULL,
  `nik` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `pendidikan` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `departemen_id` int(11) NOT NULL,
  `penilaian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `alamat`, `jk`, `ttl`, `nik`, `status`, `pendidikan`, `no_hp`, `departemen_id`, `penilaian`) VALUES
(24, 'Eza Zakiah', 'menes', 2, '2020-05-05', 11, 1, 1, 2147483647, 2, 1),
(25, 'Eza ', 'fdsdgdg', 2, '2020-05-06', 11, 2, 2, 2147483647, 3, 1),
(26, 'ANdi', 'jdajdpjsad', 1, '2020-05-19', 1, 1, 2, 2147483647, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan_cat`
--

CREATE TABLE `pendidikan_cat` (
  `id_pendidikan_cat` int(11) NOT NULL,
  `nama_pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendidikan_cat`
--

INSERT INTO `pendidikan_cat` (`id_pendidikan_cat`, `nama_pendidikan`) VALUES
(1, 'sma'),
(2, 's1'),
(3, 's2');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_karyawan`
--

CREATE TABLE `penilaian_karyawan` (
  `id_penilaian_karyawan` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian_karyawan`
--

INSERT INTO `penilaian_karyawan` (`id_penilaian_karyawan`, `nilai`, `id_karyawan`) VALUES
(19, 80, 24),
(20, 50, 25),
(21, 100, 26);

-- --------------------------------------------------------

--
-- Table structure for table `status_cat`
--

CREATE TABLE `status_cat` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_cat`
--

INSERT INTO `status_cat` (`id_status`, `nama_status`) VALUES
(1, 'belum menikah'),
(2, 'menikah'),
(3, 'duda'),
(4, 'janda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `Jenis_kelamin_cat`
--
ALTER TABLE `Jenis_kelamin_cat`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pendidikan_cat`
--
ALTER TABLE `pendidikan_cat`
  ADD PRIMARY KEY (`id_pendidikan_cat`);

--
-- Indexes for table `penilaian_karyawan`
--
ALTER TABLE `penilaian_karyawan`
  ADD PRIMARY KEY (`id_penilaian_karyawan`);

--
-- Indexes for table `status_cat`
--
ALTER TABLE `status_cat`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Jenis_kelamin_cat`
--
ALTER TABLE `Jenis_kelamin_cat`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pendidikan_cat`
--
ALTER TABLE `pendidikan_cat`
  MODIFY `id_pendidikan_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penilaian_karyawan`
--
ALTER TABLE `penilaian_karyawan`
  MODIFY `id_penilaian_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `status_cat`
--
ALTER TABLE `status_cat`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
