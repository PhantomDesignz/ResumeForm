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

--
-- Dumping data for table `resumestep1`
--

INSERT INTO `resumestep1` (`step1_ID`, `step1_FirstName`, `step1_LastName`, `step1_Phone`, `step1_AltPhone`, `step1_Email`, `step1_Address`, `step1_AltAddress`, `step1_ProvState`, `step1_City`, `step1_Postal`, `step1_Positions`, `step1_Eligible`, `step1_PrevEmployed`) VALUES
(1, 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/P', 'https://github.com/P', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'NB', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'General Labourer ,Certified Trades ,Leadership ,Forestry ,https://github.com/PhantomDesignz/ResumeForm', 'yes', 'yes');

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

--
-- Dumping data for table `resumestep2`
--

INSERT INTO `resumestep2` (`step2_ID`, `step2_TempEmploy`, `step2_FullEmploy`, `step2_Weekends`, `step2_Evenings`, `step2_Overtime`, `step2_ShiftWork`) VALUES
(1, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');

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

--
-- Dumping data for table `resumestep3`
--

INSERT INTO `resumestep3` (`step3_ID`, `step3_School`, `step3_SchoolCity`, `step3_YearsCompleted`, `step3_Graduate`, `step3_YearGraduated`) VALUES
(1, 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'yes', 'https://github.com/PhantomDesignz/ResumeForm');

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

--
-- Dumping data for table `resumestep4`
--

INSERT INTO `resumestep4` (`step4_ID`, `step4_School`, `step4_SchoolCity`, `step4_YearsCompleted`, `step4_Graduate`, `step4_YearGraduated`, `step4_Diploma`, `step4_Field`) VALUES
(1, 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'yes', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm');

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
-- Dumping data for table `resumestep5`
--

INSERT INTO `resumestep5` (`step5_ID`, `step5_School`, `step5_SchoolCity`, `step5_YearsCompleted`, `step5_Certified`, `step5_YearGraduated`, `step5_Trade`) VALUES
(1, 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'yes', 'https://github.com/PhantomDesignz/ResumeForm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resumestep6`
--

CREATE TABLE `resumestep6` (
  `step6_ID` int(11) NOT NULL,
  `step6_Other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resumestep6`
--

INSERT INTO `resumestep6` (`step6_ID`, `step6_Other`) VALUES
(1, 'https://github.com/PhantomDesignz/ResumeForm');

-- --------------------------------------------------------

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

--
-- Dumping data for table `resumestep7`
--

INSERT INTO `resumestep7` (`step7_ID`, `step7_Employed`, `step7_ContactCurrent`, `step7_EmployerName`, `step7_Supervisor`, `step7_Phone`, `step7_BusinessType`, `step7_City`, `step7_Province`, `step7_Start`, `step7_End`, `step7_Duties`, `step7_LeavingReason`) VALUES
(1, 'yes', 'yes', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'NT', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm');

-- --------------------------------------------------------

--
-- Table structure for table `resumestep8`
--

CREATE TABLE `resumestep8` (
  `step8_ID` int(11) NOT NULL,
  `step8_Able` varchar(255) NOT NULL,
  `step8_Injuries` varchar(255) NOT NULL,
  `step8_AdditionalInfo` varchar(255) NOT NULL,
  `step8_HobbiesInterests` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resumestep8`
--

INSERT INTO `resumestep8` (`step8_ID`, `step8_Able`, `step8_Injuries`, `step8_AdditionalInfo`, `step8_HobbiesInterests`) VALUES
(1, 'yes', 'yes', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm');

-- --------------------------------------------------------

--
-- Table structure for table `resumestep9`
--

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

--
-- Dumping data for table `resumestep9`
--

INSERT INTO `resumestep9` (`step9_ID`, `step9_Name1`, `step9_Name2`, `step9_Name3`, `step9_Phone1`, `step9_Phone2`, `step9_Phone3`, `step9_Rel1`, `step9_Rel2`, `step9_Rel3`) VALUES
(1, 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm', 'https://github.com/PhantomDesignz/ResumeForm');

-- --------------------------------------------------------

--
-- Table structure for table `resumestep10`
--

CREATE TABLE `resumestep10` (
  `step10_ID` int(11) NOT NULL,
  `step10_Name` varchar(255) NOT NULL,
  `step10_Size` varchar(255) NOT NULL,
  `step10_Type` varchar(255) NOT NULL,
  `step10_Content` varchar(255) NOT NULL
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
-- Indexes for table `resumestep6`
--
ALTER TABLE `resumestep6`
  ADD PRIMARY KEY (`step6_ID`);

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

--
-- AUTO_INCREMENT for table `resumestep1`
--
ALTER TABLE `resumestep1`
  MODIFY `step1_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep2`
--
ALTER TABLE `resumestep2`
  MODIFY `step2_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep3`
--
ALTER TABLE `resumestep3`
  MODIFY `step3_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep4`
--
ALTER TABLE `resumestep4`
  MODIFY `step4_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep5`
--
ALTER TABLE `resumestep5`
  MODIFY `step5_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep6`
--
ALTER TABLE `resumestep6`
  MODIFY `step6_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `resumestep7`
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

--
-- Constraints for table `resumestep6`
--
ALTER TABLE `resumestep6`
  ADD CONSTRAINT `resumestep6_ibfk_1` FOREIGN KEY (`step6_ID`) REFERENCES `resumestep1` (`step1_ID`);

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
