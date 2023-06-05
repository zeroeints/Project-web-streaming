-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 02:24 AM
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
  `idUser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idUser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listfilm`
--

INSERT INTO `listfilm` (`id`, `poster`, `video`, `detail`, `genre`, `play`) VALUES
(1, 'Everything Everywhere All At Once', 'Everything Everywhere All At Once', '', 'Action', 1),
(2, 'Marvel Studios AVENGERS 5 THE KANG DYNASTY', 'Marvel Studios AVENGERS 5 THE KANG DYNASTY', '', 'Action', 0),
(3, 'Thor 2', 'Thor 2', '', 'Action', 0),
(4, 'Top Gun Maverick', 'Top Gun Maverick', '', 'Action', 0),
(5, 'Transformers Rise of the Beasts', 'Transformers Rise of the Beasts', '', 'Action', 2),
(6, 'across_the_spider-verse', 'SPIDERMAN ACROSS THE SPIDERVERSE', '', 'Comedy', 0),
(7, 'despicable me 2', 'Despicable Me 2 - Trailer 2', '', 'Comedy', 0),
(8, 'guardians of the galaxy vol 3', 'Marvel Studios’ Guardians of the Galaxy Vol. 3 ', '', 'Comedy', 0),
(9, 'Ted', 'Ted - Trailer', '', 'Comedy', 0),
(10, 'smb movie', 'The Super Mario Bros. Movie - Official', '', 'Comedy', 0),
(11, 'Evil Dead Rise', 'Evil Dead Rise', '', 'Horor', 0),
(12, 'Pamali', 'Pamali', '', 'Horor', 0),
(13, 'Pengabdi Setan 2', 'Pengabdi Setan 2', '', 'Horor', 0),
(14, 'Sewu Dino', 'SewuDino', '', 'Horor', 0),
(15, 'Waktu Maghrib', 'Waktu Maghrib', '', 'Horor', 0),
(16, 'Before We Go', 'Before We Go', '', 'Romantis', 0),
(17, 'Paper Towns poster', 'Paper Towns', '', 'Romantis', 0),
(18, 'Senses', 'Senses', '', 'Romantis', 0),
(19, 'The Notebook', 'The Notebook', '', 'Romantis', 0),
(20, 'The Vow', 'The Vow', '', 'Romantis', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
