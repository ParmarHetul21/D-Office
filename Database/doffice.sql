-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 07:33 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(7) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Email`, `Password`, `UserType`) VALUES
(1, 'admin', 'admin', 'Admin');

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

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `File_Number`, `PAN_Number`, `GST_Number`, `Aadhar_Number`, `IsDeleted`, `UserID`, `profileID`) VALUES
(17, 'AC44', 'AAADDDWWW', 'QWERT1231', 'WWWEEEWWW', 0, 44, NULL),
(18, 'AC29', 'asdadadad', '5252525', 'AAASSDDFFF', 0, 29, NULL),
(19, 'AC45', 'AAASSSDDD', 'EEEDDDFFFA', 'WWESASDDFZ', 0, 45, NULL),
(20, 'AC', 'AAASSSDDFFF', 'aaassddffgg', 'AA77SS888', 0, 46, NULL),
(21, 'AC47', 'AASSDDFFFF', '5438551563', '12547zx5055', 0, 47, NULL),
(22, 'AC48', '036346', '659871', '032169', 0, 48, NULL);

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

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `Qualification`, `Experience`, `UserID`, `profileID`) VALUES
(6, 'Accountant', '3Y', 39, NULL),
(7, 'IT Return', '3', 41, NULL);

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

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `TotalCharges`, `PaidAmount`, `DueAmount`, `LastDate`, `ReceivedDate`, `ReceivedBy`, `WorkID`, `EmployeeID`) VALUES
(75, '1000', '500', '500', '20-10-2019', '21/9/2019', '6', 79, 6),
(76, '1200', '550', '650', '20-10-2019', NULL, NULL, 80, 6),
(77, '1000', '500', '500', '21-10-2019', NULL, NULL, 81, 6),
(78, '800', '200', '0', '21-10-2019', '2019-09-21', '6', 82, 6),
(79, '1000', '500', '500', '21-10-2019', NULL, NULL, 83, 6),
(80, '5000', '2500', '2500', '21-10-2019', NULL, NULL, 84, 6),
(81, '5000', '5000', '0', '21-10-2019', NULL, NULL, 85, 6),
(82, '100', '100', '0', '21-10-2019', NULL, NULL, 86, 6),
(83, '1000', '500', '500', '21-10-2019', NULL, NULL, 87, 6),
(84, '5000', '500', '0', '22-10-2019', '22-09-2019', '6', 88, 6);

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

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`ProfileID`, `FullName`, `MobileNo`, `DateOfBirth`, `JoinDate`, `Gender`, `City`, `Address`, `IsDeleted`, `UserID`) VALUES
(45, 'Steve Wolverine', '8160815191', '31/10/1999', '2019/09/15', 'Male', 'jamangar', 'st Road', 0, 44),
(46, 'Hetul Parmar', '942889306', '31/09/1999', '2019/09/15', 'Male', 'jamanagar', 'st Road 7 th road', 0, 29),
(47, 'abc bcd', '5191816081', '31/10/1999', '2019/09/16', 'Male', 'Ahmedabad', '23 digvijay plot', 0, 41),
(48, 'Kishan Rabadiya', '123456780', '31/101996', '2019/09/16', 'Male', 'jamangar', '65 Digvijay Plot', 0, 45),
(49, 'adr bfg', '321789456', '31/4/1995', '2019/09/18', 'Male', 'Jamangar', '12 Digvijay Plot', 0, 39),
(50, 'Mahek Trivedi', '123456789', '31/10/1999', '2019/09/18', 'Female', 'Jaipur', 'ST ROad ', 0, 46),
(51, 'Jay Bunny', '5161815191', 'Sep 30, 2019', '2019/09/20', 'Male', 'Jamangar', '42 Digvijay Plot', 0, 47),
(52, 'Sagar Bhadra', '70698724576', '11-5-1999', '22-09-2019', 'Male', 'jamnagar', '60dsaskj\r\n', 0, 48);

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
(30, 'Sagar@gmail.com', 'keval', 'Customer'),
(31, 'Sumit@gmail.com', 'sumit', 'Customer'),
(32, 'Abc@gmail.com', 'abc', 'Customer'),
(33, 'Shaunak@gmail.com', '121', 'Customer'),
(35, 'jay@gmail.com', 'jay', 'Customer'),
(36, 'keval@gmail.com', 'keval', 'Customer'),
(37, 'Prem@gmail.com', 'prem', 'Customer'),
(39, 'adr481@gmail.com', '1010', 'Employees'),
(40, 'admin', 'admin', 'Admin'),
(41, 'abc@gmail.com', '1212', 'Employees'),
(43, 'steve@gmail.com', '1011', 'Customer'),
(44, 'finch@gmail.com', '1011', 'Customer'),
(45, 'kishan@gmail.com', '1234', 'Customer'),
(46, 'mts@gmail.com', 'mts', 'Customer'),
(47, 'Bunny@gmail.com', 'bunny', 'Customer'),
(48, 'sagarbhadra82@gmail.com', 'sb', 'Customer'),
(49, 'sagarbhadra82@gmail.com', 'sb', 'Customer'),
(50, 'hetul101@gmail.com', '1212', 'Customer'),
(51, 'adr12@gmail.com', '123', 'Customer'),
(52, 'hetul11@gmail.com', '123', 'Customer'),
(53, 'hetul1201@gmail.com', '1212', 'Customer');

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

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`WorkID`, `WorkComment`, `WorkTakenOn`, `WorkApproxCompletionDate`, `WorkCompletedOn`, `WorkStatus`, `EmployeeID`, `WorkCategoryID`, `CustomerID`) VALUES
(79, 'lol', '20-09-2019', '20-10-2019', '21/9/2019', 2, 6, 3, 17),
(80, 'kok', '20-09-2019', '20-10-2019', NULL, 2, 6, 4, 17),
(81, 'LOL', '21-09-2019', '21-10-2019', NULL, 2, 6, 3, 19),
(82, 'WOO', '21-09-2019', '21-10-2019', '2019-09-21', 2, 6, 3, 19),
(83, 'Foo', '21-09-2019', '21-10-2019', NULL, 2, 6, 3, 21),
(84, 'WOO', '21-09-2019', '21-10-2019', NULL, 2, 6, 13, 19),
(85, 'Foo', '21-09-2019', '21-10-2019', NULL, 2, 6, 6, 18),
(86, '123', '21-09-2019', '21-10-2019', NULL, 2, 6, 2, 18),
(87, 'LOL', '21-09-2019', '21-10-2019', NULL, 2, 6, 5, 18),
(88, 'gelplp', '22-09-2019', '22-10-2019', '22-09-2019', 2, 6, 8, 22);

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
(9, 'AY 2016 - 2019', NULL),
(13, 'Hetul', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
