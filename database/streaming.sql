-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 02:54 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

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
  `idUser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idUser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `listfilm`
--

CREATE TABLE `listfilm` (
  `id` int(11) NOT NULL,
  `poster` text NOT NULL,
  `video` text NOT NULL,
  `detail` text NOT NULL,
  `genre` text NOT NULL,
  `play` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listfilm`
--

INSERT INTO `listfilm` (`id`, `poster`, `video`, `detail`, `genre`, `play`) VALUES
(1, 'Everything Everywhere All At Once.jpg', 'Everything Everywhere All At Once.mp4', '', 'Action', 1),
(2, 'Marvel Studios AVENGERS 5 THE KANG DYNASTY.jpg', 'Marvel Studios AVENGERS 5 THE KANG DYNASTY.mp4', '', 'Action', 0),
(3, 'Thor 2.jpg', 'Thor 2.mp4', '', 'Action', 0),
(4, 'Top Gun Maverick.jpg', 'Top Gun Maverick.mp4', '', 'Action', 0),
(5, 'Transformers Rise of the Beasts.jpg', 'Transformers Rise of the Beasts.mp4', '', 'Action', 2),
(6, 'across_the_spider-verse.jpg', 'SPIDERMAN ACROSS THE SPIDERVERSE.mp4', '', 'Comedy', 0),
(7, 'despicable me 2.jpg', 'Despicable Me 2 - Trailer 2.mp4', '', 'Comedy', 0),
(8, 'guardians of the galaxy vol 3.jpg', 'Marvel Studios’ Guardians of the Galaxy Vol. 3 .mp4', '', 'Comedy', 0),
(9, 'Ted.jpg', 'Ted - Trailer.mp4', '', 'Comedy', 0),
(10, 'smb movie.jpg', 'The Super Mario Bros. Movie - Official.mp4', '', 'Comedy', 0),
(11, 'Evil Dead Rise.jpg', 'Evil Dead Rise.mp4', '', 'Horor', 0),
(12, 'Pamali.jpg', 'Pamali.mp4', '', 'Horor', 0),
(13, 'Pengabdi Setan 2.jpg', 'Pengabdi Setan 2.mp4', '', 'Horor', 0),
(14, 'Sewu Dino.jpg', 'SewuDino.mp4', '', 'Horor', 0),
(15, 'Waktu Maghrib.jpg', 'Waktu Maghrib.mp4', '', 'Horor', 0),
(16, 'Before We Go.jpg', 'Before We Go.mp4', '', 'Romantis', 0),
(17, 'Paper Towns poster.jpg', 'Paper Towns.mp4', '', 'Romantis', 0),
(18, 'Senses.jpg', 'Senses.mp4', '', 'Romantis', 0),
(19, 'The Notebook.jpg', 'The Notebook.mp4', '', 'Romantis', 0),
(20, 'The Vow.jpg', 'The Vow.mp4', '', 'Romantis', 1),
(21, 'pexels-pixabay-315191.jpg', '2023-04-30 20-23-21.mkv', 'Kisah perjalanan bagas dana anjing nya mencari makan', 'Romance,Comedy', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `email`, `subscribe`) VALUES
(8, 'bagaskara', '2004', 'bagas@gmail.com', 0),
(9, 'bagaskara', '2004', 'bagas@gmail.com', 0);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `listfilm`
--
ALTER TABLE `listfilm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
