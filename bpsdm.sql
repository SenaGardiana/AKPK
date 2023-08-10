-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 08:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpsdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `individu`
--

CREATE TABLE `individu` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `materi_pelatihan_umum` varchar(50) NOT NULL,
  `gap_kinerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `individu`
--

INSERT INTO `individu` (`nip`, `nama`, `nama_jabatan`, `status`, `materi_pelatihan_umum`, `gap_kinerja`) VALUES
('196411011991031004', ' AJANG ZAENAL AFANDI,S.T., M.T.', 'WIDYAISWARA AHLI MADYA', 'PNS', 'Pelatihan 1', 'Pelatihan 2');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `kt_gap` varchar(100) NOT NULL,
  `kt_usulan` varchar(100) NOT NULL,
  `km_gap` varchar(100) NOT NULL,
  `km_usulan` varchar(100) NOT NULL,
  `ks_gap` varchar(100) NOT NULL,
  `ks_usulan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`nip`, `nama`, `nama_jabatan`, `status`, `kt_gap`, `kt_usulan`, `km_gap`, `km_usulan`, `ks_gap`, `ks_usulan`) VALUES
('197209081993031004', 'Drs. BUDY HERMAWAN,M.Si.', 'WIDYAISWARA AHLI MADYA', 'PNS', 'kt1', 'kt2', 'km1', 'km2', 'ks1', 'ks2');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `nip` varchar(18) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nip`, `nama`, `nama_jabatan`, `unit_kerja`, `status`) VALUES
('196804091987031004', 'Drs.  CEPI MAHDI,M.M.', 'KEPALA BIDANG PENGEMBANGAN KOMPETENSI TEKNIS UMUM', 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PNS'),
('196909081996031006', ' H. ASEP SAEPULOH,S.T., M.T.', 'KEPALA BIDANG PENGEMBANGAN KOMPETENSI MANAJERIAL', 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PNS'),
('197203181998031007', ' HERY ANTASARI,ST., MDP', 'KEPALA BADAN', 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PNS'),
('197504192002121006', ' TUGIMAN,S.E., M.M.', 'KEPALA BIDANG SERTIFIKASI KOMPETENSI DAN PENGELOLAAN KELEMBAGAAN', 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PNS'),
('197506281993111001', ' YUDI KUNCORO,A.P., M.M.', 'SEKRETARIS', 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PNS'),
('197903102008012005', ' WIDYANINGSIH,S.E., M.M.', 'KEPALA BIDANG PENGEMBANGAN KOMPETENSI TEKNIS SUBSTANTIF', 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA', 'PNS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `level` enum('BKPSDM','Admin','Kesehatan','Sosial') NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `notelp`, `level`, `password`, `foto`, `status`) VALUES
('USR-006', 'BPSDM PROV JABAR', 'BPSDM', 'BPSDM@jabar.com', '0', '', '788337bf1006fb65abf5e298aadbf0a8', 'BPSDM.jpg', 'Aktif'),
('USR-007', 'Sena Sheridan Gardiana', 'Senagardiana', 'senagardiana0406@gmail.com', '087831022461', 'Admin', '77a028a14f7ebe02e3c445f3350dff64', 'user.png', 'Aktif'),
('USR-008', 'BKPSDM', 'UNIT_BKPSDM', 'BPSDM@jabar.com', '0', 'BKPSDM', 'ff0948c3dd649d4d1b4f35422b3e3e40', 'BPSDM1.jpg', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `individu`
--
ALTER TABLE `individu`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
