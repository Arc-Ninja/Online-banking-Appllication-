-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 03:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mssg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `email`, `mssg`) VALUES
(7, 'arghyaroy@gmail.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,'),
(8, 'user@user.com', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` bigint(10) NOT NULL,
  `accountno` bigint(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `amount` bigint(10) NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `accountno`, `name`, `amount`, `type`) VALUES
(15, 1696540059, 'Archi Shaw', 2100, 'CREDIT'),
(16, 1696527364, 'arghyadip', 2100, 'DEBIT'),
(17, 1696540059, 'Archi Shaw', 3345, 'CREDIT'),
(18, 1696527364, 'arghyadip', 3345, 'DEBIT'),
(19, 1696527364, 'arghyadip', 1200, 'CREDIT'),
(20, 1696540059, 'Archi Shaw', 1200, 'DEBIT'),
(21, 1696527364, 'User', 1200, 'CREDIT'),
(22, 1696553824, 'arghyadip', 1200, 'DEBIT'),
(23, 1696540059, 'User', 3000, 'CREDIT'),
(24, 1696553824, 'Archi Shaw', 3000, 'DEBIT');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`email`, `password`) VALUES
('manager@manager.com', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` bigint(10) NOT NULL,
  `mssg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `mssg`) VALUES
(4, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,'),
(5, 'Testing again'),
(6, 'Just another test'),
(7, 'Just one last notice to test'),
(8, 'And another one \r\n'),
(9, 'Final'),
(10, 'Last\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `accountno` bigint(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `phnno` bigint(10) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `dob` date NOT NULL,
  `balance` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `accountno`, `name`, `uid`, `gender`, `phnno`, `address`, `dob`, `balance`) VALUES
('arcshaw99@gmail.com', 'asdf', 1696527364, 'Archi Shaw', '12345666', 'male', 3415151310, 'Jharkhand', '2023-10-06', 46455),
('arghyaroy@gmail.com', 'qwerty', 1696540059, 'arghyadip', '13141414', 'male', 3246378251, 'haldia', '2023-10-26', 23745),
('user@user.com', 'user', 1696553824, 'User', '12345666', 'female', 3246378251, 'delhi', '2023-10-19', 72800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `UNIQUE` (`accountno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
