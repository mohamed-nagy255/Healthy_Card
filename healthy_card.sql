-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 11:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthy_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `massege` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `username`, `email`, `phone`, `massege`) VALUES
(2, 'swda', 'adfsdfa@efr', '123432', 'safcfsadvcsdvfdsfv');

-- --------------------------------------------------------

--
-- Table structure for table `drs`
--

CREATE TABLE `drs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` tinyint(4) NOT NULL,
  `gender` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `idcard` varchar(100) NOT NULL,
  `hospital_name_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drs`
--

INSERT INTO `drs` (`id`, `username`, `email`, `password`, `age`, `gender`, `address`, `phone`, `idcard`, `hospital_name_id`, `section_id`, `priv`) VALUES
(52, 'shrouk mohamed', 'shrouk@dr.com', 'e10adc3949ba59abbe56e057f20f883e', 30, 1, 'mansoura', '0101010101001', '123456789012341', 12, 10, 300);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `idcard` int(15) NOT NULL,
  `hospital_name_id` int(11) NOT NULL,
  `img` longblob NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `username`, `email`, `password`, `age`, `address`, `phone`, `gender`, `status`, `idcard`, `hospital_name_id`, `img`, `priv`) VALUES
(8, 'moaaz mohamed', 'moaaz@employee.com', '202cb962ac59075b964b07152d234b70', 32, 'القاهرة', '01010101010000', 0, 0, 2147483647, 12, '', 500),
(13, 'malk', 'e@e', '202cb962ac59075b964b07152d234b70', 32, 'cairo', '0103013652622', 0, 0, 2147483647, 13, '', 500);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `em_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `hospital_name`, `address`, `phone`, `em_number`) VALUES
(12, 'elnour', 'mansoura', '01011928765', '132'),
(13, 'elamal', 'cairo', '01030136526', '123'),
(14, 'elzhraa', 'fayom', '01011928765', '144');

-- --------------------------------------------------------

--
-- Table structure for table `mad_pat`
--

CREATE TABLE `mad_pat` (
  `id` int(11) NOT NULL,
  `pat_name_id` int(11) NOT NULL,
  `mad_name` varchar(100) NOT NULL,
  `times` int(11) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mad_pat`
--

INSERT INTO `mad_pat` (`id`, `pat_name_id`, `mad_name`, `times`, `note`) VALUES
(55, 123, 'sd', 2, 'asdsadffas'),
(59, 123, 'sss', 2, 'note'),
(61, 123, 'qwertq', 3, 'note'),
(62, 128, 'sss', 3, 'adssdfvcxbfdyh'),
(63, 123, 'sss', 3, 'note'),
(64, 124, 'qwe', 3, 'note'),
(65, 128, 'qwe', 3, 'adssdfvcxbfdyh');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hospital_name_id` int(11) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `username`, `email`, `password`, `phone`, `address`, `hospital_name_id`, `priv`) VALUES
(13, 'ahmed', 'ahmed@manager.com', '202cb962ac59075b964b07152d234b70', '01010101010', 'dakhlya', 12, 200),
(21, 'moaaz remah', 'moaaz@manag.com', 'e10adc3949ba59abbe56e057f20f883e', '01011928765', 'cairo', 13, 200),
(22, 'sameh', 'sameh@manag.com', 'e10adc3949ba59abbe56e057f20f883e', '0101010101001', 'mansoura', 14, 200);

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `idcard` int(100) NOT NULL,
  `hospital_name_id` int(11) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`id`, `username`, `email`, `password`, `age`, `address`, `phone`, `gender`, `idcard`, `hospital_name_id`, `priv`) VALUES
(11, 'noor mohamed..//', 'noor@nurse.com', '202cb962ac59075b964b07152d234b70', 34, 'cairo', '0101192876123', 0, 2147483647, 12, 400);

-- --------------------------------------------------------

--
-- Table structure for table `path_cases`
--

CREATE TABLE `path_cases` (
  `id` int(11) NOT NULL,
  `pat_name_id` int(11) NOT NULL,
  `path_case` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `path_cases`
--

INSERT INTO `path_cases` (`id`, `pat_name_id`, `path_case`) VALUES
(88, 124, 'dfhgvhkvjhy'),
(110, 123, 'aaaaa'),
(128, 128, 'qwertyuiop[asdfghjklzxcvbnm,...........//////////');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `blood_type` varchar(100) NOT NULL,
  `section_id` int(11) NOT NULL,
  `idcard` int(100) NOT NULL,
  `hospital_name_id` int(11) NOT NULL,
  `qr` longblob NOT NULL,
  `id_qr` varchar(255) NOT NULL,
  `qr_gn` varchar(100) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `username`, `email`, `password`, `age`, `phone`, `address`, `gender`, `status`, `blood_type`, `section_id`, `idcard`, `hospital_name_id`, `qr`, `id_qr`, `qr_gn`, `priv`) VALUES
(123, 'mohamed', 'mohamed123@gmail.com', '202cb962ac59075b964b07152d234b70', 99, '1234567890', 'cairo', 0, 0, 'A+', 9, 2147483647, 13, 0x71722f363262363034303938303363622e706e67, 'http://localhost/healthy%20card/patient/profile-patient.php?qr_gn=1', '1', 600),
(124, 'moaaz', 'moaaz@pat', '202cb962ac59075b964b07152d234b70', 21, '0109292', 'fayom', 0, 1, 'O+', 9, 2147483647, 13, 0x71722f363262363034326130623935322e706e67, 'http://localhost/healthy%20card/patient/profile-patient.php?qr_gn=124', '124', 600),
(126, 'noor mohamed', 'noor@pat', '202cb962ac59075b964b07152d234b70', 33, '0109292', 'mansoura', 1, 0, 'A+', 9, 2147483647, 13, 0x71722f363262363034656133323539392e706e67, 'http://localhost/healthy%20card/patient/profile-patient.php?qr_gn=125', '125', 600),
(127, 'nn', 'mm@mm', '202cb962ac59075b964b07152d234b70', 32, '01030136526', 'مركز منية النصر ', 1, 0, 'o+', 9, 2147483647, 13, 0x71722f363262396235636630616433322e706e67, 'http://localhost/healthy%20card/patient/profile-patient.php?id=127', '127', 600),
(128, 'moaaz', 'mohamed123@gmail.com', '202cb962ac59075b964b07152d234b70', 30, '0101010101001', 'dakhlya', 0, 0, 'A+', 8, 123, 12, 0x71722f363262616462383931386233372e706e67, 'http://localhost/healthy%20card/patient/profile-patient.php?id=128', '128', 600),
(131, 'mohamed', 'mohamed@pat.com', 'e10adc3949ba59abbe56e057f20f883e', 30, '0109292', 'mansoura', 0, 0, 'A+', 11, 2147483647, 12, 0x71722f363263346233646534326637652e706e67, 'http://localhost/healthy%20card/patient/profile-patient.php?qr_gn=129', '129', 600);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `idcard` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `hospital_name_id` int(11) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `username`, `email`, `password`, `age`, `gender`, `idcard`, `address`, `phone`, `hospital_name_id`, `priv`) VALUES
(1, 'yasmen mohamed.....', 'yasmen@pharmacist.com', '202cb962ac59075b964b07152d234b70', 32, 1, 2147483647, 'cairo', '01092921212111', 12, 700),
(4, 'rr', 'r@r', '123', 22, 0, 12345, 'mansoura', '1223456', 13, 700);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `id` int(11) NOT NULL,
  `med_name` varchar(255) NOT NULL,
  `number` int(100) NOT NULL,
  `hospital_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `med_name`, `number`, `hospital_name_id`) VALUES
