-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 11:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `search_for_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `owner_id` int(10) DEFAULT NULL,
  `p_d_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `user_id`, `owner_id`, `p_d_id`) VALUES
(2, 'arun', 'arun1@gmail.com', '12345678', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `interested_property`
--

CREATE TABLE `interested_property` (
  `id` int(50) NOT NULL,
  `p_details_id` int(50) DEFAULT NULL,
  `owner_id` int(50) DEFAULT NULL,
  `user_id` int(50) DEFAULT NULL,
  `confirm` varchar(50) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interested_property`
--

INSERT INTO `interested_property` (`id`, `p_details_id`, `owner_id`, `user_id`, `confirm`) VALUES
(70, 124, 4, 8, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `email`, `password`, `contact`, `user_id`) VALUES
(2, 'Nayeem', 'nayeem@gmail.com', '1234', '01531965575', NULL),
(3, 'Nayeem Ahmed', 'nayeemr.45@gmail.com', '1234567890', '12345678901', NULL),
(4, 'shamu', 'shamu@gmail.com', '12345678', '01531965575', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `property_details`
--

CREATE TABLE `property_details` (
  `id` int(10) NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `area` varchar(10) NOT NULL,
  `thana` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `floor` varchar(10) NOT NULL,
  `room` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Newly Added',
  `image` varchar(200) NOT NULL,
  `approve` varchar(50) NOT NULL DEFAULT 'no',
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `owner_id` int(10) DEFAULT NULL,
  `user_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_details`
--

INSERT INTO `property_details` (`id`, `house_no`, `street`, `area`, `thana`, `district`, `floor`, `room`, `price`, `status`, `image`, `approve`, `latitude`, `longitude`, `owner_id`, `user_id`) VALUES
(57, '12/A', '11', 'abdullahpu', 'uttara', 'dhaka', '2nd', '2', 10000, 'Newly Added', '68143.jpg', 'yes', '23.7322736', '90.3846298', 4, NULL),
(58, '15/5', '26', 'azampur', 'uttara', 'dhaka', '5th', '4', 30000, 'Someone Interested', '95645.jpg', 'yes', '23.7322736', '90.3846288', 4, NULL),
(59, '91/A', 'pilkhana road', 'azimpur', 'lalbagh', 'dhaka', '2nd', '4', 17000, 'Newly Added', '69436.jpg', 'yes', '23.732267', '90.3846274', 4, NULL),
(60, '82/1', '21', 'aftabnagar', 'banasree', 'dhaka', '5th', '5', 45000, 'Newly Added', '88388.jpg', 'yes', '23.7322653', '90.384625', 4, NULL),
(61, '9/D', '60 feet', 'agargaon', 'agargaon', 'dhaka', '4th', '2', 13000, 'Newly Added', '3279.jpg', 'yes', '23.7322765', '90.3846322', 4, NULL),
(62, '19/2', '12', 'bijaynagar', 'motijheel', 'dhaka', '7', '4', 38000, 'Newly Added', '839314.jpg', 'yes', '23.7322726', '90.3846285', 4, NULL),
(63, '92/D', '9', 'banasree', 'rampura', 'dhaka', '6', '3', 25000, 'Newly Added', '911413.jpg', 'yes', '23.7322778', '90.3846306', 4, NULL),
(64, '67/E', '12', 'banani', 'banani', 'dhaka', '9th', '6', 40000, 'Newly Added', '68231.jpg', 'yes', '23.7322702', '90.3846304', 4, NULL),
(65, '72/B', '8', 'baily road', 'mogbazar', 'dhaka', '7th', '4', 35000, 'Newly Added', '921813.jpg', 'yes', '23.7322793', '90.3846308', 4, NULL),
(66, '56/C', '19', 'bashundhar', 'khilkhet', 'dhaka', '3rd', '5', 38000, 'Newly Added', '338314.jpg', 'yes', '23.7322753', '90.3846319', 4, NULL),
(67, '42/D', '3', 'cantonment', 'kafrul', 'dhaka', '6th', '4', 29000, 'Newly Added', '44358.jpg', 'yes', '23.7322708', '90.3846295', 4, NULL),
(68, '18/6', '22', 'chand udya', 'mohammadpur', 'dhaka', '2nd', '2', 9000, 'Newly Added', '9317n a.jpg', 'yes', '23.732269', '90.3846284', 4, NULL),
(69, '73/F', '5', 'central ro', 'kolabagan', 'dhaka', '6th', '3', 31000, 'Newly Added', '82541.jpg', 'yes', '23.7322741', '90.3846304', 4, NULL),
(70, '30/E', '3', 'demra', 'demra', 'dhaka', '1st', '2', 6000, 'Newly Added', '73029.jpg', 'yes', '23.7322619', '90.3846189', 4, NULL),
(71, '81/4', '8', 'dhanmondi', 'dhanmondi', 'dhaka', '7th', '5', 39000, 'Newly Added', '266414.jpg', 'yes', '23.732279', '90.3846304', 4, NULL),
(72, '74/3', '10', 'darussalam', 'kallyanpur', 'dhaka', '6th', '3', 19000, 'Newly Added', '414511.jpg', 'yes', '23.7322985', '90.3845464', 4, NULL),
(73, '3/3', '9', 'dania', 'dania', 'dhaka', '1st', '2', 7000, 'Newly Added', '4703n a.jpg', 'yes', '23.7322964', '90.384523', 4, NULL),
(74, '7/C', '7', 'diabari', 'uttara', 'dhaka', '3rd', '3', 15000, 'Someone Interested', '58795.jpg', 'yes', '23.7322713', '90.3846269', 4, NULL),
(75, '34/6', '14', 'elephant r', 'newmarket', 'dhaka', '8th', '4', 24000, 'Newly Added', '31263.jpg', 'yes', '23.7322735', '90.3846292', 4, NULL),
(76, '29/E', '9', 'eastern ho', 'uttara', 'dhaka', '10', '5', 35000, 'Newly Added', '613614.jpg', 'yes', '23.7322723', '90.3846282', 4, NULL),
(77, '35/2', '7', 'eskaton', 'mogbazar', 'dhaka', '8th', '3', 18000, 'Newly Added', '36910.jpg', 'yes', '23.7322733', '90.3846343', 4, NULL),
(78, '28/D', '8', 'fakirapool', 'motijheel', 'dhaka', '4th', '4', 20000, 'Newly Added', '113711.jpg', 'yes', '23.7557661', '90.3978032', 4, NULL),
(79, '62/A', 'block-D', 'farmgate', 'tejgaon', 'dhaka', '5th', '3', 23000, 'Newly Added', '809912.jpg', 'yes', '23.7322708', '90.3846269', 4, NULL),
(80, '36/D', '7', 'gabtoli', 'gabtoli', 'dhaka', '8th', '5', 32000, 'Newly Added', '70246.jpg', 'yes', '23.7322784', '90.3846329', 4, NULL),
(81, '13/G', 'bongshal', 'gulistan', 'gulistan', 'dhaka', '4th', '6', 30000, 'Newly Added', '90494.jpg', 'yes', '23.7322735', '90.3846289', 4, NULL),
(82, '78/D', 'block-E', 'gulshan', 'banani', 'dhaka', '10th', '6', 40000, 'Newly Added', '155414.jpg', 'yes', '23.7557661', '90.3978032', 4, NULL),
(83, '24/B', 'modhubagh', 'hatirjheel', 'hatirjheel', 'dhaka', '7th', '3', 17000, 'Newly Added', '86382.jpg', 'yes', '23.7557661', '90.3978032', 4, NULL),
(84, '47/3', '3', 'hatirpool', 'newmarket', 'dhaka', '8th', '3', 30000, 'Newly Added', '67079.jpg', 'yes', '23.7322722', '90.3846274', 4, NULL),
(85, '18/A', '3', 'hajipara', 'hatirjheel', 'dhaka', '4th', '3', 33000, 'Newly Added', '399910.jpg', 'yes', '23.7557661', '90.3978032', 4, NULL),
(86, '70/3', 'Sikder Housing', 'hazaribagh', 'rayerbazar', 'dhaka', '6th', '3', 17000, 'Newly Added', '611513.jpg', 'yes', '23.7557661', '90.3978032', 4, NULL),
(87, '53/D', '8', 'indira roa', 'tejgaon', 'dhaka', '8th', '3', 24000, 'Newly Added', '27724.jpg', 'yes', '23.7557661', '90.3978032', 4, NULL),
(88, '84/E', 'block-B', 'iqbal road', 'mohammadpur', 'dhaka', '5th', '5', 36000, 'Newly Added', '37556.jpg', 'yes', '23.7322708', '90.3846269', 4, NULL),
(89, '27/C', 'block-A', 'japan gard', 'mohammadpur', 'dhaka', '10', '3', 25000, 'Newly Added', '62158.jpg', 'yes', '23.732276', '90.3846306', 4, NULL),
(90, '7/F', 'swami bagh', 'jatrabari', 'jatrabari', 'dhaka', '8th', '3', 14000, 'Newly Added', '708110.jpg', 'yes', '23.7322803', '90.384637', 4, NULL),
(91, '37/B', 'staff quater', 'jigatola', 'dhanmondi', 'dhaka', '3rd', '3', 16000, 'Newly Added', '801312.jpg', 'yes', '23.7322735', '90.3846297', 4, NULL),
(92, '80/7', 'block-F', 'jinjira', 'sutrapur', 'dhaka', '1st', '2', 10000, 'Newly Added', '670113.jpg', 'yes', '23.732273', '90.384628', 4, NULL),
(93, '58/5', '3', 'johnshon r', 'sutrapur', 'dhaka', '5th', '4', 21000, 'Newly Added', '27783.jpg', 'yes', '23.7322722', '90.3846274', 4, NULL),
(94, '114/B', '13', 'kallyanpur', 'kallyanpur', 'dhaka', '7th', '4', 19000, 'Newly Added', '90002.jpg', 'yes', '23.7322727', '90.3846326', 4, NULL),
(95, '39/D', '4', 'karwan baz', 'tejgaon', 'dhaka', '9th', '5', 32000, 'Newly Added', '16086.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(96, '116/B', 'block-B', 'kataban', 'newmarket', 'dhaka', '9th', '3', 27000, 'Newly Added', '971013.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(97, '101/2', 'block-D', 'kalabagan', 'kalabagan', 'dhaka', '7th', '5', 38000, 'Newly Added', '98807.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(98, '100/A', '11', 'kakrail', 'malibagh', 'dhaka', '8th', '4', 23000, 'Newly Added', '606810.jpg', 'yes', '23.7322786', '90.3846392', 4, NULL),
(99, '102/C', 'block-f', 'lalmatia', 'mohammadpur', 'dhaka', '8th', '5', 37000, 'Newly Added', '939614.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(100, '107/5', 'section', 'lalbagh', 'lalbagh', 'dhaka', '5tth', '3', 14000, 'Newly Added', '51543.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(101, '105/F', 'block-A', 'link road', 'badda', 'dhaka', '7th', '4', 29000, 'Newly Added', '91735.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(102, '65/A', '3', 'malibagh', 'mogbazar', 'dhaka', '8th', '6', 36000, 'Newly Added', '740512.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(103, '108/6', '17', 'mogbazar', 'mogbazar', 'dhaka', '8th', '3', 27000, 'Newly Added', '32538.jpg', 'yes', '23.732269', '90.384625', 4, NULL),
(104, '109/E', 'pallabi', 'mirpur', 'mirpur', 'dhaka', '10th', '4', 30000, 'Newly Added', '70310.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(105, '99/10', '11', 'mahanagar ', 'hatirjheel', 'dhaka', '6th', '4', 33000, 'Newly Added', '57152.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(106, '16', 'bosila', 'mohammadpu', 'mohammadpur', 'dhaka', '10th', '3', 16000, 'Newly Added', '67811.jpg', 'yes', '23.7322713', '90.3846339', 4, NULL),
(107, '91/E', 'block-C', 'newmarket', 'newmarket', 'dhaka', '9th', '3', 30000, 'Newly Added', '784813.jpg', 'yes', '23.7558021', '90.4018702', 4, NULL),
(108, '78/D', '3', 'nurjahan r', 'mohammadpur', 'dhaka', '4th', '3', 14000, 'Newly Added', '51139.jpg', 'yes', '23.7322781', '90.3846348', 4, NULL),
(109, '89/B', '17', 'nayapaltan', 'mogbazar', 'dhaka', '5th', '3', 19000, 'Newly Added', '1767.jpg', 'yes', '23.7322784', '90.3846319', 4, NULL),
(110, '61/2', '17', 'nawabpur r', 'sutrapur', 'dhaka', '3rd', '2', 10000, 'Newly Added', '814711.jpg', 'yes', '23.7322767', '90.384631', 4, NULL),
(111, '44/E', 'block-C', 'nilkhet', 'newmarket', 'dhaka', '6th', '4', 27000, 'Newly Added', '77133.jpg', 'yes', '23.7322735', '90.3846295', 4, NULL),
(112, '23/E', 'english road', 'old dhaka', 'sutrapur', 'dhaka', '2nd', '2', 7000, 'Newly Added', '36404.jpg', 'yes', '23.7322746', '90.3846321', 4, NULL),
(113, '67/E', 'housing', 'panthapath', 'kalabagan', 'dhaka', '9th', '5', 38000, 'Newly Added', '475914.jpg', 'yes', '23.7322759', '90.3846292', 4, NULL),
(114, '145/A', 'block-D', 'paribagh', 'newmarket', 'dhaka', '8th', '6', 40000, 'Newly Added', '82731.jpg', 'yes', '23.7322759', '90.3846292', 4, NULL),
(115, '130/3', '60 feet', 'paikpara', 'mirpur', 'dhaka', '4th', '3', 16000, 'Newly Added', '30207.jpg', 'yes', '23.7322786', '90.3846392', 4, NULL),
(116, '123/E', '12', 'pilkhana', 'dhanmondi', 'dhaka', '9th', '3', 34000, 'Newly Added', '39586.jpg', 'yes', '23.7322746', '90.3846321', 4, NULL),
(117, '89/B', 'block-B', 'purana pal', 'paltan', 'dhaka', '7th', '2', 14000, 'Newly Added', '54923.jpg', 'yes', '23.7322749', '90.3846314', 4, NULL),
(124, 'D-2/8', 'pilkhana road', 'arambagh', 'dhanmondi', 'dhaka', '1st', '3', 10000, 'Booked', '355711.jpg', 'yes', '23.7032461', '90.4031033', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `members` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `contact_no`, `type`, `members`) VALUES
(6, 'nayeem', 'abc@gmail.com', '1234', '015', 'Student', '1-3'),
(7, 'noman', 'noman@gmail.com', '1234', '015', 'student', '5'),
(8, 'rifat', 'rifat@gmail.com', '12345678', '01531965576', 'bachelor', '1-3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_d_id` (`p_d_id`);

--
-- Indexes for table `interested_property`
--
ALTER TABLE `interested_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `p_details_id` (`p_details_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `property_details`
--
ALTER TABLE `property_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interested_property`
--
ALTER TABLE `interested_property`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_details`
--
ALTER TABLE `property_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `admin_ibfk_3` FOREIGN KEY (`p_d_id`) REFERENCES `property_details` (`id`);

--
-- Constraints for table `interested_property`
--
ALTER TABLE `interested_property`
  ADD CONSTRAINT `interested_property_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`),
  ADD CONSTRAINT `interested_property_ibfk_2` FOREIGN KEY (`p_details_id`) REFERENCES `property_details` (`id`),
  ADD CONSTRAINT `interested_property_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `property_details`
--
ALTER TABLE `property_details`
  ADD CONSTRAINT `property_details_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`id`),
  ADD CONSTRAINT `property_details_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
