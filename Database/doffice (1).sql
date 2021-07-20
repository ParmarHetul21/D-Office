-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2019 at 03:55 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(6) NOT NULL,
  `File_Number` varchar(50) DEFAULT NULL,
  `PAN_Number` varchar(50) DEFAULT NULL,
  `GST_Number` varchar(50) DEFAULT NULL,
  `Aadhar_Number` varchar(50) DEFAULT NULL,
  `IsDeleted` tinyint(2) DEFAULT 0,
  `UserID` int(6) DEFAULT NULL,
  `profileID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(6) NOT NULL,
  `Qualification` varchar(50) DEFAULT NULL,
  `Experience` varchar(2) DEFAULT NULL,
  `UserID` int(6) DEFAULT NULL,
  `profileID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` tinyint(6) NOT NULL,
  `TotalCharges` varchar(4) DEFAULT NULL,
  `PaidAmount` varchar(4) DEFAULT NULL,
  `DueAmount` varchar(4) DEFAULT NULL,
  `LastDate` varchar(50) DEFAULT NULL,
  `ReceivedDate` varchar(50) DEFAULT NULL,
  `ReceivedBy` varchar(50) DEFAULT NULL,
  `WorkID` int(6) DEFAULT NULL,
  `EmployeeID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `ProfileID` int(6) NOT NULL,
  `FullName` varchar(50) DEFAULT NULL,
  `MobileNo` varchar(50) DEFAULT NULL,
  `DateOfBirth` varchar(50) DEFAULT NULL,
  `JoinDate` varchar(50) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `IsDeleted` tinyint(2) DEFAULT 0,
  `UserID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `UserType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Email`, `Password`, `UserType`) VALUES
(29, 'hetul841@gmail.com', 'hetul', 'Customer'),
(39, 'adr481@gmail.com', '1010', 'Employees');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `WorkID` int(6) NOT NULL,
  `WorkComment` varchar(50) DEFAULT NULL,
  `WorkTakenOn` varchar(50) DEFAULT NULL,
  `WorkApproxCompletionDate` varchar(50) DEFAULT NULL,
  `WorkCompletedOn` varchar(50) DEFAULT NULL,
  `WorkStatus` tinyint(3) DEFAULT 0,
  `EmployeeID` int(6) DEFAULT NULL,
  `WorkCategoryID` int(6) DEFAULT NULL,
  `CustomerID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workcategories`
--

CREATE TABLE `workcategories` (
  `WorkCategoryID` int(6) NOT NULL,
  `CategoryName` varchar(50) DEFAULT NULL,
  `Isdeleted` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workcategories`
--

INSERT INTO `workcategories` (`WorkCategoryID`, `CategoryName`, `Isdeleted`) VALUES
(2, 'BF 31-3-16', NULL),
(3, 'Account', NULL),
(4, 'IT Return', NULL),
(5, 'Tax', NULL),
(6, 'GST Return', NULL),
(7, 'Audit', NULL),
(8, 'Reg', NULL),
(9, 'AY 2016 - 2019', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `profileID` (`profileID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `profileID` (`profileID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `WorkID` (`WorkID`),
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`ProfileID`),
  ADD KEY `Userid` (`UserID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`WorkID`),
  ADD KEY `EmployeeID` (`EmployeeID`),
  ADD KEY `WorkCategoryID` (`WorkCategoryID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `workcategories`
--
ALTER TABLE `workcategories`
  ADD PRIMARY KEY (`WorkCategoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmployeeID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` tinyint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `ProfileID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `WorkID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `workcategories`
--
ALTER TABLE `workcategories`
  MODIFY `WorkCategoryID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `customers_ibfk_2` FOREIGN KEY (`profileID`) REFERENCES `profiles` (`ProfileID`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`profileID`) REFERENCES `profiles` (`ProfileID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`WorkID`) REFERENCES `work` (`WorkID`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`),
  ADD CONSTRAINT `work_ibfk_2` FOREIGN KEY (`WorkCategoryID`) REFERENCES `workcategories` (`WorkCategoryID`),
  ADD CONSTRAINT `work_ibfk_3` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
