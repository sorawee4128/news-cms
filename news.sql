-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 06:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Breaking News'),
(2, 'Government'),
(3, 'Media'),
(4, 'Sports'),
(5, 'Technology'),
(6, 'Traffic & Roads'),
(7, 'Weather');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introtext` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fulltext` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` tinyint(3) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(10) NOT NULL,
  `publish_up` datetime NOT NULL,
  `publish_down` datetime NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `introtext`, `fulltext`, `state`, `created`, `created_by`, `modified`, `modified_by`, `publish_up`, `publish_down`, `images`, `Category`) VALUES
(1, 'Our writers on the PL season', '<p>We asked our Sky Sports writers to provide their most memorable moment of an unforgettable Premier League campaign.</p>\r\n', '<p><img alt=\"\" src=\"https://e0.365dm.com/19/05/768x432/skysports-jurgen-klopp-pep-guardiola_4666332.png?20190512112259\" style=\"height:432px; width:768px\" /></p>\r\n\r\n<p><u><strong>Drama and tragedy -</strong>&nbsp;Adam Bate</u></p>\r\n\r\n<p>It was the strangest of title races, one in which the lead changed hands on a record number of occasions, but only because the matches were played at different times. Both Manchester City and Liverpool were utterly relentless during the run in. In a world where many are all too quick to call out the losers, this was sustained excellence on display.</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', 1, '2019-05-14 14:24:51', 1, '2019-05-14 14:24:51', 1, '2019-05-14 07:20:51', '2019-05-15 11:25:51', 'skysports-efl-football-sky-bet_43758521557837022.jpg', 4),
(2, 'Daniele de Rossi to leave Serie A side Roma at end of season', '<p>Veteran Roma midfielder Daniele de Rossi will leave the Italian side at the end of the season.</p>\r\n', '<p><img alt=\"\" src=\"https://ichef.bbci.co.uk/onesport/cps/800/cpsprodpb/6328/production/_106948352_de_rossi_epa.jpg\" style=\"height:450px; width:800px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Veteran Roma midfielder Daniele de Rossi will leave the Italian side at the end of the season.</p>\r\n\r\n<p>The 35-year-old, who joined the Serie A giants in 2000 from his hometown club Ostia Mare, has made 615 appearances and scored 63 goals for them.</p>\r\n\r\n<p>A Roma statement said De Rossi, who won the 2006 World Cup with Italy, would not be retiring but pursuing &quot;a new adventure&quot; elsewhere.</p>\r\n\r\n<p>De Rossi&#39;s final game for the club will be against Parma on Sunday, 26 May.</p>\r\n\r\n<p>&quot;Roma and I chose each other,&quot; he said. &quot;There is a lot of love between us, both now and in the future - even if it will be in another form.&quot;</p>\r\n\r\n<p>De Rossi won the Coppa Italia in 2007 and 2008, as well as Supercoppa in 2007, during his time with Roma.</p>\r\n\r\n<p>He will leave the club with the second most appearances for them behind Francesco Totti, who retired in 2017 having played 786 times.</p>\r\n\r\n<p>&quot;Looking back, some specific moments I would change,&quot; he added. &quot;But overall, I wouldn&#39;t change anything about staying loyal to this team.</p>\r\n\r\n<p>&quot;If I had a magic wand, I would have put a few more trophies on the mantelpiece.&quot;</p>\r\n\r\n<p>Roma are three points off a top-four spot in Serie A, which would secure Champions League qualification, in Serie A with two games left.</p>\r\n\r\n<p>&quot;We will all shed tears when he pulls on the Giallorossi shirt for the last time against Parma but we respect his desire to prolong his playing career - even if, at almost 36, it will be away from Rome,&quot; said Roma president Jim Pallotta.</p>\r\n\r\n<p>&quot;On behalf of everyone at Roma, I&#39;d like to thank Daniele for his incredible dedication to this club and ensure him that our doors will remain open for him to return to the club in a new role whenever he wants.&quot;</p>\r\n', 1, '2019-05-14 14:35:27', 1, '2019-05-14 14:35:27', 1, '2019-05-15 03:55:27', '2019-05-17 11:55:27', '_106948352_de_rossi_epa1557837469.jpg', 4),
(3, 'Women\'s World Cup watch: Who’s on form with less than a month to go?', '<p>With less than a month to go until the Women&#39;s World Cup begins on 7 June, BBC&nbsp;<em>Sport</em>&nbsp;looks at the international players who are impressing&nbsp;...</p>\r\n', '<p>With less than a month to go until the Women&#39;s World Cup begins on 7 June, BBC Sport looks at the international players who are impressing before the finals in France.</p>\r\n\r\n<p>The tournament begins in Paris, with home nations England and Scotland facing each other in their opening group game on Sunday, 9 June, hoping to reach the final in Lyon on 7 July.</p>\r\n\r\n<p><strong>Kerr to lead Matildas in France</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://ichef.bbci.co.uk/onesport/cps/624/cpsprodpb/98B5/production/_106939093_gettyimages-849430088.jpg\" style=\"height:351px; width:624px\" /></p>\r\n\r\n<p>She&#39;s a record-breaking goalscorer - and prolific back-flipper - and now striker&nbsp;<strong>Sam Kerr</strong>&nbsp;has been chosen to lead Australia in France.</p>\r\n\r\n<p>The 25-year-old made her international debut as a teenager 10 years ago and will compete at her third World Cup for the Matildas, who are in Group C alongside Italy, Brazil and Jamaica.</p>\r\n\r\n<p>Kerr plays for Chicago Red Stars in the National Women&#39;s Soccer League in the USA and Perth Glory in the Australian W-League - and she holds the all-time goal scoring record in both.</p>\r\n\r\n<p>She&#39;s made a brilliant start to the season in the NWSL, scoring four goals in five games, including two in the Red Stars&#39; 3-1 win over North Carolina Courage on Sunday.</p>\r\n', 1, '2019-05-14 14:39:51', 1, '2019-05-14 14:39:51', 1, '2019-05-16 07:35:52', '2019-05-25 03:55:52', '_106939093_gettyimages-8494300881557837760.jpg', 4),
(4, 'British people are baffled as hurling returns to Sky Sports for the summer', '<p>The All-Ireland championship is back underway and with it Sky&nbsp;<em>Sports</em>&#39; GAA coverage. The channel covered Kilkenny and Dublin&#39;s Leinster&nbsp;...</p>\r\n', '<p><img alt=\"\" src=\"https://i2-prod.irishmirror.ie/incoming/article15648153.ece/ALTERNATES/s810/0_inpho_01548300.jpg\" style=\"height:539px; width:810px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Kilkenny&#39;s Tommy Walsh, Paddy Deegan and Paul Murphy with Liam Rushe of Dublin during last weekend&#39;s Leinster Championship clash</strong></p>\r\n\r\n<p>The All-Ireland championship is back underway and with it Sky Sports&#39; GAA coverage.</p>\r\n\r\n<p>The channel covered Kilkenny and Dublin&#39;s Leinster Hurling Championship clash last weekend and with it introduced many British people to one of our national sports.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Our neighbours across the water continue to be unsurprisingly a little baffled by the spectacle of men chasing after a small hard ball with wooden sticks.</p>\r\n\r\n<p>One person tweeted: &quot;Hurling is a crazy sport. The Irish are a mad bunch.&quot;</p>\r\n', 1, '2019-05-14 14:46:04', 1, '2019-05-14 14:46:04', 1, '2019-05-18 07:45:04', '2019-05-28 07:45:04', '0_inpho_015483001557838060.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1557733508),
('m130524_201442_init', 1557733513),
('m190124_110200_add_verification_token_column_to_user_table', 1557733513);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'ANGKp53UDoQQrx3NVldkQbeeJgX4cM9u', '$2y$13$uIFNnmVU5091bDyJvLSmPO2GerkhL0UgkQhp6kvvh5U45L.BQjSN.', NULL, 'admin@gmail.com', 10, 1557733599, 1557733599, 'PPxUIBMGan5EWWPHPgumPAihiTN1KYNg_1557733599');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `modified_by` (`modified_by`),
  ADD KEY `Category` (`Category`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `content_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `content_ibfk_3` FOREIGN KEY (`Category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
