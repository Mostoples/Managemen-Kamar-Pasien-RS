-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 05:06 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `user` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `timestamp`, `user`) VALUES
(1, '2021-02-10 16:02:01', 'rsadmin_fatahdemak');

-- --------------------------------------------------------

--
-- Table structure for table `ruangperawatan`
--

CREATE TABLE `ruangperawatan` (
  `id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `lama` int(3) NOT NULL,
  `baru` int(3) NOT NULL,
  `pulang` int(3) NOT NULL,
  `pria` int(3) NOT NULL,
  `wanita` int(3) NOT NULL,
  `umum` int(3) NOT NULL,
  `janda` int(3) NOT NULL,
  `bpjs` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangperawatan`
--

INSERT INTO `ruangperawatan` (`id`, `nama`, `kelas`, `jumlah`, `lama`, `baru`, `pulang`, `pria`, `wanita`, `umum`, `janda`, `bpjs`) VALUES
(3, 'Azzalea', '0', 141, 110, 28, 0, 0, 0, 0, 0, 0),
(4, 'ICU', '0', 38, 28, 6, 0, 0, 0, 0, 0, 0),
(5, 'Begonia', '0', 27, 22, 0, 0, 0, 0, 0, 0, 0),
(6, 'Lavender', '0', 30, 24, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ruangperawatan2`
--

CREATE TABLE `ruangperawatan2` (
  `id` int(2) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `kelas` int(3) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `inap` int(3) NOT NULL,
  `rj` int(3) NOT NULL,
  `aps` int(3) NOT NULL,
  `rujuk` int(3) NOT NULL,
  `doa` int(3) NOT NULL,
  `umum` int(3) NOT NULL,
  `janda` int(3) NOT NULL,
  `bpjs` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangperawatan2`
--

INSERT INTO `ruangperawatan2` (`id`, `nama`, `kelas`, `jumlah`, `inap`, `rj`, `aps`, `rujuk`, `doa`, `umum`, `janda`, `bpjs`) VALUES
(3, 'IGD', 1, 67, 35, 28, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `id`, `nama`) VALUES
('rsadmin_fatahdemak', 'FatahDemakR5', 0, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangperawatan`
--
ALTER TABLE `ruangperawatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangperawatan2`
--
ALTER TABLE `ruangperawatan2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruangperawatan`
--
ALTER TABLE `ruangperawatan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ruangperawatan2`
--
ALTER TABLE `ruangperawatan2`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
