-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220501.46b7525c53
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2022 at 02:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `election`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidates_id` int(11) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `student_id` varchar(65) NOT NULL,
  `dsn_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidates_id`, `picture`, `student_id`, `dsn_id`, `position_id`) VALUES
(8, '1664724068.png', '2019-01-472', 1, 1),
(9, '1664724152.png', '2020-010189', 1, 2),
(10, '1664724194.png', '2020-010434', 1, 3),
(11, '1664724219.png', '2019-01-020', 1, 4),
(12, '1664724238.png', '2020-010056', 1, 5),
(13, '1664724301.png', 'G2019-01448', 1, 6),
(14, '1664724378.png', '2021-02-1395', 1, 6),
(15, '1664724395.png', '2022-01-1366', 1, 6),
(16, '1664724433.png', '2019-0200027', 1, 6),
(17, '1664724506.png', '2019-01-441', 1, 6),
(18, '1664724520.png', '2020-010341', 1, 6),
(19, '1664724532.png', '2021-01-1781', 1, 6),
(20, '1664724574.png', '2021-01-1699', 1, 6),
(21, '1664724641.png', '2019-01490', 1, 6),
(22, '1664724688.png', '2019-01303', 1, 6),
(23, '1664724768.png', '2021-01-1545', 1, 6),
(24, '1664724787.png', '2021-01-1520', 1, 6),
(25, '1664724803.png', '2013-00100', 1, 7),
(26, '1664724823.png', '2017-01228', 1, 7),
(27, '1664724854.png', '2006-0116952', 1, 7),
(28, '1664724873.png', '2019-0200017', 1, 7),
(29, '1664724913.png', '2022-01-1540', 1, 7),
(30, '1664753057.png', '2020-010250', 1, 7),
(31, '1664725115.png', '2020-01208', 1, 7),
(32, '1664725146.png', '2021-01-1546', 1, 7),
(33, '1664725399.png', '2020-010010', 2, 8),
(34, '1664728730.png', '2019-01038', 2, 9),
(35, '1664754160.png', '2022-01-0349', 2, 10),
(36, '1664753581.png', '2021-01-1354', 2, 11),
(37, '1664728702.png', '2018-01362', 2, 12),
(38, '1664754283.png', '2019-01-524', 2, 13),
(39, '1664727302.png', '2016-00816', 2, 14),
(40, '1664727348.png', '2020-01-152', 2, 14),
(41, '1664727455.png', '2021-01-1456', 2, 14),
(42, '1664754299.png', '2017-01384', 2, 14),
(43, '1664754383.png', '2019-01012', 2, 14),
(44, '1664753539.png', '2021-01-1932', 2, 14),
(45, '1664727742.jpeg', '2022-01-0046', 2, 14),
(46, '1664755126.png', '2018-01-1000', 2, 14),
(47, '1664754331.png', 'G2012-00185', 2, 16),
(48, '1664754204.png', '2016-00499', 2, 15),
(49, '1664727946.png', '2021-01-1571', 2, 18),
(50, '1664728004.png', '2019-01795', 2, 17),
(51, '1664728051.png', '2018-01922', 2, 20),
(52, '1664754553.png', '2016-00303', 2, 19),
(53, '1664753934.png', '2017-01758', 2, 22),
(54, '1664771223.png', '2019-01-470', 2, 21),
(55, '1664753974.png', '2016-01165', 2, 23),
(56, '1664729052.png', '2018-01997', 3, 24),
(57, '1664729087.png', '2018-01731', 3, 25),
(58, '1664729233.png', '2020-02-0004', 3, 26),
(59, '1664777626.png', '2018-01224', 3, 27),
(60, '1664729352.png', '2018-01893', 3, 28),
(61, '1664729403.png', '2020-010118', 3, 29),
(62, '1664729501.png', '2018-01330', 3, 29),
(63, '1664729524.png', '2019-01-811', 3, 29),
(64, '1664729643.png', '2020-010533', 3, 29),
(65, '1664729658.png', '2018-01798', 3, 29),
(66, '1664777703.png', 'G2015-00333', 3, 29),
(67, '1664777761.png', '2022-01-1384', 3, 29),
(68, '1664729981.png', '2022-01-1357', 3, 29),
(69, '1664777789.png', 'G2020-01005', 3, 30),
(70, '1664777810.png', '2019-01423', 3, 31),
(71, '1664730245.png', '2018-01060', 3, 32),
(72, '1664777836.png', 'G2017-01686', 3, 33),
(73, '1664730562.png', '2019-01-1203', 4, 34),
(74, '1664730577.png', '2018-01743', 4, 35),
(75, '1664730620.png', '2019-01-398', 4, 36),
(76, '1664798393.png', '2019-01-855', 4, 37),
(77, '1664730797.png', '2020-01-099', 4, 38),
(78, '1664730827.png', '2015-00360', 4, 39),
(79, '1664730852.png', '2022-01-1073', 4, 39),
(80, '1664730899.png', '2015-00202', 4, 39),
(81, '1664730941.png', 'G2015-00266', 4, 39),
(82, '1664731205.jpg', 'G2019-01556', 4, 39),
(83, '1664731242.png', '2020-02-0013', 4, 39),
(84, '1664731275.png', '2005-00007', 4, 39),
(85, '1664731298.png', '2019-01496', 4, 39),
(86, '1664731367.JPG', '2022-01-0031', 4, 40),
(87, '1664731427.png', '2019-01560', 4, 41),
(88, '1664731448.jpg', '2018-02034', 4, 42),
(89, '1664754857.png', '2017-01346', 5, 44),
(90, '1664732202.png', '2020-01-161', 5, 45),
(91, '1664732236.png', '2020-01-164', 5, 46),
(92, '1664798430.png', '2007-126442', 5, 47),
(93, '1664732363.png', '2018-01831', 5, 48),
(94, '1664732416.png', 'G2015-00217', 5, 49),
(95, '1664732450.png', '2016-00274', 5, 49),
(96, '1664732470.png', '2019-01425', 5, 49),
(97, '1664732520.png', 'G2020-01396', 5, 49),
(98, '1664732638.png', '2018-01498', 5, 52);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` int(11) NOT NULL,
  `dept_code` varchar(65) NOT NULL,
  `dept_title` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_code`, `dept_title`) VALUES
(1, 'SITE', 'SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING'),
(2, 'SASTE', 'SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION'),
(3, 'SBAHM', 'SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT'),
(4, 'SNAHS', 'SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES'),
(5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `dsn_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `description` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL,
  `dsn_id` int(11) NOT NULL,
  `position_title` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(24, 3, 'Governor'),
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` varchar(65) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `year` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `fname`, `lname`, `dept_id`, `course`, `year`) VALUES
('2005-00007', 'AUDREY JESSA', 'TAMBIAO', 4, 'BSN', '2'),
('2006-0116952', 'ANGELA GRACE', 'GARCIA', 2, 'BSSW', '2'),
('2007-126442', 'KENNEY BRYAN', 'MIGUEL', 3, 'BSA', '4'),
('2013-00100', 'DARIANNE JOY ', 'CACAYURIN', 4, 'BSN', '4'),
('2015-00202', 'ALLEIN JENINE', 'MALANA', 4, 'BSMT', '2'),
('2015-00360', 'IMEE TRISHA', 'SALAZAR', 4, 'BSN', '2'),
('2016-00274', 'KRISHELAH DOMINIQUE', 'TESTADO', 3, 'BSBA-FM', '2'),
('2016-00303', 'DAVE JUSTINE', 'AGABIN', 1, 'BSIT', '3'),
('2016-00499 ', 'LOUISE ANTHONY', 'BUGAYONG', 1, 'BSIT', '1'),
('2016-00816', 'MARY MAE', 'REANTILLO', 1, 'BSIT', '4'),
('2016-01165', 'CHRISTINE ', 'BANCUD', 1, 'BSCE', '5'),
('2017-01228', 'BIANCA', 'TUPAS', 4, 'BSN', '4'),
('2017-01346', 'JODESSAH MAE', 'BACUD', 3, 'BSA', '4'),
('2017-01384', 'JOHN PAULUS SERAFIN', 'GAZZINGAN', 1, 'BSIT', '3'),
('2017-01758', 'FAYE VANESSA', 'GOROSPE', 1, 'BSCpE', '4'),
('2018-01-1000', 'DARREN ANGELO', 'CALLUENG', 1, 'BSIT', '3'),
('2018-01060', 'KRISTEL KAYLA ', 'TADAYA', 2, 'BSED', '3'),
('2018-01224', 'ANGHELIECA KHAYTE', 'TUMBAGA', 2, 'BSPA', '3'),
('2018-01330', 'DARLENE ', 'TOLETE', 2, 'BSPsych', '3'),
('2018-01362', 'CHRISTIAN DANIEL ', 'TAMAYAO', 1, 'BSIT', '3'),
('2018-01498', 'WILSON MATHUGH', 'ARUGAY', 3, 'BSA', '3'),
('2018-01731', 'RONNIE', 'BALLAD', 2, 'BSPsych', '3'),
('2018-01743', 'SHERAZADE ', 'UBAY', 4, 'BSPharma', '3'),
('2018-01798', 'TWINKLE', 'FERNANDEZ', 2, 'BSPsych', '1'),
('2018-01831', 'SHAYNNAH', 'QUILANG', 3, 'BSTM', '3'),
('2018-01893', 'YESSAMIN FAYE', 'GUILLEN', 2, 'BSPsych', '3'),
('2018-01922', 'JENNY JOY', 'TEPPANG', 1, 'BSCE', '3'),
('2018-01997', 'JEVY MARK', 'DUPAY', 2, 'BSED', '3'),
('2018-02034', 'RINALENE JOY', 'DURAN', 4, 'BSMT', '3'),
('2019-01-020', 'ALYSHA ', 'BUYAGAN', 2, 'BAELS', '4'),
('2019-01-1203', 'JARED NILES', 'SANTOS', 4, 'BSN', '4'),
('2019-01-398', 'DAYNE ANGELI', 'CABASAL', 4, 'BSPharma', '4'),
('2019-01-441', 'AELTHEO ', 'BALUBAL', 2, 'BAELS', '4'),
('2019-01-470', 'NOVIE ANN ', 'TABLAC', 1, 'BSIT', '4'),
('2019-01-472', 'KRISHA LEI', 'BERBANO', 2, 'BSPA', '4'),
('2019-01-524', 'SPENCER', 'RUIZ', 1, 'BSCpE', '4'),
('2019-01-811', 'CHERRY MAE', 'MORGADO', 2, 'BSED', '3'),
('2019-01-855', 'ARLYN JOY ', 'TORRADO', 4, 'BSMT', '4'),
('2019-01012', 'DHEA JANELLE', 'TORRES', 1, 'BSIT', '2'),
('2019-01038', 'PRINCESS JASTINE MAE ', 'REÑA', 1, 'BSCpE', '4'),
('2019-01303', 'JOSEPHINE ROSE', 'ALBANO', 3, 'BSTM', '2'),
('2019-01423', 'NATHALIE MAE ', 'ESCUCHARO', 2, 'BSPA', '2'),
('2019-01425', 'CRISTEL', 'MORGADO', 3, 'BSTM', '2'),
('2019-01490', 'BENJAMIN', 'MALSI', 4, 'BSMT', '2'),
('2019-01496', 'ANGELICA ', 'DELA CRUZ', 4, 'BSMT', '2'),
('2019-01560', 'RAILEY LAYNE', 'BATAC', 4, 'BSMT', '2'),
('2019-01795', 'JNMARK FRIEDRICH ', 'AGUSTIN', 1, 'BSIT', '2'),
('2019-0200017', 'QUEEN DOMINIQUE', 'CABIAO', 2, 'BSPsych', '4'),
('2019-0200027', 'HANNAH FRANCESCA ', 'HERICO', 2, 'BSPsych', '4'),
('2020-01-099', 'ROSHEL DAPHNE', 'DUMALAO', 4, 'BSMT', '3'),
('2020-01-152', 'JEROME YVAN', 'VENTURA', 1, 'BSCpE', '3'),
('2020-01-161', 'GRACIELLA ', 'GOYAGOY', 3, 'BSTM', '3'),
('2020-01-164', 'LILIAN ', 'TALLA', 3, 'BSTM', '3'),
('2020-010010', 'BIEGH JOHN PAUL', 'ALONZO', 1, 'BSIT', '3'),
('2020-010056', 'VINCE JAKOD', 'CEREZO', 1, 'BSCpE', '3'),
('2020-010118', 'SHANELLE KAYE', 'ARUCAN', 2, 'BSPsych', '3'),
('2020-010189', 'YOWELLE CHED  Q', 'SEDANO', 2, 'BSPA', '3'),
('2020-010250', 'JOHN LESTER ', 'GAMATA', 1, 'BSCpE', '3'),
('2020-010341', 'CLARENCE ', 'REMUDARO', 4, 'BSN', '3'),
('2020-010434', 'MA. ANGELICA ', 'PEREZ', 2, 'BSPA', '3'),
('2020-010533', 'ALDWIN JAMES', 'POCOT', 2, 'BSPA', '2'),
('2020-01208', 'ZACH', 'BUGUNA', 3, 'BSA', '1'),
('2020-02-0004', 'EMITERIO', 'NICOLAS', 2, 'BSSW', '3'),
('2020-02-0013', 'SHAINE HAZEL', 'MEDRANO', 4, 'BSRT', '2'),
('2021-01-1354', 'CHRISTINE ', 'COMITAN', 1, 'BSIT', '2'),
('2021-01-1456', 'KAYLA MAE', 'MALENAB', 1, 'BSCE', '2'),
('2021-01-1520', 'JERYLE ', 'SACLAG', 3, 'BSTM', '2'),
('2021-01-1545', 'BRIGITTE ', 'ALZATE', 3, 'BSTM', '2'),
('2021-01-1546', 'COLEEN ', 'CALALANG', 3, 'BSTM', '2'),
('2021-01-1571', 'ALDRIN JAKE', 'ANCHETA', 1, 'BSCE', '2'),
('2021-01-1699', 'JOYCE', 'ACERIT', 4, 'BSMT', '2'),
('2021-01-1781', 'JUSTINE KENNETH ', 'IMPERIAL', 4, 'BSN', '2'),
('2021-01-1932', 'GEORGETTE FLEUR', 'LUCAS', 1, 'BSCE', '4'),
('2021-02-1395', 'CHRISTOPHER ', 'MANALANG II', 1, 'BSIT', '2'),
('2022-01-0031', 'ZYRELL ANDREI', 'IBAY', 4, 'BSN', '1'),
('2022-01-0046', 'CATHERINE', 'DALAFU', 1, 'BSIT', '1'),
('2022-01-0349', 'CRISTINA', 'TUAZON', 1, 'BSIT', '1'),
('2022-01-1073', 'DAIRAGENE', 'OBUSAN', 4, 'BSN', '1'),
('2022-01-1357', 'FRENCIPE ', 'SOMERA', 2, 'BSPA', '1'),
('2022-01-1366', 'ELIJAH', 'ALONZO', 1, 'BSIT', '1'),
('2022-01-1384', 'CAMILLE ROMEE', 'LOU', 2, 'BEED', '1'),
('2022-01-1540', 'JHAZER HART', 'ANTONIO', 1, 'BSIT', '1'),
('G2012-00185', 'CLARK JOSHUA', 'RAPANUT', 1, 'BSCE', '1'),
('G2015-00217', 'JAYELLA KATE', 'SAQUING', 3, 'BSBA-FM', '2'),
('G2015-00266', 'KASSANDRA ', 'TAGUIAM', 4, 'BSN', '2'),
('G2015-00333', 'JOHN PATRICK ', 'DELA CRUZ', 2, 'BSPsych', '1'),
('G2017-01686', 'CEZ ANNE', 'MEDRANO', 2, 'BAELS', '4'),
('G2019-01448', 'EMMANUEL ', 'JOSE', 1, 'BSCE', '2'),
('G2019-01556', 'VIKTOR CARLO', 'BACCAY', 4, 'BSRT', '2'),
('G2020-01005', 'APRIL ALEXELLE', 'AWINGAN', 2, 'BSED', '1'),
('G2020-01396', 'JERMAINE KAYE', 'ABROGENA', 3, 'BSTM', '1');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `votes_id` int(11) NOT NULL,
  `student_id` varchar(65) NOT NULL,
  `candidates_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`votes_id`, `student_id`, `candidates_id`, `position_id`) VALUES
