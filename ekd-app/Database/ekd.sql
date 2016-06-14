-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2016 at 04:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekd`
--

-- --------------------------------------------------------

--
-- Table structure for table `buktipenugasan`
--

CREATE TABLE `buktipenugasan` (
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `TIPEBUKTIPENUGASAN` varchar(50) DEFAULT NULL,
  `KETERANGAN` varchar(200) DEFAULT NULL,
  `PATH` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buktipenugasan`
--

INSERT INTO `buktipenugasan` (`IDBUKTIPENUGASAN`, `TIPEBUKTIPENUGASAN`, `KETERANGAN`, `PATH`) VALUES
(1, 'Pengabdian Masyarakat', 'Pengabdian Masyarakat Nasional oleh Gubernur Jawa Timur', NULL),
(2, 'Penelitian', 'SK09123471', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDBUKU` int(11) NOT NULL,
  `TAHUNBUKU` char(4) DEFAULT NULL,
  `JUDULBUKU` varchar(200) DEFAULT NULL,
  `JUMLAHHALAMAN` int(11) DEFAULT NULL,
  `LINGKUPBUKU` varchar(15) DEFAULT NULL,
  `PENERBIT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `IDDEPARTEMEN` int(11) NOT NULL,
  `IDFAKULTAS` int(11) NOT NULL,
  `NAMADEPARTEMEN` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`IDDEPARTEMEN`, `IDFAKULTAS`, `NAMADEPARTEMEN`) VALUES
