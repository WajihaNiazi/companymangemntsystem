-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 09:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `idcurrency` int(11) NOT NULL,
  `currencyAmount` int(11) NOT NULL,
  `currency` int(11) NOT NULL,
  `currency_data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `dp_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id`, `dp_name`, `status`) VALUES
(1, 'fullstack', 1),
(2, 'Game', 1),
(3, 'General', 1),
(4, 'Griphc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expence`
--

CREATE TABLE `expence` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `amount` int(11) NOT NULL,
  `expenceDate` date NOT NULL DEFAULT current_timestamp(),
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expence`
--

INSERT INTO `expence` (`id`, `fullName`, `description`, `amount`, `expenceDate`, `year`, `month`, `day`) VALUES
(2, 'Aqida', 'for ', 5, '2020-11-19', 2020, 11, 28);

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` int(11) NOT NULL,
  `fullName` varchar(45) NOT NULL,
  `description` text DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `incomeDate` date DEFAULT current_timestamp(),
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incomes`
--

INSERT INTO `incomes` (`id`, `fullName`, `description`, `amount`, `incomeDate`, `year`, `month`, `day`) VALUES
(1, 'Mohammad', 'For some tings...', 70, '2020-11-15', 2020, 11, 27),
(2, 'Ali', 'some tings....', 80, '2020-11-15', 2020, 11, 24),
(3, 'Sodabeh', 'some tings.....', 88, '2019-11-11', 2019, 11, 11),
(4, 'Mohammad', 'hhhhhhhhhhhh', 7, '2020-11-19', 2020, 11, 19);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `iditems` int(11) NOT NULL,
  `itemName` varchar(45) NOT NULL,
  `price` int(11) NOT NULL,
  `itemDate` timestamp NULL DEFAULT NULL,
  `itemquantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`iditems`, `itemName`, `price`, `itemDate`, `itemquantity`) VALUES
(2, 'ttjjjjjjjjj', 44, '2020-11-12 19:30:00', 989);

-- --------------------------------------------------------

--
-- Table structure for table `outcomes`
--

CREATE TABLE `outcomes` (
  `idoutcomes` int(11) NOT NULL,
  `description` text NOT NULL,
  `outcomeAmount` int(11) NOT NULL,
  `outcomeDate` date DEFAULT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outcomes`
--

INSERT INTO `outcomes` (`idoutcomes`, `description`, `outcomeAmount`, `outcomeDate`, `year`, `month`, `day`) VALUES
(1, 'For some tings...', 100, '2020-12-03', 2020, 11, 27),
(2, 'some desription ...', 300, '2020-11-17', 2020, 11, 17),
(3, 'some tings...', 88, '2020-11-04', 2020, 11, 4),
(4, 'some desription ...', 300, '2020-11-17', 2020, 11, 17),
(5, 'some tings...', 88, '2020-11-04', 2020, 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(45) NOT NULL,
  `LastName` varchar(45) NOT NULL,
  `FatherName` varchar(45) NOT NULL,
  `salary` int(11) NOT NULL,
  `position` varchar(45) NOT NULL,
  `ssn` varchar(11) NOT NULL,
  `tazcareh` text NOT NULL,
  `dp_id` int(11) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_of_brith` date NOT NULL DEFAULT current_timestamp(),
  `photo` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `FirstName`, `LastName`, `FatherName`, `salary`, `position`, `ssn`, `tazcareh`, `dp_id`, `phone`, `city`, `district`, `address`, `date_of_brith`, `photo`, `status`) VALUES
(6, 'wajieha', 'niazi', 'M.saleh', 44000, 'developer', '44888', 'e9dda649c15471e5aa75e92d41f61e66.jpg', 1, '0793292204', 'Herat', '2', 'Darb_khosh', '2000-03-06', 'da3afb07529b1cdc49a20deb57997f59.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userName` varchar(120) NOT NULL,
  `email` varchar(130) NOT NULL,
  `type` enum('admin','copartner','staff') NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `FirstName`, `password`, `lastName`, `userName`, `email`, `type`, `created_date`, `photo`, `status`) VALUES
(24, 'admin', '$2y$12$jCx8uiy8M7qKWQ9WFqL/I.XRUuz1FsGwqhJEuCQEhCwVDmubYpC7.', 'admin', 'admin', 'admin@gmail.com', 'admin', '2020-11-13 05:04:48', 'a9258a93abc3ea369716a345fd53f430.jpg', 1),
(25, 'copartner', '$2y$12$.rfzT/zYKzebc0m44uFjdOeEcU04zsCl1XOF05dTRNYSVqQwTlRhq', 'copartner', 'copartner', 'copartner@gmail.com', 'copartner', '2020-11-17 13:34:06', '4ee42da6e03ba46d6b3ae0e033a2f9a6.jpg', 1),
(27, 'staff', '$2y$12$EnQDLLnWyCtpmY12K6e9cOLh8ouOn7eP3wkQiTDpmCshrylJFNN2i', 'staff', 'staff', 'staff@gmail.com', 'staff', '2020-12-02 08:07:49', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`idcurrency`);

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expence`
--
ALTER TABLE `expence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`iditems`);

--
-- Indexes for table `outcomes`
--
ALTER TABLE `outcomes`
  ADD PRIMARY KEY (`idoutcomes`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dp` (`dp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `idcurrency` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `expence`
--
ALTER TABLE `expence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `iditems` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `outcomes`
--
ALTER TABLE `outcomes`
  MODIFY `idoutcomes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `id_dp` FOREIGN KEY (`dp_id`) REFERENCES `departement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
