-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 06:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coework`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_index` int(11) NOT NULL,
  `degree` varchar(50) CHARACTER SET utf8 NOT NULL,
  `course_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `course_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `course_weight` int(10) NOT NULL,
  `lec_lab` varchar(11) CHARACTER SET utf8 NOT NULL,
  `course_cond` varchar(50) CHARACTER SET utf8 NOT NULL,
  `course_option` varchar(50) CHARACTER SET utf8 NOT NULL,
  `semester` int(10) NOT NULL,
  `year_type` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_index`, `degree`, `course_id`, `course_name`, `course_weight`, `lec_lab`, `course_cond`, `course_option`, `semester`, `year_type`) VALUES
(4, 'bachelor', 'EN811300', 'Fund of Comp Program', 3, 'lec', '-', '-', 1, '1'),
(6, 'bachelor', 'EN812000', 'Discrete Math', 3, 'lec', 'Cal1', '-', 1, '2'),
(7, 'bachelor', 'EN813001', 'Stoc Pro & Model', 3, 'lec', 'Dis Math', '-', 1, '3'),
(8, 'bachelor', 'EN814998', 'Pre-Project', 1, 'lec', '-', '-', 1, '4'),
(9, 'bachelor', 'EN813701', 'Web Application', 3, 'lec', 'Ad. Com', 'V.2, 3-4', 1, '0'),
(13, 'bachelor', 'EN811100', 'Linear Circuit Analysis', 3, 'lec', 'Physic 2', '-', 2, '1'),
(14, 'bachelor', 'EN812102', 'Circuits Signal', 3, 'lec', 'Linear', '-', 2, '2'),
(15, 'bachelor', 'EN813002', 'Theory of Compu', 3, 'lec', 'Fund com', 'V.2', 2, '3'),
(16, 'master', 'EN827891  ', 'Seminar I', 1, 'lec', '-', '-', 1, '5'),
(17, 'bachelor', 'EN812101', 'Analog Lab.', 1, 'lab', '-', '10 ครั้ง', 1, '2'),
(20, 'bachelor', 'EN812000', ' DISCRETE MATHEMATICS AND LINEAR ALGEBRA', 3, 'lec', '-', '-', 1, '2'),
(25, 'bachelor', ' EN812303', ' DATA STRUCTURES AND ALGORITHMS', 3, 'lec', '-', '-', 1, '2'),
(26, 'bachelor', ' EN812900', 'COMPUTER ENGINEERING WORKSHOP PRACTICE', 1, 'lab', '-', '-', 1, '2'),
(27, '', 'EN813001', 'STOCHASTIC PROCESSES AND MODELING', 3, 'lec', '-', '-', 1, '3'),
(28, 'bachelor', ' EN812101 ', ' ANALOGUE ELECTRONICS LABORATORY', 1, 'lab', '-', '-', 1, '2'),
(30, 'bachelor', ' EN813202 ', ' MICROPROCESSORS AND INTERFACING', 3, 'lec', '-', '-', 1, '3'),
(31, 'bachelor', ' EN813203 ', 'MICROPROCESSORS AND INTERFACING LABORATORY', 1, 'lab', '-', '-', 1, '3'),
(32, 'bachelor', 'EN813204', 'COMPUTER ARCHITECTURE', 3, 'lec', '-', '-', 1, '3'),
(33, 'bachelor', ' EN813304 ', 'DATABASE SYSTEMS', 3, 'lec', '-', '-', 1, '3'),
(34, 'bachelor', ' EN813400 ', ' COMPUTER NETWORKS', 3, 'lec', '-', '-', 1, '3'),
(35, 'bachelor', ' EN813401 ', ' COMPUTER NETWORKS LABORATORY', 1, 'lab', '-', '-', 1, '3'),
(36, 'bachelor', ' EN813501', ' DIGITAL IMAGE PROCESSING', 3, 'lec', '-', '-', 1, '3'),
(37, '', ' EN813701 ', ' WEB APPLICATION DEVELOPMENT', 0, 'lec', '-', '-', 1, '3'),
(38, 'bachelor', ' EN813761', ' SEMINAR IN COMPUTER ENGINEERING', 1, 'lab', '-', '-', 1, '3'),
(39, '', ' EN814505', 'CRYPTOGRAPHY', 3, 'lec', '-', '-', 1, '4'),
(40, 'bachelor', 'EN814506 ', 'QUANTUM COMPUTATION', 3, 'lec', '-', '-', 1, '4'),
(41, 'bachelor', 'EN814507', 'FINANCIAL ENGINEERING AND COMPUTATION', 3, 'lec', '-', '-', 1, '4'),
(42, 'bachelor', 'EN814608 ', ' ADVANCED MICROCONTROLLERS', 3, 'lec', '-', '-', 1, '4'),
(43, 'bachelor', ' EN814802 ', ' COMPUTER SECURITY', 3, 'lec', '-', '-', 1, '4'),
(44, 'bachelor', 'EN814804 ', ' WIRELESS PERSONAL AREA NETWORKS', 3, 'lec', '-', '-', 1, '4'),
(45, 'bachelor', 'EN814998', ' COMPUTER ENGINEERING PRE-PROJECT', 1, 'lab', '-', '-', 1, '4'),
(46, 'bachelor', 'EN811301', ' ADVANCED COMPUTER PROGRAMMING', 3, '', '-', '-', 2, '1'),
(47, 'bachelor', ' EN811302', ' ADVANCED COMPUTER PROGRAMMING LABORATORY', 1, 'lab', '-', '-', 2, '1'),
(48, 'bachelor', 'EN812200 ', ' DIGITAL LOGIC DESIGN', 3, '', '-', '-', 2, '2'),
(49, 'bachelor', 'EN812201 ', ' DIGITAL LOGIC DESIGN LABORATORY', 1, 'lab', '-', '-', 2, '2'),
(50, 'bachelor', ' EN812700 ', ' ASSEMBLY PROGRAMMING', 3, 'lec', '-', '-', 2, '4'),
(51, 'bachelor', 'EN813002 ', 'THEORY OF COMPUTATION', 3, 'lec', '-', '-', 2, ''),
(52, 'bachelor', 'EN813305 ', ' OPERATING SYSTEMS', 3, 'lec', '-', '-', 2, '3'),
(53, 'bachelor', ' EN813306 ', 'SOFTWARE ENGINEERING	', 3, 'lec', '-', '-', 2, '3'),
(54, 'bachelor', 'EN813402 ', ' PRINCIPLES OF DIGITAL COMMUNICATION AND MODELING', 3, 'lec', '-', '-', 2, '3'),
(55, 'bachelor', 'EN813403', 'PRINCIPLES OF DIGITAL COMMUNICATIONS AND MODELING ', 1, 'lab', '-', '-', 2, '3'),
(56, 'bachelor', ' EN813500', 'MACHINE LEARNING	 ', 3, 'lec', '-', '-', 2, '3'),
(57, 'bachelor', ' EN813502 ', 'COMPUTER ANIMATION', 3, 'lec', '-', '-', 2, '3'),
(58, 'bachelor', 'EN813605 	', ' NANOELECTRONICS FOR COMPUTER ENGINEERS', 3, 'lec', '-', '-', 2, '4'),
(59, 'bachelor', 'EN813702 ', 'MOBILE APPLICATION DEVELOPMENT', 3, 'lec', '-', '-', 2, '3'),
(60, 'bachelor', 'EN813703 ', 'MULTI-CORE AND GPU PROGRAMMING	 ', 3, 'lec', '-', '-', 2, '2'),
(61, 'bachelor', ' EN813704 ', ' VIDEO GAME DESIGN', 3, 'lec', '-', '-', 2, '4'),
(62, 'bachelor', 'EN813800 ', 'COMPUTER NETWORK DESIGN AND CONFIGURATION', 3, 'lec', '-', '-', 2, '4'),
(63, 'bachelor', 'EN814508 ', 'COMPUTATIONAL FINANCE	', 3, 'lec', '-', '-', 2, '4'),
(64, 'bachelor', ' EN814607 ', 'MICROCONTROLLERS', 3, 'lec', '-', '-', 2, '3'),
(65, 'bachelor', ' EN814609', ' EMBEDDED SYSTEMS', 3, '', '-', '-', 2, '4'),
(66, 'bachelor', 'EN814707 	', 'HUMAN-COMPUTER INTERACTION', 3, 'lec', '-', '-', 2, '4'),
(67, 'bachelor', ' EN814708 ', ' DATA SCIENCE AND BIG DATA ANALYTICS', 3, '', '-', '-', 2, '4'),
(68, 'bachelor', 'EN814774 ', 'SPECIAL TOPICS IN COMPUTER SOFTWARE', 3, 'lec', '-', '-', 2, '4'),
(69, 'bachelor', ' EN814801 ', ' INTERNETWORKING', 3, 'lec', '-', '-', 2, '1'),
(70, 'bachelor', ' EN814805 ', ' MODERN COMPUTER NETWORKS', 3, 'lec', '-', '-', 2, '3'),
(71, 'bachelor', 'EN814806 ', 'CLOUD COMPUTING', 3, 'lec', '-', '-', 2, '4'),
(72, 'bachelor', 'EN814999 ', ' COMPUTER ENGINEERING PROJECT', 2, 'lab', '-', '-', 2, '4'),
(73, 'inter', 'EN841001', 'Introduction to Digital Media', 3, 'lec', '-', '-', 1, '1'),
(74, 'inter', 'EN841002', 'Art and Design Foundation', 3, 'lec', '-', '-', 2, '1'),
(75, 'inter', 'EN842003', 'Digital Electronics', 3, 'lec', '-', '-', 1, '2'),
(76, 'inter', 'EN842004', 'Object Oriented Programming', 3, 'lec', '-', '-', 1, '3'),
(77, 'inter', 'EN842005', 'Object Oriented Programming Laboratory', 1, 'lab', '-', '-', 1, '2'),
(78, 'inter', 'EN842006', 'Introduction to Data Structures', 3, 'lec', '-', '-', 1, '2'),
(79, 'inter', 'EN842007', 'Introduction to Discrete Mathematics', 3, '', 'cal1', '-', 1, '2'),
(80, 'inter', 'EN843008', 'Digital Media Processing', 3, 'lec', '-', '-', 1, '3'),
(81, 'inter', 'EN842100', 'Computer Graphics', 3, 'lec', '-', '-', 1, '2'),
(82, 'inter', 'EN842101', '3D Modeling and Animation', 3, 'lec', '-', '-', 2, '2'),
(83, 'inter', 'EN842300', 'Interactive Web Programming', 3, 'lec', '-', '-', 2, '2'),
(84, 'inter', 'EN843105', 'Computer-Generated Imagery', 3, 'lec', '-', '-', 1, '3'),
(85, 'inter', 'EN843106', 'Professional Skills Development', 1, 'lab', '-', '-', 1, '3'),
(86, 'inter', 'EN843200', 'Game Programming', 3, 'lec', '-', '-', 1, '3'),
(87, 'inter', 'EN843201', 'Game Design', 3, 'lec', '-', '-', 1, '3'),
(88, 'inter', 'EN843301', 'User Interface and User Experience Design', 3, '', '-', '-', 1, '3'),
(89, 'inter', 'EN843302', 'Project Management Body of Knowledge', 3, 'lec', '-', '-', 2, '3'),
(90, 'inter', 'EN843303', 'Multimedia Database', 3, 'lec', '-', '-', 2, '3'),
(91, 'inter', 'EN843304', 'Computer Networking and Internet Technology', 3, 'lec', '-', '-', 2, '3'),
(92, 'inter', 'EN844308', 'Interaction Design', 3, 'lec', '-', '-', 1, '4'),
(93, 'inter', 'EN844998', 'Digital Media Engineering Pre-Project', 1, 'lab', '-', '-', 1, '4'),
(94, 'inter', 'EN844999', 'Digital Media Engineering Project', 2, 'lab', '-', '-', 2, '4'),
(95, 'inter', 'EN843796', 'Practical Training', 1, 'lab', '-', '-', 3, '3'),
(96, 'inter', 'EN843 102', 'Parallel Programming', 3, 'lec', '-', '-', 0, '0'),
(97, 'inter', 'EN843103', 'Effective Presentation Technique', 3, 'lec', '-', '-', 0, '0'),
(98, 'inter', 'EN843104', 'Character Animation and Control', 3, 'lec', '-', '-', 0, '0'),
(99, 'inter', 'EN843 107', '3D Animation Pipeline', 3, 'lec', '-', '-', 0, '0'),
(100, 'inter', 'EN843 108', 'Shading, Lighting and Rendering', 3, 'lec', '-', '-', 0, '0'),
(101, 'inter', 'EN843 109', '3D modelling and Digital Sculpting', 3, 'lec', '-', '-', 0, '0'),
(102, 'inter', 'EN843 110', 'Character and Theme Design', 3, 'lec', '-', '-', 0, '0'),
(103, 'inter', 'EN843111', 'Visual Effects', 3, 'lec', '-', '-', 0, '0'),
(104, 'inter', 'EN843202', 'Advanced Game Programming', 3, 'lec', '-', '-', 0, '0'),
(105, 'inter', 'EN844113', 'Digital Compositing and Post-production', 3, 'lec', '-', '-', 0, '0'),
(106, 'inter', 'EN844114', 'Python Scripting for Animation', 3, 'lec', '-', '-', 0, '0'),
(107, 'inter', 'EN844 15', '3D Animation Pre-Production', 3, 'lec', '-', '-', 0, '0'),
(108, 'inter', 'EN844203', 'Artificial Intelligence', 3, 'lec', '-', '-', 0, '0'),
(109, 'inter', 'EN844205', 'Virtual Reality', 3, 'lec', '-', '-', 0, '0'),
(110, 'inter', 'EN844206', 'Sound Design for Game and Animation', 3, 'lec', '-', '-', 0, '0'),
(111, 'inter', 'EN844207', 'Dynamic Simulation', 3, 'lec', '-', '-', 0, '0'),
(112, 'inter', 'EN844208', 'Gamification', 3, 'lec', '-', '-', 0, '0'),
(113, 'inter', 'EN844209', 'Serious Game', 3, 'lec', '-', '-', 0, '0'),
(114, 'inter', 'EN844306', 'Information Architecture and Visualization', 3, 'lec', '-', '-', 0, '0'),
(115, 'inter', 'EN844307', 'Ubiquitous Computing', 3, 'lec', '-', '-', 0, '0'),
(116, 'inter', 'EN844 309', 'Computer network programming', 3, 'lec', '-', '-', 0, '0'),
(117, 'inter', 'EN844310', 'e-Learning', 3, 'lec', '-', '-', 0, '0'),
(118, 'inter', 'EN844311', 'Social Media', 3, 'lec', '-', '-', 0, '0'),
(119, 'inter', 'EN844312', 'Introduction to Software Engineering', 3, 'lec', '-', '-', 0, '0'),
(120, 'inter', 'EN844774', 'Special Topics in Digital Media Engineering', 3, 'lec', '-', '-', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `lec_id` int(11) NOT NULL,
  `lecture_name` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lec_id`, `lecture_name`) VALUES
