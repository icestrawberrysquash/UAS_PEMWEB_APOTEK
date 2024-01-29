-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 02:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testmasuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin1', 'admin1', 'admin1'),
(2, 'admin1', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` text NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `keterangan`, `gambar`) VALUES
(3, '', '', ''),
(4, 'narkotika', 'Obat-obatan atau zat-zat yang termasuk psikotropika hanya dapat diperoleh dengan resep dokter. Mengingat efek yang ditimbulkan cukup berbahaya, janganlah mengonsumsinya tanpa pengawasan dari dokter karena jika penggunaannya tidak sesuai dapat berpotensi merusak organ-organ pada tubuh kita.', 'http://3.bp.blogspot.com/-SMX9aEgqTFw/VmmsSFjG8WI/AAAAAAAAAGk/Iza1f3bNLyE/s320/pharmanote-narkotika.jpg'),
(5, 'bahan baku', ' keterangan ', 'http://2.bp.blogspot.com/-tdZbiZdZVnY/VqrN7vX87YI/AAAAAAAAM_M/CHRJlNKgpIg/s1600/3.%2BBahan%2BBaku_1.jpg'),
(6, 'bahan baku', ' keterangan ', 'http://2.bp.blogspot.com/-tdZbiZdZVnY/VqrN7vX87YI/AAAAAAAAM_M/CHRJlNKgpIg/s1600/3.%2BBahan%2BBaku_1.jpg'),
(7, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(8, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(9, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(10, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(11, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(12, '', '', ''),
(13, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(14, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(15, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(16, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(17, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(18, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(19, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(20, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(21, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(22, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(23, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(24, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(25, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(26, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(27, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(28, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(29, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(30, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(31, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(32, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(33, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(34, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(35, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(36, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(37, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(38, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(39, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(40, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(41, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(42, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(43, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(44, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(45, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(46, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(47, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(48, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(49, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(50, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(51, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(52, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(53, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(54, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(55, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(56, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(57, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(58, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(59, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(60, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(61, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(62, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(63, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(64, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(65, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(66, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(67, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(68, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(69, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(70, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(71, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(72, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(73, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(74, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(75, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(76, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(77, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(78, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(79, 'obat bebas', '', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(80, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(81, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(82, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(83, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(84, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(85, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(86, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(87, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(88, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(89, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(90, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(91, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(92, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(93, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(94, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(95, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(96, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(97, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(98, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(99, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(100, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(101, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(102, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(103, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(104, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(105, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(106, 'obat bebas', 'lorem lorem lorem lorem lorem lorem lorem lorem', 'https://magicalofimagination.files.wordpress.com/2010/11/bebas.jpg'),
(107, 'obat terlarang', 'adalah jenis obat yang sangat sangat berbahaya dan terlarang untuk digunakan', 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg'),
(108, 'obat terlarang', 'adalah jenis obat yang sangat sangat berbahaya dan terlarang untuk digunakan', 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg'),
(109, 'obat berbahaya', ' keterangan fgfh', 'https://ecs7.tokopedia.net/img/product-1/2016/7/29/3374091/3374091_93371a24-f151-4304-81bb-cb0a2d689b15.jpg'),
(110, 'nyamuk', 'tidak bisa', 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg'),
(111, 'nyamuk', 'tidak bisa', 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg'),
(112, 'nyamuk', 'tidak bisa', 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg'),
(113, '', '', ''),
(114, '', '', ''),
(115, '', '', ''),
(116, '', '', ''),
(117, '', '', ''),
(118, '', '', ''),
(119, '', '', ''),
(120, '', '', ''),
(121, '', '', ''),
(122, '', '', ''),
(123, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `total_jenis` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `uang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal`, `total_jenis`, `total`, `uang`) VALUES
(4, '31 january 2018', 29, 45, 100000000),
(5, '32 january 2018', 29, 45, 100000000),
(6, '33 january 2018', 29, 45, 100000000),
(7, '34 january 2018', 29, 45, 100000000),
(8, '35 january 2018', 29, 45, 100000000),
(9, '36 january 2018', 29, 45, 100000000),
(10, '37 january 2018', 29, 45, 100000000),
(11, '38 january 2018', 29, 45, 100000000),
(12, '39 january 2018', 29, 45, 100000000),
(14, '41 january 2018', 29, 45, 100000000),
(15, '42 january 2018', 29, 45, 100000000),
(16, '43 january 2018', 29, 45, 100000000),
(17, '44 january 2018', 29, 45, 100000000),
(18, '45 january 2018', 29, 45, 100000000),
(19, '46 january 2018', 29, 45, 100000000),
(20, '47 january 2018', 29, 45, 100000000),
(21, '48 january 2018', 29, 45, 100000000),
(22, '49 january 2018', 29, 45, 100000000),
(23, '50 january 2018', 29, 45, 100000000),
(24, '51 january 2018', 29, 45, 100000000),
(25, '52 january 2018', 29, 45, 100000000),
(26, '53 january 2018', 29, 45, 100000000),
(27, '54 january 2018', 29, 45, 100000000),
(28, '55 january 2018', 29, 45, 100000000),
(29, '56 january 2018', 29, 45, 100000000),
(30, '57 january 2018', 29, 45, 100000000),
(31, '58 january 2018', 29, 45, 100000000),
(32, '59 january 2018', 29, 45, 100000000),
(33, '60 january 2018', 29, 45, 100000000),
(34, '61 january 2018', 29, 45, 100000000),
(35, '62 january 2018', 29, 45, 100000000),
(36, '63 january 2018', 29, 45, 100000000),
(37, '64 january 2018', 29, 45, 100000000),
(38, '65 january 2018', 29, 45, 100000000),
(39, '66 january 2018', 29, 45, 100000000),
(40, '67 january 2018', 29, 45, 100000000),
(41, '68 january 2018', 29, 45, 100000000),
(42, '69 january 2018', 29, 45, 100000000),
(43, '70 january 2018', 29, 45, 100000000),
(44, '71 january 2018', 29, 45, 100000000),
(45, '72 january 2018', 29, 45, 100000000),
(46, '73 january 2018', 29, 45, 100000000),
(47, '74 january 2018', 29, 45, 100000000),
(48, '75 january 2018', 29, 45, 100000000),
(49, '76 january 2018', 29, 45, 100000000),
(50, '77 january 2018', 29, 45, 100000000),
(51, '78 january 2018', 29, 45, 100000000),
(52, '79 january 2018', 29, 45, 100000000),
(53, '80 january 2018', 29, 45, 100000000),
(54, '81 january 2018', 29, 45, 100000000),
(55, '82 january 2018', 29, 45, 100000000),
(56, '83 january 2018', 29, 45, 100000000),
(57, '84 january 2018', 29, 45, 100000000),
(58, '85 january 2018', 29, 45, 100000000),
(59, '86 january 2018', 29, 45, 100000000),
(60, '87 january 2018', 29, 45, 100000000),
(61, '88 january 2018', 29, 45, 100000000),
(62, '89 january 2018', 29, 45, 100000000),
(63, '90 january 2018', 29, 45, 100000000),
(64, '91 january 2018', 29, 45, 100000000),
(65, '92 january 2018', 29, 45, 100000000),
(66, '93 january 2018', 29, 45, 100000000),
(67, '94 january 2018', 29, 45, 100000000),
(68, '95 january 2018', 29, 45, 100000000),
(69, '96 january 2018', 29, 45, 100000000),
(70, '97 january 2018', 29, 45, 100000000),
(71, '98 january 2018', 29, 45, 100000000),
(72, '99 january 2018', 29, 45, 100000000),
(73, '100 january 2018', 29, 45, 100000000),
(74, '101 january 2018', 29, 45, 100000000),
(75, '102 january 2018', 29, 45, 100000000),
(76, '103 january 2018', 29, 45, 100000000),
(77, '104 january 2018', 29, 45, 100000000),
(78, '105 january 2018', 29, 45, 100000000),
(79, '106 january 2018', 29, 45, 100000000),
(80, '107 january 2018', 29, 45, 100000000),
(81, '108 january 2018', 29, 45, 100000000),
(82, '109 january 2018', 29, 45, 100000000),
(83, '110 january 2018', 29, 45, 100000000),
(84, '111 january 2018', 29, 45, 100000000),
(85, '112 january 2018', 29, 45, 100000000),
(86, '113 january 2018', 29, 45, 100000000),
(87, '114 january 2018', 29, 45, 100000000),
(88, '115 january 2018', 29, 45, 100000000),
(89, '116 january 2018', 29, 45, 100000000),
(90, '117 january 2018', 29, 45, 100000000),
(91, '118 january 2018', 29, 45, 100000000),
(92, '119 january 2018', 29, 45, 100000000),
(93, '120 january 2018', 29, 45, 100000000),
(94, '121 january 2018', 29, 45, 100000000),
(95, '122 january 2018', 29, 45, 100000000),
(96, '123 january 2018', 29, 45, 100000000),
(97, '124 january 2018', 29, 45, 100000000),
(98, '125 january 2018', 29, 45, 100000000),
(99, '126 january 2018', 29, 45, 100000000),
(100, '127 january 2018', 29, 45, 100000000),
(101, '128 january 2018', 29, 45, 100000000),
(102, '129 january 2018', 29, 45, 100000000),
(103, '130 january 2018', 29, 45, 100000000),
(104, '131 january 2018', 29, 45, 100000000),
(105, '132 january 2018', 29, 45, 100000000),
(106, '133 january 2018', 29, 45, 100000000),
(107, '134 january 2018', 29, 45, 100000000),
(108, '135 january 2018', 29, 45, 100000000),
(109, '136 january 2018', 29, 45, 100000000),
(110, '137 january 2018', 29, 45, 100000000),
(111, '138 january 2018', 29, 45, 100000000),
(112, '139 january 2018', 29, 45, 100000000),
(113, '140 january 2018', 29, 45, 100000000),
(114, '141 january 2018', 29, 45, 100000000),
(115, '142 january 2018', 29, 45, 100000000),
(116, '143 january 2018', 29, 45, 100000000),
(117, '144 january 2018', 29, 45, 100000000),
(118, '145 january 2018', 29, 45, 100000000),
(119, '146 january 2018', 29, 45, 100000000),
(120, '147 january 2018', 29, 45, 100000000),
(121, '148 january 2018', 29, 45, 100000000),
(122, '149 january 2018', 29, 45, 100000000),
(123, '150 january 2018', 29, 45, 100000000),
(124, '151 january 2018', 29, 45, 100000000),
(125, '152 january 2018', 29, 45, 100000000),
(126, '153 january 2018', 29, 45, 100000000),
(127, '154 january 2018', 29, 45, 100000000),
(128, '155 january 2018', 29, 45, 100000000),
(129, '156 january 2018', 29, 45, 100000000),
(130, '157 january 2018', 29, 45, 100000000);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `kode_obat` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` text NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `kode_obat`, `nama`, `jenis`, `satuan`, `stok`, `harga`, `gambar`, `kategori`, `keterangan`) VALUES
(6, '', '', '', '', 0, 0, '', '', ''),
(7, 'k007', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', '"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 'k007', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(9, 'k008', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(10, 'k009', 'obat obatan', 'obat obatan', 'botolan', 15, 20000, 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg', 'obat bebas', 'adalah obat obatan'),
(11, 'k010', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(12, 'k011', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(13, 'k012', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(14, 'k013', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(21, 'k020', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(22, 'k021', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(23, 'k022', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(24, 'k023', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(25, 'k024', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(26, 'k025', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(27, 'k026', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(28, 'k027', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(29, 'k028', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(30, 'k029', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(31, 'k030', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(32, 'k031', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(33, 'k032', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(34, 'k033', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(35, '', '', '', '', 0, 0, '', '', ''),
(36, '', '', '', '', 0, 0, '', '', ''),
(37, 'k036', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(38, 'k037', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(39, 'k038', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(40, 'k039', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(41, 'k040', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(42, 'k041', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(43, 'k042', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(44, 'k043', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(45, 'k044', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(46, 'k045', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(47, 'k046', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(48, 'k047', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(49, 'k048', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(50, 'k049', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(51, 'k050', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(52, 'k051', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(53, 'k052', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(54, 'k053', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(55, 'k054', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(56, 'k055', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(57, 'k056', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(58, 'k057', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(59, 'k058', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(60, 'k059', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(61, 'k060', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(62, 'k061', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(63, 'k062', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(64, 'k063', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(65, 'k064', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(66, 'k065', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(67, 'k066', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(68, 'k067', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(69, 'k068', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(70, 'k069', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(71, 'k070', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(72, 'k071', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(73, 'k007', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(74, 'k008', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(75, 'k009', 'obat obatan', 'obat obatan', 'botolan', 15, 20000, 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg', 'obat bebas', 'adalah obat obatan'),
(76, 'k010', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(77, 'k011', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(78, 'k012', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(79, 'k013', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(80, 'k014', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(81, 'k015', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(82, 'k016', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(83, 'k017', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(84, 'k018', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(85, 'k019', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(86, 'k020', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(87, 'k021', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(88, 'k022', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(89, 'k023', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(90, 'k024', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(91, 'k025', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(92, 'k026', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(93, 'k027', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(94, 'k028', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(95, 'k029', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(96, 'k030', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(97, 'k031', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(98, 'k032', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(99, 'k033', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(100, 'k034', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(101, 'k035', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(102, 'k036', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(103, 'k037', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(104, 'k038', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(105, 'k039', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(106, 'k040', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(107, 'k041', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(108, 'k042', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(109, 'k043', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(110, 'k044', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(111, 'k045', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(112, 'k046', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(113, 'k047', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(114, 'k048', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(115, 'k049', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(116, 'k050', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(117, 'k051', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(118, 'k052', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(119, 'k053', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(120, 'k054', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(121, 'k055', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(122, 'k056', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(123, 'k057', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(124, 'k058', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(125, 'k059', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(126, 'k060', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(127, 'k061', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(128, 'k062', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(129, 'k063', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(130, 'k064', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(131, 'k065', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(132, 'k066', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(133, 'k067', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(134, 'k068', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(135, 'k069', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(136, 'k070', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(137, 'k071', 'racun', 'racun', 'botol', 13, 30000, '/gambar/racun.jpg', 'narkotika', 'Lorem ipsum dolor sit amet consectetur adipis'),
(138, 'k009', 'obat obatan', 'obat obatan', 'botolan', 15, 20000, 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg', 'obat bebas', 'adalah obat obatan'),
(139, '', '', '', '', 0, 0, '', '', ''),
(140, '', '', '', '', 0, 0, '', '', ''),
(141, '', '', '', '', 0, 0, '', '', ''),
(142, '', '', '', '', 0, 0, '', '', ''),
(143, '', '', '', '', 0, 0, '', '', ''),
(144, 'k009', 'obat obatan', 'obat obatan', 'botolan', 15, 20000, 'http://2.bp.blogspot.com/-2zR1xpOodkc/UgUgqThJ5HI/AAAAAAAAKLI/DKwdJTnc-5M/s1600/IMG-20130807-01542.jpg', 'obat bebas', 'adalah obat obatan'),
(145, 'k0019', 'obat obatan lagi', 'obatan lagi', 'botolanla', 20, 40000, 'https://ecs7.tokopedia.net/img/product-1/2016/7/29/3374091/3374091_93371a24-f151-4304-81bb-cb0a2d689b15.jpg', 'obat terbatas', 'obatan lagilah'),
(146, '', '', '', '', 0, 0, '', '', ''),
(147, '', '', '', '', 0, 0, '', '', ''),
(148, '', '', '', '', 0, 0, '', '', ''),
(149, '', '', '', '', 0, 0, '', '', ''),
(150, '', '', '', '', 0, 0, '', '', ''),
(151, '', '', '', '', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kode_obat` text NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama`, `kode_obat`, `jumlah`, `harga`, `kategori`, `keterangan`, `total`) VALUES
(3, 'jah', 'k008', 17, 200058, 'obat terbatas', 'obat ampuhp', 200000),
(4, 'kunyit', 'k004', 2, 20000, 'obat narkotika', 'jahe mantap', 20000),
(5, 'gokil', 'lala', 30, 20000, 'obat keras', 'cek', 20000),
(7, 'obatlah', 'k004', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(8, 'obatlah', 'k005', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(9, 'ada aja', 'k006', 2, 3, 'Kategori', 'adalah keterangan yang lumayan banyak kan..', 3),
(10, 'gola gola', 'k007', 10, 20, 'obat bebas', 'gola gola', 20),
(11, 'obatlah', 'k008', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(12, 'obatlah', 'k009', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(13, 'obatlah', 'k010', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(14, 'obatlah', 'k011', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(15, 'obatlah', 'k012', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(16, 'obatlah', 'k013', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(17, 'obatlah', 'k014', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(18, 'obatlah', 'k015', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(19, 'obatlah', 'k016', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(20, 'obatlah', 'k017', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(21, 'obatlah', 'k018', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(22, 'obatlah', 'k019', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(23, 'obatlah', 'k020', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(24, 'obatlah', 'k021', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(25, 'obatlah', 'k022', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(26, 'obatlah', 'k023', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(27, 'obatlah', 'k024', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(28, 'obatlah', 'k025', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(29, 'obatlah', 'k026', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(30, 'obatlah', 'k027', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(31, 'obatlah', 'k028', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(32, 'obatlah', 'k029', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(33, 'obatlah', 'k030', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(34, 'obatlah', 'k031', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(35, 'obatlah', 'k032', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(36, 'obatlah', 'k033', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(37, 'obatlah', 'k034', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(38, 'obatlah', 'k035', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(39, 'obatlah', 'k036', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(40, 'obatlah', 'k037', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(41, 'obatlah', 'k038', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(42, 'obatlah', 'k039', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(43, 'obatlah', 'k040', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(44, 'obatlah', 'k041', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(45, 'obatlah', 'k042', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(46, 'obatlah', 'k043', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(47, 'obatlah', 'k044', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(48, 'obatlah', 'k045', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(49, 'obatlah', 'k046', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(50, 'obatlah', 'k047', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(51, 'obatlah', 'k048', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(52, 'obatlah', 'k049', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(53, 'obatlah', 'k050', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(54, 'obatlah', 'k051', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(55, 'obatlah', 'k052', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(56, 'obatlah', 'k053', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(57, 'obatlah', 'k054', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(58, 'obatlah', 'k055', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(59, 'obatlah', 'k056', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(60, 'obatlah', 'k057', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(61, 'obatlah', 'k058', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(62, 'obatlah', 'k059', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(63, 'obatlah', 'k060', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(64, 'obatlah', 'k061', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(65, 'obatlah', 'k062', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(66, 'obatlah', 'k063', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(67, 'obatlah', 'k064', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(68, 'obatlah', 'k065', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(69, 'obatlah', 'k066', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(70, 'obatlah', 'k067', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(71, 'obatlah', 'k068', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(72, 'obatlah', 'k069', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(73, 'obatlah', 'k070', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(74, 'obatlah', 'k071', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(75, 'obatlah', 'k072', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(76, 'obatlah', 'k073', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(77, 'obatlah', 'k074', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(78, 'obatlah', 'k075', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(79, 'obatlah', 'k076', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(80, 'obatlah', 'k077', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(81, 'obatlah', 'k078', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(82, 'obatlah', 'k079', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(83, 'obatlah', 'k080', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(84, 'obatlah', 'k081', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(85, 'obatlah', 'k082', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(86, 'obatlah', 'k083', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(87, 'obatlah', 'k084', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(88, 'obatlah', 'k085', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(89, 'obatlah', 'k086', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(90, 'obatlah', 'k087', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(91, 'obatlah', 'k088', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(92, 'obatlah', 'k089', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(93, 'obatlah', 'k090', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(94, 'obatlah', 'k091', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(95, 'obatlah', 'k092', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(96, 'obatlah', 'k093', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(97, 'obatlah', 'k094', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(98, 'obatlah', 'k095', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(99, 'obatlah', 'k096', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(100, 'obatlah', 'k097', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(101, 'obatlah', 'k098', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(102, 'obatlah', 'k099', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(103, 'obatlah', 'k100', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(104, 'obatlah', 'k101', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(105, 'obatlah', 'k102', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(106, 'obatlah', 'k103', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(107, 'obatlah', 'k104', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(108, 'obatlah', 'k105', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(109, 'obatlah', 'k106', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(110, 'obatlah', 'k107', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(111, 'obatlah', 'k108', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(112, 'obatlah', 'k109', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(113, 'obatlah', 'k110', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(114, 'obatlah', 'k111', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(115, 'obatlah', 'k112', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(116, 'obatlah', 'k113', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(117, 'obatlah', 'k114', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(118, 'obatlah', 'k115', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(119, 'obatlah', 'k116', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(120, 'obatlah', 'k117', 2, 30000, 'obat terbatas', 'obat yang manjur', 60000),
(121, '', '', 0, 0, '', '', 0),
(122, '', '', 0, 0, '', '', 0),
(123, '', '', 0, 0, '', '', 0),
(124, '', '', 0, 0, '', '', 0),
(125, '', '', 0, 0, '', '', 0),
(126, '', '', 0, 0, '', '', 0),
(127, '', '', 0, 0, '', '', 0),
(128, '', '', 0, 0, '', '', 0),
(129, '', '', 0, 0, '', '', 0),
(130, '', '', 0, 0, '', '', 0),
(131, '', '', 0, 0, '', '', 0),
(132, '', '', 0, 0, '', '', 0),
(133, '', '', 0, 0, '', '', 0),
(134, '', '', 0, 0, '', '', 0),
(135, '', '', 0, 0, '', '', 0),
(136, '', '', 0, 0, '', '', 0),
(137, '', '', 0, 0, '', '', 0),
(138, 'ada aja', 'k006', 2, 3, 'Kategori', 'adalah keterangan yang lumayan banyak kan..', 3),
(139, 'gola gola', 'k007', 10, 20, 'obat bebas', 'gola gola', 20),
(140, '', '', 0, 0, '', '', 0),
(141, '', '', 0, 0, '', '', 0),
(142, '', '', 0, 0, '', '', 0),
(143, '', '', 0, 0, '', '', 0),
(144, '', '', 0, 0, '', '', 0),
(145, '', '', 0, 0, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(8, '', '', ''),
(9, 'user6', 'user6', 'user6'),
(10, 'user6', 'user6', 'user6'),
(11, 'user6', 'user6', 'user6'),
(12, 'user6', 'user6', 'user6'),
(13, 'user6', 'user6', 'user6'),
(14, 'user6', 'user6', 'user6'),
(15, 'user6', 'user6', 'user6'),
(16, 'user6', 'user6', 'user6'),
(17, 'user6', 'user6', 'user6'),
(18, 'user6', 'user6', 'user6'),
(19, 'user6', 'user6', 'user6'),
(20, 'user6', 'user6', 'user6'),
(21, 'user6', 'user6', 'user6'),
(22, 'user6', 'user6', 'user6'),
(23, 'user6', 'user6', 'user6'),
(24, 'user6', 'user6', 'user6'),
(25, 'user6', 'user6', 'user6'),
(26, 'user6', 'user6', 'user6'),
(27, 'user6', 'user6', 'user6'),
(28, 'user6', 'user6', 'user6'),
(29, 'user6', 'user6', 'user6'),
(30, 'user6', 'user6', 'user6'),
(31, 'user6', 'user6', 'user6'),
(32, 'user6', 'user6', 'user6'),
(33, 'user6', 'user6', 'user6'),
(34, 'user6', 'user6', 'user6'),
(35, 'user6', 'user6', 'user6'),
(36, 'user6', 'user6', 'user6'),
(37, 'user6', 'user6', 'user6'),
(38, 'user6', 'user6', 'user6'),
(39, 'user6', 'user6', 'user6'),
(40, 'user6', 'user6', 'user6'),
(41, 'user6', 'user6', 'user6'),
(42, 'user6', 'user6', 'user6'),
(43, 'user6', 'user6', 'user6'),
(44, 'user6', 'user6', 'user6'),
(45, 'user6', 'user6', 'user6'),
(46, 'user6', 'user6', 'user6'),
(47, 'user6', 'user6', 'user6'),
(48, 'user6', 'user6', 'user6'),
(49, 'user6', 'user6', 'user6'),
(50, 'user6', 'user6', 'user6'),
(51, 'user6', 'user6', 'user6'),
(52, 'user6', 'user6', 'user6'),
(53, 'user6', 'user6', 'user6'),
(54, 'user6', 'user6', 'user6'),
(55, 'user6', 'user6', 'user6'),
(56, 'user6', 'user6', 'user6'),
(57, 'user6', 'user6', 'user6'),
(58, 'user6', 'user6', 'user6'),
(59, 'user6', 'user6', 'user6'),
(60, 'user6', 'user6', 'user6'),
(61, 'user6', 'user6', 'user6'),
(62, 'user6', 'user6', 'user6'),
(63, 'user6', 'user6', 'user6'),
(64, 'user6', 'user6', 'user6'),
(65, 'user6', 'user6', 'user6'),
(66, 'user6', 'user6', 'user6'),
(67, 'user6', 'user6', 'user6'),
(68, 'user6', 'user6', 'user6'),
(69, 'user6', 'user6', 'user6'),
(70, 'user6', 'user6', 'user6'),
(71, 'user6', 'user6', 'user6'),
(72, 'user6', 'user6', 'user6'),
(73, 'user6', 'user6', 'user6'),
(74, 'user6', 'user6', 'user6'),
(75, 'user6', 'user6', 'user6'),
(76, 'user6', 'user6', 'user6'),
(77, 'user6', 'user6', 'user6'),
(78, 'user6', 'user6', 'user6'),
(79, 'user6', 'user6', 'user6'),
(80, 'user6', 'user6', 'user6'),
(81, 'user6', 'user6', 'user6'),
(82, 'user6', 'user6', 'user6'),
(83, 'user6', 'user6', 'user6'),
(84, 'user6', 'user6', 'user6'),
(85, 'user6', 'user6', 'user6'),
(86, 'user6', 'user6', 'user6'),
(87, 'user6', 'user6', 'user6'),
(88, 'user6', 'user6', 'user6'),
(89, 'user6', 'user6', 'user6'),
(90, 'user6', 'user6', 'user6'),
(91, 'user6', 'user6', 'user6'),
(92, 'user6', 'user6', 'user6'),
(93, 'user6', 'user6', 'user6'),
(94, 'user6', 'user6', 'user6'),
(95, 'user6', 'user6', 'user6'),
(96, 'user6', 'user6', 'user6'),
(97, 'user6', 'user6', 'user6'),
(98, 'user6', 'user6', 'user6'),
(99, 'user6', 'user6', 'user6'),
(100, 'user6', 'user6', 'user6'),
(101, 'user6', 'user6', 'user6'),
(102, 'user6', 'user6', 'user6'),
(103, 'user6', 'user6', 'user6'),
(104, 'user6', 'user6', 'user6'),
(105, 'user6', 'user6', 'user6'),
(106, 'user6', 'user6', 'user6'),
(107, 'user6', 'user6', 'user6'),
(108, 'user6', 'user6', 'user6'),
(109, 'user6', 'user6', 'user6'),
(110, 'user6', 'user6', 'user6'),
(111, 'user6', 'user6', 'user6'),
(112, 'user6', 'user6', 'user6'),
(113, 'user6', 'user6', 'user6'),
(114, 'user6', 'user6', 'user6'),
(115, 'user6', 'user6', 'user6'),
(116, 'user6', 'user6', 'user6'),
(117, 'user6', 'user6', 'user6'),
(118, 'user6', 'user6', 'user6'),
(119, 'user6', 'user6', 'user6'),
(120, 'user6', 'user6', 'user6'),
(121, 'user6', 'user6', 'user6'),
(122, 'user6', 'user6', 'user6'),
(123, 'user6', 'user6', 'user6'),
(124, 'user6', 'user6', 'user6'),
(125, '', '', ''),
(126, '', '', ''),
(127, '', '', ''),
(128, '', '', ''),
(129, '', '', ''),
(130, '', '', ''),
(131, '', '', ''),
(132, '', '', ''),
(133, '', '', ''),
(134, 'a', 'a', 'a'),
(135, 'a', 'a', 'a'),
(136, 'ramdan2', 'ramdan2', 'ramdan2'),
(137, '', '', ''),
(138, '', '', ''),
(139, '', '', ''),
(140, '', '', ''),
(141, '', '', ''),
(142, '', '', ''),
(143, '', '', ''),
(144, '', '', ''),
(145, '', '', ''),
(146, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
