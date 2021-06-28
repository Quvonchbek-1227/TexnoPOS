-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 28, 2021 at 06:53 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `texnopos`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hour` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `sub_time` varchar(50) NOT NULL,
  `student_count` varchar(100) NOT NULL,
  `id_mentor` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file_id` int(11) NOT NULL,
  `price` varchar(50) NOT NULL,
  `days` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `hour`, `age`, `sub_time`, `student_count`, `id_mentor`, `img`, `description`, `file_id`, `price`, `days`) VALUES
(1, 'Android', '25 sabaq', '16-25 jas', '18:00 - 20:00', '20 adam', 1, 'android.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', 1, '290 min` som', 'Taq kúnleri'),
(2, 'Web(Frontend)', '20', '13-30 Jas', '14:00 - 16:00', '30 adam', 2, 'front.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', 2, '150 min` som', 'Taq kúnleri'),
(3, 'Kotlin', '35 sabaq', '15-27 jas', '18:00 - 20:00', '24 adam', 3, 'kotlin.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', 3, '200 min` som', 'Jup kúnleri'),
(4, 'Web(Backend)', '20', '13-30 Jas', '14:00 - 16:00', '30 adam', 4, 'web.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', 2, '390 min` som', 'Taq kúnleri'),
(5, 'Moushn Dizayner', '25 sabaq', '16-25 jas', '18:00 - 20:00', '23', 6, 'android.jpg', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', 6, '120 min` sum', 'Taq kúnleri'),
(6, 'Lorem Ipsum Dolor', '25 sabaq', '16-25 jas', '18:00 - 20:00', '23', 6, 'android.jpg', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', 2, '120 min` sum', 'Taq kúnleri');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `mentor_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `full_name` varchar(24) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `about` text,
  `portfolio_detail` text,
  `experiense` varchar(30) NOT NULL,
  `bitirgen` varchar(255) DEFAULT NULL,
  `id_course` int(11) NOT NULL,
  `telegram` varchar(30) DEFAULT NULL,
  `facebook` varchar(30) DEFAULT NULL,
  `instagram` varchar(30) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `birthday` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `full_name`, `phone`, `email`, `about`, `portfolio_detail`, `experiense`, `bitirgen`, `id_course`, `telegram`, `facebook`, `instagram`, `img`, `birthday`) VALUES
