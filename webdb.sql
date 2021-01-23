-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 10:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `proyektordb`
--

CREATE TABLE `proyektordb` (
  `kode_transaksi` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` varchar(10) NOT NULL,
  `pilihan` varchar(100) NOT NULL,
  `kode_proyektor` varchar(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyektordb`
--

INSERT INTO `proyektordb` (`kode_transaksi`, `nama`, `npm`, `pilihan`, `kode_proyektor`, `tanggal`, `jam`) VALUES
('GUOT2', 'Ahmad Abdullah', '1855061005', 'Peminjaman', 'TI2018', '2020-12-27', '06:02:00'),
('ZBQ4M', 'Rizky Yulainto', '1815061028', 'Peminjaman', 'TI2019', '2020-12-29', '12:42:00'),
('B6AEO', 'Anwar Sahid', '1815061003', 'Pengembalian', 'TE2018', '2020-12-30', '13:53:00'),
('U0A3X', 'Kadek Astike Wirye', '1815061012', 'Peminjaman', 'TE2020', '2020-12-31', '15:59:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
