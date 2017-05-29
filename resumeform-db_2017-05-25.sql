-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2017 at 03:23 PM
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

--
-- Table structure for table `resumestep7`
--

CREATE TABLE `resumestep7` (
  `step7_ID` int(11) NOT NULL,
  `step7_Employed` varchar(255) NOT NULL,
  `step7_ContactCurrent` varchar(255) NOT NULL,
  `step7_EmployerName` varchar(255) NOT NULL,
  `step7_Supervisor` varchar(255) NOT NULL,
  `step7_Phone` varchar(255) NOT NULL,
  `step7_BusinessType` varchar(255) NOT NULL,
  `step7_City` varchar(255) NOT NULL,
  `step7_Province` varchar(255) NOT NULL,
  `step7_Start` varchar(255) NOT NULL,
  `step7_End` varchar(255) NOT NULL,
  `step7_Duties` varchar(255) NOT NULL,
  `step7_LeavingReason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `resumestep8` (
  `step8_ID` int(11) NOT NULL,
  `step8_Able` varchar(255) NOT NULL,
  `step8_Injuries` varchar(255) NOT NULL,
  `step8_AdditionalInfo` varchar(255) NOT NULL,
  `step8_HobbiesInterests` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `resumestep9` (
  `step9_ID` int(11) NOT NULL,
  `step9_Name1` varchar(255) NOT NULL,
  `step9_Name2` varchar(255) NOT NULL,
  `step9_Name3` varchar(255) NOT NULL,
  `step9_Phone1` varchar(255) NOT NULL,
  `step9_Phone2` varchar(255) NOT NULL,
  `step9_Phone3` varchar(255) NOT NULL,
  `step9_Rel1` varchar(255) NOT NULL,
  `step9_Rel2` varchar(255) NOT NULL,
  `step9_Rel3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `resumestep10` (
  `step10_ID` int(11) NOT NULL,
  `step10_Name` varchar(255) NOT NULL,
  `step10_Size` varchar(255) NOT NULL,
  `step10_Type` varchar(255) NOT NULL,
  `step10_Content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `resumestep7`
--
ALTER TABLE `resumestep7`
  ADD PRIMARY KEY (`step7_ID`);

--
-- Indexes for table `resumestep8`
--
ALTER TABLE `resumestep8`
  ADD PRIMARY KEY (`step8_ID`);

--
-- Indexes for table `resumestep9`
--
ALTER TABLE `resumestep9`
  ADD PRIMARY KEY (`step9_ID`);

--
-- Indexes for table `resumestep10`
--
ALTER TABLE `resumestep10`
  ADD PRIMARY KEY (`step10_ID`);

--
-- AUTO_INCREMENT for dumped tables
--
ALTER TABLE `resumestep7`
  MODIFY `step7_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep8`
--
ALTER TABLE `resumestep8`
  MODIFY `step8_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep9`
--
ALTER TABLE `resumestep9`
  MODIFY `step9_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep10`
--
ALTER TABLE `resumestep10`
  MODIFY `step10_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--
--
-- Constraints for table `resumestep7`
--
ALTER TABLE `resumestep7`
  ADD CONSTRAINT `resumestep7_ibfk_1` FOREIGN KEY (`step7_ID`) REFERENCES `resumestep1` (`step1_ID`);

--
-- Constraints for table `resumestep8`
--
ALTER TABLE `resumestep8`
  ADD CONSTRAINT `resumestep8_ibfk_1` FOREIGN KEY (`step8_ID`) REFERENCES `resumestep1` (`step1_ID`);

--
-- Constraints for table `resumestep9`
--
ALTER TABLE `resumestep9`
  ADD CONSTRAINT `resumestep9_ibfk_1` FOREIGN KEY (`step9_ID`) REFERENCES `resumestep1` (`step1_ID`);

--
-- Constraints for table `resumestep10`
--
ALTER TABLE `resumestep10`
  ADD CONSTRAINT `resumestep10_ibfk_1` FOREIGN KEY (`step10_ID`) REFERENCES `resumestep1` (`step1_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
