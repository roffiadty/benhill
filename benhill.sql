-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 06:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benhill`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id` int(11) NOT NULL,
  `no_wo` varchar(100) NOT NULL,
  `kode_bundel` varchar(100) NOT NULL,
  `no_artikel` varchar(100) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `bundel` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `ratio` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_jalan`
--

INSERT INTO `surat_jalan` (`id`, `no_wo`, `kode_bundel`, `no_artikel`, `nama_barang`, `bundel`, `total`, `ratio`, `tanggal`) VALUES
(1, 'WO2206-00541', 'S21512N1503', '23219-32523', 'CELANA PANJANG CHINOS', '1', '20', '27B : 27 = 1', '2022-01-07'),
(2, 'WO2206-00379', 'S21512N1462', '23219-32523', 'SEPATU BOOTS', '1', '45', '29B : 29 = 5', '2022-01-09'),
(3, 'WO2206-00652', 'S21512N1912', '23219-32612', 'CELANA JEANS', '1', '30', '30B : 30 = 10', '2022-01-12'),
(4, 'WO2206-00321', 'S21512N1756', '23219-32769', 'BAJU BATMAN', '1', '60', '28B : 28 = 2', '2022-02-15'),
(5, 'WO2206-00541', 'S21512N1503', '23219-32673', 'TOPI MERAH', '1', '83', '52B : 52 = 20', '2022-02-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
