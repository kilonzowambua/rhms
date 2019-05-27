-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2019 at 11:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martdev1_rhms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `username` varchar(2000) NOT NULL,
  `e_address` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `pic` varchar(2000) NOT NULL,
  `bio` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `e_address`, `password`, `pic`, `bio`, `post`) VALUES
(3, 'Martin Mbithi', 'Mart', 'martdevelopers254@gmail.com', '89e495e7941cf9e40e6980d14a16bf023ccd4c91', 'krosbits_logo.png', 'Developer ,Graphic Designer, Web Artisan, Opensource Developer', '');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(2000) NOT NULL,
  `national_id` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `phoneno` varchar(2000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `bio` text NOT NULL,
  `username` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `pic` varchar(2000) NOT NULL,
  `housetype` varchar(200) NOT NULL,
  `debitrent` varchar(200) NOT NULL,
  `creditrent` varchar(200) NOT NULL,
  `pendingrent` varchar(200) NOT NULL,
  `hselocation` varchar(200) NOT NULL,
  `land_lord_phone` varchar(200) NOT NULL,
  `mpesacode` varchar(200) NOT NULL,
  `datepaid` datetime(4) NOT NULL DEFAULT '0000-00-00 00:00:00.0000' ON UPDATE CURRENT_TIMESTAMP(4),
  `date_rent` varchar(20) NOT NULL,
  `month_rent` varchar(20) NOT NULL,
  `year_rent` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `fname`, `mname`, `lname`, `national_id`, `age`, `phoneno`, `email`, `address`, `bio`, `username`, `password`, `pic`, `housetype`, `debitrent`, `creditrent`, `pendingrent`, `hselocation`, `land_lord_phone`, `mpesacode`, `datepaid`, `date_rent`, `month_rent`, `year_rent`) VALUES
