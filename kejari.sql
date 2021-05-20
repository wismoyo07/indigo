-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 09:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kejari`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jaksa`
--

CREATE TABLE IF NOT EXISTS `jaksa` (
  `id_jaksa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jaksa` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jaksa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jaksa`
--

INSERT INTO `jaksa` (`id_jaksa`, `nama_jaksa`, `pangkat`, `nip`, `jabatan`) VALUES
(1, 'ARIF ANDI, SH', 'Jaksa Pratama', '198888 1888818882 2000111', 'Kasi Tindak Pidana Umum'),
(2, 'MUHAMMAD ANDI', 'Sena Wira TU', '19963333 32323 23 1212 121', 'Kasub Bag Bin Kejari Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `pendapathukum`
--

CREATE TABLE IF NOT EXISTS `pendapathukum` (
  `id_pendapathukum` int(11) NOT NULL AUTO_INCREMENT,
  `id_serahterimabb` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `hari_input` varchar(30) NOT NULL,
  `tgl_input` date NOT NULL,
  `tgl_kekuatan_hukum` date NOT NULL,
  PRIMARY KEY (`id_pendapathukum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pendapathukum`
--

INSERT INTO `pendapathukum` (`id_pendapathukum`, `id_serahterimabb`, `id_jaksa`, `hari_input`, `tgl_input`, `tgl_kekuatan_hukum`) VALUES
(2, 2, 1, 'Rabu', '2017-01-09', '2017-01-16'),
(3, 1, 2, 'Sabtu', '2017-01-16', '2017-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `serahterimabb`
--

CREATE TABLE IF NOT EXISTS `serahterimabb` (
  `id_serahterima` int(11) NOT NULL AUTO_INCREMENT,
  `hari_input_bb` varchar(30) NOT NULL,
  `tgl_input_bb` date NOT NULL,
  `no_print` varchar(200) NOT NULL,
  `tgl_no_print` date NOT NULL,
  `barang_bukti` text NOT NULL,
  `nama_terpidana` varchar(255) NOT NULL,
  `id_jaksa1` int(11) NOT NULL,
  `id_jaksa2` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status_bb` varchar(200) NOT NULL,
  `no_putusan` varchar(255) NOT NULL,
  `tgl_putusan` date NOT NULL,
  PRIMARY KEY (`id_serahterima`),
  KEY `id_jaksa1` (`id_jaksa1`),
  KEY `id_jaksa2` (`id_jaksa2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `serahterimabb`
--

INSERT INTO `serahterimabb` (`id_serahterima`, `hari_input_bb`, `tgl_input_bb`, `no_print`, `tgl_no_print`, `barang_bukti`, `nama_terpidana`, `id_jaksa1`, `id_jaksa2`, `keterangan`, `status_bb`, `no_putusan`, `tgl_putusan`) VALUES
(1, 'Rabu', '2017-01-11', '11111/111111/1111', '2017-01-10', 'Barang bukti', 'Udin Junior', 1, 2, 'Mantap', 'dirampas untuk negara', 'NO/PUTUSAN/112/1', '2017-01-10'),
(2, 'Kamis', '2017-01-16', 'PRINT/10/111', '2017-01-11', 'Baju Bekas', 'Anang', 2, 1, 'siap', 'dirampas untuk negara', 'PUTUSAN/011', '2017-01-12'),
(3, 'Rabu', '2017-01-18', 'NO/PRIN/123', '2017-01-12', 'Arit', 'Udin Bandung', 1, 2, 'Mantap', 'dirampas untuk negara', 'Putusan/123', '2017-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user',
  `last_logged_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(20) NOT NULL DEFAULT '0.0.0.0',
  `display_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `activation_key` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `last_logged_in`, `ip_address`, `display_name`, `email`, `activation_key`) VALUES
(1, 'administrator', '$2y$10$qLgN1yw69/Xsy7W57RiZ8OkFcIGGqRakhqKQzJ5DQeJE2l/jEqRX6', 'admin', '2017-07-20 02:05:52', '::1', 'ADMINISTRATOR', 'admin@gmail.com', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
