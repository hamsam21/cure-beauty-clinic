-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 02:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cure beauty clinic2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `E_mail` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `name`, `E_mail`, `password`, `phone`, `city`) VALUES
(1, 'hamsa', 'hamsa@gmail.com', '123', '01093883142', 'egypt');

-- --------------------------------------------------------

--
-- Table structure for table `beautycenter`
--

CREATE TABLE `beautycenter` (
  `code_beauty` int(11) NOT NULL,
  `selected` varchar(30) NOT NULL,
  `day` varchar(15) NOT NULL,
  `hour` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `code_clinic` int(11) NOT NULL,
  `clinic` varchar(50) NOT NULL,
  `day` varchar(15) NOT NULL,
  `hour` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `user_id_clinic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`code_clinic`, `clinic`, `day`, `hour`, `phone`, `mail`, `user_id_clinic`) VALUES
(1, 'Dental', 'Monday', '5 pm', '01022318383', 'koky@yahoo.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `code` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `complain` text NOT NULL,
  `userID_FKC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `femalelab`
--

CREATE TABLE `femalelab` (
  `code_lab` int(11) NOT NULL,
  `lab` varchar(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `hour` varchar(11) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `femalelab`
--

INSERT INTO `femalelab` (`code_lab`, `lab`, `day`, `hour`, `phone`, `mail`, `user_ID`) VALUES
(1, '0', '0', '7', '1093883142', '0', 0),
(2, '0', '0', '7', '1093883142', '0', 0),
(3, 'Echo', 'Tuesday', '7 pm', '01093883142', 'mohamed@gmail.com', 0),
(4, 'Echo', 'Monday', '5 pm', '01234567', 'ha@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `code` int(11) NOT NULL,
  `E_mail` varchar(60) NOT NULL,
  `proposal` text NOT NULL,
  `userID_FKP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spagym`
--

CREATE TABLE `spagym` (
  `code_sg` int(11) NOT NULL,
  `selected` varchar(60) NOT NULL,
  `day` varchar(15) NOT NULL,
  `hour` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mail` varchar(70) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spagym`
--

INSERT INTO `spagym` (`code_sg`, `selected`, `day`, `hour`, `phone`, `mail`, `userID`) VALUES
(1, 'zomba', 'Tuesday', '7 pm', '01069718716', 'khaw5aty@gmail.com', 0),
(2, 'zomba', 'Tuesday', '7 pm', '01093883142', 'hamsa@gmail.com', 0),
(3, 'zomba', 'Monday', '9 pm', '01093883142', 'hamsa@gmail.com', 0),
(4, 'zomba', 'Monday', '9 pm', '01093883142', 'hamsa@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `E_mail` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `name`, `E_mail`, `password`, `phone`, `city`) VALUES
(1, 'hamsa', 'hamsa@gmail.com', '123', '01093883142', 'egypt'),
(2, 'khloud mustafa', 'khaw5aty@gmail.com', 'hamsa', '01069718716', 'egypt'),
(3, 'koky', 'koky@yahoo.com', '1234567890', '01022318383', 'cairo'),
(4, 'naghammuhammed', 'naghammuhammed@yahoo.com', 'nonanagham', '01095515327', 'helioplis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `beautycenter`
--
ALTER TABLE `beautycenter`
  ADD PRIMARY KEY (`code_beauty`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
  ADD PRIMARY KEY (`code_clinic`),
  ADD KEY `user_id_clinic` (`user_id_clinic`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`code`),
  ADD KEY `userID_FKC` (`userID_FKC`);

--
-- Indexes for table `femalelab`
--
ALTER TABLE `femalelab`
  ADD PRIMARY KEY (`code_lab`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`code`),
  ADD KEY `userID_FKP` (`userID_FKP`);

--
-- Indexes for table `spagym`
--
ALTER TABLE `spagym`
  ADD PRIMARY KEY (`code_sg`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `beautycenter`
--
ALTER TABLE `beautycenter`
  MODIFY `code_beauty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
  MODIFY `code_clinic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `femalelab`
--
ALTER TABLE `femalelab`
  MODIFY `code_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `spagym`
--
ALTER TABLE `spagym`
  MODIFY `code_sg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beautycenter`
--
ALTER TABLE `beautycenter`
  ADD CONSTRAINT `iduser` FOREIGN KEY (`iduser`) REFERENCES `users` (`user_ID`);

--
-- Constraints for table `clinics`
--
ALTER TABLE `clinics`
  ADD CONSTRAINT `user_id_clinic` FOREIGN KEY (`user_id_clinic`) REFERENCES `users` (`user_ID`);

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `userID_FKC` FOREIGN KEY (`userID_FKC`) REFERENCES `users` (`user_ID`);

--
-- Constraints for table `femalelab`
--
ALTER TABLE `femalelab`
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_ID`);

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `userID_FKP` FOREIGN KEY (`userID_FKP`) REFERENCES `users` (`user_ID`);

--
-- Constraints for table `spagym`
--
ALTER TABLE `spagym`
  ADD CONSTRAINT `userID` FOREIGN KEY (`userID`) REFERENCES `users` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
