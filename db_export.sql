USE books;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 01:34 PM
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
-- Database: `laptops`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite_products_users`
--

CREATE TABLE `favorite_products_users` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL COMMENT 'Първичен ключ',
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`) VALUES
(1, 'Think and Grow Rich by Napoleon Hill', 'https://m.media-amazon.com/images/I/61CIKpN5QjL._AC_UF894,1000_QL80_.jpg', '16.99'),
(2, 'The Subtle Art of Not Giving a F*ck by Mark Manson', 'https://m.media-amazon.com/images/I/71QKQ9mwV7L._AC_UF894,1000_QL80_.jpg', '23.99'),
(3, 'HP Spectre x360', 'How to Win Friends and Influence People by Dale Carnegie', '21.99'),
(4, '"Rich Dad Poor Dad" by Robert T. Kiyosaki', 'https://assets.deliveradd.is/img/ProductsImg/9079/caebaea4-dd4d-453b-92a9-4fb3b5440c57.jpg', '20.90'),
(5, 'Letters from a Stoic by Seneca', 'https://cdn.ozone.bg/media/catalog/product/cache/1/image/400x498/a4e40ebdc3e371adff845072e1c73f37/n/a/5f40be86d6c29e7292e014814e786a71/nay-dobroto-ot-seneka-tvardi-koritsi-30.jpg', '15.00'),
(6, 'The Art of War by Sun Tzu', 'https://www.book.store.bg/dcrimg/252663/izkustvoto-na-vojnata.jpg', '5.50'),
(7, 'The Prince by Niccolò Machiavelli', 'https://knigomania.bg/media/catalog/product/cache/02f16ac392ba7c312a70e2f3c5d752a7/v/l/vladetelyat-9789542984962.jpg', '8.95'),
(8, 'Marcus Aurelius Meditations', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf2xxZ-DAHz2-TIWAqdH3iB2Gi8Su_1EA_xw&s', '13.60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `password`) VALUES
(6, 'Stelian', 'steli@abv.bg', '$argon2i$v=19$m=65536,t=4,p=1$QndnNTB3b0RmdUhTV2VVZQ$QfKHIMfaObI+KUoAMDhyxVKnxTQ3QvMBD+YYvy3Niks'),
(7, 'Stelian2', 'steli2@abv.bg', '$argon2i$v=19$m=65536,t=4,p=1$VmF4OGYzQjNWb0pOSU43bw$YUvVoKEoa5ibI9p0BG90ZYIWo38E26MewdZ3t8owjJM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite_products_users`
--
ALTER TABLE `favorite_products_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `favorite_products_users`
--
ALTER TABLE `favorite_products_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Първичен ключ', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
