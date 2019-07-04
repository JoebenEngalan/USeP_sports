-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 09:44 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Datelogs` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `Name`, `Password`, `Datelogs`) VALUES
(1, 'Admin_sports', 'sports1234', '0000-00-00 00:00:00');

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
  `EmailID` varchar(50) NOT NULL,
  `borrow` datetime NOT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower_table`
--

INSERT INTO `borrower_table` (`id`, `id_number`, `FirstName`, `LastName`, `ContactNumber`, `Department`, `Position`, `EmailID`, `borrow`, `Status`) VALUES
(1, '2014', 'shai', 'celer', '2147483647', NULL, NULL, 'shai@gmail.com', '0000-00-00 00:00:00', 1),
(2, '2014-15358', 'shaira', 'celerian', '2147483647', NULL, NULL, 'shaiar@gmail.com', '0000-00-00 00:00:00', 1),
(3, '2014-6565685', 'simplyn', 'madula', '2147483647', NULL, NULL, 'madula@gmail.com', '0000-00-00 00:00:00', 1),
(4, '2014-15358', 'wattap', 'hey', '2147483647', 'College of Education', 'Student', 'hey@gmail.com', '0000-00-00 00:00:00', 1),
(5, '2014-15358', 'shaira', 'celerian', '2147483647', 'Institute of Computing', 'Student', 'shairacelerian@gmail.com', '0000-00-00 00:00:00', 1),
(6, '2014-19596', 'shaira', 'celerian', '2147483647', 'Institute of Computing', 'Faculty and Staff', 'hey@gmail.com', '0000-00-00 00:00:00', 1),
(7, '2014-19596', 'shaira', 'celerian', '09105824423', 'Institute of Computing', 'Faculty and Staff', 'hey@gmail.com', '0000-00-00 00:00:00', 1),
(8, '2014-15358', 'haloo', 'heloo', '09105824423', NULL, NULL, 'halo@gmail.com', '0000-00-00 00:00:00', 1),
(9, '2014-15358', 'sup', 'wat', '09154845552', 'College of Engineering', 'Faculty and Staff', 'watsup@gmail.com', '0000-00-00 00:00:00', 1),
(10, '2014-65986', 'low', 'hey', '09105824422', 'Institute of Computing', 'Faculty and Staff', 'yea@gmail.com', '0000-00-00 00:00:00', 1),
(11, '2014-15358', 'sure', 'huyy', '09105824423', 'College of Engineering', 'Student', 'huy@gmail.com', '0000-00-00 00:00:00', 1),
(12, '2014-15358', 'low', 'hey', '09610582442', 'School Applied Economics', 'Faculty and Staff', 'low@gmail.com', '0000-00-00 00:00:00', 1),
(13, '2014-15358', 'low', 'hey', '09610582442', 'School Applied Economics', 'Faculty and Staff', 'low@gmail.com', '0000-00-00 00:00:00', 1),
(14, '2014-15358', 'madula', 'hey', '09105824422', 'Institute of Computing', 'Student', 'madula@gmail.com', '0000-00-00 00:00:00', 1),
(15, '2015-15668', 'lala', 'lolo', '09105824423', 'School Applied Economics', 'Faculty and Staff', 'lolo@gmail.com', '0000-00-00 00:00:00', 1),
(16, '25896-698565656', 'simplyn', 'madula', '09105824223', 'College of Technology', 'Faculty and Staff', 'madulasimplyn@gmail.com', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `borrowpage`
--

CREATE TABLE `borrowpage` (
  `Item_borrowed` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `FirstName`, `LastName`, `Email`, `Password`, `ContactNumber`) VALUES
(1, 'shaira', 'celerian', 'shai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(2, 'simplyn', 'madula', 'madula@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(4, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(5, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(6, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(7, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(8, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(9, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', 0),
(10, 'lala', 'lolo', 'lolo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `borrower_table`
--
ALTER TABLE `borrower_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `borrower_table`
--
ALTER TABLE `borrower_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
