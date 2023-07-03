-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 04:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bilangpaulinian`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(30) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `account_id`, `firstname`, `lastname`, `password`, `role_as`) VALUES
(1, '2018-01362', 'Christian Daniel T ', 'Tamayao', '7cc05fb062cbb39a7878c3a3f36bb4b6dd465636', 'Admin'),
(2, '2016-00303', 'Dave Justine', 'Agabin', '27da3c3c1e227cb5cdd76cab1aa1ddb981b30bd8', 'schoolwide adviser'),
(3, '2017-01575', 'James Vinson', 'Villanueva\n', 'a4a45812d0511be4a57fe225cc684f589d86170c', 'Comelec Chair');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `rate`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3),
(4, 4, 2),
(5, 5, 3),
(6, 6, 3),
(7, 7, 2),
(8, 8, 3),
(9, 9, 3),
(10, 10, 3),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 1, 3),
(15, 2, 3),
(16, 3, 3),
(17, 4, 2),
(18, 5, 3),
(19, 6, 3),
(20, 7, 2),
(21, 8, 3),
(22, 9, 3),
(23, 10, 3),
(24, 11, 3),
(25, 12, 3),
(26, 13, 3),
(27, 1, 3),
(28, 2, 3),
(29, 3, 3),
(30, 4, 2),
(31, 5, 3),
(32, 6, 3),
(33, 7, 2),
(34, 8, 3),
(35, 9, 3),
(36, 10, 3),
(37, 11, 3),
(38, 12, 3),
(39, 13, 3),
(40, 1, 3),
(41, 2, 3),
(42, 3, 3),
(43, 4, 2),
(44, 5, 3),
(45, 6, 3),
(46, 7, 2),
(47, 8, 3),
(48, 9, 3),
(49, 10, 3),
(50, 11, 3),
(51, 12, 3),
(52, 13, 3),
(53, 1, 3),
(54, 2, 3),
(55, 3, 3),
(56, 4, 2),
(57, 5, 3),
(58, 6, 3),
(59, 7, 2),
(60, 8, 3),
(61, 9, 3),
(62, 10, 3),
(63, 11, 3),
(64, 12, 3),
(65, 13, 3),
(66, 1, 3),
(67, 2, 3),
(68, 3, 3),
(69, 4, 2),
(70, 5, 3),
(71, 6, 3),
(72, 7, 2),
(73, 8, 3),
(74, 9, 3),
(75, 10, 3),
(76, 11, 3),
(77, 12, 3),
(78, 13, 3),
(79, 1, 3),
(80, 2, 3),
(81, 3, 3),
(82, 4, 2),
(83, 5, 3),
(84, 6, 3),
(85, 7, 2),
(86, 8, 3),
(87, 9, 3),
(88, 10, 3),
(89, 11, 3),
(90, 12, 3),
(91, 13, 3),
(92, 1, 3),
(93, 2, 3),
(94, 3, 3),
(95, 4, 2),
(96, 5, 3),
(97, 6, 3),
(98, 7, 2),
(99, 8, 3),
(100, 9, 3),
(101, 10, 3),
(102, 11, 3),
(103, 12, 3),
(104, 13, 3),
(105, 1, 3),
(106, 2, 3),
(107, 3, 3),
(108, 4, 2),
(109, 5, 3),
(110, 6, 3),
(111, 7, 2),
(112, 8, 3),
(113, 9, 3),
(114, 10, 3),
(115, 11, 3),
(116, 12, 3),
(117, 13, 3),
(118, 1, 3),
(119, 2, 3),
(120, 3, 3),
(121, 4, 2),
(122, 5, 3),
(123, 6, 3),
(124, 7, 2),
(125, 8, 3),
(126, 9, 3),
(127, 10, 3),
(128, 11, 3),
(129, 12, 3),
(130, 13, 3),
(131, 1, 3),
(132, 2, 3),
(133, 3, 3),
(134, 4, 2),
(135, 5, 3),
(136, 6, 3),
(137, 7, 2),
(138, 8, 3),
(139, 9, 3),
(140, 10, 3),
(141, 11, 3),
(142, 12, 3),
(143, 13, 3),
(144, 1, 3),
(145, 2, 3),
(146, 3, 3),
(147, 4, 2),
(148, 5, 3),
(149, 6, 3),
(150, 7, 2),
(151, 8, 3),
(152, 9, 3),
(153, 10, 3),
(154, 11, 3),
(155, 12, 3),
(156, 13, 3),
(157, 1, 3),
(158, 2, 3),
(159, 3, 3),
(160, 4, 2),
(161, 5, 3),
(162, 6, 3),
(163, 7, 2),
(164, 8, 3),
(165, 9, 3),
(166, 10, 3),
(167, 11, 3),
(168, 12, 3),
(169, 13, 3),
(170, 1, 3),
(171, 2, 3),
(172, 3, 3),
(173, 4, 2),
(174, 5, 3),
(175, 6, 3),
(176, 7, 2),
(177, 8, 3),
(178, 9, 3),
(179, 10, 3),
(180, 11, 3),
(181, 12, 3),
(182, 13, 3),
(183, 1, 3),
(184, 2, 3),
(185, 3, 3),
(186, 4, 2),
(187, 5, 3),
(188, 6, 3),
(189, 7, 2),
(190, 8, 3),
(191, 9, 3),
(192, 10, 3),
(193, 11, 3),
(194, 12, 3),
(195, 13, 3),
(196, 6, 3),
(197, 7, 3),
(198, 8, 2),
(199, 9, 3),
(200, 10, 3),
(201, 11, 3),
(202, 12, 3),
(203, 13, 3),
(204, 1, 3),
(205, 2, 3),
(206, 3, 2),
(207, 4, 3),
(208, 5, 3),
(209, 6, 3),
(210, 7, 3),
(211, 8, 3),
(212, 9, 3),
(213, 10, 3),
(214, 11, 3),
(215, 12, 3),
(216, 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(11) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `question_id`, `rate`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3),
(4, 4, 2),
(5, 5, 3),
(6, 6, 3),
(7, 7, 2),
(8, 8, 3),
(9, 9, 3),
(10, 10, 3),
(11, 11, 3),
(12, 12, 3),
(13, 13, 3),
(14, 1, 3),
(15, 2, 3),
(16, 3, 3),
(17, 4, 2),
(18, 5, 3),
(19, 6, 3),
(20, 7, 2),
(21, 8, 3),
(22, 9, 3),
(23, 10, 3),
(24, 11, 3),
(25, 12, 3),
(26, 13, 3),
(27, 1, 3),
(28, 2, 3),
(29, 3, 3),
(30, 4, 2),
(31, 5, 3),
(32, 6, 3),
(33, 7, 2),
(34, 8, 3),
(35, 9, 3),
(36, 10, 3),
(37, 11, 3),
(38, 12, 3),
(39, 13, 3),
(40, 1, 3),
(41, 2, 0),
(42, 3, 0),
(43, 4, 0),
(44, 5, 0),
(45, 6, 0),
(46, 7, 0),
(47, 8, 0),
(48, 9, 0),
(49, 10, 0),
(50, 11, 0),
(51, 12, 0),
(52, 13, 0),
(53, 1, 3),
(54, 2, 3),
(55, 3, 3),
(56, 4, 2),
(57, 5, 3),
(58, 6, 3),
(59, 7, 2),
(60, 8, 3),
(61, 9, 3),
(62, 10, 3),
(63, 11, 3),
(64, 12, 3),
(65, 13, 3),
(66, 1, 3),
(67, 2, 3),
(68, 3, 3),
(69, 4, 2),
(70, 5, 3),
(71, 6, 3),
(72, 7, 2),
(73, 8, 3),
(74, 9, 3),
(75, 10, 3),
(76, 11, 3),
(77, 12, 3),
(78, 13, 3),
(79, 1, 3),
(80, 2, 3),
(81, 3, 3),
(82, 4, 2),
(83, 5, 3),
(84, 6, 3),
(85, 7, 2),
(86, 8, 3),
(87, 9, 3),
(88, 10, 3),
(89, 11, 3),
(90, 12, 3),
(91, 13, 3),
(92, 1, 3),
(93, 2, 3),
(94, 3, 3),
(95, 4, 2),
(96, 5, 3),
(97, 6, 3),
(98, 7, 2),
(99, 8, 3),
(100, 9, 3),
(101, 10, 3),
(102, 11, 3),
(103, 12, 3),
(104, 13, 3),
(105, 1, 3),
(106, 1, 3),
(107, 1, 3),
(108, 2, 3),
(109, 3, 3),
(110, 4, 2),
(111, 5, 3),
(112, 6, 3),
(113, 7, 2),
(114, 8, 3),
(115, 9, 3),
(116, 10, 3),
(117, 11, 3),
(118, 12, 3),
(119, 13, 3),
(120, 1, 3),
(121, 2, 3),
(122, 3, 3),
(123, 4, 2),
(124, 5, 3),
(125, 6, 3),
(126, 7, 2),
(127, 8, 3),
(128, 9, 3),
(129, 10, 3),
(130, 11, 3),
(131, 12, 3),
(132, 13, 3),
(133, 1, 3),
(134, 2, 3),
(135, 3, 3),
(136, 4, 2),
(137, 5, 3),
(138, 6, 3),
(139, 7, 2),
(140, 8, 3),
(141, 9, 3),
(142, 10, 3),
(143, 11, 3),
(144, 12, 3),
(145, 13, 3),
(146, 1, 3),
(147, 2, 3),
(148, 3, 3),
(149, 4, 2),
(150, 5, 3),
(151, 6, 3),
(152, 7, 2),
(153, 8, 3),
(154, 9, 3),
(155, 10, 3),
(156, 11, 3),
(157, 12, 3),
(158, 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidates_id` int(11) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `student_id` varchar(65) NOT NULL,
  `dsn_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `requirements` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidates_id`, `picture`, `student_id`, `dsn_id`, `position_id`, `requirements`) VALUES
