-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 06:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipond`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `dom_guru` text NOT NULL,
  `nope_guru` varchar(15) NOT NULL,
  `status` enum('Guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `dom_guru`, `nope_guru`, `status`) VALUES
(36, 'Sarah Nur Azizah', 'Magetan', '0876543212', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `janji`
--

CREATE TABLE `janji` (
  `id_janji` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_pembina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `janji`
--

INSERT INTO `janji` (`id_janji`, `id_guru`, `id_pembina`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(1) NOT NULL,
  `status_kelas` int(1) NOT NULL,
  `pecahan_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `status_kelas`, `pecahan_kelas`) VALUES
(1, 1, ''),
(2, 2, ''),
(3, 3, ''),
(4, 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(10) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_walikelas` int(11) NOT NULL,
  `nama_mapel` text NOT NULL,
  `indikator_nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `id_kelas`, `id_walikelas`, `nama_mapel`, `indikator_nilai`) VALUES
(1, 1, 1, 'Bacaan', 70),
(2, 2, 2, 'kimia', 90),
(3, 3, 3, 'sejarah', 75),
(24, 0, 0, 'bio', 90),
(25, 0, 0, 'ipa', 11);

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id_ortu` int(11) NOT NULL,
  `id_santri` int(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nope_ortu` int(20) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `nama_wali` varchar(40) NOT NULL,
  `nope_wali` int(20) NOT NULL,
  `alamat_wali` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id_ortu`, `id_santri`, `nama_ayah`, `nama_ibu`, `nope_ortu`, `alamat_ortu`, `nama_wali`, `nope_wali`, `alamat_wali`) VALUES
(1, 1, 'dfg', 'dfg', 2147483647, 'ngw', '', 0, ''),
(2, 2, 'Agus', 'Agus', 2147483647, '', '', 0, ''),
(3, 0, 'Agus Setiono', 'Agus Setiono', 2147483647, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pembina`
--

CREATE TABLE `pembina` (
  `id_pembina` int(11) NOT NULL,
  `nama_pembina` varchar(100) NOT NULL,
  `dom_pembina` text NOT NULL,
  `nope_pembina` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembina`
--

INSERT INTO `pembina` (`id_pembina`, `nama_pembina`, `dom_pembina`, `nope_pembina`, `status`) VALUES
(18, 'Sarah Nur A', 'Jeruk, Kartoharjo, Magetan', '085843185027', 'Koordinator Keputrian');

-- --------------------------------------------------------

--
-- Table structure for table `rapor`
--

CREATE TABLE `rapor` (
  `id_rapor` int(2) NOT NULL,
  `id_santri` int(1) NOT NULL,
  `id_mapel` int(1) NOT NULL,
  `nilai` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rapor`
--

INSERT INTO `rapor` (`id_rapor`, `id_santri`, `id_mapel`, `nilai`) VALUES
(1, 2, 1, 70),
(2, 2, 2, 90),
(3, 2, 3, 90),
(4, 2, 24, 90),
(5, 2, 25, 12),
(6, 1, 1, 90),
(7, 1, 2, 100),
(8, 1, 3, 87),
(9, 1, 24, 98),
(10, 1, 25, 76);

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(11) NOT NULL,
  `id_kelas` int(1) NOT NULL,
  `nis_santri` varchar(15) NOT NULL,
  `nama_santri` varchar(100) NOT NULL,
  `gender` enum('Putra','Putri') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_santri` text NOT NULL,
  `status_santri` enum('Kiriman','Person') NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `id_kelas`, `nis_santri`, `nama_santri`, `gender`, `tempat_lahir`, `tanggal_lahir`, `alamat_santri`, `status_santri`, `tgl_masuk`, `tgl_keluar`, `foto`) VALUES
(1, 1, '12345454', 'Sarah Nur Azizah', 'Putri', 'Magetan', '2001-02-01', 'DK. Kedung Bende RT / RW 11/04, Desa Jeruk, Kecamatan Kartoharjo, Kab. Magetan', 'Kiriman', '2022-02-08', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int(11) NOT NULL,
  `saran` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `saran`, `created`) VALUES
(13, 'Saran', '2022-06-22 10:16:00'),
(14, 'Kamar kurang luas, dan sepertinya kurang ventilasi udara', '2022-06-26 14:38:17'),
(16, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-07-05 09:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `hak_akses` enum('admin','walikelas','ortu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `hak_akses`) VALUES
(1, 'Admin', 'admin@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'admin'),
(2, 'Sarah Nur A', 'ti.sarkonah12@gmail.com', '31600c30527b81b0ef8f267a5996f621', 'walikelas'),
(30, 'Sang Aji', '12.sangajii@gmail.com', '31600c30527b81b0ef8f267a5996f621', 'walikelas');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id_walikelas` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id_walikelas`, `id_kelas`, `id_user`) VALUES
(1, 1, 0),
(15, 2, 2),
(16, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`id_janji`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `pembina`
--
ALTER TABLE `pembina`
  ADD PRIMARY KEY (`id_pembina`);

--
-- Indexes for table `rapor`
--
ALTER TABLE `rapor`
  ADD PRIMARY KEY (`id_rapor`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`),
  ADD UNIQUE KEY `nis_santri` (`nis_santri`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `janji`
--
ALTER TABLE `janji`
  MODIFY `id_janji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembina`
--
ALTER TABLE `pembina`
  MODIFY `id_pembina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rapor`
--
ALTER TABLE `rapor`
  MODIFY `id_rapor` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id_walikelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
