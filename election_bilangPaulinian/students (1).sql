-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 07:24 PM
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
-- Database: `election`
--

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
('2018-01362', 'CHRISTIAN DANIEL ', 'TAMAYAO', 1, 'BSIT', 'BSIT', '3'),
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
