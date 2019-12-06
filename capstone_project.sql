-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 04:25 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `firstname`, `lastname`, `email`, `mobile`, `message`) VALUES
(2, 'amait', 'kja', 'adfa@asd.sadf', '98765432', 'sadfsadf'),
(4, 'fdfs', 'dsfsd', 'fsd@dfsdf.dsfds', '123654898', 'dsfdf'),
(5, 'kjhg', 'jv', 'lkjhgfghjk@fghjk.jhgfd', 'lkjhgfdfgh', 'dfghjkhg'),
(6, 'dsf', 'aaaaaaaa', 'aaaa@ddd.sss', 'dsfsdfs', 'sdds'),
(7, 'sdfg', 'zzzzzzzzz', 'zzzz@hgfg.jjhgf', 'jhgfghj', 'jhgfd'),
(8, 'asdf', 'zzz', 'mmmmm@ddd.ddd', '9876543210', 'lkjhgfdfghjk'),
(9, 'vvv', 'vvvv', 'vvv@kjhgf.nnn', '321654987', 'mjmjkmjk'),
(10, 'zzz', 'mm', 'mmm@jjmm.nn', '123456789', 'mkmjmk'),
(11, 'nnhnh', 'mjmjh', 'nnnn@jhhj.nnn', '6543219811', 'klkjjlkjh'),
(12, 'fsdf', 'ffdfgdf', 'eesfse@sdgdfs.jjj', '7894561230', 'scsadasfdsa'),
(13, 'wewrw', 'wewr', 'tewt@gmail.com', '85652632554', 'e4');

-- --------------------------------------------------------

--
-- Table structure for table `registration_info`
--

CREATE TABLE `registration_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration_info`
--

INSERT INTO `registration_info` (`id`, `username`, `email`, `password`) VALUES
(1, 'amit', 'amit@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'kumar', 'abc2@gmai.coom', '202cb962ac59075b964b07152d234b70'),
(3, 'jay', 'jay@GMIAL.OCM', '202cb962ac59075b964b07152d234b70'),
(4, 'hai', 'hai@gami.com', '202cb962ac59075b964b07152d234b70'),
(5, 'haid', 'kjfg@gmai.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `sp_reg_info`
--

CREATE TABLE `sp_reg_info` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `m_status` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `spCategory` varchar(255) NOT NULL,
  `spSubCat` varchar(255) NOT NULL,
  `uploadID` varchar(255) NOT NULL,
  `id_name` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sp_reg_info`
--

INSERT INTO `sp_reg_info` (`id`, `name`, `phone`, `email`, `gender`, `dob`, `nationality`, `m_status`, `country`, `state`, `city`, `street`, `pincode`, `spCategory`, `spSubCat`, `uploadID`, `id_name`, `photo_name`, `uploaded_on`, `status`) VALUES
(1, 'sdf', '1234679655', 'dsfsd#fdf.df', '1', '12/15/44', '1', '1', '5', '250', '1697', 'dsfds', '123456', 'Home appliance repair', 'Cricket', '', 'unnamed.jpg', 'unnamed.jpg', '2019-12-01 01:02:15', '1'),
(2, 'amit', '9876543210', 'abc@gmail.com', '1', '12/02/99', '1', '1', '62', '543', '2836', '27B west coast', '116162', 'Home mantainance', 'AC Service', '2', 'lpuuniversity_3___B4UwAfHgoJM___.jpg', 'lpuuniversity_5___B4UwAfHgoJM___.jpg', '2019-12-01 01:08:31', '1'),
(3, 'amit', '1123456778', 'amdit@jkdjf.akjd', '2', '12/12/11', '1', '1', '100', '734', '3374', 'sdfsd', '134645', 'Home mantainance', 'AC Service', '5', 'lpuuniversity_5___B4UwAfHgoJM___.jpg', 'lpuuniversity_1___B4UwAfHgoJM___.jpg', '2019-12-01 18:54:27', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_info`
--
ALTER TABLE `registration_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sp_reg_info`
--
ALTER TABLE `sp_reg_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration_info`
--
ALTER TABLE `registration_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sp_reg_info`
--
ALTER TABLE `sp_reg_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
