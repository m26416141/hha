-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2021 at 12:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(225) NOT NULL,
  `article_date` datetime NOT NULL,
  `article_content` text NOT NULL,
  `article_img` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_date`, `article_content`, `article_img`) VALUES
(2, 'Thousands Protest Lockdown In Sydney, Several Arrested', '2021-07-21 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec fermentum mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque dui lorem, tempus eget nisl ac, placerat laoreet augue. Maecenas interdum nisi id urna congue malesuada. Vivamus posuere vitae erat nec elementum. Sed at diam cursus, congue turpis non, vulputate neque. Maecenas vel ultrices lorem. Donec rutrum pellentesque lectus.\r\n\r\nPhasellus eget congue elit, laoreet malesuada dolor. Mauris in diam ut tortor blandit sollicitudin non ac nulla. Proin ac quam auctor, convallis tellus nec, tempor odio. Pellentesque aliquam imperdiet sapien egestas mattis. Etiam hendrerit metus nec efficitur fringilla. Vivamus vel fermentum nisi. Fusce euismod malesuada mauris a egestas. Nullam eget sagittis massa, sed malesuada ipsum. Donec at nisl vitae diam pulvinar hendrerit et vel sem.\r\n\r\nMaecenas vestibulum facilisis risus vitae auctor. Vestibulum auctor condimentum interdum. Sed ut mi non est ultrices pulvinar. Praesent sem ante, interdum at fermentum quis, sollicitudin volutpat est. In in nisi in ex congue feugiat et et tortor. Integer pellentesque vehicula orci in ullamcorper. Suspendisse vel tortor vel turpis faucibus faucibus id eget felis. Quisque scelerisque magna non risus elementum pellentesque. Maecenas id ligula purus. Vivamus a elit laoreet, rutrum ligula vitae, posuere dolor. Maecenas ex ipsum, pulvinar sed viverra vel, vehicula posuere diam. Nunc molestie semper orci non elementum. Donec sit amet sapien eu quam vestibulum auctor. Morbi gravida, mauris rutrum dapibus pharetra, nisl ex consequat quam, non ullamcorper urna libero eu libero.', '60fc10475d2de3.76269085.jpg'),
(3, 'haaaiii', '2021-07-21 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus finibus purus ac placerat. Aenean at facilisis dolor. Sed aliquam cursus erat. Cras tincidunt velit nibh. Etiam eu turpis consequat, sagittis leo a, imperdiet urna. Cras accumsan lectus nec lacinia vestibulum. Nullam varius iaculis velit quis pulvinar. Nam suscipit ac risus in pulvinar. Nulla eleifend enim lacus, et fringilla libero sagittis quis. Donec feugiat luctus nunc ut feugiat. Curabitur laoreet, nulla eget auctor tincidunt, ligula diam egestas nisl, vitae interdum elit turpis eu magna. Maecenas tristique sem vel quam porttitor tempus. Aenean viverra a sapien ac laoreet. Phasellus erat orci, ultricies eu viverra non, pretium ut ex. Praesent sed nisi quis risus efficitur volutpat ullamcorper sed felis. Cras nec nisi velit.\r\n\r\nFusce enim ipsum, iaculis vel risus nec, vulputate dapibus turpis. In feugiat sollicitudin eros non luctus. Ut ac congue ante. Aenean venenatis felis sit amet sollicitudin lacinia. Vivamus sed malesuada dolor, ut volutpat enim. Curabitur ullamcorper dolor neque, non pulvinar ante rhoncus quis. Duis ut dui hendrerit, rutrum diam vitae, ornare felis. In est enim, placerat at ipsum ultrices, interdum laoreet enim. Duis vel arcu velit. Morbi in ante in risus faucibus viverra.', '60fffa9f264567.33785140.jpg'),
(4, 'Thousands Protest Lockdown In Sydney, Several Arrested', '2021-07-21 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus finibus purus ac placerat. Aenean at facilisis dolor. Sed aliquam cursus erat. Cras tincidunt velit nibh. Etiam eu turpis consequat, sagittis leo a, imperdiet urna. Cras accumsan lectus nec lacinia vestibulum. Nullam varius iaculis velit quis pulvinar. Nam suscipit ac risus in pulvinar. Nulla eleifend enim lacus, et fringilla libero sagittis quis. Donec feugiat luctus nunc ut feugiat. Curabitur laoreet, nulla eget auctor tincidunt, ligula diam egestas nisl, vitae interdum elit turpis eu magna. Maecenas tristique sem vel quam porttitor tempus. Aenean viverra a sapien ac laoreet. Phasellus erat orci, ultricies eu viverra non, pretium ut ex. Praesent sed nisi quis risus efficitur volutpat ullamcorper sed felis. Cras nec nisi velit.\r\n\r\nFusce enim ipsum, iaculis vel risus nec, vulputate dapibus turpis. In feugiat sollicitudin eros non luctus. Ut ac congue ante. Aenean venenatis felis sit amet sollicitudin lacinia. Vivamus sed malesuada dolor, ut volutpat enim. Curabitur ullamcorper dolor neque, non pulvinar ante rhoncus quis. Duis ut dui hendrerit, rutrum diam vitae, ornare felis. In est enim, placerat at ipsum ultrices, interdum laoreet enim. Duis vel arcu velit. Morbi in ante in risus faucibus viverra.', '60fe95de08ce63.06360668.jpeg'),
(5, 'This is a trial for editing article', '2021-07-14 00:00:00', 'Ut purus ex, vehicula quis ipsum vel, efficitur efficitur orci. Nam ultrices iaculis ipsum vestibulum eleifend. Quisque sapien mauris, facilisis sit amet aliquet a, placerat nec quam. Quisque mattis metus at dolor ornare tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce tincidunt purus erat, sed dictum augue blandit quis. Vestibulum placerat imperdiet tortor vel vestibulum. Proin vitae eros sit amet felis tincidunt vulputate. Nam sodales in dui nec rhoncus. Pellentesque sagittis urna in justo vestibulum iaculis. In facilisis, quam eu finibus sollicitudin, risus neque aliquam lectus, eu ornare augue nisi vel ante. Etiam auctor felis risus, ut tincidunt ipsum mattis eget.', '61000b924bb2d9.88717677.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
