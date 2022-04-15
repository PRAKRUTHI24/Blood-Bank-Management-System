-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 11:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `dn` ()  BEGIN
SELECT * FROM donors;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dnr` ()  BEGIN
SELECT * FROM hospital;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `dns` ()  BEGIN
SELECT * from donated_list;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_login`
--

CREATE TABLE `bloodbank_login` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank_login`
--

INSERT INTO `bloodbank_login` (`username`, `password`) VALUES
('bloodbank', '998055');

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `delete_donors`
--

CREATE TABLE `delete_donors` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_phno` bigint(20) DEFAULT NULL,
  `d_dob` date NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `d_address` varchar(150) DEFAULT NULL,
  `age` int(11) DEFAULT NULL CHECK (`age` >= 18),
  `weight` smallint(6) NOT NULL CHECK (`weight` >= 45),
  `bp` varchar(10) NOT NULL,
  `heamoglobin` decimal(5,1) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `units` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delete_donors`
--

INSERT INTO `delete_donors` (`d_id`, `d_name`, `d_phno`, `d_dob`, `gender`, `d_address`, `age`, `weight`, `bp`, `heamoglobin`, `blood_type`, `units`) VALUES
(4, 'Shlok', 7890954287, '1997-02-07', 'Male', 'Mysore', 24, 55, '82/122', '14.4', 'B+', 2),
(5, 'Vishnu', 8219095426, '1980-04-08', 'Male', 'Mysore', 40, 65, '75/135', '13.4', 'O-', 1),
(6, 'Pavan', 5692236662, '1981-05-15', 'Male', 'Bellary', 45, 65, '52/110', '15.0', 'B-', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donated_list`
--

CREATE TABLE `donated_list` (
  `d_id` int(11) NOT NULL,
  `date_of_donation` date NOT NULL,
  `blood_type` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donated_list`
--

INSERT INTO `donated_list` (`d_id`, `date_of_donation`, `blood_type`) VALUES
(1, '2021-01-11', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_phno` bigint(20) DEFAULT NULL,
  `d_dob` date NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `d_address` varchar(150) DEFAULT NULL,
  `age` int(11) DEFAULT NULL CHECK (`age` >= 18),
  `weight` smallint(6) NOT NULL CHECK (`weight` >= 45),
  `bp` varchar(10) NOT NULL,
  `heamoglobin` decimal(5,1) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`d_id`, `d_name`, `d_phno`, `d_dob`, `gender`, `d_address`, `age`, `weight`, `bp`, `heamoglobin`, `blood_type`, `units`) VALUES
(1, 'Shravani', 9864895462, '1999-11-11', 'Female', 'Bangloore', 20, 45, '80/112', '15.0', 'B+'),
(3, 'Akhil', 7892954245, '1995-01-02', 'Male', 'Kolar', 25, 54, '85/125', '14.0', 'A-');

--
-- Triggers `donors`
--
DELIMITER $$
CREATE TRIGGER `delete_donors` AFTER DELETE ON `donors` FOR EACH ROW INSERT into delete_donors VALUES(old.d_id,old.d_name,old.d_phno,old.d_dob,old.gender,old.d_address,old.age,old.weight,old.bp,old.heamoglobin,old.blood_type,old.units)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(50) DEFAULT NULL,
  `hospital_address` varchar(50) DEFAULT NULL,
  `hospital_phno` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_address`, `hospital_phno`) VALUES
(1, 'Apollo', 'vijaynagar, Mysore', 3242312323),
(2, 'Bharani', 'Near chamundi hills, Mysore', 2432312345),
(3, 'Sanjana', 'Hootgalli Mysore', 3244354554),
(4, 'KIIMS', 'Kuvempunagar, Mysore', 2432313545),
(5, 'Narayana hrudayalaya', 'Koorgalli, Mysore', 3242345323);

-- --------------------------------------------------------

--
-- Table structure for table `hospital_login`
--

CREATE TABLE `hospital_login` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_login`
--

INSERT INTO `hospital_login` (`username`, `password`) VALUES
('Apollo', '9035621');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `units` int(11) NOT NULL,
  `hospital_id` int(11) DEFAULT NULL,
  `comment` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `blood_type`, `units`, `hospital_id`, `comment`) VALUES
(1, 'A-', 2, 4, 'ACCEPTED'),
(2, 'AB-', 4, 4, 'CANCELED'),
(3, 'O+', 4, 2, 'on progress'),
(4, 'AB-', 10, 1, 'on progress');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `blood_type` varchar(5) NOT NULL,
  `count_of_blood_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Indexes for dumped tables
--

-- Indexes for table `delete_donors`
--
ALTER TABLE `delete_donors`
  ADD PRIMARY KEY (`d_id`,`blood_type`);


  
--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`d_id`,`blood_type`);
  

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);
 

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`blood_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delete_donors`
--
ALTER TABLE `delete_donors`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

  




-- Constraints for table `orders`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE CASCADE ON UPDATE CASCADE;



 
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
