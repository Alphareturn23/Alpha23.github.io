# BILANGPAULINIAN : MySQL database backup
#
# Generated: Saturday 1. July 2023
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

INSERT INTO accounts VALUES("1","2018-01362","Christian Daniel T ","Tamayao","7cc05fb062cbb39a7878c3a3f36bb4b6dd465636","Admin");
INSERT INTO accounts VALUES("2","2017-01941","Haydee Angeli","Sibal","a4a45812d0511be4a57fe225cc684f589d86170c","Commissioner");
INSERT INTO accounts VALUES("3","2017-01575","James Vinson","Villanueva
","a4a45812d0511be4a57fe225cc684f589d86170c","Comelec Chair");



#
# Delete any existing table `answer`
#

DROP TABLE IF EXISTS `answer`;


#
# Table structure of table `answer`
#



CREATE TABLE `answer` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `officer_id` int(11) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO answer VALUES("1","34","1","3");
INSERT INTO answer VALUES("2","34","2","3");
INSERT INTO answer VALUES("3","34","3","2");
INSERT INTO answer VALUES("4","34","4","3");
INSERT INTO answer VALUES("5","34","5","2");
INSERT INTO answer VALUES("6","34","6","3");
INSERT INTO answer VALUES("7","34","7","3");
INSERT INTO answer VALUES("8","34","8","2");
INSERT INTO answer VALUES("9","34","9","2");
INSERT INTO answer VALUES("10","34","10","3");
INSERT INTO answer VALUES("11","34","11","3");
INSERT INTO answer VALUES("12","34","12","3");
INSERT INTO answer VALUES("13","34","13","2");
INSERT INTO answer VALUES("14","35","1","3");
INSERT INTO answer VALUES("15","35","2","2");
INSERT INTO answer VALUES("16","35","3","3");
INSERT INTO answer VALUES("17","35","4","2");
INSERT INTO answer VALUES("18","35","5","3");
INSERT INTO answer VALUES("19","35","6","2");
INSERT INTO answer VALUES("20","35","7","3");
INSERT INTO answer VALUES("21","35","8","3");
INSERT INTO answer VALUES("22","35","9","3");
INSERT INTO answer VALUES("23","35","10","3");
INSERT INTO answer VALUES("24","35","11","3");
INSERT INTO answer VALUES("25","35","12","3");
INSERT INTO answer VALUES("26","35","13","2");



#
# Delete any existing table `answer_self`
#

DROP TABLE IF EXISTS `answer_self`;


#
# Table structure of table `answer_self`
#



CREATE TABLE `answer_self` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `officer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO answer_self VALUES("25","9","6","3");
INSERT INTO answer_self VALUES("26","9","7","2");
INSERT INTO answer_self VALUES("27","9","8","3");
INSERT INTO answer_self VALUES("28","9","9","2");
INSERT INTO answer_self VALUES("29","9","10","3");
INSERT INTO answer_self VALUES("30","9","11","3");
INSERT INTO answer_self VALUES("31","9","12","3");
INSERT INTO answer_self VALUES("32","9","13","2");
INSERT INTO answer_self VALUES("33","7","6","3");
INSERT INTO answer_self VALUES("34","7","7","3");
INSERT INTO answer_self VALUES("35","7","8","2");
INSERT INTO answer_self VALUES("36","7","9","3");
INSERT INTO answer_self VALUES("37","7","10","3");
INSERT INTO answer_self VALUES("38","7","11","3");
INSERT INTO answer_self VALUES("39","7","12","2");
INSERT INTO answer_self VALUES("40","7","13","3");
INSERT INTO answer_self VALUES("41","35","6","3");
INSERT INTO answer_self VALUES("42","35","7","2");
INSERT INTO answer_self VALUES("43","35","8","3");
INSERT INTO answer_self VALUES("44","35","9","3");
INSERT INTO answer_self VALUES("45","35","10","2");
INSERT INTO answer_self VALUES("46","35","11","3");
INSERT INTO answer_self VALUES("47","35","12","3");
INSERT INTO answer_self VALUES("48","35","13","2");



#
# Delete any existing table `answers_peers`
#

DROP TABLE IF EXISTS `answers_peers`;


#
# Table structure of table `answers_peers`
#



CREATE TABLE `answers_peers` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `officer_id` int(11) NOT NULL,
  `question_id` int(30) NOT NULL,
  `rate` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO answers_peers VALUES("1","34","6","3");
INSERT INTO answers_peers VALUES("2","34","7","2");
INSERT INTO answers_peers VALUES("3","34","8","3");
INSERT INTO answers_peers VALUES("4","34","9","2");
INSERT INTO answers_peers VALUES("5","34","10","3");
INSERT INTO answers_peers VALUES("6","34","11","2");
INSERT INTO answers_peers VALUES("7","34","12","3");
INSERT INTO answers_peers VALUES("8","34","13","2");
INSERT INTO answers_peers VALUES("9","35","6","3");
INSERT INTO answers_peers VALUES("10","35","7","2");
INSERT INTO answers_peers VALUES("11","35","8","3");
INSERT INTO answers_peers VALUES("12","35","9","3");
INSERT INTO answers_peers VALUES("13","35","10","2");
INSERT INTO answers_peers VALUES("14","35","11","3");
INSERT INTO answers_peers VALUES("15","35","12","3");
INSERT INTO answers_peers VALUES("16","35","13","3");



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
  `requirements` varchar(200) NOT NULL,
  `eval_adviser` tinyint(2) NOT NULL,
  `eval_peers` tinyint(2) NOT NULL,
  `eval_self` tinyint(2) NOT NULL,
  PRIMARY KEY (`candidates_id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO candidates VALUES("9","1687573750.png","2020-010189","1","2","comelec,picture,coc,recom,cog,la","0","0","1");
INSERT INTO candidates VALUES("10","1687573772.png","2020-010434","1","3","comelec","0","0","0");
INSERT INTO candidates VALUES("11","1687573795.png","2019-01-020","1","4","comelec","0","0","0");
INSERT INTO candidates VALUES("12","1687573859.png","2020-010056","1","5","comelec","0","0","0");
INSERT INTO candidates VALUES("13","1687573890.png","G2019-01448","1","6","valid_id","0","0","0");
INSERT INTO candidates VALUES("14","1664724378.png","2021-02-1395","1","6","","0","0","0");
INSERT INTO candidates VALUES("15","1664724395.png","2022-01-1366","1","6","","0","0","0");
INSERT INTO candidates VALUES("16","1664724433.png","2019-0200027","1","6","","0","0","0");
INSERT INTO candidates VALUES("17","1664724506.png","2019-01-441","1","6","","0","0","0");
INSERT INTO candidates VALUES("18","1664724520.png","2020-010341","1","6","","0","0","0");
INSERT INTO candidates VALUES("19","1664724532.png","2021-01-1781","1","6","","0","0","0");
INSERT INTO candidates VALUES("20","1664724574.png","2021-01-1699","1","6","","0","0","0");
INSERT INTO candidates VALUES("21","1664724641.png","2019-01490","1","6","","0","0","0");
INSERT INTO candidates VALUES("22","1664724688.png","2019-01303","1","6","","0","0","0");
INSERT INTO candidates VALUES("23","1664724768.png","2021-01-1545","1","6","","0","0","0");
INSERT INTO candidates VALUES("24","1664724787.png","2021-01-1520","1","6","","0","0","0");
INSERT INTO candidates VALUES("25","1664724803.png","2013-00100","1","7","la","0","0","0");
INSERT INTO candidates VALUES("26","1664724823.png","2017-01228","1","7","","0","0","0");
INSERT INTO candidates VALUES("27","1664724854.png","2006-0116952","1","7","","0","0","0");
INSERT INTO candidates VALUES("28","1664724873.png","2019-0200017","1","7","","0","0","0");
INSERT INTO candidates VALUES("29","1664724913.png","2022-01-1540","1","7","","0","0","0");
INSERT INTO candidates VALUES("30","1664753057.png","2020-010250","1","7","","0","0","0");
INSERT INTO candidates VALUES("31","1664725115.png","2020-01208","1","7","coc","0","0","0");
INSERT INTO candidates VALUES("32","1664725146.png","2021-01-1546","1","7","","0","0","0");
INSERT INTO candidates VALUES("33","1664725399.png","2020-010010","2","8","","0","0","0");
INSERT INTO candidates VALUES("34","1664728730.png","2019-01038","2","9","","1","1","1");
INSERT INTO candidates VALUES("35","1664754160.png","2022-01-0349","2","10","","1","1","1");
INSERT INTO candidates VALUES("36","1664753581.png","2021-01-1354","2","11","","0","0","0");
INSERT INTO candidates VALUES("37","1687612871.png","2018-01362","2","12","comelec,picture,coc,recom,interview,valid_id,cogm","0","0","0");
INSERT INTO candidates VALUES("38","1664754283.png","2019-01-524","2","13","","0","0","0");
INSERT INTO candidates VALUES("39","1664727302.png","2016-00816","2","14","","0","0","0");
INSERT INTO candidates VALUES("40","1664727348.png","2020-01-152","2","14","","0","0","0");
INSERT INTO candidates VALUES("41","1664727455.png","2021-01-1456","2","14","","0","0","0");
INSERT INTO candidates VALUES("42","1664754299.png","2017-01384","2","14","","0","0","0");
INSERT INTO candidates VALUES("43","1664754383.png","2019-01012","2","14","","0","0","0");
INSERT INTO candidates VALUES("44","1664753539.png","2021-01-1932","2","14","","0","0","0");
INSERT INTO candidates VALUES("45","1664727742.jpeg","2022-01-0046","2","14","","0","0","0");
INSERT INTO candidates VALUES("46","1664755126.png","2018-01-1000","2","14","","0","0","0");
INSERT INTO candidates VALUES("47","1664754331.png","G2012-00185","2","16","","0","0","0");
INSERT INTO candidates VALUES("48","1664754204.png","2016-00499","2","15","","0","0","0");
INSERT INTO candidates VALUES("49","1664727946.png","2021-01-1571","2","18","","0","0","0");
INSERT INTO candidates VALUES("50","1664728004.png","2019-01795","2","17","","0","0","0");
INSERT INTO candidates VALUES("51","1664728051.png","2018-01922","2","20","","0","0","0");
INSERT INTO candidates VALUES("52","1664754553.png","2016-00303","2","19","comelec,picture,coc","0","0","0");
INSERT INTO candidates VALUES("53","1664753934.png","2017-01758","2","22","","0","0","0");
INSERT INTO candidates VALUES("54","1664771223.png","2019-01-470","2","21","","0","0","0");
INSERT INTO candidates VALUES("55","1664753974.png","2016-01165","2","23","","0","0","0");
INSERT INTO candidates VALUES("56","1664729052.png","2018-01997","3","24","","0","0","0");
INSERT INTO candidates VALUES("57","1664729087.png","2018-01731","3","25","","0","0","0");
INSERT INTO candidates VALUES("58","1664729233.png","2020-02-0004","3","26","","0","0","0");
INSERT INTO candidates VALUES("59","1664777626.png","2018-01224","3","27","","0","0","0");
INSERT INTO candidates VALUES("60","1664729352.png","2018-01893","3","28","","0","0","0");
INSERT INTO candidates VALUES("61","1664729403.png","2020-010118","3","29","","0","0","0");
INSERT INTO candidates VALUES("62","1664729501.png","2018-01330","3","29","","0","0","0");
INSERT INTO candidates VALUES("63","1664729524.png","2019-01-811","3","29","","0","0","0");
INSERT INTO candidates VALUES("64","1664729643.png","2020-010533","3","29","","0","0","0");
INSERT INTO candidates VALUES("65","1664729658.png","2018-01798","3","29","","0","0","0");
INSERT INTO candidates VALUES("66","1664777703.png","G2015-00333","3","29","","0","0","0");
INSERT INTO candidates VALUES("67","1664777761.png","2022-01-1384","3","29","","0","0","0");
INSERT INTO candidates VALUES("68","1664729981.png","2022-01-1357","3","29","","0","0","0");
INSERT INTO candidates VALUES("69","1664777789.png","G2020-01005","3","30","","0","0","0");
INSERT INTO candidates VALUES("70","1664777810.png","2019-01423","3","31","","0","0","0");
INSERT INTO candidates VALUES("71","1664730245.png","2018-01060","3","32","","0","0","0");
INSERT INTO candidates VALUES("72","1664777836.png","G2017-01686","3","33","","0","0","0");
INSERT INTO candidates VALUES("73","1664730562.png","2019-01-1203","4","34","","0","0","0");
INSERT INTO candidates VALUES("74","1664730577.png","2018-01743","4","35","","0","0","0");
INSERT INTO candidates VALUES("75","1664730620.png","2019-01-398","4","36","","0","0","0");
INSERT INTO candidates VALUES("76","1664798393.png","2019-01-855","4","37","","0","0","0");
INSERT INTO candidates VALUES("77","1664730797.png","2020-01-099","4","38","","0","0","0");
INSERT INTO candidates VALUES("78","1664730827.png","2015-00360","4","39","","0","0","0");
INSERT INTO candidates VALUES("79","1664730852.png","2022-01-1073","4","39","","0","0","0");
INSERT INTO candidates VALUES("80","1664730899.png","2015-00202","4","39","","0","0","0");
INSERT INTO candidates VALUES("81","1664730941.png","G2015-00266","4","39","","0","0","0");
INSERT INTO candidates VALUES("82","1664731205.jpg","G2019-01556","4","39","","0","0","0");
INSERT INTO candidates VALUES("83","1664731242.png","2020-02-0013","4","39","","0","0","0");
INSERT INTO candidates VALUES("84","1664731275.png","2005-00007","4","39","","0","0","0");
INSERT INTO candidates VALUES("85","1664731298.png","2019-01496","4","39","","0","0","0");
INSERT INTO candidates VALUES("86","1664731367.JPG","2022-01-0031","4","40","","0","0","0");
INSERT INTO candidates VALUES("87","1664731427.png","2019-01560","4","41","","0","0","0");
INSERT INTO candidates VALUES("88","1664731448.jpg","2018-02034","4","42","","0","0","0");
INSERT INTO candidates VALUES("89","1664754857.png","2017-01346","5","44","cogm,cog,la","0","0","0");
INSERT INTO candidates VALUES("90","1664732202.png","2020-01-161","5","45","","0","0","0");
INSERT INTO candidates VALUES("91","1664732236.png","2020-01-164","5","46","","0","0","0");
INSERT INTO candidates VALUES("92","1664798430.png","2007-126442","5","47","","0","0","0");
INSERT INTO candidates VALUES("93","1664732363.png","2018-01831","5","48","","0","0","0");
INSERT INTO candidates VALUES("94","1664732416.png","G2015-00217","5","49","","0","0","0");
INSERT INTO candidates VALUES("95","1664732450.png","2016-00274","5","49","","0","0","0");
INSERT INTO candidates VALUES("96","1664732470.png","2019-01425","5","49","","0","0","0");
INSERT INTO candidates VALUES("97","1664732520.png","G2020-01396","5","49","","0","0","0");
INSERT INTO candidates VALUES("98","1664732638.png","2018-01498","5","52","","0","0","0");
INSERT INTO candidates VALUES("101","1686718485.","2020-01-01005","1","2","cog,la","0","0","0");
INSERT INTO candidates VALUES("102","1687195015.png","2017-01-0362","4","37","comelec,picture,coc,recom,interview,valid_id,cogm,cog,la","0","0","0");
INSERT INTO candidates VALUES("103","1664724068.png","2019-01-472","1","1","","0","0","0");
INSERT INTO candidates VALUES("104","1688057959.png","2017-01-009","3","29","comelec, 2 by 2, coc","0","0","0");
INSERT INTO candidates VALUES("105","1688197022.","2015-01-009","2","17","1","0","0","0");
INSERT INTO candidates VALUES("109","1688199679.","2017-0132","2","22","4","0","0","0");



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
# Delete any existing table `domain`
#

DROP TABLE IF EXISTS `domain`;


#
# Table structure of table `domain`
#



CREATE TABLE `domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(70) NOT NULL,
  `dom_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO domain VALUES("1","1","PAULINIAN LEADERSHIP AS SOCIAL RESPONSIBILITY","<div style="text-align: justify;"><span style="font-family: "Times New Roman";">This focuses on the account that Paulinian Leaders' demonstrate good leadership in the activities of the organization, of the university, and of their respective community. This domain is further exemplified by the Paulinian Leaders' plans, action, accomplishments, and social interaction with the sister, administrators, faculty, and their fellow students.</span></div>");
INSERT INTO domain VALUES("2","2","PAULINIAN LEADERSHIP AS A LIFE OF SERVICES","<div style="text-align: justify;"><span style="font-family: " times="" new="" roman";"="">This gears towards the fulfillment of the Paulinian Leaders' active and utmost involvement in the organization, management, and evaluation of the activities of the organization, university, and community. In this domain, voluntary and special services rendered are notable manifestations of accomplishments.</span></div>");
INSERT INTO domain VALUES("3","3","PAULINIAN LEADER AS LEADING BY EXAMPLE (Discipline/Decorum)","<div style="text-align: justify;"><span style="font-family: "Times New Roman";">This refers to how the Paulinian Leaders' conform to Paulinian norms and conduct. It is reflected in their fidelity to the policies on decorum, proper grooming, as well as showing Paulinian traits-promptness, warmth, simplicity, proactiveness and hospitality-to people they are dealing with. Their compliance to the Environmental Stewardship advocacy of the university is also notably assessed.</span></div>");



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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO evaluation_list VALUES("1","34","2");
INSERT INTO evaluation_list VALUES("2","34","0");
INSERT INTO evaluation_list VALUES("3","9","9");
INSERT INTO evaluation_list VALUES("4","9","9");
INSERT INTO evaluation_list VALUES("5","35","2");
INSERT INTO evaluation_list VALUES("6","35","0");



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
INSERT INTO positions VALUES("24","3","Governor");
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
# Delete any existing table `requirements`
#

DROP TABLE IF EXISTS `requirements`;


#
# Table structure of table `requirements`
#



CREATE TABLE `requirements` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO requirements VALUES("1","Comelec Slip");
INSERT INTO requirements VALUES("2","2 by 2 picture with name");
INSERT INTO requirements VALUES("3","Certificate of Candidacy Form");
INSERT INTO requirements VALUES("4","Recommendation Letter");
INSERT INTO requirements VALUES("5","Interview Result");
INSERT INTO requirements VALUES("6","Validated School ID");
INSERT INTO requirements VALUES("7","Certificate of Good Moral");
INSERT INTO requirements VALUES("8","Certificate of Grades");
INSERT INTO requirements VALUES("9","At least One(1) Leadership Seminar Attended/PSLDP");



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

INSERT INTO students VALUES("001-01362","Vinson ","Dela Cruz","4","BSA","ENGR","2");
INSERT INTO students VALUES("2005-00007","AUDREY JESSA","TAMBIAO","3","BSN","","2");
INSERT INTO students VALUES("2006-0116952","ANGELA GRACE","GARCIA","2","BSSW","","2");
INSERT INTO students VALUES("2007-126442","KENNEY BRYAN","MIGUEL","3","BSA","","4");
INSERT INTO students VALUES("2013-00100","DARIANNE JOY ","CACAYURIN","3","BSN","","4");
INSERT INTO students VALUES("2015-00202","ALLEIN JENINE","MALANA","4","BSMT","","2");
INSERT INTO students VALUES("2015-00360","IMEE TRISHA","SALAZAR","4","BSN","","2");
INSERT INTO students VALUES("2015-01-009","Juan ","Dela Cruz","1","BSIT","","3");
INSERT INTO students VALUES("2016-00274","KRISHELAH DOMINIQUE","TESTADO","3","BSBA-FM","","2");
INSERT INTO students VALUES("2016-00303","DAVE JUSTINE","AGABIN","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2016-00499 ","LOUISE ANTHONY","BUGAYONG","1","BSIT","BSIT","1");
INSERT INTO students VALUES("2016-00816","MARY MAE","REANTILLO","1","BSIT","BSIT","4");
INSERT INTO students VALUES("2016-01165","CHRISTINE ","BANCUD","1","BSCE","ENGR","5");
INSERT INTO students VALUES("2017-01-009","Ben-Ben","Dela Cruz","2","BSBio-MicroBiology","","4");
INSERT INTO students VALUES("2017-01228","BIANCA","TUPAS","4","BSN","","4");
INSERT INTO students VALUES("2017-0132","Sample","Sample","1","BSEnSE","","4");
INSERT INTO students VALUES("2017-01346","JODESSAH MAE","BACUD","3","BSA","","4");
INSERT INTO students VALUES("2017-01384","JOHN PAULUS SERAFIN","GAZZINGAN","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2017-01758","FAYE VANESSA","GOROSPE","1","BSCpE","ENGR","4");
INSERT INTO students VALUES("2017-01941","Haydee Angeli","Sibal","3","BSPharma","ENGR","5");
INSERT INTO students VALUES("2018-01-1000","DARREN ANGELO","CALLUENG","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2018-01060","KRISTEL KAYLA ","TADAYA","2","BSED","","3");
INSERT INTO students VALUES("2018-01224","ANGHELIECA KHAYTE","TUMBAGA","2","BSPA","","3");
INSERT INTO students VALUES("2018-01330","DARLENE ","TOLETE","2","BSPsych","","3");
INSERT INTO students VALUES("2018-01362","CHRISTIAN DANIEL  ","TAMAYAO","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2018-01363","Ben-Ben","Tamayao","1","BSIT","","3");
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
INSERT INTO students VALUES("2019-01423","NATHALIE MAE ","ESCUCHARO","2","BSPA","","2");
INSERT INTO students VALUES("2019-01425","CRISTEL","MORGADO","3","BSTM","","2");
INSERT INTO students VALUES("2019-01490","BENJAMIN","MALSI","4","BSMT","","2");
INSERT INTO students VALUES("2019-01496","ANGELICA ","DELA CRUZ","4","BSMT","","2");
INSERT INTO students VALUES("2019-01560","RAILEY LAYNE","BATAC","4","BSMT","","2");
INSERT INTO students VALUES("2019-01795","JNMARK FRIEDRICH ","AGUSTIN","1","BSIT","BSIT","2");
INSERT INTO students VALUES("2019-0200017","QUEEN DOMINIQUE","CABIAO","2","BSPsych","","4");
INSERT INTO students VALUES("2019-0200027","HANNAH FRANCESCA ","HERICO","2","BSPsych","","4");
INSERT INTO students VALUES("2020-01-01005","Angeline","Julian","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2020-01-099","ROSHEL DAPHNE","DUMALAO","4","BSMT","","3");
INSERT INTO students VALUES("2020-01-152","JEROME YVAN","VENTURA","1","BSCpE","ENGR","3");
INSERT INTO students VALUES("2020-01-161","GRACIELLA ","GOYAGOY","3","BSTM","","3");
INSERT INTO students VALUES("2020-01-164","LILIAN ","TALLA","3","BSTM","","3");
INSERT INTO students VALUES("2020-010010","BIEGH JOHN PAUL","ALONZO","1","BSIT","BSIT","3");
INSERT INTO students VALUES("2020-010056","VINCE JAKOD","CEREZO","1","BSCpE","ENGR","3");
INSERT INTO students VALUES("2020-010118","SHANELLE KAYE","ARUCAN","2","BSPsych","","3");
INSERT INTO students VALUES("2020-010189","YOWELLE CHED","SEDANO","2","BSPA","","3");
INSERT INTO students VALUES("2020-010250","JOHN LESTER ","GAMATA","1","BSCpE","ENGR","3");
INSERT INTO students VALUES("2020-010341","CLARENCE ","REMUDARO","4","BSN","","3");
INSERT INTO students VALUES("2020-010434","MA. ANGELICA ","PEREZ","2","BSPA","","3");
INSERT INTO students VALUES("2020-010533","ALDWIN JAMES","POCOT","2","BSPA","","2");
INSERT INTO students VALUES("2020-01208","ZACH","BUGUNA","4","BSA","","1");
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
INSERT INTO students VALUES("207-01362","Christian","Dela Cruz","1","BSIT","BSIT","3");
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




#
# Delete any existing table `tbl_candidates`
#

DROP TABLE IF EXISTS `tbl_candidates`;


#
# Table structure of table `tbl_candidates`
#



CREATE TABLE `tbl_candidates` (
  `candidates_id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(150) NOT NULL,
  `student_id` varchar(65) NOT NULL,
  `dsn_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `requirements` varchar(200) NOT NULL,
  `eval_adviser` tinyint(1) NOT NULL,
  `eval_peers` tinyint(1) NOT NULL,
  `eval_self` tinyint(1) NOT NULL,
  PRIMARY KEY (`candidates_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_candidates VALUES("9","1687573750.png","2020-010189","1","2","comelec,picture,coc,recom,valid_id,cog,la","1","1","1");
INSERT INTO tbl_candidates VALUES("10","1687573772.png","2020-010434","1","3","comelec","1","1","1");
INSERT INTO tbl_candidates VALUES("11","1687573795.png","2019-01-020","1","4","comelec","0","0","0");
INSERT INTO tbl_candidates VALUES("12","1687573859.png","2020-010056","1","5","comelec","0","0","0");
INSERT INTO tbl_candidates VALUES("13","1687573890.png","G2019-01448","1","6","valid_id","0","0","0");
INSERT INTO tbl_candidates VALUES("14","1664724378.png","2021-02-1395","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("15","1664724395.png","2022-01-1366","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("16","1664724433.png","2019-0200027","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("17","1664724506.png","2019-01-441","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("18","1664724520.png","2020-010341","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("19","1664724532.png","2021-01-1781","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("20","1664724574.png","2021-01-1699","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("21","1664724641.png","2019-01490","1","6","","1","0","1");
INSERT INTO tbl_candidates VALUES("22","1664724688.png","2019-01303","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("23","1664724768.png","2021-01-1545","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("24","1664724787.png","2021-01-1520","1","6","","0","0","0");
INSERT INTO tbl_candidates VALUES("25","1664724803.png","2013-00100","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("26","1664724823.png","2017-01228","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("27","1664724854.png","2006-0116952","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("28","1664724873.png","2019-0200017","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("29","1664724913.png","2022-01-1540","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("30","1664753057.png","2020-010250","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("31","1664725115.png","2020-01208","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("32","1664725146.png","2021-01-1546","1","7","","0","0","0");
INSERT INTO tbl_candidates VALUES("33","1664725399.png","2020-010010","2","8","","1","1","1");
INSERT INTO tbl_candidates VALUES("34","1664728730.png","2019-01038","2","9","","1","1","1");
INSERT INTO tbl_candidates VALUES("35","1664754160.png","2022-01-0349","2","10","","1","1","1");
INSERT INTO tbl_candidates VALUES("36","1664753581.png","2021-01-1354","2","11","","0","0","0");
INSERT INTO tbl_candidates VALUES("37","1687612871.png","2018-01362","2","12","comelec,picture,coc,recom","0","0","0");
INSERT INTO tbl_candidates VALUES("38","1664754283.png","2019-01-524","2","13","","0","0","0");
INSERT INTO tbl_candidates VALUES("39","1664727302.png","2016-00816","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("40","1664727348.png","2020-01-152","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("41","1664727455.png","2021-01-1456","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("42","1664754299.png","2017-01384","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("43","1664754383.png","2019-01012","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("44","1664753539.png","2021-01-1932","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("45","1664727742.jpeg","2022-01-0046","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("46","1664755126.png","2018-01-1000","2","14","","0","0","0");
INSERT INTO tbl_candidates VALUES("47","1664754331.png","G2012-00185","2","16","","0","0","0");
INSERT INTO tbl_candidates VALUES("48","1664754204.png","2016-00499","2","15","","0","0","0");
INSERT INTO tbl_candidates VALUES("49","1664727946.png","2021-01-1571","2","18","","0","0","0");
INSERT INTO tbl_candidates VALUES("50","1664728004.png","2019-01795","2","17","","0","0","0");
INSERT INTO tbl_candidates VALUES("51","1664728051.png","2018-01922","2","20","","0","0","0");
INSERT INTO tbl_candidates VALUES("52","1664754553.png","2016-00303","2","19","","0","0","0");
INSERT INTO tbl_candidates VALUES("53","1664753934.png","2017-01758","2","22","","0","0","0");
INSERT INTO tbl_candidates VALUES("54","1664771223.png","2019-01-470","2","21","","0","0","0");
INSERT INTO tbl_candidates VALUES("55","1664753974.png","2016-01165","2","23","","0","0","0");
INSERT INTO tbl_candidates VALUES("56","1664729052.png","2018-01997","3","24","","1","1","1");
INSERT INTO tbl_candidates VALUES("57","1664729087.png","2018-01731","3","25","","0","0","0");
INSERT INTO tbl_candidates VALUES("58","1664729233.png","2020-02-0004","3","26","","0","0","0");
INSERT INTO tbl_candidates VALUES("59","1664777626.png","2018-01224","3","27","","0","0","0");
INSERT INTO tbl_candidates VALUES("60","1664729352.png","2018-01893","3","28","","0","0","0");
INSERT INTO tbl_candidates VALUES("61","1664729403.png","2020-010118","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("62","1664729501.png","2018-01330","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("63","1664729524.png","2019-01-811","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("64","1664729643.png","2020-010533","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("65","1664729658.png","2018-01798","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("66","1664777703.png","G2015-00333","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("67","1664777761.png","2022-01-1384","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("68","1664729981.png","2022-01-1357","3","29","","0","0","0");
INSERT INTO tbl_candidates VALUES("69","1664777789.png","G2020-01005","3","30","","0","0","0");
INSERT INTO tbl_candidates VALUES("70","1664777810.png","2019-01423","3","31","","0","0","0");
INSERT INTO tbl_candidates VALUES("71","1664730245.png","2018-01060","3","32","","0","0","0");
INSERT INTO tbl_candidates VALUES("72","1664777836.png","G2017-01686","3","33","","0","0","0");
INSERT INTO tbl_candidates VALUES("73","1664730562.png","2019-01-1203","4","34","","0","0","0");
INSERT INTO tbl_candidates VALUES("74","1664730577.png","2018-01743","4","35","","0","0","0");
INSERT INTO tbl_candidates VALUES("75","1664730620.png","2019-01-398","4","36","","0","0","0");
INSERT INTO tbl_candidates VALUES("76","1664798393.png","2019-01-855","4","37","","0","0","0");
INSERT INTO tbl_candidates VALUES("77","1664730797.png","2020-01-099","4","38","","0","0","0");
INSERT INTO tbl_candidates VALUES("78","1664730827.png","2015-00360","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("79","1664730852.png","2022-01-1073","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("80","1664730899.png","2015-00202","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("81","1664730941.png","G2015-00266","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("82","1664731205.jpg","G2019-01556","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("83","1664731242.png","2020-02-0013","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("84","1664731275.png","2005-00007","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("85","1664731298.png","2019-01496","4","39","","0","0","0");
INSERT INTO tbl_candidates VALUES("86","1664731367.JPG","2022-01-0031","4","40","","0","0","0");
INSERT INTO tbl_candidates VALUES("87","1664731427.png","2019-01560","4","41","","0","0","0");
INSERT INTO tbl_candidates VALUES("88","1664731448.jpg","2018-02034","4","42","","0","0","0");
INSERT INTO tbl_candidates VALUES("89","1664754857.png","2017-01346","5","44","","0","0","0");
INSERT INTO tbl_candidates VALUES("90","1664732202.png","2020-01-161","5","45","","0","0","0");
INSERT INTO tbl_candidates VALUES("91","1664732236.png","2020-01-164","5","46","","0","0","0");
INSERT INTO tbl_candidates VALUES("92","1664798430.png","2007-126442","5","47","","0","0","0");
INSERT INTO tbl_candidates VALUES("93","1664732363.png","2018-01831","5","48","","0","0","0");
INSERT INTO tbl_candidates VALUES("94","1664732416.png","G2015-00217","5","49","","0","0","0");
INSERT INTO tbl_candidates VALUES("95","1664732450.png","2016-00274","5","49","","0","0","0");
INSERT INTO tbl_candidates VALUES("96","1664732470.png","2019-01425","5","49","","0","0","0");
INSERT INTO tbl_candidates VALUES("97","1664732520.png","G2020-01396","5","49","","0","0","0");
INSERT INTO tbl_candidates VALUES("98","1664732638.png","2018-01498","5","52","","0","0","0");
INSERT INTO tbl_candidates VALUES("101","1686718485.","2020-01-01005","1","3","","0","0","0");
INSERT INTO tbl_candidates VALUES("102","1687195015.png","2017-01-0362","4","37","comelec,picture,coc,recom,interview,valid_id,cogm,cog,la","0","0","0");
INSERT INTO tbl_candidates VALUES("103","1664724068.png","2019-01-472","1","1","","0","0","0");



#
# Delete any existing table `tbl_criteria`
#

DROP TABLE IF EXISTS `tbl_criteria`;


#
# Table structure of table `tbl_criteria`
#



CREATE TABLE `tbl_criteria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `strand` text NOT NULL,
  `name` text NOT NULL,
  `domain_id` int(30) NOT NULL,
  `eval_form_id` int(11) NOT NULL,
  `order_by` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_criteria VALUES("1","Strand 1.","The Paulinian Leader submits himself/herself to professional growth and development.","1","1","");
INSERT INTO tbl_criteria VALUES("2","Strand 2.","The Paulinian Leader is quality result-oriented","1","1","");
INSERT INTO tbl_criteria VALUES("3","Strand 2."," The Paulinian Leader actively participates in the activities of the organization and university.","2","1","");
INSERT INTO tbl_criteria VALUES("4","Strand 1.","The Paulinian Leader serves the organization, its members, and the university.","2","1","");
INSERT INTO tbl_criteria VALUES("5","Strand 3.","The Paulinian Leader shows utmost commitment by participating in related activities","2","1","");
INSERT INTO tbl_criteria VALUES("6","Strand 1. ","The Paulinian Leader is a model of grooming and proper decorum","3","1","");
INSERT INTO tbl_criteria VALUES("7","Strand 2. ","The Paulinian Leader complies with the Environmental Stewardship of the university","3","1","");
INSERT INTO tbl_criteria VALUES("8","Strand 1.","The Paulinian Leader serves the organization, its members, and the university","2","2","");
INSERT INTO tbl_criteria VALUES("9","Strand 2.","The Paulinian Leader activity participants in the activities of the organization and university","2","2","");
INSERT INTO tbl_criteria VALUES("10","Strand 3."," The Paulinian Leader shows utmost commitment by participating in related activities.","2","2","");
INSERT INTO tbl_criteria VALUES("11","Strand 1.","The Paulinian Leader is a model of grooming and proper decorum.","3","2","");
INSERT INTO tbl_criteria VALUES("12","Strand 2.","The Paulinian Leader complies with the Environmental Sterwardship of the University.","3","2","");
INSERT INTO tbl_criteria VALUES("13","Strand 1.","The Paulinian Leader serves the organization, its members, and the university","2","3","");
INSERT INTO tbl_criteria VALUES("14","Strand 2.","The Paulinian Leader activity participates in the activities of the organization and university.","2","3","");
INSERT INTO tbl_criteria VALUES("15","Strand 1.","The Paulinian Leader is a model of grooming and proper decorum","3","3","");
INSERT INTO tbl_criteria VALUES("16","Strand 2.","The Paulinian Leader complies with the Environmental Sterwardship of the University.","3","3","");



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
  `criteria_id` int(30) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_question VALUES("1","1","1.1 The Paulinian Leader organizes/co-organizes and/or serves as resource speaker in seminars and activities for the organization.");
INSERT INTO tbl_question VALUES("2","1","1.2 The Paulinian Leader facilitates/co-facilitates seminars and activities for the organization");
INSERT INTO tbl_question VALUES("3","1","1.3 The Paulinian Leader participate seminars and activities for the organization");
INSERT INTO tbl_question VALUES("4","1","1.4 The Paulinian Leader attends to SPUP. organized seminars and activities related to the organization.");
INSERT INTO tbl_question VALUES("5","2","2.2 The Paulinian Leader ensures quality in all tasks/assignment given.");
INSERT INTO tbl_question VALUES("6","4","<p>1.1 The Paulinian Leader:
</p><p>
a. performs related task outside the given assignment;
</p><p>
b. initiates actions to solve issues among students and those that concern the organization/university;and
</p><p>
c. participants in the aftercare during activities</p>");
INSERT INTO tbl_question VALUES("7","3","2.1 The Paulinian Leader shares in the organization's management and evaluation of the organization. activities for the organization.");
INSERT INTO tbl_question VALUES("8","3","2.2 The Paulinian Leader shares in the organization, management, evaluation of project/activities of the university.");
INSERT INTO tbl_question VALUES("9","5","3.1 The Paulinian Leader attends regular meetings.");
INSERT INTO tbl_question VALUES("10","5","3.2 The Paulinian Leader attends special/emergency meetings.");
INSERT INTO tbl_question VALUES("11","6","<p>1.1 The Paulinian Leader:
</p><p>
a. wear the correct uniform with its prescribed accessories (shoes, ID strap, undergarment, and bag);
</p><p>
b. wear ID at all times while on campus.</p><p>

c. observes Silence Policy on corridors/offices;</p><p>

d. shows courtesy to the spup community;</p><p>

e. shows warmth and respect to visitors and guest of the University;</p><p>

f. models prescribed haircut (male) or hairstyle and accessories (female); and</p><p>

g. exhibits punctuality during meeting and activities.</p>");
INSERT INTO tbl_question VALUES("12","6","1.2 The Paulinian Leader submits reports regularly");
INSERT INTO tbl_question VALUES("13","7","2.1 The Paulinian Leader ensures cleanliness and orderliness of office/workplace.");
INSERT INTO tbl_question VALUES("14","8","1.1 The Paulinian Leader: a. performs related task outside the given assignment;

b. initiated actions to solve issues among students and those that concern the organization/university; and

c. participants in the aftercare during activities.");
INSERT INTO tbl_question VALUES("15","9","2.1 The Paulinian Leader shares in the organization's management and management and evaluation of the organization.");
INSERT INTO tbl_question VALUES("16","9","2.2 The Paulinian Leader shares in the organization's management and management and evaluation of project/activities of the organization.");
INSERT INTO tbl_question VALUES("17","17","3.1 The Paulinian Leader attends regular meeting.");
INSERT INTO tbl_question VALUES("18","17","3.2 The Paulinian Leader attends special/emergency meetings.");
INSERT INTO tbl_question VALUES("19","11","1.1 The Paulinian Leader:

a. wears the correct uniform with its prescribed (shoes, ID strap, undergarment, and bag)

b. wears ID at all times while on campus;

c. observes Silence Policy on corridors/offices;

d. shows courterys to the SPUP community;

e. shows warmth and respect to visitors and guests of the University;

f. models prescribed haircut (male) or hairstyle and accessories (female); and

g. exhibits punctuality during meeting and activities");
INSERT INTO tbl_question VALUES("20","11","1.2 The Paulinian Leader submits reports regulary.");
INSERT INTO tbl_question VALUES("21","12","2.1 The Paulinian Leader ensures cleanliness and orderliness of office/workplace");
INSERT INTO tbl_question VALUES("22","13","1.1 The Paulinian Leader:

a. performs related task outside the given assignment;

b. initiates actions to solve issues among students and those that concern the organization/univserty and;

c. participants in the aftercare during activities");
INSERT INTO tbl_question VALUES("23","14","2.1 The Paulinian Leader shares in the organizations management and management and evaluation of the organization");
INSERT INTO tbl_question VALUES("24","14","2.2 The Paulinian Leader shares in the organizations management and management and evaluation of the organization.");
INSERT INTO tbl_question VALUES("25","15","1.1 The Paulinian Leader:

a. wears the correct uniform with its prescribed

(shoes, ID strap, undergarment, and bag)

b. wears ID at all times while on campus;

c. observes Silence Policy on corridors/offices;

d. shows courterys to the SPUP community;

e. shows warmth and respect to visitors and guests of the University;

f. models prescribed haircut (male) or hairstyle and accessories (female); and

g. exhibits punctuality during meeting and activities");
INSERT INTO tbl_question VALUES("26","15","1.2 The Paulinian Leader submits reports regulary.");
INSERT INTO tbl_question VALUES("27","16","2.1 The Paulinian Leader ensures cleanliness and orderliness of office/workplace");



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
# Delete any existing table `tbl_rating`
#

DROP TABLE IF EXISTS `tbl_rating`;


#
# Table structure of table `tbl_rating`
#



CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `rate` int(30) NOT NULL,
  `question_id` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_rating VALUES("1","Has organized/co-organized more than two seminars/activities","3","1");
INSERT INTO tbl_rating VALUES("2","Has organized/co-organized two seminars/activities","2","1");
INSERT INTO tbl_rating VALUES("3","Has organized/co-organized one seminars/activities.","1","1");
INSERT INTO tbl_rating VALUES("4"," Has not organized/co-organized  seminars/activities.","0","1");
INSERT INTO tbl_rating VALUES("5","Has facilitated/co-facilitated more than two seminars/activities.","3","2");
INSERT INTO tbl_rating VALUES("6"," Has facilitated/co-facilitated  two seminars/activities.","2","2");
INSERT INTO tbl_rating VALUES("7"," Has facilitated/co-facilitated one seminars/activities.","1","2");
INSERT INTO tbl_rating VALUES("8"," Has not facilitated/co-facilitated seminars/activities.","0","2");
INSERT INTO tbl_rating VALUES("9"," Has participated more than four seminars/activities.","3","3");
INSERT INTO tbl_rating VALUES("10","Has participated in three to four seminars/activities.","2","3");
INSERT INTO tbl_rating VALUES("11","Has participated in one to two seminars/activities.","1","3");
INSERT INTO tbl_rating VALUES("12"," Has not participated in any seminars/activities.","0","3");
INSERT INTO tbl_rating VALUES("13","Has attended to more than four seminars/activities.","3","4");
INSERT INTO tbl_rating VALUES("14","  Has attended to three to four seminars/activities.","2","4");
INSERT INTO tbl_rating VALUES("15"," Has attended to one to two seminars/activities.","1","4");
INSERT INTO tbl_rating VALUES("16"," Has not attended to any seminars/activities.","0","4");
INSERT INTO tbl_rating VALUES("17"," Performs outstanding/excellent on the task/assignments","3","5");
INSERT INTO tbl_rating VALUES("18"," Performs very satisfactory on the task/assignments","2","5");
INSERT INTO tbl_rating VALUES("19","Performs satisfactory on the task/assignments","1","5");
INSERT INTO tbl_rating VALUES("20"," Performs but needs improvement on the task/assignments","0","5");
INSERT INTO tbl_rating VALUES("21","All three indicators are met.","3","6");
INSERT INTO tbl_rating VALUES("22","Only two of the given indicators are met.","2","6");
INSERT INTO tbl_rating VALUES("23","Only one of the given indicators is met.","1","6");
INSERT INTO tbl_rating VALUES("24","None of the indicators is met.","0","6");
INSERT INTO tbl_rating VALUES("25","Has participated in three or more varied organizational activities.","3","7");
INSERT INTO tbl_rating VALUES("26","Has participated in two varied organizational activities.","2","7");
INSERT INTO tbl_rating VALUES("27","Has participated in only one organizational activity.","1","7");
INSERT INTO tbl_rating VALUES("28","Has not participated in any organizational activity.","0","7");
INSERT INTO tbl_rating VALUES("29","Has participated in three or more varied university activities","3","8");
INSERT INTO tbl_rating VALUES("30","Has participated in two varied university activities","2","8");
INSERT INTO tbl_rating VALUES("31","Has participated in only one university activity","1","8");
INSERT INTO tbl_rating VALUES("32","Has not participated in any university activity projects/activities of the university.","0","8");
INSERT INTO tbl_rating VALUES("33","Has attended 100% of regular meeting","3","9");
INSERT INTO tbl_rating VALUES("34","Has attended 90%-99% of regular meeting","2","9");
INSERT INTO tbl_rating VALUES("35","Has attended 80%-89% of regular meeting","1","9");
INSERT INTO tbl_rating VALUES("36","Has attended less 79% of regular meetings","0","9");
INSERT INTO tbl_rating VALUES("37","Has attended 90%-100% of all the meeting called","3","10");
INSERT INTO tbl_rating VALUES("38","Has attended 80%-89% of all the meeting called","2","10");
INSERT INTO tbl_rating VALUES("39","Has attended 70%-79% of all the meeting called	 ","1","10");
INSERT INTO tbl_rating VALUES("40","Has attended less than 70% of all the meeting called","0","10");
INSERT INTO tbl_rating VALUES("41","All seven indicators are met.","3","11");
INSERT INTO tbl_rating VALUES("42","All first three indicators and any two of the remaining indicators are met.","2","11");
INSERT INTO tbl_rating VALUES("43","Only the first three indicators are met","1","11");
INSERT INTO tbl_rating VALUES("44","Any of the indicators are not met","0","11");
INSERT INTO tbl_rating VALUES("45","Complete and before deadline","3","12");
INSERT INTO tbl_rating VALUES("46","Complete and on the deadline","2","12");
INSERT INTO tbl_rating VALUES("47","Complete but after deadline/incomplete but on the deadline.","1","12");
INSERT INTO tbl_rating VALUES("48","Incomplete and after the deadline/have not submitted any reports.","0","12");
INSERT INTO tbl_rating VALUES("49","Clean beyond schedule and without being told.","3","13");
INSERT INTO tbl_rating VALUES("50","Clean only on schedule upon a command.","2","13");
INSERT INTO tbl_rating VALUES("51","Joins cleaning but comes in late","1","13");
INSERT INTO tbl_rating VALUES("52","Never cleans at all","0","13");



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
  `dept_id` int(30) DEFAULT NULL,
  `dsn_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO tbl_users VALUES("1","2018-01362","Christian Daniel T.","Tamayao","5","0","0","7cc05fb062cbb39a7878c3a3f36bb4b6dd465636","Admin");
INSERT INTO tbl_users VALUES("2","2016-00303","Dave Justine","Agabin","1","0","0","f2942ac7f4652f1bd196a6f48d332977991abfd7","Schoolwide Adviser");
INSERT INTO tbl_users VALUES("3","2020-010069","Angeline","Julian","2","0","0","c273ea3643ddd3d850b9b132338da2fb54d5c0db","Schoolwide Adviser");
INSERT INTO tbl_users VALUES("4","2006-0116952","Angela Grace","Garcia","4","0","0","7cc05fb062cbb39a7878c3a3f36bb4b6dd465636","Schoolwide Adviser");
INSERT INTO tbl_users VALUES("5","2020-010010","BIEGH JOHN PAUL","ALONZO","1","2","8","a4a45812d0511be4a57fe225cc684f589d86170c","Officer");
INSERT INTO tbl_users VALUES("6","2018-01997","JEVY MARK","DUPAY","2","3","24","a4a45812d0511be4a57fe225cc684f589d86170c","Officer");
INSERT INTO tbl_users VALUES("7","2022-01-0349","CRISTINA","TUAZON ","1","0","0","a4a45812d0511be4a57fe225cc684f589d86170c","User");
INSERT INTO tbl_users VALUES("8","2017-01-009","Ben-Ben","Dela Cruz","2","3","0","a4a45812d0511be4a57fe225cc684f589d86170c","User");
INSERT INTO tbl_users VALUES("9","2019-01038","PRINCESS JASTINE MAE","REÑA","1","2","9","a4a45812d0511be4a57fe225cc684f589d86170c","User");



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

INSERT INTO tbleval_form VALUES("1","SAASS-PSG 08","Adviser");
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