(1, 'ดร.วาธิส'),
(2, 'ผศ.ดร.ภัทรวิทย์'),
(3, 'ผศ.ดร.จิระเดช'),
(4, 'รศ.วิโรจน์'),
(5, 'ผศ.ดร.ภาณุพงษ์'),
(6, 'ดร.กิตติ์'),
(7, 'รศ.ดร.กานดา'),
(8, 'รศ.ดร.วนิดา'),
(9, 'ดร.นวภัค'),
(10, 'ดร.วสุ'),
(11, 'ผศ.กิตติพิชญ์'),
(12, 'ผศ.อานุภาพ'),
(13, 'รศ.ชาญณรงค์'),
(14, 'ผศ.จุฬาภรณ์'),
(15, 'รศ.ดร.ธัชพงศ์'),
(16, 'ผศ.ดร.ดารณี'),
(17, 'ดร.ชวิศ'),
(18, 'ผศ.ดร.ชัชชัย'),
(19, 'ผศ.อนัตต์ '),
(20, 'รศ.พิเชษฐ'),
(21, 'ผศ.ดร.วิชชา');

-- --------------------------------------------------------

--
-- Table structure for table `lec_course`
--

CREATE TABLE `lec_course` (
  `lc_index` int(11) NOT NULL,
  `lec_id` int(255) NOT NULL,
  `course_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lec_course`
--

INSERT INTO `lec_course` (`lc_index`, `lec_id`, `course_id`) VALUES
(2, 2, 6),
(3, 3, 4),
(4, 2, 4),
(5, 7, 18),
(6, 5, 19),
(7, 7, 20);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(11) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`) VALUES
(1, 'EN04109'),
(2, 'EN04111'),
(3, 'EN04101'),
(4, 'CoE4312'),
(5, 'EN04216'),
(8, 'EN04411B'),
(9, 'EN04116'),
(10, 'EN04118'),
(11, 'EN04119'),
(12, 'EN0412A'),
(13, 'EN0412B'),
(14, 'EN04135B'),
(15, 'EN04201'),
(16, 'EN04203'),
(17, 'EN04210'),
(18, 'EN04214'),
(19, 'EN04225'),
(20, 'EN04270'),
(21, 'EN04301'),
(22, 'EN04303'),
(23, 'EN04309'),
(24, 'EN04310'),
(25, 'EN04312'),
(26, 'EN04312A'),
(27, 'EN04312B'),
(28, 'EN04321C'),
(29, 'EN04401'),
(30, 'EN04410'),
(31, 'EN04411'),
(32, 'EN04411B'),
(33, 'EN04412'),
(34, 'EN04416'),
(35, 'EN04424'),
(36, 'EN04502'),
(37, 'EN04510'),
(38, 'EN04511'),
(39, 'EN04512'),
(40, 'EN04521');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetable_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `lec_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `day` varchar(10) CHARACTER SET utf8 NOT NULL,
  `start_hour` int(11) NOT NULL,
  `start_min` int(11) NOT NULL,
  `end_hour` int(11) NOT NULL,
  `end_min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetable_id`, `room_id`, `course_id`, `lec_id`, `semester`, `day`, `start_hour`, `start_min`, `end_hour`, `end_min`) VALUES
