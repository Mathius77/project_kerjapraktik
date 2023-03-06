-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 04:38 AM
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
-- Database: `db_kerjapraktik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lihat_buku`
--

CREATE TABLE `tbl_lihat_buku` (
  `id` int(10) NOT NULL,
  `thn_ajar` varchar(255) NOT NULL,
  `kelas` int(10) NOT NULL,
  `paket_buku` varchar(255) NOT NULL,
  `biaya` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lihat_buku`
--

INSERT INTO `tbl_lihat_buku` (`id`, `thn_ajar`, `kelas`, `paket_buku`, `biaya`) VALUES
(1, '2018-2019', 1, 'Paket Buku Kelas 1 SD 2018/2019', '500000.00'),
(2, '2018-2019', 2, 'Paket Buku Kelas 2 SD 2018/2019', '600000.00'),
(4, '2018-2019', 3, 'Paket Buku Kelas 3 SD 2018/2019', '1000000.00'),
(6, '2018-2019', 4, 'Paket Buku Kelas 4 SD 2018/2019', '1500000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lihat_pembayaran`
--

CREATE TABLE `tbl_lihat_pembayaran` (
  `id` int(10) NOT NULL,
  `nis` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` int(10) NOT NULL,
  `biaya` decimal(30,2) NOT NULL,
  `uang_kegiatan` decimal(30,2) NOT NULL,
  `ekstrakurikuler` decimal(30,2) NOT NULL,
  `total_bayar` decimal(30,2) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `bln_bayar` varchar(30) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lihat_pembayaran`
--

INSERT INTO `tbl_lihat_pembayaran` (`id`, `nis`, `nama`, `kelas`, `biaya`, `uang_kegiatan`, `ekstrakurikuler`, `total_bayar`, `tgl_bayar`, `bln_bayar`, `bukti`, `status`) VALUES
(86, 201801001, 'Mathius Haryanto Widyaputra', 1, '300000.00', '30000.00', '15000.00', '345000.00', '2023-01-21 00:00:00', 'Januari', 'image_upload/2018010012023-01-21.jpg', 'Lunas'),
(87, 201802001, 'Novan Putra', 2, '500000.00', '32000.00', '17000.00', '549000.00', '2023-01-21 00:00:00', 'Januari', 'image_upload/2018020012023-01-21.PNG', 'Belum Lunas'),
(88, 201803001, 'Ridwan Putranto', 3, '700000.00', '35000.00', '17000.00', '752000.00', '2023-01-21 00:00:00', 'Januari', 'image_upload/2018030012023-01-21.PNG', 'Lunas'),
(89, 201804001, 'Budi Sudirman', 4, '750000.00', '45000.00', '25000.00', '820000.00', '2023-01-21 00:00:00', 'Januari', 'image_upload/2018040012023-01-21.png', 'Lunas'),
(90, 201807001, 'Rahmat Budiman', 7, '750000.00', '30000.00', '17000.00', '797000.00', '2023-01-22 00:00:00', 'Januari', 'image_upload/2018070012023-01-22.PNG', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lihat_seragam`
--

CREATE TABLE `tbl_lihat_seragam` (
  `id` int(10) NOT NULL,
  `thn_ajar` varchar(255) NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `jns_pakaian` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `harga` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lihat_seragam`
--

INSERT INTO `tbl_lihat_seragam` (`id`, `thn_ajar`, `tingkat`, `jns_pakaian`, `ukuran`, `harga`) VALUES
(2, '2018-2019', 'SD', 'Celana OR Putra', 'L', '30000.00'),
(3, '2018-2019', 'SMP', 'Kemeja Putih', 'L2', '75000.00'),
(4, '2018-2019', 'SD', 'Baju Batik', 'L.4', '85000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_admin`
--

CREATE TABLE `tbl_login_admin` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login_admin`
--

INSERT INTO `tbl_login_admin` (`id`, `username`, `password`, `namalengkap`, `email`) VALUES
(1, 'admin01', '18c6d818ae35a3e8279b5330eda01498', 'Admin01', 'admin01@gmail.com'),
(3, 'admin02', '6e60a28384bc05fa5b33cc579d040c56', 'Admin02', 'admin02@gmail.com'),
(4, 'admin03', '7dc2466ad3ff5911f6a5e47e043e0abc', 'Admin03', 'admin03@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_kasir`
--

CREATE TABLE `tbl_login_kasir` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login_kasir`
--

INSERT INTO `tbl_login_kasir` (`id`, `username`, `password`, `namalengkap`, `email`) VALUES
(2, 'andi', 'ce0e5bf55e4f71749eade7a8b95c4e46', 'Andi Maharaja', 'andi@gmail.com'),
(3, 'kasir01', '34adbae6e21f964a24731f0bde20bff5', 'Kasir01', 'kasir01@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_siswa`
--

CREATE TABLE `tbl_login_siswa` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nis` int(50) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login_siswa`
--

INSERT INTO `tbl_login_siswa` (`id`, `username`, `password`, `nis`, `namalengkap`, `email`) VALUES
(1, 'mathius', '4b9fdbf7e9c0761681bb90b211e78fdf', 201801001, 'Mathius Haryanto Widyaputra', 'mathius@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan_buku`
--

CREATE TABLE `tbl_pesan_buku` (
  `id` int(10) NOT NULL,
  `nis` int(30) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `tgl_bayar` datetime NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan_buku`
--

INSERT INTO `tbl_pesan_buku` (`id`, `nis`, `id_buku`, `tgl_bayar`, `id_siswa`) VALUES
(1, 201801001, 1, '2022-08-19 00:00:00', 1),
(2, 201802001, 2, '2022-08-21 00:00:00', 2),
(3, 201803001, 4, '2022-09-19 00:00:00', 4),
(8, 201804001, 6, '2022-09-19 00:00:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan_seragam`
--

CREATE TABLE `tbl_pesan_seragam` (
  `id` int(10) NOT NULL,
  `nis` int(30) NOT NULL,
  `id_seragam` int(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan_seragam`
--

INSERT INTO `tbl_pesan_seragam` (`id`, `nis`, `id_seragam`, `jumlah`, `tgl_bayar`) VALUES
(18, 201802001, 2, 1, '2022-09-25 00:00:00'),
(19, 201804001, 4, 1, '2022-09-25 00:00:00'),
(20, 201802001, 4, 1, '2022-09-28 00:00:00'),
(23, 201801001, 2, 2, '2023-02-20 00:00:00'),
(24, 201801001, 4, 3, '2023-02-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(10) NOT NULL,
  `nis` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `thn_ajar` varchar(255) NOT NULL,
  `kelas` int(10) NOT NULL,
  `tempat_lahir_siswa` varchar(50) NOT NULL,
  `tgl_lahir_siswa` datetime DEFAULT NULL,
  `jns_kelamin_siswa` varchar(50) NOT NULL,
  `agama_siswa` varchar(50) NOT NULL,
  `alamat_siswa` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tempat_lahir_ayah` varchar(50) NOT NULL,
  `tgl_lahir_ayah` datetime DEFAULT NULL,
  `agama_ayah` varchar(50) NOT NULL,
  `pend_ayah` varchar(50) NOT NULL,
  `kerja_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_lahir_ibu` varchar(50) NOT NULL,
  `tgl_lahir_ibu` datetime DEFAULT NULL,
  `agama_ibu` varchar(50) NOT NULL,
  `pend_ibu` varchar(50) NOT NULL,
  `kerja_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nis`, `nama`, `thn_ajar`, `kelas`, `tempat_lahir_siswa`, `tgl_lahir_siswa`, `jns_kelamin_siswa`, `agama_siswa`, `alamat_siswa`, `nama_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `agama_ayah`, `pend_ayah`, `kerja_ayah`, `alamat_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tgl_lahir_ibu`, `agama_ibu`, `pend_ibu`, `kerja_ibu`, `alamat_ibu`) VALUES
(1, 201801001, 'Mathius Haryanto Widyaputra', '2018-2019', 1, 'Jakarta', '1999-09-06 00:00:00', 'Laki-Laki', 'Katholik', 'Jl.Merpati No.5', 'Jaenudin', 'Jakarta', '1970-08-07 00:00:00', 'Katholik', 'S1', 'Wiraswasta', 'Jl.Merpati No.5', 'Siti', 'Jakarta', '1980-06-05 00:00:00', 'Katholik', 'S1', 'Marketing', 'Jl.Merpati No.5'),
(2, 201802001, 'Novan Putra', '2018-2019', 2, '', NULL, '', '', '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', '', ''),
(4, 201803001, 'Ridwan Putranto', '2018-2019', 3, '', NULL, '', '', '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', '', ''),
(6, 201804001, 'Budi Sudirman', '2018-2019', 4, '', NULL, '', '', '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', '', ''),
(7, 201807001, 'Rahmat Budiman', '2018-2019', 7, '', NULL, '', '', '', '', '', NULL, '', '', '', '', '', '', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentukan_biaya`
--

CREATE TABLE `tbl_tentukan_biaya` (
  `id` int(10) NOT NULL,
  `thn_ajar` varchar(255) NOT NULL,
  `kelas` int(10) NOT NULL,
  `biaya` decimal(30,2) NOT NULL,
  `uang_kegiatan` decimal(30,2) NOT NULL,
  `ekstrakurikuler` decimal(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tentukan_biaya`
--

INSERT INTO `tbl_tentukan_biaya` (`id`, `thn_ajar`, `kelas`, `biaya`, `uang_kegiatan`, `ekstrakurikuler`) VALUES
(1, '2018-2019', 1, '300000.00', '30000.00', '15000.00'),
(4, '2018-2019', 2, '500000.00', '32000.00', '17000.00'),
(5, '2018-2019', 3, '700000.00', '35000.00', '17000.00'),
(7, '2018-2019', 4, '750000.00', '45000.00', '25000.00'),
(9, '2018-2019', 7, '750000.00', '30000.00', '17000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipe_kelas`
--

CREATE TABLE `tbl_tipe_kelas` (
  `id` int(10) NOT NULL,
  `kelas` int(10) NOT NULL,
  `tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tipe_kelas`
--

INSERT INTO `tbl_tipe_kelas` (`id`, `kelas`, `tipe`) VALUES
(1, 1, 'SD'),
(2, 2, 'SD'),
(3, 3, 'SD'),
(4, 4, 'SD'),
(5, 5, 'SD'),
(6, 6, 'SD'),
(7, 7, 'SMP'),
(8, 8, 'SMP'),
(9, 9, 'SMP');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_daftarnama`
-- (See below for the actual view)
--
CREATE TABLE `view_daftarnama` (
`nis` int(30)
,`nama` varchar(255)
,`thn_ajar` varchar(255)
,`kelas` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_daftarsiswa`
-- (See below for the actual view)
--
CREATE TABLE `view_daftarsiswa` (
`nis` int(30)
,`nama` varchar(255)
,`kelas` int(10)
,`uang_sekolah` decimal(30,2)
,`uang_kegiatan` decimal(30,2)
,`ekstrakurikuler` decimal(30,2)
,`total_bayar` decimal(30,2)
,`bln_bayar` varchar(30)
,`tgl_bayar` datetime
,`tipe` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_01`
-- (See below for the actual view)
--
CREATE TABLE `v_01` (
`nis` int(30)
,`nama` varchar(255)
,`kelas` int(10)
,`biaya` decimal(30,2)
,`uang_kegiatan` decimal(30,2)
,`ekstrakurikuler` decimal(30,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_02`
-- (See below for the actual view)
--
CREATE TABLE `v_02` (
`nis` int(30)
,`nama` varchar(255)
,`kelas` int(10)
,`paket_buku` varchar(255)
,`biaya` decimal(30,2)
,`id_buku` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_03`
-- (See below for the actual view)
--
CREATE TABLE `v_03` (
`id` int(10)
,`nis` int(30)
,`nama` varchar(255)
,`kelas` int(10)
,`tgl_bayar` datetime
,`paket_buku` varchar(255)
,`thn_ajar` varchar(255)
,`biaya` decimal(30,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_04`
-- (See below for the actual view)
--
CREATE TABLE `v_04` (
`id` int(10)
,`nis` int(30)
,`id_seragam` int(10)
,`tgl_bayar` datetime
,`jumlah` int(11)
,`nama` varchar(255)
,`thn_ajar` varchar(255)
,`kelas` int(10)
,`tingkat` varchar(255)
,`jns_pakaian` varchar(255)
,`ukuran` varchar(255)
,`harga` decimal(30,2)
);

-- --------------------------------------------------------

--
-- Structure for view `view_daftarnama`
--
DROP TABLE IF EXISTS `view_daftarnama`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_daftarnama`  AS SELECT `a`.`nis` AS `nis`, `a`.`nama` AS `nama`, `a`.`thn_ajar` AS `thn_ajar`, `a`.`kelas` AS `kelas` FROM `tbl_siswa` AS `a``a`  ;

-- --------------------------------------------------------

--
-- Structure for view `view_daftarsiswa`
--
DROP TABLE IF EXISTS `view_daftarsiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_daftarsiswa`  AS SELECT `a`.`nis` AS `nis`, `a`.`nama` AS `nama`, `a`.`kelas` AS `kelas`, `a`.`biaya` AS `uang_sekolah`, `a`.`uang_kegiatan` AS `uang_kegiatan`, `a`.`ekstrakurikuler` AS `ekstrakurikuler`, `a`.`total_bayar` AS `total_bayar`, `a`.`bln_bayar` AS `bln_bayar`, `a`.`tgl_bayar` AS `tgl_bayar`, `b`.`tipe` AS `tipe` FROM (`tbl_lihat_pembayaran` `a` join `tbl_tipe_kelas` `b` on(`a`.`kelas` = `b`.`kelas`))  ;

-- --------------------------------------------------------

--
-- Structure for view `v_01`
--
DROP TABLE IF EXISTS `v_01`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_01`  AS SELECT `a`.`nis` AS `nis`, `a`.`nama` AS `nama`, `a`.`kelas` AS `kelas`, `b`.`biaya` AS `biaya`, `b`.`uang_kegiatan` AS `uang_kegiatan`, `b`.`ekstrakurikuler` AS `ekstrakurikuler` FROM (`tbl_siswa` `a` join `tbl_tentukan_biaya` `b` on(`a`.`thn_ajar` = `b`.`thn_ajar` and `a`.`kelas` = `b`.`kelas`))  ;

-- --------------------------------------------------------

--
-- Structure for view `v_02`
--
DROP TABLE IF EXISTS `v_02`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_02`  AS SELECT `a`.`nis` AS `nis`, `a`.`nama` AS `nama`, `a`.`kelas` AS `kelas`, `b`.`paket_buku` AS `paket_buku`, `b`.`biaya` AS `biaya`, `b`.`id` AS `id_buku` FROM (`tbl_siswa` `a` join `tbl_lihat_buku` `b` on(`b`.`thn_ajar` = `a`.`thn_ajar` and `b`.`kelas` = `a`.`kelas`))  ;

-- --------------------------------------------------------

--
-- Structure for view `v_03`
--
DROP TABLE IF EXISTS `v_03`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_03`  AS SELECT `a`.`id` AS `id`, `a`.`nis` AS `nis`, `c`.`nama` AS `nama`, `c`.`kelas` AS `kelas`, `a`.`tgl_bayar` AS `tgl_bayar`, `b`.`paket_buku` AS `paket_buku`, `b`.`thn_ajar` AS `thn_ajar`, `b`.`biaya` AS `biaya` FROM ((`tbl_pesan_buku` `a` join `tbl_lihat_buku` `b` on(`b`.`id` = `a`.`id_buku`)) join `tbl_siswa` `c` on(`a`.`nis` = `c`.`nis`))  ;

-- --------------------------------------------------------

--
-- Structure for view `v_04`
--
DROP TABLE IF EXISTS `v_04`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_04`  AS SELECT `a`.`id` AS `id`, `a`.`nis` AS `nis`, `a`.`id_seragam` AS `id_seragam`, `a`.`tgl_bayar` AS `tgl_bayar`, `a`.`jumlah` AS `jumlah`, `b`.`nama` AS `nama`, `b`.`thn_ajar` AS `thn_ajar`, `b`.`kelas` AS `kelas`, `c`.`tingkat` AS `tingkat`, `c`.`jns_pakaian` AS `jns_pakaian`, `c`.`ukuran` AS `ukuran`, `c`.`harga` AS `harga` FROM ((`tbl_pesan_seragam` `a` join `tbl_siswa` `b` on(`a`.`nis` = `b`.`nis`)) join `tbl_lihat_seragam` `c` on(`a`.`id_seragam` = `c`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lihat_buku`
--
ALTER TABLE `tbl_lihat_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lihat_pembayaran`
--
ALTER TABLE `tbl_lihat_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lihat_seragam`
--
ALTER TABLE `tbl_lihat_seragam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_admin`
--
ALTER TABLE `tbl_login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_kasir`
--
ALTER TABLE `tbl_login_kasir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login_siswa`
--
ALTER TABLE `tbl_login_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesan_buku`
--
ALTER TABLE `tbl_pesan_buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tbl_pesan_seragam`
--
ALTER TABLE `tbl_pesan_seragam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tentukan_biaya`
--
ALTER TABLE `tbl_tentukan_biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tipe_kelas`
--
ALTER TABLE `tbl_tipe_kelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login_kasir`
--
ALTER TABLE `tbl_login_kasir`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login_siswa`
--
ALTER TABLE `tbl_login_siswa`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pesan_buku`
--
ALTER TABLE `tbl_pesan_buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pesan_seragam`
--
ALTER TABLE `tbl_pesan_seragam`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_tentukan_biaya`
--
ALTER TABLE `tbl_tentukan_biaya`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_tipe_kelas`
--
ALTER TABLE `tbl_tipe_kelas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pesan_buku`
--
ALTER TABLE `tbl_pesan_buku`
  ADD CONSTRAINT `tbl_pesan_buku_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tbl_siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
