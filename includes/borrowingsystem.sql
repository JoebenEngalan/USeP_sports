-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 01:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrowingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_item`
--

CREATE TABLE `borrowed_item` (
  `ID` int(11) NOT NULL,
  `id_number` varchar(12) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `Clerk` varchar(150) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Borrowed_time` varchar(100) NOT NULL,
  `Item1` varchar(150) NOT NULL,
  `quantity1` int(100) DEFAULT NULL,
  `Item2` varchar(150) NOT NULL,
  `quantity2` int(100) DEFAULT NULL,
  `Item3` varchar(150) NOT NULL,
  `quantity3` int(100) DEFAULT NULL,
  `Item4` varchar(150) NOT NULL,
  `quantity4` int(100) DEFAULT NULL,
  `Purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowed_item`
--

INSERT INTO `borrowed_item` (`ID`, `id_number`, `FullName`, `Clerk`, `ContactNumber`, `Borrowed_time`, `Item1`, `quantity1`, `Item2`, `quantity2`, `Item3`, `quantity3`, `Item4`, `quantity4`, `Purpose`) VALUES
(3, '2018-01046', 'Adrales , Keith', 'AdminLName', '09173503790', '10/3/2019', 'help', 1, '', 0, '', 0, '', 0, 'Test'),
(4, '2014-00000', 'celer , shai', 'AdminLName', '2147483647', '10/9/2019', 'test1212121', 2, '', 0, '', 0, '', 0, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `borrower_table`
--

CREATE TABLE `borrower_table` (
  `id` int(11) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `ContactNumber` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `EmailID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower_table`
--

INSERT INTO `borrower_table` (`id`, `id_number`, `FirstName`, `LastName`, `ContactNumber`, `Department`, `Position`, `EmailID`) VALUES
(1, '2014-00000', 'shai', 'celer', '2147483647', 'College of Engineering', 'Student', 'shai@gmail.com'),
(2, '2014-15358', 'shaira', 'celerian', '2147483647', 'College of Engineering', 'Student', 'shaiar@gmail.com'),
(3, '2014-11111', 'test', 'test', '09864914109', 'College of Engineering', 'Student', 'email@email.com'),
(4, '2018-01046', 'Keith', 'Adrales', '09173503790', 'College of Engineering', 'Student', 'kitkatadrales21@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `ItemName` varchar(500) DEFAULT NULL,
  `Description` text,
  `Category` varchar(50) DEFAULT NULL,
  `quantity` int(100) DEFAULT NULL,
  `Clerk` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `ItemName`, `Description`, `Category`, `quantity`, `Clerk`) VALUES
(3, 'test', 'testy', 'Sports Equipment', 22, 'AdminLName'),
(4, 'test2', 'deeeeeeeeeeeeeeeeeeeeeeee', 'Sports Equipment', 25, ''),
(5, 'test3', 'deeeeeeeeeeeeeeeeeeeeeeee', 'Sports Equipment', 7, ''),
(6, 'test4', 'dfedfdfggf', 'Gym Equipment', 10, ''),
(20, 'GeeksForGeeks', 'Make', 'Sports Equipment', 1, ''),
(21, 'help', 'test', 'Sports Equipment', 20, ''),
(22, 'help2', 'test', 'Sports Equipment', 40, ''),
(23, 'Basketball,GTR', 'Males Only', 'Sports Equipment', 10, 'AdminLName'),
(24, 'test1212121', 'test', 'Sports Equipment', 20, 'AdminLName'),
(25, 'test222', 'test', 'Sports Equipment', 9, 'AdminLName'),
(26, 'Polo', 'test', 'Gym Equipment', 20, 'AdminLName'),
(27, 'test21122', 'test', 'Sports Equipment', 50, 'AdminLName'),
(28, 'Tennis racket PE', 'For PE students only', 'Sports Equipment', 20, 'AdminLName');

-- --------------------------------------------------------

--
-- Table structure for table `returned_item`
--

CREATE TABLE `returned_item` (
  `ID` int(11) NOT NULL,
  `id_number` varchar(12) NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `ContactNumber` varchar(50) NOT NULL,
  `Borrowed_time` varchar(100) NOT NULL,
  `Return_time` varchar(100) NOT NULL,
  `Clerk` varchar(150) NOT NULL,
  `ClerkR` varchar(150) NOT NULL,
  `Remarks` text NOT NULL,
  `Item1` varchar(150) NOT NULL,
  `quantity1` int(100) DEFAULT NULL,
  `Item2` varchar(150) NOT NULL,
  `quantity2` int(100) DEFAULT NULL,
  `Item3` varchar(150) NOT NULL,
  `quantity3` int(100) DEFAULT NULL,
  `Item4` varchar(150) NOT NULL,
  `quantity4` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returned_item`
--

INSERT INTO `returned_item` (`ID`, `id_number`, `FullName`, `ContactNumber`, `Borrowed_time`, `Return_time`, `Clerk`, `ClerkR`, `Remarks`, `Item1`, `quantity1`, `Item2`, `quantity2`, `Item3`, `quantity3`, `Item4`, `quantity4`) VALUES
(1, '2018-01046', '', '2147483647', '10/3/2019', '10/3/2019', '', '', '', 'Basketball,GTR', 1, '', 0, '', 0, '', 0),
(2, '2018-01046', '', '2147483647', '10/3/2019', '10/3/2019', '', '', '', 'GeeksForGeeks', 1, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(1, 'AdminFName', 'AdminLName', 'Admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a'),
(2, 'Me', 'Here', 'Me@gmail.com', 'b9b57aae83585e17ede4570dcede353c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrowed_item`
--
ALTER TABLE `borrowed_item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `borrower_table`
--
ALTER TABLE `borrower_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ItemName` (`ItemName`);

--
-- Indexes for table `returned_item`
--
ALTER TABLE `returned_item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrowed_item`
--
ALTER TABLE `borrowed_item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `borrower_table`
--
ALTER TABLE `borrower_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `returned_item`
--
ALTER TABLE `returned_item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
