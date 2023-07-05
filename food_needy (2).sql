-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 05:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_needy`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors_feedback`
--

CREATE TABLE `donors_feedback` (
  `donor_feedback_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `donor_feedback_message` varchar(255) NOT NULL,
  `donor_feedback_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `donors_feedback`
--

INSERT INTO `donors_feedback` (`donor_feedback_id`, `donor_id`, `donor_feedback_message`, `donor_feedback_date`) VALUES
(1, 0, 'good', '2011-03-21 18:30:00'),
(2, 0, 'good', '2012-03-21 18:30:00'),
(3, 7, 'good', '2012-03-21 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `donor_detail`
--

CREATE TABLE `donor_detail` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(50) NOT NULL,
  `donor_email_id` varchar(50) NOT NULL,
  `donor_password` varchar(20) NOT NULL,
  `donor_contact` double NOT NULL,
  `donor_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `donor_detail`
--

INSERT INTO `donor_detail` (`donor_id`, `donor_name`, `donor_email_id`, `donor_password`, `donor_contact`, `donor_date`, `status`) VALUES
(7, 'anjali', 'anju12@gmail.com', '1234567890', 7878863651, '2009-03-21 18:30:00', 0),
(8, 'anjali', 'anju12@gmail.com', '0987654321', 9898678763, '2024-03-21 18:30:00', 0),
(9, 'pragya', 'pragya@gmail.com', '121212', 7878863651, '2024-03-21 18:30:00', 0),
(15, 'teju', 'teju34@gmail.com', '1234', 6677558899, '2025-03-21 18:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donor_donation_detail`
--

CREATE TABLE `donor_donation_detail` (
  `donation_detail_id` int(11) NOT NULL,
  `donor_id` int(11) NOT NULL,
  `food_type` varchar(50) NOT NULL,
  `food_details` varchar(2000) NOT NULL,
  `quantity_per_person` int(11) NOT NULL,
  `donation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `donors_address` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `donor_donation_detail`
--

INSERT INTO `donor_donation_detail` (`donation_detail_id`, `donor_id`, `food_type`, `food_details`, `quantity_per_person`, `donation_date`, `donors_address`, `register_date`, `status`) VALUES
(1, 0, 'veg', 'dal chawal', 10, '0000-00-00 00:00:00', 'abc', '0000-00-00 00:00:00', 0),
(2, 7, 'veg', 'dal chawal', 10, '0000-00-00 00:00:00', 'abc', '0000-00-00 00:00:00', 0),
(3, 0, '', 'kadi khichadi', 25, '2022-03-17 18:30:00', 'ganesh park gidc ankleshwer', '0000-00-00 00:00:00', 0),
(4, 0, '', 'kadi khichadi', 25, '2022-03-19 18:30:00', 'ganesh park gidc ankleshwer', '0000-00-00 00:00:00', 0),
(5, 0, '', 'kadi khichadi', 25, '2022-03-19 18:30:00', 'ganesh park gidc ankleshwer', '0000-00-00 00:00:00', 0),
(6, 7, '', 'paneer', 56, '2022-03-25 18:30:00', 'decent hotel', '0000-00-00 00:00:00', 0),
(7, 7, 'Non-Veg', 'dal chawal', 10, '2022-03-25 18:30:00', 'kjkj', '0000-00-00 00:00:00', 0),
(8, 8, 'Veg', 'dal chaval,sabji,roti', 100, '2022-03-28 18:30:00', 'gadkhol patiya,anklwshwer', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `needer_booking_details`
--

CREATE TABLE `needer_booking_details` (
  `needer_booking_id` int(11) NOT NULL,
  `donation_detail_id` int(11) NOT NULL,
  `needer_id` int(11) NOT NULL,
  `delivery_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `register_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `needer_booking_details`
--

INSERT INTO `needer_booking_details` (`needer_booking_id`, `donation_detail_id`, `needer_id`, `delivery_date`, `register_date`, `status`) VALUES
(1, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 0, 0, '2022-03-18 18:30:00', '0000-00-00 00:00:00', 0),
(3, 0, 0, '2022-03-18 18:30:00', '0000-00-00 00:00:00', 0),
(9, 5, 1, '2022-03-26 18:30:00', '2022-03-22 18:30:00', 0),
(13, 2, 1, '0000-00-00 00:00:00', '2022-03-22 18:30:00', 0),
(15, 0, 1, '2022-03-23 18:30:00', '2022-03-22 18:30:00', 0),
(16, 1, 1, '2022-03-25 18:30:00', '2022-03-24 18:30:00', 0),
(17, 7, 1, '2022-03-29 18:30:00', '2022-03-24 18:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `needer_detail`
--

CREATE TABLE `needer_detail` (
  `needer_id` int(11) NOT NULL,
  `needer_name` varchar(50) NOT NULL,
  `needer_email_id` varchar(50) NOT NULL,
  `needer_password` varchar(20) NOT NULL,
  `needer_contact` double NOT NULL,
  `needer_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `needer_detail`
--

INSERT INTO `needer_detail` (`needer_id`, `needer_name`, `needer_email_id`, `needer_password`, `needer_contact`, `needer_date`, `status`) VALUES
(1, 'aditi', 'aditi12@gmail.com', '0987654321', 9662417906, '0000-00-00 00:00:00', 0),
(2, 'anjali', 'anju123@gmail.com', '1234567', 3469865543, '0000-00-00 00:00:00', 0),
(3, 'pragya', 'pragya123@gmail.com', '4676564', 4789765654, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `needer_feedbacks`
--

CREATE TABLE `needer_feedbacks` (
  `needer_feedback_id` int(11) NOT NULL,
  `needer_id` int(11) NOT NULL,
  `needer_feedback_message` varchar(255) NOT NULL,
  `needer_feedback_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `needer_feedbacks`
--

INSERT INTO `needer_feedbacks` (`needer_feedback_id`, `needer_id`, `needer_feedback_message`, `needer_feedback_date`) VALUES
(1, 0, 'good', '2012-03-21 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `needy_booking_details`
--

CREATE TABLE `needy_booking_details` (
  `needer_booking_id` int(11) NOT NULL,
  `needer_id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delivery_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- Table structure for table `setting_cities`
--

CREATE TABLE `setting_cities` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `setting_cities`
--

INSERT INTO `setting_cities` (`city_id`, `state_id`, `city_name`) VALUES
(3, 5, 'kurukshretra'),
(6, 15, 'ankleshwer'),
(7, 16, 'shirdi'),
(8, 16, 'shirdi'),
(9, 16, 'shirdi');

-- --------------------------------------------------------

--
-- Table structure for table `setting_pincode`
--

CREATE TABLE `setting_pincode` (
  `pincode_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `setting_pincode`
--

INSERT INTO `setting_pincode` (`pincode_id`, `city_id`, `pincode`) VALUES
(1, 0, 393002),
(2, 0, 154525);

-- --------------------------------------------------------

--
-- Table structure for table `setting_states`
--

CREATE TABLE `setting_states` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `setting_states`
--

INSERT INTO `setting_states` (`state_id`, `state_name`) VALUES
(14, ''),
(15, 'guj'),
(16, 'mp'),
(17, 'mah'),
(18, 'hr'),
(19, 'ank');

-- --------------------------------------------------------

--
-- Table structure for table `setting_users`
--

CREATE TABLE `setting_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email_id` varchar(50) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `setting_users`
--

INSERT INTO `setting_users` (`user_id`, `user_name`, `user_email_id`, `user_password`, `photo`) VALUES
(2, 'anjali', 'anjli@123gmail.com', '2345678', 'dt'),
(3, 'aditi', 'adi122@gmail.com', '123456', 'ft'),
(4, 'pragya', 'pragya123@gmail.com', '436657577', '356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors_feedback`
--
ALTER TABLE `donors_feedback`
  ADD PRIMARY KEY (`donor_feedback_id`);

--
-- Indexes for table `donor_detail`
--
ALTER TABLE `donor_detail`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `donor_donation_detail`
--
ALTER TABLE `donor_donation_detail`
  ADD PRIMARY KEY (`donation_detail_id`);

--
-- Indexes for table `needer_booking_details`
--
ALTER TABLE `needer_booking_details`
  ADD PRIMARY KEY (`needer_booking_id`);

--
-- Indexes for table `needer_detail`
--
ALTER TABLE `needer_detail`
  ADD PRIMARY KEY (`needer_id`);

--
-- Indexes for table `needer_feedbacks`
--
ALTER TABLE `needer_feedbacks`
  ADD PRIMARY KEY (`needer_feedback_id`);

--
-- Indexes for table `needy_booking_details`
--
ALTER TABLE `needy_booking_details`
  ADD PRIMARY KEY (`needer_booking_id`);

--
-- Indexes for table `setting_cities`
--
ALTER TABLE `setting_cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `setting_pincode`
--
ALTER TABLE `setting_pincode`
  ADD PRIMARY KEY (`pincode_id`);

--
-- Indexes for table `setting_states`
--
ALTER TABLE `setting_states`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `setting_users`
--
ALTER TABLE `setting_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors_feedback`
--
ALTER TABLE `donors_feedback`
  MODIFY `donor_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donor_detail`
--
ALTER TABLE `donor_detail`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `donor_donation_detail`
--
ALTER TABLE `donor_donation_detail`
  MODIFY `donation_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `needer_booking_details`
--
ALTER TABLE `needer_booking_details`
  MODIFY `needer_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `needer_detail`
--
ALTER TABLE `needer_detail`
  MODIFY `needer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `needer_feedbacks`
--
ALTER TABLE `needer_feedbacks`
  MODIFY `needer_feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `needy_booking_details`
--
ALTER TABLE `needy_booking_details`
  MODIFY `needer_booking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting_cities`
--
ALTER TABLE `setting_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `setting_pincode`
--
ALTER TABLE `setting_pincode`
  MODIFY `pincode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `setting_states`
--
ALTER TABLE `setting_states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `setting_users`
--
ALTER TABLE `setting_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