(1, 'Sharapat Kalabayev', '99 567 77 77 ', 'dddd@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore? assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', '5 jil', 'TATU Tashkent', 2, '@sharapat_k', 'Sharapat Kalabayev', NULL, 'android.jpg', '12.2.1989'),
(2, 'Alibek Embergenov', '99 567 77 77 ', 'dddd@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore? assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', '5 jil', 'TATU Tashkent', 3, '@sharapat_k', 'Sharapat Kalabayev', NULL, '5.jpg', '23.4.1992'),
(3, 'Salawat Bazarbayev', '99 567 77 77 ', 'dddd@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore? assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', '5 jil', 'TATU Tashkent', 1, '@sharapat_k', 'Sharapat Kalabayev', NULL, '4.jpg', '11.5.1999'),
(4, 'NurlanYusupov', '99 567 77 77 ', 'dddd@gmail.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, non, veniam molestias ipsum itaque labore commodi expedita repudiandae ipsam eveniet, voluptas id quasi alias illum fuga vel nesciunt similique odio omnis magnam ratione deserunt ex magni in. Necessitatibus consectetur minus quas assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore? assumenda perferendis labore explicabo cumque fugiat ducimus, dolores dolore?', '5 jil', 'TATU Tashkent', 4, '@sharapat_k', 'Sharapat Kalabayev', NULL, '3.jpg', '25.11.200'),
(5, 'Azamat Tayirov', ' 99 567 77 77 ', 'dddd@gmail.com', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', '5 jil', 'QMU ', 5, '@sharapat_k', 'Sharapat Kalabayev', 'ddwwecc', '1.jpg', '23.5.1996'),
(6, 'Yuldashev Quwanishbek', '99 567 77 77', 'dddd@gmail.com', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', '5 jil', 'tatu', 6, '@sharapat_k', NULL, NULL, '2.jpg', '24.7.1998');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `date`, `text`, `img`) VALUES
(1, 'Lorem ipsum dolor 1', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'android.jpg'),
(2, 'Lorem ipsum dolor 1', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'kotlin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `programmer`
--

CREATE TABLE `programmer` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `about` text,
  `portfolio_detail` text,
  `experiense` varchar(50) NOT NULL,
  `bitirgen` varchar(255) NOT NULL,
  `telegram` varchar(30) DEFAULT NULL,
  `facebook` varchar(30) DEFAULT NULL,
  `instagram` varchar(30) NOT NULL,
  `img` varchar(255) NOT NULL,
  `birthday` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programmer`
--

INSERT INTO `programmer` (`id`, `full_name`, `phone`, `email`, `about`, `portfolio_detail`, `experiense`, `bitirgen`, `telegram`, `facebook`, `instagram`, `img`, `birthday`) VALUES
(1, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', ''),
(2, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', ''),
(3, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', ''),
(4, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', ''),
(5, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', ''),
(6, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', ''),
(7, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', ''),
(8, 'Quwanishbek Yuldashev', '+998996822712', 'yuldashevquwanishbek@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', 'cabo sequi veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!ui veniam est itaque numquam ut exercitationem, maxime illo provident esse excepturi laboriosam inventore placeat quidem officia culpa tenetur. Inventore, quae!', '1 jil', 'TATU Nukus Filiali,No`kis Temirjollari KOK,TexnoPOS IT mektebi web (fullstak) kursin', 'yuldashevquwanishbek', 'Yuldashev Quwansihebk', 'quwanishbek_1227', 'front.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `about` text,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `portfolio_detail` text,
  `experiense` varchar(50) NOT NULL,
  `bitirgen` text,
  `id_course` int(30) NOT NULL,
  `telegram` varchar(30) DEFAULT NULL,
  `facebook` varchar(30) DEFAULT NULL,
  `instagram` varchar(30) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `birthday` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `about`, `phone`, `email`, `portfolio_detail`, `experiense`, `bitirgen`, `id_course`, `telegram`, `facebook`, `instagram`, `img`, `birthday`) VALUES
(1, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999'),
(2, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999'),
(3, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999'),
(4, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999'),
(5, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999'),
(6, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999'),
(7, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999'),
(8, 'Azamat Saparov', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '+998993457689', 'dddsxw', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error consequatur minus, nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!nulla, atque quis repellat eveniet dolore quidem tenetur maxime aspernatur itaque natus ratione aperiam excepturi ducimus placeat deserunt. In!', '5 jil', 'TATUNF', 4, '@student_1', 'Azamat Saparov', 'aza_001', 'bala.jpg', '12.02.1999');

-- --------------------------------------------------------

--
-- Table structure for table `texnalogies`
--

CREATE TABLE `texnalogies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `texnalogies`
--

INSERT INTO `texnalogies` (`id`, `name`) VALUES
(1, 'Html'),
(2, 'Java Script'),
(3, 'Css'),
(4, 'Bootstrap'),
(5, 'jQuery'),
(6, 'ReactJS'),
(7, 'React Nativ'),
(8, 'Kotlin'),
(9, 'Androit'),
(10, 'Java'),
(11, 'Python'),
(12, 'Django'),
(13, 'MySQL'),
(14, 'Firebase'),
(15, 'Photoshop'),
(16, 'Adobe Illustrator');

-- --------------------------------------------------------

--
-- Table structure for table `texnalogies_mentors`
--

CREATE TABLE `texnalogies_mentors` (
  `id` int(11) NOT NULL,
  `id_texnalogiy` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL,
  `procent` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `texnalogies_mentors`
--

INSERT INTO `texnalogies_mentors` (`id`, `id_texnalogiy`, `id_mentor`, `procent`) VALUES
(1, 1, 1, 30),
(2, 1, 2, 50),
(3, 3, 5, 60),
(4, 2, 5, 68),
(5, 11, 4, 55),
(6, 10, 3, 100),
(9, 4, 2, 44),
(10, 5, 13, 33),
(11, 15, 6, 69),
(12, 16, 2, 56),
(13, 3, 1, 30),
(14, 4, 2, 50),
(15, 3, 5, 60),
(16, 2, 5, 68),
(17, 11, 4, 55),
(18, 10, 3, 100),
(19, 4, 2, 44),
(20, 5, 13, 33),
(21, 15, 6, 69),
(22, 16, 2, 56);

-- --------------------------------------------------------

--
-- Table structure for table `texnalogies_programmer`
--

CREATE TABLE `texnalogies_programmer` (
  `id` int(11) NOT NULL,
  `id_texnalogiy` int(11) NOT NULL,
  `id_programmer` int(11) NOT NULL,
  `procent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `texnalogies_programmer`
--

INSERT INTO `texnalogies_programmer` (`id`, `id_texnalogiy`, `id_programmer`, `procent`) VALUES
(3, 1, 1, 30),
(4, 1, 2, 100),
(5, 1, 3, 50),
(6, 1, 4, 55),
(7, 1, 5, 79),
(8, 1, 6, 20),
(9, 2, 3, 44),
(10, 4, 5, 55),
(11, 5, 1, 33),
(12, 5, 2, 55),
(13, 5, 3, 45),
(14, 5, 4, 66),
(15, 5, 5, 56),
(16, 5, 6, 35),
(17, 11, 4, 24),
(18, 10, 5, 34);

-- --------------------------------------------------------

--
-- Table structure for table `texnalogies_student`
--

CREATE TABLE `texnalogies_student` (
  `id` int(11) NOT NULL,
  `id_texnalogiy` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `procent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `texnalogies_student`
--

INSERT INTO `texnalogies_student` (`id`, `id_texnalogiy`, `id_student`, `procent`) VALUES
(1, 1, 1, 44),
(2, 5, 2, 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmer`
--
ALTER TABLE `programmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texnalogies`
--
ALTER TABLE `texnalogies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texnalogies_mentors`
--
ALTER TABLE `texnalogies_mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texnalogies_programmer`
--
ALTER TABLE `texnalogies_programmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `texnalogies_student`
--
ALTER TABLE `texnalogies_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programmer`
--
ALTER TABLE `programmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `texnalogies`
--
ALTER TABLE `texnalogies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `texnalogies_mentors`
--
ALTER TABLE `texnalogies_mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `texnalogies_programmer`
--
ALTER TABLE `texnalogies_programmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `texnalogies_student`
--
ALTER TABLE `texnalogies_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
