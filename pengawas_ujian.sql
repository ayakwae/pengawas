-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 04:57 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengawas_ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit_honor`
--

CREATE TABLE `audit_honor` (
  `kode_honor` int(15) NOT NULL,
  `npu` varchar(11) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `kelompok_ujian` varchar(30) NOT NULL,
  `honor` varchar(100) NOT NULL,
  `change_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distribusi_koordinator`
--

CREATE TABLE `distribusi_koordinator` (
  `kode_dist_koor` varchar(15) NOT NULL,
  `kode_lokasi` varchar(15) NOT NULL,
  `no_ruangan` int(15) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `npu` varchar(11) NOT NULL,
  `hari_coaching` varchar(7) NOT NULL,
  `tgl_coaching` date NOT NULL,
  `jam_coaching` time NOT NULL,
  `tmpt_coaching` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `distribusi_pengawas`
--

CREATE TABLE `distribusi_pengawas` (
  `kode_dist` varchar(15) NOT NULL,
  `kode_lokasi` varchar(15) NOT NULL,
  `no_ruangan` int(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `npu` varchar(11) NOT NULL,
  `hari_coaching` varchar(7) NOT NULL,
  `tgl_coaching` date NOT NULL,
  `jam_coaching` time NOT NULL,
  `tmpt_coaching` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `honor`
--

CREATE TABLE `honor` (
  `kode_honor` int(15) NOT NULL,
  `npu` varchar(11) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `kelompok_ujian` varchar(30) NOT NULL,
  `honor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `honor`
--
DELIMITER $$
CREATE TRIGGER `tg_audit_honor` AFTER UPDATE ON `honor` FOR EACH ROW INSERT INTO audit_honor values(old.kode_honor,old.npu,old.jabatan,old.kelompok_ujian,old.honor)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `kode_instansi` varchar(30) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `sktn` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_koordinator`
--

CREATE TABLE `jadwal_koordinator` (
  `kode_jadwalk` varchar(15) NOT NULL,
  `kode_lokasi` varchar(15) NOT NULL,
  `no_ruangan` int(15) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `npu` varchar(11) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tmpt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_lokasi`
--

CREATE TABLE `jadwal_lokasi` (
  `kode_lokasi` varchar(15) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `sktn` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `kelompok_ujian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pengawas`
--

CREATE TABLE `jadwal_pengawas` (
  `kode_jadwalp` varchar(15) NOT NULL,
  `kode_lokasi` varchar(15) NOT NULL,
  `no_ruangan` int(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `npu` varchar(11) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tmpt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `kode_lokasi` varchar(15) NOT NULL,
  `nama_lokasi` varchar(100) NOT NULL,
  `sktn` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `kelompok_ujian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengawas`
--

CREATE TABLE `pengawas` (
  `npu` varchar(11) NOT NULL,
  `nip` int(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gelar_depan` varchar(100) NOT NULL,
  `gelar_belakang` varchar(100) NOT NULL,
  `kode_instansi` varchar(30) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `npwp` int(15) NOT NULL,
  `telepon/hp` varchar(30) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `pengawas`
--
DELIMITER $$
CREATE TRIGGER `tg_cek` BEFORE UPDATE ON `pengawas` FOR EACH ROW BEGIN
IF new.npu <> old.npu
THEN SET new.npu = old.npu;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `kode_ruangan` varchar(15) NOT NULL,
  `kode_lokasi` varchar(15) NOT NULL,
  `no_ruangan` int(15) NOT NULL,
  `nama_ruangan` varchar(30) NOT NULL,
  `kapasitas` varchar(30) NOT NULL,
  `ket_ruangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `audit_honor`
--
ALTER TABLE `audit_honor`
  ADD PRIMARY KEY (`kode_honor`),
  ADD UNIQUE KEY `npu/nip` (`npu`);

--
-- Indexes for table `distribusi_koordinator`
--
ALTER TABLE `distribusi_koordinator`
  ADD PRIMARY KEY (`kode_dist_koor`),
  ADD UNIQUE KEY `kode_lokasi` (`kode_lokasi`),
  ADD UNIQUE KEY `npu/nip` (`npu`);

--
-- Indexes for table `distribusi_pengawas`
--
ALTER TABLE `distribusi_pengawas`
  ADD PRIMARY KEY (`kode_dist`),
  ADD UNIQUE KEY `kode_lokasi` (`kode_lokasi`),
  ADD UNIQUE KEY `npu/nip` (`npu`);

--
-- Indexes for table `honor`
--
ALTER TABLE `honor`
  ADD PRIMARY KEY (`kode_honor`),
  ADD UNIQUE KEY `npu/nip` (`npu`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`kode_instansi`);

--
-- Indexes for table `jadwal_koordinator`
--
ALTER TABLE `jadwal_koordinator`
  ADD PRIMARY KEY (`kode_jadwalk`),
  ADD UNIQUE KEY `kode_lokasi` (`kode_lokasi`),
  ADD UNIQUE KEY `npu/nip` (`npu`);

--
-- Indexes for table `jadwal_lokasi`
--
ALTER TABLE `jadwal_lokasi`
  ADD PRIMARY KEY (`kode_lokasi`);

--
-- Indexes for table `jadwal_pengawas`
--
ALTER TABLE `jadwal_pengawas`
  ADD PRIMARY KEY (`kode_jadwalp`),
  ADD UNIQUE KEY `kode_lokasi` (`kode_lokasi`),
  ADD UNIQUE KEY `npu/nip` (`npu`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`kode_lokasi`);

--
-- Indexes for table `pengawas`
--
ALTER TABLE `pengawas`
  ADD PRIMARY KEY (`npu`),
  ADD UNIQUE KEY `kode_instansi` (`kode_instansi`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`kode_ruangan`),
  ADD UNIQUE KEY `kode_lokasi` (`kode_lokasi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `distribusi_koordinator`
--
ALTER TABLE `distribusi_koordinator`
  ADD CONSTRAINT `distribusi_koordinator_ibfk_1` FOREIGN KEY (`kode_lokasi`) REFERENCES `lokasi` (`kode_lokasi`),
  ADD CONSTRAINT `distribusi_koordinator_ibfk_2` FOREIGN KEY (`npu`) REFERENCES `pengawas` (`npu`);

--
-- Constraints for table `distribusi_pengawas`
--
ALTER TABLE `distribusi_pengawas`
  ADD CONSTRAINT `distribusi_pengawas_ibfk_1` FOREIGN KEY (`kode_lokasi`) REFERENCES `lokasi` (`kode_lokasi`),
  ADD CONSTRAINT `distribusi_pengawas_ibfk_2` FOREIGN KEY (`npu`) REFERENCES `pengawas` (`npu`);

--
-- Constraints for table `honor`
--
ALTER TABLE `honor`
  ADD CONSTRAINT `honor_ibfk_1` FOREIGN KEY (`npu`) REFERENCES `pengawas` (`npu`);

--
-- Constraints for table `pengawas`
--
ALTER TABLE `pengawas`
  ADD CONSTRAINT `pengawas_ibfk_1` FOREIGN KEY (`kode_instansi`) REFERENCES `instansi` (`kode_instansi`);

--
-- Constraints for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `ruangan_ibfk_1` FOREIGN KEY (`kode_lokasi`) REFERENCES `lokasi` (`kode_lokasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
