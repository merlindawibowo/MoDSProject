-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 02:38 PM
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
-- Database: `mods`
--

-- --------------------------------------------------------

--
-- Table structure for table `fold0`
--

CREATE TABLE `fold0` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold1`
--

CREATE TABLE `fold1` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold2`
--

CREATE TABLE `fold2` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold3`
--

CREATE TABLE `fold3` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold4`
--

CREATE TABLE `fold4` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold5`
--

CREATE TABLE `fold5` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold6`
--

CREATE TABLE `fold6` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold7`
--

CREATE TABLE `fold7` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold8`
--

CREATE TABLE `fold8` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fold9`
--

CREATE TABLE `fold9` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `main_data`
--

CREATE TABLE `main_data` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_data`
--

INSERT INTO `main_data` (`id`, `date`, `time`, `region`, `state`, `api`, `decision`) VALUES
(1, '11/25/2014', '7:00AM', 'Sarawak', 'Limbang', 27, 'good'),
(2, '11/25/2014', '7:00AM', 'Sarawak', 'Samarahan', 19, 'good'),
(3, '11/25/2014', '7:00AM', 'Sarawak', 'Sri Aman', 30, 'good'),
(4, '11/25/2014', '7:00AM', 'Sarawak', 'Kapit', 19, 'good'),
(5, '11/25/2014', '7:00AM', 'Sabah', 'Kota Kinabalu', 46, 'good'),
(6, '11/25/2014', '7:00AM', 'Sabah', 'Tawau', 26, 'good'),
(7, '11/25/2014', '7:00AM', 'Sabah', 'Keningau', 34, 'good'),
(8, '11/25/2014', '7:00AM', 'Sabah', 'Sandakan', 39, 'good'),
(9, '11/25/2014', '8:00AM', 'Perlis', 'Kangar', 20, 'good'),
(10, '11/25/2014', '8:00AM', 'Kedah', 'Langkawi', 25, 'good'),
(11, '11/25/2014', '8:00AM', 'Kedah', 'Alor Setar', 36, 'good'),
(12, '11/25/2014', '8:00AM', 'Kedah', 'Bakar Arang, Sg. Petani', 57, 'moderate'),
(13, '11/25/2014', '8:00AM', 'Pulau Pinang', 'USM', 51, 'moderate'),
(14, '11/25/2014', '8:00AM', 'Pulau Pinang', 'Perai', 30, 'good'),
(15, '11/25/2014', '8:00AM', 'Pulau Pinang', 'Seberang Jaya 2, Perai', 51, 'moderate'),
(16, '11/25/2014', '8:00AM', 'Perak', 'Jalan Tasek, Ipoh', 38, 'good'),
(17, '11/25/2014', '8:00AM', 'Perak', 'S K Jalan Pegoh, Ipoh', 26, 'good'),
(18, '11/25/2014', '8:00AM', 'Perak', 'Kg. Air Putih, Taiping', 43, 'good'),
(19, '11/25/2014', '8:00AM', 'Perak', 'Seri Manjung', 27, 'good'),
(20, '11/25/2014', '8:00AM', 'Perak', 'Tanjung Malim', 14, 'good'),
(21, '11/25/2014', '8:00AM', 'Selangor', 'Pelabuhan Kelang', 40, 'good'),
(22, '11/25/2014', '8:00AM', 'Selangor', 'Petaling Jaya', 31, 'good'),
(23, '11/25/2014', '8:00AM', 'Selangor', 'Banting', 36, 'good'),
(24, '11/25/2014', '8:00AM', 'Selangor', 'Shah Alam', 28, 'good'),
(25, '11/25/2014', '8:00AM', 'Selangor', 'Kuala Selangor', 19, 'good'),
(26, '11/25/2014', '8:00AM', 'Wilayah Persekutuan', 'Batu Muda,Kuala Lumpur', 24, 'good'),
(27, '11/25/2014', '8:00AM', 'Wilayah Persekutuan', 'heras,Kuala Lumpur', 34, 'good'),
(28, '11/25/2014', '8:00AM', 'Wilayah Persekutuan', 'Putrajaya', 31, 'good'),
(29, '11/25/2014', '8:00AM', 'Wilayah Persekutuan', 'Labuan', 17, 'good'),
(30, '11/25/2014', '8:00AM', 'Negeri Sembilan', 'Nilai', 35, 'good'),
(31, '11/25/2014', '8:00AM', 'Negeri Sembilan', 'Seremban', 30, 'good'),
(32, '11/25/2014', '8:00AM', 'Negeri Sembilan', 'Port Dikson', 24, 'good'),
(33, '11/25/2014', '8:00AM', 'Melaka', 'Bukit Rambai', 43, 'good'),
(34, '11/25/2014', '8:00AM', 'Melaka', 'Bandaraya Melaka', 25, 'good'),
(35, '11/25/2014', '8:00AM', 'Johor', 'Pasir Gudang', 28, 'good'),
(36, '11/25/2014', '8:00AM', 'Johor', 'Larkin Lama', 32, 'good'),
(37, '11/25/2014', '8:00AM', 'Johor', 'Muar', 38, 'good'),
(38, '11/25/2014', '8:00AM', 'Johor', 'Kota Tinggi', 21, 'good'),
(39, '11/25/2014', '8:00AM', 'Kelantan', 'Tanah Merah ', 18, 'good'),
(40, '11/25/2014', '8:00AM', 'Kelantan', 'SMK Tanjung hat, Kota Bharu', 52, 'moderate'),
(41, '11/25/2014', '8:00AM', 'Terengganu', 'Kemaman', 27, 'good'),
(42, '11/25/2014', '8:00AM', 'Terengganu', 'Paka', 21, 'good'),
(43, '11/25/2014', '8:00AM', 'Terengganu', 'Kuala Terengganu', 18, 'good'),
(44, '11/25/2014', '8:00AM', 'Pahang', 'Jerantut', 27, 'good'),
(45, '11/25/2014', '8:00AM', 'Pahang', 'Indera Mahkota, Kuantan', 21, 'good'),
(46, '11/25/2014', '8:00AM', 'Pahang', 'Balok Baru, Kuantan', 36, 'good'),
(47, '11/25/2014', '8:00AM', 'Sarawak', 'Kuhing', 27, 'good'),
(48, '11/25/2014', '8:00AM', 'Sarawak', 'Sibu', 18, 'good'),
(49, '11/25/2014', '8:00AM', 'Sarawak', 'Bintulu', 24, 'good'),
(50, '11/25/2014', '8:00AM', 'Sarawak', 'Miri', 32, 'good'),
(51, '11/25/2014', '8:00AM', 'Sarawak', 'ILP Miri', 22, 'good'),
(52, '11/25/2014', '8:00AM', 'Sarawak', 'Sarikei', 25, 'good'),
(53, '11/25/2014', '8:00AM', 'Sarawak', 'Limbang', 27, 'good'),
(54, '11/25/2014', '8:00AM', 'Sarawak', 'Samarahan', 19, 'good'),
(55, '11/25/2014', '8:00AM', 'Sarawak', 'Sri Aman', 31, 'good'),
(56, '11/25/2014', '8:00AM', 'Sarawak', 'Kapit', 20, 'good'),
(57, '11/25/2014', '8:00AM', 'Sabah', 'Kota Kinabalu', 46, 'good'),
(58, '11/25/2014', '8:00AM', 'Sabah', 'Tawau', 26, 'good'),
(59, '11/25/2014', '8:00AM', 'Sabah', 'Keningau', 34, 'good'),
(60, '11/25/2014', '8:00AM', 'Sabah', 'Sandakan', 39, 'good'),
(61, '11/25/2014', '9:00AM', 'Perlis', 'Kangar', 19, 'good'),
(62, '11/25/2014', '9:00AM', 'Kedah', 'Langkawi', 26, 'good'),
(63, '11/25/2014', '9:00AM', 'Kedah', 'Alor Setar', 37, 'good'),
(64, '11/25/2014', '9:00AM', 'Kedah', 'Bakar Arang, Sg. Petani', 57, 'moderate'),
(65, '11/25/2014', '9:00AM', 'Pulau Pinang', 'USM', 51, 'moderate'),
(66, '11/25/2014', '9:00AM', 'Pulau Pinang', 'Perai', 31, 'good'),
(67, '11/25/2014', '9:00AM', 'Pulau Pinang', 'Seberang Jaya 2, Perai', 51, 'moderate'),
(68, '11/25/2014', '9:00AM', 'Perak', 'Jalan Tasek, Ipoh', 38, 'good'),
(69, '11/25/2014', '9:00AM', 'Perak', 'S K Jalan Pegoh, Ipoh', 26, 'good'),
(70, '11/25/2014', '9:00AM', 'Perak', 'Kg. Air Putih, Taiping', 43, 'good'),
(71, '11/25/2014', '9:00AM', 'Perak', 'Seri Manjung', 28, 'good'),
(72, '11/25/2014', '9:00AM', 'Perak', 'Tanjung Malim', 14, 'good'),
(73, '11/25/2014', '9:00AM', 'Selangor', 'Pelabuhan Kelang', 41, 'good'),
(74, '11/25/2014', '9:00AM', 'Selangor', 'Petaling Jaya', 31, 'good'),
(75, '11/25/2014', '9:00AM', 'Selangor', 'Banting', 36, 'good'),
(76, '11/25/2014', '9:00AM', 'Selangor', 'Shah Alam', 28, 'good'),
(77, '11/25/2014', '9:00AM', 'Selangor', 'Kuala Selangor', 21, 'good'),
(78, '11/25/2014', '9:00AM', 'Wilayah Persekutuan', 'Batu Muda,Kuala Lumpur', 26, 'good'),
(79, '11/25/2014', '9:00AM', 'Wilayah Persekutuan', 'heras,Kuala Lumpur', 34, 'good'),
(80, '11/25/2014', '9:00AM', 'Wilayah Persekutuan', 'Putrajaya', 32, 'good'),
(81, '11/25/2014', '9:00AM', 'Wilayah Persekutuan', 'Labuan', 17, 'good'),
(82, '11/25/2014', '9:00AM', 'Negeri Sembilan', 'Nilai', 35, 'good'),
(83, '11/25/2014', '9:00AM', 'Negeri Sembilan', 'Seremban', 30, 'good'),
(84, '11/25/2014', '9:00AM', 'Negeri Sembilan', 'Port Dikson', 24, 'good'),
(85, '11/25/2014', '9:00AM', 'Melaka', 'Bukit Rambai', 45, 'good'),
(86, '11/25/2014', '9:00AM', 'Melaka', 'Bandaraya Melaka', 25, 'good'),
(87, '11/25/2014', '9:00AM', 'Johor', 'Pasir Gudang', 27, 'good'),
(88, '11/25/2014', '9:00AM', 'Johor', 'Larkin Lama', 32, 'good'),
(89, '11/25/2014', '9:00AM', 'Johor', 'Muar', 39, 'good'),
(90, '11/25/2014', '9:00AM', 'Johor', 'Kota Tinggi', 20, 'good'),
(91, '11/25/2014', '9:00AM', 'Kelantan', 'Tanah Merah ', 17, 'good'),
(92, '11/25/2014', '9:00AM', 'Kelantan', 'SMK Tanjung hat, Kota Bharu', 52, 'moderate'),
(93, '11/25/2014', '9:00AM', 'Terengganu', 'Kemaman', 27, 'good'),
(94, '11/25/2014', '9:00AM', 'Terengganu', 'Paka', 20, 'good'),
(95, '11/25/2014', '9:00AM', 'Terengganu', 'Kuala Terengganu', 17, 'good'),
(96, '11/25/2014', '9:00AM', 'Pahang', 'Jerantut', 27, 'good'),
(97, '11/25/2014', '9:00AM', 'Pahang', 'Indera Mahkota, Kuantan', 21, 'good'),
(98, '11/25/2014', '9:00AM', 'Pahang', 'Balok Baru, Kuantan', 36, 'good'),
(99, '11/25/2014', '9:00AM', 'Sarawak', 'Kuhing', 27, 'good'),
(100, '11/25/2014', '9:00AM', 'Sarawak', 'Sibu', 18, 'good'),
(101, '11/25/2014', '1:00AM', 'North', NULL, 45, 'good'),
(102, '11/25/2014', '1:00AM', 'South', NULL, 43, 'good'),
(103, '11/25/2014', '1:00AM', 'East', NULL, 41, 'good'),
(104, '11/25/2014', '1:00AM', 'West', NULL, 40, 'good'),
(105, '11/25/2014', '1:00AM', 'Central', NULL, 41, 'good'),
(106, '11/25/2014', '2:00AM', 'North', NULL, 42, 'good'),
(107, '11/25/2014', '2:00AM', 'South', NULL, 43, 'good'),
(108, '11/25/2014', '2:00AM', 'East', NULL, 42, 'good'),
(109, '11/25/2014', '2:00AM', 'West', NULL, 41, 'good'),
(110, '11/25/2014', '2:00AM', 'Central', NULL, 40, 'good'),
(111, '11/25/2014', '3:00AM', 'North', NULL, 40, 'good'),
(112, '11/25/2014', '3:00AM', 'South', NULL, 40, 'good'),
(113, '11/25/2014', '3:00AM', 'East', NULL, 40, 'good'),
(114, '11/25/2014', '3:00AM', 'West', NULL, 40, 'good'),
(115, '11/25/2014', '3:00AM', 'Central', NULL, 41, 'good'),
(116, '11/25/2014', '4:00AM', 'North', NULL, 40, 'good'),
(117, '11/25/2014', '4:00AM', 'South', NULL, 40, 'good'),
(118, '11/25/2014', '4:00AM', 'East', NULL, 41, 'good'),
(119, '11/25/2014', '4:00AM', 'West', NULL, 40, 'good'),
(120, '11/25/2014', '4:00AM', 'Central', NULL, 40, 'good'),
(121, '11/25/2014', '5:00AM', 'North', NULL, 40, 'good'),
(122, '11/25/2014', '5:00AM', 'South', NULL, 41, 'good'),
(123, '11/25/2014', '5:00AM', 'East', NULL, 42, 'good'),
(124, '11/25/2014', '5:00AM', 'West', NULL, 43, 'good'),
(125, '11/25/2014', '5:00AM', 'Central', NULL, 44, 'good'),
(126, '11/25/2014', '6:00AM', 'North', NULL, 44, 'good'),
(127, '11/25/2014', '6:00AM', 'South', NULL, 46, 'good'),
(128, '11/25/2014', '6:00AM', 'East', NULL, 47, 'good'),
(129, '11/25/2014', '6:00AM', 'West', NULL, 47, 'good'),
(130, '11/25/2014', '6:00AM', 'Central', NULL, 47, 'good'),
(131, '11/25/2014', '7:00AM', 'North', NULL, 47, 'good'),
(132, '11/25/2014', '7:00AM', 'South', NULL, 47, 'good'),
(133, '11/25/2014', '7:00AM', 'East', NULL, 46, 'good'),
(134, '11/25/2014', '7:00AM', 'West', NULL, 46, 'good'),
(135, '11/25/2014', '7:00AM', 'Central', NULL, 46, 'good'),
(136, '11/25/2014', '8:00AM', 'North', NULL, 47, 'good'),
(137, '11/25/2014', '8:00AM', 'South', NULL, 46, 'good'),
(138, '11/25/2014', '8:00AM', 'East', NULL, 46, 'good'),
(139, '11/25/2014', '8:00AM', 'West', NULL, 46, 'good'),
(140, '11/25/2014', '8:00AM', 'Central', NULL, 47, 'good'),
(141, '11/25/2014', '9:00AM', 'North', NULL, 47, 'good'),
(142, '11/25/2014', '9:00AM', 'South', NULL, 21, 'good'),
(143, '11/25/2014', '9:00AM', 'East', NULL, 46, 'good'),
(144, '11/25/2014', '9:00AM', 'West', NULL, 47, 'good'),
(145, '11/25/2014', '9:00AM', 'Central', NULL, 47, 'good'),
(146, '11/25/2014', '10:00AM', 'North', NULL, 48, 'good'),
(147, '11/25/2014', '10:00AM', 'South', NULL, 48, 'good'),
(148, '11/25/2014', '10:00AM', 'East', NULL, 48, 'good'),
(149, '11/25/2014', '10:00AM', 'West', NULL, 49, 'good'),
(150, '11/25/2014', '10:00AM', 'Central', NULL, 50, 'good'),
(151, '11/25/2014', '11:00AM', 'North', NULL, 49, 'good'),
(152, '11/25/2014', '11:00AM', 'South', NULL, 52, 'moderate'),
(153, '11/25/2014', '11:00AM', 'East', NULL, 48, 'good'),
(154, '11/25/2014', '11:00AM', 'West', NULL, 49, 'good'),
(155, '11/25/2014', '11:00AM', 'Central', NULL, 50, 'good'),
(156, '11/25/2014', '12:00PM', 'North', NULL, 51, 'moderate'),
(157, '11/25/2014', '12:00PM', 'South', NULL, 52, 'moderate'),
(158, '11/25/2014', '12:00PM', 'East', NULL, 0, NULL),
(159, '11/25/2014', '12:00PM', 'West', NULL, 52, 'moderate'),
(160, '11/25/2014', '12:00PM', 'Central', NULL, 52, 'moderate'),
(161, '11/25/2014', '1:00PM', 'North', NULL, 52, 'moderate'),
(162, '11/25/2014', '1:00PM', 'South', NULL, 51, 'moderate'),
(163, '11/25/2014', '1:00PM', 'East', NULL, 51, 'moderate'),
(164, '11/25/2014', '1:00PM', 'West', NULL, 50, 'good'),
(165, '11/25/2014', '1:00PM', 'Central', NULL, 50, 'good'),
(166, '11/25/2014', '2:00PM', 'North', NULL, 50, 'good'),
(167, '11/25/2014', '2:00PM', 'South', NULL, 49, 'good'),
(168, '11/25/2014', '2:00PM', 'East', NULL, 49, 'good'),
(169, '11/25/2014', '2:00PM', 'West', NULL, 48, 'good'),
(170, '11/25/2014', '2:00PM', 'Central', NULL, 49, 'good'),
(171, '11/25/2014', '3:00PM', 'North', NULL, 51, 'moderate'),
(172, '11/25/2014', '3:00PM', 'South', NULL, 51, 'moderate'),
(173, '11/25/2014', '3:00PM', 'East', NULL, 50, 'good'),
(174, '11/25/2014', '3:00PM', 'West', NULL, 49, 'good'),
(175, '11/25/2014', '3:00PM', 'Central', NULL, 49, 'good'),
(176, '11/25/2014', '4:00PM', 'North', NULL, 24, 'good'),
(177, '11/25/2014', '4:00PM', 'South', NULL, 51, 'moderate'),
(178, '11/25/2014', '4:00PM', 'East', NULL, 52, 'moderate'),
(179, '11/25/2014', '4:00PM', 'West', NULL, 52, 'moderate'),
(180, '11/25/2014', '4:00PM', 'Central', NULL, 51, 'moderate'),
(181, '11/25/2014', '5:00PM', 'North', NULL, 51, 'moderate'),
(182, '11/25/2014', '5:00PM', 'South', NULL, 23, 'good'),
(183, '11/25/2014', '5:00PM', 'East', NULL, 51, 'moderate'),
(184, '11/25/2014', '5:00PM', 'West', NULL, 51, 'moderate'),
(185, '11/25/2014', '5:00PM', 'Central', NULL, 0, NULL),
(186, '11/25/2014', '6:00PM', 'North', NULL, 52, 'moderate'),
(187, '11/25/2014', '6:00PM', 'South', NULL, 52, 'moderate'),
(188, '11/25/2014', '6:00PM', 'East', NULL, 52, 'moderate'),
(189, '11/25/2014', '6:00PM', 'West', NULL, 52, 'moderate'),
(190, '11/25/2014', '6:00PM', 'Central', NULL, 52, 'moderate'),
(191, '11/25/2014', '7:00PM', 'North', NULL, 52, 'moderate'),
(192, '11/25/2014', '7:00PM', 'South', NULL, 52, 'moderate'),
(193, '11/25/2014', '7:00PM', 'East', NULL, 52, 'moderate'),
(194, '11/25/2014', '7:00PM', 'West', NULL, 52, 'moderate'),
(195, '11/25/2014', '7:00PM', 'Central', NULL, 49, 'good'),
(196, '11/25/2014', '8:00PM', 'North', NULL, 48, 'good'),
(197, '11/25/2014', '8:00PM', 'South', NULL, 50, 'good'),
(198, '11/25/2014', '8:00PM', 'East', NULL, 51, 'moderate'),
(199, '11/25/2014', '8:00PM', 'West', NULL, 49, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `matrix_data`
--

CREATE TABLE `matrix_data` (
  `id` int(11) NOT NULL,
  `class` varchar(225) DEFAULT NULL,
  `class_pembanding` varchar(225) DEFAULT NULL,
  `matrix` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matrix_data_modulo`
--

CREATE TABLE `matrix_data_modulo` (
  `id` int(11) NOT NULL,
  `class` varchar(225) DEFAULT NULL,
  `class_pembanding` varchar(225) DEFAULT NULL,
  `matrix` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testing_data`
--

CREATE TABLE `testing_data` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `training_data`
--

CREATE TABLE `training_data` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `unused_data`
--

CREATE TABLE `unused_data` (
  `id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `region` varchar(200) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `api` int(11) DEFAULT NULL,
  `decision` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upload_file`
--

CREATE TABLE `upload_file` (
  `id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_file`
--

INSERT INTO `upload_file` (`id`, `file_name`) VALUES
(1, 'data_MY.csv'),
(2, 'data_SG.csv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fold0`
--
ALTER TABLE `fold0`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold1`
--
ALTER TABLE `fold1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold2`
--
ALTER TABLE `fold2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold3`
--
ALTER TABLE `fold3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold4`
--
ALTER TABLE `fold4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold5`
--
ALTER TABLE `fold5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold6`
--
ALTER TABLE `fold6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold7`
--
ALTER TABLE `fold7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold8`
--
ALTER TABLE `fold8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fold9`
--
ALTER TABLE `fold9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_data`
--
ALTER TABLE `main_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrix_data`
--
ALTER TABLE `matrix_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matrix_data_modulo`
--
ALTER TABLE `matrix_data_modulo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing_data`
--
ALTER TABLE `testing_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_data`
--
ALTER TABLE `training_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unused_data`
--
ALTER TABLE `unused_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fold0`
--
ALTER TABLE `fold0`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold1`
--
ALTER TABLE `fold1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold2`
--
ALTER TABLE `fold2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold3`
--
ALTER TABLE `fold3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold4`
--
ALTER TABLE `fold4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold5`
--
ALTER TABLE `fold5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold6`
--
ALTER TABLE `fold6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold7`
--
ALTER TABLE `fold7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold8`
--
ALTER TABLE `fold8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fold9`
--
ALTER TABLE `fold9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_data`
--
ALTER TABLE `main_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `matrix_data`
--
ALTER TABLE `matrix_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matrix_data_modulo`
--
ALTER TABLE `matrix_data_modulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testing_data`
--
ALTER TABLE `testing_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_data`
--
ALTER TABLE `training_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unused_data`
--
ALTER TABLE `unused_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload_file`
--
ALTER TABLE `upload_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
