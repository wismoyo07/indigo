-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jun 2021 pada 03.39
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `indigo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_instrumen`
--

CREATE TABLE IF NOT EXISTS `input_instrumen` (
`id_input` int(11) NOT NULL,
  `id_instrumen1` varchar(150) NOT NULL,
  `pa_tujuan` varchar(150) DEFAULT NULL,
  `no_perkara` varchar(150) NOT NULL,
  `tgl_sidang` date NOT NULL,
  `pihak_perkara` enum('Penggugat','Pemohon','Tergugat','Termohon') NOT NULL,
  `nama_jurusita` varchar(150) NOT NULL,
  `biaya_radius` double(23,2) DEFAULT NULL,
  `ketua_majelis` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `input_instrumen`
--

INSERT INTO `input_instrumen` (`id_input`, `id_instrumen1`, `pa_tujuan`, `no_perkara`, `tgl_sidang`, `pihak_perkara`, `nama_jurusita`, `Biaya_radius`, `ketua_majelis`, `status`) VALUES
(1, '1', 'Pengadilan Agama Kisaran', '192/Pdt.G/2021/PA.Sim', '2021-05-27', 'Penggugat', 'Al Zimy Siregar', 150000.00, 'ILMAS,S.H.I', 'Belum Di Cetak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instrumen`
--

CREATE TABLE IF NOT EXISTS `instrumen` (
`id_instrumen` int(11) NOT NULL,
  `instrumen_nama` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `instrumen`
--

INSERT INTO `instrumen` (`id_instrumen`, `instrumen_nama`) VALUES
(1, 'INSTRUMEN PANGGILAN  PENGGUGAT / PEMOHON'),
(2, 'INSTRUMEN PANGGILAN TERGUGAT / TERMOHON'),
(3, 'INSTRUMEN MOHON BANTUAN PANGGILAN'),
(4, 'INSTRUMEN PANGGILAN UNTUK TERGUGAT / TERMOHON ( PENGUMUMAN )');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapathukum`
--

CREATE TABLE IF NOT EXISTS `pendapathukum` (
`id_pendapathukum` int(11) NOT NULL,
  `id_serahterimabb` int(11) NOT NULL,
  `id_jaksa` int(11) NOT NULL,
  `hari_input` varchar(30) NOT NULL,
  `tgl_input` date NOT NULL,
  `tgl_kekuatan_hukum` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `pendapathukum`
--

INSERT INTO `pendapathukum` (`id_pendapathukum`, `id_serahterimabb`, `id_jaksa`, `hari_input`, `tgl_input`, `tgl_kekuatan_hukum`) VALUES
(2, 2, 1, 'Rabu', '2017-01-09', '2017-01-16'),
(3, 1, 2, 'Sabtu', '2017-01-16', '2017-01-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `serahterimabb`
--

CREATE TABLE IF NOT EXISTS `serahterimabb` (
`id_serahterima` int(11) NOT NULL,
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
  `tgl_putusan` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `serahterimabb`
--

INSERT INTO `serahterimabb` (`id_serahterima`, `hari_input_bb`, `tgl_input_bb`, `no_print`, `tgl_no_print`, `barang_bukti`, `nama_terpidana`, `id_jaksa1`, `id_jaksa2`, `keterangan`, `status_bb`, `no_putusan`, `tgl_putusan`) VALUES
(1, 'Rabu', '2017-01-11', '11111/111111/1111', '2017-01-10', 'Barang bukti', 'Udin Junior', 1, 2, 'Mantap', 'dirampas untuk negara', 'NO/PUTUSAN/112/1', '2017-01-10'),
(2, 'Kamis', '2017-01-16', 'PRINT/10/111', '2017-01-11', 'Baju Bekas', 'Anang', 2, 1, 'siap', 'dirampas untuk negara', 'PUTUSAN/011', '2017-01-12'),
(3, 'Rabu', '2017-01-18', 'NO/PRIN/123', '2017-01-12', 'Arit', 'Udin Bandung', 1, 2, 'Mantap', 'dirampas untuk negara', 'Putusan/123', '2017-01-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','jurusita','hakim') NOT NULL DEFAULT 'admin',
  `last_logged_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_address` varchar(20) NOT NULL DEFAULT '0.0.0.0',
  `display_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `activation_key` varchar(150) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `last_logged_in`, `ip_address`, `display_name`, `email`, `activation_key`) VALUES
(1, 'administrator', '$2y$10$qLgN1yw69/Xsy7W57RiZ8OkFcIGGqRakhqKQzJ5DQeJE2l/jEqRX6', 'admin', '2021-06-02 08:24:15', '::1', 'ADMINISTRATOR', 'admin@gmail.com', NULL),
(2, 'zimy', '$2y$10$zyvX/SJUOEt.KHRpV5eik.PNDoeJ3Sfg48MZfK859fX7QijCR1JbK', 'admin', '2021-06-02 08:28:43', '::1', 'Al Zimy Siregar', 'zimy@indigo.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `input_instrumen`
--
ALTER TABLE `input_instrumen`
 ADD PRIMARY KEY (`id_input`);

--
-- Indexes for table `instrumen`
--
ALTER TABLE `instrumen`
 ADD PRIMARY KEY (`id_instrumen`);

--
-- Indexes for table `pendapathukum`
--
ALTER TABLE `pendapathukum`
 ADD PRIMARY KEY (`id_pendapathukum`);

--
-- Indexes for table `serahterimabb`
--
ALTER TABLE `serahterimabb`
 ADD PRIMARY KEY (`id_serahterima`), ADD KEY `id_jaksa1` (`id_jaksa1`), ADD KEY `id_jaksa2` (`id_jaksa2`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `input_instrumen`
--
ALTER TABLE `input_instrumen`
MODIFY `id_input` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `instrumen`
--
ALTER TABLE `instrumen`
MODIFY `id_instrumen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendapathukum`
--
ALTER TABLE `pendapathukum`
MODIFY `id_pendapathukum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `serahterimabb`
--
ALTER TABLE `serahterimabb`
MODIFY `id_serahterima` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
