-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2019 at 10:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `user`, `message`, `date`) VALUES
(6, 'ishita', 'hi', '2018-12-23 13:17:55'),
(7, 'ishita', 'how are u?', '2018-12-23 13:19:40'),
(8, 'ishita', 'hi', '2018-12-23 14:49:17'),
(9, 'ishita', 'how\'s work ?', '2018-12-23 15:04:58'),
(11, 'ishita', 'all well ?', '2018-12-23 15:11:03'),
(14, 'neetu', 'yes', '2018-12-24 03:32:43'),
(17, 'neetu', 'i know ...', '2018-12-24 07:25:43'),
(18, 'ishita_1', 'hmm ok byee', '2018-12-24 07:25:52'),
(20, 'ishita_1', 'hi', '2018-12-24 09:10:29'),
(22, 'ishita_1', 'want to be a part of SDSLabs...', '2019-01-02 07:12:47'),
(23, 'neetu', 'may god fulfill ALL YOUR WISHES!!!', '2019-01-03 17:37:02'),
(24, 'bro', 'u are best didi !!yo!!', '2019-01-03 17:38:58'),
(25, 'papa', 'all the best!!', '2019-01-05 08:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `username`, `email`, `password`) VALUES
(1, 'Ishita', 'Kaul', 'ishita_1', 'ishitakaul07@gmail.com', '$2y$10$exzJdGK8WHIZIQjwPd3s6ee/UFNvaXTreEQwwbf0iwa0uJ4BfQMjm'),
(2, 'Sujata', 'Kaul', 'neetu', 'sujatakaul1973@gmail.com', '$2y$10$N45UONechjqlV/aCIVPW8.JFnvVl1v49eHMNzFS1n9jXpOBgUYifu'),
(3, 'Navin', 'Kaul', 'papa', 'nkaul7691@gmail.com', '$2y$10$OjDr591VTxeKUaeYWMg76.nRqJh0I/csNYyInKS1DWsQN8FbzI7l2'),
(4, 'ishan', 'kaul', 'bro', 'ishankaul@gmail.com', '$2y$10$q0HyOLORvXMbvqCT1yutWe1RxjlQQXflB/YHyKbl1KDeXJQPlWPmy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
