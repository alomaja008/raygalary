-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2025 at 01:56 AM
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
-- Database: `ray`
--

-- --------------------------------------------------------

--
-- Table structure for table `rayweb`
--

CREATE TABLE `rayweb` (
  `User_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `reg day and time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rayweb`
--

INSERT INTO `rayweb` (`User_id`, `name`, `email`, `password`, `phone`, `address`, `skill`, `level`, `reg day and time`) VALUES
(29, 'Emmaculata', 'emmaculataemmanuel720@gmail.com', '$2y$10$zYu85YrZ6n0zfaUcWfCoi.Uy2FtZtvcx9mxSd9FTO7J8L4Ip.Flpi', '09024425480', 'No. 001 kasa street Akungba Akoko', 'Cyber Crime / Cyber Security', 'Intermediate', '2025-08-22 14:28:06'),
(30, 'Emmy', 'alomajaemmanuel4@gmail.com', '$2y$10$3MjIZz2LNgPB6b97ANW2POfJIZS/B6fryBBJ4AdouoRzLinKTKupG', '08108161547', 'No. 001 kasa street Akungba Akoko', 'Website Development', 'Professional', '2025-08-22 14:36:09'),
(31, 'Luca Lucy', 'lucalucy@gmail.com', '$2y$10$QLjapRtGyM9hn9lvVBH4LebDrv0whWZ.Ww53ZolAbtfkbQfFF6KEW', '09024425480', 'Akua Akungba Akoko', 'Others', 'Beginner', '2025-08-23 15:45:41'),
(32, 'Emmanuel church', 'emmanuelchurch@gmail.com', '$2y$10$afyo/iqfVSSektjmVS14PuZi4CUvjiypFTD0K/smJ2oX1TqByaWJW', '0907895357', 'okusa', 'sales', 'Beginner', '2025-08-24 11:09:44'),
(34, 'Esther', 'adeolaesther@gmail.com', '$2y$10$v0WxzWalylnSLTxeIJ6qI.g46C.8nXmNKWZfrxnaSpjMIS/B/rGy6', '08120759485', 'no.12 okusa quartersAkungba Akoko', 'sales', 'Beginner', '2025-08-24 12:02:55'),
(35, 'temmy', 'temmy@gmail.com', '$2y$10$7wzV33fQXTQat8B16iRr0epaMwKoWDRKNGEWLIuCJsVeMoSfSamF6', '09024425480', 'odiolowo omuo Ekiti', 'Software Engineer', 'Advanced', '2025-08-25 18:53:15'),
(36, 'training_use@gmail.com', 'training_use@gmail.com', '$2y$10$PJr3JtPCYIXQBU6AJjtofOMkgyYz/G7/DSLLA4288ZDHenNwjTi6i', '09047593783', 'Ayaoye Street Iludofin Omuo Ekiti', 'Graphics Design', 'Intermediate', '2025-08-25 19:13:47'),
(37, 'Idowu', 'alomajaemmauel4@gmail.com', '$2y$10$zFO7C1M0BtWKkW4MydYUYuLoJ1HX5BrJRYV4WEJGvcK0ValTgveV2', '456789', 'Ayaoye Street Iludofin Omuo Ekiti', 'Graphics Design', 'Intermediate', '2025-08-25 20:13:04'),
(38, 'Mr. Fash', 'mrfash@gmail.com', '$2y$10$fYxRU1c6o5bpK0uJ4vbpPemqYuHMNKgQuKhbk.24aptUMLkFQQ6se', '09068938069', 'AAUA ICT', 'Robotics Engineer', 'Advanced', '2025-08-26 12:07:26'),
(39, 'Tee. Jay', 'teejay@gmail.com', '$2y$10$PqZreFKXy6cdsV.pZDZVhuxSfel3pfu/3W9D0ztAvAPl3osmotapm', '09060799374', 'Akua Akungba', 'Website Development', 'Professional', '2025-08-26 12:34:55'),
(40, 'Alomaja Emmanuel', 'emmanuel@gmail.com', '$2y$10$K9B3GA/uuKUjpeyIcrzP6uoyUzVlnzbfDeXhW93zaE1vCJL9Ur9R2', '09068938069', 'Aqua Sports Complex Road, Permanent Site Akungba', 'Freelancing', 'Advanced', '2025-09-13 17:33:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rayweb`
--
ALTER TABLE `rayweb`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `user_email` (`email`),
  ADD UNIQUE KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rayweb`
--
ALTER TABLE `rayweb`
  MODIFY `User_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
