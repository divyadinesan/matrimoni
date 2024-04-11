-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 10:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimoni`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_id` int(11) NOT NULL,
  `sender_userid` int(11) NOT NULL,
  `sender_matid` int(11) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `receiver_userid` int(11) NOT NULL,
  `rceiver_matid` int(11) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `sender_paymentstats` varchar(50) NOT NULL,
  `sender_name` varchar(50) NOT NULL,
  `sender_pic` varchar(150) NOT NULL,
  `status` varchar(150) NOT NULL,
  `recvr_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matrimoni_registration`
--

CREATE TABLE `matrimoni_registration` (
  `matrimoni_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Country` varchar(30) NOT NULL,
  `Number` int(11) NOT NULL,
  `Mat_email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `martimoni_type` varchar(50) NOT NULL,
  `matrimony_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matrimoni_registration`
--

INSERT INTO `matrimoni_registration` (`matrimoni_id`, `Name`, `Address`, `Country`, `Number`, `Mat_email`, `Password`, `experience`, `image`, `martimoni_type`, `matrimony_status`) VALUES
(6, 'You’re there for each other', 'You’re there for each other, ollur, thrissur 680101', 'India', 2147483647, 'eachother@gmail.com', 'eachother', '2', '1671721010.jpg', 'Matrimoni', 'Approve'),
(9, 'True Love', 'North Kallur, Ernakulam 680520.', 'India', 2147483647, 'truelove@gmail.com', 'truelove', '2', '1671729658.jpg', 'Admin', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `Uid` int(11) NOT NULL,
  `Mid` int(11) NOT NULL,
  `Card_name` varchar(100) NOT NULL,
  `Card_no` varchar(200) NOT NULL,
  `Exp_date` varchar(500) NOT NULL,
  `Cvv` varchar(500) NOT NULL,
  `Amount` varchar(500) NOT NULL,
  `C_date` varchar(500) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `matrimoni_email` varchar(50) NOT NULL,
  `matrimoni_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `user_Name` varchar(20) NOT NULL,
  `user_Age` int(11) NOT NULL,
  `user_Gender` varchar(20) NOT NULL,
  `user_Height` varchar(30) NOT NULL,
  `user_Address` varchar(40) NOT NULL,
  `user_Number` int(11) NOT NULL,
  `user_Qualification` varchar(30) NOT NULL,
  `user_Job` varchar(30) NOT NULL,
  `user_Family` varchar(100) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Pic` varchar(40) NOT NULL,
  `Matrimoni_id` varchar(150) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `mothertongue` varchar(30) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `diet` varchar(30) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_job` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_job` varchar(50) NOT NULL,
  `no_of_brothers` int(11) NOT NULL,
  `no_of_sisters` int(11) NOT NULL,
  `spouse_age` varchar(50) NOT NULL,
  `spouse_height` varchar(50) NOT NULL,
  `spouse_religion` varchar(50) NOT NULL,
  `spouse_caste` varchar(50) NOT NULL,
  `spouse_education` varchar(50) NOT NULL,
  `user_religion` varchar(50) NOT NULL,
  `user_caste` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `user_Name`, `user_Age`, `user_Gender`, `user_Height`, `user_Address`, `user_Number`, `user_Qualification`, `user_Job`, `user_Family`, `Email`, `Password`, `Pic`, `Matrimoni_id`, `payment`, `mothertongue`, `blood_group`, `weight`, `diet`, `father_name`, `father_job`, `mother_name`, `mother_job`, `no_of_brothers`, `no_of_sisters`, `spouse_age`, `spouse_height`, `spouse_religion`, `spouse_caste`, `spouse_education`, `user_religion`, `user_caste`) VALUES
(1, 'Anitha C', 24, 'Female', '156cm', 'manivigraham House, ollur,thrissur 68010', 2147483647, 'BSC Computer Science', 'Android Trainer', '6', 'anitha@gmail.com', 'anitha', '1671723517.jpg', '6', 'paid', 'Malayalam', 'o+ve', '50 kg', 'Non veg', 'Clinto', 'Buisness', 'Ajitha', 'Business', 2, 0, '22-27', '155-175 cm', 'No mention', 'No mention', 'Any graduate', 'No mention', 'No mention'),
(2, 'Athira Sajeev', 25, 'Female', '146cm', 'velur House, kunnamkulam thrissur 680101', 2147483647, 'Btech Computer Science', 'IT professor', '4', 'athira@gmail.com', 'athira', '1671724043.jpg', '6', 'paid', 'Malayalam', 'A+ve', '60 kg', 'Non veg', 'Sajeev', 'Buisness', 'Babiutha', 'Professor', 0, 0, '22-27', '155-175 cm', 'No mention', 'No mention', 'Any graduate', 'No mention', 'No mention'),
(3, 'Anisha T M', 26, 'Female', '140cm', 'qwerty House,Velur ,thrissur 680101', 2147483647, 'Btech Computer Science', 'software engineer', '6', 'anisha@gmail.com', 'anisha', '1671736056.jpg', '9', 'Pending', 'Malayalam', 'o+ve', '65 kg', 'Non veg', 'Dinesan', 'CEO', 'Pankajam', 'Home Maker', 4, 0, '22-27', '155-175 cm', 'No mention', 'No mention', 'Any graduate', 'No mention', 'No mention'),
(4, 'Anu T S', 26, 'Female', '156cm', 'mASD House, ollur,thrissur', 2147483647, 'Btech ', 'Actively Looking For Opportuni', '4', 'anu@gmail.com', 'anu', '1671736210.jpg', '9', 'Pending', 'Malayalam', 'A-ve', '65 kg', 'Non veg', 'Anil', 'Manager', 'Satheebha', 'clerk', 0, 0, '22-27', '155-175 cm', 'No mention', 'No mention', 'Any graduate', 'No mention', 'No mention'),
(5, 'DILJITH M.D', 28, 'Male', '176', 'abc House, thiruvenkitom po guruvayooy t', 2147483647, 'Btech', 'Structural Detailer', '4', 'diljith@gmail.com', 'diljith', '1671814009.jpg', '9', 'Pending', 'Malayalam', 'AB+ve', '50 kg', 'Non veg', 'Shaji', 'Director', 'Janaki', 'Home Maker', 0, 0, '22-27', '155-175 cm', 'No mention', 'No mention', 'Any graduate', 'No mention', 'No mention'),
(6, 'Clinto C', 27, 'Male', '167', 'asdffg hose vellur thrissur', 2147483647, 'Mtech', 'sotware engineer', '4', 'clinto@gmail.com', 'clinto', '1671814173.jpg', '9', 'paid', 'Malayalam', 'B+ve', '80 kg', 'Non veg', 'Sajeev', 'Telecom Technician', 'Geetha', 'Business', 0, 0, '22-27', '155-175 cm', 'No mention', 'No mention', 'Any graduate', 'No mention', 'No mention'),
(7, 'Rahul sajeev', 24, 'Male', '167', 'Godurathil house,chalakudy', 2147483647, 'Bcom', 'Accountant', '3', 'rahul@gmail.com', 'rahul', '1671818769.jpg', '6', 'paid', 'Malayalam', 'o+ve', '65 kg', 'Non veg', 'Varun', 'Buisness', 'Athira', 'Bank Manager', 0, 0, '22-27', '155-175 cm', 'No mention', 'No mention', 'Any graduate', 'No mention', 'No mention'),
(9, 'Deepak M K', 28, 'Male', '175 cm', 'Mattathil house,pala,pathanamthitta', 998877665, 'B.com', 'Accountant', '5', 'deepak@gmail.com', 'deepak', '1672403941.jpg', '6', 'Pending', 'Malayalam', 'o+ve', '80 kg', 'Non veg', 'Krishnan', 'Buisness', 'Shilpa', 'Teacher', 1, 1, '22-27', '155-175 cm', 'Hindu', 'No mention', 'Any graduate', 'Hindu', 'No mention'),
(10, 'DIVYA DINESAN', 26, 'Female', '156', 'Kunnamkulam thrissur DT', 2147483647, 'B.Tech', 'PHP Trainer', '4', 'divya@gmail.com', '123', '1699357654.jpg', '9', 'paid', 'Malayalam', 'AB+', '55', 'Null', 'DINESAN M V', 'BSNL (retaired)', 'AJITHA CK', 'Home Maker', 1, 0, 'nill', 'nill', 'Hindu', 'nill', 'Graduaction', 'Hindu', 'Padanna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `matrimoni_registration`
--
ALTER TABLE `matrimoni_registration`
  ADD PRIMARY KEY (`matrimoni_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matrimoni_registration`
--
ALTER TABLE `matrimoni_registration`
  MODIFY `matrimoni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
