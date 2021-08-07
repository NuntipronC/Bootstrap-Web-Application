-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 01:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `insert_database`
--

CREATE TABLE `insert_database` (
  `semester` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayear` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Out_Student_ID` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Student_ID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `study_in_school` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Program_of` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Mobile` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GPAX` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Student_Status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Probation_no_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credits` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `semester1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ayear2` int(11) DEFAULT NULL,
  `Course_code1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Course_title1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Section1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Examination1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Final1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Course_code2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Course_title2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Section2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Examination2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Final2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Advisor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Dean` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insert_database`
--

INSERT INTO `insert_database` (`semester`, `ayear`, `Out_Student_ID`, `Mname`, `Fname`, `Lname`, `Student_ID`, `study_in_school`, `Program_of`, `Mobile`, `GPAX`, `Student_Status`, `Probation_no_value`, `credits`, `semester1`, `ayear2`, `Course_code1`, `Course_title1`, `Section1`, `Examination1`, `Final1`, `Course_code2`, `Course_title2`, `Section2`, `Examination2`, `Final2`, `Advisor`, `Dean`) VALUES
(NULL, NULL, NULL, 'MR.', 'McKenzie', 'Davis', '58010021', 'School of Information Technology', 'Computer Engineering', NULL, '2.80', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  Monroe', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Bailey', 'Carter', '58010113', 'School of Information Technology', 'Computer Engineering', NULL, '3.00', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lincoln  Kingsley', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Brady', 'Brady', '58010339', 'School of Information Technology', 'Computer Engineering', NULL, '1.76', 'Probation1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lane  Lewis', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Cooper', 'Parker', '58010459', 'School of Information Technology', 'Computer Engineering', NULL, '3.57', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Parker  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Ellis', 'Carter', '58010518', 'School of Information Technology', 'Computer Engineering', NULL, '2.60', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  McKenzie', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Finley', 'Fallon', '58010585', 'School of Information Technology', 'Computer Engineering', NULL, '3.06', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'McKenzie  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Lincoln', 'Smith', '58010766', 'School of Information Technology', 'Computer Engineering', NULL, '2.83', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griffin  Addison', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Lennon', 'Carter', '58010796', 'School of Information Technology', 'Computer Engineering', NULL, '2.56', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nixon  Cassidy', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Lennox', 'Anderson', '58010820', 'School of Information Technology', 'Computer Engineering', NULL, '0.96', 'Probation2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  Monroe', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Jagger', 'Campbell', '58010938', 'School of Information Technology', 'Computer Engineering', NULL, '2.79', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lincoln  Kingsley', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Quinn', 'Addison', '58100057', 'School of Information Technology', 'Computer Engineering', NULL, '2.41', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lane  Lewis', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Reagan', 'Sullivan', '58100284', 'School of Information Technology', 'Computer Engineering', NULL, '3.38', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Parker  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Taylor', 'Lane', '58100290', 'School of Information Technology', 'Computer Engineering', NULL, '3.05', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  McKenzie', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Tyler', 'Jackson', '58110050', 'School of Information Technology', 'Computer Engineering', NULL, '3.09', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'McKenzie  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Sawyer', 'Nash', '58110063', 'School of Information Technology', 'Computer Engineering', NULL, '3.59', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griffin  Addison', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Anderson', 'Jagger', '58110611', 'School of Information Technology', 'Computer Engineering', NULL, '3.28', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'McKenzie  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Beckett', 'Miller', '58110791', 'School of Information Technology', 'Computer Engineering', NULL, '1.14', 'Probation2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griffin  Addison', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Campbell', 'Taylor', '58110869', 'School of Information Technology', 'Computer Engineering', NULL, '2.79', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nixon  Cassidy', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Cash', 'Davis', '58110953', 'School of Information Technology', 'Computer Engineering', NULL, '2.94', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  Monroe', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Carson', 'Greyson', '58200447', 'School of Information Technology', 'Computer Engineering', NULL, '3.44', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lincoln  Kingsley', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Sullivan', 'West', '58300002', 'School of Information Technology', 'Computer Engineering', NULL, '2.55', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'McKenzie  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'West', 'West', '58300003', 'School of Information Technology', 'Computer Engineering', NULL, '3.00', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griffin  Addison', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Vaugh', 'Hudson', '58300004', 'School of Information Technology', 'Computer Engineering', NULL, '2.93', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nixon  Cassidy', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Addison', 'McKenzie', '58300005', 'School of Information Technology', 'Computer Engineering', NULL, '2.64', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  Monroe', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Cassidy', 'Brady', '58300011', 'School of Information Technology', 'Computer Engineering', NULL, '2.39', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lincoln  Kingsley', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Delaney', 'Greyson', '58300012', 'School of Information Technology', 'Computer Engineering', NULL, '3.30', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lane  Lewis', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Fallon', 'Addison', '58300013', 'School of Information Technology', 'Computer Engineering', NULL, '3.87', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Parker  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Harlow', 'Lennox', '58300015', 'School of Information Technology', 'Computer Engineering', NULL, '2.60', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  McKenzie', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Lane', 'Nixon', '58300016', 'School of Information Technology', 'Computer Engineering', NULL, '3.52', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'McKenzie  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Kennedy', 'Addison', '58300021', 'School of Information Technology', 'Computer Engineering', NULL, '1.88', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griffin  Addison', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Monroe', 'Anderson', '58300022', 'School of Information Technology', 'Computer Engineering', NULL, '2.32', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nixon  Cassidy', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Cohen', 'Cohen', '58400075', 'School of Information Technology', 'Computer Engineering', NULL, '3.09', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lane  Lewis', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Carter', 'Harrison', '58400272', 'School of Information Technology', 'Computer Engineering', NULL, '2.96', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Parker  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Davis', 'Addison', '58400278', 'School of Information Technology', 'Computer Engineering', NULL, '1.70', 'Probation1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  McKenzie', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Dawson', 'Taylor', '58400417', 'School of Information Technology', 'Computer Engineering', NULL, '3.28', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'McKenzie  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Easton', 'Sullivan', '58400623', 'School of Information Technology', 'Computer Engineering', NULL, '2.81', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griffin  Addison', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Greyson', 'Lennon', '58400666', 'School of Information Technology', 'Computer Engineering', NULL, '3.43', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nixon  Cassidy', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Griffin', 'Lennox', '58400696', 'School of Information Technology', 'Computer Engineering', NULL, '2.94', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  Monroe', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Harrison', 'Quinn', '58410180', 'School of Information Technology', 'Computer Engineering', NULL, '3.22', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lincoln  Kingsley', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Hendrix', 'Griffin', '58410197', 'School of Information Technology', 'Computer Engineering', NULL, '3.09', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lane  Lewis', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Hudson', 'Harlow', '58430538', 'School of Information Technology', 'Computer Engineering', NULL, '3.26', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Parker  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Jackson', 'Dawson', '58430847', 'School of Information Technology', 'Computer Engineering', NULL, '2.93', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  McKenzie', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Kingsley', 'Griffin', '58430997', 'School of Information Technology', 'Computer Engineering', NULL, '3.16', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'McKenzie  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Lewis', 'Campbell', '58431136', 'School of Information Technology', 'Computer Engineering', NULL, '3.50', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Griffin  Addison', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Miller', 'Davis', '58700002', 'School of Information Technology', 'Computer Engineering', NULL, '2.43', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nixon  Cassidy', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Nash', 'Anderson', '58700026', 'School of Information Technology', 'Computer Engineering', NULL, '2.84', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  Monroe', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Nixon', 'Taylor', '58700029', 'School of Information Technology', 'Computer Engineering', NULL, '1.76', 'Probation1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lincoln  Kingsley', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MISS', 'Parker', 'Parker', '58700031', 'School of Information Technology', 'Computer Engineering', NULL, '3.04', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Lane  Lewis', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Reed', 'Reagan', '58700190', 'School of Information Technology', 'Computer Engineering', NULL, '3.17', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Parker  Carson', 'Greyson  Taylor'),
(NULL, NULL, NULL, 'MR.', 'Smith', 'West', '58710013', 'School of Information Technology', 'Computer Engineering', NULL, '2.61', 'Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bailey  McKenzie', 'Greyson  Taylor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insert_database`
--
ALTER TABLE `insert_database`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
