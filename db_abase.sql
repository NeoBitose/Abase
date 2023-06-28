-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2023 at 04:44 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_abase`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `waktu_lulus` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `siswa`, `waktu_lulus`) VALUES
(1, 2, '2021-07-30'),
(2, 3, '2021-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `data_spp`
--

CREATE TABLE `data_spp` (
  `id_data_spp` int(11) NOT NULL,
  `spp` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_spp`
--

INSERT INTO `data_spp` (`id_data_spp`, `spp`, `kelas`, `jurusan`) VALUES
(1, 1, 1, 1),
(2, 1, 11, 1),
(3, 1, 21, 1),
(4, 1, 2, 1),
(5, 1, 12, 1),
(6, 1, 22, 1),
(7, 1, 3, 1),
(8, 1, 13, 1),
(9, 1, 23, 1),
(10, 1, 4, 1),
(11, 1, 14, 1),
(12, 1, 24, 1),
(13, 1, 5, 1),
(14, 1, 15, 1),
(15, 1, 25, 1),
(16, 1, 6, 1),
(17, 1, 16, 1),
(18, 1, 26, 1),
(19, 1, 7, 1),
(20, 1, 17, 1),
(21, 1, 27, 1),
(22, 1, 8, 1),
(23, 1, 18, 1),
(24, 1, 28, 1),
(25, 1, 9, 1),
(26, 1, 19, 1),
(27, 1, 29, 1),
(28, 1, 10, 1),
(29, 1, 20, 1),
(30, 1, 30, 1),
(31, 1, 1, 2),
(32, 1, 11, 2),
(33, 1, 21, 2),
(34, 1, 2, 2),
(35, 1, 12, 2),
(36, 1, 22, 2),
(37, 1, 3, 2),
(38, 1, 13, 2),
(39, 1, 23, 2),
(40, 1, 4, 2),
(41, 1, 14, 2),
(42, 1, 24, 2),
(43, 1, 5, 2),
(44, 1, 15, 2),
(45, 1, 25, 2),
(46, 1, 6, 2),
(47, 1, 16, 2),
(48, 1, 26, 2),
(49, 1, 7, 2),
(50, 1, 17, 2),
(51, 1, 27, 2),
(52, 1, 8, 2),
(53, 1, 18, 2),
(54, 1, 28, 2),
(55, 1, 9, 2),
(56, 1, 19, 2),
(57, 1, 29, 2),
(58, 1, 10, 2),
(59, 1, 20, 2),
(60, 1, 30, 2),
(61, 2, 1, 1),
(62, 2, 11, 1),
(63, 2, 21, 1),
(64, 2, 2, 1),
(65, 2, 12, 1),
(66, 2, 22, 1),
(67, 2, 3, 1),
(68, 2, 13, 1),
(69, 2, 23, 1),
(70, 2, 4, 1),
(71, 2, 14, 1),
(72, 2, 24, 1),
(73, 2, 5, 1),
(74, 2, 15, 1),
(75, 2, 25, 1),
(76, 2, 6, 1),
(77, 2, 16, 1),
(78, 2, 26, 1),
(79, 2, 7, 1),
(80, 2, 17, 1),
(81, 2, 27, 1),
(82, 2, 8, 1),
(83, 2, 18, 1),
(84, 2, 28, 1),
(85, 2, 9, 1),
(86, 2, 19, 1),
(87, 2, 29, 1),
(88, 2, 10, 1),
(89, 2, 20, 1),
(90, 2, 30, 1),
(91, 2, 1, 2),
(92, 2, 11, 2),
(93, 2, 21, 2),
(94, 2, 2, 2),
(95, 2, 12, 2),
(96, 2, 22, 2),
(97, 2, 3, 2),
(98, 2, 13, 2),
(99, 2, 23, 2),
(100, 2, 4, 2),
(101, 2, 14, 2),
(102, 2, 24, 2),
(103, 2, 5, 2),
(104, 2, 15, 2),
(105, 2, 25, 2),
(106, 2, 6, 2),
(107, 2, 16, 2),
(108, 2, 26, 2),
(109, 2, 7, 2),
(110, 2, 17, 2),
(111, 2, 27, 2),
(112, 2, 8, 2),
(113, 2, 18, 2),
(114, 2, 28, 2),
(115, 2, 9, 2),
(116, 2, 19, 2),
(117, 2, 29, 2),
(118, 2, 10, 2),
(119, 2, 20, 2),
(120, 2, 30, 2),
(121, 3, 1, 1),
(122, 3, 11, 1),
(123, 3, 21, 1),
(124, 3, 2, 1),
(125, 3, 12, 1),
(126, 3, 22, 1),
(127, 3, 3, 1),
(128, 3, 13, 1),
(129, 3, 23, 1),
(130, 3, 4, 1),
(131, 3, 14, 1),
(132, 3, 24, 1),
(133, 3, 5, 1),
(134, 3, 15, 1),
(135, 3, 25, 1),
(136, 3, 6, 1),
(137, 3, 16, 1),
(138, 3, 26, 1),
(139, 3, 7, 1),
(140, 3, 17, 1),
(141, 3, 27, 1),
(142, 3, 8, 1),
(143, 3, 18, 1),
(144, 3, 28, 1),
(145, 3, 9, 1),
(146, 3, 19, 1),
(147, 3, 29, 1),
(148, 3, 10, 1),
(149, 3, 20, 1),
(150, 3, 30, 1),
(151, 3, 1, 2),
(152, 3, 11, 2),
(153, 3, 21, 2),
(154, 3, 2, 2),
(155, 3, 12, 2),
(156, 3, 22, 2),
(157, 3, 3, 2),
(158, 3, 13, 2),
(159, 3, 23, 2),
(160, 3, 4, 2),
(161, 3, 14, 2),
(162, 3, 24, 2),
(163, 3, 5, 2),
(164, 3, 15, 2),
(165, 3, 25, 2),
(166, 3, 6, 2),
(167, 3, 16, 2),
(168, 3, 26, 2),
(169, 3, 7, 2),
(170, 3, 17, 2),
(171, 3, 27, 2),
(172, 3, 8, 2),
(173, 3, 18, 2),
(174, 3, 28, 2),
(175, 3, 9, 2),
(176, 3, 19, 2),
(177, 3, 29, 2),
(178, 3, 10, 2),
(179, 3, 20, 2),
(180, 3, 30, 2),
(181, 4, 1, 1),
(182, 4, 11, 1),
(183, 4, 21, 1),
(184, 4, 2, 1),
(185, 4, 12, 1),
(186, 4, 22, 1),
(187, 4, 3, 1),
(188, 4, 13, 1),
(189, 4, 23, 1),
(190, 4, 4, 1),
(191, 4, 14, 1),
(192, 4, 24, 1),
(193, 4, 5, 1),
(194, 4, 15, 1),
(195, 4, 25, 1),
(196, 4, 6, 1),
(197, 4, 16, 1),
(198, 4, 26, 1),
(199, 4, 7, 1),
(200, 4, 17, 1),
(201, 4, 27, 1),
(202, 4, 8, 1),
(203, 4, 18, 1),
(204, 4, 28, 1),
(205, 4, 9, 1),
(206, 4, 19, 1),
(207, 4, 29, 1),
(208, 4, 10, 1),
(209, 4, 20, 1),
(210, 4, 30, 1),
(211, 4, 1, 2),
(212, 4, 11, 2),
(213, 4, 21, 2),
(214, 4, 2, 2),
(215, 4, 12, 2),
(216, 4, 22, 2),
(217, 4, 3, 2),
(218, 4, 13, 2),
(219, 4, 23, 2),
(220, 4, 4, 2),
(221, 4, 14, 2),
(222, 4, 24, 2),
(223, 4, 5, 2),
(224, 4, 15, 2),
(225, 4, 25, 2),
(226, 4, 6, 2),
(227, 4, 16, 2),
(228, 4, 26, 2),
(229, 4, 7, 2),
(230, 4, 17, 2),
(231, 4, 27, 2),
(232, 4, 8, 2),
(233, 4, 18, 2),
(234, 4, 28, 2),
(235, 4, 9, 2),
(236, 4, 19, 2),
(237, 4, 29, 2),
(238, 4, 10, 2),
(239, 4, 20, 2),
(240, 4, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_template_excel`
--

CREATE TABLE `data_template_excel` (
  `id` int(11) NOT NULL,
  `tingkatan_kelas` int(11) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `nomor_kelas` int(11) NOT NULL,
  `nama_template` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_template_excel`
--

INSERT INTO `data_template_excel` (`id`, `tingkatan_kelas`, `jurusan`, `nomor_kelas`, `nama_template`) VALUES
(1, 10, 'MIPA', 1, '10_MIPA_1'),
(2, 10, 'MIPA', 2, '10_MIPA_2'),
(3, 10, 'MIPA', 3, '10_MIPA_3'),
(4, 10, 'MIPA', 4, '10_MIPA_4'),
(5, 10, 'MIPA', 5, '10_MIPA_5'),
(6, 10, 'MIPA', 6, '10_MIPA_6'),
(7, 10, 'MIPA', 7, '10_MIPA_7'),
(8, 10, 'MIPA', 8, '10_MIPA_8'),
(9, 10, 'MIPA', 9, '10_MIPA_9'),
(10, 10, 'MIPA', 10, '10_MIPA_10'),
(11, 10, 'IPS', 1, '10_IPS_1'),
(12, 10, 'IPS', 2, '10_IPS_2'),
(13, 10, 'IPS', 3, '10_IPS_3'),
(14, 10, 'IPS', 4, '10_IPS_4'),
(15, 10, 'IPS', 5, '10_IPS_5'),
(16, 10, 'IPS', 6, '10_IPS_6'),
(17, 10, 'IPS', 7, '10_IPS_7'),
(18, 10, 'IPS', 8, '10_IPS_8'),
(19, 10, 'IPS', 9, '10_IPS_9'),
(20, 10, 'IPS', 10, '10_IPS_10');

-- --------------------------------------------------------

--
-- Table structure for table `detail_spp`
--

CREATE TABLE `detail_spp` (
  `id_detail_spp` int(20) NOT NULL,
  `data_spp` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(5) NOT NULL,
  `selisih_spp` int(10) NOT NULL DEFAULT '0',
  `status_bayar` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_spp`
--

INSERT INTO `detail_spp` (`id_detail_spp`, `data_spp`, `siswa`, `bulan`, `tahun`, `selisih_spp`, `status_bayar`) VALUES
(1, 1, 1, 1, 2018, 0, 1),
(2, 1, 1, 2, 2018, 0, 1),
(3, 1, 1, 3, 2018, 0, 1),
(4, 1, 1, 4, 2018, 0, 1),
(5, 1, 1, 5, 2018, 0, 1),
(6, 1, 1, 6, 2018, 123000, 3),
(7, 1, 1, 7, 2018, 123000, 3),
(8, 1, 1, 8, 2018, 123000, 3),
(9, 1, 1, 9, 2018, 123000, 3),
(10, 1, 1, 10, 2018, 123000, 3),
(11, 1, 1, 11, 2018, 123000, 3),
(12, 1, 1, 12, 2018, 123000, 3),
(13, 2, 1, 1, 2018, 123000, 3),
(14, 2, 1, 2, 2018, 123000, 3),
(15, 2, 1, 3, 2018, 123000, 3),
(16, 2, 1, 4, 2018, 123000, 3),
(17, 2, 1, 5, 2018, 123000, 3),
(18, 2, 1, 6, 2018, 123000, 3),
(19, 2, 1, 7, 2018, 123000, 3),
(20, 2, 1, 8, 2018, 123000, 3),
(21, 2, 1, 9, 2018, 123000, 3),
(22, 2, 1, 10, 2018, 123000, 3),
(23, 2, 1, 11, 2018, 123000, 3),
(24, 2, 1, 12, 2018, 123000, 3),
(25, 190, 2, 1, 2021, 123000, 3),
(26, 190, 2, 2, 2021, 123000, 3),
(27, 190, 2, 3, 2021, 123000, 3),
(28, 190, 2, 4, 2021, 123000, 3),
(29, 190, 2, 5, 2021, 123000, 3),
(30, 190, 2, 6, 2021, 123000, 3),
(31, 190, 2, 7, 2021, 123000, 3),
(32, 190, 2, 8, 2021, 123000, 3),
(33, 190, 2, 9, 2021, 123000, 3),
(34, 190, 2, 10, 2021, 123000, 3),
(35, 190, 2, 11, 2021, 123000, 3),
(36, 190, 2, 12, 2021, 123000, 3),
(37, 190, 3, 1, 2021, 0, 1),
(38, 190, 3, 2, 2021, 0, 1),
(39, 190, 3, 3, 2021, 0, 1),
(40, 190, 3, 4, 2021, 0, 1),
(41, 190, 3, 5, 2021, 0, 1),
(42, 190, 3, 6, 2021, 123000, 3),
(43, 190, 3, 7, 2021, 123000, 3),
(44, 190, 3, 8, 2021, 123000, 3),
(45, 190, 3, 9, 2021, 123000, 3),
(46, 190, 3, 10, 2021, 123000, 3),
(47, 190, 3, 11, 2021, 123000, 3),
(48, 190, 3, 12, 2021, 123000, 3),
(49, 191, 2, 1, 2021, 123000, 3),
(50, 191, 2, 2, 2021, 123000, 3),
(51, 191, 2, 3, 2021, 123000, 3),
(52, 191, 2, 4, 2021, 123000, 3),
(53, 191, 2, 5, 2021, 123000, 3),
(54, 191, 2, 6, 2021, 123000, 3),
(55, 191, 2, 7, 2021, 123000, 3),
(56, 191, 2, 8, 2021, 123000, 3),
(57, 191, 2, 9, 2021, 123000, 3),
(58, 191, 2, 10, 2021, 123000, 3),
(59, 191, 2, 11, 2021, 123000, 3),
(60, 191, 2, 12, 2021, 123000, 3),
(61, 191, 3, 1, 2021, 123000, 3),
(62, 191, 3, 2, 2021, 123000, 3),
(63, 191, 3, 3, 2021, 123000, 3),
(64, 191, 3, 4, 2021, 123000, 3),
(65, 191, 3, 5, 2021, 123000, 3),
(66, 191, 3, 6, 2021, 123000, 3),
(67, 191, 3, 7, 2021, 123000, 3),
(68, 191, 3, 8, 2021, 123000, 3),
(69, 191, 3, 9, 2021, 123000, 3),
(70, 191, 3, 10, 2021, 123000, 3),
(71, 191, 3, 11, 2021, 123000, 3),
(72, 191, 3, 12, 2021, 123000, 3),
(73, 192, 2, 1, 2021, 123000, 3),
(74, 192, 2, 2, 2021, 123000, 3),
(75, 192, 2, 3, 2021, 123000, 3),
(76, 192, 2, 4, 2021, 123000, 3),
(77, 192, 2, 5, 2021, 123000, 3),
(78, 192, 2, 6, 2021, 123000, 3),
(79, 192, 2, 7, 2021, 123000, 3),
(80, 192, 2, 8, 2021, 123000, 3),
(81, 192, 2, 9, 2021, 123000, 3),
(82, 192, 2, 10, 2021, 123000, 3),
(83, 192, 2, 11, 2021, 123000, 3),
(84, 192, 2, 12, 2021, 123000, 3),
(85, 192, 3, 1, 2021, 123000, 3),
(86, 192, 3, 2, 2021, 123000, 3),
(87, 192, 3, 3, 2021, 123000, 3),
(88, 192, 3, 4, 2021, 123000, 3),
(89, 192, 3, 5, 2021, 123000, 3),
(90, 192, 3, 6, 2021, 123000, 3),
(91, 192, 3, 7, 2021, 123000, 3),
(92, 192, 3, 8, 2021, 123000, 3),
(93, 192, 3, 9, 2021, 123000, 3),
(94, 192, 3, 10, 2021, 123000, 3),
(95, 192, 3, 11, 2021, 123000, 3),
(96, 192, 3, 12, 2021, 123000, 3),
(97, 3, 1, 1, 2018, 123000, 3),
(98, 3, 1, 2, 2018, 123000, 3),
(99, 3, 1, 3, 2018, 123000, 3),
(100, 3, 1, 4, 2018, 123000, 3),
(101, 3, 1, 5, 2018, 123000, 3),
(102, 3, 1, 6, 2018, 123000, 3),
(103, 3, 1, 7, 2018, 123000, 3),
(104, 3, 1, 8, 2018, 123000, 3),
(105, 3, 1, 9, 2018, 123000, 3),
(106, 3, 1, 10, 2018, 123000, 3),
(107, 3, 1, 11, 2018, 123000, 3),
(108, 3, 1, 12, 2018, 123000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `detail_tanggungan`
--

CREATE TABLE `detail_tanggungan` (
  `id_detail_tanggungan` int(11) NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `selisih_tanggungan` int(10) NOT NULL DEFAULT '0',
  `status_bayar` int(11) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_tanggungan`
--

INSERT INTO `detail_tanggungan` (`id_detail_tanggungan`, `tanggungan`, `siswa`, `selisih_tanggungan`, `status_bayar`) VALUES
(1, 1, 1, 0, 1),
(2, 243, 1, 500000, 2),
(3, 2, 1, 575000, 3),
(4, 130, 2, 0, 1),
(5, 372, 2, 900000, 2),
(6, 491, 2, 900000, 3),
(7, 130, 3, 710000, 3),
(8, 372, 3, 1500000, 3),
(9, 491, 3, 900000, 3),
(10, 131, 2, 575000, 3),
(11, 131, 3, 575000, 3),
(12, 132, 2, 575000, 3),
(13, 132, 3, 575000, 3),
(14, 3, 1, 575000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `drop_out`
--

CREATE TABLE `drop_out` (
  `id_drop_out` int(11) NOT NULL,
  `siswa` int(11) NOT NULL,
  `waktu_do` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jangka_waktu`
--

CREATE TABLE `jangka_waktu` (
  `id_jangka_waktu` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jangka_waktu`
--

INSERT INTO `jangka_waktu` (`id_jangka_waktu`, `keterangan`) VALUES
(1, 'Dicicil selama 1 tahun di masing-masing tingkat'),
(2, 'Dicicil selama 3 tahun'),
(3, 'Dicicil tiap bulan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanggungan`
--

CREATE TABLE `jenis_tanggungan` (
  `id_jenis_tanggungan` int(11) NOT NULL,
  `nama_jenis_tanggungan` varchar(50) NOT NULL,
  `nominal_kls_10` int(10) NOT NULL DEFAULT '0',
  `nominal_kls_11` int(10) NOT NULL DEFAULT '0',
  `nominal_kls_12` int(10) NOT NULL DEFAULT '0',
  `jangka_waktu` int(11) NOT NULL,
  `awal_aktif_tanggungan` date NOT NULL,
  `akhir_aktif_tanggungan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tanggungan`
--

INSERT INTO `jenis_tanggungan` (`id_jenis_tanggungan`, `nama_jenis_tanggungan`, `nominal_kls_10`, `nominal_kls_11`, `nominal_kls_12`, `jangka_waktu`, `awal_aktif_tanggungan`, `akhir_aktif_tanggungan`) VALUES
(1, 'DPP', 710000, 575000, 575000, 1, '2018-07-09', '2019-07-08'),
(2, 'DPP', 710000, 575000, 575000, 1, '2019-07-09', '2020-07-08'),
(3, 'DPP', 710000, 575000, 575000, 1, '2020-07-09', '2021-07-08'),
(4, 'DPP', 710000, 575000, 575000, 1, '2021-07-09', '2022-07-08'),
(5, 'Insidental', 1000000, 0, 0, 2, '2018-07-09', '2019-07-08'),
(6, 'Insidental', 1000000, 0, 0, 2, '2019-07-09', '2020-07-08'),
(7, 'Insidental', 1500000, 0, 0, 2, '2020-07-09', '2021-07-08'),
(8, 'Insidental', 1500000, 0, 0, 2, '2021-07-09', '2022-07-08'),
(9, 'Study Tour', 900000, 0, 0, 3, '2020-07-09', '2021-07-08'),
(10, 'Study Tour', 900000, 0, 0, 3, '2021-07-09', '2022-07-08');

--
-- Triggers `jenis_tanggungan`
--
DELIMITER $$
CREATE TRIGGER `tambah_tanggungan` AFTER INSERT ON `jenis_tanggungan` FOR EACH ROW BEGIN
	
	DECLARE idTanggungan INT DEFAULT 0;
	DECLARE idKelas INT DEFAULT 0; 
	DECLARE idJurusan INT DEFAULT 0;
	SET idTanggungan = new.id_jenis_tanggungan;
	
	SELECT COUNT(*) INTO @count_jurusan FROM jurusan;
	SELECT COUNT(*) INTO @count_kelas FROM kelas;
	
	WHILE idJurusan < @count_jurusan DO
		SELECT id_jurusan INTO @jurusan FROM jurusan LIMIT idJurusan, 1;
		
		WHILE idKelas < @count_kelas DO
			SELECT id_kelas INTO @kelas FROM kelas LIMIT idKelas, 1;
			
			INSERT INTO tanggungan (jenis_tanggungan, kelas, jurusan) VALUES (idTanggungan, @kelas, @jurusan);
			
			SET idKelas = idKelas + 1;
		END WHILE;
		
		SET idKelas = 0;
		SET idJurusan = idJurusan + 1;
	END WHILE;
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'MIPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkatan_kelas` int(11) NOT NULL,
  `nomor_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `tingkatan_kelas`, `nomor_kelas`) VALUES
(1, 10, 1),
(2, 10, 2),
(3, 10, 3),
(4, 10, 4),
(5, 10, 5),
(6, 10, 6),
(7, 10, 7),
(8, 10, 8),
(9, 10, 9),
(10, 10, 10),
(11, 11, 1),
(12, 11, 2),
(13, 11, 3),
(14, 11, 4),
(15, 11, 5),
(16, 11, 6),
(17, 11, 7),
(18, 11, 8),
(19, 11, 9),
(20, 11, 10),
(21, 12, 1),
(22, 12, 2),
(23, 12, 3),
(24, 12, 4),
(25, 12, 5),
(26, 12, 6),
(27, 12, 7),
(28, 12, 8),
(29, 12, 9),
(30, 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level_user`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `nomor_kelas`
--

CREATE TABLE `nomor_kelas` (
  `id_nomor_kelas` int(11) NOT NULL,
  `nomor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nomor_kelas`
--

INSERT INTO `nomor_kelas` (`id_nomor_kelas`, `nomor`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `parent_phone`
--

CREATE TABLE `parent_phone` (
  `id_parent_phone` int(11) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_spp`
--

CREATE TABLE `pembayaran_spp` (
  `id_pembayaran_spp` int(20) NOT NULL,
  `detail_spp` int(20) NOT NULL,
  `no_kwitansi` int(20) NOT NULL,
  `user` int(11) NOT NULL,
  `nominal_pembayaran` int(11) NOT NULL,
  `waktu_pembayaran` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`id_pembayaran_spp`, `detail_spp`, `no_kwitansi`, `user`, `nominal_pembayaran`, `waktu_pembayaran`) VALUES
(1, 1, 3242356, 1, 123000, '2021-07-15 18:09:08'),
(2, 2, 4235566, 1, 123000, '2021-07-15 18:09:27'),
(3, 3, 839295, 2, 123000, '2021-07-19 02:29:57'),
(4, 37, 719739, 3, 123000, '2021-07-26 17:40:36'),
(5, 38, 186782, 3, 123000, '2021-07-26 17:40:45'),
(6, 39, 945784, 3, 123000, '2021-07-26 17:40:53'),
(7, 40, 515604, 3, 123000, '2021-07-26 17:41:03'),
(8, 41, 170941, 3, 123000, '2021-07-26 17:41:10'),
(9, 4, 227560, 3, 123000, '2021-07-26 17:52:37'),
(10, 5, 771713, 3, 123000, '2021-07-26 17:52:50');

--
-- Triggers `pembayaran_spp`
--
DELIMITER $$
CREATE TRIGGER `tambah_pembayaran_spp` AFTER INSERT ON `pembayaran_spp` FOR EACH ROW BEGIN
	
	declare _status int default 0;
	SELECT siswa INTO @id_siswa FROM `detail_spp` WHERE `id_detail_spp` = new.detail_spp;
	select selisih_spp into @selisih from detail_spp where `id_detail_spp` = new.detail_spp;
	
	if new.nominal_pembayaran < @selisih then 
		set _status = 2;
	else
		SET _status = 1;
	end if;
	
	insert into riwayat 
	values (null, @id_siswa, 'Membayar SPP', 1, NULL, new.id_pembayaran_spp);
	
	UPDATE `detail_spp` SET `selisih_spp` = `selisih_spp` - new.`nominal_pembayaran`, status_bayar = _status
	WHERE `id_detail_spp` = new.detail_spp;
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_tanggungan`
--

CREATE TABLE `pembayaran_tanggungan` (
  `id_pembayaran_tanggungan` int(11) NOT NULL,
  `detail_tanggungan` int(11) NOT NULL,
  `no_kwitansi` int(10) NOT NULL,
  `user` int(11) NOT NULL,
  `nominal_pembayaran` int(11) NOT NULL,
  `waktu_bayar` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran_tanggungan`
--

INSERT INTO `pembayaran_tanggungan` (`id_pembayaran_tanggungan`, `detail_tanggungan`, `no_kwitansi`, `user`, `nominal_pembayaran`, `waktu_bayar`) VALUES
(1, 1, 195089, 2, 500000, '2021-07-19 02:31:01'),
(2, 1, 707552, 2, 210000, '2021-07-19 02:32:06'),
(3, 4, 846004, 3, 710000, '2021-07-26 17:50:05'),
(4, 5, 489755, 3, 600000, '2021-07-26 17:51:05'),
(5, 2, 495712, 3, 500000, '2021-07-26 17:53:57');

--
-- Triggers `pembayaran_tanggungan`
--
DELIMITER $$
CREATE TRIGGER `tambah_pembayaran_tanggungan` AFTER INSERT ON `pembayaran_tanggungan` FOR EACH ROW BEGIN
    
	declare _status int default 0;
	select siswa into @id_siswa from `detail_tanggungan` where `id_detail_tanggungan` = new.detail_tanggungan;
	SELECT selisih_tanggungan INTO @selisih FROM detail_tanggungan WHERE `id_detail_tanggungan` = new.detail_tanggungan;
	
	IF new.nominal_pembayaran < @selisih THEN 
		SET _status = 2;
	ELSE
		SET _status = 1;
	END IF;
	
	INSERT INTO `riwayat` 
	values ( null, @id_siswa, 'Membayar tanggungan', 2, new.id_pembayaran_tanggungan, null );
	
	update `detail_tanggungan` set `selisih_tanggungan` = `selisih_tanggungan` - new.`nominal_pembayaran`, status_bayar = _status
	where `id_detail_tanggungan` = new.detail_tanggungan;
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `phone_sms_gateway`
--

CREATE TABLE `phone_sms_gateway` (
  `id_phone_sms_gateway` int(11) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(20) NOT NULL,
  `siswa` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tipe_riwayat` int(11) NOT NULL,
  `pembayaran_tanggungan` int(11) DEFAULT NULL,
  `pembayaran_spp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `siswa`, `keterangan`, `tipe_riwayat`, `pembayaran_tanggungan`, `pembayaran_spp`) VALUES
(1, 1, 'Membayar SPP', 1, NULL, 1),
(2, 1, 'Membayar SPP', 1, NULL, 2),
(3, 1, 'Membayar SPP', 1, NULL, 3),
(4, 1, 'Membayar tanggungan', 2, 1, NULL),
(5, 1, 'Membayar tanggungan', 2, 2, NULL),
(6, 3, 'Membayar SPP', 1, NULL, 4),
(7, 3, 'Membayar SPP', 1, NULL, 5),
(8, 3, 'Membayar SPP', 1, NULL, 6),
(9, 3, 'Membayar SPP', 1, NULL, 7),
(10, 3, 'Membayar SPP', 1, NULL, 8),
(11, 2, 'Membayar tanggungan', 2, 3, NULL),
(12, 2, 'Membayar tanggungan', 2, 4, NULL),
(13, 1, 'Membayar SPP', 1, NULL, 9),
(14, 1, 'Membayar SPP', 1, NULL, 10),
(15, 1, 'Membayar tanggungan', 2, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jk` varchar(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `tahun_masuk` date NOT NULL,
  `tipe_siswa` int(11) NOT NULL,
  `random_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nisn`, `nama`, `kelas`, `jurusan`, `nohp`, `tanggal_lahir`, `jk`, `foto`, `tahun_masuk`, `tipe_siswa`, `random_code`) VALUES
(1, '77432', '123456789101', 'Denis', 21, 1, '085236397420', '2002-08-09', 'L', 'd.jpg', '2018-07-10', 1, ''),
(2, '12345', '1234567890', 'dila', 24, 1, NULL, NULL, 'u', 'Default.jpg', '2021-07-01', 2, ''),
(3, '67890', '2345678901', 'ica', 24, 1, NULL, NULL, 'u', 'Default.jpg', '2021-07-02', 2, '');

--
-- Triggers `siswa`
--
DELIMITER $$
CREATE TRIGGER `tambah_siswa` AFTER INSERT ON `siswa` FOR EACH ROW BEGIN
    
	/* DECLARATION */
	DECLARE rows_number_tanggungan INT DEFAULT 0;
	DECLARE rows_number_spp INT DEFAULT 0;
	declare bulan_masuk int default MONTH(new.tahun_masuk);
	declare inc int default 0;
	SELECT jurusan INTO @jurusan FROM siswa WHERE id_siswa = new.id_siswa;
	SELECT kelas INTO @kelas FROM siswa WHERE id_siswa = new.id_siswa;
	SELECT tingkatan_kelas INTO @tingkatan FROM kelas WHERE id_kelas = @kelas;
	
	
	/* TANGGUNGAN */
	select count(id_jenis_tanggungan) into @count from jenis_tanggungan where new.tahun_masuk BETWEEN awal_aktif_tanggungan AND akhir_aktif_tanggungan;
	
	WHILE rows_number_tanggungan < @count DO
			
		SELECT jangka_waktu INTO @jangka 
		FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan
		WHERE t.kelas = @kelas AND t.jurusan = @jurusan 
		LIMIT rows_number_tanggungan, 1;
	
		if @tingkatan = 10 then
	
			SELECT nominal_kls_10 INTO @nominal FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan 
			WHERE t.kelas = @kelas AND t.jurusan = @jurusan AND new.tahun_masuk BETWEEN jt.awal_aktif_tanggungan AND jt.akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			SELECT id_tanggungan INTO @tanggungan FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan 
			WHERE t.kelas = @kelas AND t.jurusan = @jurusan and new.tahun_masuk between jt.awal_aktif_tanggungan and jt.akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			INSERT INTO detail_tanggungan (tanggungan, siswa, selisih_tanggungan) VALUES (
				(@tanggungan),
				new.id_siswa,
				(@nominal)
			);
			
		elseif @tingkatan = 11 then
		
			SELECT nominal_kls_11 INTO @nominal FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan 
			WHERE t.kelas = @kelas AND t.jurusan = @jurusan AND new.tahun_masuk BETWEEN jt.awal_aktif_tanggungan AND jt.akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			SELECT id_tanggungan INTO @tanggungan FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan 
			WHERE t.kelas = @kelas AND t.jurusan = @jurusan AND new.tahun_masuk BETWEEN jt.awal_aktif_tanggungan AND jt.akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			if @jangka = 1 then 
						
				INSERT INTO detail_tanggungan (tanggungan, siswa, selisih_tanggungan) VALUES (
					(@tanggungan),
					new.id_siswa,
					(@nominal)
				);
			
			elseif @jangka = 3 then 
			
				SELECT nominal_kls_10 INTO @nominal FROM jenis_tanggungan LIMIT rows_number_tanggungan, 1;
			
				INSERT INTO detail_tanggungan (tanggungan, siswa, selisih_tanggungan) VALUES (
					(@tanggungan),
					new.id_siswa,
					(@nominal)
				);
			
			end if;
			
		elseif @tingkatan = 12 then
		
			SELECT nominal_kls_12 INTO @nominal FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan 
			WHERE t.kelas = @kelas AND t.jurusan = @jurusan AND new.tahun_masuk BETWEEN jt.awal_aktif_tanggungan AND jt.akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			SELECT id_tanggungan INTO @tanggungan FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan 
			WHERE t.kelas = @kelas AND t.jurusan = @jurusan AND new.tahun_masuk BETWEEN jt.awal_aktif_tanggungan AND jt.akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			if @jangka = 1 then
			
				INSERT INTO detail_tanggungan (tanggungan, siswa, selisih_tanggungan) VALUES (
					(@tanggungan),
					new.id_siswa,
					(@nominal)
				);
			
			end if;
			
		end if;
		
		SET rows_number_tanggungan = rows_number_tanggungan + 1;
		
	END WHILE;
	
	
	/* SPP */
	if bulan_masuk >= 1 and bulan_masuk <= 6 then
		set inc = 1;
	end if;
	
	SELECT nominal_spp INTO @nominal_spp FROM spp WHERE tahun = (YEAR(new.tahun_masuk) - inc);
	
	SELECT id_spp INTO @id_spp FROM spp WHERE tahun = (YEAR(new.tahun_masuk) - inc);
	
	SELECT id_data_spp INTO @data_spp FROM data_spp dt 
	WHERE dt.kelas = @kelas AND dt.jurusan = @jurusan and dt.spp = @id_spp;
	
	select count(*) into @spp_count from spp where tahun = (YEAR(new.tahun_masuk) - inc);
	
	if @spp_count > 0 then
	
		if bulan_masuk >=7 and bulan_masuk <=12 then
			
			set bulan_masuk = bulan_masuk - 6;
			
		end if;
		
		set rows_number_spp = bulan_masuk - 1;
	
		WHILE rows_number_spp < 12 DO
			
			INSERT INTO detail_spp (data_spp, siswa, bulan, tahun, selisih_spp) VALUES (
				@data_spp, 
				new.id_siswa,
				(rows_number_spp + 1),
				(YEAR(new.tahun_masuk) - inc),
				@nominal_spp
			);
			
			SET rows_number_spp = rows_number_spp + 1;
			
		END WHILE;
	
	end if;
	
    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ubah_siswa` AFTER UPDATE ON `siswa` FOR EACH ROW BEGIN
	
	/* DECLARATION */
	DECLARE rows_number_tanggungan INT DEFAULT 0;
	DECLARE rows_number_spp INT DEFAULT 0;
	SELECT jurusan INTO @jurusan FROM siswa WHERE id_siswa = old.id_siswa;
	SELECT kelas INTO @kelas FROM siswa WHERE id_siswa = old.id_siswa;
	SELECT tingkatan_kelas INTO @tingkatan FROM kelas WHERE id_kelas = new.kelas;
	
	
	/* TANGGUNGAN */
	SELECT COUNT(id_jenis_tanggungan) INTO @count FROM jenis_tanggungan WHERE old.tahun_masuk BETWEEN awal_aktif_tanggungan AND akhir_aktif_tanggungan;
	
	if new.kelas > old.kelas and new.tipe_siswa = old.tipe_siswa then
		WHILE rows_number_tanggungan < @count DO
		
			SELECT id_jenis_tanggungan into @id_jenis_tanggungan
			FROM jenis_tanggungan WHERE old.tahun_masuk BETWEEN awal_aktif_tanggungan AND akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			SELECT id_tanggungan INTO @tanggungan 
			FROM tanggungan t INNER JOIN jenis_tanggungan jt ON t.jenis_tanggungan = jt.id_jenis_tanggungan
			WHERE t.kelas = new.kelas AND t.jurusan = @jurusan
			and old.tahun_masuk BETWEEN awal_aktif_tanggungan AND akhir_aktif_tanggungan LIMIT rows_number_tanggungan, 1;
			
			SELECT jangka_waktu INTO @jangka FROM jenis_tanggungan 
			where old.tahun_masuk BETWEEN awal_aktif_tanggungan AND akhir_aktif_tanggungan
			LIMIT rows_number_tanggungan, 1;
			
			SELECT id_tanggungan INTO @id_tanggungan FROM tanggungan
			WHERE kelas = old.kelas AND jenis_tanggungan = @id_jenis_tanggungan AND jurusan = @jurusan;
	
			if @tingkatan = 11 then
					
				if @jangka = 1 then
			
					SELECT nominal_kls_11 INTO @nominal FROM jenis_tanggungan WHERE jangka_waktu = @jangka
					and id_jenis_tanggungan = @id_jenis_tanggungan 
					LIMIT rows_number_tanggungan, 1;
					INSERT INTO detail_tanggungan (tanggungan, siswa, selisih_tanggungan) VALUES (
						(@tanggungan),
						new.id_siswa,
						(@nominal)
					);
				
				ELSEIF @jangka = 2 THEN
				
				
					SELECT id_detail_tanggungan INTO @id_detail_tanggungan FROM detail_tanggungan
					WHERE tanggungan = @id_tanggungan AND siswa = old.id_siswa;
				
					UPDATE detail_tanggungan SET tanggungan = @tanggungan WHERE id_detail_tanggungan = @id_detail_tanggungan;
				
				elseif @jangka = 3 then
					
					SELECT id_detail_tanggungan INTO @id_detail_tanggungan FROM detail_tanggungan
					WHERE tanggungan = @id_tanggungan AND siswa = old.id_siswa;
				
					update detail_tanggungan set tanggungan = @tanggungan where id_detail_tanggungan = @id_detail_tanggungan;
				end if;
				
			elseif @tingkatan = 12 THEN
					
				IF @jangka = 1 THEN
					SELECT nominal_kls_12 INTO @nominal FROM jenis_tanggungan WHERE jangka_waktu = @jangka
					and id_jenis_tanggungan = @id_jenis_tanggungan 
					LIMIT rows_number_tanggungan, 1;
					INSERT INTO detail_tanggungan (tanggungan, siswa, selisih_tanggungan) VALUES (
						(@tanggungan),
						new.id_siswa,
						(@nominal)
					);
					
				ELSEIF @jangka = 2 THEN
					SELECT id_detail_tanggungan INTO @id_detail_tanggungan FROM detail_tanggungan
					WHERE tanggungan = @id_tanggungan AND siswa = old.id_siswa;
							
					UPDATE detail_tanggungan SET tanggungan = @tanggungan WHERE id_detail_tanggungan = @id_detail_tanggungan;
				END IF;
			
			end if;
			
			SET rows_number_tanggungan = rows_number_tanggungan + 1;
			
		END WHILE;
		
	elseif new.kelas = old.kelas AND new.tipe_siswa = 2 then
		
		insert into alumni(siswa, waktu_lulus) values(old.id_siswa, now());
		
	ELSEIF new.kelas = old.kelas AND new.tipe_siswa = 3 THEN
		
		INSERT INTO drop_out(siswa, waktu_do) VALUES(old.id_siswa, NOW());
		
	end if;
	
	
	/* SPP */
	SELECT nominal_spp INTO @nominal_spp FROM spp WHERE tahun = YEAR(old.tahun_masuk);
	
	SELECT id_spp INTO @id_spp FROM spp WHERE tahun = Year(old.tahun_masuk);
	
	SELECT id_data_spp INTO @data_spp FROM data_spp dt 
	WHERE dt.kelas = @kelas AND dt.jurusan = @jurusan AND dt.spp = @id_spp;
	
	SELECT COUNT(*) INTO @spp_count FROM spp WHERE tahun = YEAR(old.tahun_masuk);
	
	IF @spp_count > 0 THEN
	
		IF new.kelas > old.kelas AND new.tipe_siswa = old.tipe_siswa THEN
		
			WHILE rows_number_spp < 12 DO
				
				INSERT INTO detail_spp (data_spp, siswa, bulan, tahun, selisih_spp) VALUES (
					@data_spp, 
					old.id_siswa,
					(rows_number_spp + 1),
					Year(old.tahun_masuk),
					@nominal_spp
				);
				
				SET rows_number_spp = rows_number_spp + 1;
				
			END WHILE;
		
		end if;
	
	end if;
	
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sms_gateway`
--

CREATE TABLE `sms_gateway` (
  `id_sms_gateway` int(11) NOT NULL,
  `phone_sms_gateway` int(11) NOT NULL,
  `parent_phone` int(11) NOT NULL,
  `message` text NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `nama_spp` varchar(100) NOT NULL,
  `nominal_spp` int(10) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `nama_spp`, `nominal_spp`, `tahun`) VALUES
(1, 'PSM Tahun 2018', 123000, 2018),
(2, 'PSM Tahun 2019', 123000, 2019),
(3, 'PSM Tahun 2020', 123000, 2020),
(4, 'PSM Tahun 2021', 123000, 2021);

--
-- Triggers `spp`
--
DELIMITER $$
CREATE TRIGGER `tambah_spp` AFTER INSERT ON `spp` FOR EACH ROW BEGIN
	declare idSpp int default 0;
	declare idKelas int default 0; 
	declare idJurusan int default 0;
	set idSpp = new.id_spp;
	
	SELECT COUNT(*) INTO @count_jurusan FROM jurusan;
	SELECT COUNT(*) INTO @count_kelas FROM kelas;
	
	while idJurusan < @count_jurusan do
		select id_jurusan into @jurusan from jurusan limit idJurusan, 1;
		
		while idKelas < @count_kelas do
			SELECT id_kelas INTO @kelas FROM kelas LIMIT idKelas, 1;
			
			insert into data_spp (spp, kelas, jurusan) values (idSpp, @kelas, @jurusan);
			
			set idKelas = idKelas + 1;
		end while;
		
		SET idKelas = 0;
		set idJurusan = idJurusan + 1;
	end while;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `status_bayar`
--

CREATE TABLE `status_bayar` (
  `id_status_bayar` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_bayar`
--

INSERT INTO `status_bayar` (`id_status_bayar`, `status`) VALUES
(1, 'Lunas'),
(2, 'Belum Lunas'),
(3, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `tanggungan`
--

CREATE TABLE `tanggungan` (
  `id_tanggungan` int(11) NOT NULL,
  `jenis_tanggungan` int(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggungan`
--

INSERT INTO `tanggungan` (`id_tanggungan`, `jenis_tanggungan`, `kelas`, `jurusan`) VALUES
(1, 1, 1, 1),
(2, 1, 11, 1),
(3, 1, 21, 1),
(4, 1, 2, 1),
(5, 1, 12, 1),
(6, 1, 22, 1),
(7, 1, 3, 1),
(8, 1, 13, 1),
(9, 1, 23, 1),
(10, 1, 4, 1),
(11, 1, 14, 1),
(12, 1, 24, 1),
(13, 1, 5, 1),
(14, 1, 15, 1),
(15, 1, 25, 1),
(16, 1, 6, 1),
(17, 1, 16, 1),
(18, 1, 26, 1),
(19, 1, 7, 1),
(20, 1, 17, 1),
(21, 1, 27, 1),
(22, 1, 8, 1),
(23, 1, 18, 1),
(24, 1, 28, 1),
(25, 1, 9, 1),
(26, 1, 19, 1),
(27, 1, 29, 1),
(28, 1, 10, 1),
(29, 1, 20, 1),
(30, 1, 30, 1),
(31, 1, 1, 2),
(32, 1, 11, 2),
(33, 1, 21, 2),
(34, 1, 2, 2),
(35, 1, 12, 2),
(36, 1, 22, 2),
(37, 1, 3, 2),
(38, 1, 13, 2),
(39, 1, 23, 2),
(40, 1, 4, 2),
(41, 1, 14, 2),
(42, 1, 24, 2),
(43, 1, 5, 2),
(44, 1, 15, 2),
(45, 1, 25, 2),
(46, 1, 6, 2),
(47, 1, 16, 2),
(48, 1, 26, 2),
(49, 1, 7, 2),
(50, 1, 17, 2),
(51, 1, 27, 2),
(52, 1, 8, 2),
(53, 1, 18, 2),
(54, 1, 28, 2),
(55, 1, 9, 2),
(56, 1, 19, 2),
(57, 1, 29, 2),
(58, 1, 10, 2),
(59, 1, 20, 2),
(60, 1, 30, 2),
(61, 2, 1, 1),
(62, 2, 11, 1),
(63, 2, 21, 1),
(64, 2, 2, 1),
(65, 2, 12, 1),
(66, 2, 22, 1),
(67, 2, 3, 1),
(68, 2, 13, 1),
(69, 2, 23, 1),
(70, 2, 4, 1),
(71, 2, 14, 1),
(72, 2, 24, 1),
(73, 2, 5, 1),
(74, 2, 15, 1),
(75, 2, 25, 1),
(76, 2, 6, 1),
(77, 2, 16, 1),
(78, 2, 26, 1),
(79, 2, 7, 1),
(80, 2, 17, 1),
(81, 2, 27, 1),
(82, 2, 8, 1),
(83, 2, 18, 1),
(84, 2, 28, 1),
(85, 2, 9, 1),
(86, 2, 19, 1),
(87, 2, 29, 1),
(88, 2, 10, 1),
(89, 2, 20, 1),
(90, 2, 30, 1),
(91, 2, 1, 2),
(92, 2, 11, 2),
(93, 2, 21, 2),
(94, 2, 2, 2),
(95, 2, 12, 2),
(96, 2, 22, 2),
(97, 2, 3, 2),
(98, 2, 13, 2),
(99, 2, 23, 2),
(100, 2, 4, 2),
(101, 2, 14, 2),
(102, 2, 24, 2),
(103, 2, 5, 2),
(104, 2, 15, 2),
(105, 2, 25, 2),
(106, 2, 6, 2),
(107, 2, 16, 2),
(108, 2, 26, 2),
(109, 2, 7, 2),
(110, 2, 17, 2),
(111, 2, 27, 2),
(112, 2, 8, 2),
(113, 2, 18, 2),
(114, 2, 28, 2),
(115, 2, 9, 2),
(116, 2, 19, 2),
(117, 2, 29, 2),
(118, 2, 10, 2),
(119, 2, 20, 2),
(120, 2, 30, 2),
(121, 3, 1, 1),
(122, 3, 11, 1),
(123, 3, 21, 1),
(124, 3, 2, 1),
(125, 3, 12, 1),
(126, 3, 22, 1),
(127, 3, 3, 1),
(128, 3, 13, 1),
(129, 3, 23, 1),
(130, 3, 4, 1),
(131, 3, 14, 1),
(132, 3, 24, 1),
(133, 3, 5, 1),
(134, 3, 15, 1),
(135, 3, 25, 1),
(136, 3, 6, 1),
(137, 3, 16, 1),
(138, 3, 26, 1),
(139, 3, 7, 1),
(140, 3, 17, 1),
(141, 3, 27, 1),
(142, 3, 8, 1),
(143, 3, 18, 1),
(144, 3, 28, 1),
(145, 3, 9, 1),
(146, 3, 19, 1),
(147, 3, 29, 1),
(148, 3, 10, 1),
(149, 3, 20, 1),
(150, 3, 30, 1),
(151, 3, 1, 2),
(152, 3, 11, 2),
(153, 3, 21, 2),
(154, 3, 2, 2),
(155, 3, 12, 2),
(156, 3, 22, 2),
(157, 3, 3, 2),
(158, 3, 13, 2),
(159, 3, 23, 2),
(160, 3, 4, 2),
(161, 3, 14, 2),
(162, 3, 24, 2),
(163, 3, 5, 2),
(164, 3, 15, 2),
(165, 3, 25, 2),
(166, 3, 6, 2),
(167, 3, 16, 2),
(168, 3, 26, 2),
(169, 3, 7, 2),
(170, 3, 17, 2),
(171, 3, 27, 2),
(172, 3, 8, 2),
(173, 3, 18, 2),
(174, 3, 28, 2),
(175, 3, 9, 2),
(176, 3, 19, 2),
(177, 3, 29, 2),
(178, 3, 10, 2),
(179, 3, 20, 2),
(180, 3, 30, 2),
(181, 4, 1, 1),
(182, 4, 11, 1),
(183, 4, 21, 1),
(184, 4, 2, 1),
(185, 4, 12, 1),
(186, 4, 22, 1),
(187, 4, 3, 1),
(188, 4, 13, 1),
(189, 4, 23, 1),
(190, 4, 4, 1),
(191, 4, 14, 1),
(192, 4, 24, 1),
(193, 4, 5, 1),
(194, 4, 15, 1),
(195, 4, 25, 1),
(196, 4, 6, 1),
(197, 4, 16, 1),
(198, 4, 26, 1),
(199, 4, 7, 1),
(200, 4, 17, 1),
(201, 4, 27, 1),
(202, 4, 8, 1),
(203, 4, 18, 1),
(204, 4, 28, 1),
(205, 4, 9, 1),
(206, 4, 19, 1),
(207, 4, 29, 1),
(208, 4, 10, 1),
(209, 4, 20, 1),
(210, 4, 30, 1),
(211, 4, 1, 2),
(212, 4, 11, 2),
(213, 4, 21, 2),
(214, 4, 2, 2),
(215, 4, 12, 2),
(216, 4, 22, 2),
(217, 4, 3, 2),
(218, 4, 13, 2),
(219, 4, 23, 2),
(220, 4, 4, 2),
(221, 4, 14, 2),
(222, 4, 24, 2),
(223, 4, 5, 2),
(224, 4, 15, 2),
(225, 4, 25, 2),
(226, 4, 6, 2),
(227, 4, 16, 2),
(228, 4, 26, 2),
(229, 4, 7, 2),
(230, 4, 17, 2),
(231, 4, 27, 2),
(232, 4, 8, 2),
(233, 4, 18, 2),
(234, 4, 28, 2),
(235, 4, 9, 2),
(236, 4, 19, 2),
(237, 4, 29, 2),
(238, 4, 10, 2),
(239, 4, 20, 2),
(240, 4, 30, 2),
(241, 5, 1, 1),
(242, 5, 11, 1),
(243, 5, 21, 1),
(244, 5, 2, 1),
(245, 5, 12, 1),
(246, 5, 22, 1),
(247, 5, 3, 1),
(248, 5, 13, 1),
(249, 5, 23, 1),
(250, 5, 4, 1),
(251, 5, 14, 1),
(252, 5, 24, 1),
(253, 5, 5, 1),
(254, 5, 15, 1),
(255, 5, 25, 1),
(256, 5, 6, 1),
(257, 5, 16, 1),
(258, 5, 26, 1),
(259, 5, 7, 1),
(260, 5, 17, 1),
(261, 5, 27, 1),
(262, 5, 8, 1),
(263, 5, 18, 1),
(264, 5, 28, 1),
(265, 5, 9, 1),
(266, 5, 19, 1),
(267, 5, 29, 1),
(268, 5, 10, 1),
(269, 5, 20, 1),
(270, 5, 30, 1),
(271, 5, 1, 2),
(272, 5, 11, 2),
(273, 5, 21, 2),
(274, 5, 2, 2),
(275, 5, 12, 2),
(276, 5, 22, 2),
(277, 5, 3, 2),
(278, 5, 13, 2),
(279, 5, 23, 2),
(280, 5, 4, 2),
(281, 5, 14, 2),
(282, 5, 24, 2),
(283, 5, 5, 2),
(284, 5, 15, 2),
(285, 5, 25, 2),
(286, 5, 6, 2),
(287, 5, 16, 2),
(288, 5, 26, 2),
(289, 5, 7, 2),
(290, 5, 17, 2),
(291, 5, 27, 2),
(292, 5, 8, 2),
(293, 5, 18, 2),
(294, 5, 28, 2),
(295, 5, 9, 2),
(296, 5, 19, 2),
(297, 5, 29, 2),
(298, 5, 10, 2),
(299, 5, 20, 2),
(300, 5, 30, 2),
(301, 6, 1, 1),
(302, 6, 11, 1),
(303, 6, 21, 1),
(304, 6, 2, 1),
(305, 6, 12, 1),
(306, 6, 22, 1),
(307, 6, 3, 1),
(308, 6, 13, 1),
(309, 6, 23, 1),
(310, 6, 4, 1),
(311, 6, 14, 1),
(312, 6, 24, 1),
(313, 6, 5, 1),
(314, 6, 15, 1),
(315, 6, 25, 1),
(316, 6, 6, 1),
(317, 6, 16, 1),
(318, 6, 26, 1),
(319, 6, 7, 1),
(320, 6, 17, 1),
(321, 6, 27, 1),
(322, 6, 8, 1),
(323, 6, 18, 1),
(324, 6, 28, 1),
(325, 6, 9, 1),
(326, 6, 19, 1),
(327, 6, 29, 1),
(328, 6, 10, 1),
(329, 6, 20, 1),
(330, 6, 30, 1),
(331, 6, 1, 2),
(332, 6, 11, 2),
(333, 6, 21, 2),
(334, 6, 2, 2),
(335, 6, 12, 2),
(336, 6, 22, 2),
(337, 6, 3, 2),
(338, 6, 13, 2),
(339, 6, 23, 2),
(340, 6, 4, 2),
(341, 6, 14, 2),
(342, 6, 24, 2),
(343, 6, 5, 2),
(344, 6, 15, 2),
(345, 6, 25, 2),
(346, 6, 6, 2),
(347, 6, 16, 2),
(348, 6, 26, 2),
(349, 6, 7, 2),
(350, 6, 17, 2),
(351, 6, 27, 2),
(352, 6, 8, 2),
(353, 6, 18, 2),
(354, 6, 28, 2),
(355, 6, 9, 2),
(356, 6, 19, 2),
(357, 6, 29, 2),
(358, 6, 10, 2),
(359, 6, 20, 2),
(360, 6, 30, 2),
(361, 7, 1, 1),
(362, 7, 11, 1),
(363, 7, 21, 1),
(364, 7, 2, 1),
(365, 7, 12, 1),
(366, 7, 22, 1),
(367, 7, 3, 1),
(368, 7, 13, 1),
(369, 7, 23, 1),
(370, 7, 4, 1),
(371, 7, 14, 1),
(372, 7, 24, 1),
(373, 7, 5, 1),
(374, 7, 15, 1),
(375, 7, 25, 1),
(376, 7, 6, 1),
(377, 7, 16, 1),
(378, 7, 26, 1),
(379, 7, 7, 1),
(380, 7, 17, 1),
(381, 7, 27, 1),
(382, 7, 8, 1),
(383, 7, 18, 1),
(384, 7, 28, 1),
(385, 7, 9, 1),
(386, 7, 19, 1),
(387, 7, 29, 1),
(388, 7, 10, 1),
(389, 7, 20, 1),
(390, 7, 30, 1),
(391, 7, 1, 2),
(392, 7, 11, 2),
(393, 7, 21, 2),
(394, 7, 2, 2),
(395, 7, 12, 2),
(396, 7, 22, 2),
(397, 7, 3, 2),
(398, 7, 13, 2),
(399, 7, 23, 2),
(400, 7, 4, 2),
(401, 7, 14, 2),
(402, 7, 24, 2),
(403, 7, 5, 2),
(404, 7, 15, 2),
(405, 7, 25, 2),
(406, 7, 6, 2),
(407, 7, 16, 2),
(408, 7, 26, 2),
(409, 7, 7, 2),
(410, 7, 17, 2),
(411, 7, 27, 2),
(412, 7, 8, 2),
(413, 7, 18, 2),
(414, 7, 28, 2),
(415, 7, 9, 2),
(416, 7, 19, 2),
(417, 7, 29, 2),
(418, 7, 10, 2),
(419, 7, 20, 2),
(420, 7, 30, 2),
(421, 8, 1, 1),
(422, 8, 11, 1),
(423, 8, 21, 1),
(424, 8, 2, 1),
(425, 8, 12, 1),
(426, 8, 22, 1),
(427, 8, 3, 1),
(428, 8, 13, 1),
(429, 8, 23, 1),
(430, 8, 4, 1),
(431, 8, 14, 1),
(432, 8, 24, 1),
(433, 8, 5, 1),
(434, 8, 15, 1),
(435, 8, 25, 1),
(436, 8, 6, 1),
(437, 8, 16, 1),
(438, 8, 26, 1),
(439, 8, 7, 1),
(440, 8, 17, 1),
(441, 8, 27, 1),
(442, 8, 8, 1),
(443, 8, 18, 1),
(444, 8, 28, 1),
(445, 8, 9, 1),
(446, 8, 19, 1),
(447, 8, 29, 1),
(448, 8, 10, 1),
(449, 8, 20, 1),
(450, 8, 30, 1),
(451, 8, 1, 2),
(452, 8, 11, 2),
(453, 8, 21, 2),
(454, 8, 2, 2),
(455, 8, 12, 2),
(456, 8, 22, 2),
(457, 8, 3, 2),
(458, 8, 13, 2),
(459, 8, 23, 2),
(460, 8, 4, 2),
(461, 8, 14, 2),
(462, 8, 24, 2),
(463, 8, 5, 2),
(464, 8, 15, 2),
(465, 8, 25, 2),
(466, 8, 6, 2),
(467, 8, 16, 2),
(468, 8, 26, 2),
(469, 8, 7, 2),
(470, 8, 17, 2),
(471, 8, 27, 2),
(472, 8, 8, 2),
(473, 8, 18, 2),
(474, 8, 28, 2),
(475, 8, 9, 2),
(476, 8, 19, 2),
(477, 8, 29, 2),
(478, 8, 10, 2),
(479, 8, 20, 2),
(480, 8, 30, 2),
(481, 9, 1, 1),
(482, 9, 11, 1),
(483, 9, 21, 1),
(484, 9, 2, 1),
(485, 9, 12, 1),
(486, 9, 22, 1),
(487, 9, 3, 1),
(488, 9, 13, 1),
(489, 9, 23, 1),
(490, 9, 4, 1),
(491, 9, 14, 1),
(492, 9, 24, 1),
(493, 9, 5, 1),
(494, 9, 15, 1),
(495, 9, 25, 1),
(496, 9, 6, 1),
(497, 9, 16, 1),
(498, 9, 26, 1),
(499, 9, 7, 1),
(500, 9, 17, 1),
(501, 9, 27, 1),
(502, 9, 8, 1),
(503, 9, 18, 1),
(504, 9, 28, 1),
(505, 9, 9, 1),
(506, 9, 19, 1),
(507, 9, 29, 1),
(508, 9, 10, 1),
(509, 9, 20, 1),
(510, 9, 30, 1),
(511, 9, 1, 2),
(512, 9, 11, 2),
(513, 9, 21, 2),
(514, 9, 2, 2),
(515, 9, 12, 2),
(516, 9, 22, 2),
(517, 9, 3, 2),
(518, 9, 13, 2),
(519, 9, 23, 2),
(520, 9, 4, 2),
(521, 9, 14, 2),
(522, 9, 24, 2),
(523, 9, 5, 2),
(524, 9, 15, 2),
(525, 9, 25, 2),
(526, 9, 6, 2),
(527, 9, 16, 2),
(528, 9, 26, 2),
(529, 9, 7, 2),
(530, 9, 17, 2),
(531, 9, 27, 2),
(532, 9, 8, 2),
(533, 9, 18, 2),
(534, 9, 28, 2),
(535, 9, 9, 2),
(536, 9, 19, 2),
(537, 9, 29, 2),
(538, 9, 10, 2),
(539, 9, 20, 2),
(540, 9, 30, 2),
(541, 10, 1, 1),
(542, 10, 11, 1),
(543, 10, 21, 1),
(544, 10, 2, 1),
(545, 10, 12, 1),
(546, 10, 22, 1),
(547, 10, 3, 1),
(548, 10, 13, 1),
(549, 10, 23, 1),
(550, 10, 4, 1),
(551, 10, 14, 1),
(552, 10, 24, 1),
(553, 10, 5, 1),
(554, 10, 15, 1),
(555, 10, 25, 1),
(556, 10, 6, 1),
(557, 10, 16, 1),
(558, 10, 26, 1),
(559, 10, 7, 1),
(560, 10, 17, 1),
(561, 10, 27, 1),
(562, 10, 8, 1),
(563, 10, 18, 1),
(564, 10, 28, 1),
(565, 10, 9, 1),
(566, 10, 19, 1),
(567, 10, 29, 1),
(568, 10, 10, 1),
(569, 10, 20, 1),
(570, 10, 30, 1),
(571, 10, 1, 2),
(572, 10, 11, 2),
(573, 10, 21, 2),
(574, 10, 2, 2),
(575, 10, 12, 2),
(576, 10, 22, 2),
(577, 10, 3, 2),
(578, 10, 13, 2),
(579, 10, 23, 2),
(580, 10, 4, 2),
(581, 10, 14, 2),
(582, 10, 24, 2),
(583, 10, 5, 2),
(584, 10, 15, 2),
(585, 10, 25, 2),
(586, 10, 6, 2),
(587, 10, 16, 2),
(588, 10, 26, 2),
(589, 10, 7, 2),
(590, 10, 17, 2),
(591, 10, 27, 2),
(592, 10, 8, 2),
(593, 10, 18, 2),
(594, 10, 28, 2),
(595, 10, 9, 2),
(596, 10, 19, 2),
(597, 10, 29, 2),
(598, 10, 10, 2),
(599, 10, 20, 2),
(600, 10, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_riwayat`
--

CREATE TABLE `tipe_riwayat` (
  `id_tipe_riwayat` int(11) NOT NULL,
  `jenis_riwayat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_riwayat`
--

INSERT INTO `tipe_riwayat` (`id_tipe_riwayat`, `jenis_riwayat`) VALUES
(1, 'SPP'),
(2, 'Tanggungan');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_siswa`
--

CREATE TABLE `tipe_siswa` (
  `id_tipe_siswa` int(11) NOT NULL,
  `tipe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_siswa`
--

INSERT INTO `tipe_siswa` (`id_tipe_siswa`, `tipe`) VALUES
(1, 'Siswa'),
(2, 'Alumni'),
(3, 'Drop Out');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(200) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `email_verified_at`, `token`, `created_at`, `updated_at`, `foto`, `level`) VALUES
(4, 'alif', 'alif@gmail.com', '$2y$10$FEHxFW4Bn5.MTTgjTmNZjejSlcfOhYhLxkfFJyIezwwKacmQkrvUO', NULL, NULL, '2021-07-27 04:25:09', '2021-07-27 04:25:09', 'admin.jpg', 2),
(5, 'admin', 'admin@gmail.com', '$2y$10$FhcZXt89gZb.mhrwvmb7x.mFLvPG.TLkH/rm4lXi5DIGJ8R3fHDri', NULL, NULL, NULL, NULL, 'admin.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`),
  ADD UNIQUE KEY `siswa` (`siswa`),
  ADD KEY `id_siswa` (`siswa`);

--
-- Indexes for table `data_spp`
--
ALTER TABLE `data_spp`
  ADD PRIMARY KEY (`id_data_spp`),
  ADD KEY `id_spp` (`spp`),
  ADD KEY `id_kelas` (`kelas`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indexes for table `data_template_excel`
--
ALTER TABLE `data_template_excel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_spp`
--
ALTER TABLE `detail_spp`
  ADD PRIMARY KEY (`id_detail_spp`),
  ADD KEY `data_spp` (`data_spp`),
  ADD KEY `siswa` (`siswa`),
  ADD KEY `status_bayar` (`status_bayar`);

--
-- Indexes for table `detail_tanggungan`
--
ALTER TABLE `detail_tanggungan`
  ADD PRIMARY KEY (`id_detail_tanggungan`),
  ADD KEY `id_tanggungan` (`tanggungan`),
  ADD KEY `siswa` (`siswa`),
  ADD KEY `status_bayar` (`status_bayar`);

--
-- Indexes for table `drop_out`
--
ALTER TABLE `drop_out`
  ADD PRIMARY KEY (`id_drop_out`),
  ADD UNIQUE KEY `siswa` (`siswa`);

--
-- Indexes for table `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  ADD PRIMARY KEY (`id_jangka_waktu`);

--
-- Indexes for table `jenis_tanggungan`
--
ALTER TABLE `jenis_tanggungan`
  ADD PRIMARY KEY (`id_jenis_tanggungan`),
  ADD KEY `jangka_waktu` (`jangka_waktu`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `nomor_kelas` (`nomor_kelas`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `nomor_kelas`
--
ALTER TABLE `nomor_kelas`
  ADD PRIMARY KEY (`id_nomor_kelas`);

--
-- Indexes for table `parent_phone`
--
ALTER TABLE `parent_phone`
  ADD PRIMARY KEY (`id_parent_phone`),
  ADD UNIQUE KEY `siswa` (`siswa`,`phone_number`);

--
-- Indexes for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`id_pembayaran_spp`),
  ADD KEY `id_user` (`user`),
  ADD KEY `detail_spp` (`detail_spp`);

--
-- Indexes for table `pembayaran_tanggungan`
--
ALTER TABLE `pembayaran_tanggungan`
  ADD PRIMARY KEY (`id_pembayaran_tanggungan`),
  ADD KEY `id_detail_tanggungan` (`detail_tanggungan`),
  ADD KEY `id_user` (`user`);

--
-- Indexes for table `phone_sms_gateway`
--
ALTER TABLE `phone_sms_gateway`
  ADD PRIMARY KEY (`id_phone_sms_gateway`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_siswa` (`siswa`),
  ADD KEY `id_tipe_riwayat` (`tipe_riwayat`),
  ADD KEY `id_pembayaran_tanggungan` (`pembayaran_tanggungan`),
  ADD KEY `id_pembayaran_spp` (`pembayaran_spp`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nis` (`nis`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD UNIQUE KEY `nohp` (`nohp`),
  ADD KEY `id_jurusan` (`jurusan`),
  ADD KEY `id_kelas` (`kelas`),
  ADD KEY `tipe_siswa` (`tipe_siswa`);

--
-- Indexes for table `sms_gateway`
--
ALTER TABLE `sms_gateway`
  ADD PRIMARY KEY (`id_sms_gateway`),
  ADD KEY `phone_sms_gateway` (`phone_sms_gateway`),
  ADD KEY `parent_phone` (`parent_phone`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD UNIQUE KEY `tahun` (`tahun`);

--
-- Indexes for table `status_bayar`
--
ALTER TABLE `status_bayar`
  ADD PRIMARY KEY (`id_status_bayar`);

--
-- Indexes for table `tanggungan`
--
ALTER TABLE `tanggungan`
  ADD PRIMARY KEY (`id_tanggungan`),
  ADD KEY `id_jenis_tanggungan` (`jenis_tanggungan`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `jurusan` (`jurusan`);

--
-- Indexes for table `tipe_riwayat`
--
ALTER TABLE `tipe_riwayat`
  ADD PRIMARY KEY (`id_tipe_riwayat`);

--
-- Indexes for table `tipe_siswa`
--
ALTER TABLE `tipe_siswa`
  ADD PRIMARY KEY (`id_tipe_siswa`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `level` (`level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_spp`
--
ALTER TABLE `data_spp`
  MODIFY `id_data_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `data_template_excel`
--
ALTER TABLE `data_template_excel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `detail_spp`
--
ALTER TABLE `detail_spp`
  MODIFY `id_detail_spp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `detail_tanggungan`
--
ALTER TABLE `detail_tanggungan`
  MODIFY `id_detail_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `drop_out`
--
ALTER TABLE `drop_out`
  MODIFY `id_drop_out` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jangka_waktu`
--
ALTER TABLE `jangka_waktu`
  MODIFY `id_jangka_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_tanggungan`
--
ALTER TABLE `jenis_tanggungan`
  MODIFY `id_jenis_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nomor_kelas`
--
ALTER TABLE `nomor_kelas`
  MODIFY `id_nomor_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `parent_phone`
--
ALTER TABLE `parent_phone`
  MODIFY `id_parent_phone` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  MODIFY `id_pembayaran_spp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran_tanggungan`
--
ALTER TABLE `pembayaran_tanggungan`
  MODIFY `id_pembayaran_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phone_sms_gateway`
--
ALTER TABLE `phone_sms_gateway`
  MODIFY `id_phone_sms_gateway` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sms_gateway`
--
ALTER TABLE `sms_gateway`
  MODIFY `id_sms_gateway` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_bayar`
--
ALTER TABLE `status_bayar`
  MODIFY `id_status_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tanggungan`
--
ALTER TABLE `tanggungan`
  MODIFY `id_tanggungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;

--
-- AUTO_INCREMENT for table `tipe_riwayat`
--
ALTER TABLE `tipe_riwayat`
  MODIFY `id_tipe_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe_siswa`
--
ALTER TABLE `tipe_siswa`
  MODIFY `id_tipe_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `data_spp`
--
ALTER TABLE `data_spp`
  ADD CONSTRAINT `data_spp_ibfk_2` FOREIGN KEY (`spp`) REFERENCES `spp` (`id_spp`),
  ADD CONSTRAINT `data_spp_ibfk_3` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `data_spp_ibfk_4` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `detail_spp`
--
ALTER TABLE `detail_spp`
  ADD CONSTRAINT `detail_spp_ibfk_1` FOREIGN KEY (`data_spp`) REFERENCES `data_spp` (`id_data_spp`),
  ADD CONSTRAINT `detail_spp_ibfk_2` FOREIGN KEY (`siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `detail_spp_ibfk_3` FOREIGN KEY (`status_bayar`) REFERENCES `status_bayar` (`id_status_bayar`);

--
-- Constraints for table `detail_tanggungan`
--
ALTER TABLE `detail_tanggungan`
  ADD CONSTRAINT `detail_tanggungan_ibfk_2` FOREIGN KEY (`tanggungan`) REFERENCES `tanggungan` (`id_tanggungan`),
  ADD CONSTRAINT `detail_tanggungan_ibfk_3` FOREIGN KEY (`siswa`) REFERENCES `siswa` (`id_siswa`),
  ADD CONSTRAINT `detail_tanggungan_ibfk_4` FOREIGN KEY (`status_bayar`) REFERENCES `status_bayar` (`id_status_bayar`);

--
-- Constraints for table `drop_out`
--
ALTER TABLE `drop_out`
  ADD CONSTRAINT `drop_out_ibfk_1` FOREIGN KEY (`siswa`) REFERENCES `siswa` (`id_siswa`);

--
-- Constraints for table `jenis_tanggungan`
--
ALTER TABLE `jenis_tanggungan`
  ADD CONSTRAINT `jenis_tanggungan_ibfk_1` FOREIGN KEY (`jangka_waktu`) REFERENCES `jangka_waktu` (`id_jangka_waktu`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nomor_kelas`) REFERENCES `nomor_kelas` (`id_nomor_kelas`);

--
-- Constraints for table `parent_phone`
--
ALTER TABLE `parent_phone`
  ADD CONSTRAINT `parent_phone_ibfk_1` FOREIGN KEY (`siswa`) REFERENCES `siswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
