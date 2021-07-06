-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 06, 2021 at 05:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `olado`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `email`) VALUES
(1, '0789859109', 'ibrahimgashema154@gmail.com'),
(2, '07898498988', 'ibra@gmail.com'),
(3, '+25078678903', 'mugabe@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_address`
--

CREATE TABLE `users_address` (
  `ida` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `cell` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bill` varchar(100) NOT NULL,
  `shipping` varchar(100) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_address`
--

INSERT INTO `users_address` (`ida`, `users_id`, `country`, `province`, `district`, `sector`, `cell`, `village`, `street`, `house`, `phone`, `status`, `bill`, `shipping`, `zip`, `fullname`, `gender`) VALUES
(1, 1, 'rwanda', 'kigali city', 'kicukiro', 'masaka', 'gitaraga', 'kabeza', 'kk 250', '33', '0789859109', 'active', 'dklfhkjdhf', 'dfhdfhjdfdhf', '00250', 'ibrahim gashema', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `users_data`
--

CREATE TABLE `users_data` (
  `idd` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `social1` varchar(100) NOT NULL,
  `social2` varchar(100) NOT NULL,
  `social3` varchar(100) NOT NULL,
  `social4` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_data`
--

INSERT INTO `users_data` (`idd`, `users_id`, `social1`, `social2`, `social3`, `social4`, `fullname`, `gender`, `image`) VALUES
(2, 2, 'wewe', 'ewew', 'ewew', 'ewew', 'Ibrahim Gashema', 'male', 'images/82905565_PIT2691.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_address`
--
ALTER TABLE `users_address`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `users_data`
--
ALTER TABLE `users_data`
  ADD PRIMARY KEY (`idd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_address`
--
ALTER TABLE `users_address`
  MODIFY `ida` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_data`
--
ALTER TABLE `users_data`
  MODIFY `idd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
