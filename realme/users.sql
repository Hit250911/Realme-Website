-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 09:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'Miliyansh jain', 'miliyansh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-04-18 22:32:59'),
(2, 'Kunal Idnani', 'kunal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-04-18 22:33:45'),
(3, 'goku', 'ram@gamil.com', 'd41d8cd98f00b204e9800998ecf8427e', '2023-05-20 09:06:27'),
(4, 'goku', 'goku1@gmail.com', '89ae0fe22c47d374bc9350ef99e01685', '2023-05-20 09:07:32'),
(5, 'itachi', 'i@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-05-20 09:09:01'),
(6, 'arsh', 'arsh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-05-20 09:28:55'),
(7, 'kunal', 'kunal1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-05-20 12:47:58'),
(8, '555', 'h6', 'dc468c70fb574ebd07287b38d0d0676d', '2023-05-20 12:48:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
