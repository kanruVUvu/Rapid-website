-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 01:04 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u226228762_stage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ticket`
--

CREATE TABLE `admin_ticket` (
  `ID` int(11) NOT NULL,
  `ticket_request` text NOT NULL,
  `ticket_status` text NOT NULL,
  `Retailer_name` text NOT NULL,
  `Date_of_response` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_ticket`
--

INSERT INTO `admin_ticket` (`ID`, `ticket_request`, `ticket_status`, `Retailer_name`, `Date_of_response`) VALUES
(1, '1000', 'approved', 'RETAILER', '2021-06-09 15:43:12'),
(2, '1000', 'approved', 'RETAILER 1', '2021-06-10 09:17:17'),
(3, '100', 'approved', 'RETAILER 1', '2021-06-10 12:45:13'),
(4, '10', 'rejected', 'RETAILER 1', '2021-06-10 12:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `cart_information`
--

CREATE TABLE `cart_information` (
  `ID` int(255) NOT NULL,
  `current_date_booking` date DEFAULT current_timestamp(),
  `no_of_tickets` varchar(255) NOT NULL,
  `ticket_price` varchar(255) NOT NULL,
  `ticket_price_integer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactusformtable`
--

CREATE TABLE `contactusformtable` (
  `ID` int(255) NOT NULL,
  `full_name` text NOT NULL,
  `mail_address` text NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `queries_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactusformtable`
--

INSERT INTO `contactusformtable` (`ID`, `full_name`, `mail_address`, `phone_number`, `queries_info`) VALUES
(1, 'TEST', 'test@gmail.com', '+91 - 7348816820', 'Test Query'),
(2, 'test', 'test@gmail.com', '+91 - 7348816820', 'test Query'),
(3, 'Contact_Test', 'dheerajraopathur@gmail.com', '+91 - 7348816820', 'Test Query'),
(4, 'TEST', 'TEST@GMAIL.COM', '+91 - 7348816820', 'Test Query'),
(5, 'Test', 'test@gmail.com', '+91 - 7348816820', 'Test Query'),
(6, 'Test', 'test@gmail.com', '+91 - 7348816820', 'Test Enquiry');

-- --------------------------------------------------------

--
-- Table structure for table `customerdashboardlogin`
--

CREATE TABLE `customerdashboardlogin` (
  `ID` int(255) NOT NULL,
  `mail_address` text NOT NULL,
  `password` text NOT NULL,
  `login_as_type` text NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_mailid` varchar(255) NOT NULL,
  `user_phoneno` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdashboardlogin`
--

INSERT INTO `customerdashboardlogin` (`ID`, `mail_address`, `password`, `login_as_type`, `user_name`, `user_mailid`, `user_phoneno`, `user_address`) VALUES
(1, 'dheerajraopathur@gmail.com', 'wh123', 'ADMINISTRATOR', 'Manoj', 'manoj@gmail.com', '+91 - 8765445678', 'Banashankari'),
(2, 'wholesaler2@gmail.com', 'wh456', 'ADMINISTRATOR', 'Suraj', 'suraj@gmail.com', '+91 - 8768990456', 'Koramangala'),
(3, 'retailer1@gmail.com', 'retailer123', 'PARTNER', 'RETAILER 1', 'test@gmail.com', '8765434567', 'Jayanagar,bangalore'),
(11, 'retailer2@retailer2.com', '', 'PARTNER', 'Retailer2', '', '7539514560', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_checkout_customerdetails`
--

CREATE TABLE `payment_checkout_customerdetails` (
  `ID` int(255) NOT NULL,
  `current_date_booking` date NOT NULL,
  `mail_address_checkout` text NOT NULL,
  `full_name_checkout` text NOT NULL,
  `phone_no_checkout` varchar(255) NOT NULL,
  `total_no_of_tickets` int(255) NOT NULL DEFAULT 0,
  `total_amount_checkout` int(255) NOT NULL DEFAULT 0,
  `ticket_bought_from` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_checkout_customerdetails`
--

INSERT INTO `payment_checkout_customerdetails` (`ID`, `current_date_booking`, `mail_address_checkout`, `full_name_checkout`, `phone_no_checkout`, `total_no_of_tickets`, `total_amount_checkout`, `ticket_bought_from`) VALUES
(1, '0000-00-00', 'TEST@TEST.com', 'TEST', '9874563210', 20, 2000, 'Online'),
(2, '0000-00-00', 'TEST2@TEST2.com', 'TEST2', '7894561223', 30, 3000, 'Online'),
(3, '0000-00-00', 'TEST3@TEST3.com', 'TEST3', '7894561223', 1, 100, 'Online'),
(4, '2021-06-09', 'TEST4@TEST4.com', 'TEST4', '7418529630', 3, 300, 'RETAILER 1'),
(5, '2021-06-09', 'TEST5@TEST5.com', 'TEST5', '7539514560', 1, 100, 'RETAILER 1'),
(6, '2021-06-09', 'TEST6@TEST6.com', 'TEST6', '7389806195', 1, 100, 'RETAILER 1'),
(7, '2021-06-10', 'test7@test7.com', 'test7', '4569871230', 10, 1000, 'RETAILER 1');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_cart`
--

CREATE TABLE `retailer_cart` (
  `ID` int(11) NOT NULL,
  `ticket` text NOT NULL,
  `ticket_number` text NOT NULL,
  `ticket_price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer_cart`
--

INSERT INTO `retailer_cart` (`ID`, `ticket`, `ticket_number`, `ticket_price`) VALUES
(7, '3 TICKETS', '3', '300');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_info`
--

CREATE TABLE `retailer_info` (
  `ID` int(255) NOT NULL,
  `login_mail_id` text NOT NULL,
  `name_retailer` text NOT NULL,
  `contact_number_retailer` text NOT NULL,
  `email_id_retailer` text NOT NULL,
  `tickets_assigned_retailer` int(255) NOT NULL DEFAULT 0,
  `tickets_available_retailer` int(255) NOT NULL DEFAULT 0,
  `tickets_sold_retailer` int(255) NOT NULL DEFAULT 0,
  `revenue_retailer` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer_info`
--

INSERT INTO `retailer_info` (`ID`, `login_mail_id`, `name_retailer`, `contact_number_retailer`, `email_id_retailer`, `tickets_assigned_retailer`, `tickets_available_retailer`, `tickets_sold_retailer`, `revenue_retailer`) VALUES
(2, 'retailer1@gmail.com', 'RETAILER 1', '8765434567', 'test@gmail.com', 2110, 2095, 15, 1500),
(6, '', 'Retailer2', '7539514560', 'retailer2@retailer2.com', 0, 2095, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `retailer_request_ticket`
--

CREATE TABLE `retailer_request_ticket` (
  `ID` int(11) NOT NULL,
  `ticket_request` text NOT NULL,
  `Retailer_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sold_ticket_details`
--

CREATE TABLE `sold_ticket_details` (
  `ID` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `client_phone_no` text NOT NULL,
  `client_email` text NOT NULL,
  `ticket_number` text NOT NULL,
  `ticket_sold_date_time` datetime NOT NULL,
  `ticket_bought_from` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold_ticket_details`
--

INSERT INTO `sold_ticket_details` (`ID`, `client_name`, `client_phone_no`, `client_email`, `ticket_number`, `ticket_sold_date_time`, `ticket_bought_from`) VALUES
(1, 'TEST', '9874563210', 'TEST@TEST.com', '1', '2021-06-09 14:32:48', 'Online'),
(2, 'TEST', '9874563210', 'TEST@TEST.com', '2', '2021-06-09 14:32:48', 'Online'),
(3, 'TEST', '9874563210', 'TEST@TEST.com', '3', '2021-06-09 14:32:48', 'Online'),
(4, 'TEST', '9874563210', 'TEST@TEST.com', '4', '2021-06-09 14:32:48', 'Online'),
(5, 'TEST', '9874563210', 'TEST@TEST.com', '5', '2021-06-09 14:32:48', 'Online'),
(6, 'TEST', '9874563210', 'TEST@TEST.com', '6', '2021-06-09 14:32:48', 'Online'),
(7, 'TEST', '9874563210', 'TEST@TEST.com', '7', '2021-06-09 14:32:48', 'Online'),
(8, 'TEST', '9874563210', 'TEST@TEST.com', '8', '2021-06-09 14:32:48', 'Online'),
(9, 'TEST', '9874563210', 'TEST@TEST.com', '9', '2021-06-09 14:32:48', 'Online'),
(10, 'TEST', '9874563210', 'TEST@TEST.com', '10', '2021-06-09 14:32:48', 'Online'),
(11, 'TEST', '9874563210', 'TEST@TEST.com', '11', '2021-06-09 14:32:48', 'Online'),
(12, 'TEST', '9874563210', 'TEST@TEST.com', '12', '2021-06-09 14:32:48', 'Online'),
(13, 'TEST', '9874563210', 'TEST@TEST.com', '13', '2021-06-09 14:32:48', 'Online'),
(14, 'TEST', '9874563210', 'TEST@TEST.com', '14', '2021-06-09 14:32:48', 'Online'),
(15, 'TEST', '9874563210', 'TEST@TEST.com', '15', '2021-06-09 14:32:49', 'Online'),
(16, 'TEST', '9874563210', 'TEST@TEST.com', '16', '2021-06-09 14:32:49', 'Online'),
(17, 'TEST', '9874563210', 'TEST@TEST.com', '17', '2021-06-09 14:32:49', 'Online'),
(18, 'TEST', '9874563210', 'TEST@TEST.com', '18', '2021-06-09 14:32:49', 'Online'),
(19, 'TEST', '9874563210', 'TEST@TEST.com', '19', '2021-06-09 14:32:49', 'Online'),
(20, 'TEST', '9874563210', 'TEST@TEST.com', '20', '2021-06-09 14:32:49', 'Online'),
(21, 'TEST2', '7894561223', 'TEST2@TEST2.com', '21', '2021-06-09 14:33:08', 'Online'),
(22, 'TEST2', '7894561223', 'TEST2@TEST2.com', '22', '2021-06-09 14:33:08', 'Online'),
(23, 'TEST2', '7894561223', 'TEST2@TEST2.com', '23', '2021-06-09 14:33:08', 'Online'),
(24, 'TEST2', '7894561223', 'TEST2@TEST2.com', '24', '2021-06-09 14:33:08', 'Online'),
(25, 'TEST2', '7894561223', 'TEST2@TEST2.com', '25', '2021-06-09 14:33:08', 'Online'),
(26, 'TEST2', '7894561223', 'TEST2@TEST2.com', '26', '2021-06-09 14:33:08', 'Online'),
(27, 'TEST2', '7894561223', 'TEST2@TEST2.com', '27', '2021-06-09 14:33:08', 'Online'),
(28, 'TEST2', '7894561223', 'TEST2@TEST2.com', '28', '2021-06-09 14:33:08', 'Online'),
(29, 'TEST2', '7894561223', 'TEST2@TEST2.com', '29', '2021-06-09 14:33:08', 'Online'),
(30, 'TEST2', '7894561223', 'TEST2@TEST2.com', '30', '2021-06-09 14:33:08', 'Online'),
(31, 'TEST2', '7894561223', 'TEST2@TEST2.com', '31', '2021-06-09 14:33:08', 'Online'),
(32, 'TEST2', '7894561223', 'TEST2@TEST2.com', '32', '2021-06-09 14:33:08', 'Online'),
(33, 'TEST2', '7894561223', 'TEST2@TEST2.com', '33', '2021-06-09 14:33:08', 'Online'),
(34, 'TEST2', '7894561223', 'TEST2@TEST2.com', '34', '2021-06-09 14:33:08', 'Online'),
(35, 'TEST2', '7894561223', 'TEST2@TEST2.com', '35', '2021-06-09 14:33:08', 'Online'),
(36, 'TEST2', '7894561223', 'TEST2@TEST2.com', '36', '2021-06-09 14:33:08', 'Online'),
(37, 'TEST2', '7894561223', 'TEST2@TEST2.com', '37', '2021-06-09 14:33:08', 'Online'),
(38, 'TEST2', '7894561223', 'TEST2@TEST2.com', '38', '2021-06-09 14:33:09', 'Online'),
(39, 'TEST2', '7894561223', 'TEST2@TEST2.com', '39', '2021-06-09 14:33:09', 'Online'),
(40, 'TEST2', '7894561223', 'TEST2@TEST2.com', '40', '2021-06-09 14:33:09', 'Online'),
(41, 'TEST2', '7894561223', 'TEST2@TEST2.com', '41', '2021-06-09 14:33:09', 'Online'),
(42, 'TEST2', '7894561223', 'TEST2@TEST2.com', '42', '2021-06-09 14:33:09', 'Online'),
(43, 'TEST2', '7894561223', 'TEST2@TEST2.com', '43', '2021-06-09 14:33:09', 'Online'),
(44, 'TEST2', '7894561223', 'TEST2@TEST2.com', '44', '2021-06-09 14:33:09', 'Online'),
(45, 'TEST2', '7894561223', 'TEST2@TEST2.com', '45', '2021-06-09 14:33:09', 'Online'),
(46, 'TEST2', '7894561223', 'TEST2@TEST2.com', '46', '2021-06-09 14:33:09', 'Online'),
(47, 'TEST2', '7894561223', 'TEST2@TEST2.com', '47', '2021-06-09 14:33:09', 'Online'),
(48, 'TEST2', '7894561223', 'TEST2@TEST2.com', '48', '2021-06-09 14:33:09', 'Online'),
(49, 'TEST2', '7894561223', 'TEST2@TEST2.com', '49', '2021-06-09 14:33:09', 'Online'),
(50, 'TEST2', '7894561223', 'TEST2@TEST2.com', '50', '2021-06-09 14:33:09', 'Online'),
(51, 'TEST3', '7894561223', 'TEST3@TEST3.com', '51', '2021-06-09 17:25:25', 'Online'),
(52, 'TEST4', '7418529630', 'TEST4@TEST4.com', '52', '2021-06-09 17:45:26', 'RETAILER 1'),
(53, 'TEST4', '7418529630', 'TEST4@TEST4.com', '53', '2021-06-09 17:45:26', 'RETAILER 1'),
(54, 'TEST4', '7418529630', 'TEST4@TEST4.com', '54', '2021-06-09 17:45:26', 'RETAILER 1'),
(55, 'TEST5', '7539514560', 'TEST5@TEST5.com', '55', '2021-06-09 17:59:29', 'RETAILER 1'),
(56, 'TEST6', '7389806195', 'TEST6@TEST6.com', '56', '2021-06-09 18:09:41', 'RETAILER 1'),
(57, 'test7', '4569871230', 'test7@test7.com', '57', '2021-06-10 09:18:10', 'RETAILER 1'),
(58, 'test7', '4569871230', 'test7@test7.com', '58', '2021-06-10 09:18:10', 'RETAILER 1'),
(59, 'test7', '4569871230', 'test7@test7.com', '59', '2021-06-10 09:18:10', 'RETAILER 1'),
(60, 'test7', '4569871230', 'test7@test7.com', '60', '2021-06-10 09:18:10', 'RETAILER 1'),
(61, 'test7', '4569871230', 'test7@test7.com', '61', '2021-06-10 09:18:10', 'RETAILER 1'),
(62, 'test7', '4569871230', 'test7@test7.com', '62', '2021-06-10 09:18:10', 'RETAILER 1'),
(63, 'test7', '4569871230', 'test7@test7.com', '63', '2021-06-10 09:18:10', 'RETAILER 1'),
(64, 'test7', '4569871230', 'test7@test7.com', '64', '2021-06-10 09:18:10', 'RETAILER 1'),
(65, 'test7', '4569871230', 'test7@test7.com', '65', '2021-06-10 09:18:10', 'RETAILER 1'),
(66, 'test7', '4569871230', 'test7@test7.com', '66', '2021-06-10 09:18:10', 'RETAILER 1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_info`
--

CREATE TABLE `ticket_info` (
  `ID` int(11) NOT NULL,
  `total_ticket` text NOT NULL,
  `unassigned_ticket` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_info`
--

INSERT INTO `ticket_info` (`ID`, `total_ticket`, `unassigned_ticket`) VALUES
(1, '34728', '32552');

-- --------------------------------------------------------

--
-- Table structure for table `wholesalers_info`
--

CREATE TABLE `wholesalers_info` (
  `ID` int(255) NOT NULL,
  `wholesaler_name` varchar(255) NOT NULL,
  `wholesaler_mail_id` varchar(255) NOT NULL,
  `wholesaler_phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wholesaler_assignment`
--

CREATE TABLE `wholesaler_assignment` (
  `ID` int(255) NOT NULL,
  `wholesaler_name` varchar(255) NOT NULL,
  `wholesaler_assigned_tickets` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ticket`
--
ALTER TABLE `admin_ticket`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cart_information`
--
ALTER TABLE `cart_information`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactusformtable`
--
ALTER TABLE `contactusformtable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customerdashboardlogin`
--
ALTER TABLE `customerdashboardlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment_checkout_customerdetails`
--
ALTER TABLE `payment_checkout_customerdetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `retailer_cart`
--
ALTER TABLE `retailer_cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `retailer_info`
--
ALTER TABLE `retailer_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `retailer_request_ticket`
--
ALTER TABLE `retailer_request_ticket`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sold_ticket_details`
--
ALTER TABLE `sold_ticket_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ticket_info`
--
ALTER TABLE `ticket_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wholesalers_info`
--
ALTER TABLE `wholesalers_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wholesaler_assignment`
--
ALTER TABLE `wholesaler_assignment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ticket`
--
ALTER TABLE `admin_ticket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_information`
--
ALTER TABLE `cart_information`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactusformtable`
--
ALTER TABLE `contactusformtable`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customerdashboardlogin`
--
ALTER TABLE `customerdashboardlogin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_checkout_customerdetails`
--
ALTER TABLE `payment_checkout_customerdetails`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `retailer_cart`
--
ALTER TABLE `retailer_cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `retailer_info`
--
ALTER TABLE `retailer_info`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `retailer_request_ticket`
--
ALTER TABLE `retailer_request_ticket`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sold_ticket_details`
--
ALTER TABLE `sold_ticket_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `ticket_info`
--
ALTER TABLE `ticket_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wholesalers_info`
--
ALTER TABLE `wholesalers_info`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wholesaler_assignment`
--
ALTER TABLE `wholesaler_assignment`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
