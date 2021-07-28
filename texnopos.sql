-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3307
-- Время создания: Июл 28 2021 г., 08:59
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `texnopos`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `img`) VALUES
(1, 'Lorem Isum dolor sit emmet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium ocommodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.dit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', '1.jpg'),
(2, 'Assalawma A`leykum TexnoPOS IT Mektebine Xosh Keldin`iz!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', '2.jpg'),
(3, 'Lorem Isum dolor sit emmet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium ocommodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.dit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', '1.jpg'),
(4, 'Assalawma A`leykum TexnoPOS IT Mektebine Xosh Keldin`iz!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', '2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
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
  `file1` varchar(11) DEFAULT NULL,
  `file2` varchar(255) DEFAULT NULL,
  `file3` varchar(255) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `days` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `name`, `hour`, `age`, `sub_time`, `student_count`, `id_mentor`, `img`, `description`, `file1`, `file2`, `file3`, `price`, `days`) VALUES
(1, 'Android', '25 sabaq', '16-25 jas', '18:00 - 20:00', '20 adam', 1, 'android.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', '1', NULL, NULL, '290 min` som', 'Taq kúnleri'),
(2, 'Web(Frontend)', '20', '13-30 Jas', '14:00 - 16:00', '30 adam', 2, 'front.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', '2', NULL, NULL, '150 min` som', 'Taq kúnleri'),
(3, 'Kotlin', '35 sabaq', '15-27 jas', '18:00 - 20:00', '24 adam', 3, 'kotlin.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', '3', NULL, NULL, '200 min` som', 'Jup kúnleri'),
(4, 'Web(Backend)', '20', '13-30 Jas', '14:00 - 16:00', '30 adam', 4, 'web.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero. Necessitatibus, consequuntur maxime! Officiis quidem minus laudantium ad. Minus laboriosam at libero.', '2', NULL, NULL, '390 min` som', 'Taq kúnleri'),
(5, 'Moushn Dizayner', '25 sabaq', '16-25 jas', '18:00 - 20:00', '23', 6, 'android.jpg', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', '6', NULL, NULL, '120 min` sum', 'Taq kúnleri'),
(6, 'Web (Frontend)', '25 sabaq', '16-25 jas', '18:00 - 20:00', '23', 6, 'android.jpg', ' <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end--> <!--blog-posts end-->', '2', NULL, NULL, '120 min` sum', 'Taq kúnleri'),
(7, 'Python For Kids', '22', '22', '22', '22', 1, 'python.jpg', 'wcwecwecweweweecwcw', '2', NULL, NULL, '12000000', 'eee'),
(8, 'Python', 'Neshe Sabaq Boladi', 'Neshe jaq araliq qabillanadi', 'sabaq waqti', 'neshe adam alinadi', 1, 'python.jpg', 'Kurs turali qosimsha mag`liwmat', '2', NULL, NULL, 'Neshe som kurs?', 'Taq kunleri/Jup kunleri'),
(9, 'IT Future', '12 sabaq', '12-30', '12:14', '20 adam', 3, 'img', 'sssddddddddddddddddddddddddddddddddddddddddddddddddddddddddddf', 'file1', 'file1', 'file1', '123 000 000', 'taq kunleri');

-- --------------------------------------------------------

--
-- Структура таблицы `event`
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

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id`, `date`, `price`, `adress`, `mentor_id`, `title`, `time`, `text`, `img`) VALUES
(1, '2021-06-07', '100 min`', 'erferfrrgrrvtr', 2, 'fvrvtrvrvr rg rt rtrt rt', '14:00 - 16:00', '\r\nececrecececececececerc', 'web.jpg'),
(2, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(3, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(4, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(5, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(6, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(7, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(8, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(9, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(10, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg'),
(11, '2021-06-07', '100 min`', 'Texnopos Ofisinde', 2, 'Web da`sturlewge kirisiw', '14:00 - 16:00', '\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Omnis consectetur esse minima quasi perferendis autem consequatur, maiores ut modi distinctio aspernatur, harum illum. Et animi excepturi eum perspiciatis vero quia iusto distinctio. Libero reiciendis quae saepe aliquid, dolore similique atque aspernatur facilis veritatis provident qui laudantium, commodi deserunt accusamus cumque.', 'web.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `galerya`
--

CREATE TABLE `galerya` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `galerya`
--

INSERT INTO `galerya` (`id`, `img`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg'),
(10, '10.jpg'),
(11, '1.jpg'),
(12, '2.jpg'),
(13, '3.jpg'),
(14, '4.jpg'),
(15, '5.jpg'),
(16, '6.jpg'),
(17, '7.jpg'),
(18, '8.jpg'),
(19, '9.jpg'),
(20, '10.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `mentors`
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
-- Дамп данных таблицы `mentors`
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
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Quwanishbek', 'yeadamQoysa@gmail.com', 'dedwedwed'),
(2, 'Quwanishbek', 'yeadamQoysa@gmail.com', 'dedwedwed'),
(3, 'Quvonchbek', 'aaaa@gmail.com', 'wxxwxwxwxew'),
(4, 'Quwanishbek', 'aaaa@gmail.com', 'eerereere'),
(5, 'Quwanishbek', 'aaaa@gmail.com', 'eerereere'),
(6, 'Quwanishbek', 'aaaa@gmail.com', 'eerereere'),
(7, 'Quvonchbek', 'aaaa@gmail.com', 'wxxwxwxwxew'),
(8, 'Quvonchbek', 'ecweecerce@gmail', 'ewewecwecw'),
(9, 'Quvonchbek', 'ecweecerce@gmail', 'ewewecwecw'),
(10, 'Quvonchbek', 'ecweecerce@gmail', 'ewewecwecw'),
(11, 'Quvonchbek', 'yeadamQoysa@gmail.com', 'sxsxwsxswdsdsssdsd'),
(12, 'Quvonchbek', 'aaaa@gmail.com', 'fvrbrtbrtbr'),
(13, 'Quvonchbek', 'aaaa@gmail.com', 'wsw'),
(14, 'Quvonchbek', 'yeadamQoysa@gmail.com', 'erer'),
(15, 'Quvonchbek', 'aaaa@gmail.com', 'dedwedwedwewe');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id`, `title`, `date`, `text`, `img`) VALUES
(1, 'Lorem ipsum dolor 1', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'android.jpg'),
(2, 'Lorem ipsum dolor 1', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'kotlin.jpg'),
(3, 'Lorem ipsum dolor 3', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'kotlinrus.jpg'),
(5, 'Lorem ipsum dolor 5', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'front.jpg'),
(6, 'Lorem ipsum dolor 6', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'web.jpg'),
(8, 'Lorem ipsum dolor 4', '2021-06-21', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. In quisquam aspernatur doloribus quo explicabo tempora odio commodi, numquam esse maxime quaerat minima eveniet possimus enim. Cum incidunt rerum adipisci quae repudiandae esse nisi totam praesentium odit iure. Minima ipsum excepturi, maiores tempora, cupiditate sapiente ab distinctio obcaecati officiis enim maxime.', 'python.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `proects`
--

CREATE TABLE `proects` (
  `id` int(11) NOT NULL,
  `is_mentor` tinyint(1) DEFAULT '0',
  `is_programmer` tinyint(1) DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `text` text,
  `title` varchar(19) NOT NULL,
  `is_student` tinyint(1) DEFAULT '0',
  `id_person` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `proects`
--

INSERT INTO `proects` (`id`, `is_mentor`, `is_programmer`, `type`, `text`, `title`, `is_student`, `id_person`) VALUES
(1, 0, 1, 'website', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 2),
(2, 0, 0, 'app', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 9),
(3, 0, 1, 'website', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 8),
(4, 1, 0, 'app', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 6),
(5, 0, 0, 'app', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 1, 12),
(6, 0, 1, 'app', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 2),
(7, 1, 0, 'app', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 9),
(8, 0, 1, 'website', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 11),
(9, 1, 0, 'app', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 0, 3),
(10, 0, 0, 'app', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquam, accusamus velit quibusdam provident nisi tempora consequatur dolorem quaerat. Illum, ipsa nulla eaque eligendi accusantium totam corrupti magni temporibus odit.', 'This is a title', 1, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `proect_img`
--

CREATE TABLE `proect_img` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_proect` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `proect_img`
--

INSERT INTO `proect_img` (`id`, `img`, `id_proect`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 2),
(3, '3.jpg', 9),
(4, '4.jpg', 10),
(5, '5.jpg', 5),
(6, '6.jpg', 1),
(7, '7.jpg', 7),
(8, '8.jpg', 4),
(9, '1a.jpg', 6),
(10, '2a.jpg', 6),
(11, '3a.jpg', 3),
(12, '4a.jpg', 4),
(13, '5a.jpg', 6),
(14, '6a.jpg', 1),
(15, '7a.jpg', 8),
(16, '8a.jpg', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `programmer`
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
-- Дамп данных таблицы `programmer`
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
-- Структура таблицы `registratsiya`
--

CREATE TABLE `registratsiya` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `id_course` int(20) NOT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registratsiya`
--

INSERT INTO `registratsiya` (`id`, `name`, `phone`, `id_course`, `text`) VALUES
(1, 'Quvonchbek', 'aaaa@gmail.com', 5, 'sdsdcsdccdcf'),
(2, 'Quvonchbek', 'aaaa@gmail.com', 5, 'sdsdcsdccdcf'),
(3, 'Quwanishbek', 'aaaa@gmail.com', 4, 'giyvyygbuhbugy'),
(4, 'Quvonchbek', 'aaaa@gmail.com', 4, 'yifyigvbggbiugbigibgui'),
(5, 'Quvonchbek', '(+998) 88-888-88-88', 1, 'sdcecece'),
(6, 'Quwanishbek', '(+998) 99-682-27-12', 1, 'lorem ipsum dolor emmet ...'),
(7, 'asd', '(+998) __-___-__-__', 1, NULL),
(8, 'Quvonchbek', '(+998) __-___-__-__', 1, NULL),
(9, 'asasd', '999565882', 1, NULL),
(10, 'Quvonchbek', '+998', 1, NULL),
(11, 'Quwanishbek', '996822712', 1, NULL),
(12, 'Quvonchbek', '996822712', 1, NULL),
(13, 'Quwanishbek', '76', 6, NULL),
(14, 'Quvonchbek', '12', 1, NULL),
(15, 'Quvonchbek', '996822712', 1, NULL),
(16, 'Quvonchbek', '4444444', 3, 'sdfadsdsdsdsdsdsdscdwwwwsxwsxswsx'),
(17, 'Quvonchbek', '9983333', 1, 'qwxqwqwwswwwww'),
(18, 'dqc', '4444444', 5, 'ecerceevr');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'mentors'),
(2, 'programmer'),
(3, 'students');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
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
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `full_name`, `about`, `phone`, `email`, `portfolio_detail`, `experiense`, `bitirgen`, `id_course`, `telegram`, `facebook`, `instagram`, `img`, `birthday`) VALUES
(9, 'Jamiyla Joldasova ', NULL, '99 567 77 77 ', 'dddd@gmail.com', 'Portfolio Turali Mag`liwat', '5 jil', 'QA`yerlerdi bitirgen', 7, 'see', 'eee', 'eee', '4.jpg', '2000-12-27'),
(10, 'Abatbayev Jaxangir', NULL, '99 567 77 77 ', 'dddd@gmail.com', 'Portfolio Turali Mag`liwat', '5 jil', 'QA`yerlerdi bitirgen', 7, 'see', 'eee', 'eee', '4.jpg', '2000-12-27'),
(11, 'baxtibayev Erkinbay', NULL, '99 567 77 77 ', 'dddd@gmail.com', 'Portfolio Turali Mag`liwat', '5 jil', 'QA`yerlerdi bitirgen', 7, 'see', 'eee', 'eee', '4.jpg', '2000-12-27'),
(12, 'Saburov Sherzat', NULL, '99 567 77 77 ', 'dddd@gmail.com', 'Portfolio Turali Mag`liwat', '5 jil', 'QA`yerlerdi bitirgen', 7, 'see', 'eee', 'eee', '4.jpg', '2000-12-27');

-- --------------------------------------------------------

--
-- Структура таблицы `texnalogies`
--

CREATE TABLE `texnalogies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `texnalogies`
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
-- Структура таблицы `texnalogies_mentors`
--

CREATE TABLE `texnalogies_mentors` (
  `id` int(11) NOT NULL,
  `id_texnalogiy` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL,
  `procent` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `texnalogies_mentors`
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
-- Структура таблицы `texnalogies_programmer`
--

CREATE TABLE `texnalogies_programmer` (
  `id` int(11) NOT NULL,
  `id_texnalogiy` int(11) NOT NULL,
  `id_programmer` int(11) NOT NULL,
  `procent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `texnalogies_programmer`
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
-- Структура таблицы `texnalogies_student`
--

CREATE TABLE `texnalogies_student` (
  `id` int(11) NOT NULL,
  `id_texnalogiy` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `procent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `texnalogies_student`
--

INSERT INTO `texnalogies_student` (`id`, `id_texnalogiy`, `id_student`, `procent`) VALUES
(1, 8, 9, 20),
(2, 5, 2, 55);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galerya`
--
ALTER TABLE `galerya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `proects`
--
ALTER TABLE `proects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `proect_img`
--
ALTER TABLE `proect_img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `programmer`
--
ALTER TABLE `programmer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `registratsiya`
--
ALTER TABLE `registratsiya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texnalogies`
--
ALTER TABLE `texnalogies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texnalogies_mentors`
--
ALTER TABLE `texnalogies_mentors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texnalogies_programmer`
--
ALTER TABLE `texnalogies_programmer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `texnalogies_student`
--
ALTER TABLE `texnalogies_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `galerya`
--
ALTER TABLE `galerya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `proects`
--
ALTER TABLE `proects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `proect_img`
--
ALTER TABLE `proect_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `programmer`
--
ALTER TABLE `programmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `registratsiya`
--
ALTER TABLE `registratsiya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `texnalogies`
--
ALTER TABLE `texnalogies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `texnalogies_mentors`
--
ALTER TABLE `texnalogies_mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `texnalogies_programmer`
--
ALTER TABLE `texnalogies_programmer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `texnalogies_student`
--
ALTER TABLE `texnalogies_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
