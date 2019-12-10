-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 07:27 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaintID` int(11) NOT NULL,
  `studentID` varchar(20) NOT NULL,
  `studentcomplaint` varchar(250) NOT NULL,
  `complaindate` date NOT NULL,
  `responsegot` varchar(100) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaintID`, `studentID`, `studentcomplaint`, `complaindate`, `responsegot`) VALUES
(1, '1', 'Â Missing marks', '2019-11-09', 'Yes'),
(2, '1', 'Â Missing marks', '2019-11-09', 'NO'),
(3, '2', 'Â hae my masrks are missing', '2019-11-28', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `fadmin`
--

CREATE TABLE `fadmin` (
  `fadminID` int(20) NOT NULL,
  `fadminfirstname` varchar(20) NOT NULL,
  `fadminlastname` varchar(20) NOT NULL,
  `fadminemail` varchar(50) NOT NULL,
  `fadmintelephone` varchar(15) NOT NULL,
  `fadminpassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fadmin`
--

INSERT INTO `fadmin` (`fadminID`, `fadminfirstname`, `fadminlastname`, `fadminemail`, `fadmintelephone`, `fadminpassword`) VALUES
(9, 'Kakande', 'Stevo', 'stevenkakande6@gmail.com', '0704373515', '355157807105f4ca415fe251ae7313ee'),
(10, 'Suzan', 'NAMUGENYI', 'suejemih@gmail.com', '0705968524', '2f7b52aacfbf6f44e13d27656ecb1f59'),
(15, 'Becky', 'Ttendo', 'ttendobecky@gmail.com', '0705936481', '202cb962ac59075b964b07152d234b70'),
(16, 'Genesis', 'Mukisa', 'gm@gmail.com', '0756701941', '698d51a19d8a121ce581499d7b701668'),
(17, 'bbb', 'ttendo', 'k@gmail.com', '0412586956', 'd3d9446802a44259755d38e6d163e820');

-- --------------------------------------------------------

--
-- Table structure for table `resolutions`
--

CREATE TABLE `resolutions` (
  `resolutionID` int(11) NOT NULL,
  `complaintID` int(11) NOT NULL,
  `complaintresolution` varchar(150) NOT NULL,
  `resolutiondate` date NOT NULL,
  `fadminID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resolutions`
--

INSERT INTO `resolutions` (`resolutionID`, `complaintID`, `complaintresolution`, `resolutiondate`, `fadminID`) VALUES
(1, 1, '', '2019-11-09', 16),
(2, 1, 'Â visit the exam coordinator', '2019-11-09', 16);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(20) NOT NULL,
  `studentfirstname` varchar(20) NOT NULL,
  `studentlastname` varchar(20) NOT NULL,
  `studentemail` varchar(50) NOT NULL,
  `regNo` varchar(25) NOT NULL,
  `studenttelephone` varchar(15) NOT NULL,
  `studentpassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `studentfirstname`, `studentlastname`, `studentemail`, `regNo`, `studenttelephone`, `studentpassword`) VALUES
(1, 'Beckyx', 'Ttendo', 'bex@gmail.com', '546464', '0705936481', 'bcbe3365e6ac95ea2c0343a2395834dd'),
(2, 'fff', 'fff', 'f@gmail.com', '46566', '0123589647', 'b4b147bc522828731f1a016bfa72c073');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaintID`);

--
-- Indexes for table `fadmin`
--
ALTER TABLE `fadmin`
  ADD PRIMARY KEY (`fadminID`),
  ADD UNIQUE KEY `fadminemail` (`fadminemail`),
  ADD UNIQUE KEY `fadmintelephone` (`fadmintelephone`);

--
-- Indexes for table `resolutions`
--
ALTER TABLE `resolutions`
  ADD PRIMARY KEY (`resolutionID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`),
  ADD UNIQUE KEY `studentpassword` (`studentpassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaintID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fadmin`
--
ALTER TABLE `fadmin`
  MODIFY `fadminID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `resolutions`
--
ALTER TABLE `resolutions`
  MODIFY `resolutionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
