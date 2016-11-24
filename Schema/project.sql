-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 11:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--


--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `authenticateUser` (IN `email` VARCHAR(255), IN `passphrase` VARCHAR(100))  BEGIN
SELECT u.uid,u.email,u.isadmin FROM users u WHERE u.email = email AND u.password = passphrase;
END$$


-- --------------------------------------------------------

--
-- Table structure for table `academicdetails`
--

CREATE TABLE `academicdetails` (
  `ID` int(11) NOT NULL,
  `Percentage` float DEFAULT NULL,
  `FieldOfStudy` varchar(45) DEFAULT NULL,
  `PersonDetails_ID` int(11) NOT NULL,
  `Institution_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicdetails`
--

INSERT INTO `academicdetails` (`ID`, `Percentage`, `FieldOfStudy`, `PersonDetails_ID`, `Institution_ID`) VALUES
(1, 56, 'Engineering', 2, 1),
(2, 78, 'Medical', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `academicreference`
--

CREATE TABLE `academicreference` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `PhoneNo` varchar(45) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Institution` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assetsinfo`
--

CREATE TABLE `assetsinfo` (
  `ID` int(11) NOT NULL,
  `Amount` float DEFAULT NULL,
  `AssetType_ID` int(11) NOT NULL,
  `FamilyDetails_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assetsinfo`
--

INSERT INTO `assetsinfo` (`ID`, `Amount`, `AssetType_ID`, `FamilyDetails_ID`) VALUES
(1, 50000, 1, 1),
(2, 50000, 1, 1),
(3, 60454, 2, 1),
(4, 8415, 2, 1),
(5, 7845, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `assettype`
--

CREATE TABLE `assettype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assettype`
--

INSERT INTO `assettype` (`ID`, `Name`) VALUES
(1, 'House'),
(2, 'Land'),
(3, 'Investments');

-- --------------------------------------------------------

--
-- Table structure for table `expensesinfo`
--

CREATE TABLE `expensesinfo` (
  `ID` int(11) NOT NULL,
  `ExpenseType_ID` int(11) NOT NULL,
  `FamilyDetails_ID` int(11) NOT NULL,
  `Amount` float DEFAULT NULL,
  `Description` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expensesinfo`
--

INSERT INTO `expensesinfo` (`ID`, `ExpenseType_ID`, `FamilyDetails_ID`, `Amount`, `Description`) VALUES
(1, 1, 1, 54000, 'Month: November 16\r\n'),
(2, 2, 1, 8000, 'Month: January 15');

-- --------------------------------------------------------

--
-- Table structure for table `expensetype`
--

CREATE TABLE `expensetype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expensetype`
--

INSERT INTO `expensetype` (`ID`, `Name`) VALUES
(1, 'Utility Bills'),
(2, 'Medical'),
(3, 'Groceries');

-- --------------------------------------------------------

--
-- Table structure for table `familydetails`
--

CREATE TABLE `familydetails` (
  `ID` int(11) NOT NULL,
  `Income` float DEFAULT NULL,
  `NoOfSiblings` int(11) DEFAULT NULL,
  `FName` varchar(45) DEFAULT NULL,
  `LName` varchar(45) DEFAULT NULL,
  `PhoneNo` varchar(45) DEFAULT NULL,
  `Address` tinytext,
  `CNIC` varchar(45) DEFAULT NULL,
  `Designation` varchar(45) DEFAULT NULL,
  `Company` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familydetails`
--

INSERT INTO `familydetails` (`ID`, `Income`, `NoOfSiblings`, `FName`, `LName`, `PhoneNo`, `Address`, `CNIC`, `Designation`, `Company`) VALUES
(1, 45400, 5, 'Jaffar', 'Haji', '090078601', 'University Rd, Khi', '904545451004451', 'Owner', 'Jaffar Co.'),
(2, 6000, 2, 'Karim', 'Ali', '30054678', NULL, '90004548745', 'sales', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Address` tinytext,
  `City` varchar(45) DEFAULT NULL,
  `Type` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`ID`, `Name`, `Address`, `City`, `Type`) VALUES
(1, 'ABC School', 'PECHS KHI', 'Karachi', 'School'),
(2, 'XYZZ College', 'Abc muhalla foo society', 'Larkana', 'College');

-- --------------------------------------------------------

--
-- Table structure for table `personalreference`
--

CREATE TABLE `personalreference` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `PhoneNo` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` tinytext,
  `Relationship` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persondetails`
--

CREATE TABLE `persondetails` (
  `ID` int(11) NOT NULL,
  `FName` varchar(45) DEFAULT NULL,
  `LName` varchar(45) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CNIC` varchar(45) DEFAULT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Address` tinytext,
  `City` varchar(45) DEFAULT NULL,
  `District` varchar(45) DEFAULT NULL,
  `FamilyDetails_ID` int(11) NOT NULL,
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persondetails`
--

INSERT INTO `persondetails` (`ID`, `FName`, `LName`, `DateOfBirth`, `Email`, `CNIC`, `Phone`, `Address`, `City`, `District`, `FamilyDetails_ID`, `Status`) VALUES
(2, 'Ali', 'Salim', '2000-01-01', 'abc', '90554512120', '80054587451', NULL, 'Khi', 'Sindh', 1, 'Registered'),
(3, 'Hajdk', 'dkjvn', '1999-04-25', 'foo', '458412102', '48879455414', 'Allahabad Khi', 'Larkana', 'Sindh', 2, 'Registered');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `ID` int(11) NOT NULL,
  `PersonDetails_ID` int(11) NOT NULL,
  `AcademicReference_ID` int(11) NOT NULL,
  `PersonalReference_ID` int(11) NOT NULL,
  `Description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isadmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `isadmin`) VALUES
(1, 'foo@foo.com', '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 1),
(2, 'abc', 'a9993e364706816aba3e25717850c26c9cd0d89d', 0),
(3, 'foo', '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicdetails`
--
ALTER TABLE `academicdetails`
  ADD PRIMARY KEY (`ID`,`PersonDetails_ID`),
  ADD KEY `fk_AcademicDetails_PersonDetails1_idx` (`PersonDetails_ID`),
  ADD KEY `fk_AcademicDetails_Institution1_idx` (`Institution_ID`);

--
-- Indexes for table `academicreference`
--
ALTER TABLE `academicreference`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assetsinfo`
--
ALTER TABLE `assetsinfo`
  ADD PRIMARY KEY (`ID`,`FamilyDetails_ID`),
  ADD KEY `fk_AssetsInfo_AssetType1_idx` (`AssetType_ID`),
  ADD KEY `fk_AssetsInfo_FamilyDetails1_idx` (`FamilyDetails_ID`);

--
-- Indexes for table `assettype`
--
ALTER TABLE `assettype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `expensesinfo`
--
ALTER TABLE `expensesinfo`
  ADD PRIMARY KEY (`ID`,`FamilyDetails_ID`),
  ADD KEY `fk_ExpensesInfo_ExpenseType1_idx` (`ExpenseType_ID`),
  ADD KEY `fk_ExpensesInfo_FamilyDetails1_idx` (`FamilyDetails_ID`);

--
-- Indexes for table `expensetype`
--
ALTER TABLE `expensetype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `familydetails`
--
ALTER TABLE `familydetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personalreference`
--
ALTER TABLE `personalreference`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `persondetails`
--
ALTER TABLE `persondetails`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_PersonDetails_FamilyDetails1_idx` (`FamilyDetails_ID`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`ID`,`PersonDetails_ID`,`AcademicReference_ID`,`PersonalReference_ID`),
  ADD KEY `fk_References_PersonDetails1_idx` (`PersonDetails_ID`),
  ADD KEY `fk_References_AcademicReference1_idx` (`AcademicReference_ID`),
  ADD KEY `fk_References_PersonalReference1_idx` (`PersonalReference_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicdetails`
--
ALTER TABLE `academicdetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `academicreference`
--
ALTER TABLE `academicreference`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assetsinfo`
--
ALTER TABLE `assetsinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assettype`
--
ALTER TABLE `assettype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `expensesinfo`
--
ALTER TABLE `expensesinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `expensetype`
--
ALTER TABLE `expensetype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `familydetails`
--
ALTER TABLE `familydetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `personalreference`
--
ALTER TABLE `personalreference`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persondetails`
--
ALTER TABLE `persondetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `academicdetails`
--
ALTER TABLE `academicdetails`
  ADD CONSTRAINT `fk_AcademicDetails_Institution1` FOREIGN KEY (`Institution_ID`) REFERENCES `institution` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AcademicDetails_PersonDetails1` FOREIGN KEY (`PersonDetails_ID`) REFERENCES `persondetails` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `assetsinfo`
--
ALTER TABLE `assetsinfo`
  ADD CONSTRAINT `assetsinfo_ibfk_1` FOREIGN KEY (`AssetType_ID`) REFERENCES `assettype` (`ID`),
  ADD CONSTRAINT `fk_AssetsInfo_FamilyDetails1` FOREIGN KEY (`FamilyDetails_ID`) REFERENCES `familydetails` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expensesinfo`
--
ALTER TABLE `expensesinfo`
  ADD CONSTRAINT `expensesinfo_ibfk_1` FOREIGN KEY (`ExpenseType_ID`) REFERENCES `expensetype` (`ID`),
  ADD CONSTRAINT `fk_ExpensesInfo_FamilyDetails1` FOREIGN KEY (`FamilyDetails_ID`) REFERENCES `familydetails` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `persondetails`
--
ALTER TABLE `persondetails`
  ADD CONSTRAINT `fk_PersonDetails_FamilyDetails1` FOREIGN KEY (`FamilyDetails_ID`) REFERENCES `familydetails` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `persondetails_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`email`);

--
-- Constraints for table `references`
--
ALTER TABLE `references`
  ADD CONSTRAINT `fk_References_AcademicReference1` FOREIGN KEY (`AcademicReference_ID`) REFERENCES `academicreference` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_References_PersonDetails1` FOREIGN KEY (`PersonDetails_ID`) REFERENCES `persondetails` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_References_PersonalReference1` FOREIGN KEY (`PersonalReference_ID`) REFERENCES `personalreference` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
