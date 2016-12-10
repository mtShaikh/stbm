-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 02:37 PM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `authenticateUser` (IN `email` VARCHAR(255), IN `passphrase` VARCHAR(100))  BEGIN
SELECT u.uid,u.email,u.isadmin FROM users u WHERE u.email = email AND u.password = passphrase;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displayAcademics` ()  BEGIN
SELECT pd.FName,pd.LName,ad.Percentage,i.Name 
FROM  persondetails pd 
INNER JOIN academicdetails ad 
ON
ad.PersonDetails_ID=pd.ID 
INNER JOIN  institution i 
ON
 ad.Institution_ID=i.ID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displayAReference` ()  NO SQL
BEGIN
SELECT
concat(pd.fname,' ',
pd.lname) as PersonName,
a.name as ReferenceName,
a.phoneno,
a.email,
a.Institution
FROM academicreference a
INNER JOIN persondetails pd
ON 
a.Person_id = pd.ID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displayAssets` ()  NO SQL
BEGIN
SELECT
concat(pd.fname,' ',
pd.lname) as PersonName,
i.Amount,
t.Name
from assettype t, persondetails pd
INNER JOIN familydetails f
on 
 pd.ID= f.Person_id
INNER JOIN assetsinfo i 
on 
f.ID = i.FamilyDetails_ID
where i.AssetType_ID = t.ID
;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displayExpenses` ()  NO SQL
BEGIN
SELECT
concat(pd.fname,' ',
pd.lname) as PersonName,
i.Amount,
t.Name
from expensetype t, persondetails pd
INNER JOIN familydetails f
on 
 pd.ID= f.Person_id
INNER JOIN expensesinfo i 
on 
f.ID = i.FamilyDetails_ID
where i.ExpenseType_ID = t.ID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displayFamily` ()  NO SQL
BEGIN
SELECT
concat(pd.fname,' ',
pd.lname) as Name,
f.Income,
f.NoOfSiblings,
concat(f.FName,' ',
f.LName) as GuardianName,
f.PhoneNo,
f.CNIC,
f.Designation,
f.Company
FROM familydetails f
INNER JOIN persondetails pd
ON
 pd.ID = f.Person_id;
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `displayPReference` ()  NO SQL
BEGIN
SELECT
concat(pd.fname,' ',
pd.lname) as PersonName,
p.name as ReferenceName,
p.phoneno,
p.email,
p.Relationship
FROM personalreference p
INNER JOIN persondetails pd
ON 
p.Person_id = pd.ID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getAssets` (IN `familyId` INT, IN `typeID` INT)  NO SQL
BEGIN
SELECT familydetails_ID as ID, t.name as name, amount from assetsinfo a, assettype t where (a.AssetType_ID = t.ID) AND (a.FamilyDetails_ID=familyID) AND (a.AssetType_ID = typeID);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getCollege` (IN `PersonID` INT)  NO SQL
BEGIN
SELECT a.PersonDetails_ID, a.Institution_ID,i.Name, i.Type, `Percentage` FROM academicdetails a, institution i WHERE i.ID = a.Institution_ID AND i.Type = 'College' AND a.PersonDetails_ID = PersonID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getExpenses` (IN `familyID` INT, IN `typeID` INT)  NO SQL
BEGIN
SELECT familydetails_ID as ID, t.name as name, amount from expensesinfo e, expensetype t where (e.ExpenseType_ID = t.ID) AND (e.FamilyDetails_ID=familyID) AND (e.ExpenseType_ID = typeID);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getLastInsert` ()  NO SQL
BEGIN
SELECT MAX(ID) as ID FROM institution;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getSchool` (IN `PersonID` INT)  NO SQL
BEGIN
SELECT a.PersonDetails_ID, a.Institution_ID, i.Name, i.Type, `Percentage` FROM academicdetails a, institution i WHERE i.ID = a.Institution_ID AND i.Type = 'School' AND a.PersonDetails_ID=personID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateAssets` (IN `assetID` INT, IN `familyID` INT, IN `amnt` FLOAT)  NO SQL
BEGIN
UPDATE assetsinfo SET amount = amnt WHERE assettype_id = assetID AND familydetails_ID = familyID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateExpenses` (IN `expenseID` INT, IN `FamilyID` INT, IN `amnt` FLOAT)  MODIFIES SQL DATA
BEGIN
UPDATE expensesinfo SET amount = amnt WHERE ExpenseType_ID = expenseID AND familydetails_ID = familyID;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `changePass` (`mail` VARCHAR(255), `pass` VARCHAR(100), `oldpass` VARCHAR(100)) RETURNS CHAR(1) CHARSET latin1 BEGIN
DECLARE opass varchar(100);
SELECT password into opass FROM users where email = mail;
IF (opass != oldpass) THEN
RETURN 'n';
ELSE
UPDATE users SET password = pass WHERE email = mail;
RETURN 'y';
END IF;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `registerUser` (`mail` VARCHAR(255), `pass` VARCHAR(100)) RETURNS CHAR(1) CHARSET latin1 NO SQL
BEGIN
DECLARE i int;
DECLARE CONTINUE HANDLER FOR SQLSTATE '23000'
  BEGIN
  set i = 0;
  END;
