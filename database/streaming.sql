-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 04:01 PM
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
  `ids` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idFilm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`ids`, `idUser`, `idFilm`) VALUES
(1, 8, 18),
(4, 8, 16),
(7, 8, 13),
(12, 8, 19),
(14, 8, 14),
(18, 8, 1),
(22, 10, 20);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listfilm`
--

INSERT INTO `listfilm` (`id`, `name`, `poster`, `video`, `detail`, `genre`, `liked`) VALUES
(1, 'Everything Everywhere All At Once', 'Everything Everywhere All At Once.jpg', 'Everything Everywhere All At Once.mp4', 'Everything Everywhere All At Once adalah petualangan yang penuh aksi, sci-fi yang lucu dan berjiwa besar tentang seorang wanita Cina-Amerika, Seorang imigran Tiongkok terbawa dalam petualangan luar biasa, di mana dia sendiri yang dapat menyelamatkan dunia dengan menjelajahi alam semesta lain yang terhubung dengan kehidupan yang bisa dia jalani.', 'Action', 5),
(2, 'Marvel Studios AVENGERS 5 THE KANG DYNASTY', 'Marvel Studios AVENGERS 5 THE KANG DYNASTY.jpg', 'Marvel Studios AVENGERS 5 THE KANG DYNASTY.mp4', 'perjalanan Kang the Conqueror dan anaknya, Scarlet Centurion.\r\n\r\nKeduanya akan membuat serangan yang menghancurkan Bumi. Kejadian tersebut menjadi salah satu peristiwa paling spektakuler yang diterbitkan dalam komik. Untuk cerita di komik, Kang menempatkan seluruh dunia di bawah pengepungan.', 'Action', 10),
(3, 'Thor 2', 'Thor 2.jpg', 'Thor 2.mp4', 'Malekith, pemimpin kaum elf jahat, kembali untuk merebut Aether, sebuah senjata berkekuatan dahsyat dari Asgard yang bisa menghancurkan sembilan alam. Kini Thor harus berjuang untuk menghentikannya.', 'Action', 2),
(4, 'Top Gun Maverick', 'Top Gun Maverick.jpg', 'Top Gun Maverick.mp4', 'Lebih dari 30 tahun mengabdi sebagai salah satu penerbang Angkatan Laut terbaik, Pete “Maverick” Mitchell berada dalam posisi dambaannya, melakukan aksi-aksi mendobrak sebagai pilot uji nan pemberani, dan menampik setiap kesempatan naik pangkat karena akan membuatnya tak bisa menerbangkan pesawatnya.', 'Action', 8),
(5, 'Transformers Rise of the Beasts', 'Transformers Rise of the Beasts.jpg', 'Transformers Rise of the Beasts.mp4', 'Transformers: Rise of the Beasts/sinopsis\r\nKembali ke aksi dan tontonan yang telah memikat penonton bioskop di seluruh dunia, Transformers: Rise of the Beasts akan membawa penonton dalam petualangan keliling dunia tahun 90-an dengan Autobots dan memperkenalkan generasi baru Transformer – Maximals – ke pertempuran yang ada di bumi antara Autobots dan Decepticons.', 'Action', 6),
(6, 'SPIDERMAN ACROSS THE SPIDERVERSE', 'across_the_spider-verse.jpg', 'SPIDERMAN ACROSS THE SPIDERVERSE.mp4', 'Miles Morales hadir kembali dalam babak baru saga Spider-Verse. Usai berjumpa lagi dengan Gwen Stacy, Spider-Man si tetangga yang ramah asal Brooklyn ini terlontar melintasi Multiverse yang membawanya pada Spider Society, kelompok pahlawan manusia laba-laba yang bertugas melindungi kelangsungan Multiverse. Namun, saat para pahlawan ini berselisih tentang cara melawan sebuah ancaman besar, Miles pun harus beradu dengan para manusia laba-laba yang lain dan menetapkan langkahnya sendiri demi menyelamatkan orang-orang yang ia cintai. Siapa pun bisa memakai topeng itunamun seorang pahlawan adalah ia yang tahu benar cara memakainya.', 'Comedy', 6),
(7, 'despicable me 2', 'despicable me 2.jpg', 'Despicable Me 2 - Trailer 2.mp4', 'Saat Gru tengah menikmati perannya sebagai ayah dan hidup normal, sebuah ramuan rahasia dicuri dari laboratorium. Anti-Villain League pun mengirim Gru dan agen AVL Lucy Wilde sebagai mata-mata.', 'Comedy', 13),
(8, 'guardians of the galaxy vol 3', 'guardians of the galaxy vol 3.jpg', 'Marvel Studios’ Guardians of the Galaxy Vol. 3.mp4', 'Film ketiga akan melanjutkan kisah petualangan Peter Quill/Star Lord (Chris Pratt) dan teman-temannya sebagai penjaga galaksi.Masih berduka karena kehilangan Gamora (Zoe Saldana), Peter mengumpulkan timnya untuk kembali melindungi alam semesta. Misi kali ini tidaklah mudah, jika tidak berhasil, maka akan menjadi akhir bagi para Guardians.', 'Comedy', 1),
(9, 'Ted', 'Ted.jpg', 'Ted - Trailer.mp4', 'John Bennett mendapat keajaiban di hari Natal saat permintaannya terkabul: boneka beruang miliknya, Ted, akhirnya bisa hidup dan berbicara! John pun tumbuh besar dengan Ted, tapi semenjak dewasa, John merasa mulai menjauh dari sahabatnya itu. Dia pun harus memilih antara pacar barunya, Lori Collins, atau Ted.', 'Comedy', 7),
(10, 'The Super Mario Bros. Movie', 'smb movie.jpg', 'The Super Mario Bros. Movie - Official.mp4', 'Kisah Mario (Chris Pratt) si tukang ledeng yang melakukan perjalanan heroik untuk menyelamatkan saudaranya, Luigi (Charlie Day). Di perjalanan, Mario tidak sendiri, ia dibantu oleh Putri Peach (Anya Taylor-Joy) dan prajurit kerajaan jamur.', 'Comedy', 11),
(11, 'Evil Dead Rise', 'Evil Dead Rise.jpg', 'Evil Dead Rise.mp4', 'Evil Dead Rise menceritakan kisah mengejutkan tentang dua saudara perempuan yang terasing yang reuninya dipersingkat oleh munculnya setan yang merasuki manusia, mendorong mereka ke dalam pertempuran utama untuk bertahan hidup saat mereka menghadapi versi keluarga paling mengerikan yang bisa dibayangkan.', 'Horor', 2),
(12, 'Pamali', 'Pamali.jpg', 'Pamali.mp4', 'Jaka Sunarya yang baru saja kehilangan pekerjaan, bersama dengan sang istri, Rika ingin menjual rumah peninggalan orang tuanya untuk memulai hidup baru. Di desa tersebut, mereka tanpa sengaja melanggar adat yang telah menjadi tradisi, sehingga menghadapi keberadaan makhluk halus yang mengancam nyawa mereka..', 'Horor', 19),
(13, 'Pengabdi Setan 2', 'Pengabdi Setan 2.jpg', 'Pengabdi Setan 2.mp4', 'Beberapa tahun setelah berhasil menyelamatkan diri dari kejadian mengerikan yang membuat mereka kehilangan ibu dan si bungsu Ian, Rini dan adik-adiknya, Toni dan Bondi, serta Bapak tinggal di rumah susun karena percaya tinggal di rumah susun aman jika terjadi sesuatu karena ada banyak orang.', 'Horor', 25),
(14, 'Sewu Dino', 'Sewu Dino.jpg', 'SewuDino.mp4', 'Ditengah kesulitan ekonomi, Sri diterima bekerja untuk keluarga Atmojo dengan bayaran yang tinggi, karena keunikan yang ia miliki, yaitu lahir pada hari Jumat Kliwon. Bersama Erna dan Dini, mereka dibawa ke sebuah gubuk tersembunyi di tengah hutan. Di gubuk tersebut, Sri, Erna, dan Dini bertugas untuk memandikan Dela Atmojo, cucu dari Mbah Karsa Atmojo yang tidak sadarkan diri karena kutukan santet Sewu Dino, salah satu santet yang paling mengerikan. Mereka tidak bisa lari dari gubuk tersebut karena terikat perjanjian mistis dengan Mbah Karsa Atmojo, dan mereka harus selesaikan ritual sampai hari ke 1000. Jika melanggar, kematian menanti mereka.', 'Horor', 16),
(15, 'Waktu Maghrib', 'Waktu Maghrib.jpg', 'Waktu Maghrib.mp4', 'Adi dan Saman sering dihukum oleh Bu Woro, guru mereka yang disiplin dan galak. Suatu hari, kekesalan Adi dan Saman terhadap Bu Woro memuncak. Mereka menyumpahi guru itu bersamaan dengan kumandang adzan Maghrib.', 'Horor', 4),
(16, 'Before We Go', 'Before We Go.jpg', 'Before We Go.mp4', 'Melihat sesosok wanita yang terlihat panik karena tertinggal kereta, seorang musisi jalanan berniat membantunya menemukan cara lain untuk segera sampai dirumah -sebelum suaminya tiba.', 'Romantis', 25),
(17, 'Paper Towns poster', 'Paper Towns poster.jpg', 'Paper Towns.mp4', 'menceritakan Quentin, seorang remaja biasa saja. Ia sudah lama menyukai tetangganya yang unik dan misterius, Margo. Tapi, ia tidak berani untuk mengutarakan perasaannya.\r\n\r\nKesukaan Margo pada misteri membawa keduanya dalam petualangan satu malam. Tapi, segera setelah itu, Margo menghilang. Margo meninggalkan petunjuk-petunjuk samar untuk dipecahkan Quentin. Mampukah Quentin menemukan Margo?', 'Romantis', 17),
(18, 'Senses', 'Senses.jpg', 'Senses.mp4', 'Seorang wanita yang memiliki keahlian melihat masa depan saat dia mencium seseorang. Berkisah tentang Hong Ye Sul (Seo Ji Hye) yang merupakan seorang karyawan ambisius di perusahaan periklanan. Diketahui, sejak masih kecil, Ye Sul memang telah dianugerahi dengan kemampuan khusus.', 'Romantis', 9),
(19, 'The Notebook', 'The Notebook.jpg', 'The Notebook.mp4', 'Film ini tentang seorang pria tua membacakan untuk seorang wanita tua. Mengikuti kehidupan dua kekasih, Allie dan Noah. Tapi mereka dipisahkan oleh orang tua Allie yang tidak setuju dengan Noah.', 'Romantis', 6),
(20, 'The Vow', 'The Vow.jpg', 'The Vow.mp4', 'Sebuah kecelakaan mobil membuat Paige dalam keadaan koma, dan ketika sadar, ia kehilangan ingatan yang parah. Suaminya, Leo berusaha untuk kembali mendapatkan hati istrinya. Film ini berdasarkan kisah nyata.', 'Romantis', 8);

-- --------------------------------------------------------

--
-- Table structure for table `love`
--

CREATE TABLE `love` (
  `idUser` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `love`
--

INSERT INTO `love` (`idUser`, `idFilm`) VALUES
(8, 14),
(10, 20);

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
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
