-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 11:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `msc`
--

CREATE TABLE `msc` (
  `idMsc` int(11) NOT NULL,
  `titleMsc` char(255) NOT NULL,
  `typeMsc` char(255) NOT NULL,
  `imgMsc` char(255) NOT NULL,
  `rateMsc` decimal(11,1) NOT NULL,
  `timeMsc` int(4) NOT NULL,
  `yearMsc` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msc`
--

INSERT INTO `msc` (`idMsc`, `titleMsc`, `typeMsc`, `imgMsc`, `rateMsc`, `timeMsc`, `yearMsc`) VALUES
(1, 'Dune', 'movie', './images/movies/dune.jpg', '8.2', 155, 2021),
(2, 'Venom: Let There Be Carnage', 'movie', './images/movies/venom2.PNG', '6.0', 97, 2021),
(3, 'Star Trek: Discovery', 'series', './images/series/star-trek.jpg', '7.1', 4, 2017),
(4, 'The Croods', 'cartoons', './images/cartoons/croods.jpg', '7.2', 98, 2013),
(5, 'The Dark Knight', 'movie', './images/movies/bat-man.jpg', '9.0', 152, 2008),
(6, 'Bloodshot', 'movie', './images/movies/blood-shot.jpg', '5.7', 109, 2020),
(7, 'Captain Marvel', 'movie', './images/movies/captain-marvel.png', '6.8', 123, 2019),
(8, 'Avengers:Endgame', 'movie', './images/movies/end-game.jpg', '8.4', 182, 2019),
(9, 'Free Guy', 'movie', './images/movies/free-guy.jpg', '7.2', 115, 2021),
(10, 'Hunter Killer', 'movie', './images/movies/hunter-killer.jpg', '6.6', 122, 2018),
(11, 'The Mandalorian', 'series', './images/series/mandalorian.jpg', '8.8', 2, 2019),
(12, 'Stranger Things', 'series', './images/series/stranger-thing.jpg', '8.7', 3, 2016),
(13, 'Supergirl', 'series', './images/series/supergirl.jpg', '6.2', 6, 2015),
(14, 'The Falcon and the Winter Soldier', 'series', './images/series/the-falcon.webp', '7.3', 1, 2021),
(15, 'WandaVision', 'series', './images/series/wanda.webp', '8.0', 1, 2021),
(16, 'Attack on Titan', 'series', './images/series/attackontitan.jpg', '9.0', 4, 2013),
(17, 'Demon Slayer: Kimetsu No Yaiba', 'series', './images/series/demon-slayer.jpg', '8.7', 1, 2019),
(18, 'Dragon Ball', 'series', './images/series/dragonball.jpg', '8.5', 7, 1986),
(19, 'Naruto', 'series', './images/series/naruto.jpg', '8.3', 4, 2002),
(20, 'Over the Moon', 'cartoons', './images/cartoons/OverTheMoon.jpg', '6.4', 100, 2020),
(21, 'Shrek', 'cartoons', './images/cartoons/shrek.jpg', '7.9', 90, 2001),
(22, 'Penguins of Madagascar', 'cartoons', './images/cartoons/penguins.jpg', '6.7', 92, 2014),
(23, 'Rise of the Guardians', 'cartoons', './images/cartoons/riseofgard.jpg', '7.3', 97, 2012),
(24, 'Mulan', 'cartoons', './images/cartoons/mulan.jpg', '7.7', 88, 1998),
(25, 'Soul', 'cartoons', './images/cartoons/soul.jpg', '8.1', 100, 2020),
(26, 'Ice Age', 'cartoons', './images/cartoons/iceage.jpg', '7.5', 81, 2002),
(27, 'The Boss Baby', 'cartoons', './images/cartoons/bassbaby.jpg', '6.3', 97, 2017),
(28, 'WALL·E', 'cartoons', './images/cartoons/walle.jpg', '8.4', 98, 2008),
(29, 'The Shawshank Redemption', 'movie', './images/movies/tsr.jpg', '9.3', 142, 1994),
(30, 'Army of Thieves', 'movie', './images/movies/armyoft.jpg', '6.4', 127, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersUid`, `usersEmail`, `usersPwd`) VALUES
(2, 'marino', 'marino@gmail.com', '$2y$10$gQ5/bw2Khsr6zt9M8LwNsewqKNXMKtHfCdftILHRgh8Kj3oGnMeoq'),
(3, 'tonii', 'toni@gmail.com', '$2y$10$4Ib7kwnmEmP7Ndk4L90KVebxEhbW5xLpcURF0WURKHPStgObwvZeK'),
(4, 'test12', 'test@gmail.com', '$2y$10$k/bFOQBm8mix4sa22MsovOmuoQDuY0nx4fTXf8mRFYTHETRIUHMV6'),
(5, 'ninaj', 'ninajuranovic1@gmail.com', '$2y$10$MBb7kmQSQlok5mOeYAgCXeGumXVRlQw78ja4eGv79NBGv5tdES1Eq'),
(6, 'tester', 'tester@gmail.com', '$2y$10$BQsx8fyIisJLC3PaoiXqae69wTRyGaiIue.0x.a8AH9IJiG.fgxwG'),
(7, 'pero1', 'pero@gmil.co', '$2y$10$0Ry2c10sbZC5eX/UIQvBGeOXM9RyzUjs6jM4gUnEjqzMh4iyfQ5ke');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msc`
--
ALTER TABLE `msc`
  ADD PRIMARY KEY (`idMsc`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msc`
--
ALTER TABLE `msc`
  MODIFY `idMsc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
