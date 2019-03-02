-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 10:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_one`
--

CREATE TABLE `address_one` (
  `add_one` int(11) NOT NULL,
  `address_one` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_one`
--

INSERT INTO `address_one` (`add_one`, `address_one`, `flag`, `employee_id`) VALUES
(1, 'Minglanilla', 0, NULL),
(4, 'Minglanilla', 0, 10),
(5, 'Minglanilla, Cebu', 0, 11),
(6, 'Minglanilla, Cebu', 0, 12),
(7, ', Cebu City', 0, 12),
(8, 'Minglanilla, Cebu', 0, 13),
(9, 'Guadalupe, Cebu City', 0, 13),
(10, 'Minglanilla, Cebu', 0, 14),
(11, 'Guadalupe, Cebu City', 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `contact_one`
--

CREATE TABLE `contact_one` (
  `c_id` int(11) NOT NULL,
  `contact_one` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_one`
--

INSERT INTO `contact_one` (`c_id`, `contact_one`, `flag`, `employee_id`) VALUES
(1, '1232131', 0, 14),
(2, '12312', 0, 14),
(3, '123123', 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `date_hired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `fname`, `lname`, `mname`, `bdate`, `gender`, `marital_status`, `position`, `date_hired`) VALUES
(1, 'Allison', 'Duro', 'Alegarbes', '1994-10-11', 'Male', 'Single', 'none', '0000-00-00'),
(2, 'Allison', 'Duro', 'Alegarbes', '1994-10-11', 'Male', 'Single', 'none', '0000-00-00'),
(3, 'Allison', 'Duro', 'Alegarbes', '1994-10-11', 'Male', 'Single', 'none', '0000-00-00'),
(4, 'Allison', 'Duro', 'Alegarbes', '1994-10-11', 'Male', 'Single', 'none', '0000-00-00'),
(5, 'Allison', 'Duro', 'Alegarbes', '1994-10-11', 'Male', 'Single', 'none', '0000-00-00'),
(6, 'Allison', 'Duro', 'Alegarbes', '2019-03-06', 'Male', 'Single', 'none', '0000-00-00'),
(7, 'Allison', 'Duro', 'Alegarbes', '2019-03-16', 'Male', 'Single', 'none', '0000-00-00'),
(8, 'Allison', 'Duro', 'Alegarbes', '2019-03-09', 'Male', 'Single', 'none', '0000-00-00'),
(9, 'Allison', 'Duro', 'Alegarbes', '2019-02-06', 'Male', 'Single', 'none', '0000-00-00'),
(10, 'Allison', 'Duro', 'Alegarbes', '2019-03-01', 'Male', 'Single', 'none', '0000-00-00'),
(11, 'Allison', 'Duro', 'Alegarbes', '2019-03-02', 'Male', 'Single', 'none', '0000-00-00'),
(12, 'Allison', 'Duro', 'Alegarbes', '2019-03-07', 'Male', 'Single', 'none', '0000-00-00'),
(13, 'Allison', 'Duro', 'Alegarbes', '2019-03-07', 'Male', 'Single', 'none', '0000-00-00'),
(14, 'Allison', 'Duro', 'Alegarbes', '2019-03-16', 'Male', 'Single', 'none', '2019-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_one`
--
ALTER TABLE `address_one`
  ADD PRIMARY KEY (`add_one`),
  ADD KEY `FK_employeeAdd` (`employee_id`);

--
-- Indexes for table `contact_one`
--
ALTER TABLE `contact_one`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_one`
--
ALTER TABLE `address_one`
  MODIFY `add_one` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_one`
--
ALTER TABLE `contact_one`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_one`
--
ALTER TABLE `address_one`
  ADD CONSTRAINT `FK_employeeAdd` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);

--
-- Constraints for table `contact_one`
--
ALTER TABLE `contact_one`
  ADD CONSTRAINT `contact_one_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
