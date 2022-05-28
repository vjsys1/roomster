-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2022 at 09:32 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18768632_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(NULL, 'vj', 'abhimanyug941@gmail.com', '$2y$10$qa4Etve6KU3bzQShb3wKquIxIc7p1XL7CXZXTn5i3zIO4Jimqx0Mm', 0, 'verified'),
(NULL, 'Vijay Gurjar', 'vijay.20jics069@jietjodhpur.ac.in', '$2y$10$qSENVRX3SfRQE2eLqO6zbuPn5FSChvgPK2tAVRABOmm34OGTDD6Ra', 0, 'verified'),
(NULL, 'Vijay Gurjar', 'vijaygurjar8520@gmail.com', '$2y$10$yKKjYIptPXH8RwB/NDdEkeb2Gk.Rx4vrbYzzSfK4nBgsPoQ6jy8Oe', 0, 'verified'),
(NULL, 'sourav', 'sourav.20jics062@jietjodhpur.ac.in', '$2y$10$tEv8xEdQ5meoS.z5vww4N.R2smdzoWtZGgC1gx.bMaTInKLzYWI.u', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`) VALUES
(1, '1A'),
(4, '4A'),
(17, '1B'),
(18, '2B'),
(19, '5B'),
(20, '6B'),
(21, '7B'),
(22, '7A'),
(23, '2A'),
(24, '5A'),
(25, '3B'),
(26, '4B'),
(27, '8B'),
(28, '3A'),
(29, '8A'),
(30, '6A');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fpno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ownerid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prof` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `name`, `fname`, `pno`, `fpno`, `email`, `age`, `gender`, `address`, `ownerid`, `prof`, `file`) VALUES
(28, 'Vishant Mathur ', 'Sunil Mathur ', '9876543210', '9876543210', 'Vishant.20jics132@jietjodhpur.ac.in', 20, 'Male ', '                            \r\n         Jodhpur                    ', 'vj941', 'Student', 0x646f776e6c6f61642e6a706567),
(29, 'Vishu Mathur ', 'Sunil Mathur ', '9898981202', '9876543210', 'Vishant.20jics132@jietjodhpur.ac.in', 20, 'Male ', '                            \r\n         Jodhpur                    ', 'vj941', 'Student', 0x646f776e6c6f61642e6a706567),
(30, 'Vijay Gurjar', 'br gurjar', '+919079660522', '+919079660522', 'abhimanyug941@gmail.com', 20, 'F', 'p.no 167 ghanchi colony, bgkt', 'vj941', 'Student', '');

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--

CREATE TABLE `pg` (
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fpno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `aadhar` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ownerid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prof` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pg`
--

INSERT INTO `pg` (`name`, `fname`, `pno`, `fpno`, `email`, `age`, `gender`, `aadhar`, `address`, `ownerid`, `prof`, `file`) VALUES
('Vishu Solanki', 'Vijay Solanki ', '1234567890', '2134567809', 'vishant.20jics132@jietjodhpur.ac.in', 20, 'Male ', 0, '                            \r\n            Kudi                 ', 'vj941', 'Govt. emp', 0x646f776e6c6f61642e6a706567),
('Vijay Gurjar', 'br gurjar', '+919079660522', '+919079660522', 'abhimanyug941@gmail.com', 10, 'M', 0, 'p.no 167 ghanchi colony, bgkt', 'vj941', 'Student', 0x3132322e6a7067),
('sourav', 'daasfeda', '123456789', '1234567899', 'sourav.20jics062@jietjodhpur.ac.in', 19, 'male', 0, '                            \r\n                             dffdadfaddasdsaaddsada', 'vj941', 'Student', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(22, 'Vishant Mathur', 'vishant.20jics132@jietjodhpur.ac.in', '$2y$10$tiUD31oOYX1f4Lbxd/s/NuNMdv3525XayqwOqCs722i0F9FvvYw4q', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