INSERT INTO users (email,password,isadmin) VALUES (mail,pass,'0');
if i=0 THEN
RETURN 'n';
ELSE
RETURN 'y';
End IF;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `academicdetails`
--

CREATE TABLE `academicdetails` (
  `ID` int(11) NOT NULL,
  `Percentage` float DEFAULT NULL,
  `PersonDetails_ID` int(11) NOT NULL,
  `Institution_ID` int(11) DEFAULT NULL,
  `iscollege` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicdetails`
--

INSERT INTO `academicdetails` (`ID`, `Percentage`, `PersonDetails_ID`, `Institution_ID`, `iscollege`) VALUES
(1, 70, 2, 1, 0),
(4, NULL, 25, NULL, 0),
(10, 85, 2, 4, 1),
(13, NULL, 27, NULL, 0),
(14, NULL, 27, NULL, 1),
(15, 50, 28, 8, 0),
(16, NULL, 28, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `academicreference`
--

CREATE TABLE `academicreference` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `PhoneNo` varchar(45) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Institution` varchar(45) DEFAULT NULL,
  `Person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicreference`
--

INSERT INTO `academicreference` (`ID`, `Name`, `PhoneNo`, `Email`, `Institution`, `Person_id`) VALUES
(1, 'abaaf', '', '', '', 2),
(2, NULL, NULL, NULL, NULL, 25),
(4, NULL, NULL, NULL, NULL, 27),
(5, NULL, NULL, NULL, NULL, 28);

-- --------------------------------------------------------

--
-- Table structure for table `assetsinfo`
--

CREATE TABLE `assetsinfo` (
  `ID` int(11) NOT NULL,
  `Amount` float DEFAULT NULL,
  `AssetType_ID` int(11) DEFAULT NULL,
  `FamilyDetails_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assetsinfo`
--

INSERT INTO `assetsinfo` (`ID`, `Amount`, `AssetType_ID`, `FamilyDetails_ID`) VALUES
(8, 0, 1, 5),
(9, 0, 2, 5),
(10, 780, 3, 5),
(11, 4400, 4, 5),
(16, 600, 1, 1),
(17, 4875, 2, 1),
(18, NULL, 1, 7),
(19, NULL, 2, 7),
(20, NULL, 3, 7),
(21, NULL, 4, 7),
(22, 0, 1, 8),
(23, 0, 2, 8),
(24, 0, 3, 8),
(25, 0, 4, 8);

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
(1, 'Plot/House'),
(2, 'Business'),
(3, 'Investments'),
(4, 'Vehicle');

-- --------------------------------------------------------

--
-- Table structure for table `expensesinfo`
--

CREATE TABLE `expensesinfo` (
  `ID` int(11) NOT NULL,
  `ExpenseType_ID` int(11) DEFAULT NULL,
  `FamilyDetails_ID` int(11) NOT NULL,
  `Amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expensesinfo`
--

INSERT INTO `expensesinfo` (`ID`, `ExpenseType_ID`, `FamilyDetails_ID`, `Amount`) VALUES
(16, 1, 5, 0),
(17, 2, 5, 0),
(18, 3, 5, 0),
(19, 4, 5, 0),
(20, 5, 5, 0),
(21, 6, 5, 0),
(22, 7, 5, 0),
(23, 8, 5, 0),
(32, 1, 7, NULL),
(33, 2, 7, NULL),
(34, 3, 7, NULL),
(35, 4, 7, NULL),
(36, 5, 7, NULL),
(37, 6, 7, NULL),
(38, 7, 7, NULL),
(39, 8, 7, NULL),
(40, 1, 8, 0),
(41, 2, 8, 0),
(42, 3, 8, 0),
(43, 4, 8, 0),
(44, 5, 8, 0),
(45, 6, 8, 0),
(46, 7, 8, 0),
(47, 8, 8, 0);

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
(1, 'Electricity'),
(2, 'Medical'),
(3, 'Groceries'),
(4, 'Gas'),
(5, 'Telephone'),
(6, 'Education'),
(7, 'Rent'),
(8, 'Miscellaneous');

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
  `CNIC` varchar(45) DEFAULT NULL,
  `Designation` varchar(45) DEFAULT NULL,
  `Company` varchar(100) DEFAULT NULL,
  `Person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `familydetails`
--

INSERT INTO `familydetails` (`ID`, `Income`, `NoOfSiblings`, `FName`, `LName`, `PhoneNo`, `CNIC`, `Designation`, `Company`, `Person_id`) VALUES
(1, 50000, 5, 'Jaffar', 'Haji', '090078601', '904545451004451', 'Owner', 'Jaffar Co.', 2),
(5, 50000, 45, 'Jareer', 'Arshad', '', '', '', '', 25),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27),
(8, 0, 0, '', '', '', '', '', '', 28);

--
-- Triggers `familydetails`
--
DELIMITER $$
CREATE TRIGGER `add_family` AFTER INSERT ON `familydetails` FOR EACH ROW BEGIN
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,1);
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,2);
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,3);
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,4);
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,5);
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,6);
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,7);
INSERT INTO `expensesinfo` (`FamilyDetails_id`, ExpenseType_ID)  VALUES (new.id,8);
INSERT INTO `assetsinfo` (`FamilyDetails_id`,AssetType_ID)  VALUES (new.id,1);
INSERT INTO `assetsinfo` (`FamilyDetails_id`,AssetType_ID)  VALUES (new.id,2);
INSERT INTO `assetsinfo` (`FamilyDetails_id`,AssetType_ID)  VALUES (new.id,3);
INSERT INTO `assetsinfo` (`FamilyDetails_id`,AssetType_ID)  VALUES (new.id,4);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Type` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`ID`, `Name`, `City`, `Type`) VALUES
(1, 'ABC School', 'Karachi', 'School'),
(2, 'XYZZ College', 'Larkana', 'College'),
(4, 'SKBZ', 'Karachi', 'College'),
(5, 'advmk', 'Karachi', 'School'),
(6, 'jab school', '', 'School'),
(7, 'ham', 'Karachi', 'College'),
(8, 'Fnjd', 'Karachi', 'School');

-- --------------------------------------------------------

--
-- Table structure for table `personalreference`
--

CREATE TABLE `personalreference` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `PhoneNo` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Relationship` varchar(100) DEFAULT NULL,
  `Person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalreference`
--

INSERT INTO `personalreference` (`ID`, `Name`, `PhoneNo`, `Email`, `Relationship`, `Person_id`) VALUES
(1, 'agd', 0, '', '', 2),
(2, NULL, NULL, NULL, NULL, 25),
(4, NULL, NULL, NULL, NULL, 27),
(5, NULL, NULL, NULL, NULL, 28);

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
  `Status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persondetails`
--

INSERT INTO `persondetails` (`ID`, `FName`, `LName`, `DateOfBirth`, `Email`, `CNIC`, `Phone`, `Address`, `City`, `District`, `Status`) VALUES
(2, 'Ali', 'Salim', '2000-01-01', 'abc', '90554512120', '80054587451', 'a12', 'Karachi', 'Sindh', 'Registered'),
(4, 'Danial', 'ak', '2000-01-01', 'root', '42000098754887', '3333454864', '', 'Karachi', 'Sindh', 'Registered'),
(25, 'Hammad', 'Ahmed', '2001-09-20', 'hammad@iba.edu.pk', '49000493489', '', '', 'Dadu', '', 'Registered'),
(27, NULL, NULL, NULL, 'waseem', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Ammar', 'Essa', '1995-06-07', 'smarty', '9007497945', '48755421', 'D23', 'Karachi', 'Sindh', 'Registered');

--
-- Triggers `persondetails`
--
DELIMITER $$
CREATE TRIGGER `add_Details` AFTER INSERT ON `persondetails` FOR EACH ROW BEGIN
INSERT INTO `familydetails` (`Person_id`)  VALUES (new.id);
INSERT INTO `academicdetails` (`Persondetails_id`,iscollege)  VALUES (new.id,0);
INSERT INTO `academicdetails` (`Persondetails_id`,iscollege)  VALUES (new.id,1);
INSERT INTO `academicreference` (`Person_id`)  VALUES (new.id);
INSERT INTO `personalreference` (`Person_id`)  VALUES (new.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_Student` AFTER DELETE ON `persondetails` FOR EACH ROW BEGIN
DELETE from familydetails WHERE person_id = old.id;
DELETE from academicdetails WHERE persondetails_id = old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(5) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `password`, `isadmin`) VALUES
(1, 'foo@foo.com', '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 1),
(2, 'abc', 'a9993e364706816aba3e25717850c26c9cd0d89d', 0),
(5, 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 0),
(31, 'root1', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 0),
(35, 'foo', '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 0),
(36, 'taha', '41237a505d939ae273056ba68a8b2c8bfcdcf46b', 0),
(41, 'hammad@iba.edu.pk', '08f26c07987bb6587fb165bc29ebde2d31eb6538', 0),
(42, 'birth@gmail.com', '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 0),
(45, 'waseem', 'a9993e364706816aba3e25717850c26c9cd0d89d', 0),
(46, 'smarty', '0beec7b5ea3f0fdbc95d0dd47f3c5bc275da8a33', 0);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `add_student` AFTER INSERT ON `users` FOR EACH ROW BEGIN
INSERT INTO `persondetails` (`Email`)  VALUES (new.email);
END
$$
DELIMITER ;

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
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Person_id` (`Person_id`),
  ADD UNIQUE KEY `Email` (`Email`);

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
  ADD PRIMARY KEY (`ID`,`Person_id`),
  ADD UNIQUE KEY `Person_id` (`Person_id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personalreference`
--
ALTER TABLE `personalreference`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Person_id` (`Person_id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `persondetails`
--
ALTER TABLE `persondetails`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `academicreference`
--
ALTER TABLE `academicreference`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `assetsinfo`
--
ALTER TABLE `assetsinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `assettype`
--
ALTER TABLE `assettype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `expensesinfo`
--
ALTER TABLE `expensesinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `expensetype`
--
ALTER TABLE `expensetype`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `familydetails`
--
ALTER TABLE `familydetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `personalreference`
--
ALTER TABLE `personalreference`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `persondetails`
--
ALTER TABLE `persondetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `academicdetails`
--
ALTER TABLE `academicdetails`
  ADD CONSTRAINT `fk_AcademicDetails_Institution1` FOREIGN KEY (`Institution_ID`) REFERENCES `institution` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_AcademicDetails_PersonDetails1` FOREIGN KEY (`PersonDetails_ID`) REFERENCES `persondetails` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `academicreference`
--
ALTER TABLE `academicreference`
  ADD CONSTRAINT `academicreference_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `persondetails` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `assetsinfo`
--
ALTER TABLE `assetsinfo`
  ADD CONSTRAINT `assetsinfo_ibfk_1` FOREIGN KEY (`AssetType_ID`) REFERENCES `assettype` (`ID`),
  ADD CONSTRAINT `assetsinfo_ibfk_2` FOREIGN KEY (`FamilyDetails_ID`) REFERENCES `familydetails` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `expensesinfo`
--
ALTER TABLE `expensesinfo`
  ADD CONSTRAINT `expensesinfo_ibfk_1` FOREIGN KEY (`ExpenseType_ID`) REFERENCES `expensetype` (`ID`),
  ADD CONSTRAINT `expensesinfo_ibfk_2` FOREIGN KEY (`FamilyDetails_ID`) REFERENCES `familydetails` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `familydetails`
--
ALTER TABLE `familydetails`
  ADD CONSTRAINT `familydetails_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `persondetails` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personalreference`
--
ALTER TABLE `personalreference`
  ADD CONSTRAINT `personalreference_ibfk_1` FOREIGN KEY (`Person_id`) REFERENCES `persondetails` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `persondetails`
--
ALTER TABLE `persondetails`
  ADD CONSTRAINT `persondetails_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`email`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
