-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 06:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(30) DEFAULT NULL,
  `account_type` varchar(40) DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkup`
--

CREATE TABLE `checkup` (
  `checkup_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `desease_id` int(11) DEFAULT NULL,
  `pa_charged_fee` float DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkup`
--

INSERT INTO `checkup` (`checkup_id`, `patient_id`, `doctor_id`, `desease_id`, `pa_charged_fee`, `reg_date`, `class_id`) VALUES
(1, 1, 1, 1, 40, '2022-12-23', 1),
(2, 2, 2, 2, 24, '2022-12-24', 2);

-- --------------------------------------------------------

--
-- Table structure for table `checkup_result`
--

CREATE TABLE `checkup_result` (
  `checkup_result_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `patient_view` varchar(100) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkup_result`
--

INSERT INTO `checkup_result` (`checkup_result_id`, `patient_id`, `patient_view`, `reg_date`, `class_id`) VALUES
(1, 1, '1', '2022-12-29', 1),
(2, 2, '2', '2022-12-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `userid` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `usertype` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`userid`, `username`, `password`, `usertype`) VALUES
(15, ' yusuf', '123', 'User'),
(16, ' falxad', '3113', 'Admin'),
(17, ' moha', '123', 'User'),
(18, ' sacdiyo', '123', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(40) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `reg_date`, `class_id`) VALUES
(1, 'icc', '2023-01-08', NULL),
(2, 'x-ray', '2023-01-15', NULL),
(3, 'surgery', '2023-01-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `desease`
--

CREATE TABLE `desease` (
  `desease_id` int(11) NOT NULL,
  `desease_name` varchar(30) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desease`
--

INSERT INTO `desease` (`desease_id`, `desease_name`, `reg_date`, `class_id`) VALUES
(1, '  headache', '2022-12-30', 1),
(2, 'malario', '2022-12-30', 2),
(3, 'headache', '2023-01-08', 5);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `experince` varchar(40) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `shift` varchar(30) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctor_id`, `emp_id`, `experince`, `department_id`, `shift`, `reg_date`, `class_id`) VALUES
(1, 1, '1year', 1, 'night', '2023-01-06', 0),
(2, 2, '5years', 2, 'morning', '2023-01-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` int(11) NOT NULL,
  `drug_name` varchar(30) DEFAULT NULL,
  `issu_date` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drug_id`, `drug_name`, `issu_date`, `expire_date`, `price`, `description`, `reg_date`, `class_id`) VALUES
(1, ' prastamol', '2022-12-31', '2023-01-31', 58, ' nb', '2022-12-31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `tell` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `salary` float NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `tell`, `address`, `email`, `sex`, `salary`, `reg_date`) VALUES
(1, '    yaxye salax carab', '8859674', 'yaqshid', 'yaya@gmail.com', 'Male', 4000, '2022-12-10'),
(2, '  sadaq abdi hasan', '8859674', 'karan', 'sadaq@gmail.com', 'Male', 2000, '2022-12-10'),
(4, ' Saabriin Ali Nur', '64775488', 'wardhigley', 'saabo@gmail.com', 'Female', 1000, '2022-12-15'),
(5, ' Ahmed Nuur Ahmed', '34567', 'geedjeceyl', 'ahmed@gmail.com', 'Female', 300, '2022-12-15'),
(6, '  rayaan abdukadir ahmed', '64563899', 'daynile', 'raya@gmail.com', 'Female', 300, '2022-12-16'),
(7, '  sabir abdi hasan', '6556438', 'darusalam', 'sab@gmail.com', 'Male', 1000, '2022-12-16'),
(8, '  ismahan mohamed hassan', '6578943', 'oodweyne', 'isna@gmail.com', 'Female', 1000, '2022-12-16'),
(9, '  mohamed muse yusuf', '564773647', 'darusalam', 'moha@gmail.com', 'Male', 2000, '2023-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(11) NOT NULL,
  `expense_name` varchar(40) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `amount_type` varchar(30) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(40) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `reg_date`, `class_id`) VALUES
(1, ' dental', '2023-01-07', 0),
(2, 'cleaner', '2023-01-07', 0),
(3, 'ex-rey', '2023-01-07', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `patient_name` varchar(40) DEFAULT NULL,
  `tell` int(11) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `patient_name`, `tell`, `address`, `age`, `balance`, `reg_date`, `class_id`) VALUES
(4, ' nasra bashir', 67475887, 'gubta', 32, 20, '2022-12-22', 4),
(5, ' shukri muse', 646653673, 'shalambod', 30, 38, '2022-12-22', 5),
(6, ' yasin muse', 2147483647, 'daynile', 20, 20, '2022-12-22', 1),
(7, ' sadaq abdi hasan', 2147483647, 'oodweyne', 35, 60, '2022-12-30', 3),
(8, ' dadir muae', 5466478, 'howlwadag', 30, 45, '2023-01-09', 2),
(9, ' mohamud salah', 78474939, 'yaqshid', 30, 400, '2023-01-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `pa_charged_fee` float DEFAULT NULL,
  `paid` float DEFAULT NULL,
  `remained` float DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `patient_id`, `pa_charged_fee`, `paid`, `remained`, `reg_date`, `class_id`) VALUES
(1, 2, 300, 200, 100, '2023-01-09', 2),
(2, 5, 500, 200, 300, '2023-01-09', 0),
(3, 5, 400, 200, 100, '2023-01-09', 0),
(4, 7, 300, 200, 100, '2023-01-09', 0),
(5, 6, 500, 200, 300, '2023-01-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `drug_id` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `patient_id`, `drug_id`, `reg_date`, `class_id`) VALUES
(1, 1, 3, '2022-12-30', 1),
(2, 2, 3, '2022-12-30', 2),
(3, 1, 1, '2023-01-08', 1),
(4, 1, 1, '2023-01-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `checkup`
--
ALTER TABLE `checkup`
  ADD PRIMARY KEY (`checkup_id`);

--
-- Indexes for table `checkup_result`
--
ALTER TABLE `checkup_result`
  ADD PRIMARY KEY (`checkup_result_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `desease`
--
ALTER TABLE `desease`
  ADD PRIMARY KEY (`desease_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkup`
--
ALTER TABLE `checkup`
  MODIFY `checkup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `checkup_result`
--
ALTER TABLE `checkup_result`
  MODIFY `checkup_result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `desease`
--
ALTER TABLE `desease`
  MODIFY `desease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `drug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `departments` (`department_id`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `prescription` (`prescription_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
