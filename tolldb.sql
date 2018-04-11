-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 05:53 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tolldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` text NOT NULL,
  `uid` text NOT NULL,
  `v_num` text NOT NULL,
  `dl_num` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dob` text NOT NULL,
  `rc` text NOT NULL,
  `dl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `uid`, `v_num`, `dl_num`, `city`, `state`, `phone`, `dob`, `rc`, `dl`) VALUES
('60560836', '1234567890', '8cdbf54740d52370a981741fd184d596.jpg', '48463ba07e42ffddebbc8fdddc9a0ca8.jpg', 'Bangalore', 'Karnataka', 7878787878, '1997-09-16', 'KA278231', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `toll_event`
--

CREATE TABLE `toll_event` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `v_num` text NOT NULL,
  `toll_id` text NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toll_event`
--

INSERT INTO `toll_event` (`time`, `v_num`, `toll_id`, `amount`) VALUES
('2018-04-11 15:30:37', 'KA2L8245', '001', 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` text NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `updated` int(1) NOT NULL DEFAULT '0',
  `verified` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`, `updated`, `verified`) VALUES
('60560836', 'sohaibalam67@gmail.com', 'Sohaib Alam', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
