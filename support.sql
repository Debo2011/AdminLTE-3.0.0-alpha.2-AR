-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 10:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `support`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `AssetID` int(11) NOT NULL,
  `AssetName` varchar(250) NOT NULL,
  `AssetTypeID` int(10) NOT NULL,
  `AssetDec` varchar(500) NOT NULL,
  `UserID` int(10) NOT NULL,
  `RegisterDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`AssetID`, `AssetName`, `AssetTypeID`, `AssetDec`, `UserID`, `RegisterDate`) VALUES
(1, 'Test', 1, 'Test', 1, '2023-01-14'),
(2, 'جهاز حاسب', 1, 'جهاز حاسب', 1, '2023-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `assettypes`
--

CREATE TABLE `assettypes` (
  `AssetTypeID` int(11) NOT NULL,
  `AssetTypeName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assettypes`
--

INSERT INTO `assettypes` (`AssetTypeID`, `AssetTypeName`) VALUES
(1, 'جهاز بصمة 1');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `AttachmentID` int(11) NOT NULL,
  `attachmentName` varchar(500) NOT NULL,
  `attachmentURL` varchar(1000) NOT NULL,
  `OrderID` int(10) NOT NULL,
  `UserID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`AttachmentID`, `attachmentName`, `attachmentURL`, `OrderID`, `UserID`) VALUES
(1, 'الكهرياء 1.PNG', 'uploads/الكهرياء 1.PNG', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `CollegeID` int(11) NOT NULL,
  `CollegeName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`CollegeID`, `CollegeName`) VALUES
(1, 'الكلية 1'),
(2, 'الكلية 2');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `DescriptionID` int(11) NOT NULL,
  `DescriptionName` varchar(10000) NOT NULL,
  `UserID` varchar(50) NOT NULL,
  `OrderID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`DescriptionID`, `DescriptionName`, `UserID`, `OrderID`) VALUES
(1, 'Test', ' admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderTypeID` int(10) NOT NULL,
  `UserID` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `EngineerID` varchar(50) NOT NULL,
  `StatusID` int(10) NOT NULL,
  `RegisterDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderTypeID`, `UserID`, `Description`, `EngineerID`, `StatusID`, `RegisterDate`) VALUES
(1, 1, 'admin', 'Test', '', 1, '2023-01-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatues`
--

CREATE TABLE `orderstatues` (
  `OrderStatusID` int(11) NOT NULL,
  `OrderStatusName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordertypes`
--

CREATE TABLE `ordertypes` (
  `OrderTypeID` int(11) NOT NULL,
  `OrderTypeName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertypes`
--

INSERT INTO `ordertypes` (`OrderTypeID`, `OrderTypeName`) VALUES
(1, 'صيانة لابتوب 1');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `SectionID` int(11) NOT NULL,
  `SectionName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`SectionID`, `SectionName`) VALUES
(1, 'الإدارة العامة للتحول الرقمي 3'),
(2, 'صيانة لابتوب');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FullName` varchar(250) DEFAULT NULL,
  `CollegeID` int(10) NOT NULL,
  `SectionID` int(10) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `Room` varchar(100) NOT NULL,
  `PhoneNo` varchar(12) NOT NULL,
  `UserTypeID` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `FullName`, `CollegeID`, `SectionID`, `floor`, `Room`, `PhoneNo`, `UserTypeID`, `Email`) VALUES
(1, 'admin', '123', 'admin', 1, 1, 'الطابق 1', 'الغرفة 404', '0568989679', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `usertypes`
--

CREATE TABLE `usertypes` (
  `UserTypeID` int(11) NOT NULL,
  `UserTypeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usertypes`
--

INSERT INTO `usertypes` (`UserTypeID`, `UserTypeName`) VALUES
(1, 'مدير نظام'),
(2, 'مهندس'),
(3, 'موظف');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`AssetID`);

--
-- Indexes for table `assettypes`
--
ALTER TABLE `assettypes`
  ADD PRIMARY KEY (`AssetTypeID`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`AttachmentID`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`CollegeID`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`DescriptionID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `orderstatues`
--
ALTER TABLE `orderstatues`
  ADD PRIMARY KEY (`OrderStatusID`);

--
-- Indexes for table `ordertypes`
--
ALTER TABLE `ordertypes`
  ADD PRIMARY KEY (`OrderTypeID`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `AssetID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assettypes`
--
ALTER TABLE `assettypes`
  MODIFY `AssetTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `AttachmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `CollegeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `DescriptionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderstatues`
--
ALTER TABLE `orderstatues`
  MODIFY `OrderStatusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordertypes`
--
ALTER TABLE `ordertypes`
  MODIFY `OrderTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `SectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `UserTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