(2, 'Juan', 'Makau', 'Musau', '127001', '25', '+254737229776', 'juanmusau6@gmail.com', '200 Machakos', 'Networking Expert', 'Juan_El_Jefe', 'd7bee7f89c28e17aa29a1dfcd8335065', 'juan.JPG', 'Bedsitter', ' 7000   ', '7000    ', '', '120 Machakos', '070403164', 'NH67UITUKL', '2019-05-24 21:30:51.0803', '20', 'January', '2019'),
(5, 'Joseph', 'Mutinda', 'Mutua', '127001', '25', '+254724947439', 'joseph@gmail.com', '120 Machakos', 'Developer, Security Expert, CCNA Certified', 'Jose_Rikel', '70483b6e100c9cebbffcdc62dea07eda', 'jose.jpg', 'Double-roomed', ' 10000', '10000 ', '', 'Machakos', '070403164', 'NKGH67UTT6', '2019-05-26 20:41:20.8777', '1', 'March', '2019'),
(6, 'Martin ', 'M', 'Mbithi', '35574820', '20', '+254740847563', 'martinezmbithi@gmail.com', '120 Kikima, Mbooni', 'Software Developer, Web Artisan, Linux Ethusiast', 'Martin', '3dc0c26f3ebf52dc86d42d50b8d16e5a', 'dp.JPG', 'SelfContained', ' 25000', '25000 ', '', 'Machakos', '070403164', 'MATY90IO5T ', '2019-05-27 11:49:32.5493', 'Mon', 'May', '2019'),
(7, 'Antony', 'k', 'Kilonzo', '127001', '', '+254724947439', 'antony@gmail.com', '', '', 'anto', 'fe01ce2a7fbac8fafaed7c982a04e229', '8.jpg', '', '', '', '', '', '', '', '2019-05-27 11:14:56.8536', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(200) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `phoneno` varchar(2000) NOT NULL,
  `website` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(200) NOT NULL,
  `type` varchar(2000) NOT NULL,
  `location` varchar(2000) NOT NULL,
  `status` varchar(2000) NOT NULL,
  `rent` varchar(200) NOT NULL,
  `phoneno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `type`, `location`, `status`, `rent`, `phoneno`) VALUES
(1, 'single ', 'Machakos', 'Occupied', '5000', '070403164'),
(2, 'Bedsitter', 'Machakos', 'Vacant', '7000', '070403164'),
(3, 'Double Bedroom', 'Nairobi', 'Vacant', '12500', '+2547409887'),
(4, 'SelfContained', 'Machakos', 'Vacant', '25000', '070403164'),
(5, 'Single', 'Machakos', 'Vacant', '3000', '+254724947439'),
(6, 'Double Bedroom', 'Nairobi', 'Vacant', '12000', '+2547409887');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(200) NOT NULL,
  `sender` varchar(2000) NOT NULL,
  `sendermail` varchar(200) NOT NULL,
  `receiver` varchar(2000) NOT NULL,
  `receivermail` varchar(200) NOT NULL,
  `title` mediumtext NOT NULL,
  `content` text NOT NULL,
  `status` varchar(2000) NOT NULL,
  `tsend` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `sender`, `sendermail`, `receiver`, `receivermail`, `title`, `content`, `status`, `tsend`) VALUES
(1, 'Demo Sender', 'demosender@mail.com', 'Admin', 'demoreceiver@mail.com', 'Test Mail', '\r\n\r\nAs he bent his head in his most courtly manner, there was a secrecy in his smiling face, and he conveyed an air of mystery to those words, which struck the eyes and ears of his nephew forcibly. At the same time, the thin straight lines of the setting of the eyes, and the thin straight lips, and the markings in the nose, curved with a sarcasm that looked handsomely diabolic.\r\n\r\n\"Yes,\" repeated the Marquis. \"A Doctor with a daughter. Yes. So commences the new philosophy! You are fatigued. Good night!\"\r\n\r\nIt would have been of as much avail to interrogate any stone face outside the chateau as to interrogate that face of his. The nephew looked at him, in vain, in passing on to the door.\r\n\r\n\"Good night!\" said the uncle. \"I look to the pleasure of seeing you again in the morning. Good repose! Light Monsieur my nephew to his chamber there!--And burn Monsieur my nephew in his bed, if you will,\" he added to himself, before he rang his little bell again, and summoned his valet to his own bedroom.\r\n\r\n', 'inbox', '2019-05-26 17:03:59.0311'),
(2, 'Martin Mbithi', 'martdevelopers254@gmail.com', 'Juan Musau', 'juanmusau6@gmail.com', 'Test Mail', 'Hey Wassup Hope You Good How Can Ya Rate My System.<br>', 'send', '2019-05-26 17:04:04.4460'),
(3, 'Martin Mbithi', 'martdevelopers254@gmail.com', 'joseph Mutua', 'joseph@gmail.com', 'Rent Payment', 'Hello Hope You Good Remember To Pay Rent Month On Due Date.<br>', 'send', '2019-05-26 17:06:52.6701'),
(4, 'Martin Mbithi', 'martdevelopers254@gmail.com', 'Antony', 'anthony@gmail.com', 'Hello', '<blockquote><a target=\"\" rel=\"\"><i><u><b>Hello Wellcome To Our RHMS</b></u></i></a><b><i><u></u></i></b></blockquote>', 'send', '2019-05-27 08:18:42.1558');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(200) NOT NULL,
  `name` varchar(2000) NOT NULL DEFAULT 'Admin',
  `content` text NOT NULL,
  `timestapmsent` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `content`, `timestapmsent`) VALUES
(1, 'Admin', 'Hey There Wassup Yall Hows Our Services?', '2019-05-25 10:45:32.6453'),
(2, 'Admin', 'Tommorow We Will Have A Power Shortage\r\nSorry For The Inconvinience', '2019-05-25 16:54:03.0527');

-- --------------------------------------------------------

--
-- Table structure for table `passwordresets`
--

CREATE TABLE `passwordresets` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `newpassword` varchar(20) NOT NULL,
  `confpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwordresets`
--

INSERT INTO `passwordresets` (`id`, `email`, `newpassword`, `confpassword`) VALUES
(2, 'anitamunala@gmail.com', 'd56c82a0ab1c536999c3', 'f5076b1ddc36465aa546');

-- --------------------------------------------------------

--
-- Table structure for table `rentalpayments`
--

CREATE TABLE `rentalpayments` (
  `id` int(20) NOT NULL,
  `fname` varchar(2000) NOT NULL,
  `lname` varchar(2000) NOT NULL,
  `national_id` varchar(2000) NOT NULL,
  `phoneno` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `housetype` varchar(2000) NOT NULL,
  `debitrent` varchar(2000) NOT NULL,
  `creditrent` varchar(2000) NOT NULL,
  `mpesacode` varchar(200) NOT NULL,
  `datepaid` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentalpayments`
--

INSERT INTO `rentalpayments` (`id`, `fname`, `lname`, `national_id`, `phoneno`, `email`, `housetype`, `debitrent`, `creditrent`, `mpesacode`, `datepaid`) VALUES
(1, 'Martin', 'Nzilani', '120900', '+254740847563', 'martdevelopers254@gmail.com', 'Double-roomed', '10000', '10000', 'THXVVNN78H', '2019-05-26 14:34:07.0969'),
(9, 'Juan', 'Musau', '127001', '+254737229776', 'juanmusau6@gmail.com', 'Bedsitter', '7000', '7000', 'KI2OPHVN7Y', '2019-05-26 14:34:29.4994'),
(11, 'Martin ', 'Mbithi', '35574820', '+254740847563', 'martinezmbithi@gmail.com', 'SelfContained', '25000  ', ' 25000 ', 'MATY90IO5T', '2019-05-25 10:58:05.2267');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passwordresets`
--
ALTER TABLE `passwordresets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentalpayments`
--
ALTER TABLE `rentalpayments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `passwordresets`
--
ALTER TABLE `passwordresets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rentalpayments`
--
ALTER TABLE `rentalpayments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