(1, 1, 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `IDFAKULTAS` int(11) NOT NULL,
  `NAMAFAKULTAS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`IDFAKULTAS`, `NAMAFAKULTAS`) VALUES
(1, 'Fakultas Sains dan Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `haki`
--

CREATE TABLE `haki` (
  `IDHAKI` int(11) NOT NULL,
  `TAHUNHAKI` char(4) DEFAULT NULL,
  `JUDULHAKI` varchar(200) DEFAULT NULL,
  `JENISHAKI` varchar(100) DEFAULT NULL,
  `LINGKUPHAKI` varchar(15) DEFAULT NULL,
  `ATRIBUTHAKI` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haki`
--

INSERT INTO `haki` (`IDHAKI`, `TAHUNHAKI`, `JUDULHAKI`, `JENISHAKI`, `LINGKUPHAKI`, `ATRIBUTHAKI`) VALUES
(2, '2015', 'Pembuatan Sistem Informasi Peta Kota Online', 'Sistem Informasi', 'Nasional', '2/2015');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `IDJURNAL` int(11) NOT NULL,
  `JUDULJURNAL` varchar(200) DEFAULT NULL,
  `ATRIBUTJURNAL` varchar(25) DEFAULT NULL,
  `NAMAJURNAL` varchar(100) DEFAULT NULL,
  `LINGKUPJURNAL` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `IDKEGIATAN` int(11) NOT NULL,
  `KODEMK` varchar(6) DEFAULT NULL,
  `NAMAKEGIATAN` varchar(50) DEFAULT NULL,
  `SKSKEGIATAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatanpenelitian`
--

CREATE TABLE `kegiatanpenelitian` (
  `IDKEGIATANPENELITIAN` int(11) NOT NULL,
  `IDPERIODE` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `IDPENELITIAN` int(11) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `KONTRIBUSIKEGIATANPENELITIAN` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatanpengabdianmasyarakat`
--

CREATE TABLE `kegiatanpengabdianmasyarakat` (
  `IDKEGIATANPENGABDIANMASYARAKAT` int(11) NOT NULL,
  `IDPERIODE` int(11) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `IDPENGABDIANMASYARAKAT` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatanpengabdianmasyarakat`
--

INSERT INTO `kegiatanpengabdianmasyarakat` (`IDKEGIATANPENGABDIANMASYARAKAT`, `IDPERIODE`, `IDBUKTIPENUGASAN`, `IDPENGABDIANMASYARAKAT`, `NIP`) VALUES
(2, 1, 2, 1, '081311633052');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `IDLOGIN` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`IDLOGIN`, `NIP`, `PASSWORD`) VALUES
(1, '081311633052', 'password'),
(2, '081311633050', 'password'),
(7, '081311633053', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(12) NOT NULL,
  `NAMAMAHASISWA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMAMAHASISWA`) VALUES
('081311633052', 'Adhilaksono Bramantyo');

-- --------------------------------------------------------

--
-- Table structure for table `pembicaraahli`
--

CREATE TABLE `pembicaraahli` (
  `IDSEMINAR` int(11) NOT NULL,
  `IDPERIODE` int(11) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `NAMASEMINAR` varchar(100) DEFAULT NULL,
  `LINGKUPACARA` varchar(15) DEFAULT NULL,
  `WAKTU` char(5) DEFAULT NULL,
  `TEMPAT` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembimbingan`
--

CREATE TABLE `pembimbingan` (
  `id_pembimbingan` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `nim_mhs` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pembimbing1` varchar(100) NOT NULL,
  `pembimbing2` varchar(100) NOT NULL,
  `bukti_sk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembimbingan`
--

INSERT INTO `pembimbingan` (`id_pembimbingan`, `nama_mhs`, `nim_mhs`, `judul`, `pembimbing1`, `pembimbing2`, `bukti_sk`) VALUES
(1, 'Indra Krishna', '081311633064', 'Sistem Pengambil Keputusan Jalur Dagang pada Studi Kasus PT. Metalindo', 'Indra Kharisma', 'Badrus Zaman', 'A8014');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikanpengajaran`
--

CREATE TABLE `pendidikanpengajaran` (
  `IDPENDIDIKANPENGAJARAN` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `IDPERIODE` int(11) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `IDKEGIATAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `IDPENELITIAN` int(11) NOT NULL,
  `TAHUNPENELITIAN` char(4) DEFAULT NULL,
  `JUDULPENELITIAN` varchar(200) DEFAULT NULL,
  `SUMBERDANAPENELITIAN` varchar(100) DEFAULT NULL,
  `JUMLAHDANAPENELITIAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengabdianmasyarakat`
--

CREATE TABLE `pengabdianmasyarakat` (
  `IDPENGABDIANMASYARAKAT` int(11) NOT NULL,
  `TAHUNPENGABDIANMASYARAKAT` char(4) DEFAULT NULL,
  `JUDULPENGABDIANMASYARAKAT` varchar(200) DEFAULT NULL,
  `SUMBERDANAPENGABDIANMASYARAKAT` varchar(100) DEFAULT NULL,
  `JUMLAHDANAPENGABDIANMASYARAKAT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengabdianmasyarakat`
--

INSERT INTO `pengabdianmasyarakat` (`IDPENGABDIANMASYARAKAT`, `TAHUNPENGABDIANMASYARAKAT`, `JUDULPENGABDIANMASYARAKAT`, `SUMBERDANAPENGABDIANMASYARAKAT`, `JUMLAHDANAPENGABDIANMASYARAKAT`) VALUES
(1, '2016', 'Pengabdian Masyarakat Gubernur', 'Bank BCA, Pemerintah Jawa Timur', 2500000),
(2, '2015', 'Pengabdian Peduli Nasional', 'Universitas Airlangga', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `penulisanbuku`
--

CREATE TABLE `penulisanbuku` (
  `IDPENULISANBUKU` int(11) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `IDPERIODE` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `IDBUKU` int(11) DEFAULT NULL,
  `KONTRIBUSIPENULISANBUKU` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `IDPERIODE` int(11) NOT NULL,
  `TAHUNPERIODE` char(4) DEFAULT NULL,
  `SEMESTER` char(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`IDPERIODE`, `TAHUNPERIODE`, `SEMESTER`) VALUES
(1, '2016', 'Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `perolehanhaki`
--

CREATE TABLE `perolehanhaki` (
  `IDPEROLEHANHAKI` int(11) NOT NULL,
  `IDPERIODE` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `IDHAKI` int(11) DEFAULT NULL,
  `KONTRIBUSIPEROLEHANHAKI` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publikasiilmiah`
--

CREATE TABLE `publikasiilmiah` (
  `IDPUBLIKASIILMIAH` int(11) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `IDPERIODE` int(11) DEFAULT NULL,
  `IDJURNAL` int(11) DEFAULT NULL,
  `KONTRIBUSIPUBLIKASIILMIAH` char(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tugasbelajar`
--

CREATE TABLE `tugasbelajar` (
  `IDTUGASBELAJAR` int(11) NOT NULL,
  `IDPERIODE` int(11) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `IDBUKTIPENUGASAN` int(11) DEFAULT NULL,
  `NAMAPERGURUANTINGGI` varchar(50) DEFAULT NULL,
  `BIDANGILMU` varchar(50) DEFAULT NULL,
  `TAHUNMASUK` char(4) DEFAULT NULL,
  `SEMESTERBERJALAN` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIP` varchar(15) NOT NULL,
  `IDDEPARTEMEN` int(11) NOT NULL,
  `NIDN` varchar(15) DEFAULT NULL,
  `NAMA` varchar(30) DEFAULT NULL,
  `PANGKAT` varchar(20) DEFAULT NULL,
  `GOLONGAN` char(6) DEFAULT NULL,
  `JABFUNGSIONAL` varchar(20) DEFAULT NULL,
  `PENDAKHIR` char(2) DEFAULT NULL,
  `KETERANGAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIP`, `IDDEPARTEMEN`, `NIDN`, `NAMA`, `PANGKAT`, `GOLONGAN`, `JABFUNGSIONAL`, `PENDAKHIR`, `KETERANGAN`) VALUES
('081311633050', 1, '081311633050', 'Admin', 'Admin', 'I b', 'Admin', 'S2', 'Tata Usaha'),
('081311633052', 1, '081311633052', 'Adhilaksono Bramantyo', 'Dosen', 'III a', 'Asisten Ahli', 'S2', 'Dosen'),
('081311633053', 1, '081311633053', 'Bram', 'Admin', 'I b', 'Admin', 'S1', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buktipenugasan`
--
ALTER TABLE `buktipenugasan`
  ADD PRIMARY KEY (`IDBUKTIPENUGASAN`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDBUKU`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`IDDEPARTEMEN`),
  ADD KEY `FK_DEPARTEMEN_FAKULTAS` (`IDFAKULTAS`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`IDFAKULTAS`);

--
-- Indexes for table `haki`
--
ALTER TABLE `haki`
  ADD PRIMARY KEY (`IDHAKI`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`IDJURNAL`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`IDKEGIATAN`);

--
-- Indexes for table `kegiatanpenelitian`
--
ALTER TABLE `kegiatanpenelitian`
  ADD PRIMARY KEY (`IDKEGIATANPENELITIAN`),
  ADD KEY `FK_BUKTIPENUGASAN_KEGIATANPENELITIAN` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_KEGIATANPENELITIAN_PENELITIAN` (`IDPENELITIAN`),
  ADD KEY `FK_PERIODE_KEGIATANPENELITIAN` (`IDPERIODE`),
  ADD KEY `FK_USER_KEGIATANPENELITIAN` (`NIP`);

--
-- Indexes for table `kegiatanpengabdianmasyarakat`
--
ALTER TABLE `kegiatanpengabdianmasyarakat`
  ADD PRIMARY KEY (`IDKEGIATANPENGABDIANMASYARAKAT`),
  ADD KEY `FK_BUKTIPENUGASAN_KEGIATANPENGABDIANMASYARAKAT` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_KEGIATANPENGABDIANMASYARAKAT_PENGABDIANMASYARAKAT` (`IDPENGABDIANMASYARAKAT`),
  ADD KEY `FK_PERIODE_KEGIATANPENGABDIANMASYARAKAT` (`IDPERIODE`),
  ADD KEY `FK_USER_KEGIATANPENGABDIANMASARAKAT` (`NIP`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`IDLOGIN`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `pembicaraahli`
--
ALTER TABLE `pembicaraahli`
  ADD PRIMARY KEY (`IDSEMINAR`),
  ADD KEY `FK_BUKTIPENUGASAN_PEMBICARAAHLI` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_PERIODE_PEMBICARAAHLI` (`IDPERIODE`),
  ADD KEY `FK_USER_PEMBICARAAHLI` (`NIP`);

--
-- Indexes for table `pembimbingan`
--
ALTER TABLE `pembimbingan`
  ADD PRIMARY KEY (`id_pembimbingan`);

--
-- Indexes for table `pendidikanpengajaran`
--
ALTER TABLE `pendidikanpengajaran`
  ADD PRIMARY KEY (`IDPENDIDIKANPENGAJARAN`),
  ADD KEY `FK_BUKTIPENUGASAN_PENDIDIKAN` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_PENDIDIKANPENGAJARAN_KEGIATAN` (`IDKEGIATAN`),
  ADD KEY `FK_PERIODE_PENDIDIKANPENGAJARAN` (`IDPERIODE`),
  ADD KEY `FK_USER_PENDIDIKANPENGAJARAN` (`NIP`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`IDPENELITIAN`);

--
-- Indexes for table `pengabdianmasyarakat`
--
ALTER TABLE `pengabdianmasyarakat`
  ADD PRIMARY KEY (`IDPENGABDIANMASYARAKAT`);

--
-- Indexes for table `penulisanbuku`
--
ALTER TABLE `penulisanbuku`
  ADD PRIMARY KEY (`IDPENULISANBUKU`),
  ADD KEY `FK_BUKTIPENUGASAN_PENULISANBUKU` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_PERIODE_PENULISANBUKU` (`IDPERIODE`),
  ADD KEY `FK_USER_PENULISANBUKU` (`NIP`),
  ADD KEY `FK_PENULISANBUKU_BUKU` (`IDBUKU`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`IDPERIODE`);

--
-- Indexes for table `perolehanhaki`
--
ALTER TABLE `perolehanhaki`
  ADD PRIMARY KEY (`IDPEROLEHANHAKI`),
  ADD KEY `FK_BUKTIPENUGASAN_PEROLEHANHAKI` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_PERIODE_PEROLEHANHAKI` (`IDPERIODE`),
  ADD KEY `FK_PEROLEHANHAKI_HAKI` (`IDHAKI`),
  ADD KEY `FK_USER_PEROLEHANHAKI` (`NIP`);

--
-- Indexes for table `publikasiilmiah`
--
ALTER TABLE `publikasiilmiah`
  ADD PRIMARY KEY (`IDPUBLIKASIILMIAH`),
  ADD KEY `FK_BUKTIPENUGASAN_PUBLIKASIILMIAH` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_PERIODE_PUBLIKASIILMIAH` (`IDPERIODE`),
  ADD KEY `FK_PUBLIKASIILMIAH_JURNAL` (`IDJURNAL`),
  ADD KEY `FK_USER_PUBLIKASIILMIAH` (`NIP`);

--
-- Indexes for table `tugasbelajar`
--
ALTER TABLE `tugasbelajar`
  ADD PRIMARY KEY (`IDTUGASBELAJAR`),
  ADD KEY `FK_BUKTIPENUGASAN_TUGASBELAJAR` (`IDBUKTIPENUGASAN`),
  ADD KEY `FK_PERIODE_TUGASBELAJAR` (`IDPERIODE`),
  ADD KEY `FK_USER_TUGASBELAJAR` (`NIP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `FK_DEPARTEMEN_USER` (`IDDEPARTEMEN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buktipenugasan`
--
ALTER TABLE `buktipenugasan`
  MODIFY `IDBUKTIPENUGASAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `IDBUKU` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departemen`
--
ALTER TABLE `departemen`
  MODIFY `IDDEPARTEMEN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `IDFAKULTAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `haki`
--
ALTER TABLE `haki`
  MODIFY `IDHAKI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `IDJURNAL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `IDKEGIATAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatanpenelitian`
--
ALTER TABLE `kegiatanpenelitian`
  MODIFY `IDKEGIATANPENELITIAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatanpengabdianmasyarakat`
--
ALTER TABLE `kegiatanpengabdianmasyarakat`
  MODIFY `IDKEGIATANPENGABDIANMASYARAKAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `IDLOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pembicaraahli`
--
ALTER TABLE `pembicaraahli`
  MODIFY `IDSEMINAR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembimbingan`
--
ALTER TABLE `pembimbingan`
  MODIFY `id_pembimbingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pendidikanpengajaran`
--
ALTER TABLE `pendidikanpengajaran`
  MODIFY `IDPENDIDIKANPENGAJARAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `IDPENELITIAN` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengabdianmasyarakat`
--
ALTER TABLE `pengabdianmasyarakat`
  MODIFY `IDPENGABDIANMASYARAKAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penulisanbuku`
--
ALTER TABLE `penulisanbuku`
  MODIFY `IDPENULISANBUKU` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `IDPERIODE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `perolehanhaki`
--
ALTER TABLE `perolehanhaki`
  MODIFY `IDPEROLEHANHAKI` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publikasiilmiah`
--
ALTER TABLE `publikasiilmiah`
  MODIFY `IDPUBLIKASIILMIAH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tugasbelajar`
--
ALTER TABLE `tugasbelajar`
  MODIFY `IDTUGASBELAJAR` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `departemen`
--
ALTER TABLE `departemen`
  ADD CONSTRAINT `FK_DEPARTEMEN_FAKULTAS` FOREIGN KEY (`IDFAKULTAS`) REFERENCES `fakultas` (`IDFAKULTAS`);

--
-- Constraints for table `kegiatanpenelitian`
--
ALTER TABLE `kegiatanpenelitian`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_KEGIATANPENELITIAN` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`),
  ADD CONSTRAINT `FK_KEGIATANPENELITIAN_PENELITIAN` FOREIGN KEY (`IDPENELITIAN`) REFERENCES `penelitian` (`IDPENELITIAN`),
  ADD CONSTRAINT `FK_PERIODE_KEGIATANPENELITIAN` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_USER_KEGIATANPENELITIAN` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`);

--
-- Constraints for table `kegiatanpengabdianmasyarakat`
--
ALTER TABLE `kegiatanpengabdianmasyarakat`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_KEGIATANPENGABDIANMASYARAKAT` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`),
  ADD CONSTRAINT `FK_KEGIATANPENGABDIANMASYARAKAT_PENGABDIANMASYARAKAT` FOREIGN KEY (`IDPENGABDIANMASYARAKAT`) REFERENCES `pengabdianmasyarakat` (`IDPENGABDIANMASYARAKAT`),
  ADD CONSTRAINT `FK_PERIODE_KEGIATANPENGABDIANMASYARAKAT` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_USER_KEGIATANPENGABDIANMASARAKAT` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`);

--
-- Constraints for table `pembicaraahli`
--
ALTER TABLE `pembicaraahli`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_PEMBICARAAHLI` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`),
  ADD CONSTRAINT `FK_PERIODE_PEMBICARAAHLI` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_USER_PEMBICARAAHLI` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`);

--
-- Constraints for table `pendidikanpengajaran`
--
ALTER TABLE `pendidikanpengajaran`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_PENDIDIKAN` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`),
  ADD CONSTRAINT `FK_PENDIDIKANPENGAJARAN_KEGIATAN` FOREIGN KEY (`IDKEGIATAN`) REFERENCES `kegiatan` (`IDKEGIATAN`),
  ADD CONSTRAINT `FK_PERIODE_PENDIDIKANPENGAJARAN` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_USER_PENDIDIKANPENGAJARAN` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`);

--
-- Constraints for table `penulisanbuku`
--
ALTER TABLE `penulisanbuku`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_PENULISANBUKU` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PENULISANBUKU_BUKU` FOREIGN KEY (`IDBUKU`) REFERENCES `buku` (`IDBUKU`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PERIODE_PENULISANBUKU` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USER_PENULISANBUKU` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`) ON UPDATE CASCADE;

--
-- Constraints for table `perolehanhaki`
--
ALTER TABLE `perolehanhaki`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_PEROLEHANHAKI` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`),
  ADD CONSTRAINT `FK_PERIODE_PEROLEHANHAKI` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_PEROLEHANHAKI_HAKI` FOREIGN KEY (`IDHAKI`) REFERENCES `haki` (`IDHAKI`),
  ADD CONSTRAINT `FK_USER_PEROLEHANHAKI` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`);

--
-- Constraints for table `publikasiilmiah`
--
ALTER TABLE `publikasiilmiah`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_PUBLIKASIILMIAH` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`),
  ADD CONSTRAINT `FK_PERIODE_PUBLIKASIILMIAH` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_PUBLIKASIILMIAH_JURNAL` FOREIGN KEY (`IDJURNAL`) REFERENCES `jurnal` (`IDJURNAL`),
  ADD CONSTRAINT `FK_USER_PUBLIKASIILMIAH` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`);

--
-- Constraints for table `tugasbelajar`
--
ALTER TABLE `tugasbelajar`
  ADD CONSTRAINT `FK_BUKTIPENUGASAN_TUGASBELAJAR` FOREIGN KEY (`IDBUKTIPENUGASAN`) REFERENCES `buktipenugasan` (`IDBUKTIPENUGASAN`),
  ADD CONSTRAINT `FK_PERIODE_TUGASBELAJAR` FOREIGN KEY (`IDPERIODE`) REFERENCES `periode` (`IDPERIODE`),
  ADD CONSTRAINT `FK_USER_TUGASBELAJAR` FOREIGN KEY (`NIP`) REFERENCES `user` (`NIP`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_DEPARTEMEN_USER` FOREIGN KEY (`IDDEPARTEMEN`) REFERENCES `departemen` (`IDDEPARTEMEN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
