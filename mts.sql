-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 07:02 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mts`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `is_done` tinyint(1) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `date`, `time`, `is_done`, `cust_id`, `staff_id`, `service_id`, `user_id`) VALUES
(2, '2017-10-25', '16:00:00', 0, 6, 4, 25, 4),
(3, '2017-10-27', '14:00:00', 0, 7, 7, 26, 4),
(5, '2017-10-19', '23:00:00', 0, 9, 4, 25, 4);

-- --------------------------------------------------------

--
-- Table structure for table `business_hours`
--

CREATE TABLE `business_hours` (
  `user_id` int(11) NOT NULL,
  `day` varchar(9) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `office_no` int(11) NOT NULL,
  `home_no` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `mobile_no`, `email`, `office_no`, `home_no`, `address`, `city`, `state`, `zip`, `user_id`) VALUES
(1, 'Customer 1', 123, 'cust1@yahoo.com', 0, 0, '', '', '', '', 6),
(2, 'Customer 2', 1234, 'cust2@gmail.com', 543, 0, 'test', '', '', 'test', 6),
(3, 'Lala', 1234, 'lala@yahoo.com', 1234, 12345, 'dsa', 'dsa', 'dsa', '', 4),
(5, 'Cust 1', 123, 'cust1@yahoo.com', 0, 0, '', '', '', '', 4),
(6, 'Customer 2', 12345, 'cust2@gmail.com', 0, 0, '', '', '', '', 4),
(7, 'Customer 3', 123456, 'cust3@gmail.com', 0, 0, '', '', '', '', 4),
(8, 'Red Ingram', 1234, 'red@yahoo.com', 0, 0, '', '', '', '', 4),
(9, 'Butcher', 123456789, 'rbituonan@yahoo.com', 0, 0, '', '', '', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(20) NOT NULL,
  `service_desc` varchar(30) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_desc`, `duration`, `price`, `user_id`) VALUES
(25, 'Service 2', 'Service 1', 20, 2000, 4),
(26, 'Service 3', 'Service 3', 30, 3000, 4),
(27, 'dsa', 'dsad', 123, 123, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `last_name`, `user_id`) VALUES
(2, 'alvin', '', 4),
(3, 'leo', '', 5),
(4, 'Leo', 'Pajuyo', 4),
(7, 'Al Francis', 'Orias', 4),
(9, 'Leonardo', 'Pajuyo', 6),
(10, 'John', 'Smith', 7);

-- --------------------------------------------------------

--
-- Table structure for table `staff_hours`
--

CREATE TABLE `staff_hours` (
  `staff_id` int(11) NOT NULL,
  `day` varchar(9) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_hours`
--

INSERT INTO `staff_hours` (`staff_id`, `day`, `start_time`, `end_time`) VALUES
(7, 'monday', '08:00:00', '17:00:00'),
(7, 'tuesday', '08:00:00', '17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_service`
--

CREATE TABLE `staff_service` (
  `staff_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_service`
--

INSERT INTO `staff_service` (`staff_id`, `service_id`) VALUES
(2, 27),
(4, 25),
(7, 25),
(7, 26);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `company_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `company_name`) VALUES
(4, 'babin@yahoo.com', '1234', ''),
(5, 'leo@yahoo.com', '123', ''),
(6, 'leo2@gmail.com', '1234', ''),
(7, 'jsmith@gmail.com', '12345', ''),
(8, 'rbituonan@yahoo.com', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `client_id` (`cust_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `appointment_ibfk_5` (`staff_id`,`service_id`);

--
-- Indexes for table `business_hours`
--
ALTER TABLE `business_hours`
  ADD PRIMARY KEY (`user_id`,`day`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `staff_hours`
--
ALTER TABLE `staff_hours`
  ADD PRIMARY KEY (`staff_id`,`day`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff_service`
--
ALTER TABLE `staff_service`
  ADD PRIMARY KEY (`staff_id`,`service_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_5` FOREIGN KEY (`staff_id`,`service_id`) REFERENCES `staff_service` (`staff_id`, `service_id`) ON DELETE CASCADE;

--
-- Constraints for table `business_hours`
--
ALTER TABLE `business_hours`
  ADD CONSTRAINT `FK_user_id_from_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_hours`
--
ALTER TABLE `staff_hours`
  ADD CONSTRAINT `staff_hours_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE;

--
-- Constraints for table `staff_service`
--
ALTER TABLE `staff_service`
  ADD CONSTRAINT `staff_service_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
