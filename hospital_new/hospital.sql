-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 08:29 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_nm` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `company_nm` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_nm`, `email_id`, `password`, `company_logo`, `company_nm`, `mobile_no`) VALUES
(1, 'Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'img22009logo.png', 'Hospital', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_table`
--

CREATE TABLE `appointment_table` (
  `Appointment_id` int(5) NOT NULL,
  `P_id` int(5) DEFAULT NULL,
  `D_id` int(5) NOT NULL,
  `T_id` int(5) NOT NULL,
  `Fees_amount` int(5) DEFAULT NULL,
  `Created_Date` varchar(100) DEFAULT NULL,
  `message` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_table`
--

INSERT INTO `appointment_table` (`Appointment_id`, `P_id`, `D_id`, `T_id`, `Fees_amount`, `Created_Date`, `message`, `time`, `status`, `reason`) VALUES
(8, 1, 9, 1, 100, '01/02/2019', 'for some operation', '12:00', 1, ''),
(9, 18, 13, 1, 100, '31/01/2019', 'hey good', '14:00', 1, ''),
(10, 19, 14, 1, 100, '28/01/2019', 'for headche', '12:00', 1, ''),
(12, 1, 16, 1, 250, '12/02/2019', 'helloo', '00:00', 1, ''),
(13, 18, 14, 1, 250, '26/02/2019', 'hello all', '15:00', 1, ''),
(14, 6, 21, 1, 250, '2019-11-14', 'fgfhgf', '02:02', 2, 'doctor not available'),
(15, 6, 23, 1, 250, '2019-11-25', 'dfgdg', '14:01', 2, 'ytutyuytu'),
(16, 6, 23, 1, 250, '2019-11-30', 'gjghjghj', '14:01', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `attachment_table`
--

CREATE TABLE `attachment_table` (
  `Attachment_id` int(5) NOT NULL,
  `D_id` int(50) NOT NULL,
  `P_id` int(5) NOT NULL,
  `Report_id` int(5) NOT NULL,
  `Attachment_type` varchar(5) DEFAULT NULL,
  `Created_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachment_table`
--

INSERT INTO `attachment_table` (`Attachment_id`, `D_id`, `P_id`, `Report_id`, `Attachment_type`, `Created_Date`) VALUES
(1, 0, 18, 2, 'Scree', '2019-02-14 00:00:00'),
(2, 0, 18, 3, 'Scree', '2019-02-15 00:00:00'),
(3, 18, 19, 4, '', '2019-02-15 00:00:00'),
(4, 1, 1, 5, 'Pengu', '2019-02-18 00:00:00'),
(5, 1, 1, 6, 'Pengu', '2019-02-18 00:00:00'),
(6, 1, 1, 7, 'socet', '2019-02-18 00:00:00'),
(7, 18, 18, 8, 'h.jpg', '2019-02-18 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_table`
--

CREATE TABLE `doctor_table` (
  `D_id` int(5) NOT NULL,
  `D_experience` varchar(100) DEFAULT NULL,
  `D_degree` varchar(50) DEFAULT NULL,
  `D_Time_From` varchar(100) DEFAULT NULL,
  `D_Time_To` varchar(100) DEFAULT NULL,
  `D_Avail_Day` varchar(100) DEFAULT NULL,
  `uid` int(5) NOT NULL,
  `D_name` varchar(50) NOT NULL,
  `D_contact` varchar(14) NOT NULL,
  `acount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_table`
--

INSERT INTO `doctor_table` (`D_id`, `D_experience`, `D_degree`, `D_Time_From`, `D_Time_To`, `D_Avail_Day`, `uid`, `D_name`, `D_contact`, `acount`) VALUES
(3, '4years', 'MD(nuero)', '09:00', '19:00', 'Monday,Wednesday,Friday', 10, 'sagar betai', '9825740205', 0),
(4, '12years', 'MD(nuero)', '08:00', '19:00', 'Monday,Wednesday,Friday', 11, 'sagar betai', '9825740205', 0),
(5, '20years', 'MBBS', '08:00', '19:00', 'Monday,Wednesday,Friday', 12, 'bharat pandya', '949237498', 0),
(6, '4years', 'Dentel', '08:00', '20:00', 'Monday,Wednesday,Friday', 13, 'amar desai', '9087654312', 1),
(7, '20years', 'Gycnology', '09:00', '18:00', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 14, 'nitin sharma', '8154015548', 0),
(9, '7 years', 'Dentel', '09:00', '19:00', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 15, 'manish shah', '79868237647', 0),
(11, '4years', 'MBBS', '09:00', '20:00', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 16, 'siddarht saikh', '8154015548', 0),
(12, '7 years', 'MD(nuero)', '09:00', '19:00', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 17, 'amin shah', '8154015548', 0),
(13, '5years', 'MD', '08:00', '18:00', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 18, 'simron senon', '2342342343', 0),
(14, '15years', 'MBBS', '08:00', '18:00', 'Monday,Tuesday,Wednesday,Thursday,Friday', 19, 'kashyap rathod', '9898767654', 0),
(15, '7 years', 'Dentel', '09:00', '17:00', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 21, 'sweta sem', '2772135263', 0),
(16, '4years', 'MD(nuero)', '09:00', '18:00', 'Monday,Wednesday,Friday', 22, 'amin shah', '8154015548', 0),
(17, '20years', 'MBBS', '09:00', '17:00', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 23, 'shukla', '9825740205', 0),
(18, '4years', 'MD(nuero)', '09:00', '19:00', 'Monday,Wednesday,Friday', 1, 'Ajay Chauhan', '9510890837', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `Feed_id` int(5) NOT NULL,
  `Feed_description` varchar(2000) DEFAULT NULL,
  `Feed_Date` datetime DEFAULT NULL,
  `User_id` int(5) NOT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Created_Date` datetime DEFAULT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`Feed_id`, `Feed_description`, `Feed_Date`, `User_id`, `Subject`, `Created_Date`, `status`) VALUES
(1, 'good!', NULL, 0, 'nuero', NULL, 0),
(2, 'quickly', NULL, 0, 'medicine', NULL, 0),
(3, 'Good!', '2019-02-13 00:00:00', 1, 'hello kity', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees_table`
--

CREATE TABLE `fees_table` (
  `fid` int(11) NOT NULL,
  `patient_id` int(5) NOT NULL,
  `Fees_paid` int(6) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `Fees_pending` int(6) DEFAULT NULL,
  `Fees_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_table`
--

INSERT INTO `fees_table` (`fid`, `patient_id`, `Fees_paid`, `date`, `Fees_pending`, `Fees_status`) VALUES
(1, 1, 250, '12/02/2019', 1, 1),
(3, 18, 250, '19/02/2019', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient_table`
--

CREATE TABLE `patient_table` (
  `id` int(11) NOT NULL,
  `P_id` int(10) NOT NULL,
  `P_blood_group` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_table`
--

INSERT INTO `patient_table` (`id`, `P_id`, `P_blood_group`) VALUES
(1, 0, 'o+'),
(2, 0, 'o+'),
(3, 20, NULL),
(4, 0, 'b-'),
(5, 23, 'o+');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_table`
--

CREATE TABLE `prescription_table` (
  `Pre_id` int(5) NOT NULL,
  `Attachment` varchar(100) DEFAULT NULL,
  `P_id` int(5) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription_table`
--

INSERT INTO `prescription_table` (`Pre_id`, `Attachment`, `P_id`, `details`) VALUES
(4, 'Screenshot_20180419-160052~2.png', 18, 'for medicine details'),
(5, 'Backup_of_maven.cdr', 1, 'change medicine time');

-- --------------------------------------------------------

--
-- Table structure for table `report_table`
--

CREATE TABLE `report_table` (
  `Report_id` int(5) NOT NULL,
  `Report_details` varchar(100) DEFAULT NULL,
  `Report_Date` datetime DEFAULT NULL,
  `P_id` int(100) NOT NULL,
  `D_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_table`
--

INSERT INTO `report_table` (`Report_id`, `Report_details`, `Report_Date`, `P_id`, `D_id`) VALUES
(4, 'blood reporta afg', '2019-02-15 00:00:00', 19, 18),
(8, ' cough report', '2019-02-18 00:00:00', 18, 18);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_table`
--

CREATE TABLE `treatment_table` (
  `T_id` int(5) NOT NULL,
  `T_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_table`
--

INSERT INTO `treatment_table` (`T_id`, `T_name`) VALUES
(1, 'for knee replacement');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `P_blood_group` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `DOB` date DEFAULT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Zipcode` int(6) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `User_type` varchar(20) NOT NULL,
  `Created_date` datetime NOT NULL,
  `img` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `mname`, `lname`, `email`, `P_blood_group`, `password`, `mobile`, `DOB`, `Address`, `City`, `State`, `Country`, `Zipcode`, `Gender`, `User_type`, `Created_date`, `img`, `role`) VALUES
(1, 'Ajay', 'm.', 'chauhan', 'ajay@gmail.com', 'o+', '827ccb0eea8a706c4c34a16891f84e7b', '9876543210', '2019-02-07', 'tfhthd', 'ahmedabad', 'gujarat', 'India', 380015, 'Male', '', '0000-00-00 00:00:00', 'doctor-02.jpg', 'doctor'),
(3, 'krinal', NULL, 'soni', 'krinalsoni9899@gmail.com', '', '6b54185ccddbef6cc10b6586179db501', '9876543210', NULL, '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', ''),
(4, 'dev', 'm.', 'desai', 'devdesai@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '9879634425', '1999-08-02', 'satellite', 'ahmedabad', 'gujarat', 'India', 380015, '', '', '0000-00-00 00:00:00', '', ''),
(5, 'dalal', NULL, 'drashti', 'datu@gmail.com', '', 'f190ce9ac8445d249747cab7be43f7d5', '9879634424', NULL, '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', ''),
(6, 'Ashifa', 'rafakathusen', 'saiyed', 'alsifasaiyed7824@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', '9824421812', '1998-09-26', 'roshni ', 'ahmedabad', 'gujarat', 'India', 380015, '', '', '0000-00-00 00:00:00', 'doctor-thumb-08.jpg', ''),
(11, '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', 'Koala.jpg', ''),
(13, 'hardik', 'kanubhai', 'patel', 'hardik@gmail.com', '', '143435346', '986756564', '2019-02-08', 'vrundavan complex,sanand', 'sanand', 'gujarat', 'India', 382110, '', 'user', '2019-02-13 00:00:00', 'h.jpg', ''),
(14, 'nirav', 'hiteshbhai', 'patel', 'nirav@gmail.com', '', '1234567', '5645756846', '2019-02-22', 'vrundavan complex,sanand', 'sanand', 'gujarat', 'India', 382110, 'Male', 'user', '2019-02-15 00:00:00', 'Jellyfish.jpg', ''),
(15, 'rashmi ', 'kantibhai', 'patel', 'rashmi@gmail.com', '', '1234567', '8945783644', '2019-02-09', 'vrundavan complex,sanand', 'sanand', 'gujarat', 'India', 382110, 'Female', 'user', '2019-02-01 00:00:00', 'l.jpg', ''),
(16, 'samarht', 'sidhh', 'shah', 'sam@gmail.com', '', '345436346', '5346464574', '2019-02-09', 'gokul appartment,sola bhagwat', 'ahmedabad', 'gujarat', 'India', 382110, 'Male', 'user', '2019-02-07 00:00:00', 'Jellyfish.jpg', ''),
(17, 'harsh', 'nalinbhai', 'patel', 'harsh@gmail.com', '', '7836578', '0987654321', '1997-02-02', 'ghathiya chokadi,sanand', 'sanand', 'gujarat', 'India', 382110, 'Male', 'user', '2019-02-01 00:00:00', 'Screenshot_20180419-160052~2.png', ''),
(18, 'salim', 'sem', 'shah', 'salim@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', '3435547658', '2019-02-01', 'ghathiya chokadi,sanand', 'sanand', 'gujarat', 'India', 382110, 'Male', 'user', '2019-02-07 00:00:00', 'Jellyfish.jpg', 'doctor'),
(19, 'anu', 'bharatbhai ', 'vyas', 'anu4536@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b', '5346464573', '2019-02-08', 'gokul appartment,sola bhagwat', 'ahmedabad', 'gujarat', 'India', 382110, 'Female', '', '0000-00-00 00:00:00', 'd.jpg', 'doctor'),
(21, 'brijesh', 'mafatbhai', 'shah', 'br@gmail.com', 'o+', '2e92962c0b6996add9517e4242ea9bdc', '3435547658', '2019-02-08', 'ghathiya chokadi,sanand', 'sanand', 'gujarat', 'India', 382110, 'Female', 'user', '2019-02-14 00:00:00', 'c.jpg', 'doctor'),
(22, 'sr', 'yu', 'oi', 'sr@gmail.com', 'b-', 'a01610228fe998f515a72dd730294d87', '5346464572', '2019-02-07', 'gokul appartment,sola bhagwat', 'ahmedabad', 'gujarat', 'India', 382110, 'Female', 'user', '2019-02-06 00:00:00', 'c.jpg', 'doctor'),
(23, 'gattu', 'harsh', 'vaghela', 'gattu@gmail.com', 'o+', '1f6419b1cbe79c71410cb320fc094775', '9067804536', '2019-02-14', 'somnath society', 'sanand', 'gujarat', 'India', 382110, 'Male', 'user', '2019-02-07 00:00:00', 'h.jpg', 'doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_table`
--
ALTER TABLE `appointment_table`
  ADD PRIMARY KEY (`Appointment_id`);

--
-- Indexes for table `attachment_table`
--
ALTER TABLE `attachment_table`
  ADD PRIMARY KEY (`Attachment_id`);

--
-- Indexes for table `doctor_table`
--
ALTER TABLE `doctor_table`
  ADD PRIMARY KEY (`D_id`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`Feed_id`);

--
-- Indexes for table `fees_table`
--
ALTER TABLE `fees_table`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `patient_table`
--
ALTER TABLE `patient_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription_table`
--
ALTER TABLE `prescription_table`
  ADD PRIMARY KEY (`Pre_id`);

--
-- Indexes for table `report_table`
--
ALTER TABLE `report_table`
  ADD PRIMARY KEY (`Report_id`);

--
-- Indexes for table `treatment_table`
--
ALTER TABLE `treatment_table`
  ADD PRIMARY KEY (`T_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_table`
--
ALTER TABLE `appointment_table`
  MODIFY `Appointment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `attachment_table`
--
ALTER TABLE `attachment_table`
  MODIFY `Attachment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor_table`
--
ALTER TABLE `doctor_table`
  MODIFY `D_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `Feed_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fees_table`
--
ALTER TABLE `fees_table`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_table`
--
ALTER TABLE `patient_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescription_table`
--
ALTER TABLE `prescription_table`
  MODIFY `Pre_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_table`
--
ALTER TABLE `report_table`
  MODIFY `Report_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `treatment_table`
--
ALTER TABLE `treatment_table`
  MODIFY `T_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
