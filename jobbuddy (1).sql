-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 08:38 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobbuddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `comName` varchar(100) NOT NULL,
  `ComRegID` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  `contact_No` varchar(13) NOT NULL,
  `email_COM` varchar(100) NOT NULL,
  `ComAddress` varchar(150) NOT NULL,
  `dir_Designation` varchar(20) NOT NULL,
  `passwordCom` varchar(100) NOT NULL,
  `dir_firstName` varchar(50) NOT NULL,
  `dir_lastName` varchar(80) NOT NULL,
  `dir_fullName` varchar(80) NOT NULL,
  `dir_initialName` varchar(80) NOT NULL,
  `dir_NIC` varchar(13) NOT NULL,
  `certificete` longblob NOT NULL,
  `com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`comName`, `ComRegID`, `district`, `contact_No`, `email_COM`, `ComAddress`, `dir_Designation`, `passwordCom`, `dir_firstName`, `dir_lastName`, `dir_fullName`, `dir_initialName`, `dir_NIC`, `certificete`, `com`) VALUES
('Acceeds - Kelaniya', 'KL/12345', 'Gampaha', '0785451254', 'lalla@accedd.com', '12,Kelaniya', 'Mrs.', '9e5ca6b0ffb417997ffb844c76f9c24bbc20fe88', 'Apoorwama', 'Illanganthilake', 'ILLANGANTHILAKE A.', 'ILLANGANTHILAKE A.V.', '975456444V', 0x31202832292e6a706567, 0),
('Jai Holdings', 'TL-3452', 'Colombo', '0785451254', 'lalla@accedd.com', 'Wewalduwa Rd,Kelaniya', 'Mr.', '2db4c1811f424582a90f8d7ee77995cf018d9443', 'Apoorwama', 'Illanganthilake', 'ILLANGANTHILAKE A.', 'ILLANGANTHILAKE A.V.', '962041264V', 0x312e6a706567, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `designationStu` varchar(12) NOT NULL,
  `firstNameStu` varchar(100) NOT NULL,
  `lastNameStu` varchar(200) NOT NULL,
  `fullNameStu` varchar(300) NOT NULL,
  `initialNameStu` varchar(300) NOT NULL,
  `EmailStu` varchar(50) NOT NULL,
  `passwordStu` varchar(50) NOT NULL,
  `NICStu` varchar(12) NOT NULL,
  `DOBStu` date NOT NULL,
  `genderStu` varchar(10) NOT NULL,
  `civilStatusStu` varchar(10) NOT NULL,
  `addressStu` varchar(200) NOT NULL,
  `districtStu` varchar(20) NOT NULL,
  `contactNoStu` varchar(12) NOT NULL,
  `eduLevelStu` varchar(20) NOT NULL,
  `softCopy` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`designationStu`, `firstNameStu`, `lastNameStu`, `fullNameStu`, `initialNameStu`, `EmailStu`, `passwordStu`, `NICStu`, `DOBStu`, `genderStu`, `civilStatusStu`, `addressStu`, `districtStu`, `contactNoStu`, `eduLevelStu`, `softCopy`) VALUES
('Mr.', 'Pasindu', 'Rathnasiri', 'PASINDU RATHNASIRI', 'P.RATHNASIRI', 'pasindupws@gmail.com', 'ac96fe16c06c87a2e3ce0ff14d1e0ae112ef8122', '962041264V', '1996-07-22', 'Male', 'Single', '273/C,Amupitiya,Imbulpe,Balangoda', 'Rathnapura', '+94717478559', 'Degree', 0x416e757261646861707572612e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `vtcenters`
--

CREATE TABLE `vtcenters` (
  `ID` int(5) NOT NULL,
  `vtcName` varchar(150) NOT NULL,
  `vtcRegID` varchar(50) NOT NULL,
  `district` varchar(30) NOT NULL,
  `contact_No` varchar(12) NOT NULL,
  `vtc_Email` varchar(100) NOT NULL,
  `vtcAddress` varchar(150) NOT NULL,
  `dir_Designation` varchar(10) NOT NULL,
  `passwordVtc` varchar(80) NOT NULL,
  `dir_firstName` varchar(120) NOT NULL,
  `dir_lastName` varchar(100) NOT NULL,
  `dir_fullName` varchar(100) NOT NULL,
  `dir_initialName` varchar(100) NOT NULL,
  `dir_NIC` varchar(13) NOT NULL,
  `certificete` longblob NOT NULL,
  `courses` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vtcenters`
--

INSERT INTO `vtcenters` (`ID`, `vtcName`, `vtcRegID`, `district`, `contact_No`, `vtc_Email`, `vtcAddress`, `dir_Designation`, `passwordVtc`, `dir_firstName`, `dir_lastName`, `dir_fullName`, `dir_initialName`, `dir_NIC`, `certificete`, `courses`) VALUES
(0, 'VTA- Rathnapura', '45ABCD', 'Galle', '0785451254', 'vtarathnapura@gov.lk', 'No1,Colombo Rd, Rathnapura', 'Mr.', '8cb2237d0679ca88db6464eac60da96345513964', 'Anantha', 'Illanganthilake', 'ILLANGANTHILAKE A.', 'ILLANGANTHILAKE A.V.', '965214541V', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