(14, 5, 19, 3, 2, 'Sat', 10, 0, 12, 0),
(15, 8, 21, 7, 3, 'Mon', 9, 0, 14, 0),
(16, 8, 22, 21, 1, 'Tue', 10, 0, 13, 0),
(17, 8, 23, 19, 2, 'Tue', 11, 19, 14, 19),
(18, 8, 22, 21, 2, 'Fri', 11, 1, 13, 0),
(19, 32, 6, 18, 2, 'Mon', 9, 0, 10, 0),
(20, 32, 4, 21, 1, 'Mon', 9, 0, 10, 0),
(21, 32, 8, 5, 2, 'Tue', 11, 10, 15, 10),
(22, 8, 16, 13, 2, 'Wed', 10, 6, 14, 13),
(23, 8, 9, 7, 2, 'Mon', 10, 0, 12, 0),
(24, 8, 6, 15, 1, 'Tue', 13, 0, 16, 0),
(25, 8, 7, 6, 1, 'Mon', 9, 0, 12, 0),
(26, 8, 18, 17, 1, 'Wed', 10, 0, 12, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_index`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`lec_id`);

--
-- Indexes for table `lec_course`
--
ALTER TABLE `lec_course`
  ADD PRIMARY KEY (`lc_index`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `lec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lec_course`
--
ALTER TABLE `lec_course`
  MODIFY `lc_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
