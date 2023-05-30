-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:4306:4306
-- Generation Time: May 30, 2023 at 12:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_emailid` varchar(100) NOT NULL,
  `user_id` varchar(80) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_annoucement`
--

CREATE TABLE `new_annoucement` (
  `announcement_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `skills_required` text NOT NULL,
  `location` text NOT NULL,
  `start_date` date NOT NULL,
  `duration` int(12) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `work_type` varchar(255) NOT NULL,
  `stipend_type` varchar(10) NOT NULL,
  `stipend` text NOT NULL,
  `work_location` varchar(50) NOT NULL,
  `perks` varchar(255) NOT NULL,
  `user_id` varchar(80) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_annoucement`
--

INSERT INTO `new_annoucement` (`announcement_title`, `description`, `skills_required`, `location`, `start_date`, `duration`, `branch`, `work_type`, `stipend_type`, `stipend`, `work_location`, `perks`, `user_id`) VALUES
('', '', '', '', '0000-00-00', 0, '', '', '', '', '', '', 'myadav20ecs@student.mes.ac.in'),
('ccc', '', '', 'WFH', '0000-00-00', 0, '', 'Paid', 'Paid', '2', 'WFH', 'ccxcz', 'demo@gmail.com'),
('2222', '', '', 'WFH', '0000-00-00', 22, '', 'Paid', 'Paid', '222', 'WFH', '22', 'demo@gmail.com'),
('ee', '', '', 'WFH', '0000-00-00', 2, '', 'Paid', 'Paid', '22', 'WFH', '222', 'demo@gmail.com'),
('iii', 'dd', 'slkil', 'WFH', '0000-00-00', 2, '', 'Paid', 'Paid', '22', 'WFH', '22', 'demo@gmail.com'),
('222', 'dd', 'slkil', 'WFH', '2023-01-11', 2, 'CS', 'Paid', 'Paid', '22', 'WFH', '22', 'demo@gmail.com'),
('dd', 'DCDC', 'slkil', 'WFH', '2023-01-11', 22, 'CS', 'Paid', 'Paid', '22', 'WFH', '222', 'demo@gmail.com'),
('222', '333', '22', 'WFH', '2023-01-13', 222, 'ECS', 'Paid', 'Paid', '22', 'WFH', '22', 'demo@gmail.com'),
('22', 'w22', 'ee', 'WFH', '2023-01-11', 22, 'ECS', 'Paid', 'Paid', '222', 'WFH', '22', 'demo@gmail.com'),
('eferg', 'ewfet', 'ewte5y', 'WFH', '2023-01-01', 0, 'ECS', 'Paid', 'Paid', '222', 'WFH', 'ferg', 'demo@gmail.com'),
('gjy', 'jhkj', 'hjgh', 'WFH', '2023-01-07', 1, 'MECH', 'Paid', 'Paid', '8870', 'WFH', 'gfhjb', 'demo@gmail.com'),
('fdgfc', 'hbvvb', 'fgcg', 'WFH', '2023-01-01', 0, 'ECS', 'Paid', 'Paid', '678', 'WFH', 'uhj', 'demo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `new_application`
--

CREATE TABLE `new_application` (
  `na_companyname` varchar(100) NOT NULL,
  `na_companyadd` varchar(100) NOT NULL,
  `na_companylocation` varchar(50) NOT NULL,
  `na_startdate` date NOT NULL,
  `na_enddate` date NOT NULL,
  `na_branch` varchar(5) NOT NULL,
  `na_currentsem` varchar(5) NOT NULL,
  `na_worktype` text NOT NULL,
  `na_worklocation` varchar(100) NOT NULL,
  `user_id` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_application`
--

INSERT INTO `new_application` (`na_companyname`, `na_companyadd`, `na_companylocation`, `na_startdate`, `na_enddate`, `na_branch`, `na_currentsem`, `na_worktype`, `na_worklocation`, `user_id`) VALUES
('na_companyname', 'na_companyadd', 'na_companylocation', '0000-00-00', '0000-00-00', 'na_br', 'na_cu', 'na_stipend', 'na_worklocation', ''),
('asd', 'ads', 'asad', '2022-12-14', '2022-11-29', 'CS', 'VIII', 'Paid', 'OnSite', ''),
('ssvddg', 'sfer', 'efgr', '2023-01-10', '2023-01-14', 'EXTC', 'I', 'Paid', 'WFH', ''),
('awr', 'wrw', 'ef', '2023-01-10', '2023-01-14', 'IT', 'I', 'Paid', 'WFH', ''),
('ewfer', 'dfrf', 'ewref', '2023-01-04', '2023-01-26', 'EXTC', 'I', 'Paid', 'OnSite', 'myadav20ecs@stuent.mes.ac.in'),
(' fyt', 'yfy', 'htdfg', '2023-01-12', '2023-01-20', 'CS', 'IV', 'Paid', 'Hybrid', 'myadav20ecs@stuent.mes.ac.in'),
('hkgjh', 'gvbh', 'hvbv', '2023-01-03', '2023-01-27', 'EXTC', 'I', 'Paid', 'OnSite', 'myadav20ecs@stuent.mes.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `pending_applications`
--

CREATE TABLE `pending_applications` (
  `pa_id` int(200) NOT NULL,
  `pa_company` varchar(50) NOT NULL,
  `pa_applied_date` date NOT NULL,
  `pa_start_date` date NOT NULL,
  `pa_end_date` date NOT NULL,
  `pa_type` text NOT NULL,
  `pa_class` varchar(10) NOT NULL,
  `pa_sent` varchar(10) NOT NULL,
  `user_id` varchar(80) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `previous_application`
--

CREATE TABLE `previous_application` (
  `preapp_id` int(100) NOT NULL,
  `preapp_company` int(50) NOT NULL,
  `preapp_date` date NOT NULL,
  `preapp_status` text NOT NULL,
  `preapp_comment` text NOT NULL,
  `user_id` varchar(80) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `user_id` varchar(80) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(255) NOT NULL,
  `firstname` varchar(60) NOT NULL DEFAULT '',
  `lastname` varchar(60) NOT NULL DEFAULT '',
  `fullname` varchar(120) NOT NULL DEFAULT '',
  `u_email` text NOT NULL DEFAULT '',
  `u_gender` varchar(10) NOT NULL DEFAULT '',
  `pro_pic` text NOT NULL DEFAULT '',
  `u_token` int(90) NOT NULL,
  `ver_email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `firstname`, `lastname`, `fullname`, `u_email`, `u_gender`, `pro_pic`, `u_token`, `ver_email`) VALUES
(1, '', '', '', '', '', '', 0, ''),
(2, '', '', '', '', '', '', 0, ''),
(3, '', '', '', '', '', '', 0, ''),
(4, '', '', '', '', '', '', 0, ''),
(5, '', '', '', '', '', '', 0, ''),
(6, '', '', '', '', '', '', 0, ''),
(7, '', '', '', '', '', '', 0, ''),
(8, '', '', '', '', '', '', 0, ''),
(9, '', '', '', '', '', '', 0, ''),
(10, '', '', '', '', '', '', 0, ''),
(11, '', '', '', '', '', '', 0, ''),
(12, '', '', '', '', '', '', 0, ''),
(13, '', '', '', '', '', '', 0, ''),
(14, '', '', '', '', '', '', 0, ''),
(15, '', '', '', '', '', '', 0, ''),
(16, '', '', '', '', '', '', 0, ''),
(17, '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `full_name` varchar(40) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `gender` varchar(10) NOT NULL DEFAULT '',
  `picture` char(40) NOT NULL DEFAULT '',
  `verifiedEmail` varchar(50) NOT NULL DEFAULT '',
  `token` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `first_name`, `last_name`, `full_name`, `email`, `gender`, `picture`, `verifiedEmail`, `token`) VALUES
(1, '', '', '', '', '', '', '', 0),
(2, '', '', '', '', '', '', '', 0),
(3, '', '', '', '', '', '', '', 0),
(4, '', '', '', '', '', '', '', 0),
(5, '', '', '', '', '', '', '', 0),
(6, '', '', '', '', '', '', '', 0),
(7, '', '', '', '', '', '', '', 0),
(8, '', '', '', '', '', '', '', 0),
(9, '', '', '', '', '', '', '', 0),
(10, '', '', '', '', '', '', '', 0),
(11, '', '', '', '', '', '', '', 0),
(12, '', '', '', '', '', '', '', 0),
(13, '', '', '', '', '', '', '', 0),
(14, '', '', '', '', '', '', '', 0),
(15, '', '', '', '', '', '', '', 0),
(16, '', '', '', '', '', '', '', 0),
(17, '', '', '', '', '', '', '', 0),
(18, '', '', '', '', '', '', '', 0),
(19, '', '', '', '', '', '', '', 0),
(20, '', '', '', '', '', '', '', 0),
(21, '', '', '', '', '', '', '', 0),
(22, '', '', '', '', '', '', '', 0),
(23, '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_emailid`);

--
-- Indexes for table `pending_applications`
--
ALTER TABLE `pending_applications`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indexes for table `previous_application`
--
ALTER TABLE `previous_application`
  ADD PRIMARY KEY (`preapp_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
