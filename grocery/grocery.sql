-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 03:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shopname` varchar(400) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` bigint(255) NOT NULL,
  `category` text NOT NULL,
  `units` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `user_id`, `shopname`, `productname`, `productprice`, `category`, `units`, `image`) VALUES
(41, 2, 'fresh products', 'badam', 100, 'nuts', '100g', 'badam.webp'),
(42, 3, 'M store', 'broad beans (avaraikai)', 38, 'pulses', '500g', 'broadbeans-avaraikai.webp'),
(43, 10, 'fresh products', 'seeraga samba', 110, 'rice', '1kg', 'seeragasamba1.png'),
(44, 2, 'fresh products', 'basmati rice', 100, 'rice', '1kg', 'basmati.png'),
(45, 2, 'fresh products', 'chickpeas (green)', 30, 'pulses', '500g', 'chickpeas(green).jpg'),
(46, 3, 'M store', 'coriander  powder (aachi)', 25, 'spices', '100g', 'coriander power aachi.jpg'),
(49, 2, 'fresh products', 'jeera', 29, 'seeds', '100g', 'jeera.webp'),
(50, 3, 'M store', 'coriander seed', 180, 'seeds', '1kg', 'coriander seed.jpg'),
(51, 2, 'fresh products', 'eco fresh salt', 20, 'others', '500g', 'eco fresh salt.webp'),
(52, 10, 'fresh products', 'chilli chicken masala', 15, 'spices', '100g', '50-chilli-chicken-65-masala-pouch-sakthi-powder.webp'),
(53, 2, 'fresh products', 'parachute coconutoil', 140, 'oils', '500l', 'coconut oil 1.jpg'),
(54, 2, 'fresh products', 'sakthi biryani masala', 10, 'spices', '50gm', 'xsakthi-biryani-masala-50-gm-pp-0-20200518-270x270.jpg.pagespeed.ic.EhmtibLJQh.webp'),
(55, 2, 'fresh products', 'winner castor oil', 20, 'oils', '100ml', 'winner castor oil.jpg'),
(56, 2, 'fresh products', 'sakthi chilli chicken masala', 10, 'spices', '50gm', '50-chilli-chicken-65-masala-pouch-sakthi-powder.webp'),
(57, 2, 'fresh products', 'aachi idly chilli powder ', 20, 'spices', '100gm', '100-box-idly-chilli-powder-aachi-powder-original-imaevag6f5vtvb8g.webp'),
(58, 2, 'fresh products', 'aachi garam masala powder', 10, 'spices', '50gm', 'aachi-garam-masala-powder-50-g-product.jpg'),
(59, 2, 'fresh products', 'aashirwad salt ', 20, 'others', '500gm', 'aashirvaad.jpg'),
(60, 2, 'fresh products', 'India Gate Basmathi Rice', 100, 'rice', '1kg', 'basmatirice.webp'),
(61, 2, 'fresh products', 'kadalai paruppu', 100, 'pulses', '1kg', 'bengal-gram(kadalaparupu).jpg'),
(62, 2, 'fresh products', 'Black Kismis', 50, 'seeds', '100g', 'black kismis.jpg'),
(63, 2, 'fresh products', 'Chick peas green', 35, 'seeds', '250gm', 'chickpeas(green).jpg'),
(64, 2, 'fresh products', 'Chick peas White', 25, 'seeds', '250gm', 'chickpeas.jpg'),
(65, 2, 'fresh products', 'Chinni tomato garlic Pickle', 10, 'spices', '1packet', 'chinni pickle.png'),
(66, 2, 'fresh products', 'Coconut oil', 140, 'oils', '500ml', 'coconut oil 3.png'),
(67, 2, 'fresh products', 'Aachi coriander powder', 20, 'spices', '100g', 'coriander power aachi.jpg'),
(68, 2, 'fresh products', 'Coriander seed', 20, 'seeds', '100g', 'coriander seed.jpg'),
(69, 2, 'fresh products', 'Dheepam lamp oil', 100, 'oils', '500ml', 'dheepam lamp oil.jpg'),
(70, 2, 'fresh products', 'Elaichi', 50, 'seeds', '100g', 'elaichi.jpg'),
(71, 2, 'fresh products', 'Fortune Refined Oil', 180, 'oils', '1 L', 'fortune refined.jpg'),
(72, 2, 'fresh products', 'Idhayam Sesame oil', 350, 'oils', '1 L', 'idhayam sesame oil.webp'),
(73, 2, 'fresh products', 'Idly Rice', 35, 'rice', '1 kg', 'idly rice.jpg'),
(74, 2, 'fresh products', 'Idly Kurunai Rice', 28, 'rice', '1kg', 'idly kurunai rice.jpg'),
(75, 2, 'fresh products', 'Jaggery Powder', 35, 'others', '500g', 'jaggery powder.jpg'),
(76, 2, 'fresh products', 'Jeerega Samba Rice', 100, 'rice', '1kg', 'jeeraga samba rice.jpg'),
(77, 2, 'fresh products', 'Karnataka Ponni Rice', 50, 'rice', '1kg', 'karnataka ponni rice.jpeg'),
(78, 2, 'fresh products', 'kismis', 40, 'seeds', '100g', 'kismis.jpg'),
(79, 2, 'fresh products', 'mantra groundnut oil', 100, 'oils', '500 ml', 'mantra groundnut oil.jpg'),
(80, 2, 'fresh products', 'moong dhal', 25, 'pulses', '250gm', 'moong dhal.jpeg'),
(81, 3, 'M store', 'sakthi chilli chicken masala', 9, 'spices', '50gm', '50-chilli-chicken-65-masala-pouch-sakthi-powder.webp'),
(82, 3, 'M store', 'aachi idly chilli powder ', 18, 'spices', '100g', '100-box-idly-chilli-powder-aachi-powder-original-imaevag6f5vtvb8g.webp'),
(83, 3, 'M store', 'aachi garam masala powder', 9, 'spices', '50gm', 'aachi-garam-masala-powder-50-g-product.jpg'),
(84, 3, 'M store', 'aashirwad salt ', 18, 'others', '500g', 'aashirvaad.jpg'),
(85, 3, 'M store', 'kadalai paruppu', 24, 'pulses', '250gm', 'bengal-gram(kadalaparupu).jpg'),
(86, 3, 'M store', 'biriyani rice', 103, 'rice', '1kg', 'biryani-rice.jpg'),
(87, 3, 'M store', 'Black Kismis', 28, 'seeds', '100g', 'black kismis.jpg'),
(88, 3, 'M store', 'everest biriyani masala', 12, 'spices', '50gm', 'briyanimasala.jpg'),
(89, 3, 'M store', 'Chick peas green', 24, 'seeds', '250gm', 'chickpeas(green).jpg'),
(90, 3, 'M store', 'Coconut oil', 150, 'oils', '500ml', 'coconut oil 3.png'),
(91, 3, 'M store', 'Dheepam lamp oil', 110, 'oils', '500ml', 'dheepam lamp oil.jpg'),
(92, 3, 'M store', 'Elaichi', 56, 'seeds', '100g', 'elaichi.jpg'),
(93, 3, 'M store', 'Fortune Refined Oil', 190, 'oils', '1 l', 'fortune refined.jpg'),
(94, 3, 'M store', 'groundnut oil', 200, 'oils', '1 l', 'groundnut oil.jpg'),
(95, 3, 'M store', 'Idhayam Sesame oil', 340, 'oils', '1 l', 'idhayam sesame oil.webp'),
(96, 3, 'M store', 'Idly Rice', 34, 'rice', '1kg', 'idlirice.jpg'),
(97, 3, 'M store', 'kalsar rice', 52, 'rice', '1kg', 'kalsar rice.webp'),
(98, 3, 'M store', 'mr.gold groundnut oil', 210, 'oils', '1 l', 'mr.gold groundnut oil.webp'),
(99, 3, 'M store', 'kalyanaponni', 52, 'rice', '1kg', 'kalyanaponni.jpg'),
(100, 3, 'M store', 'kismis', 26, 'seeds', '50gm', 'kismis.jpg'),
(101, 3, 'M store', 'pepper', 68, 'pulses', '100g', 'pepper.jpg'),
(102, 3, 'M store', 'jaggery powder', 34, 'others', '500g', 'jaggery powder.jpg'),
(103, 3, 'M store', 'pachari rice', 70, 'rice', '1kg', 'pachari rice.jpg'),
(104, 3, 'M store', 'mantra groundnut oil', 210, 'oils', '1 l', 'mantra groundnut oil.jpg'),
(105, 3, 'M store', 'moong dhal', 28, 'pulses', '250gm', 'moong dhal.jpeg'),
(107, 2, 'fresh products', 'pepper', 77, 'spices', '100g', 'pepper.jpg'),
(108, 3, 'M store', 'basmati', 110, 'rice', '1kg', 'basmati.png');

