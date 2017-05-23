-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2017 at 03:07 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resumeform`
--

-- --------------------------------------------------------

--
-- Table structure for table `resumestep1`
--

CREATE TABLE `resumestep1` (
  `step1_ID` int(11) NOT NULL,
  `step1_FirstName` varchar(60) NOT NULL,
  `step1_LastName` varchar(60) NOT NULL,
  `step1_Phone` varchar(20) NOT NULL,
  `step1_AltPhone` varchar(20) NOT NULL,
  `step1_Email` varchar(100) NOT NULL,
  `step1_Address` varchar(255) NOT NULL,
  `step1_AltAddress` varchar(255) NOT NULL,
  `step1_ProvState` varchar(255) NOT NULL,
  `step1_City` varchar(255) NOT NULL,
  `step1_Postal` varchar(255) NOT NULL,
  `step1_Positions` varchar(255) NOT NULL,
  `step1_Eligible` varchar(255) NOT NULL,
  `step1_PrevEmployed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resumestep2`
--

CREATE TABLE `resumestep2` (
  `step2_ID` int(11) NOT NULL,
  `step2_TempEmploy` varchar(10) NOT NULL,
  `step2_FullEmploy` varchar(10) NOT NULL,
  `step2_Weekends` varchar(10) NOT NULL,
  `step2_Evenings` varchar(10) NOT NULL,
  `step2_Overtime` varchar(10) NOT NULL,
  `step2_ShiftWork` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resumestep3`
--

CREATE TABLE `resumestep3` (
  `step3_ID` int(11) NOT NULL,
  `step3_School` varchar(255) NOT NULL,
  `step3_SchoolCity` varchar(255) NOT NULL,
  `step3_YearsCompleted` varchar(255) NOT NULL,
  `step3_Graduate` varchar(255) NOT NULL,
  `step3_YearGraduated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resumestep4`
--

CREATE TABLE `resumestep4` (
  `step4_ID` int(11) NOT NULL,
  `step4_School` varchar(255) NOT NULL,
  `step4_SchoolCity` varchar(255) NOT NULL,
  `step4_YearsCompleted` varchar(255) NOT NULL,
  `step4_Graduate` varchar(255) NOT NULL,
  `step4_YearGraduated` varchar(255) NOT NULL,
  `step4_Diploma` varchar(255) NOT NULL,
  `step4_Field` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `resumestep5`
--

CREATE TABLE `resumestep5` (
  `step5_ID` int(11) NOT NULL,
  `step5_School` varchar(255) NOT NULL,
  `step5_SchoolCity` varchar(255) NOT NULL,
  `step5_YearsCompleted` varchar(255) NOT NULL,
  `step5_Certified` varchar(255) NOT NULL,
  `step5_YearGraduated` varchar(255) NOT NULL,
  `step5_Trade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resumestep1`
--
ALTER TABLE `resumestep1`
  ADD PRIMARY KEY (`step1_ID`);

--
-- Indexes for table `resumestep2`
--
ALTER TABLE `resumestep2`
  ADD PRIMARY KEY (`step2_ID`);

--
-- Indexes for table `resumestep3`
--
ALTER TABLE `resumestep3`
  ADD PRIMARY KEY (`step3_ID`);

--
-- Indexes for table `resumestep4`
--
ALTER TABLE `resumestep4`
  ADD PRIMARY KEY (`step4_ID`);

--
-- Indexes for table `resumestep5`
--
ALTER TABLE `resumestep5`
  ADD PRIMARY KEY (`step5_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resumestep1`
--
ALTER TABLE `resumestep1`
  MODIFY `step1_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resumestep2`
--
ALTER TABLE `resumestep2`
  MODIFY `step2_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resumestep3`
--
ALTER TABLE `resumestep3`
  MODIFY `step3_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resumestep4`
--
ALTER TABLE `resumestep4`
  MODIFY `step4_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resumestep5`
--
ALTER TABLE `resumestep5`
  MODIFY `step5_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `resumestep2`
--
ALTER TABLE `resumestep2`
  ADD CONSTRAINT `resumestep2_ibfk_1` FOREIGN KEY (`step2_ID`) REFERENCES `resumestep1` (`step1_ID`);

--
-- Constraints for table `resumestep3`
--
ALTER TABLE `resumestep3`
  ADD CONSTRAINT `resumestep3_ibfk_1` FOREIGN KEY (`step3_ID`) REFERENCES `resumestep1` (`step1_ID`);

--
-- Constraints for table `resumestep4`
--
ALTER TABLE `resumestep4`
  ADD CONSTRAINT `resumestep4_ibfk_1` FOREIGN KEY (`step4_ID`) REFERENCES `resumestep1` (`step1_ID`);

--
-- Constraints for table `resumestep5`
--
ALTER TABLE `resumestep5`
  ADD CONSTRAINT `resumestep5_ibfk_1` FOREIGN KEY (`step5_ID`) REFERENCES `resumestep1` (`step1_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
