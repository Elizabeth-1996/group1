-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 03:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `airportid` int(10) NOT NULL,
  `airportname` varchar(25) NOT NULL,
  `abrv` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `tzone` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`airportid`, `airportname`, `abrv`, `city`, `state`, `zipcode`, `tzone`) VALUES
(1, 'International airport', 'TVM', 'TRIVANDRUM', 'KEARLA', '0471', '14:02:00'),
(2, 'International airport', 'TVM', 'TRIVANDRUM', 'KEARLA', '0471', '15:05:00'),
(3, 'International airport', 'AXEN', 'TRIVANDRUM', 'KEARLA', '0471', '15:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `flightdetails`
--

CREATE TABLE `flightdetails` (
  `flid` int(10) NOT NULL,
  `airline` varchar(25) NOT NULL,
  `fl_number` varchar(10) NOT NULL,
  `departure` varchar(25) NOT NULL,
  `dep_date` date NOT NULL,
  `dep_time` time NOT NULL,
  `destination` varchar(25) NOT NULL,
  `dest_date` date NOT NULL,
  `dest_time` time NOT NULL,
  `btseats` int(5) NOT NULL,
  `ftseats` int(5) NOT NULL,
  `etseats` int(5) NOT NULL,
  `baseat` int(5) NOT NULL,
  `faseat` int(5) NOT NULL,
  `easeat` int(5) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `seatsa` int(15) NOT NULL,
  `bcost` int(50) NOT NULL,
  `fcost` int(50) NOT NULL,
  `ecost` int(50) NOT NULL,
  `bccost` int(50) NOT NULL,
  `fccost` int(50) NOT NULL,
  `eccost` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flightdetails`
--

INSERT INTO `flightdetails` (`flid`, `airline`, `fl_number`, `departure`, `dep_date`, `dep_time`, `destination`, `dest_date`, `dest_time`, `btseats`, `ftseats`, `etseats`, `baseat`, `faseat`, `easeat`, `cost`, `seatsa`, `bcost`, `fcost`, `ecost`, `bccost`, `fccost`, `eccost`) VALUES
(1, 'Emirates', 'SA2', 'TRIVANDRUM', '2021-02-12', '17:54:00', 'KANNUR', '2021-02-12', '17:56:00', 200, 0, 0, 43, 0, 0, '5000', 50, 200, 300, 100, 100, 200, 50),
(2, 'Indigo', 'SA2', 'TRIVANDRUM', '2021-02-27', '10:57:00', 'KOCHI', '2021-02-27', '13:01:00', 60, 22, 22, 32, 66, 49, '5000', 149, 500, 600, 400, 300, 400, 200),
(3, 'Jet Airways', 'SA2', 'TRIVANDRUM', '2021-02-04', '19:18:00', 'KOZHIKODE', '2021-02-25', '22:20:00', 60, 22, 22, 33, 66, 26, '5000', 125, 1000, 800, 600, 800, 600, 400);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `utype` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `utype`) VALUES
(1, 'b@gmail.com', '$2y$10$2GRL.DijRbkOm1HEqJ5AgOj0hPICgG63Gvqz7QtoMLvypR7R9Uk/i', '1'),
(2, 'ghgh@gmail.com', '$2y$10$oOx8CdFx6Q8LCdml4QIO2unM70p9Mn2tEHLCtgbTm6NN4NCSgFpCW', '1'),
(3, 'sunu@gmail.com', '$2y$10$IbCrz/2v91cNEvnZzXUl1OBPs3RN9/qD4Jd7vcnG/TQsQkrCv79/C', '1'),
(4, 'sunu@gmail.com', '$2y$10$fRwm.eFpgtCmMlihaU.XbuoPPcee0BNBd64CQJc8OOq7yP1HNu.aW', '1'),
(5, 'sunuuu@gmail.com', '$2y$10$AvgDqOdW9XWXGOcyZCuOHOLwsEDaJdw1GuaQcxyY1hS5LLrs2wCZS', '1'),
(6, 'sunuuu@gmail.com', '$2y$10$xqJMHDTyFfMXxJCu8Bb1FOsUMfzAqUwq1pvHNjYPIapR.Crom2l72', '0'),
(7, 'bettythomas851998@gmail.com', '$2y$10$oVtsbLBi8ppGShsNwkwZmuFvt5MfXLE1htD7rPKrwUbbU5BZetxg.', '1'),
(8, 'betty@gmail.com', '$2y$10$9o5ubQ4NZ5K8IzK/38BvZ.skgtRNZXRT2dzP89AUJE2T4NbEnbvSe', '1'),
(9, 'a@gmail.com', '$2y$10$yhrUSdKwCWNY4X8Prj9xueognZVddeQXPs.MdNy0e7VeqwsQ83Nhu', '1'),
(10, 'bet@gmail.com', '$2y$10$NwIDgLFM0wv5vReqlJ.TR.UmDeMymVerEja6oI1wuDTRvu7XpiODe', '1'),
(11, 'bettythomas851998@gmail.com', '$2y$10$LRwxQfO9vTdqbhWJEEhL1OahyZtS.0SvuhRH.JHnOzx.ce0L0DhlG', '1'),
(12, 'sandra@gmail.com', '$2y$10$xebF4g9nGo37EdBoSj1Az.1YbPxm9b9D176MEHfbwfVV65Z1ot7dW', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(5) NOT NULL,
  `notification` text NOT NULL,
  `flid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `phno` varchar(12) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `loginid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `age`, `gender`, `address`, `phno`, `aadhar`, `loginid`) VALUES
(1, 'Eliza', 'sukesan', 30, 'female', 'jhghj', '2345673452', 0, 1),
(2, 'sunu', 'sukesan', 52, 'female', 'kbhkhghkjb', '9744418212', 2147483647, 2),
(3, 'sunu', 'sukesan', 30, 'female', 'charuvila veedu \r\n?Thazham North\r\nChathannoor P O\r\nKollam', '9744418212', 2147483647, 3),
(4, 'betty', 'Sukesan', 52, 'female', 'hhbjvjv', '2345673452', 2147483647, 4),
(5, 'sunuu', 'sukesan', 30, 'female', 'hkjkkjdkewbcjhebw', '9876789765', 2147483647, 5),
(6, 'sunu', 'Sukesan', 52, 'female', 'hgjhjh', '9744418212', 2147483647, 6),
(7, 'Betty', 'Thomas', 22, 'female', 'Charivukalayil (H) Kottanad P.O Vrindhavanam,', '919605328215', 2147483647, 7),
(8, 'Betty', 'Thomas', 22, 'female', 'Charivukalayil (H) Kottanad P.O Vrindhavanam,', '919605328215', 2147483647, 8),
(9, 'Betty', 'Thomas', 22, 'female', 'Charivukalayil (H) Kottanad P.O Vrindhavanam,', '919605328215', 2147483647, 9),
(10, 'Betty', 'Thomas', 22, 'female', 'Charivukalayil (H) Kottanad P.O Vrindhavanam,', '919605328215', 2147483647, 10),
(11, 'Betty', 'Thomas', 22, 'female', 'Charivukalayil (H) Kottanad P.O Vrindhavanam,', '919605328215', 2147483647, 11),
(12, 'Sandra', 'RAJ', 22, 'female', 'Charivukalayil (H) Kottanad P.O Vrindhavanam,', '919605328215', 2147483647, 12);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(5) NOT NULL,
  `flid` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `userid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `flid`, `fname`, `name`, `age`, `amount`, `seat`, `userid`) VALUES
(1002, 2, 'Indigo', 'Betty', 22, 400, 'economic', 7),
(1003, 2, 'Indigo', 'sunuu', 30, 500, 'business', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`airportid`);

--
-- Indexes for table `flightdetails`
--
ALTER TABLE `flightdetails`
  ADD PRIMARY KEY (`flid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `airportid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flightdetails`
--
ALTER TABLE `flightdetails`
  MODIFY `flid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