-- --------------------------------------------------------

--
-- Table structure for table `admincontact`
--

CREATE TABLE `admincontact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `shopname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admincontact`
--

INSERT INTO `admincontact` (`id`, `name`, `shopname`, `email`, `message`) VALUES
(2, 'Saranya', 'M store', 'mstore@gmail.com', 'Hiii, this message is from M store');

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `shopname` varchar(300) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`id`, `name`, `shopname`, `contact`, `email`, `password`) VALUES
(2, 'priya', 'fresh products', 9005403030, 'priya@gmail.com', '0b1c8bc395a9588a79cd3c191c22a6b4'),
(3, 'saranya', 'M store', 9302930333, 'mstore@gmail.com', '739f182967c587c266612022316a342e'),
(6, 'admin', 'happy shopping', 9087579694, 'admin@gmail.com', '0e7517141fb53f21ee439b355b5a1d0a');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productprice` varchar(100) NOT NULL,
  `shopname` varchar(400) NOT NULL,
  `quantity` int(100) NOT NULL,
  `units` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `productname`, `productprice`, `shopname`, `quantity`, `units`, `image`) VALUES
(12, 2, 'broad beans (avaraikai) ', '\r\n38 ', 'M store ', 1, '500g ', 'broadbeans-avaraikai.webp'),
(13, 2, 'kadalai paruppu ', '\r\n100 ', 'fresh products ', 2, '1kg ', 'bengal-gram(kadalaparupu).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `shopname` varchar(400) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `shopname`, `email`, `message`) VALUES
(4, 'priya', '', 'priya2001dharshini@gmail.com', 'Hi.I have an query.If there is any cash on delivery option.Thankyou.'),
(6, 'Nagalakshmi', 'M store', 'nami@gmail.com', 'Hii... This message is sent to M store'),
(7, 'admin', 'M store', 'admin@gmail.com', 'Hii, you are wrongly entered the category for chickpeas(green). Kindly change it. Otherwise the product will be removed.'),
(8, 'sridevi', 'Fresh Products', 'sridevi@gmail.com', 'Hii, I have an query. If there is any cash on delivery option.');

-- --------------------------------------------------------

--
-- Table structure for table `customerdetails`
--

CREATE TABLE `customerdetails` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`id`, `user_id`, `firstname`, `lastname`, `contact`, `address`, `status`, `date`) VALUES
(1, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-05-29 05:30:12'),
(2, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-04-10 01:20:30'),
(3, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'delivered', '2022-05-30 12:40:32'),
(4, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 07:51:52'),
(5, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:04:25'),
(6, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:08:28'),
(7, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:09:30'),
(8, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:16:51'),
(9, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:23:24'),
(10, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:26:06'),
(11, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:27:30'),
(12, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:30:25'),
(13, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:33:28'),
(14, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 08:35:56'),
(15, 10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'not delivered', '2022-06-14 11:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `productprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `units` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`id`, `orderid`, `userid`, `productname`, `shopname`, `productprice`, `quantity`, `units`) VALUES
(1, 1, 10, 'broad beans (avaraikai) ', 'M store ', 38, 1, '500g '),
(2, 1, 10, 'Jaggery Powder ', 'fresh products ', 35, 1, '500g '),
(3, 1, 10, 'seeraga samba ', 'fresh products ', 110, 1, '1kg '),
(4, 2, 10, 'broad beans (avaraikai) ', 'M store ', 38, 1, '500g '),
(5, 2, 10, 'Jaggery Powder ', 'fresh products ', 35, 1, '500g '),
(6, 2, 10, 'seeraga samba ', 'fresh products ', 110, 1, '1kg '),
(7, 2, 10, 'India Gate Basmathi Rice ', 'fresh products ', 100, 1, '1kg '),
(8, 2, 10, 'Jeerega Samba Rice ', 'fresh products ', 100, 1, '1kg '),
(9, 3, 10, 'seeraga samba ', 'fresh products ', 110, 1, '1kg '),
(10, 3, 10, 'India Gate Basmathi Rice ', 'fresh products ', 100, 1, '1kg '),
(11, 3, 10, 'coriander  powder (aachi) ', 'M store ', 25, 1, '100g '),
(12, 4, 10, 'broad beans (avaraikai) ', 'M store ', 38, 2, '500g '),
(13, 4, 10, 'pepper ', 'M store ', 68, 3, '100g '),
(14, 5, 10, 'pepper ', 'M store ', 68, 3, '100g ');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(11) NOT NULL,
  `orderid` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(400) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `shopname` varchar(400) NOT NULL,
  `productprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `units` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`id`, `orderid`, `user_id`, `name`, `contact`, `address`, `productname`, `shopname`, `productprice`, `quantity`, `units`, `image`) VALUES
(30, 31, 10, 'nagalakshmi N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'coriander  powder (aachi) ', 'M store ', 25, 1, '100g ', 'coriander power aachi.jpg'),
(31, 28, 11, 'keerthi K', 9053940303, '12,oomachikulam, k k street,madurai', 'broad beans (avaraikai) ', 'M store ', 38, 2, '500g ', 'broadbeans-avaraikai.webp'),
(36, 34, 10, 'nagalakshmi N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'coriander  powder (aachi) ', 'M store ', 25, 1, '100g ', 'coriander power aachi.jpg'),
(38, 48, 13, 'sri devi', 9405938200, '10,sourashtra puram 2nd street, vandiyur, madurai', 'aashirwad salt  ', 'M store ', 18, 1, '500g ', 'aashirvaad.jpg'),
(39, 49, 13, 'sri devi', 9405938200, '10,sourashtra puram 2nd street, vandiyur, madurai', 'coriander  powder (aachi) ', 'M store ', 25, 1, '100g ', 'coriander power aachi.jpg'),
(56, 14, 10, '', 0, '', 'kadalai paruppu ', 'fresh products ', 100, 1, '1kg ', 'bengal-gram(kadalaparupu).jpg'),
(58, 16, 10, '', 0, '', 'pepper ', 'M store ', 68, 2, '100g ', 'pepper.jpg'),
(59, 17, 10, '', 0, '', 'chickpeas (green) ', 'fresh products ', 30, 1, '500g ', 'chickpeas(green).jpg'),
(60, 18, 10, 'nagalakshmi N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'kadalai paruppu ', 'fresh products ', 100, 1, '1kg ', 'bengal-gram(kadalaparupu).jpg'),
(62, 20, 10, 'nagalakshmi N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'kadalai paruppu ', 'M store ', 24, 1, '250gm ', 'bengal-gram(kadalaparupu).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(30) NOT NULL,
  `U_Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `U_Password`) VALUES
('abc@gmail.com', 'e456'),
('sdfsadfd@gmail.com', '778798nk'),
('xyz@gmail.com', '1234'),
('cve@gmail.com', '9087'),
('ZD@gmail.com', '678'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `myorders`
--

CREATE TABLE `myorders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `orderid` int(100) NOT NULL,
  `productname` text NOT NULL,
  `shopname` varchar(200) NOT NULL,
  `productprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `units` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myorders`
--

INSERT INTO `myorders` (`id`, `user_id`, `orderid`, `productname`, `shopname`, `productprice`, `quantity`, `units`, `image`, `status`) VALUES
(12, 5, 25, 'broad beans (avaraikai) ', 'M store ', 38, 1, '500', 'broadbeans-avaraikai.webp', 'delivered'),
(13, 5, 26, 'badam ', 'fresh products ', 49, 1, '100', 'badam.webp', 'delivered'),
(14, 5, 27, 'seeraga samba ', 'fresh products ', 110, 1, '1', 'seeragasamba1.png', 'delivered'),
(15, 5, 25, 'broad beans (avaraikai) ', 'M store ', 38, 1, '500', 'broadbeans-avaraikai.webp', 'delivered'),
(16, 5, 26, 'badam ', 'fresh products ', 49, 1, '100', 'badam.webp', 'delivered'),
(17, 5, 27, 'seeraga samba ', 'fresh products ', 110, 1, '1', 'seeragasamba1.png', 'delivered'),
(18, 10, 20, 'badam ', 'fresh products ', 49, 2, '100g ', 'badam.webp', 'delivered'),
(19, 10, 21, 'broad beans (avaraikai) ', 'M store ', 38, 4, '500g ', 'broadbeans-avaraikai.webp', 'delivered'),
(20, 10, 24, 'seeraga samba ', 'fresh products ', 110, 1, '1kg ', 'seeragasamba1.png', 'delivered'),
(21, 10, 31, 'coriander  powder (aachi) ', 'M store ', 25, 1, '100g ', 'coriander power aachi.jpg', 'Not Delivered'),
(22, 11, 28, 'broad beans (avaraikai) ', 'M store ', 38, 2, '500g ', 'broadbeans-avaraikai.webp', 'Not Delivered'),
(23, 11, 29, 'chickpeas (green) ', 'fresh products ', 30, 1, '500g ', 'chickpeas(green).jpg', 'delivered'),
(24, 11, 30, 'basmati rice ', 'fresh products ', 100, 1, '1kg ', 'basmati.png', 'delivered'),
(25, 10, 32, 'chickpeas (green) ', 'fresh products ', 30, 3, '500g ', 'chickpeas(green).jpg', 'delivered'),
(26, 10, 33, 'jeera ', 'fresh products ', 29, 2, '100g ', 'jeera.webp', 'delivered'),
(27, 10, 34, 'coriander  powder (aachi) ', 'M store ', 25, 1, '100g ', 'coriander power aachi.jpg', 'Not Delivered'),
(28, 11, 47, 'basmati rice ', 'fresh products ', 100, 1, '1kg ', 'basmati.png', 'delivered'),
(29, 13, 48, 'aashirwad salt  ', 'M store ', 18, 1, '500g ', 'aashirvaad.jpg', 'Not Delivered'),
(30, 13, 49, 'coriander  powder (aachi) ', 'M store ', 25, 1, '100g ', 'coriander power aachi.jpg', 'Not Delivered'),
(31, 13, 50, 'badam ', 'fresh products ', 100, 1, '100g ', 'badam.webp', 'delivered'),
(32, 2, 53, 'chilli chicken masala ', 'fresh products ', 15, 1, '100g ', '50-chilli-chicken-65-masala-pouch-sakthi-powder.webp', 'delivered'),
(33, 2, 54, 'sakthi biryani masala ', 'fresh products ', 10, 1, '50gm ', 'xsakthi-biryani-masala-50-gm-pp-0-20200518-270x270.jpg.pagespeed.ic.EhmtibLJQh.webp', 'delivered'),
(34, 2, 55, 'Jaggery Powder ', 'fresh products ', 35, 1, '500g ', 'jaggery powder.jpg', 'delivered'),
(35, 11, 56, 'chilli chicken masala ', 'fresh products ', 15, 1, '100g ', '50-chilli-chicken-65-masala-pouch-sakthi-powder.webp', 'delivered'),
(36, 10, 10, 'Black Kismis ', 'fresh products ', 50, 1, '100g ', 'black kismis.jpg', 'delivered'),
(37, 10, 10, 'broad beans (avaraikai) ', 'M store ', 38, 1, '500g ', 'broadbeans-avaraikai.webp', 'delivered'),
(38, 10, 10, 'kadalai paruppu ', 'fresh products ', 100, 1, '1kg ', 'bengal-gram(kadalaparupu).jpg', 'delivered'),
(39, 10, 10, 'chilli chicken masala ', 'fresh products ', 15, 1, '100g ', '50-chilli-chicken-65-masala-pouch-sakthi-powder.webp', 'delivered'),
(40, 10, 10, 'broad beans (avaraikai) ', 'M store ', 38, 1, '500g ', 'broadbeans-avaraikai.webp', 'delivered'),
(41, 10, 10, 'Jaggery Powder ', 'fresh products ', 35, 1, '500g ', 'jaggery powder.jpg', 'delivered'),
(42, 10, 10, 'broad beans (avaraikai) ', 'M store ', 38, 4, '500g ', 'broadbeans-avaraikai.webp', 'delivered'),
(43, 10, 10, 'basmati rice ', 'fresh products ', 100, 4, '1kg ', 'basmati.png', 'delivered'),
(44, 10, 10, 'chickpeas (green) ', 'fresh products ', 30, 1, ' 500g ', ' chickpeas(green).jpg', 'delivered'),
(45, 10, 10, 'coriander seed ', 'M store ', 180, 1, ' 1kg ', ' coriander seed.jpg', 'delivered'),
(46, 10, 11, 'chickpeas (green) ', 'fresh products ', 30, 1, '500g ', 'chickpeas(green).jpg', 'delivered'),
(47, 10, 14, 'kadalai paruppu ', 'fresh products ', 100, 1, '1kg ', 'bengal-gram(kadalaparupu).jpg', 'Not Delivered'),
(48, 10, 15, 'chickpeas (green) ', 'fresh products ', 30, 1, '500g ', 'chickpeas(green).jpg', 'delivered'),
(49, 10, 16, 'pepper ', 'M store ', 68, 2, '100g ', 'pepper.jpg', 'Not Delivered'),
(50, 10, 17, 'chickpeas (green) ', 'fresh products ', 30, 1, '500g ', 'chickpeas(green).jpg', 'Not Delivered'),
(51, 10, 18, 'kadalai paruppu ', 'fresh products ', 100, 1, '1kg ', 'bengal-gram(kadalaparupu).jpg', 'Not Delivered'),
(52, 10, 19, 'badam ', 'fresh products ', 100, 1, '100g ', 'badam.webp', 'delivered'),
(53, 10, 20, 'kadalai paruppu ', 'M store ', 24, 1, '250gm ', 'bengal-gram(kadalaparupu).jpg', 'Not Delivered'),
(54, 10, 21, 'pepper ', 'M store ', 68, 1, '100g ', 'pepper.jpg', 'delivered'),
(55, 10, 22, 'moong dhal ', 'M store ', 28, 1, '250gm ', 'moong dhal.jpeg', 'delivered'),
(56, 10, 26, 'broad beans (avaraikai) ', 'M store ', 38, 1, '500g ', 'broadbeans-avaraikai.webp', 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `contact`, `address`, `email`, `password`) VALUES
(1, 'priya', 'dharshini', 9320439393, '13/9,villapuram,madurai', 'priya2001dharshini@gmail.com', '1298'),
(2, 'sri', 'devi', 9302395020, '10,vandiyur,madurai', 'sri@gmail.com', '9087'),
(5, 'roshini', 'P B', 9038294039, '10,balaji colony,nilayur', 'roshini@gmail.com', 'f687fe897fc054dc035fc96b74489e35'),
(6, 'devi', 'sri', 8883616916, '102,teachers colony,anupanadi', 'devisri@gmail.com', 'devisri'),
(7, 'roshini', 'devi', 8883616916, '10,vandiyur,madurai', 'devi@gmail.com', '123456'),
(8, 'sri', 'dharshini', 9548403949, '2,villapuram', 'sri1@gmail.com', '1234'),
(9, 'devi', 'g g', 9049395030, '2,anupanadi', 'devisri.1@gmail.com', '6cdef80e5641445e7831'),
(10, 'nagalakshmi', 'N', 8493010393, '10,Marudupandiyar street,anna nagar,madurai', 'nami@gmail.com', 'ec58ea913ffd7baf46267557c8b5a493'),
(11, 'keerthi', 'K', 9053940303, '12,oomachikulam, k k street,madurai', 'keerthi@gmail.com', '579096fea2b56d2a9897ea15e3971a08'),
(12, 'devi', 'sri', 9039203929, '12,anupanadi,madurai', 'devi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'sri', 'devi', 9405938200, '10,sourashtra puram 2nd street, vandiyur, madurai', 'sridevi@gmail.com', '7f5fd00b39a0a0b7ec944a4017ddcf18');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `userid`, `orderid`, `status`) VALUES
(1, 10, 1, 'not delivered'),
(2, 10, 2, 'not delivered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admincontact`
--
ALTER TABLE `admincontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdetails`
--
ALTER TABLE `customerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myorders`
--
ALTER TABLE `myorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `admincontact`
--
ALTER TABLE `admincontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customerdetails`
--
ALTER TABLE `customerdetails`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `myorders`
--
ALTER TABLE `myorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
