-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 10:34 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sender` varchar(150) NOT NULL,
  `text` varchar(500) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `time`, `sender`, `text`, `user_id`) VALUES
(1, '2018-07-08 06:51:37', 'unknown', 'hiii reda', 94),
(2, '2018-07-08 06:57:41', 'unknown', 'hi mody', 95),
(4, '2018-07-08 07:09:46', 'unknown', 'erweqwe', 94),
(5, '2018-07-08 08:27:08', 'unknown', 'bro\r\n', 95),
(6, '2018-07-08 08:27:14', 'unknown', 'test', 95),
(7, '2018-07-08 08:09:00', 'unknown', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', 95),
(8, '2018-07-08 08:27:24', 'unknown', 'as;odlkasd', 95),
(9, '2018-07-08 08:27:33', 'unknown', '4444444444444444', 95),
(10, '2018-07-08 08:27:46', 'unknown', '55555555555', 95),
(15, '2018-07-08 08:32:27', 'unknown', 'hello reda', 94);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fName` varchar(150) NOT NULL,
  `lName` varchar(150) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(150) NOT NULL,
  `passWord` varchar(500) NOT NULL,
  `photo` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `username`, `email`, `passWord`, `photo`) VALUES
(94, 'llllllll', 'llllllllllll', 'reda', 'abo.reda5363@icloud.com', '$2y$10$4KbkO52XRWDltDcHppZF6uriJsskFDE6nL0n46OO0utPudQc0dA8y', '12345678'),
(95, 'dddd', 'dddd', 'mody', 'abo.reda53632@gmail.com', '$2y$10$Ww1dk7jtRMlAcHClj8kJjOfblNHfysarEMV3StlhIB4Ks07kbCv4m', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
