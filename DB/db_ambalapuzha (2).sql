-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3308
-- Generation Time: Oct 10, 2024 at 11:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ambalapuzha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `Admin_id` int(11) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `Admin_email` varchar(30) NOT NULL,
  `Admin_password` varchar(30) NOT NULL,
  `marriage_count` int(11) NOT NULL,
  `palpayasam_count` int(11) NOT NULL,
  `marriage_amount` int(11) NOT NULL,
  `palpayasam_amount` int(11) NOT NULL,
  `darshan_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`Admin_id`, `Admin_name`, `Admin_email`, `Admin_password`, `marriage_count`, `palpayasam_count`, `marriage_amount`, `palpayasam_amount`, `darshan_amt`) VALUES
(9, 'diyabenny', 'diya@gmail.com', 'Diya@123456', 5, 100, 500, 120, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookingvazhipaad`
--

CREATE TABLE `tbl_bookingvazhipaad` (
  `bookingvazhipaad_id` int(11) NOT NULL,
  `Devotee_id` int(30) NOT NULL,
  `bookingvazhipaad_date` varchar(30) NOT NULL,
  `bookingvazhipaad_status` int(11) NOT NULL DEFAULT 0,
  `vazhipaad_id` int(11) NOT NULL,
  `zodiac_id` int(11) NOT NULL,
  `bookingvazhipad_name` varchar(50) NOT NULL,
  `bookingvazhipaad_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_bookingvazhipaad`
--

INSERT INTO `tbl_bookingvazhipaad` (`bookingvazhipaad_id`, `Devotee_id`, `bookingvazhipaad_date`, `bookingvazhipaad_status`, `vazhipaad_id`, `zodiac_id`, `bookingvazhipad_name`, `bookingvazhipaad_amt`) VALUES
(1, 0, '2012-02-03', 0, 1, 4, '0', 0),
(2, 0, '2012-02-03', 0, 1, 4, '0', 0),
(3, 0, '2012-02-03', 0, 2, 10, '0', 0),
(4, 0, '2012-02-03', 0, 4, 11, '0', 0),
(5, 0, '0000-00-00', 0, 4, 12, '0', 0),
(6, 0, '2012-02-03', 0, 4, 12, '0', 0),
(7, 16, '2012-02-03', 0, 4, 12, '0', 0),
(9, 22, '0000-00-00', 0, 5, 10, '0', 0),
(10, 22, '0000-00-00', 0, 5, 10, '0', 0),
(11, 22, '0000-00-00', 0, 5, 10, '0', 0),
(12, 22, '0000-00-00', 0, 5, 10, '0', 0),
(13, 22, '2024-10-16', 0, 4, 14, '0', 0),
(14, 22, '2024-09-13', 1, 4, 11, 'Jenin Joy', 50),
(15, 22, '2024-09-26', 1, 4, 12, 'meena', 50),
(16, 15, '', 0, 0, 0, '', 0),
(17, 15, '', 0, 0, 0, '', 0),
(18, 15, '2024-10-24', 0, 5, 13, 'alphonsa', 100),
(19, 36, '', 0, 0, 0, '', 0),
(20, 38, '2024-10-22', 1, 5, 20, 'alphonsa', 100),
(21, 40, '2024-10-22', 1, 9, 27, 'Tiny', 110);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_title` varchar(30) NOT NULL,
  `complaint_content` varchar(30) NOT NULL,
  `complaint_reply` varchar(30) NOT NULL,
  `Devotee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_title`, `complaint_content`, `complaint_reply`, `Devotee_id`) VALUES
(1, 'holol', 'fdgtrhg', 'i will reply soon', 23),
(2, 'ambalapuzha', 'abcdefbhd', '14313413', 23),
(3, 'ambalapuzha', 'jhguiuyi', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_darshan`
--

CREATE TABLE `tbl_darshan` (
  `darshan_id` int(11) NOT NULL,
  `Devotee_id` int(11) NOT NULL,
  `darshan_date` varchar(20) NOT NULL,
  `booking_status` int(11) NOT NULL DEFAULT 0,
  `darshan_amount` int(11) NOT NULL,
  `darshan_count` int(11) NOT NULL,
  `darshan_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_darshan`
--

INSERT INTO `tbl_darshan` (`darshan_id`, `Devotee_id`, `darshan_date`, `booking_status`, `darshan_amount`, `darshan_count`, `darshan_time`) VALUES
(7, 15, '2024-10-06', 1, 300, 3, ''),
(9, 36, '2024-10-16', 0, 0, 4, ''),
(18, 36, '2024-10-25', 1, 100, 1, '3'),
(19, 40, '2024-10-11', 1, 300, 3, '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_devotee`
--

CREATE TABLE `tbl_devotee` (
  `Devotee_id` int(11) NOT NULL,
  `Devotee_name` varchar(30) NOT NULL,
  `Devotee_email` varchar(30) NOT NULL,
  `Devotee_password` varchar(30) NOT NULL,
  `devotee_contact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_devotee`
--

INSERT INTO `tbl_devotee` (`Devotee_id`, `Devotee_name`, `Devotee_email`, `Devotee_password`, `devotee_contact`) VALUES
(15, 'meena', 'meenadeviravikumar@gmail.com', 'xdgf', ''),
(22, 'Nandu', 'nandu@gmail.com', 'Q1q2q3q4', ''),
(23, 'meena', 'meenadeviravikumar@gmail.com', '123', ''),
(25, 'athira', 'athira@gmail.com', 'athira@123', ''),
(26, 'athira', 'athira@gmail.com', '123445', ''),
(27, 'nikhil', 'nikhil@gmail.cm', '12345', ''),
(29, 'athira', 'athira@gmail.com', '12345', ''),
(30, 'diyabenny', 'diya@gmail.com', '123', '123456777'),
(31, 'alphonsa', 'alph@gmail.com', '12', '1111111'),
(32, 'alphonsa', 'alph@gmail.com', '123$', '1111111'),
(33, 'alphonsa', 'alph@gmail.com', '123', '1111111'),
(34, 'alphonsa', 'alph@gmail.com', '123', '1111111'),
(35, 'momo', 'momo@gmail.com', '000', '999999999999999'),
(36, 'momo', 'momo@gmail.com', '123', '999999999999999'),
(37, 'diyabenny', 'diya@gmail.com', '12345', '9961810179'),
(38, 'neha', 'neha@gmail.com', '98765', '9961810179'),
(39, 'Hridya', 'hri@gmail.com', 'Hridya@12345', '9961810179'),
(40, 'Tiny', 'Tiny@gmail.com', 'Tiny678@', '9207284859');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donation`
--

CREATE TABLE `tbl_donation` (
  `donation_id` int(11) NOT NULL,
  `donation_amount` int(11) NOT NULL,
  `Devotee_id` int(11) NOT NULL,
  `donation_date` varchar(30) NOT NULL,
  `donation_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_donation`
--

INSERT INTO `tbl_donation` (`donation_id`, `donation_amount`, `Devotee_id`, `donation_date`, `donation_status`) VALUES
(18, 50, 22, '2024-09-12', 1),
(19, 50, 22, '2024-09-24', 1),
(20, 233, 22, '2024-09-25', 1),
(21, 50, 15, '2024-10-05', 0),
(22, 12333, 38, '2024-10-09', 0),
(23, 100, 40, '2024-10-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(30) NOT NULL,
  `Devotee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `Devotee_id`) VALUES
(1, '', 0),
(2, '', 0),
(3, '', 0),
(4, '', 0),
(5, '', 0),
(6, '', 0),
(7, '', 23),
(8, '', 23),
(9, '', 23),
(10, '', 23),
(11, 'jjijjj', 23),
(12, '', 23),
(13, '', 23),
(14, '', 23),
(15, 'gjhhjhhghgkhkhkhkhkhkhjkjkk;ll', 23),
(16, 'gjhhjhhghgkhkhkhkhkhkhjkjkk;ll', 23),
(17, 'jhfhjdkdsnjk2333@', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marriage`
--

CREATE TABLE `tbl_marriage` (
  `marriage_id` int(11) NOT NULL,
  `Devotee_id` int(11) NOT NULL,
  `marriage_date` date NOT NULL,
  `marriage_time` time NOT NULL,
  `marriage_status` varchar(30) NOT NULL DEFAULT '0',
  `marriage_amount` int(11) NOT NULL,
  `marriage_groom` varchar(30) NOT NULL,
  `marriage_bride` varchar(30) NOT NULL,
  `groom_dob` varchar(80) NOT NULL,
  `groom_idproof` varchar(200) NOT NULL,
  `bride_dob` varchar(80) NOT NULL,
  `bride_idproof` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_marriage`
--

INSERT INTO `tbl_marriage` (`marriage_id`, `Devotee_id`, `marriage_date`, `marriage_time`, `marriage_status`, `marriage_amount`, `marriage_groom`, `marriage_bride`, `groom_dob`, `groom_idproof`, `bride_dob`, `bride_idproof`) VALUES
(15, 0, '2024-09-05', '18:11:00', '1', 0, 'riya', 'raju', '', '', '', ''),
(16, 0, '2024-09-05', '18:11:00', '1', 0, 'riya', 'raju', '', '', '', ''),
(17, 0, '2024-09-05', '18:11:00', '1', 0, 'riya', 'raju', '', '', '', ''),
(19, 22, '2024-09-19', '19:21:00', '2', 0, 'Ammu', 'Apppu', '', '', '', ''),
(20, 22, '2024-09-24', '19:31:00', '1', 0, 'Ammu', 'Appu', '', '', '', ''),
(21, 22, '2024-09-25', '21:31:00', '1', 5, 'Ammu', 'Appu', '', '', '', ''),
(22, 22, '2024-09-19', '10:16:00', '1', 5, 'Ammu', 'Appu', '', '', '', ''),
(24, 22, '2024-09-14', '10:20:00', '1', 5, 'alph', 'panni', '', '', '', ''),
(27, 22, '2024-09-13', '03:50:00', '1', 5, 'riya', 'rahul', '', '', '', ''),
(28, 22, '2024-09-25', '02:30:00', '1', 5, 'fathima', 'raju', '', '', '', ''),
(29, 0, '2024-10-10', '18:35:00', '0', 0, 'Ammu', 'Appu', '', '', '', ''),
(30, 29, '2024-10-03', '19:41:00', '0', 0, 'Ammu', 'Appu', '', '', '', ''),
(31, 29, '2024-10-01', '17:20:00', '1', 5, 'ABCD', 'XYZ', '', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg', '', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg'),
(32, 29, '2024-10-01', '18:25:00', '1', 5, 'PQSRT', 'XYZ', '2024-10-14', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg', '2024-10-01', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg'),
(33, 0, '2024-10-18', '08:00:00', '0', 0, 'Ammu', 'Apppu', '2024-10-08', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg', '2024-10-17', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg'),
(34, 0, '2024-10-12', '12:00:00', '0', 0, 'PQSRT', 'Apppu', '2024-10-19', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg', '2024-10-15', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg'),
(35, 38, '2024-10-19', '12:00:00', '1', 500, 'alph', 'XYZ', '2024-10-19', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg', '2024-10-28', 'WhatsApp Image 2024-09-27 at 20.43.38_cbf393eb.jpg'),
(37, 40, '2024-10-11', '12:00:00', '1', 500, 'Tiny', 'Appu', '2017-03-14', 'IMG-20240229-WA0030.jpg', '1997-02-04', 'WhatsApp Image 2024-07-26 at 8.47.09 AM.jpeg'),
(38, 40, '2024-10-11', '00:00:00', '1', 500, 'Tiny', 'Appu', '2017-03-14', 'IMG-20240229-WA0030.jpg', '1997-02-04', 'WhatsApp Image 2024-07-26 at 8.47.09 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_palpayasam`
--

CREATE TABLE `tbl_palpayasam` (
  `palpayasam_id` int(11) NOT NULL,
  `Devotee_id` int(11) NOT NULL,
  `palpayasam_date` varchar(30) NOT NULL,
  `palpayasam_status` int(11) NOT NULL DEFAULT 0,
  `palpayasam_price` int(11) NOT NULL,
  `palpayasam_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_palpayasam`
--

INSERT INTO `tbl_palpayasam` (`palpayasam_id`, `Devotee_id`, `palpayasam_date`, `palpayasam_status`, `palpayasam_price`, `palpayasam_qty`) VALUES
(6, 0, '0000-00-00', 0, 0, 0),
(7, 0, '0000-00-00', 0, 0, 0),
(8, 0, '2012-02-03', 0, 0, 0),
(10, 0, '2024-09-17', 0, 0, 0),
(11, 0, '2024-09-17', 0, 0, 0),
(12, 0, '2024-09-17', 0, 0, 0),
(13, 0, '2024-09-17', 0, 0, 0),
(15, 22, '2024-09-27', 1, 180, 3),
(16, 36, '2024-10-17', 1, 1080, 9),
(17, 38, '2024-10-23', 1, 240, 2),
(18, 40, '2024-10-12', 0, 240, 2),
(19, 40, '2024-10-12', 1, 240, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time`
--

CREATE TABLE `tbl_time` (
  `time_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_time`
--

INSERT INTO `tbl_time` (`time_id`, `time`) VALUES
(3, '3:00-12:00'),
(4, '17:00-20:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vazhipaad`
--

CREATE TABLE `tbl_vazhipaad` (
  `vazhipaad_id` int(11) NOT NULL,
  `vazhipaad_name` varchar(30) NOT NULL,
  `vazhipaad_price` int(11) NOT NULL,
  `vazhipaad_details` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vazhipaad`
--

INSERT INTO `tbl_vazhipaad` (`vazhipaad_id`, `vazhipaad_name`, `vazhipaad_price`, `vazhipaad_details`) VALUES
(8, 'അഷ്ടാഭിഷേകം', 110, ''),
(9, 'അഷ്ടാഭിഷേകം', 110, ''),
(10, 'അഷ്ടാഭിഷേകം', 110, ''),
(11, 'നെയ്യഭിഷേകം', 101, ''),
(12, 'കളഭാഭിഷേകം', 120, ''),
(13, 'പുഷ്‌പാഭിഷേകം', 50, ''),
(14, 'സഹസ്രനാമാർച്ചന', 49, ''),
(15, 'ഗണപതിഹോമം', 500, ''),
(16, 'പാൽപായസം വഴിപാട് /Palpayasam V', 100, ''),
(17, 'പാൽപായസം വഴിപാട് /Palpayasam V', 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zodiacsign`
--

CREATE TABLE `tbl_zodiacsign` (
  `zodiac_id` int(11) NOT NULL,
  `zodiac_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_zodiacsign`
--

INSERT INTO `tbl_zodiacsign` (`zodiac_id`, `zodiac_name`) VALUES
(23, 'മേടം'),
(24, 'ഇടവം'),
(25, 'കർക്കിടകം/Cancer '),
(26, 'മകരം/Capricorn '),
(27, 'കന്നി/Virgo '),
(28, 'ചിങ്ങം/Leo '),
(29, 'തുലാം/Libra '),
(30, 'വൃശ്ചികം/Scorpion '),
(31, 'ധനു/Saggitarius '),
(32, 'കുഭം/Aquarius '),
(33, 'മീനം/Pisces ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `tbl_bookingvazhipaad`
--
ALTER TABLE `tbl_bookingvazhipaad`
  ADD PRIMARY KEY (`bookingvazhipaad_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_darshan`
--
ALTER TABLE `tbl_darshan`
  ADD PRIMARY KEY (`darshan_id`);

--
-- Indexes for table `tbl_devotee`
--
ALTER TABLE `tbl_devotee`
  ADD PRIMARY KEY (`Devotee_id`);

--
-- Indexes for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_marriage`
--
ALTER TABLE `tbl_marriage`
  ADD PRIMARY KEY (`marriage_id`);

--
-- Indexes for table `tbl_palpayasam`
--
ALTER TABLE `tbl_palpayasam`
  ADD PRIMARY KEY (`palpayasam_id`);

--
-- Indexes for table `tbl_time`
--
ALTER TABLE `tbl_time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `tbl_vazhipaad`
--
ALTER TABLE `tbl_vazhipaad`
  ADD PRIMARY KEY (`vazhipaad_id`);

--
-- Indexes for table `tbl_zodiacsign`
--
ALTER TABLE `tbl_zodiacsign`
  ADD PRIMARY KEY (`zodiac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_bookingvazhipaad`
--
ALTER TABLE `tbl_bookingvazhipaad`
  MODIFY `bookingvazhipaad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_darshan`
--
ALTER TABLE `tbl_darshan`
  MODIFY `darshan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_devotee`
--
ALTER TABLE `tbl_devotee`
  MODIFY `Devotee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_marriage`
--
ALTER TABLE `tbl_marriage`
  MODIFY `marriage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_palpayasam`
--
ALTER TABLE `tbl_palpayasam`
  MODIFY `palpayasam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_time`
--
ALTER TABLE `tbl_time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_vazhipaad`
--
ALTER TABLE `tbl_vazhipaad`
  MODIFY `vazhipaad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_zodiacsign`
--
ALTER TABLE `tbl_zodiacsign`
  MODIFY `zodiac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
