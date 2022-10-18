-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 11:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang_saw`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `nilaimax`
-- (See below for the actual view)
--
CREATE TABLE `nilaimax` (
`id_kriteria` int(11)
,`nama_kriteria` varchar(100)
,`maksimum` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(1, 'Lolos'),
(2, 'Tidak lolos');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bobot`
--

CREATE TABLE `tb_bobot` (
  `id_bobot` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bobot`
--

INSERT INTO `tb_bobot` (`id_bobot`, `id_kriteria`, `value`) VALUES
(1, 1, '0.456'),
(2, 2, '0.256'),
(3, 3, '0.156'),
(4, 4, '0.09'),
(5, 5, '0.04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'Jurusan'),
(2, 'Portofolio kegiatan mahasiswa'),
(3, 'Nilai raport'),
(4, 'Nilai kepribadian'),
(5, 'Penguasaan bahasa inggris');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matrixkeputusan`
--

CREATE TABLE `tb_matrixkeputusan` (
  `id_matrix` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `id_skala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matrixkeputusan`
--

INSERT INTO `tb_matrixkeputusan` (`id_matrix`, `id_alternatif`, `id_bobot`, `id_skala`) VALUES
(1, 1, 1, 1),
(6, 1, 1, 2),
(2, 1, 2, 1),
(7, 1, 2, 2),
(3, 1, 3, 1),
(8, 1, 3, 2),
(4, 1, 4, 1),
(9, 1, 4, 2),
(5, 1, 5, 1),
(10, 1, 5, 2),
(11, 2, 1, 3),
(12, 2, 2, 3),
(13, 2, 3, 3),
(14, 2, 4, 3),
(15, 2, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_skala`
--

CREATE TABLE `tb_skala` (
  `id_skala` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skala`
--

INSERT INTO `tb_skala` (`id_skala`, `value`, `keterangan`) VALUES
(1, 3, 'Bagus'),
(2, 2, 'Cukup'),
(3, 1, 'Kurang');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vmatrixkeputusan`
-- (See below for the actual view)
--
CREATE TABLE `vmatrixkeputusan` (
`id_matrix` int(11)
,`id_alternatif` int(11)
,`nama_alternatif` varchar(50)
,`id_kriteria` int(11)
,`nama_kriteria` varchar(100)
,`id_bobot` int(11)
,`value` varchar(50)
,`nilai` int(11)
,`keterangan` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vnormalisasi`
-- (See below for the actual view)
--
CREATE TABLE `vnormalisasi` (
`id_matrix` int(11)
,`id_alternatif` int(11)
,`nama_alternatif` varchar(50)
,`id_kriteria` int(11)
,`nama_kriteria` varchar(100)
,`id_bobot` int(11)
,`value` varchar(50)
,`nilai` int(11)
,`keterangan` varchar(50)
,`normalisasi` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpraranking`
-- (See below for the actual view)
--
CREATE TABLE `vpraranking` (
`id_matrix` int(11)
,`id_alternatif` int(11)
,`nama_alternatif` varchar(50)
,`id_kriteria` int(11)
,`nama_kriteria` varchar(100)
,`id_bobot` int(11)
,`value` varchar(50)
,`nilai` int(11)
,`keterangan` varchar(50)
,`normalisasi` decimal(14,4)
,`praranking` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vranking`
-- (See below for the actual view)
--
CREATE TABLE `vranking` (
`id_alternatif` int(11)
,`nama_alternatif` varchar(50)
,`ranking` double
);

-- --------------------------------------------------------

--
-- Structure for view `nilaimax`
--
DROP TABLE IF EXISTS `nilaimax`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilaimax`  AS  select `vmatrixkeputusan`.`id_kriteria` AS `id_kriteria`,`vmatrixkeputusan`.`nama_kriteria` AS `nama_kriteria`,max(`vmatrixkeputusan`.`nilai`) AS `maksimum` from `vmatrixkeputusan` group by `vmatrixkeputusan`.`id_kriteria` ;

-- --------------------------------------------------------

--
-- Structure for view `vmatrixkeputusan`
--
DROP TABLE IF EXISTS `vmatrixkeputusan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vmatrixkeputusan`  AS  select `tb_matrixkeputusan`.`id_matrix` AS `id_matrix`,`tb_alternatif`.`id_alternatif` AS `id_alternatif`,`tb_alternatif`.`nama_alternatif` AS `nama_alternatif`,`tb_kriteria`.`id_kriteria` AS `id_kriteria`,`tb_kriteria`.`nama_kriteria` AS `nama_kriteria`,`tb_bobot`.`id_bobot` AS `id_bobot`,`tb_bobot`.`value` AS `value`,`tb_skala`.`value` AS `nilai`,`tb_skala`.`keterangan` AS `keterangan` from ((((`tb_matrixkeputusan` join `tb_skala`) join `tb_bobot`) join `tb_kriteria`) join `tb_alternatif`) where ((`tb_matrixkeputusan`.`id_alternatif` = `tb_alternatif`.`id_alternatif`) and (`tb_matrixkeputusan`.`id_bobot` = `tb_bobot`.`id_bobot`) and (`tb_matrixkeputusan`.`id_skala` = `tb_skala`.`id_skala`) and (`tb_kriteria`.`id_kriteria` = `tb_bobot`.`id_kriteria`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vnormalisasi`
--
DROP TABLE IF EXISTS `vnormalisasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vnormalisasi`  AS  select `vmatrixkeputusan`.`id_matrix` AS `id_matrix`,`vmatrixkeputusan`.`id_alternatif` AS `id_alternatif`,`vmatrixkeputusan`.`nama_alternatif` AS `nama_alternatif`,`vmatrixkeputusan`.`id_kriteria` AS `id_kriteria`,`vmatrixkeputusan`.`nama_kriteria` AS `nama_kriteria`,`vmatrixkeputusan`.`id_bobot` AS `id_bobot`,`vmatrixkeputusan`.`value` AS `value`,`vmatrixkeputusan`.`nilai` AS `nilai`,`vmatrixkeputusan`.`keterangan` AS `keterangan`,(`vmatrixkeputusan`.`nilai` / `nilaimax`.`maksimum`) AS `normalisasi` from (`vmatrixkeputusan` join `nilaimax`) where (`nilaimax`.`id_kriteria` = `vmatrixkeputusan`.`id_kriteria`) group by `vmatrixkeputusan`.`id_matrix` ;

-- --------------------------------------------------------

--
-- Structure for view `vpraranking`
--
DROP TABLE IF EXISTS `vpraranking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vpraranking`  AS  select `vnormalisasi`.`id_matrix` AS `id_matrix`,`vnormalisasi`.`id_alternatif` AS `id_alternatif`,`vnormalisasi`.`nama_alternatif` AS `nama_alternatif`,`vnormalisasi`.`id_kriteria` AS `id_kriteria`,`vnormalisasi`.`nama_kriteria` AS `nama_kriteria`,`vnormalisasi`.`id_bobot` AS `id_bobot`,`vnormalisasi`.`value` AS `value`,`vnormalisasi`.`nilai` AS `nilai`,`vnormalisasi`.`keterangan` AS `keterangan`,`vnormalisasi`.`normalisasi` AS `normalisasi`,(`vnormalisasi`.`value` * `vnormalisasi`.`normalisasi`) AS `praranking` from `vnormalisasi` group by `vnormalisasi`.`id_matrix` ;

-- --------------------------------------------------------

--
-- Structure for view `vranking`
--
DROP TABLE IF EXISTS `vranking`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vranking`  AS  select `vpraranking`.`id_alternatif` AS `id_alternatif`,`vpraranking`.`nama_alternatif` AS `nama_alternatif`,sum(`vpraranking`.`praranking`) AS `ranking` from `vpraranking` group by `vpraranking`.`id_alternatif` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_matrixkeputusan`
--
ALTER TABLE `tb_matrixkeputusan`
  ADD PRIMARY KEY (`id_matrix`),
  ADD KEY `id_alternatif` (`id_alternatif`,`id_bobot`,`id_skala`),
  ADD KEY `fk_bobot_matrix` (`id_bobot`),
  ADD KEY `fk_skala_matrix` (`id_skala`);

--
-- Indexes for table `tb_skala`
--
ALTER TABLE `tb_skala`
  ADD PRIMARY KEY (`id_skala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_matrixkeputusan`
--
ALTER TABLE `tb_matrixkeputusan`
  MODIFY `id_matrix` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_skala`
--
ALTER TABLE `tb_skala`
  MODIFY `id_skala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_bobot`
--
ALTER TABLE `tb_bobot`
  ADD CONSTRAINT `fk_kriteria` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
