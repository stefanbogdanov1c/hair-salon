-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 02:40 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klk`
--

-- --------------------------------------------------------

--
-- Table structure for table `frizer`
--

CREATE TABLE `frizer` (
  `idd` int(11) NOT NULL,
  `ime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frizer`
--

INSERT INTO `frizer` (`idd`, `ime`) VALUES
(1, 'Suzana'),
(2, 'Ruzica');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `id` int(11) NOT NULL,
  `frizer_id` int(11) NOT NULL,
  `ime_musterije` varchar(20) NOT NULL,
  `termin` datetime NOT NULL,
  `potvrdjeno` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezervacija`
--

INSERT INTO `rezervacija` (`id`, `frizer_id`, `ime_musterije`, `termin`, `potvrdjeno`) VALUES
(2, 2, 'Vule', '2022-04-13 12:58:38', 1),
(3, 1, 'suzana', '2022-04-12 13:10:18', 1),
(5, 2, 'Aleksandar Vucic', '2022-04-12 14:34:28', 0),
(6, 1, 'Sto Stolicic', '2022-04-12 14:37:28', 1),
(7, 1, 'Petar Prvulovic', '2022-04-12 14:35:39', 0),
(8, 2, 'Nemanja Radosavljevi', '2022-04-12 14:35:39', 1),
(9, 2, 'Stefan Bogdanovic', '2022-04-14 00:00:00', 0),
(10, 1, 'Marko Bogdanovic', '2022-04-06 00:00:00', 0),
(12, 1, 'Marko Bogdanovic', '2022-04-15 00:00:00', 0),
(13, 2, 'Ivan Bogdanovic', '2022-04-22 00:00:00', 0),
(14, 1, 'Indeks Bogdanovic', '2022-04-26 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frizer`
--
ALTER TABLE `frizer`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frizer`
--
ALTER TABLE `frizer`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
