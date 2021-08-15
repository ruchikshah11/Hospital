-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 05:58 AM
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
-- Database: `water_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_bottle`
--

CREATE TABLE `add_bottle` (
  `a_id` int(255) NOT NULL,
  `no_of_bottle` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `nbb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_bottle`
--

INSERT INTO `add_bottle` (`a_id`, `no_of_bottle`, `date`, `c_id`, `nbb`) VALUES
(1, '$mobile', '$date', 0, ''),
(3, '20', '2018-10-09', 3, ''),
(4, '5', '2018-10-09', 4, ''),
(5, '10', '2018-10-10', 4, ''),
(6, '2', '2018-11-18', 3, ''),
(7, '5', '2018-10-13', 5, ''),
(8, '2', '2018-10-12', 4, ''),
(9, '2', '2018-10-12', 4, ''),
(10, '25', '2018-10-01', 6, ''),
(11, '25', '2018-10-02', 6, ''),
(12, '1', '2018-10-13', 9, ''),
(13, '1', '2018-10-01', 74, ''),
(14, '10', '2018-10-01', 62, ''),
(15, '2', '2018-10-01', 86, ''),
(16, '1', '2018-10-01', 85, ''),
(17, '3', '2018-10-01', 93, ''),
(18, '3', '', 22, ''),
(19, '1', '2018-10-01', 26, ''),
(20, '1', '2018-10-01', 10, ''),
(21, '1', '2018-10-01', 20, ''),
(22, '5', '2018-10-01', 13, ''),
(23, '2', '2018-10-01', 15, ''),
(24, '2', '2018-10-01', 32, ''),
(25, '3', '2018-10-01', 60, ''),
(26, '5', '2018-10-01', 46, ''),
(27, '2', '2018-10-01', 61, ''),
(28, '1', '2018-10-01', 72, ''),
(29, '6', '2018-10-01', 30, ''),
(30, '1', '2018-10-01', 24, ''),
(31, '4', '2018-10-01', 31, ''),
(32, '1', '2018-10-01', 38, ''),
(33, '1', '2018-10-01', 44, ''),
(34, '1', '2018-10-01', 45, ''),
(35, '1', '2018-10-01', 29, ''),
(36, '1', '2018-10-01', 40, ''),
(37, '1', '2018-10-01', 50, ''),
(38, '1', '2018-10-01', 36, ''),
(39, '1', '2018-10-01', 103, ''),
(40, '2', '2018-10-01', 64, ''),
(41, '2', '2018-10-01', 125, ''),
(42, '2', '2018-10-01', 5, ''),
(43, '2', '2018-10-01', 57, ''),
(44, '10', '2018-10-01', 65, ''),
(45, '2', '2018-10-01', 33, ''),
(46, '3', '2018-10-01', 27, ''),
(47, '4', '2018-10-01', 49, ''),
(48, '2', '2018-10-01', 11, ''),
(49, '2', '2018-10-01', 18, ''),
(50, '1', '2018-10-02', 74, ''),
(51, '1', '2018-10-02', 10, ''),
(52, '1', '2018-10-02', 20, ''),
(53, '7', '2018-10-02', 13, ''),
(54, '3', '2018-10-02', 21, ''),
(55, '2', '2018-10-02', 68, ''),
(56, '2', '2018-10-02', 19, ''),
(57, '4', '2018-10-02', 23, ''),
(58, '1', '', 27, ''),
(59, '2', '2018-10-02', 33, ''),
(60, '1', '2018-10-02', 24, ''),
(61, '4', '2018-10-02', 31, ''),
(62, '1', '2018-10-02', 29, ''),
(63, '1', '2018-10-02', 40, ''),
(64, '8', '2018-10-02', 65, ''),
(65, '1', '2018-10-02', 71, ''),
(66, '2', '2018-10-02', 54, ''),
(67, '13', '2018-10-02', 55, ''),
(68, '2', '2018-10-02', 49, ''),
(69, '3', '2018-10-02', 78, ''),
(70, '5', '2018-10-02', 75, ''),
(71, '1', '2018-10-02', 90, ''),
(72, '1', '2018-10-02', 39, ''),
(73, '2', '2018-10-02', 41, ''),
(74, '3', '2018-10-02', 53, ''),
(75, '2', '2018-10-02', 12, ''),
(76, '2', '2018-10-02', 42, ''),
(77, '1', '2018-10-02', 104, ''),
(78, '1', '2018-10-02', 83, ''),
(79, '2', '2018-10-02', 92, ''),
(80, '8', '2018-10-02', 69, ''),
(81, '1', '2018-10-02', 20, ''),
(82, '1', '2018-10-02', 100, ''),
(83, '3', '2018-10-02', 106, '');

-- --------------------------------------------------------

--
-- Table structure for table `add_client`
--

CREATE TABLE `add_client` (
  `c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_client`
--

INSERT INTO `add_client` (`c_id`, `name`, `contact_no`, `email_id`, `city`, `route`) VALUES
(3, 'pooja', '123456789', 'poojavaishnav823@gmail.com', '1', '2'),
(4, 'neha vaishnav', '789456123', 'neha@gmail.com', '', ''),
(5, 'AKSHAT TOWER', '9510890837', 'CHAUHANAJAY1812@GMAIL.COM', '', ''),
(6, 'shivshakti kathiyawadi', '9512132525', '15', '', ''),
(7, 'sobo center', '9328006488', '20', '', ''),
(8, 'society-A-103', '9959022211', '20', '', ''),
(9, 'MAHASUKH AMRATLAL TANNA', '9825802926', '25', '', ''),
(10, 'Y.M.C JUG', '9662476827', '30', '', ''),
(11, 'C.A.OFFICE', '9824396988', '20', '', ''),
(12, 'SOCIETY-E-62', '7014980338', '20', '', ''),
(13, 'SOCIETY OFFICE', '9712940034`', '20', '', ''),
(14, 'CAR BOX PRAHLADNAGAR', '9725890007', '20', '', ''),
(15, 'SANT MOBILE', '8306322681', '20', '', ''),
(16, 'JALARAM UPER', '9574037279', '20', '', ''),
(17, 'K.K.ZEROX', '9879659970', '20', '', ''),
(18, 'SAI CERAMIC', '9825802926', '20', '', ''),
(19, 'KRISHNA CAR GARAGE', '9898471609', '20', '', ''),
(20, 'SOCIETY-A-64', '9825802926', '40', '', ''),
(21, 'JALARAM KAPAD', '7777999759', '20', '', ''),
(22, 'RAJIVNAGAR[SHYAMAL]', '9782433597', '20', '', ''),
(23, 'AMBER SOCIETY', '9057201670', '20', '', ''),
(24, 'CYCLE', '9825802926', '30', '', ''),
(25, 'A-2-42 MANAJMENT', '9820746518', '20', '', ''),
(26, 'RAJIVNAGAR BAJUMA', '9898441661', '20', '', ''),
(27, 'CHASKA', '9723232227', '15', '', ''),
(28, 'SETUJ', '9825802926', '20', '', ''),
(29, 'KALUPUR BAZAR[JUG]', '9825802926', '30', '', ''),
(30, 'RAJUBHAI PARATHA', '9998233113', '18', '', ''),
(31, 'ONLY DOSA', '9909703097', '15', '', ''),
(32, 'MAJISA', '8200242425', '20', '', ''),
(33, 'PG', '8320171274', '25', '', ''),
(34, 'DHARNIDHAR T-1', '9429880947', '25', '', ''),
(35, 'RAHUL-15', '8120582388', '25', '', ''),
(36, 'PANCHRATNA A-13', '9712956270', '25', '', ''),
(37, 'VISAT APARTMENT', '7597548486', '25', '', ''),
(38, 'AKSHAR EDUCATION[ONLY UPER]', '6359588984', '30', '', ''),
(39, 'GANGOTRI 304', '9726757011', '25', '', ''),
(40, 'BEAUTY PARLOUR', '9924937204', '30', '', ''),
(41, 'SHREYASH TEKRA', '6353645506', '20', '', ''),
(42, 'JUGAL APPAR', '9227550712', '25', '', ''),
(43, 'AVINASHI 4', '7069099779', '25', '', ''),
(44, 'DEV A403', '8849899421', '25', '', ''),
(45, 'DEV B-102', '7600041026', '25', '', ''),
(46, 'PINTU OFFICE', '9925204130', '20', '', ''),
(47, 'CASA VYOM[GANGOTRI302]', '9909920581', '25', '', ''),
(48, 'SOCIETY A-14', '8282875928', '25', '', ''),
(49, 'EVERGREEN', '7573905200', '20', '', ''),
(50, 'PANCHRATNA A-18', '8200280168', '25', '', ''),
(51, 'CHANAKYA TOWER', '9909963522', '25', '', ''),
(52, 'SPRING FIELD-15', '9588697099', '25', '', ''),
(53, 'SHREYASH TEKRA BAJUMA', '8733825286', '20', '', ''),
(54, 'HILOL-11', '6354622732', '22', '', ''),
(55, 'WHOLESALE GURUKUL', '7778916252', '20', '', ''),
(56, 'WHOLESALE BODAKDEV', '7778916252', '20', '', ''),
(57, 'SHIRIN FESTIVAL', '9925204130', '20', '', ''),
(58, 'BHAGWATI GLASS', '9825802926', '20', '', ''),
(59, 'YOGA', '7359600191', '20', '', ''),
(60, 'MAJISA PACHAL', '982473009520', '20', '', ''),
(61, 'BHAVIN UTSAV', '9825621877', '20', '', ''),
(62, 'SAI SARKHEJ', '8347561571', '20', '', ''),
(63, 'AIR VOICE', '7874408023', '20', '', ''),
(64, 'G K MOBILE', '8780940743', '20', '', ''),
(65, 'SHIV KIRANA', '9898460968', '9', '', ''),
(66, 'L D COLLAGE', '9924017000', '20', '', ''),
(67, 'SMOKE', '7069757593', '20', '', ''),
(68, 'MAJISA KIRANA', '9825802926', '30', '', ''),
(69, 'GOTA CAR BOX', '9099259216', '20', '', ''),
(70, 'PANCHRATNA B-3-9', '9979879260', '25', '', ''),
(71, 'VRUNDAVAN 18', '8527055051', '25', '', ''),
(72, 'BHAVIN UTSAV BAJUMA', '9825802926', '20', '', ''),
(73, 'VAMA TAILOR BAJUMA', '7016159854', '40', '', ''),
(74, 'MAHESH MALI', '9725573538', '30', '', ''),
(75, 'MILAN PARK', '9428001490', '20', '', ''),
(76, 'GOYAL C 8', '9898038254', '25', '', ''),
(77, 'SHALIM A-3', '9099000647', '25', '', ''),
(78, 'GTPL', '8160722102', '25', '', ''),
(79, 'SUJAN APP', '9898765555', '25', '', ''),
(80, 'ASHRAY TOWER', '9825595015', '25', '', ''),
(81, 'JIVABHAI TOWER A504', '9998033070', '25', '', ''),
(82, 'DWARKESH APP', '9033549294', '25', '', ''),
(83, 'FLEX BANNER', '9825802926', '25', '', ''),
(84, 'ANJALI APP', '7023127538', '40', '', ''),
(85, 'SATELLITE M-41', '9638794223', '25', '', ''),
(86, 'RAHUL-9', '7226966398', '25', '', ''),
(87, 'GOYAL C-6', '9836006961', '25', '', ''),
(88, 'VIRALKRUPA', '7405116774', '25', '', ''),
(89, 'VATSAL 8', '9898645446', '25', '', ''),
(90, 'GANGOTRI B-101', '9825802926', '25', '', ''),
(91, 'KALUPUR BAJUMA DANCE', '9825802926', '30', '', ''),
(92, 'ABHI 802', '9328628764', '25', '', ''),
(93, 'SATELLITE J-3', '8320069134', '25', '', ''),
(94, 'GOYAL-10', '9173149693', '25', '', ''),
(95, 'AMALTAS 36', '9825802926', '25', '', ''),
(96, 'PATEL PLY', '9824598201', '22', '', ''),
(97, 'SOCIETY E-94', '9825802926', '25', '', ''),
(98, 'PRANJAL B-2', '7405357567', '25', '', ''),
(99, 'SOCIETY E-34', '9825999445', '20', '', ''),
(100, 'CAR BOX BAJUMA', '9825802926', '25', '', ''),
(101, 'RAHUL 8', '9687014304', '25', '', ''),
(102, 'ANUPAM 101', '9870037624', '25', '', ''),
(103, 'PANCHRATNA B-1-11', '9773233245', '25', '', ''),
(104, 'SAI OPP202', '7600660876', '30', '', ''),
(105, 'DIVYAVIHAR GF', '8511743898', '25', '', ''),
(106, 'KHETLA APP CHOCK', '9723717524', '30', '', ''),
(107, 'PRINCE BHAJI PAV', '9574596783', '8', '', ''),
(108, 'KAKA KA DHABA', '7226009100', '12', '', ''),
(109, 'RTO KATHIYAWADI', '9712092525', '15', '', ''),
(110, 'SOMANI', '9687694755', '10', '', ''),
(111, 'JAMALPUR BHOYRU', '9825785458', '20', '', ''),
(112, 'HIRALAL JAMALPUR', '9925024675', '25', '', ''),
(113, 'CAR SPA', '9277400759', '20', '', ''),
(114, 'SUVIDHA ', '9909181969', '20', '', ''),
(115, 'INDIACOLONY PG', '8401708612', '20', '', ''),
(116, 'NILKAMAL', '8401708612', '20', '', ''),
(117, 'NAVU RASODU', '8401708612', '20', '', ''),
(118, 'JUNU RASODU', '8401708612', '20', '', ''),
(119, 'VIBHUSHA-4', '8401708612', '20', '', ''),
(120, 'VIBHUSHA-3', '8401708612', '20', '', ''),
(121, 'VIBHUSHA-2', '8401708612', '20', '', ''),
(122, 'VIBHUSHA-1', '8401708612', '20', '', ''),
(123, 'SANSKAR', '8401708612', '20', '', ''),
(124, 'MADHURAM', '8401708612', '20', '', ''),
(125, 'MANALI PARK', '9664598522', '20', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_nm` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `company_nm` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_nm`, `password`, `company_nm`, `mobile_no`, `company_logo`, `email_id`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Bookyourcan', '9876543210', 'img63679book-your-can-logonew2.png', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `bottel` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `fname`, `lname`, `phone`, `type`, `bottel`, `address`, `date`) VALUES
(1, '$fname', '$lname', '$phone', '$type', '$bottel', '$address', '$date'),
(2, 'Ajay', 'Chauhan', '9510890837', 'Bisleri', '2', 'Ahmedabad', '2018-10-13'),
(3, 'Ajay', 'Chauhan', '9510890837', 'Bisleri', '2', 'Ahmedabad', '2018-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_nm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_nm`) VALUES
(1, 'Ahmedabad'),
(2, 'Dehgam');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `route_nm` varchar(255) NOT NULL,
  `city_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route_nm`, `city_id`) VALUES
(1, 'Route1', 1),
(2, 'Route2', 1),
(3, 'Route1', 2),
(4, 'Route2', 2),
(5, 'Route3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_bottle`
--
ALTER TABLE `add_bottle`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `add_client`
--
ALTER TABLE `add_client`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_bottle`
--
ALTER TABLE `add_bottle`
  MODIFY `a_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `add_client`
--
ALTER TABLE `add_client`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