(1, '2018-01060', 8, 1),
(2, '2018-01060', 9, 2),
(3, '2018-01060', 10, 3),
(4, '2018-01060', 11, 4),
(5, '2018-01060', 12, 5),
(6, '2018-01060', 18, 6),
(7, '2018-01060', 24, 6),
(8, '2018-01060', 56, 24),
(9, '2016-00303', 8, 1),
(10, '2016-00303', 9, 2),
(11, '2016-00303', 10, 3),
(12, '2016-00303', 11, 4),
(13, '2016-00303', 12, 5),
(14, '2016-00303', 20, 6),
(15, '2016-00303', 15, 6),
(16, '2016-00303', 23, 6),
(17, '2016-00303', 17, 6),
(18, '2016-00303', 16, 6),
(19, '2016-00303', 13, 6),
(20, '2016-00303', 14, 6),
(21, '2016-00303', 33, 8),
(22, '2016-00303', 34, 9),
(23, '2016-00303', 35, 10),
(24, '2016-00303', 36, 11),
(25, '2016-00303', 37, 12),
(26, '2016-00303', 38, 13),
(27, '2016-00303', 46, 14),
(28, '2016-00303', 45, 14),
(29, '2016-00303', 42, 14),
(30, '2016-00303', 44, 14),
(31, '2016-00303', 39, 14),
(32, '2019-01-472', 8, 1),
(33, '2019-01-472', 10, 3),
(34, '2019-01-472', 11, 4),
(35, '2019-01-472', 18, 6),
(36, '2019-01-472', 57, 25),
(37, '2019-01-472', 59, 27),
(38, '2019-01-472', 61, 29),
(39, '2019-01-472', 66, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidates_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`dsn_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

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
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `dsn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `votes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



