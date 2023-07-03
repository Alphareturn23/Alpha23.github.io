# BILANGPAULINIAN : MySQL database backup
#
# Generated: Friday 9. June 2023
# Hostname: 
# Database: bilangpaulinian
# --------------------------------------------------------


#
# Delete any existing table `accounts`
#

DROP TABLE IF EXISTS `accounts`;


#
# Table structure of table `accounts`
#



CREATE TABLE `accounts` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_as` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO accounts VALUES("1","2018-01362","Christian Daniel T ","Tamayao","7cc05fb062cbb39a7878c3a3f36bb4b6dd465636","admin");
INSERT INTO accounts VALUES("2","2016-00303","Dave Justine","Agabin","27da3c3c1e227cb5cdd76cab1aa1ddb981b30bd8","schoolwide adviser");
INSERT INTO accounts VALUES("3","2017-01575","James Vinson","Villanueva
","a4a45812d0511be4a57fe225cc684f589d86170c","comelec chair");



#
# Delete any existing table `candidates`
#

DROP TABLE IF EXISTS `candidates`;


#
# Table structure of table `candidates`
#



CREATE TABLE `candidates` (
  `candidates_id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(150) NOT NULL,
  `student_id` varchar(65) NOT NULL,
  `dsn_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  PRIMARY KEY (`candidates_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO candidates VALUES("9","1664724152.png","2020-010189","1","2");
INSERT INTO candidates VALUES("10","1664724194.png","2020-010434","1","3");
INSERT INTO candidates VALUES("11","1664724219.png","2019-01-020","1","4");
INSERT INTO candidates VALUES("12","1664724238.png","2020-010056","1","5");
INSERT INTO candidates VALUES("13","1664724301.png","G2019-01448","1","6");
INSERT INTO candidates VALUES("14","1664724378.png","2021-02-1395","1","6");
INSERT INTO candidates VALUES("15","1664724395.png","2022-01-1366","1","6");
INSERT INTO candidates VALUES("16","1664724433.png","2019-0200027","1","6");
INSERT INTO candidates VALUES("17","1664724506.png","2019-01-441","1","6");
INSERT INTO candidates VALUES("18","1664724520.png","2020-010341","1","6");
INSERT INTO candidates VALUES("19","1664724532.png","2021-01-1781","1","6");
INSERT INTO candidates VALUES("20","1664724574.png","2021-01-1699","1","6");
INSERT INTO candidates VALUES("21","1664724641.png","2019-01490","1","6");
INSERT INTO candidates VALUES("22","1664724688.png","2019-01303","1","6");
INSERT INTO candidates VALUES("23","1664724768.png","2021-01-1545","1","6");
INSERT INTO candidates VALUES("24","1664724787.png","2021-01-1520","1","6");
INSERT INTO candidates VALUES("25","1664724803.png","2013-00100","1","7");
INSERT INTO candidates VALUES("26","1664724823.png","2017-01228","1","7");
INSERT INTO candidates VALUES("27","1664724854.png","2006-0116952","1","7");
INSERT INTO candidates VALUES("28","1664724873.png","2019-0200017","1","7");
INSERT INTO candidates VALUES("29","1664724913.png","2022-01-1540","1","7");
INSERT INTO candidates VALUES("30","1664753057.png","2020-010250","1","7");
INSERT INTO candidates VALUES("31","1664725115.png","2020-01208","1","7");
INSERT INTO candidates VALUES("32","1664725146.png","2021-01-1546","1","7");
INSERT INTO candidates VALUES("33","1664725399.png","2020-010010","2","8");
INSERT INTO candidates VALUES("34","1664728730.png","2019-01038","2","9");
INSERT INTO candidates VALUES("35","1664754160.png","2022-01-0349","2","10");
INSERT INTO candidates VALUES("36","1664753581.png","2021-01-1354","2","11");
INSERT INTO candidates VALUES("37","1664728702.png","2018-01362","2","12");
INSERT INTO candidates VALUES("38","1664754283.png","2019-01-524","2","13");
INSERT INTO candidates VALUES("39","1664727302.png","2016-00816","2","14");
INSERT INTO candidates VALUES("40","1664727348.png","2020-01-152","2","14");
INSERT INTO candidates VALUES("41","1664727455.png","2021-01-1456","2","14");
INSERT INTO candidates VALUES("42","1664754299.png","2017-01384","2","14");
INSERT INTO candidates VALUES("43","1664754383.png","2019-01012","2","14");
INSERT INTO candidates VALUES("44","1664753539.png","2021-01-1932","2","14");
INSERT INTO candidates VALUES("45","1664727742.jpeg","2022-01-0046","2","14");
INSERT INTO candidates VALUES("46","1664755126.png","2018-01-1000","2","14");
INSERT INTO candidates VALUES("47","1664754331.png","G2012-00185","2","16");
INSERT INTO candidates VALUES("48","1664754204.png","2016-00499","2","15");
INSERT INTO candidates VALUES("49","1664727946.png","2021-01-1571","2","18");
INSERT INTO candidates VALUES("50","1664728004.png","2019-01795","2","17");
INSERT INTO candidates VALUES("51","1664728051.png","2018-01922","2","20");
INSERT INTO candidates VALUES("52","1664754553.png","2016-00303","2","19");
INSERT INTO candidates VALUES("53","1664753934.png","2017-01758","2","22");
INSERT INTO candidates VALUES("54","1664771223.png","2019-01-470","2","21");
INSERT INTO candidates VALUES("55","1664753974.png","2016-01165","2","23");
INSERT INTO candidates VALUES("56","1664729052.png","2018-01997","3","24");
INSERT INTO candidates VALUES("57","1664729087.png","2018-01731","3","25");
INSERT INTO candidates VALUES("58","1664729233.png","2020-02-0004","3","26");
INSERT INTO candidates VALUES("59","1664777626.png","2018-01224","3","27");
INSERT INTO candidates VALUES("60","1664729352.png","2018-01893","3","28");
INSERT INTO candidates VALUES("61","1664729403.png","2020-010118","3","29");
INSERT INTO candidates VALUES("62","1664729501.png","2018-01330","3","29");
INSERT INTO candidates VALUES("63","1664729524.png","2019-01-811","3","29");
INSERT INTO candidates VALUES("64","1664729643.png","2020-010533","3","29");
INSERT INTO candidates VALUES("65","1664729658.png","2018-01798","3","29");
INSERT INTO candidates VALUES("66","1664777703.png","G2015-00333","3","29");
INSERT INTO candidates VALUES("67","1664777761.png","2022-01-1384","3","29");
INSERT INTO candidates VALUES("68","1664729981.png","2022-01-1357","3","29");
INSERT INTO candidates VALUES("69","1664777789.png","G2020-01005","3","30");
INSERT INTO candidates VALUES("70","1664777810.png","2019-01423","3","31");
INSERT INTO candidates VALUES("71","1664730245.png","2018-01060","3","32");
INSERT INTO candidates VALUES("72","1664777836.png","G2017-01686","3","33");
INSERT INTO candidates VALUES("73","1664730562.png","2019-01-1203","4","34");
INSERT INTO candidates VALUES("74","1664730577.png","2018-01743","4","35");
INSERT INTO candidates VALUES("75","1664730620.png","2019-01-398","4","36");
INSERT INTO candidates VALUES("76","1664798393.png","2019-01-855","4","37");
INSERT INTO candidates VALUES("77","1664730797.png","2020-01-099","4","38");
INSERT INTO candidates VALUES("78","1664730827.png","2015-00360","4","39");
INSERT INTO candidates VALUES("79","1664730852.png","2022-01-1073","4","39");
INSERT INTO candidates VALUES("80","1664730899.png","2015-00202","4","39");
INSERT INTO candidates VALUES("81","1664730941.png","G2015-00266","4","39");
INSERT INTO candidates VALUES("82","1664731205.jpg","G2019-01556","4","39");
INSERT INTO candidates VALUES("83","1664731242.png","2020-02-0013","4","39");
INSERT INTO candidates VALUES("84","1664731275.png","2005-00007","4","39");
INSERT INTO candidates VALUES("85","1664731298.png","2019-01496","4","39");
INSERT INTO candidates VALUES("86","1664731367.JPG","2022-01-0031","4","40");
INSERT INTO candidates VALUES("87","1664731427.png","2019-01560","4","41");
INSERT INTO candidates VALUES("88","1664731448.jpg","2018-02034","4","42");
INSERT INTO candidates VALUES("89","1664754857.png","2017-01346","5","44");
INSERT INTO candidates VALUES("90","1664732202.png","2020-01-161","5","45");
INSERT INTO candidates VALUES("91","1664732236.png","2020-01-164","5","46");
INSERT INTO candidates VALUES("92","1664798430.png","2007-126442","5","47");
INSERT INTO candidates VALUES("93","1664732363.png","2018-01831","5","48");
INSERT INTO candidates VALUES("94","1664732416.png","G2015-00217","5","49");
INSERT INTO candidates VALUES("95","1664732450.png","2016-00274","5","49");
INSERT INTO candidates VALUES("96","1664732470.png","2019-01425","5","49");
INSERT INTO candidates VALUES("97","1664732520.png","G2020-01396","5","49");
INSERT INTO candidates VALUES("98","1664732638.png","2018-01498","5","52");
INSERT INTO candidates VALUES("100","1686158917.png","2019-01362","1","1");



