-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 04:55 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ekd`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_ajar`
--

CREATE TABLE IF NOT EXISTS `buku_ajar` (
  `id_buku` varchar(12) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlah halaman` int(255) NOT NULL,
  `lingkup` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `bukti_penulisan` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku_ajar_penulisan`
--

CREATE TABLE IF NOT EXISTS `buku_ajar_penulisan` (
  `nip` varchar(12) NOT NULL,
  `id_buku` varchar(12) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `haki`
--

CREATE TABLE IF NOT EXISTS `haki` (
  `id_haki` varchar(12) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `bukti_sk` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `haki_anggota`
--

CREATE TABLE IF NOT EXISTS `haki_anggota` (
  `id_haki` varchar(12) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `id_jurnal` varchar(12) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `vol_no_hal_thn` varchar(100) NOT NULL,
  `nama_jurnal` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `bukti_penulisan` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_partisipasi`
--

CREATE TABLE IF NOT EXISTS `jurnal_partisipasi` (
  `nip` varchar(12) NOT NULL,
  `id_jurnal` varchar(12) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id_matkul` varchar(12) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `bukti_sk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah_pengampu`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah_pengampu` (
  `nip` varchar(12) NOT NULL,
  `id_matkul` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbingan`
--

CREATE TABLE IF NOT EXISTS `pembimbingan` (
  `id_pembimbingan` varchar(12) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim_mhs` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pembimbing1` varchar(100) NOT NULL,
  `pembimbing2` varchar(100) NOT NULL,
  `waktu_daftar` datetime(6) NOT NULL,
  `jenis` varchar(12) NOT NULL,
  `bukti_sk` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbingan_pembimbing`
--

CREATE TABLE IF NOT EXISTS `pembimbingan_pembimbing` (
  `id_pembimbingan` varchar(12) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengmas`
--

CREATE TABLE IF NOT EXISTS `pengmas` (
  `id_pengmas` varchar(12) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `sumber_dana` varchar(100) NOT NULL,
  `jumlah_dana` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `bukti_sk` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengmas_partisipasi`
--

CREATE TABLE IF NOT EXISTS `pengmas_partisipasi` (
  `id_pengmas` varchar(12) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perwalian`
--

CREATE TABLE IF NOT EXISTS `perwalian` (
  `nim_mhs` varchar(12) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nip` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nip` varchar(12) NOT NULL,
  `nidn` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `pendidikan` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL,
  `administrator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `haki`
--
ALTER TABLE `haki`
 ADD PRIMARY KEY (`id_haki`);

--
-- Indexes for table `pembimbingan`
--
ALTER TABLE `pembimbingan`
 ADD PRIMARY KEY (`id_pembimbingan`);

--
-- Indexes for table `pengmas`
--
ALTER TABLE `pengmas`
 ADD PRIMARY KEY (`id_pengmas`);

--
-- Indexes for table `perwalian`
--
ALTER TABLE `perwalian`
 ADD PRIMARY KEY (`nim_mhs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
