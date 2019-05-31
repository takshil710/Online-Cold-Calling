-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2016 at 11:17 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cold_calling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(200) NOT NULL,
  `apass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_callers`
--

CREATE TABLE `tbl_callers` (
  `calid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `cnumber` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_callers`
--

INSERT INTO `tbl_callers` (`calid`, `fname`, `lname`, `cnumber`, `emailid`, `pass`, `status`) VALUES
(1, 'abc', 'xyz', '1234567890', 'a@a.com', '12345678', 'active'),
(6, 'hitesh', 'katira', '123534', 'hitesh@gmail.com', 'hiteshkatira', 'active'),
(8, 'takshil', 'sonavane', '123412341', '', '', 'active'),
(11, 'abc123', 'adsfja', '2341234', 'ahasdjfh@gmail.com', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `clid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `cnumber` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`clid`, `fname`, `lname`, `cnumber`, `emailid`, `pass`, `status`) VALUES
(3, 'harish', 'pillai', '2342', 'adfa@gmail.com', 'asdfl;jklsa', 'active'),
(4, '', 'pillai', '9427324214', 'harish@gmail.com', 'harish123', 'active'),
(5, 'takshil', 'sonavane', '123456', 'takshil@gmail.com', 'takshil123', 'active'),
(6, 'harish', 'pillai', '3567', 'harish@gmail.com', 'harish123', 'active'),
(7, 'margi', 'bhavsar', '123456', 'margi@gmail.com', '1234', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `fid` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(400) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`fid`, `question`, `answer`, `status`) VALUES
(1, 'What is this site about?', 'This is a professional site used to manage and operate cold calling. Its basically a marketing website used by newbie  entrepreneurs.', 'active'),
(4, 'how is this?', 'this is very nice and superb. it even works very good.', 'active'),
(5, 'asdfasdf?', 'asdfasdfasdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE `tbl_reports` (
  `rid` int(11) NOT NULL,
  `rname` varchar(200) NOT NULL,
  `rdescription` varchar(1000) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reports`
--

INSERT INTO `tbl_reports` (`rid`, `rname`, `rdescription`, `status`) VALUES
(4, 'harish', 'this is my very first generated report', 'active'),
(5, 'fdghfsdgh', 'dfdghdfgh', 'active'),
(6, 'dfsgsdfgsdf', 'sdfgsdfgsdfg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasks`
--

CREATE TABLE `tbl_tasks` (
  `tskid` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `caller_id` int(11) NOT NULL,
  `tname` varchar(200) NOT NULL,
  `date_of_entry` varchar(200) NOT NULL,
  `features` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tasks`
--

INSERT INTO `tbl_tasks` (`tskid`, `client_id`, `caller_id`, `tname`, `date_of_entry`, `features`, `description`, `price`, `status`) VALUES
(10, 1, 0, 'dfdf', '2016-04-16', 'dsffd', 'hi', '343', 'active'),
(12, 1, 0, 'fhght', '2016-04-06', 'trhtrh', 'Task Descripthrhtion...', '453', 'active'),
(13, 1, 0, 'ghg', '2016-04-16', 'd', 'Task Description..fgfd', '65', 'active'),
(14, 1, 0, 'fgfgs', '2016-04-13', 'ertrt', 'Task Descriteterption...', '2345678', 'active'),
(16, 2, 1, 'first task', '03/09/2016', 'these are features', 'description...', '324', 'active'),
(17, 1, 3, 'a', '2016-04-21', 'fae', 'f', '123', 'active'),
(18, 1, 1, 'a', '2016-04-20', 'afd', 'first', '1234', 'active'),
(19, 1, 1, 'first', '2016-04-20', 'trying...', 'describe it here', '12345', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `cnumber` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `type` enum('both','buyer','seller') DEFAULT 'both',
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`uid`, `fname`, `lname`, `emailid`, `cnumber`, `pass`, `type`, `status`) VALUES
(1, 'harish', 'pillai', 'harish@gmail.com', '1345678', 'pass', 'buyer', 'active'),
(2, 'hitesh', 'katira', 'hitesh@gmail.com', '12345678', 'pass', 'buyer', 'active'),
(3, 'takshil', 'sonavane', 'takshil@gmail.com', '234577362', 'pass', 'seller', 'active'),
(4, 'abhi', 'patel', 'abhi@gmail.com', '234567890', 'pass', 'seller', 'active'),
(5, 'harry', 'pillai', 'harry@gmail.com', '2345678', 'pass', 'seller', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifiers`
--

CREATE TABLE `tbl_verifiers` (
  `verid` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `cnumber` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifiers`
--

INSERT INTO `tbl_verifiers` (`verid`, `fname`, `lname`, `cnumber`, `emailid`, `pass`, `status`) VALUES
(1, 'harish', 'pillai', '1234567890', 'harish@gmail.com', 'pass', 'active'),
(3, 'hitesh', 'katira', '324234234', 'hitesh@gmail.com', 'pass', 'active'),
(6, 'asdfasdf', 'asdfasdf', '23423q4', 'asdfas@gmail.com', 'jkjklasjf', 'active'),
(7, 'harish', 'pillai', '23989800', 'asdfjajd@gmail.com', 'asdfasd', 'active'),
(8, 'harish', 'pillai', '123458', 'harry@gmail.com', '1234', 'active'),
(9, 'harry', 'pillai', '387865', 'h', '1234', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_callers`
--
ALTER TABLE `tbl_callers`
  ADD PRIMARY KEY (`calid`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  ADD PRIMARY KEY (`tskid`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `caller_id` (`caller_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_verifiers`
--
ALTER TABLE `tbl_verifiers`
  ADD PRIMARY KEY (`verid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_callers`
--
ALTER TABLE `tbl_callers`
  MODIFY `calid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `clid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_tasks`
--
ALTER TABLE `tbl_tasks`
  MODIFY `tskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_verifiers`
--
ALTER TABLE `tbl_verifiers`
  MODIFY `verid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
