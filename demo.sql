-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 12, 2021 at 09:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('admin1', 'pass'),
('admin2', 'zxcvb'),
('admin3', 'poiuy'),
('admin4', 'jhgf765'),
('admin5', 'nbvc0192');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Query` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Query`) VALUES
('Jovina', 'jovina123@gmail.com', 'test test test test'),
('Arun', 'arun1212@gmail.com', 'question question'),
('Jovina', 'jovina123@gmail.com', 'hi hi hi'),
('Ashok', 'ashok678@yahoo.com', 'test'),
('Jovina', 'jovina123@gmail.com', 'test'),
('Jovina', 'jovina123@gmail.com', 'test'),
('Jovina', 'sudhajeniter@gmail.com', 'hello'),
('Jovina', 'jovina123@gmail.com', 'hi hi');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`Name`, `Email`, `Contact`, `Address`, `Amount`, `Purpose`) VALUES
('Ram', 'ramgosh@yahoo.com', '9884776835', 'Sahana apts, Gandhinagar, Chennai - 600367', '14000.00', 'Personal Loan'),
('Arun', 'arun123@gmail.com', '9008871231', 'Bharati apts, Rainbow Colony, Chennai - 6000123', '17896.00', 'Vehicle Loan'),
('Heather', 'heatherfeather_123@gmail.com', '9176676435', '56 Sita apts, Thiruvanmayur, Chennai - 600987', '9707.00', 'Personal Loan'),
('Arun', 'arun123@gmail.com', '9008871231', 'Bharati apts, Rainbow Colony, Chennai - 6000123', '10.00', 'Vehicle Loan');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Account` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`Username`, `Password`, `Account`, `Email`, `Contact`, `Address`, `Amount`) VALUES
('Sudha', 'pqow4532', '012897', 'sudhajeniter@gmail.com', '7550176250', 'A5 Lazer apts, Adyar, Chennai - 600021', '230007.00'),
('Ashok', 'jsakdjh', '123456', 'ashok678@yahoo.com', '909876543', '4\r\n\r\nHargreaves Close', '7196349.00'),
('Wallace', 'usdi8409', '205811', 'wallcall99@hotmail.com', '7661287360', 'Henry apts, Sagaya Road, Adyar, Chennai - 600345', '30000.00'),
('Yogesh', 'ha89032', '287645', 'yo_boiyogesh@hotmail.com', '9008763451', 'Pillayar mansion, Vellachery, Chennai - 600045', '70000.00'),
('Jovina', 'top123', '300456', 'jovina123@gmail.com', '9261721392', '4\r\n\r\nHargreaves Close', '40000.00'),
('Prince', 'bot5039', '304927', 'p_4502@yahoo.com', '7338854956', 'Indigo Illam, AR Road, Tirunelveli - 700128', '28934.00'),
('Arun', 'abc123', '350678', 'arun123@gmail.com', '9008871231', 'Bharati apts, Rainbow Colony, Chennai - 6000123', '116.00'),
('Sandhya', 'erci9374', '384019', 'sand9901@hotmail.com', '9175565324', 'Resinberg Villas, Erkad - 700234', '40023.00'),
('Ram', 'qwerty', '421609', 'ramgosh@yahoo.com', '9884776835', 'Sahana apts, Gandhinagar, Chennai - 600367', '5184.00'),
('Josh', 'poll123', '721546', 'joshboss21@gmail.com', '9120345768', 'Plymoth villas, !6 NGOA colony, Madurai - 200184', '79816963.00'),
('Abishek', 'oqwiw903823', '982393', 'abhi6712@yahoo.com', '7550912538', 'Mani mansion, Rainbow Colony, Tirichi - 400241', '50000.00'),
('Heather', 'dhuls294', '987234', 'heatherfeather_123@gmail.com', '9176676435', '56 Sita apts, Thiruvanmayur, Chennai - 600987', '8194863.00');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Fromuser` varchar(100) NOT NULL,
  `Touser` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Fromuser`, `Touser`, `Date`, `Amount`) VALUES
('Ram', 'Arun', 'July 7, 2021, 1:30 pm', '22.00'),
('Josh', 'Ram', 'July 7, 2021, 5:42 pm', '5000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`Account`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
