-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 06:34 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `prequest`
--

CREATE TABLE `prequest` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `wdd` varchar(255) DEFAULT NULL,
  `cms` varchar(255) DEFAULT NULL,
  `seo` varchar(255) DEFAULT NULL,
  `smo` varchar(255) DEFAULT NULL,
  `swd` varchar(255) DEFAULT NULL,
  `dwd` varchar(255) DEFAULT NULL,
  `fwd` varchar(255) DEFAULT NULL,
  `dr` varchar(255) DEFAULT NULL,
  `whs` varchar(255) DEFAULT NULL,
  `wm` varchar(255) DEFAULT NULL,
  `ed` varchar(255) DEFAULT NULL,
  `wta` varchar(255) DEFAULT NULL,
  `opi` varchar(255) DEFAULT NULL,
  `ld` varchar(255) DEFAULT NULL,
  `da` varchar(255) DEFAULT NULL,
  `osc` varchar(255) DEFAULT NULL,
  `nd` varchar(255) DEFAULT NULL,
  `others` varchar(255) DEFAULT NULL,
  `query` longtext DEFAULT NULL,
  `posting_date` date DEFAULT NULL,
  `remark` longtext DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prequest`
--

INSERT INTO `prequest` (`id`, `name`, `email`, `contactno`, `company`, `wdd`, `cms`, `seo`, `smo`, `swd`, `dwd`, `fwd`, `dr`, `whs`, `wm`, `ed`, `wta`, `opi`, `ld`, `da`, `osc`, `nd`, `others`, `query`, `posting_date`, `remark`, `status`) VALUES
(1, 'Anuj Kumar', 'phpgurukulteam@gmail.com', '1234567890', 'Test', 'Website Design & Development', '', '', '', '', 'Dynamic Website Design', '', '', 'Web Hosting Services', '', 'Ecommerce Development', 'Walk Through Animation', '', '', '', '', '', '', 'This is for testing', '2021-04-22', 'This is for test', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `ticket_id` varchar(11) DEFAULT NULL,
  `email_id` varchar(300) DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `task_type` varchar(300) DEFAULT NULL,
  `prioprity` varchar(300) DEFAULT NULL,
  `ticket` longtext DEFAULT NULL,
  `attachment` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `admin_remark` longtext DEFAULT NULL,
  `posting_date` date DEFAULT NULL,
  `admin_remark_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `ticket_id`, `email_id`, `subject`, `task_type`, `prioprity`, `ticket`, `attachment`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
(12, '5', 'phpgurukulteam@gmail.com', 'Test Ticket', 'billing', 'important', 'This ticket for testing purpose.', '', 'closed', 'Ticket resolved.  Solution provided', '2021-04-22', '2021-04-21 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alt_email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `alt_email`, `password`, `mobile`, `gender`, `address`, `status`, `posting_date`) VALUES
(1, 'Anuj Kumar', 'phpgurukulteam@gmail.com', 'test123@asgggfag.com', 'Demo@123', '1234567890', 'm', 'New Delhi India 110001', NULL, '2021-04-22 12:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `usercheck`
--

CREATE TABLE `usercheck` (
  `id` int(11) NOT NULL,
  `logindate` varchar(255) DEFAULT '',
  `logintime` varchar(255) DEFAULT '',
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT '',
  `ip` varbinary(16) DEFAULT NULL,
  `mac` varbinary(16) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercheck`
--

INSERT INTO `usercheck` (`id`, `logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`, `city`, `country`) VALUES
(1, '2021/04/22', '05:59:18pm', 1, 'Anuj Kumar', 'phpgurukulteam@gmail.com', 0x3a3a31, 0x31322d46342d38442d31322d39392d39, '', ''),
(2, '2021/04/22', '10:00:15pm', 1, 'Anuj Kumar', 'phpgurukulteam@gmail.com', 0x3a3a31, 0x31322d46342d38442d31322d39392d39, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prequest`
--
ALTER TABLE `prequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercheck`
--
ALTER TABLE `usercheck`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prequest`
--
ALTER TABLE `prequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
