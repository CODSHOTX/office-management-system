-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 04:19 PM
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
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `deptId` int(10) NOT NULL,
  `deptName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptId`, `deptName`) VALUES
(1, 'admin'),
(2, 'accountant'),
(3, 'manager'),
(4, 'marketer'),
(5, 'secretary'),
(6, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `userId` int(10) NOT NULL,
  `deptId` varchar(100) NOT NULL,
  `tId` int(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userPwd` varchar(10) NOT NULL,
  `empSal` int(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNo` int(100) NOT NULL,
  `hire_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`userId`, `deptId`, `tId`, `userName`, `userPwd`, `empSal`, `email`, `phoneNo`, `hire_date`) VALUES
(1, 'admin', 0, 'admin', 'admin', 0, 'admin@email.com', 0, '2022-04-08 15:09:33'),
(2, 'manager', 0, 'manager', 'manager', 0, 'man@email.com', 0, '2022-04-10 10:58:30'),
(3, 'accountant', 0, 'accountant', 'accountant', 0, 'acc@email.com', 0, '2022-04-10 10:58:30'),
(4, 'marketer', 0, 'marketer', 'marketer', 0, 'mar@email.com', 0, '2022-04-10 10:58:30'),
(5, 'secretary', 0, 'secretary', 'secretary', 0, 'sec@email.com', 0, '2022-04-10 10:58:30'),
(6, 'others', 0, 'others', 'others', 0, 'oth@email.com', 0, '2022-04-10 10:58:30'),
(14, 'OTHER', 0, 'James Jameson', '$2y$10$IwX', 0, 'jimmy@email.com', 54354376, '2022-05-11 12:14:17'),
(15, 'ACCOUNTANT', 0, 'Daniel Jackson', '$2y$10$7kN', 0, 'danny@email.com', 323444, '2022-05-11 12:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `tId` int(10) NOT NULL,
  `tName` varchar(100) NOT NULL,
  `tDesc` text NOT NULL,
  `tprog` int(10) NOT NULL,
  `priority` varchar(20) NOT NULL,
  `due` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`deptId`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`tId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `deptId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `tId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