(12, 'ddddddddd', 0, 13),
(13, 'vvvvv', 4, 12),
(17, 'hh', 5, 12),
(19, 'qqq', 48, 12);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `report` text NOT NULL,
  `hospital_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `username`, `report`, `hospital_name_id`) VALUES
(19, 'malk', 'swscdads', 13),
(20, 'malk', 'swqd', 13),
(21, 'malk', 'swqd', 13),
(22, 'malk', 'sdf', 13),
(23, 'malk', 'sdf', 13),
(24, 'malk', '111111111', 13),
(25, 'malk', '111111111', 13),
(26, 'malk', '111111111', 13),
(27, 'malk', '111111111', 13),
(28, 'malk', '111111111', 13),
(29, 'malk', '222222', 13);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `pat_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `section_id` int(11) NOT NULL,
  `hospital_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `pat_name`, `date`, `time`, `section_id`, `hospital_name_id`) VALUES
(41, 'mohamed', '2022-05-04', '14:25:42', 9, 13);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `username`, `rating`, `feedback`) VALUES
(5, 'fef', 4, 'safdsa'),
(6, 'dsad', 3, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `section_manager` varchar(255) NOT NULL,
  `hospital_name_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_name`, `section_manager`, `hospital_name_id`) VALUES
(8, 'عيون', 'mahmoud saad', 12),
(9, 'aaawww', 'aaawww', 13),
(10, 'الجراحة', 'mohamed abd allah', 12),
(11, 'عظام', 'احمد مصطفي', 12);

-- --------------------------------------------------------

--
-- Table structure for table `uner`
--

CREATE TABLE `uner` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uner`
--

INSERT INTO `uner` (`id`, `username`, `email`, `password`, `priv`) VALUES
(14, 'Mohamed Nagy', 'mohamednagy767@gmail.com', '517442cd2ff4d2d8b754725ab2c6f126', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drs`
--
ALTER TABLE `drs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drs_ibfk_1` (`hospital_name_id`),
  ADD KEY `drs_ibfk_2` (`section_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mad_pat`
--
ALTER TABLE `mad_pat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pat_name_id` (`pat_name_id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `path_cases`
--
ALTER TABLE `path_cases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pat_name_id` (`pat_name_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pat_name_id` (`pat_name`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dr_name_id` (`section_manager`),
  ADD KEY `hospital_name_id` (`hospital_name_id`);

--
-- Indexes for table `uner`
--
ALTER TABLE `uner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drs`
--
ALTER TABLE `drs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mad_pat`
--
ALTER TABLE `mad_pat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `path_cases`
--
ALTER TABLE `path_cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `uner`
--
ALTER TABLE `uner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drs`
--
ALTER TABLE `drs`
  ADD CONSTRAINT `drs_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`),
  ADD CONSTRAINT `drs_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `mad_pat`
--
ALTER TABLE `mad_pat`
  ADD CONSTRAINT `mad_pat_ibfk_1` FOREIGN KEY (`pat_name_id`) REFERENCES `patients` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `nurses`
--
ALTER TABLE `nurses`
  ADD CONSTRAINT `nurses_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`),
  ADD CONSTRAINT `patients_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`);

--
-- Constraints for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD CONSTRAINT `pharmacist_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD CONSTRAINT `pharmacy_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`id`),
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`hospital_name_id`) REFERENCES `hospital` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