#
# Delete any existing table `designation`
#

DROP TABLE IF EXISTS `designation`;


#
# Table structure of table `designation`
#



CREATE TABLE `designation` (
  `dsn_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `description` varchar(65) NOT NULL,
  PRIMARY KEY (`dsn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO designation VALUES("1","5","UNIWIDE");
INSERT INTO designation VALUES("2","1","SW_SITE");
INSERT INTO designation VALUES("3","2","SW_SASTE");
INSERT INTO designation VALUES("4","4","SW_SNASH");
INSERT INTO designation VALUES("5","3","SW_SBAHM");



#
# Delete any existing table `evaluation_answer`
#

DROP TABLE IF EXISTS `evaluation_answer`;


#
# Table structure of table `evaluation_answer`
#



CREATE TABLE `evaluation_answer` (
  `evaluation_id` int(30) NOT NULL AUTO_INCREMENT,
  `criteria_id` int(30) NOT NULL,
  `rate` int(30) NOT NULL,
  PRIMARY KEY (`evaluation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO evaluation_answer VALUES("1","1","3");
INSERT INTO evaluation_answer VALUES("2","1","2");
INSERT INTO evaluation_answer VALUES("3","1","3");
INSERT INTO evaluation_answer VALUES("4","1","1");
INSERT INTO evaluation_answer VALUES("5","1","3");
INSERT INTO evaluation_answer VALUES("6","1","3");
INSERT INTO evaluation_answer VALUES("7","1","3");
INSERT INTO evaluation_answer VALUES("8","1","2");
INSERT INTO evaluation_answer VALUES("9","1","3");
INSERT INTO evaluation_answer VALUES("10","1","3");
INSERT INTO evaluation_answer VALUES("11","1","3");
INSERT INTO evaluation_answer VALUES("12","1","2");
INSERT INTO evaluation_answer VALUES("13","1","2");
INSERT INTO evaluation_answer VALUES("14","2","3");
INSERT INTO evaluation_answer VALUES("15","2","2");
INSERT INTO evaluation_answer VALUES("16","2","3");
INSERT INTO evaluation_answer VALUES("17","2","1");
INSERT INTO evaluation_answer VALUES("18","2","3");
INSERT INTO evaluation_answer VALUES("19","2","3");
INSERT INTO evaluation_answer VALUES("20","2","3");
INSERT INTO evaluation_answer VALUES("21","2","2");
INSERT INTO evaluation_answer VALUES("22","2","3");
INSERT INTO evaluation_answer VALUES("23","2","3");
INSERT INTO evaluation_answer VALUES("24","2","3");
INSERT INTO evaluation_answer VALUES("25","2","2");
INSERT INTO evaluation_answer VALUES("26","2","2");
INSERT INTO evaluation_answer VALUES("27","4","3");
INSERT INTO evaluation_answer VALUES("28","4","2");
INSERT INTO evaluation_answer VALUES("29","4","3");
INSERT INTO evaluation_answer VALUES("30","4","1");
INSERT INTO evaluation_answer VALUES("31","4","3");
INSERT INTO evaluation_answer VALUES("32","4","3");
INSERT INTO evaluation_answer VALUES("33","4","3");
INSERT INTO evaluation_answer VALUES("34","4","2");
INSERT INTO evaluation_answer VALUES("35","4","3");
INSERT INTO evaluation_answer VALUES("36","4","3");
INSERT INTO evaluation_answer VALUES("37","4","3");
INSERT INTO evaluation_answer VALUES("38","4","2");
INSERT INTO evaluation_answer VALUES("39","4","2");
INSERT INTO evaluation_answer VALUES("40","3","3");
INSERT INTO evaluation_answer VALUES("41","3","2");
INSERT INTO evaluation_answer VALUES("42","3","3");
INSERT INTO evaluation_answer VALUES("43","3","1");
INSERT INTO evaluation_answer VALUES("44","3","3");
INSERT INTO evaluation_answer VALUES("45","3","3");
INSERT INTO evaluation_answer VALUES("46","3","3");
INSERT INTO evaluation_answer VALUES("47","3","2");
INSERT INTO evaluation_answer VALUES("48","3","3");
INSERT INTO evaluation_answer VALUES("49","3","3");
INSERT INTO evaluation_answer VALUES("50","3","3");
INSERT INTO evaluation_answer VALUES("51","3","2");
INSERT INTO evaluation_answer VALUES("52","3","2");
INSERT INTO evaluation_answer VALUES("53","5","3");
INSERT INTO evaluation_answer VALUES("54","5","2");
INSERT INTO evaluation_answer VALUES("55","5","3");
INSERT INTO evaluation_answer VALUES("56","5","1");
INSERT INTO evaluation_answer VALUES("57","5","3");
INSERT INTO evaluation_answer VALUES("58","5","3");
INSERT INTO evaluation_answer VALUES("59","5","3");
INSERT INTO evaluation_answer VALUES("60","5","2");
INSERT INTO evaluation_answer VALUES("61","5","3");
INSERT INTO evaluation_answer VALUES("62","5","3");
INSERT INTO evaluation_answer VALUES("63","5","3");
INSERT INTO evaluation_answer VALUES("64","5","2");
INSERT INTO evaluation_answer VALUES("65","5","2");
INSERT INTO evaluation_answer VALUES("66","6","3");
INSERT INTO evaluation_answer VALUES("67","6","2");
INSERT INTO evaluation_answer VALUES("68","6","3");
INSERT INTO evaluation_answer VALUES("69","6","1");
INSERT INTO evaluation_answer VALUES("70","6","3");
INSERT INTO evaluation_answer VALUES("71","6","3");
INSERT INTO evaluation_answer VALUES("72","6","3");
INSERT INTO evaluation_answer VALUES("73","6","2");
INSERT INTO evaluation_answer VALUES("74","6","3");
INSERT INTO evaluation_answer VALUES("75","6","3");
INSERT INTO evaluation_answer VALUES("76","6","3");
INSERT INTO evaluation_answer VALUES("77","6","2");
INSERT INTO evaluation_answer VALUES("78","6","2");
INSERT INTO evaluation_answer VALUES("79","7","3");
INSERT INTO evaluation_answer VALUES("80","7","2");
INSERT INTO evaluation_answer VALUES("81","7","3");
INSERT INTO evaluation_answer VALUES("82","7","1");
INSERT INTO evaluation_answer VALUES("83","7","3");
INSERT INTO evaluation_answer VALUES("84","7","3");
INSERT INTO evaluation_answer VALUES("85","7","3");
INSERT INTO evaluation_answer VALUES("86","7","2");
INSERT INTO evaluation_answer VALUES("87","7","3");
INSERT INTO evaluation_answer VALUES("88","7","3");
INSERT INTO evaluation_answer VALUES("89","7","3");
INSERT INTO evaluation_answer VALUES("90","7","2");
INSERT INTO evaluation_answer VALUES("91","7","2");



#
# Delete any existing table `evaluation_list`
#

DROP TABLE IF EXISTS `evaluation_list`;


#
# Table structure of table `evaluation_list`
#



CREATE TABLE `evaluation_list` (
  `evaluation_id` int(30) NOT NULL AUTO_INCREMENT,
  `candidates_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  PRIMARY KEY (`evaluation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO evaluation_list VALUES("1","33","2");



#
# Delete any existing table `officer`
#

DROP TABLE IF EXISTS `officer`;


#
# Table structure of table `officer`
#



CREATE TABLE `officer` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dept_id` int(30) DEFAULT NULL,
  `dsn_id` int(30) DEFAULT NULL,
  `position_id` int(30) DEFAULT NULL,
  `course` varchar(150) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO officer VALUES("1","2018-01362","Christian Daniel","Tamayao","1","2","12","BSIT","3");
INSERT INTO officer VALUES("2","2016-00303","Dave Justine","Agabin","1","1","19","BSIT","3");
INSERT INTO officer VALUES("3","2020-010069","Angeline","Julian","2","2","21","BSIT","3");
INSERT INTO officer VALUES("4","2006-0116952","Angela Grace","Garcia","2","1","7","BSSW","2");
INSERT INTO officer VALUES("5","098765432","Lester","Pascua","1","2","8","BSIT","3");
INSERT INTO officer VALUES("6","22222","Biegh John Paul","Alonzo","1","2","14","BSIT","3");



#
# Delete any existing table `positions`
#

DROP TABLE IF EXISTS `positions`;


#
# Table structure of table `positions`
#



CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `dsn_id` int(11) NOT NULL,
  `position_title` varchar(75) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO positions VALUES("1","1","President");
INSERT INTO positions VALUES("2","1","Vice President");
INSERT INTO positions VALUES("3","1","Executive Secretary");
INSERT INTO positions VALUES("4","1","Treasurer");
INSERT INTO positions VALUES("5","1","Press Relations Officer");
INSERT INTO positions VALUES("6","1","Senator");
INSERT INTO positions VALUES("7","1","Congress");
INSERT INTO positions VALUES("8","2","Governor");
INSERT INTO positions VALUES("9","2","Vice Governor");
INSERT INTO positions VALUES("10","2","Secretary");
INSERT INTO positions VALUES("11","2","Treasurer");
INSERT INTO positions VALUES("12","2","Press Relations Officer (IT)");
INSERT INTO positions VALUES("13","2","Press Relations Officer (Engr)");
INSERT INTO positions VALUES("14","2","Councilor");
INSERT INTO positions VALUES("15","2","1st Year Mayor (IT)");
INSERT INTO positions VALUES("16","2","1st Year Mayor (Engr)");
INSERT INTO positions VALUES("17","2","2nd Year Mayor (IT)");
INSERT INTO positions VALUES("18","2","2nd Year Mayor (Engr)");
INSERT INTO positions VALUES("19","2","3rd Year Mayor (IT)");
INSERT INTO positions VALUES("20","2","3rd Year Mayor (Engr)");
INSERT INTO positions VALUES("21","2","4th Year Mayor (IT)");
INSERT INTO positions VALUES("22","2","4th Year Mayor (Engr)");
INSERT INTO positions VALUES("23","2","5th Year Mayor (Engr)");
INSERT INTO positions VALUES("24","3","Governors");
INSERT INTO positions VALUES("25","3","Vice Governor");
INSERT INTO positions VALUES("26","3","Secretary");
INSERT INTO positions VALUES("27","3","Treasurer");
INSERT INTO positions VALUES("28","3","Press Relations Officer");
INSERT INTO positions VALUES("29","3","Councilor");
INSERT INTO positions VALUES("30","3","1st Year Mayor");
INSERT INTO positions VALUES("31","3","2nd Year Mayor");
INSERT INTO positions VALUES("32","3","3rd Year Mayor");
INSERT INTO positions VALUES("33","3","4th Year Mayor");
INSERT INTO positions VALUES("34","4","Governor");
INSERT INTO positions VALUES("35","4","Vice Governor");
INSERT INTO positions VALUES("36","4","Secretary");
INSERT INTO positions VALUES("37","4","Treasurer");
INSERT INTO positions VALUES("38","4","Press Relations Officer");
INSERT INTO positions VALUES("39","4","Councilor");
INSERT INTO positions VALUES("40","4","1st Year Mayor");
INSERT INTO positions VALUES("41","4","2nd Year Mayor");
INSERT INTO positions VALUES("42","4","3rd Year Mayor");
INSERT INTO positions VALUES("44","5","Governor");
INSERT INTO positions VALUES("45","5","Vice Governor");
INSERT INTO positions VALUES("46","5","Secretary");
INSERT INTO positions VALUES("47","5","Treasurer");
INSERT INTO positions VALUES("48","5","Press Relations Officer");
INSERT INTO positions VALUES("49","5","Councilor");
INSERT INTO positions VALUES("50","5","1st Year Mayor");
INSERT INTO positions VALUES("51","5","2nd Year Mayor");
INSERT INTO positions VALUES("52","5","3rd Year Mayor");
INSERT INTO positions VALUES("53","5","4th Year Mayor");



#
# Delete any existing table `restriction_list`
#

DROP TABLE IF EXISTS `restriction_list`;


#
# Table structure of table `restriction_list`
#



CREATE TABLE `restriction_list` (
  `restriction_id` int(30) NOT NULL AUTO_INCREMENT,
  `officer_id` int(30) NOT NULL,
  `dsn_id` int(30) NOT NULL,
  `position_id` int(30) NOT NULL,
  `dept_id` int(30) NOT NULL,
  PRIMARY KEY (`restriction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO restriction_list VALUES("1","1","2","12","1");
INSERT INTO restriction_list VALUES("2","1","1","6","1");
INSERT INTO restriction_list VALUES("3","1","4","34","3");
INSERT INTO restriction_list VALUES("5","2","2","19","1");
INSERT INTO restriction_list VALUES("6","4","1","7","2");
INSERT INTO restriction_list VALUES("7","1","2","10","1");
INSERT INTO restriction_list VALUES("8","5","2","8","1");
INSERT INTO restriction_list VALUES("9","6","2","14","1");



#
# Delete any existing table `students`
#

DROP TABLE IF EXISTS `students`;


#
# Table structure of table `students`
#



CREATE TABLE `students` (
  `student_id` varchar(65) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `course` varchar(200) NOT NULL,
  `site_course` varchar(11) NOT NULL,
  `year` varchar(65) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO students VALUES("2005-00007","AUDREY JESSA","TAMBIAO","4","BSN","","2");
INSERT INTO students VALUES("2006-0116952","ANGELA GRACE","GARCIA","2","BSSW","","2");
INSERT INTO students VALUES("2007-126442","KENNEY BRYAN","MIGUEL","3","BSA","","4");
INSERT INTO students VALUES("2013-00100","DARIANNE JOY ","CACAYURIN","4","BSN","","4");
INSERT INTO students VALUES("2015-00202","ALLEIN JENINE","MALANA","4","BSMT","","2");
INSERT INTO students VALUES("2015-00360","IMEE TRISHA","SALAZAR","4","BSN","","2");
INSERT INTO students VALUES("2016-00274","KRISHELAH DOMINIQUE","TESTADO","3","BSBA-FM","","2");
INSERT INTO students VALUES("2016-00303","DAVE JUSTINE","AGABIN","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2016-00499 ","LOUISE ANTHONY","BUGAYONG","1","BSIT","BSIT","1");
INSERT INTO students VALUES("2016-00816","MARY MAE","REANTILLO","1","BSIT","BSIT","4");
INSERT INTO students VALUES("2016-01165","CHRISTINE ","BANCUD","1","BSCE","ENGR","5");
INSERT INTO students VALUES("2017-01228","BIANCA","TUPAS","4","BSN","","4");
INSERT INTO students VALUES("2017-01346","JODESSAH MAE","BACUD","3","BSA","","4");
INSERT INTO students VALUES("2017-01384","JOHN PAULUS SERAFIN","GAZZINGAN","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2017-01758","FAYE VANESSA","GOROSPE","1","BSCpE","ENGR","4");
INSERT INTO students VALUES("2018-01-1000","DARREN ANGELO","CALLUENG","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2018-01014","Kate ","Sumabat","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2018-01060","KRISTEL KAYLA ","TADAYA","2","BSED","","3");
INSERT INTO students VALUES("2018-01224","ANGHELIECA KHAYTE","TUMBAGA","2","BSPA","","3");
INSERT INTO students VALUES("2018-01330","DARLENE ","TOLETE","2","BSPsych","","3");
INSERT INTO students VALUES("2018-01362","CHRISTIAN DANIEL ","TAMAYAO","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2018-01498","WILSON MATHUGH","ARUGAY","3","BSA","","3");
INSERT INTO students VALUES("2018-01731","RONNIE","BALLAD","2","BSPsych","","3");
INSERT INTO students VALUES("2018-01743","SHERAZADE ","UBAY","4","BSPharma","","3");
INSERT INTO students VALUES("2018-01798","TWINKLE","FERNANDEZ","2","BSPsych","","1");
INSERT INTO students VALUES("2018-01831","SHAYNNAH","QUILANG","3","BSTM","","3");
INSERT INTO students VALUES("2018-01893","YESSAMIN FAYE","GUILLEN","2","BSPsych","","3");
INSERT INTO students VALUES("2018-01922","JENNY JOY","TEPPANG","1","BSCE","ENGR","3");
INSERT INTO students VALUES("2018-01997","JEVY MARK","DUPAY","2","BSED","","3");
INSERT INTO students VALUES("2018-02034","RINALENE JOY","DURAN","4","BSMT","","3");
INSERT INTO students VALUES("2019-01-020","ALYSHA ","BUYAGAN","2","BAELS","","4");
INSERT INTO students VALUES("2019-01-1203","JARED NILES","SANTOS","4","BSN","","4");
INSERT INTO students VALUES("2019-01-398","DAYNE ANGELI","CABASAL","4","BSPharma","","4");
INSERT INTO students VALUES("2019-01-441","AELTHEO ","BALUBAL","2","BAELS","","4");
INSERT INTO students VALUES("2019-01-470","NOVIE ANN ","TABLAC","1","BSIT","BSIT","4");
INSERT INTO students VALUES("2019-01-472","KRISHA LEI","BERBANO","2","BSPA","","4");
INSERT INTO students VALUES("2019-01-524","SPENCER","RUIZ","1","BSCpE","ENGR","4");
INSERT INTO students VALUES("2019-01-811","CHERRY MAE","MORGADO","2","BSED","","3");
INSERT INTO students VALUES("2019-01-855","ARLYN JOY ","TORRADO","4","BSMT","","4");
INSERT INTO students VALUES("2019-01012","DHEA JANELLE","TORRES","1","BSIT","BSIT","2");
INSERT INTO students VALUES("2019-01038","PRINCESS JASTINE MAE ","REÑA","1","BSCpE","ENGR","4");
INSERT INTO students VALUES("2019-01303","JOSEPHINE ROSE","ALBANO","3","BSTM","","2");
INSERT INTO students VALUES("2019-01362","Ben-Ben","Guzman","2","BSE","","4");
INSERT INTO students VALUES("2019-01423","NATHALIE MAE ","ESCUCHARO","2","BSPA","","2");
INSERT INTO students VALUES("2019-01425","CRISTEL","MORGADO","3","BSTM","","2");
INSERT INTO students VALUES("2019-01490","BENJAMIN","MALSI","4","BSMT","","2");
INSERT INTO students VALUES("2019-01496","ANGELICA ","DELA CRUZ","4","BSMT","","2");
INSERT INTO students VALUES("2019-01560","RAILEY LAYNE","BATAC","4","BSMT","","2");
INSERT INTO students VALUES("2019-01795","JNMARK FRIEDRICH ","AGUSTIN","1","BSIT","BSIT","2");
INSERT INTO students VALUES("2019-0200017","QUEEN DOMINIQUE","CABIAO","2","BSPsych","","4");
INSERT INTO students VALUES("2019-0200027","HANNAH FRANCESCA ","HERICO","2","BSPsych","","4");
INSERT INTO students VALUES("2020-01-099","ROSHEL DAPHNE","DUMALAO","4","BSMT","","3");
INSERT INTO students VALUES("2020-01-152","JEROME YVAN","VENTURA","1","BSCpE","ENGR","3");
INSERT INTO students VALUES("2020-01-161","GRACIELLA ","GOYAGOY","3","BSTM","","3");
INSERT INTO students VALUES("2020-01-164","LILIAN ","TALLA","3","BSTM","","3");
INSERT INTO students VALUES("2020-010010","BIEGH JOHN PAUL","ALONZO","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2020-010056","VINCE JAKOD","CEREZO","1","BSCpE","ENGR","3");
INSERT INTO students VALUES("2020-010069","Angeline","Julian","1","BSIT","","3");
INSERT INTO students VALUES("2020-010118","SHANELLE KAYE","ARUCAN","2","BSPsych","","3");
INSERT INTO students VALUES("2020-010189","YOWELLE CHED","SEDANO","2","BSPA","","3");
INSERT INTO students VALUES("2020-010250","JOHN LESTER ","GAMATA","1","BSCpE","ENGR","3");
INSERT INTO students VALUES("2020-010341","CLARENCE ","REMUDARO","4","BSN","","3");
INSERT INTO students VALUES("2020-010434","MA. ANGELICA ","PEREZ","2","BSPA","","3");
INSERT INTO students VALUES("2020-010533","ALDWIN JAMES","POCOT","2","BSPA","","2");
INSERT INTO students VALUES("2020-01208","ZACH","BUGUNA","3","BSA","","1");
INSERT INTO students VALUES("2020-01362","Ben","Cruz","1","BSIT","","3");
INSERT INTO students VALUES("2020-02-0004","EMITERIO","NICOLAS","2","BSSW","","3");
INSERT INTO students VALUES("2020-02-0013","SHAINE HAZEL","MEDRANO","4","BSRT","","2");
INSERT INTO students VALUES("2021-01-1354","CHRISTINE ","COMITAN","1","BSIT","BSIT","2");
INSERT INTO students VALUES("2021-01-1456","KAYLA MAE","MALENAB","1","BSCE","ENGR","2");
INSERT INTO students VALUES("2021-01-1520","JERYLE ","SACLAG","3","BSTM","","2");
INSERT INTO students VALUES("2021-01-1545","BRIGITTE ","ALZATE","3","BSTM","","2");
INSERT INTO students VALUES("2021-01-1546","COLEEN ","CALALANG","3","BSTM","","2");
INSERT INTO students VALUES("2021-01-1571","ALDRIN JAKE","ANCHETA","1","BSCE","ENGR","2");
INSERT INTO students VALUES("2021-01-1699","JOYCE","ACERIT","4","BSMT","","2");
INSERT INTO students VALUES("2021-01-1781","JUSTINE KENNETH ","IMPERIAL","4","BSN","","2");
INSERT INTO students VALUES("2021-01-1932","GEORGETTE FLEUR","LUCAS","1","BSCE","ENGR","4");
INSERT INTO students VALUES("2021-02-1395","CHRISTOPHER ","MANALANG II","1","BSIT","BSIT","2");
INSERT INTO students VALUES("2022-01-0031","ZYRELL ANDREI","IBAY","4","BSN","","1");
INSERT INTO students VALUES("2022-01-0046","CATHERINE","DALAFU","1","BSIT","BSIT","1");
INSERT INTO students VALUES("2022-01-0349","CRISTINA","TUAZON","1","BSIT","BSIT","1");
INSERT INTO students VALUES("2022-01-1073","DAIRAGENE","OBUSAN","4","BSN","","1");
INSERT INTO students VALUES("2022-01-1357","FRENCIPE ","SOMERA","2","BSPA","","1");
INSERT INTO students VALUES("2022-01-1366","ELIJAH","ALONZO","1","BSIT","BSIT","1");
INSERT INTO students VALUES("2022-01-1384","CAMILLE ROMEE","LOU","2","BEED","","1");
INSERT INTO students VALUES("2022-01-1540","JHAZER HART","ANTONIO","1","BSIT","BSIT","1");
INSERT INTO students VALUES("G2012-00185","CLARK JOSHUA","RAPANUT","1","BSCE","ENGR","1");
INSERT INTO students VALUES("G2015-00217","JAYELLA KATE","SAQUING","3","BSBA-FM","","2");
INSERT INTO students VALUES("G2015-00266","KASSANDRA ","TAGUIAM","4","BSN","","2");
INSERT INTO students VALUES("G2015-00333","JOHN PATRICK ","DELA CRUZ","2","BSPsych","","1");
INSERT INTO students VALUES("G2017-01686","CEZ ANNE","MEDRANO","2","BAELS","","4");
INSERT INTO students VALUES("G2019-01448","EMMANUEL ","JOSE","1","BSCE","ENGR","2");
INSERT INTO students VALUES("G2019-01556","VIKTOR CARLO","BACCAY","4","BSRT","","2");
INSERT INTO students VALUES("G2020-01005","APRIL ALEXELLE","AWINGAN","2","BSED","","1");
INSERT INTO students VALUES("G2020-01396","JERMAINE KAYE","ABROGENA","3","BSTM","","1");



#
# Delete any existing table `tbl_accounts`
#

DROP TABLE IF EXISTS `tbl_accounts`;


#
# Table structure of table `tbl_accounts`
#



CREATE TABLE `tbl_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `role_as` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




#
# Delete any existing table `tbl_archive`
#

DROP TABLE IF EXISTS `tbl_archive`;


#
# Table structure of table `tbl_archive`
#



CREATE TABLE `tbl_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(200) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `dsn_id` int(30) NOT NULL,
  `position_id` int(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_archive VALUES("99","1686158139.","2020-01362","1","1","2023-06-08 01:20:52");



#
# Delete any existing table `tbl_criteria`
#

DROP TABLE IF EXISTS `tbl_criteria`;


#
# Table structure of table `tbl_criteria`
#



CREATE TABLE `tbl_criteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criteria` text NOT NULL,
  `eval_form_id` int(11) NOT NULL,
  `order_by` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_criteria VALUES("1","Strand 1. The Paulinian Leader submits himself/herself to professional growth and development.","1","");
INSERT INTO tbl_criteria VALUES("2","Strand 2. The Paulinian Leader is quality result-oriented","1","");
INSERT INTO tbl_criteria VALUES("3","Strand 2.  The Paulinian Leader actively participates in the activities of the organization and university.","1","");
INSERT INTO tbl_criteria VALUES("4","Strand 1. The Paulinian Leader serves the organization, its members, and the university.","1","");
INSERT INTO tbl_criteria VALUES("5","Strand 3. The Paulinian Leader shows utmost commitment by participating in related activities","1","");
INSERT INTO tbl_criteria VALUES("6","Strand 1. The Paulinian Leader is a model of grooming and proper decorum","1","");
INSERT INTO tbl_criteria VALUES("7","Strand 2. The Paulinian Leader complies with the Environmental Stewardship of the university","1","");
INSERT INTO tbl_criteria VALUES("8","Strand 1: The Paulinian Leader serves the organization, its members, and the university","2","");
INSERT INTO tbl_criteria VALUES("9","Strand 2: The Paulinian Leader activity participants in the activities of the organization and university.","2","");
INSERT INTO tbl_criteria VALUES("10","Strand 3: The Paulinian Leader shows utmost commitment by participating in related activities.","2","");
INSERT INTO tbl_criteria VALUES("11","Strand 1: The Paulinian Leader is a model of grooming and proper decorum.","2","");
INSERT INTO tbl_criteria VALUES("12","Strand 2: The Paulinian Leader complies with the Environmental Sterwardship of the University.","2","");



#
# Delete any existing table `tbl_departments`
#

DROP TABLE IF EXISTS `tbl_departments`;


#
# Table structure of table `tbl_departments`
#



CREATE TABLE `tbl_departments` (
  `dept_id` int(30) NOT NULL AUTO_INCREMENT,
  `dept_code` varchar(65) NOT NULL,
  `dept_title` varchar(65) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_departments VALUES("1","SITE","SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING");
INSERT INTO tbl_departments VALUES("2","SASTE","SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION");
INSERT INTO tbl_departments VALUES("3","SNAHS","SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES");
INSERT INTO tbl_departments VALUES("4","SBAHM","SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT");
INSERT INTO tbl_departments VALUES("5","SPUP","ST PAUL UNIVERSITY PHILIPPINES");



#
# Delete any existing table `tbl_question`
#

DROP TABLE IF EXISTS `tbl_question`;


#
# Table structure of table `tbl_question`
#



CREATE TABLE `tbl_question` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `eval_form_id` int(30) NOT NULL,
  `criteria_id` int(30) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_question VALUES("1","1","1","1.1 The Paulinian Leader organizes/co-organizes and/or serves as resource speaker in seminars and activities for the organization.");
INSERT INTO tbl_question VALUES("2","1","1","1.2 The Paulinian Leader facilitates/co-facilitates  seminars and activities for the organization");
INSERT INTO tbl_question VALUES("3","1","0","2.1 The Paulinian Leader ensures quality in all tasks/assignment given.");
INSERT INTO tbl_question VALUES("4","1","1","1.3  The Paulinian Leader participate seminars and activities for the organization");
INSERT INTO tbl_question VALUES("5","1","1","1.4 The Paulinian Leader attends to SPUP. organized seminars and activities related to the organization.");
INSERT INTO tbl_question VALUES("6","1","2","2.2 The Paulinian Leader ensures quality in all tasks/assignment given.");
INSERT INTO tbl_question VALUES("7","1","4","1.1 The Paulinian Leader:
a. performs related task outside the given assignment;



b. initiates actions to solve issues among students and those that concern the organization/university;and



c. participants in the aftercare during activities.");



#
# Delete any existing table `tbl_question_rate`
#

DROP TABLE IF EXISTS `tbl_question_rate`;


#
# Table structure of table `tbl_question_rate`
#



CREATE TABLE `tbl_question_rate` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `criteria_id` int(11) NOT NULL,
  `rate0` text NOT NULL,
  `rate1` text NOT NULL,
  `rate2` text NOT NULL,
  `rate3` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO tbl_question_rate VALUES("1","1","1","Has not organized/co-organized seminars/activities"," Has organized/co-organized one seminars/activities","Has organized/co-organized two seminars/activities"," Has organized/co-organized more than two seminars/activities","","");
INSERT INTO tbl_question_rate VALUES("2","2","2","Has not facilitated/co-facilitated  seminars/activities","Has facilitated/co-facilitated one seminars/activities","Has facilitated/co-facilitated two seminars/activities","Has facilitated/co-facilitated  more than two seminars/activities","","");
INSERT INTO tbl_question_rate VALUES("3","3","2","Performs but needs improvement on the tasks/assignments","Performs satisfactory on the tasks/assignments","Performs  very satisfactory on the tasks/assignments","Performs outstanding/excellent on the tasks/assignments","","");
INSERT INTO tbl_question_rate VALUES("4","4","1","Has not participated in any seminars/activities","Has participated in one to two seminars/activities","Has participated in three to four seminars/activities","Has participated in more than four seminars/activities","","");



#
# Delete any existing table `tbl_users`
#

DROP TABLE IF EXISTS `tbl_users`;


#
# Table structure of table `tbl_users`
#



CREATE TABLE `tbl_users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `accounts_id` varchar(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dept_id` int(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_users VALUES("1","2018-01362","Christian Daniel","Tamayao","1","7cc05fb062cbb39a7878c3a3f36bb4b6dd465636","admin");
INSERT INTO tbl_users VALUES("2","2016-00303","Dave Justine","Agabin","1","f2942ac7f4652f1bd196a6f48d332977991abfd7","schoolwide adviser");
INSERT INTO tbl_users VALUES("3","2020-010069","Angeline","Julian","2","c273ea3643ddd3d850b9b132338da2fb54d5c0db","schoolwide adviser");
INSERT INTO tbl_users VALUES("4","2006-0116952","Angela Grace","Garcia","10","7cc05fb062cbb39a7878c3a3f36bb4b6dd465636","schoolwide adviser");
INSERT INTO tbl_users VALUES("5","2017-01575","James Vinson ","Villanueva","2","a4a45812d0511be4a57fe225cc684f589d86170c","comelec chair");
INSERT INTO tbl_users VALUES("6","2018-01363","Christian ","Tamayao","1","a4a45812d0511be4a57fe225cc684f589d86170c","super admin");



#
# Delete any existing table `tbleval_form`
#

DROP TABLE IF EXISTS `tbleval_form`;


#
# Table structure of table `tbleval_form`
#



CREATE TABLE `tbleval_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_number` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbleval_form VALUES("1","SAASS-PSG 08","Adviser Form");
INSERT INTO tbleval_form VALUES("2","SAASS-PSG 09","Peer/Student Moderator");
INSERT INTO tbleval_form VALUES("3","SAASS-PSG 10","Self Form");



#
# Delete any existing table `votecount`
#

DROP TABLE IF EXISTS `votecount`;


#
# Table structure of table `votecount`
#



CREATE TABLE `votecount` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `dept_id` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO votecount VALUES("1","2018-01014","1");
INSERT INTO votecount VALUES("2","2018-01362","1");
INSERT INTO votecount VALUES("3","2006-0116952","2");
INSERT INTO votecount VALUES("4","2020-010010","1");
INSERT INTO votecount VALUES("5","","0");



#
# Delete any existing table `votes`
#

DROP TABLE IF EXISTS `votes`;


#
# Table structure of table `votes`
#



CREATE TABLE `votes` (
  `votes_id` int(30) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(100) NOT NULL,
  `candidates_id` int(30) NOT NULL,
  `position_id` int(30) NOT NULL,
  PRIMARY KEY (`votes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO votes VALUES("1","2018-01014","8","1");
INSERT INTO votes VALUES("2","2018-01014","9","2");
INSERT INTO votes VALUES("3","2018-01014","10","3");
INSERT INTO votes VALUES("4","2018-01014","11","4");
INSERT INTO votes VALUES("5","2018-01014","12","5");
INSERT INTO votes VALUES("6","2018-01014","18","6");
INSERT INTO votes VALUES("7","2018-01014","16","6");
INSERT INTO votes VALUES("8","2018-01014","34","9");
INSERT INTO votes VALUES("9","2018-01014","35","10");
INSERT INTO votes VALUES("10","2018-01362","100","1");
INSERT INTO votes VALUES("11","2018-01362","9","2");
INSERT INTO votes VALUES("12","2018-01362","10","3");
INSERT INTO votes VALUES("13","2018-01362","11","4");
INSERT INTO votes VALUES("14","2018-01362","18","6");
INSERT INTO votes VALUES("15","2018-01362","13","6");
INSERT INTO votes VALUES("16","2018-01362","16","6");
INSERT INTO votes VALUES("17","2018-01362","19","6");
INSERT INTO votes VALUES("18","2018-01362","33","8");
INSERT INTO votes VALUES("19","2018-01362","34","9");
INSERT INTO votes VALUES("20","2018-01362","35","10");
INSERT INTO votes VALUES("21","2018-01362","37","12");
INSERT INTO votes VALUES("22","2018-01362","45","14");
INSERT INTO votes VALUES("23","2018-01362","40","14");
INSERT INTO votes VALUES("24","2018-01362","42","14");
INSERT INTO votes VALUES("25","2006-0116952","100","1");
INSERT INTO votes VALUES("26","2006-0116952","9","2");
INSERT INTO votes VALUES("27","2006-0116952","10","3");
INSERT INTO votes VALUES("28","2006-0116952","16","6");
INSERT INTO votes VALUES("29","2006-0116952","27","7");
INSERT INTO votes VALUES("30","2006-0116952","28","7");
INSERT INTO votes VALUES("31","2006-0116952","57","25");
INSERT INTO votes VALUES("32","2020-010010","100","1");
INSERT INTO votes VALUES("33","2020-010010","9","2");
INSERT INTO votes VALUES("34","2020-010010","10","3");
INSERT INTO votes VALUES("35","2020-010010","11","4");
INSERT INTO votes VALUES("36","2020-010010","33","8");
INSERT INTO votes VALUES("37","2020-010010","34","9");
INSERT INTO votes VALUES("38","2020-010010","35","10");
INSERT INTO votes VALUES("39","2020-010010","37","12");
INSERT INTO votes VALUES("40","2020-010010","45","14");
INSERT INTO votes VALUES("41","2020-010010","40","14");
INSERT INTO votes VALUES("42","2020-010010","42","14");
INSERT INTO votes VALUES("43","2020-010010","52","19");

