-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 03:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `ids` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idFilm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`ids`, `idUser`, `idFilm`) VALUES
(1, 8, 13),
(2, 8, 1),
(3, 8, 6),
(4, 8, 20),
(5, 8, 2),
(7, 8, 19);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ids` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idFilm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ids`, `idUser`, `idFilm`) VALUES
(1, 8, 18),
(4, 8, 16),
(6, 8, 20),
(7, 8, 13),
(12, 8, 19),
(14, 8, 14),
(18, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `listfilm`
--

CREATE TABLE `listfilm` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `poster` text NOT NULL,
  `video` text NOT NULL,
  `detail` text NOT NULL,
  `genre` text NOT NULL,
  `liked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listfilm`
--

INSERT INTO `listfilm` (`id`, `name`, `poster`, `video`, `detail`, `genre`, `liked`) VALUES
(1, 'Everything Everywhere All At Once', 'Everything Everywhere All At Once.jpg', 'Everything Everywhere All At Once.mp4', '', 'Action', 5),
(2, 'Marvel Studios AVENGERS 5 THE KANG DYNASTY', 'Marvel Studios AVENGERS 5 THE KANG DYNASTY.jpg', 'Marvel Studios AVENGERS 5 THE KANG DYNASTY.mp4', '', 'Action', 10),
(3, 'Thor 2', 'Thor 2.jpg', 'Thor 2.mp4', '', 'Action', 2),
(4, 'Top Gun Maverick', 'Top Gun Maverick.jpg', 'Top Gun Maverick.mp4', '', 'Action', 8),
(5, 'Transformers Rise of the Beasts', 'Transformers Rise of the Beasts.jpg', 'Transformers Rise of the Beasts.mp4', '', 'Action', 6),
(6, 'SPIDERMAN ACROSS THE SPIDERVERSE', 'across_the_spider-verse.jpg', 'SPIDERMAN ACROSS THE SPIDERVERSE.mp4', '', 'Comedy', 6),
(7, 'despicable me 2', 'despicable me 2.jpg', 'Despicable Me 2 - Trailer 2.mp4', '', 'Comedy', 13),
(8, 'guardians of the galaxy vol 3', 'guardians of the galaxy vol 3.jpg', 'Marvel Studios’ Guardians of the Galaxy Vol. 3.mp4', '', 'Comedy', 1),
(9, 'Ted', 'Ted.jpg', 'Ted - Trailer.mp4', '', 'Comedy', 7),
(10, 'The Super Mario Bros. Movie', 'smb movie.jpg', 'The Super Mario Bros. Movie - Official.mp4', '', 'Comedy', 11),
(11, 'Evil Dead Rise', 'Evil Dead Rise.jpg', 'Evil Dead Rise.mp4', '', 'Horor', 2),
(12, 'Pamali', 'Pamali.jpg', 'Pamali.mp4', '', 'Horor', 19),
(13, 'Pengabdi Setan 2', 'Pengabdi Setan 2.jpg', 'Pengabdi Setan 2.mp4', '', 'Horor', 25),
(14, 'Sewu Dino', 'Sewu Dino.jpg', 'SewuDino.mp4', '', 'Horor', 16),
(15, 'Waktu Maghrib', 'Waktu Maghrib.jpg', 'Waktu Maghrib.mp4', '', 'Horor', 4),
(16, 'Before We Go', 'Before We Go.jpg', 'Before We Go.mp4', '', 'Romantis', 25),
(17, 'Paper Towns poster', 'Paper Towns poster.jpg', 'Paper Towns.mp4', '', 'Romantis', 17),
(18, 'Senses', 'Senses.jpg', 'Senses.mp4', '', 'Romantis', 9),
(19, 'The Notebook', 'The Notebook.jpg', 'The Notebook.mp4', '', 'Romantis', 6),
(20, 'The Vow', 'The Vow.jpg', 'The Vow.mp4', '', 'Romantis', 7);

-- --------------------------------------------------------

--
-- Table structure for table `love`
--

CREATE TABLE `love` (
  `idUser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `love`
--

INSERT INTO `love` (`idUser`, `idFilm`) VALUES
(8, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `subscribe` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `email`, `subscribe`) VALUES
(8, 'bagaskara', 'bgs2004', 'bagas@gmail.com', 1),
(10, 'daus', '12345', 'daus@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `idFilm` (`idFilm`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `idFilm` (`idFilm`);

--
-- Indexes for table `listfilm`
--
ALTER TABLE `listfilm`
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
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `listfilm`
--
ALTER TABLE `listfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`idFilm`) REFERENCES `listfilm` (`id`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`idFilm`) REFERENCES `listfilm` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
