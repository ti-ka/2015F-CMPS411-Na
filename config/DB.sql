-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 29, 2015 at 09:33 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apps_411`
--

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `url` text NOT NULL,
  `ua` text NOT NULL,
  `reason` text NOT NULL,
  `time` float(10,5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cleared` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventId` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(300) NOT NULL,
  `coverPhoto` text NOT NULL,
  `place` varchar(200) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventId`, `title`, `description`, `slug`, `coverPhoto`, `place`, `dateTime`) VALUES
(2, 'Group Meeting', '<p>Most of its text is made up from sections 1.10.32â€“3 of Cicero''s De finibus bonorum et malorum (On the Boundaries of Goods and Evils; finibus may also be translated as purposes). Neque porro quisquam est qui do<strong>lorem ipsum</strong>&nbsp;quia&nbsp;<strong>dolor sit amet, consectetur, adipisci</strong>&nbsp;v<strong>elit</strong>&nbsp;is the first known version ("Neither is there anyone who loves grief itself since it is grief and thus wants to obtain it"). It was found by Richard McClintock, a philologist, director of publications at Hampden-Sydney College in Virginia; he searched for citings of consectetur in classical Latin literature, a term of remarkably low frequency in that literary corpus.Most of its text is made up from sections 1.10.32â€“3 of Cicero''s De finibus bonorum et malorum (On the Boundaries of Goods and Evils; finibus may also be translated as purposes). Neque porro quisquam est qui do<strong>lorem ipsum</strong>&nbsp;quia&nbsp;<strong>dolor sit amet, consectetur, adipisci</strong>&nbsp;v<strong>elit</strong>&nbsp;is the first known version ("Neither is there anyone who loves grief itself since it is grief and thus wants to obtain it"). It was found by Richard McClintock, a philologist, director of publications at Hampden-Sydney College in Virginia; he searched for citings of consectetur in classical Latin literature, a term of remarkably low frequency in that literary corpus.Most of its text is made up from sections 1.10.32â€“3 of Cicero''s De finibus bonorum et malorum (On the Boundaries of Goods and Evils; finibus may also be translated as purposes). Neque porro quisquam est qui do<strong>lorem ipsum</strong>&nbsp;quia&nbsp;<strong>dolor sit amet, consectetur, adipisci</strong>&nbsp;v<strong>elit</strong>&nbsp;is the first known version ("Neither is there anyone who loves grief itself since it is grief and thus wants to obtain it"). It was found by Richard McClintock, a philologist, director of publications at Hampden-Sydney College in Virginia; he searched for citin</p>', 'group-meeting', 'assets/uploads/events/1446145391-hillary-cover.jpg', 'Hammond', '2015-11-30 12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postId` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `coverPhoto` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `author` varchar(10) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postId`, `title`, `content`, `coverPhoto`, `slug`, `author`, `createDate`, `updateDate`) VALUES
(8, 'Hello, People. It''s a new Blog yolo.', '<p>Lorem ipsum dolor sit amet, facer laoreet eam in, idque civibus sed an. Dico percipit dissentiet mei no, ei legimus posidonium sea. No pro modus perpetua. Percipit evertitur duo ne, cu mutat periculis comprehensam cum. Liber detracto te per, et mei iusto percipit maiestatis.</p><p>Mucius euripidis nec cu, ei dicat reprehendunt his, sit ei adhuc option principes. Dicunt oportere argumentum est te, pro ut blandit accumsan. Eum te elit erroribus, suas elitr sit ei. Et ludus sensibus sed, nam ad debitis qualisque. Essent conclusionemque id nec, cu aliquip alienum offendit mea. Ea eos fabellas quaerendum, dicit volutpat assueverit ex eam.</p><p><span data-fr-verified="true" class="f-img-wrap fr-fil fr-dii"><span data-fr-verified="true" class="f-img-editor fr-fil fr-dii"><img class="fr-fil fr-dii" alt="Image title" src="http://i.froala.com/download/733e701d4744bf64df7307b1509a1562e5a12d5c.jpg?1446159884" width="300"><span data-fr-verified="true" class="f-img-handle f-h-ne"></span><span data-fr-verified="true" class="f-img-handle f-h-se"></span><span data-fr-verified="true" class="f-img-handle f-h-sw"></span><span data-fr-verified="true" class="f-img-handle f-h-nw"></span></span></span></p><p><span class="f-marker" data-collapsed="true" style="display:none; line-height: 0;" data-id="0" data-type="false" data-fr-verified="true"></span><span class="f-marker" data-collapsed="true" style="display:none; line-height: 0;" data-id="0" data-type="true" data-fr-verified="true"></span>Mei ferri eruditi alienum te, sale cotidieque eam in. Nihil electram signiferumque sed et. Diam unum ne vel, nominavi adipiscing ex eos. Id mea phaedrum atomorum antiopam, duo eu apeirian eloquentiam. Modo vitae eirmod cum ad, nec quem dicunt vivendum ne, per id eirmod eruditi. Pro ne prima alterum.</p><p>At his dicant meliore, eros cibo liber eu qui. Cu vim ipsum adipisci abhorreant. Saepe similique no est. Mea doctus atomorum et. Has ei soleat alterum, habeo iusto vitae per no. Est eirmod ponderum platonem id, vivendum torquatos ne duo. Id animal consetetur intellegam mei.</p><p>Ne tation recteque sea, per idque altera reprehendunt eu. Mel at dolore prompta maiestatis, cu quidam aliquid neglegentur mel. Te vidit solum errem mel, omnis vituperata his cu, at est erant denique intellegat. Semper ancillae detracto per an, in dico choro recteque eos. Id populo ullamcorper mea.</p>', 'assets/uploads/blogs/1446151134-3-thegreatdivide.jpg', 'hello-people-its-a-new-blog-yolo', '', '2015-10-29 20:38:54', '2015-10-29 23:05:03'),
(9, 'Coffee at Starbucks', '<p><b>Starbucks Corporation</b>,&nbsp;<a href="https://en.wikipedia.org/wiki/Doing_business_as" title="Doing business as">doing business as</a>&nbsp;<b>Starbucks Coffee</b>, is an American&nbsp;<a href="https://en.wikipedia.org/wiki/Coffee" title="Coffee">coffee</a>&nbsp;company and&nbsp;<a href="https://en.wikipedia.org/wiki/List_of_coffeehouse_chains" title="List of coffeehouse chains">coffeehouse chain</a>&nbsp;based in&nbsp;<a href="https://en.wikipedia.org/wiki/Seattle" title="Seattle">Seattle</a>, Washington. Starbucks is the largest&nbsp;<a href="https://en.wikipedia.org/wiki/Coffeehouse" title="Coffeehouse">coffeehouse</a>&nbsp;company in the world, with 22,766 stores in 65 countries and territories, including 12,802 in the United States, 1,930 in China, 1,409 in Canada, 1,121 in Japan and 825 in the United Kingdom.<sup id="cite_ref-loxcel_1-1"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-loxcel-1">[1]</a></sup><sup id="cite_ref-Profile2014-10_5-0"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-Profile2014-10-5">[5]</a></sup></p><p>Starbucks locations serve hot and cold drinks, whole-bean coffee, microground instant coffee,&nbsp;<a href="https://en.wikipedia.org/wiki/Espresso" title="Espresso">espresso</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Caffe_latte" title="Caffe latte">caffe latte</a>, full-leaf&nbsp;<a href="https://en.wikipedia.org/wiki/Tea" title="Tea">teas</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Pastries" title="Pastries">pastries</a>, and snacks. Most stores also sell pre-packaged food items, hot and cold sandwiches, and items such as mugs and&nbsp;<a href="https://en.wikipedia.org/wiki/Whiskey_tumbler" title="Whiskey tumbler">tumblers</a>. Starbucks Evenings locations also offer a variety of&nbsp;<a href="https://en.wikipedia.org/wiki/Beer" title="Beer">beers</a>,&nbsp;<a href="https://en.wikipedia.org/wiki/Wine" title="Wine">wines</a>, and appetizers after 4 p.m.<sup id="cite_ref-6"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-6">[6]</a></sup>&nbsp;Through the Starbucks Entertainment division and&nbsp;<a href="https://en.wikipedia.org/wiki/Hear_Music" title="Hear Music">Hear Music</a>&nbsp;brand, the company also markets books, music, and film. Some of the company''s products are seasonal or specific to the locality of the store. Starbucks-brand coffee, ice cream and bottled cold coffee drinks are also sold at&nbsp;<a href="https://en.wikipedia.org/wiki/Grocery_stores" title="Grocery stores">grocery stores</a>.</p><p>From Starbucks'' founding in 1971 as a Seattle&nbsp;<a href="https://en.wikipedia.org/wiki/Coffee_bean" title="Coffee bean">coffee bean</a>&nbsp;roaster and&nbsp;<a href="https://en.wikipedia.org/wiki/Retailer" title="Retailer">retailer</a>, the company has expanded rapidly. Between 1987 and 2007, Starbucks opened on average two new stores every day.<sup id="cite_ref-7"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-7">[7]</a></sup>&nbsp;Starbucks had been profitable as a local company in Seattle in the early 1980s<sup id="cite_ref-8"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-8">[8]</a></sup>&nbsp;but lost money on its late 1980s expansion into the Midwest and&nbsp;<a href="https://en.wikipedia.org/wiki/British_Columbia" title="British Columbia">British Columbia</a>. Its fortunes did not reverse until the fiscal year of 1989-1990,<sup id="cite_ref-9"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-9">[9]</a></sup>when it registered a small profit of $812,000. By the time it expanded into&nbsp;<a href="https://en.wikipedia.org/wiki/California" title="California">California</a>&nbsp;in 1991 it had become trendy.<sup id="cite_ref-10"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-10">[10]</a></sup>&nbsp;The first store outside the United States or Canada opened in&nbsp;<a href="https://en.wikipedia.org/wiki/Tokyo" title="Tokyo">Tokyo</a>&nbsp;in 1996, and overseas stores now constitute almost one third of Starbucks'' stores.<sup id="cite_ref-11"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-11">[11]</a></sup>&nbsp;The company planned to open a net of 900 new stores outside of the United States in 2009,<sup id="cite_ref-seekingalpha_12-0"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-seekingalpha-12">[12]</a></sup>&nbsp;but has announced 300 store closures in the United States since 2008.<sup id="cite_ref-13"><a href="https://en.wikipedia.org/wiki/Starbucks#cite_note-13">[13]</a></sup></p>', 'assets/uploads/blogs/1446153523-how-many-customers-starbucks-will-have-in-the-future-chart.jpg', 'coffee-at-starbucks', '', '2015-10-29 21:18:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `id` int(11) NOT NULL,
  `ip` text NOT NULL,
  `url` text NOT NULL,
  `ua` text NOT NULL,
  `time` float(10,5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` char(60) NOT NULL,
  `access` int(1) NOT NULL DEFAULT '0',
  `oauth` char(40) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `name`, `password`, `access`, `oauth`, `created_at`, `updated_at`) VALUES
('admin', 'admin@mysite.com', 'Admin', '$2y$12$vADAsnE55Cs.cRWB2u14Yu14Blduxd2g9EX7byYPOJR8lqB7IIH3O', 3, '9206-5629a3e9f214f-5047366-5629a3e9f2157', '2015-10-22 22:52:50', '2015-10-23 03:05:13'),
('editor', 'editor@mysite.com', 'Content Editor', '$2y$12$vADAsnE55Cs.cRWB2u14Yu14Blduxd2g9EX7byYPOJR8lqB7IIH3O', 1, NULL, '2015-10-22 22:52:50', '2015-10-22 23:55:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventId`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postId`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `oauth` (`oauth`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blacklist`
--
ALTER TABLE `blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tracker`
--
ALTER TABLE `tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1637;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