(9, '1687573750.png', '2020-010189', 1, 2, 'comelec,picture,coc,recom,valid_id,cog,la'),
(10, '1687573772.png', '2020-010434', 1, 3, 'comelec'),
(11, '1687573795.png', '2019-01-020', 1, 4, 'comelec'),
(12, '1687573859.png', '2020-010056', 1, 5, 'comelec'),
(13, '1687573890.png', 'G2019-01448', 1, 6, 'valid_id'),
(14, '1664724378.png', '2021-02-1395', 1, 6, ''),
(15, '1664724395.png', '2022-01-1366', 1, 6, ''),
(16, '1664724433.png', '2019-0200027', 1, 6, ''),
(17, '1664724506.png', '2019-01-441', 1, 6, ''),
(18, '1664724520.png', '2020-010341', 1, 6, ''),
(19, '1664724532.png', '2021-01-1781', 1, 6, ''),
(20, '1664724574.png', '2021-01-1699', 1, 6, ''),
(21, '1664724641.png', '2019-01490', 1, 6, ''),
(22, '1664724688.png', '2019-01303', 1, 6, ''),
(23, '1664724768.png', '2021-01-1545', 1, 6, ''),
(24, '1664724787.png', '2021-01-1520', 1, 6, ''),
(25, '1664724803.png', '2013-00100', 1, 7, ''),
(26, '1664724823.png', '2017-01228', 1, 7, ''),
(27, '1664724854.png', '2006-0116952', 1, 7, ''),
(28, '1664724873.png', '2019-0200017', 1, 7, ''),
(29, '1664724913.png', '2022-01-1540', 1, 7, ''),
(30, '1664753057.png', '2020-010250', 1, 7, ''),
(31, '1664725115.png', '2020-01208', 1, 7, ''),
(32, '1664725146.png', '2021-01-1546', 1, 7, ''),
(33, '1664725399.png', '2020-010010', 2, 8, ''),
(34, '1664728730.png', '2019-01038', 2, 9, ''),
(35, '1664754160.png', '2022-01-0349', 2, 10, ''),
(36, '1664753581.png', '2021-01-1354', 2, 11, ''),
(37, '1687612871.png', '2018-01362', 2, 12, 'comelec,picture,coc,recom,interview,valid_id,cogm'),
(38, '1664754283.png', '2019-01-524', 2, 13, ''),
(39, '1664727302.png', '2016-00816', 2, 14, ''),
(40, '1664727348.png', '2020-01-152', 2, 14, ''),
(41, '1664727455.png', '2021-01-1456', 2, 14, ''),
(42, '1664754299.png', '2017-01384', 2, 14, ''),
(43, '1664754383.png', '2019-01012', 2, 14, ''),
(44, '1664753539.png', '2021-01-1932', 2, 14, ''),
(45, '1664727742.jpeg', '2022-01-0046', 2, 14, ''),
(46, '1664755126.png', '2018-01-1000', 2, 14, ''),
(47, '1664754331.png', 'G2012-00185', 2, 16, ''),
(48, '1664754204.png', '2016-00499', 2, 15, ''),
(49, '1664727946.png', '2021-01-1571', 2, 18, ''),
(50, '1664728004.png', '2019-01795', 2, 17, ''),
(51, '1664728051.png', '2018-01922', 2, 20, ''),
(52, '1664754553.png', '2016-00303', 2, 19, ''),
(53, '1664753934.png', '2017-01758', 2, 22, ''),
(54, '1664771223.png', '2019-01-470', 2, 21, ''),
(55, '1664753974.png', '2016-01165', 2, 23, ''),
(56, '1664729052.png', '2018-01997', 3, 24, ''),
(57, '1664729087.png', '2018-01731', 3, 25, ''),
(58, '1664729233.png', '2020-02-0004', 3, 26, ''),
(59, '1664777626.png', '2018-01224', 3, 27, ''),
(60, '1664729352.png', '2018-01893', 3, 28, ''),
(61, '1664729403.png', '2020-010118', 3, 29, ''),
(62, '1664729501.png', '2018-01330', 3, 29, ''),
(63, '1664729524.png', '2019-01-811', 3, 29, ''),
(64, '1664729643.png', '2020-010533', 3, 29, ''),
(65, '1664729658.png', '2018-01798', 3, 29, ''),
(66, '1664777703.png', 'G2015-00333', 3, 29, ''),
(67, '1664777761.png', '2022-01-1384', 3, 29, ''),
(68, '1664729981.png', '2022-01-1357', 3, 29, ''),
(69, '1664777789.png', 'G2020-01005', 3, 30, ''),
(70, '1664777810.png', '2019-01423', 3, 31, ''),
(71, '1664730245.png', '2018-01060', 3, 32, ''),
(72, '1664777836.png', 'G2017-01686', 3, 33, ''),
(73, '1664730562.png', '2019-01-1203', 4, 34, ''),
(74, '1664730577.png', '2018-01743', 4, 35, ''),
(75, '1664730620.png', '2019-01-398', 4, 36, ''),
(76, '1664798393.png', '2019-01-855', 4, 37, ''),
(77, '1664730797.png', '2020-01-099', 4, 38, ''),
(78, '1664730827.png', '2015-00360', 4, 39, ''),
(79, '1664730852.png', '2022-01-1073', 4, 39, ''),
(80, '1664730899.png', '2015-00202', 4, 39, ''),
(81, '1664730941.png', 'G2015-00266', 4, 39, ''),
(82, '1664731205.jpg', 'G2019-01556', 4, 39, ''),
(83, '1664731242.png', '2020-02-0013', 4, 39, ''),
(84, '1664731275.png', '2005-00007', 4, 39, ''),
(85, '1664731298.png', '2019-01496', 4, 39, ''),
(86, '1664731367.JPG', '2022-01-0031', 4, 40, ''),
(87, '1664731427.png', '2019-01560', 4, 41, ''),
(88, '1664731448.jpg', '2018-02034', 4, 42, ''),
(89, '1664754857.png', '2017-01346', 5, 44, ''),
(90, '1664732202.png', '2020-01-161', 5, 45, ''),
(91, '1664732236.png', '2020-01-164', 5, 46, ''),
(92, '1664798430.png', '2007-126442', 5, 47, ''),
(93, '1664732363.png', '2018-01831', 5, 48, ''),
(94, '1664732416.png', 'G2015-00217', 5, 49, ''),
(95, '1664732450.png', '2016-00274', 5, 49, ''),
(96, '1664732470.png', '2019-01425', 5, 49, ''),
(97, '1664732520.png', 'G2020-01396', 5, 49, ''),
(98, '1664732638.png', '2018-01498', 5, 52, ''),
(101, '1686718485.', '2020-01-01005', 1, 2, 'cog,la'),
(102, '1687195015.png', '2017-01-0362', 4, 37, 'comelec,picture,coc,recom,interview,valid_id,cogm,cog,la'),
(103, '1664724068.png', '2019-01-472', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `dsn_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `description` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`dsn_id`, `dept_id`, `description`) VALUES
(1, 5, 'UNIWIDE'),
(2, 1, 'SW_SITE'),
(3, 2, 'SW_SASTE'),
(4, 4, 'SW_SNASH'),
(5, 3, 'SW_SBAHM');

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `id` int(11) NOT NULL,
  `number` varchar(70) NOT NULL,
  `dom_name` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`id`, `number`, `dom_name`, `description`) VALUES
(1, '1', 'PAULINIAN LEADERSHIP AS SOCIAL RESPONSIBILITY', '<div style=\"text-align: justify;\"><span style=\"font-family: \"Times New Roman\";\">This focuses on the account that Paulinian Leaders\' demonstrate good leadership in the activities of the organization, of the university, and of their respective community. This domain is further exemplified by the Paulinian Leaders\' plans, action, accomplishments, and social interaction with the sister, administrators, faculty, and their fellow students.</span></div>'),
(2, '2', 'PAULINIAN LEADERSHIP AS A LIFE OF SERVICES', '<div style=\"text-align: justify;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">This gears towards the fulfillment of the Paulinian Leaders\' active and utmost involvement in the organization, management, and evaluation of the activities of the organization, university, and community. In this domain, voluntary and special services rendered are notable manifestations of accomplishments.</span></div>'),
(3, '3', 'PAULINIAN LEADER AS LEADING BY EXAMPLE (Discipline/Decorum)', '<div style=\"text-align: justify;\"><span style=\"font-family: \"Times New Roman\";\">This refers to how the Paulinian Leaders\' conform to Paulinian norms and conduct. It is reflected in their fidelity to the policies on decorum, proper grooming, as well as showing Paulinian traits-promptness, warmth, simplicity, proactiveness and hospitality-to people they are dealing with. Their compliance to the Environmental Stewardship advocacy of the university is also notably assessed.</span></div>');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_answer`
--

CREATE TABLE `evaluation_answer` (
  `evaluation_id` int(30) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_list`
--

CREATE TABLE `evaluation_list` (
  `evaluation_id` int(30) NOT NULL,
  `candidates_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(30) NOT NULL,
  `student_id` varchar(100) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dept_id` int(30) DEFAULT NULL,
  `dsn_id` int(30) DEFAULT NULL,
  `position_id` int(30) DEFAULT NULL,
  `course` varchar(150) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `student_id`, `fname`, `lname`, `dept_id`, `dsn_id`, `position_id`, `course`, `year`) VALUES
(1, '2018-01362', 'Christian Daniel', 'Tamayao', 1, 2, 12, 'BSIT', '3'),
(2, '2016-00303', 'Dave Justine', 'Agabin', 1, 1, 19, 'BSIT', '3'),
(3, '2020-010069', 'Angeline', 'Julian', 2, 2, 21, 'BSIT', '3'),
(4, '2006-0116952', 'Angela Grace', 'Garcia', 2, 1, 7, 'BSSW', '2'),
(5, '098765432', 'Lester', 'Pascua', 1, 2, 8, 'BSIT', '3'),
(6, '22222', 'Biegh John Paul', 'Alonzo', 1, 2, 14, 'BSIT', '3');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL,
  `dsn_id` int(11) NOT NULL,
  `position_title` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `dsn_id`, `position_title`) VALUES
(1, 1, 'President'),
(2, 1, 'Vice President'),
(3, 1, 'Executive Secretary'),
(4, 1, 'Treasurer'),
(5, 1, 'Press Relations Officer'),
(6, 1, 'Senator'),
(7, 1, 'Congress'),
(8, 2, 'Governor'),
(9, 2, 'Vice Governor'),
(10, 2, 'Secretary'),
(11, 2, 'Treasurer'),
(12, 2, 'Press Relations Officer (IT)'),
(13, 2, 'Press Relations Officer (Engr)'),
(14, 2, 'Councilor'),
(15, 2, '1st Year Mayor (IT)'),
(16, 2, '1st Year Mayor (Engr)'),
(17, 2, '2nd Year Mayor (IT)'),
(18, 2, '2nd Year Mayor (Engr)'),
(19, 2, '3rd Year Mayor (IT)'),
(20, 2, '3rd Year Mayor (Engr)'),
(21, 2, '4th Year Mayor (IT)'),
(22, 2, '4th Year Mayor (Engr)'),
(23, 2, '5th Year Mayor (Engr)'),
(24, 3, 'Governors'),
(25, 3, 'Vice Governor'),
(26, 3, 'Secretary'),
(27, 3, 'Treasurer'),
(28, 3, 'Press Relations Officer'),
(29, 3, 'Councilor'),
(30, 3, '1st Year Mayor'),
(31, 3, '2nd Year Mayor'),
(32, 3, '3rd Year Mayor'),
(33, 3, '4th Year Mayor'),
(34, 4, 'Governor'),
(35, 4, 'Vice Governor'),
(36, 4, 'Secretary'),
(37, 4, 'Treasurer'),
(38, 4, 'Press Relations Officer'),
(39, 4, 'Councilor'),
(40, 4, '1st Year Mayor'),
(41, 4, '2nd Year Mayor'),
(42, 4, '3rd Year Mayor'),
(44, 5, 'Governor'),
(45, 5, 'Vice Governor'),
(46, 5, 'Secretary'),
(47, 5, 'Treasurer'),
(48, 5, 'Press Relations Officer'),
(49, 5, 'Councilor'),
(50, 5, '1st Year Mayor'),
(51, 5, '2nd Year Mayor'),
(52, 5, '3rd Year Mayor'),
(53, 5, '4th Year Mayor');

-- --------------------------------------------------------

--
-- Table structure for table `restriction_list`
--

CREATE TABLE `restriction_list` (
  `restriction_id` int(30) NOT NULL,
  `officer_id` int(30) NOT NULL,
  `dsn_id` int(30) NOT NULL,
  `position_id` int(30) NOT NULL,
  `dept_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restriction_list`
--

INSERT INTO `restriction_list` (`restriction_id`, `officer_id`, `dsn_id`, `position_id`, `dept_id`) VALUES
(1, 1, 2, 12, 1),
(2, 1, 1, 6, 1),
(3, 1, 4, 34, 3),
(5, 2, 2, 19, 1),
(6, 4, 1, 7, 2),
(7, 1, 2, 10, 1),
(8, 5, 2, 8, 1),
(9, 6, 2, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(65) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `site_course` varchar(11) NOT NULL,
  `year` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `fname`, `lname`, `dept_id`, `course`, `site_course`, `year`) VALUES
('2005-00007', 'AUDREY JESSA', 'TAMBIAO', 4, 'BSN', '', '2'),
('2006-0116952', 'ANGELA GRACE', 'GARCIA', 2, 'BSSW', '', '2'),
('2007-126442', 'KENNEY BRYAN', 'MIGUEL', 3, 'BSA', '', '4'),
('2013-00100', 'DARIANNE JOY ', 'CACAYURIN', 4, 'BSN', '', '4'),
('2015-00202', 'ALLEIN JENINE', 'MALANA', 4, 'BSMT', '', '2'),
('2015-00360', 'IMEE TRISHA', 'SALAZAR', 4, 'BSN', '', '2'),
('2016-00274', 'KRISHELAH DOMINIQUE', 'TESTADO', 3, 'BSBA-FM', '', '2'),
('2016-00303', 'DAVE JUSTINE', 'AGABIN', 1, 'BSIT', 'BSIT', '3'),
('2016-00499 ', 'LOUISE ANTHONY', 'BUGAYONG', 1, 'BSIT', 'BSIT', '1'),
('2016-00816', 'MARY MAE', 'REANTILLO', 1, 'BSIT', 'BSIT', '4'),
('2016-01165', 'CHRISTINE ', 'BANCUD', 1, 'BSCE', 'ENGR', '5'),
('2017-01228', 'BIANCA', 'TUPAS', 4, 'BSN', '', '4'),
('2017-01346', 'JODESSAH MAE', 'BACUD', 3, 'BSA', '', '4'),
('2017-01384', 'JOHN PAULUS SERAFIN', 'GAZZINGAN', 1, 'BSIT', 'BSIT', '3'),
('2017-01758', 'FAYE VANESSA', 'GOROSPE', 1, 'BSCpE', 'ENGR', '4'),
('2018-01-1000', 'DARREN ANGELO', 'CALLUENG', 1, 'BSIT', 'BSIT', '3'),
('2018-01060', 'KRISTEL KAYLA ', 'TADAYA', 2, 'BSED', '', '3'),
('2018-01224', 'ANGHELIECA KHAYTE', 'TUMBAGA', 2, 'BSPA', '', '3'),
('2018-01330', 'DARLENE ', 'TOLETE', 2, 'BSPsych', '', '3'),
('2018-01362', 'CHRISTIAN DANIEL  ', 'TAMAYAO', 1, 'BSIT', 'BSIT', '3'),
('2018-01498', 'WILSON MATHUGH', 'ARUGAY', 3, 'BSA', '', '3'),
('2018-01731', 'RONNIE', 'BALLAD', 2, 'BSPsych', '', '3'),
('2018-01743', 'SHERAZADE ', 'UBAY', 4, 'BSPharma', '', '3'),
('2018-01798', 'TWINKLE', 'FERNANDEZ', 2, 'BSPsych', '', '1'),
('2018-01831', 'SHAYNNAH', 'QUILANG', 3, 'BSTM', '', '3'),
('2018-01893', 'YESSAMIN FAYE', 'GUILLEN', 2, 'BSPsych', '', '3'),
('2018-01922', 'JENNY JOY', 'TEPPANG', 1, 'BSCE', 'ENGR', '3'),
('2018-01997', 'JEVY MARK', 'DUPAY', 2, 'BSED', '', '3'),
('2018-02034', 'RINALENE JOY', 'DURAN', 4, 'BSMT', '', '3'),
('2019-01-020', 'ALYSHA ', 'BUYAGAN', 2, 'BAELS', '', '4'),
('2019-01-1203', 'JARED NILES', 'SANTOS', 4, 'BSN', '', '4'),
('2019-01-398', 'DAYNE ANGELI', 'CABASAL', 4, 'BSPharma', '', '4'),
('2019-01-441', 'AELTHEO ', 'BALUBAL', 2, 'BAELS', '', '4'),
('2019-01-470', 'NOVIE ANN ', 'TABLAC', 1, 'BSIT', 'BSIT', '4'),
('2019-01-472', 'KRISHA LEI', 'BERBANO', 2, 'BSPA', '', '4'),
('2019-01-524', 'SPENCER', 'RUIZ', 1, 'BSCpE', 'ENGR', '4'),
('2019-01-811', 'CHERRY MAE', 'MORGADO', 2, 'BSED', '', '3'),
('2019-01-855', 'ARLYN JOY ', 'TORRADO', 4, 'BSMT', '', '4'),
('2019-01012', 'DHEA JANELLE', 'TORRES', 1, 'BSIT', 'BSIT', '2'),
('2019-01038', 'PRINCESS JASTINE MAE ', 'REÑA', 1, 'BSCpE', 'ENGR', '4'),
('2019-01303', 'JOSEPHINE ROSE', 'ALBANO', 3, 'BSTM', '', '2'),
('2019-01423', 'NATHALIE MAE ', 'ESCUCHARO', 2, 'BSPA', '', '2'),
('2019-01425', 'CRISTEL', 'MORGADO', 3, 'BSTM', '', '2'),
('2019-01490', 'BENJAMIN', 'MALSI', 4, 'BSMT', '', '2'),
('2019-01496', 'ANGELICA ', 'DELA CRUZ', 4, 'BSMT', '', '2'),
('2019-01560', 'RAILEY LAYNE', 'BATAC', 4, 'BSMT', '', '2'),
('2019-01795', 'JNMARK FRIEDRICH ', 'AGUSTIN', 1, 'BSIT', 'BSIT', '2'),
('2019-0200017', 'QUEEN DOMINIQUE', 'CABIAO', 2, 'BSPsych', '', '4'),
('2019-0200027', 'HANNAH FRANCESCA ', 'HERICO', 2, 'BSPsych', '', '4'),
('2020-01-01005', 'Angeline', 'Julian', 1, 'BSIT', 'BSIT', '3'),
('2020-01-099', 'ROSHEL DAPHNE', 'DUMALAO', 4, 'BSMT', '', '3'),
('2020-01-152', 'JEROME YVAN', 'VENTURA', 1, 'BSCpE', 'ENGR', '3'),
('2020-01-161', 'GRACIELLA ', 'GOYAGOY', 3, 'BSTM', '', '3'),
('2020-01-164', 'LILIAN ', 'TALLA', 3, 'BSTM', '', '3'),
('2020-010010', 'BIEGH JOHN PAUL', 'ALONZO', 1, 'BSIT', 'BSIT', '3'),
('2020-010056', 'VINCE JAKOD', 'CEREZO', 1, 'BSCpE', 'ENGR', '3'),
('2020-010118', 'SHANELLE KAYE', 'ARUCAN', 2, 'BSPsych', '', '3'),
('2020-010189', 'YOWELLE CHED', 'SEDANO', 2, 'BSPA', '', '3'),
('2020-010250', 'JOHN LESTER ', 'GAMATA', 1, 'BSCpE', 'ENGR', '3'),
('2020-010341', 'CLARENCE ', 'REMUDARO', 4, 'BSN', '', '3'),
('2020-010434', 'MA. ANGELICA ', 'PEREZ', 2, 'BSPA', '', '3'),
('2020-010533', 'ALDWIN JAMES', 'POCOT', 2, 'BSPA', '', '2'),
('2020-01208', 'ZACH', 'BUGUNA', 3, 'BSA', '', '1'),
('2020-02-0004', 'EMITERIO', 'NICOLAS', 2, 'BSSW', '', '3'),
('2020-02-0013', 'SHAINE HAZEL', 'MEDRANO', 4, 'BSRT', '', '2'),
('2021-01-1354', 'CHRISTINE ', 'COMITAN', 1, 'BSIT', 'BSIT', '2'),
('2021-01-1456', 'KAYLA MAE', 'MALENAB', 1, 'BSCE', 'ENGR', '2'),
('2021-01-1520', 'JERYLE ', 'SACLAG', 3, 'BSTM', '', '2'),
('2021-01-1545', 'BRIGITTE ', 'ALZATE', 3, 'BSTM', '', '2'),
('2021-01-1546', 'COLEEN ', 'CALALANG', 3, 'BSTM', '', '2'),
('2021-01-1571', 'ALDRIN JAKE', 'ANCHETA', 1, 'BSCE', 'ENGR', '2'),
('2021-01-1699', 'JOYCE', 'ACERIT', 4, 'BSMT', '', '2'),
('2021-01-1781', 'JUSTINE KENNETH ', 'IMPERIAL', 4, 'BSN', '', '2'),
('2021-01-1932', 'GEORGETTE FLEUR', 'LUCAS', 1, 'BSCE', 'ENGR', '4'),
('2021-02-1395', 'CHRISTOPHER ', 'MANALANG II', 1, 'BSIT', 'BSIT', '2'),
('2022-01-0031', 'ZYRELL ANDREI', 'IBAY', 4, 'BSN', '', '1'),
('2022-01-0046', 'CATHERINE', 'DALAFU', 1, 'BSIT', 'BSIT', '1'),
('2022-01-0349', 'CRISTINA', 'TUAZON', 1, 'BSIT', 'BSIT', '1'),
('2022-01-1073', 'DAIRAGENE', 'OBUSAN', 4, 'BSN', '', '1'),
('2022-01-1357', 'FRENCIPE ', 'SOMERA', 2, 'BSPA', '', '1'),
('2022-01-1366', 'ELIJAH', 'ALONZO', 1, 'BSIT', 'BSIT', '1'),
('2022-01-1384', 'CAMILLE ROMEE', 'LOU', 2, 'BEED', '', '1'),
('2022-01-1540', 'JHAZER HART', 'ANTONIO', 1, 'BSIT', 'BSIT', '1'),
('G2012-00185', 'CLARK JOSHUA', 'RAPANUT', 1, 'BSCE', 'ENGR', '1'),
('G2015-00217', 'JAYELLA KATE', 'SAQUING', 3, 'BSBA-FM', '', '2'),
('G2015-00266', 'KASSANDRA ', 'TAGUIAM', 4, 'BSN', '', '2'),
('G2015-00333', 'JOHN PATRICK ', 'DELA CRUZ', 2, 'BSPsych', '', '1'),
('G2017-01686', 'CEZ ANNE', 'MEDRANO', 2, 'BAELS', '', '4'),
('G2019-01448', 'EMMANUEL ', 'JOSE', 1, 'BSCE', 'ENGR', '2'),
('G2019-01556', 'VIKTOR CARLO', 'BACCAY', 4, 'BSRT', '', '2'),
('G2020-01005', 'APRIL ALEXELLE', 'AWINGAN', 2, 'BSED', '', '1'),
('G2020-01396', 'JERMAINE KAYE', 'ABROGENA', 3, 'BSTM', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbleval_form`
--

CREATE TABLE `tbleval_form` (
  `id` int(11) NOT NULL,
  `form_number` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbleval_form`
--

INSERT INTO `tbleval_form` (`id`, `form_number`, `name`) VALUES
(1, 'SAASS-PSG 08', 'Adviser Form'),
(2, 'SAASS-PSG 09', 'Peer/Student Moderator'),
(3, 'SAASS-PSG 10', 'Self Form');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `id` int(11) NOT NULL,
  `account_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_archive`
--

CREATE TABLE `tbl_archive` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `dsn_id` int(30) NOT NULL,
  `position_id` int(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_archive`
--

INSERT INTO `tbl_archive` (`id`, `picture`, `student_id`, `dsn_id`, `position_id`, `date`) VALUES
(99, '1686158139.', '2020-01362', 1, 1, '2023-06-23 17:30:37'),
(100, '1686158917.png', '2019-01362', 1, 1, '2023-06-23 17:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_criteria`
--

CREATE TABLE `tbl_criteria` (
  `id` int(11) NOT NULL,
  `strand` text NOT NULL,
  `name` text NOT NULL,
  `domain_id` int(30) NOT NULL,
  `eval_form_id` int(11) NOT NULL,
  `order_by` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_criteria`
--

INSERT INTO `tbl_criteria` (`id`, `strand`, `name`, `domain_id`, `eval_form_id`, `order_by`) VALUES
(1, 'Strand 1.', 'The Paulinian Leader submits himself/herself to professional growth and development.', 1, 1, NULL),
(2, 'Strand 2.', 'The Paulinian Leader is quality result-oriented', 1, 1, NULL),
(3, 'Strand 2.', ' The Paulinian Leader actively participates in the activities of the organization and university.', 2, 1, NULL),
(4, 'Strand 1.', 'The Paulinian Leader serves the organization, its members, and the university.', 2, 1, NULL),
(5, 'Strand 3.', 'The Paulinian Leader shows utmost commitment by participating in related activities', 2, 1, NULL),
(6, 'Strand 1. ', 'The Paulinian Leader is a model of grooming and proper decorum', 3, 1, NULL),
(7, 'Strand 2. ', 'The Paulinian Leader complies with the Environmental Stewardship of the university', 3, 1, NULL),
(8, 'Strand 1.', 'The Paulinian Leader serves the organization, its members, and the university', 2, 2, NULL),
(9, 'Strand 2.', 'The Paulinian Leader activity participants in the activities of the organization and university', 2, 2, NULL),
(10, 'Strand 3.', ' The Paulinian Leader shows utmost commitment by participating in related activities.', 2, 2, NULL),
(11, 'Strand 1.', 'The Paulinian Leader is a model of grooming and proper decorum.', 3, 2, NULL),
(12, 'Strand 2.', 'The Paulinian Leader complies with the Environmental Sterwardship of the University.', 3, 2, NULL),
(13, 'Strand 1.', 'The Paulinian Leader serves the organization, its members, and the university', 2, 3, NULL),
(14, 'Strand 2.', 'The Paulinian Leader activity participates in the activities of the organization and university.', 2, 3, NULL),
(15, 'Strand 1.', 'The Paulinian Leader is a model of grooming and proper decorum', 3, 3, NULL),
(16, 'Strand 2.', 'The Paulinian Leader complies with the Environmental Sterwardship of the University.', 3, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `dept_id` int(30) NOT NULL,
  `dept_code` varchar(65) NOT NULL,
  `dept_title` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`dept_id`, `dept_code`, `dept_title`) VALUES
(1, 'SITE', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING'),
(2, 'SASTE', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION'),
(3, 'SNAHS', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES'),
(4, 'SBAHM', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT'),
(5, 'SPUP', 'ST PAUL UNIVERSITY PHILIPPINES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `id` int(30) NOT NULL,
  `criteria_id` int(30) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`id`, `criteria_id`, `question`) VALUES
(1, 1, '1.1 The Paulinian Leader organizes/co-organizes and/or serves as resource speaker in seminars and activities for the organization.'),
(2, 1, '1.2 The Paulinian Leader facilitates/co-facilitates seminars and activities for the organization'),
(3, 1, '1.3 The Paulinian Leader participate seminars and activities for the organization'),
(4, 1, '1.4 The Paulinian Leader attends to SPUP. organized seminars and activities related to the organization.'),
(5, 2, '2.2 The Paulinian Leader ensures quality in all tasks/assignment given.'),
(6, 4, '<p>1.1 The Paulinian Leader:\r\n</p><p>\r\na. performs related task outside the given assignment;\r\n</p><p>\r\nb. initiates actions to solve issues among students and those that concern the organization/university;and\r\n</p><p>\r\nc. participants in the aftercare during activities</p>'),
(7, 3, '2.1 The Paulinian Leader shares in the organization\'s management and evaluation of the organization. activities for the organization.'),
(8, 3, '2.2 The Paulinian Leader shares in the organization, management, evaluation of project/activities of the university.'),
(9, 5, '3.1 The Paulinian Leader attends regular meetings.'),
(10, 5, '3.2 The Paulinian Leader attends special/emergency meetings.'),
(11, 6, '<p>1.1 The Paulinian Leader:\r\n</p><p>\r\na. wear the correct uniform with its prescribed accessories (shoes, ID strap, undergarment, and bag);\r\n</p><p>\r\nb. wear ID at all times while on campus.</p><p>\r\n\r\nc. observes Silence Policy on corridors/offices;</p><p>\r\n\r\nd. shows courtesy to the spup community;</p><p>\r\n\r\ne. shows warmth and respect to visitors and guest of the University;</p><p>\r\n\r\nf. models prescribed haircut (male) or hairstyle and accessories (female); and</p><p>\r\n\r\ng. exhibits punctuality during meeting and activities.</p>'),
(12, 6, '1.2 The Paulinian Leader submits reports regularly'),
(13, 7, '2.1 The Paulinian Leader ensures cleanliness and orderliness of office/workplace.'),
(14, 8, '1.1 The Paulinian Leader: a. performs related task outside the given assignment;\r\n\r\nb. initiated actions to solve issues among students and those that concern the organization/university; and\r\n\r\nc. participants in the aftercare during activities.'),
(15, 9, '2.1 The Paulinian Leader shares in the organization\'s management and management and evaluation of the organization.'),
(16, 9, '2.2 The Paulinian Leader shares in the organization\'s management and management and evaluation of project/activities of the organization.'),
(17, 17, '3.1 The Paulinian Leader attends regular meeting.'),
(18, 17, '3.2 The Paulinian Leader attends special/emergency meetings.'),
(19, 11, '1.1 The Paulinian Leader:\r\n\r\na. wears the correct uniform with its prescribed (shoes, ID strap, undergarment, and bag)\r\n\r\nb. wears ID at all times while on campus;\r\n\r\nc. observes Silence Policy on corridors/offices;\r\n\r\nd. shows courterys to the SPUP community;\r\n\r\ne. shows warmth and respect to visitors and guests of the University;\r\n\r\nf. models prescribed haircut (male) or hairstyle and accessories (female); and\r\n\r\ng. exhibits punctuality during meeting and activities'),
(20, 11, '1.2 The Paulinian Leader submits reports regulary.'),
(21, 12, '2.1 The Paulinian Leader ensures cleanliness and orderliness of office/workplace'),
(22, 13, '1.1 The Paulinian Leader:\r\n\r\na. performs related task outside the given assignment;\r\n\r\nb. initiates actions to solve issues among students and those that concern the organization/univserty and;\r\n\r\nc. participants in the aftercare during activities'),
(23, 14, '2.1 The Paulinian Leader shares in the organizations management and management and evaluation of the organization'),
(24, 14, '2.2 The Paulinian Leader shares in the organizations management and management and evaluation of the organization.'),
(25, 15, '1.1 The Paulinian Leader:\r\n\r\na. wears the correct uniform with its prescribed\r\n\r\n(shoes, ID strap, undergarment, and bag)\r\n\r\nb. wears ID at all times while on campus;\r\n\r\nc. observes Silence Policy on corridors/offices;\r\n\r\nd. shows courterys to the SPUP community;\r\n\r\ne. shows warmth and respect to visitors and guests of the University;\r\n\r\nf. models prescribed haircut (male) or hairstyle and accessories (female); and\r\n\r\ng. exhibits punctuality during meeting and activities'),
(26, 15, '1.2 The Paulinian Leader submits reports regulary.'),
(27, 16, '2.1 The Paulinian Leader ensures cleanliness and orderliness of office/workplace');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_rate`
--

CREATE TABLE `tbl_question_rate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) NOT NULL,
  `rate0` text NOT NULL,
  `rate1` text NOT NULL,
  `rate2` text NOT NULL,
  `rate3` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_question_rate`
--

INSERT INTO `tbl_question_rate` (`id`, `question_id`, `criteria_id`, `rate0`, `rate1`, `rate2`, `rate3`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Has not organized/co-organized seminars/activities', ' Has organized/co-organized one seminars/activities', 'Has organized/co-organized two seminars/activities', ' Has organized/co-organized more than two seminars/activities', NULL, NULL),
(2, 2, 2, 'Has not facilitated/co-facilitated  seminars/activities', 'Has facilitated/co-facilitated one seminars/activities', 'Has facilitated/co-facilitated two seminars/activities', 'Has facilitated/co-facilitated  more than two seminars/activities', NULL, NULL),
(3, 3, 2, 'Performs but needs improvement on the tasks/assignments', 'Performs satisfactory on the tasks/assignments', 'Performs  very satisfactory on the tasks/assignments', 'Performs outstanding/excellent on the tasks/assignments', NULL, NULL),
(4, 4, 1, 'Has not participated in any seminars/activities', 'Has participated in one to two seminars/activities', 'Has participated in three to four seminars/activities', 'Has participated in more than four seminars/activities', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `rate` int(30) NOT NULL,
  `question_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `name`, `rate`, `question_id`) VALUES
(1, 'Has organized/co-organized more than two seminars/activities', 3, 1),
(2, 'Has organized/co-organized two seminars/activities', 2, 1),
(3, 'Has organized/co-organized one seminars/activities.', 1, 1),
(4, ' Has not organized/co-organized  seminars/activities.', 0, 1),
(5, 'Has facilitated/co-facilitated more than two seminars/activities.', 3, 2),
(6, ' Has facilitated/co-facilitated  two seminars/activities.', 2, 2),
(7, ' Has facilitated/co-facilitated one seminars/activities.', 1, 2),
(8, ' Has not facilitated/co-facilitated seminars/activities.', 0, 2),
(9, ' Has participated more than four seminars/activities.', 3, 3),
(10, 'Has participated in three to four seminars/activities.', 2, 3),
(11, 'Has participated in one to two seminars/activities.', 1, 3),
(12, ' Has not participated in any seminars/activities.', 0, 3),
(13, 'Has attended to more than four seminars/activities.', 3, 4),
(14, '  Has attended to three to four seminars/activities.', 2, 4),
(15, ' Has attended to one to two seminars/activities.', 1, 4),
(16, ' Has not attended to any seminars/activities.', 0, 4),
(17, ' Performs outstanding/excellent on the task/assignments', 3, 5),
(18, ' Performs very satisfactory on the task/assignments', 2, 5),
(19, 'Performs satisfactory on the task/assignments', 1, 5),
(20, ' Performs but needs improvement on the task/assignments', 0, 5),
(21, 'All three indicators are met.', 3, 6),
(22, 'Only two of the given indicators are met.', 2, 6),
(23, 'Only one of the given indicators is met.', 1, 6),
(24, 'None of the indicators is met.', 0, 6),
(25, 'Has participated in three or more varied organizational activities.', 3, 7),
(26, 'Has participated in two varied organizational activities.', 2, 7),
(27, 'Has participated in only one organizational activity.', 1, 7),
(28, 'Has not participated in any organizational activity.', 0, 7),
(29, 'Has participated in three or more varied university activities', 3, 8),
(30, 'Has participated in two varied university activities', 2, 8),
(31, 'Has participated in only one university activity', 1, 8),
(32, 'Has not participated in any university activity projects/activities of the university.', 0, 8),
(33, 'Has attended 100% of regular meeting', 3, 9),
(34, 'Has attended 90%-99% of regular meeting', 2, 9),
(35, 'Has attended 80%-89% of regular meeting', 1, 9),
(36, 'Has attended less 79% of regular meetings', 0, 9),
(37, 'Has attended 90%-100% of all the meeting called', 3, 10),
(38, 'Has attended 80%-89% of all the meeting called', 2, 10),
(39, 'Has attended 70%-79% of all the meeting called	 ', 1, 10),
(40, 'Has attended less than 70% of all the meeting called', 0, 10),
(41, 'All seven indicators are met.', 3, 11),
(42, 'All first three indicators and any two of the remaining indicators are met.', 2, 11),
(43, 'Only the first three indicators are met', 1, 11),
(44, 'Any of the indicators are not met', 0, 11),
(45, 'Complete and before deadline', 3, 12),
(46, 'Complete and on the deadline', 2, 12),
(47, 'Complete but after deadline/incomplete but on the deadline.', 1, 12),
(48, 'Incomplete and after the deadline/have not submitted any reports.', 0, 12),
(49, 'Clean beyond schedule and without being told.', 3, 13),
(50, 'Clean only on schedule upon a command.', 2, 13),
(51, 'Joins cleaning but comes in late', 1, 13),
(52, 'Never cleans at all', 0, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(30) NOT NULL,
  `accounts_id` varchar(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dept_id` int(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `accounts_id`, `firstname`, `lastname`, `dept_id`, `password`, `role_as`) VALUES
(1, '2018-01362', 'Christian Daniel T  ', 'Tamayao', 1, '7cc05fb062cbb39a7878c3a3f36bb4b6dd465636', 'admin'),
(2, '2016-00303', 'Dave Justine', 'Agabin', 1, 'f2942ac7f4652f1bd196a6f48d332977991abfd7', 'schoolwide adviser'),
(3, '2020-010069', 'Angeline', 'Julian', 1, 'c273ea3643ddd3d850b9b132338da2fb54d5c0db', 'schoolwide adviser'),
(4, '2006-0116952', 'Angela Grace', 'Garcia', 4, '7cc05fb062cbb39a7878c3a3f36bb4b6dd465636', 'schoolwide adviser'),
(5, '2017-01575', 'James Vinson ', 'Villanueva', 2, 'a4a45812d0511be4a57fe225cc684f589d86170c', 'comelec chair'),
(6, '2018-01363', 'Christian ', 'Tamayao', 1, 'a4a45812d0511be4a57fe225cc684f589d86170c', 'super admin');

-- --------------------------------------------------------

--
-- Table structure for table `votecount`
--

CREATE TABLE `votecount` (
  `id` int(30) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `dept_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votecount`
--

INSERT INTO `votecount` (`id`, `student_id`, `dept_id`) VALUES
(1, '2018-01014', 1),
(2, '2018-01362', 1),
(3, '2006-0116952', 2),
(4, '2020-010010', 1),
(5, '', 0),
(6, '2018-01-1000', 1),
(7, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `votes_id` int(30) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `candidates_id` int(30) NOT NULL,
  `position_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`votes_id`, `student_id`, `candidates_id`, `position_id`) VALUES
(1, '2018-01014', 8, 1),
(2, '2018-01014', 9, 2),
(3, '2018-01014', 10, 3),
(4, '2018-01014', 11, 4),
(5, '2018-01014', 12, 5),
(6, '2018-01014', 18, 6),
(7, '2018-01014', 16, 6),
(8, '2018-01014', 34, 9),
(9, '2018-01014', 35, 10),
(10, '2018-01362', 100, 1),
(11, '2018-01362', 9, 2),
(12, '2018-01362', 10, 3),
(13, '2018-01362', 11, 4),
(14, '2018-01362', 18, 6),
(15, '2018-01362', 13, 6),
(16, '2018-01362', 16, 6),
(17, '2018-01362', 19, 6),
(18, '2018-01362', 33, 8),
(19, '2018-01362', 34, 9),
(20, '2018-01362', 35, 10),
(21, '2018-01362', 37, 12),
(22, '2018-01362', 45, 14),
(23, '2018-01362', 40, 14),
(24, '2018-01362', 42, 14),
(25, '2006-0116952', 100, 1),
(26, '2006-0116952', 9, 2),
(27, '2006-0116952', 10, 3),
(28, '2006-0116952', 16, 6),
(29, '2006-0116952', 27, 7),
(30, '2006-0116952', 28, 7),
(31, '2006-0116952', 57, 25),
(32, '2020-010010', 100, 1),
(33, '2020-010010', 9, 2),
(34, '2020-010010', 10, 3),
(35, '2020-010010', 11, 4),
(36, '2020-010010', 33, 8),
(37, '2020-010010', 34, 9),
(38, '2020-010010', 35, 10),
(39, '2020-010010', 37, 12),
(40, '2020-010010', 45, 14),
(41, '2020-010010', 40, 14),
(42, '2020-010010', 42, 14),
(43, '2020-010010', 52, 19),
(44, '2018-01-1000', 103, 1),
(45, '2018-01-1000', 101, 2),
(46, '2018-01-1000', 9, 2),
(47, '2018-01-1000', 10, 3),
(48, '2018-01-1000', 33, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`dsn_id`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation_answer`
--
ALTER TABLE `evaluation_answer`
  ADD PRIMARY KEY (`evaluation_id`);

--
-- Indexes for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  ADD PRIMARY KEY (`evaluation_id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `restriction_list`
--
ALTER TABLE `restriction_list`
  ADD PRIMARY KEY (`restriction_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbleval_form`
--
ALTER TABLE `tbleval_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_criteria`
--
ALTER TABLE `tbl_criteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question_rate`
--
ALTER TABLE `tbl_question_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votecount`
--
ALTER TABLE `votecount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`votes_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `dsn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluation_answer`
--
ALTER TABLE `evaluation_answer`
  MODIFY `evaluation_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evaluation_list`
--
ALTER TABLE `evaluation_list`
  MODIFY `evaluation_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `restriction_list`
--
ALTER TABLE `restriction_list`
  MODIFY `restriction_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbleval_form`
--
ALTER TABLE `tbleval_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tbl_criteria`
--
ALTER TABLE `tbl_criteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `dept_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_question_rate`
--
ALTER TABLE `tbl_question_rate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `votecount`
--
ALTER TABLE `votecount`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `votes_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
