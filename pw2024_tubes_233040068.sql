-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2024 at 04:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040068`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `gambar`, `harga`, `deskripsi`) VALUES
(1, 'Batagor ', 'batagor.png', '25.000', 'batagor atau baso, tahu. goreng. adalah jajanan khas jawa barat yang kini sudah dikenal hampir di seluruh wilayah indonesia.bahan utama batagor : bakwan,dan tahu goreng disajikan dengan kuah kacang.'),
(2, 'Seblak', 'seblak.jpg', '10.000', 'seblak adalah masakan khas Sunda yang berasal dari wilayah Parahyangan dengan cita rasa gurih dan pedas. Seblak umumnya terbuat dari kerupuk yang terdiri dari bawang putih dengan kencur.'),
(3, 'Dodol', 'dodol.jpg', '20.000', 'Dodol adalah penganan, dibuat dari tepung ketan, santan kelapa, dan gula merah, kadang-kadang dicampur dengan buah-buahan, seperti durian, sirsak dibungkus daun jagung, atau kertas.'),
(13, 'Ayam bakakak', 'ayam bakakak.jpg', '70.000', 'Bakakak hayam adalah makanan pendamping atau lauk pauk untuk kelengkapan makan nasi. Bekakak berarti korban penyembelihan hewan atau manusia. Karena bentuknya yang seperti seseorang yang duduk bersila, maka dalam bahasa Sunda disebut bakakakk'),
(14, 'Cireng', 'cireng.jpg', '15.000', 'Cireng adalah makanan ringan yang berasal dari tanah Sunda yang dibuat dengan cara menggoreng campuran adonan yang berbahan utama tepung tapioka.'),
(15, 'Nasi Timbel', 'nasi timbel.jpg', '50.000', 'Nasi timbel adalah nasi yang dibungkus dengan daun pisang kemudian dikukus, dapat dibakar setelah dikukus untuk menambah aroma, biasanya disajikan dengan sambal, lalap, dan ayam goreng,'),
(36, 'Nasi Tutug Oncom', 'nasi tutug oncom.jpg', '25.000', 'Nasi Tutug bahan bahan: 1 porsi Nasi, 4 Oncom secukupnya, Garam, selera Penyedap rasa secukupnya, Gula pasir, Bahan Uleg 3 bawang putih, 3 bawang merah, 4 cabai rawit, 4 cabai merah'),
(38, 'Karedok', 'karedok.jpg', '25.000', 'Karedok Bahan Bahan: 1 siung bwng putih 1 ruas kencur/ cikur 3 sdm kacang yg sudah d goreng Secukup nya garam dan air sedikit Secukupnya gula merah 5 bh cabe setan klo mau pedes bisa tambahkan lg Secukupnya tauge, kol, kacang panjang, daun kemangi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(10, 'admin', '$2y$10$GKAJzEB9kj/Et.AfITXXwu16GfTFxP8jE1gReWrblDdq6Ox1g00nW', 'admin'),
(11, 'user', '$2y$10$pnsxFVV7g7mgLw40BJicpeMkaw4pNbPuJDff8gyeNnE.idZTBWKQu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
