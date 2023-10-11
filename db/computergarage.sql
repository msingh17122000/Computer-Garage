-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computergarage`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartID` int(100) NOT NULL,
  `ProductID` int(100) NOT NULL,
  `ProdPic` varchar(500) NOT NULL,
  `ProdName` varchar(500) NOT NULL,
  `Rate` float NOT NULL,
  `Qty` int(100) NOT NULL,
  `TotalCost` float NOT NULL,
  `UserName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartID`, `ProductID`, `ProdPic`, `ProdName`, `Rate`, `Qty`, `TotalCost`, `UserName`) VALUES
(33, 2024, '1658330049na-gaming-laptop-hp-original-imag7a7fgvrae7uu.webp', 'HP HP Pavilion Ryzen 5 Hexa Core 4600H', 53214, 1, 53214, 'xyz@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `managecat`
--

CREATE TABLE `managecat` (
  `catid` int(11) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `catpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managecat`
--

INSERT INTO `managecat` (`catid`, `catname`, `catpic`) VALUES
(18, 'Desktop', '1658055149pngwing.com(7).png'),
(19, 'Laptops', '1658217219pngfind.com-laptop-png-602361.png'),
(20, 'Keyboard', '16582172968-pc-keyboard-png-image.png'),
(21, 'Mouse', '1658226270computer_mouse_PNG7683.png'),
(22, 'Speakers', '1658229913audio_speakers_PNG11130.png');

-- --------------------------------------------------------

--
-- Table structure for table `manageproduct`
--

CREATE TABLE `manageproduct` (
  `CatID` int(100) NOT NULL,
  `SubcatID` int(100) NOT NULL,
  `ProductID` int(100) NOT NULL,
  `ProductName` varchar(500) NOT NULL,
  `Rate` int(100) NOT NULL,
  `Discount` int(100) NOT NULL,
  `Description` text NOT NULL,
  `Stock` int(100) NOT NULL,
  `ProductPic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageproduct`
--

INSERT INTO `manageproduct` (`CatID`, `SubcatID`, `ProductID`, `ProductName`, `Rate`, `Discount`, `Description`, `Stock`, `ProductPic`) VALUES
(18, 15, 2009, 'ASUS Core i5-11400F', 52000, 42, 'Experience luxury without any apprehension with the Strix G10CE which boasts a stylish design and promising performance. With just 27 litres, the Strix G10CE crams essential components into a compact design that takes up less space on or under your desk. Additionally, it boasts an 11th Gen Intel Core CPU and powerful NVIDIA GeForce graphics that help in experiencing immersive gameplay. (8 GB RAM/NVIDIA GeForce GTX1650 Graphics/1 TB Hard Disk/512 GB SSD Capacity/Windows 10 Home (64-bit)/4 GB Graphics Memory) Gaming Tower  (G10CE-51140F283T)', 19, '1658228903-original-imagcxd2pbujqqjr.webp'),
(18, 15, 2011, 'MSI Core i7 11Gen (11700F) ', 195000, 40, 'MSI Core i7 11Gen (11700F) (16 GB RAM/Nvidia GeForce RTX 3060 VENTUS Graphics/1 TB Hard Disk/1 TB SSD Capacity/Windows 11 Home (64-bit)/12 GB Graphics Memory) Gaming Tower  (MPG Trident A 11TC-2292IN-B71170F3061216G)\r\n    Processor Type: Intel 4.9 GHz\r\n    12 GB Nvidia GeForce RTX 3060 VENTUS Graphics\r\n    Octa Core Gaming Tower\r\n    16 GB DDR4 RAM\r\n    Hard Disk Capacity: 1 TB\r\n    SSD Capacity: 1 TB', 8, '1658296880-original-imagamagsbrkjnma.webp'),
(18, 16, 2012, 'APPLE All-in-One Core i5 (6th Gen)', 188900, 4, 'APPLE All-in-One Core i5 (6th Gen) (8 GB DDR3/2 TB/Mac OS X Lion/2 GB/27 Inch Screen/MK482HN/A)  (Silver)', 54, '1658312010apple-imac-original-imaejxpjgm4xrtym.webp'),
(18, 16, 2013, 'APPLE 2021 iMac with 4.5K Retina display M1 ', 139900, 7, 'APPLE 2021 iMac with 4.5K Retina display M1 (8 GB Unified/256 GB SSD/Mac OS Big Sur/24 Inch Screen/MGPH3HN/A)  (Green, 461 mm x 547 mm x 130 mm, 4.48 kg)\r\n    Mac OS Big Sur\r\n    Apple M1\r\n    RAM 8 GB Unified\r\n    24 inch Display', 2, '1658313299mgph3hn-a-apple-original-imag3d5ttap34g3m.webp'),
(18, 16, 2014, 'APPLE 2021 iMac with 4.5K Retina display M1 ', 139900, 7, 'APPLE 2021 iMac with 4.5K Retina display M1 (8 GB Unified/256 GB SSD/Mac OS Big Sur/24 Inch Screen/MGPM3HN/A)  (Pink, 461 mm x 547 mm x 130 mm, 4.48 kg)\r\n    Mac OS Big Sur\r\n    Apple M1\r\n    RAM 8 GB Unified\r\n    24 inch Display', 2, '1658313425mjva3hn-a-apple-original-imag3d5tvzyza8cv.webp'),
(18, 16, 2015, 'APPLE iMac Core i5 (7th Gen) ', 190400, 7, 'APPLE iMac Core i5 (7th Gen) (8 GB DDR4/1 TB/Mac OS X Sierra/8 GB/27 Inch Screen/MNED2HN/A)  (White, 516 mm x 650 mm x 203 mm, 9.44 kg)    Mac OS X Sierra\r\n    Intel Core i5 (7th Gen)\r\n    HDD Capacity 1 TB\r\n    RAM 8 GB DDR4\r\n    27 inch Display', 0, '1658313534apple-mned2hn-a-original-imaevdwvynk7vmdc.webp'),
(18, 16, 2016, 'APPLE 2021 iMac with 4.5K Retina display M1', 139900, 9, 'APPLE 2021 iMac with 4.5K Retina display M1 (8 GB Unified/256 GB SSD/Mac OS Big Sur/24 Inch Screen/MGPC3HN/A)  (Silver, 461 mm x 547 mm x 130 mm, 4.48 kg)\r\n    Mac OS Big Sur\r\n    Apple M1\r\n    RAM 8 GB Unified\r\n    24 inch Display', 7, '1658313667mgtf3hn-a-apple-original-imag3d5thhhfgtyg.webp'),
(18, 15, 2018, 'ASUS Ryzen 7-3700X', 177990, 27, 'ASUS Ryzen 7-3700X (8 GB RAM/NVIDIA GeForce RTX 2060S Graphics/1 TB Hard Disk/512 GB SSD Capacity/Windows 10 Home (64-bit)/8 GB Graphics Memory) Gaming Tower  (G35DX-IN035T)\r\n    Processor Type: AMD 3.6 GHz\r\n    8 GB NVIDIA GeForce RTX 2060S Graphics\r\n    Octa Core Gaming Tower\r\n    8 GB DDR4 RAM\r\n    Hard Disk Capacity: 1 TB\r\n    SSD Capacity: 512 GB', 47, '1658327840g35dx-in045t-asus-original-imag4xyybm7smhde.webp'),
(18, 15, 2019, 'ASUS Ryzen 7 5800X ', 292990, 40, 'ASUS Ryzen 7 5800X (16 GB RAM/NVIDIA GeForce RTX3070 Graphics/1 TB Hard Disk/1 TB SSD Capacity/Windows 10 Home (64-bit)/8 GB Graphics Memory) Gaming Tower  (G15DK-R5800X298T)\r\n    Processor Type: AMD 3.8 Ghz\r\n    8 GB NVIDIA GeForce RTX3070 Graphics\r\n    Octa Core Gaming Tower\r\n    16 GB DDR4 RAM\r\n    Hard Disk Capacity: 1 TB\r\n    SSD Capacity: 1 TB', 3, '1658327996-original-imagcxd2f8sdbmwn.webp'),
(18, 15, 2020, 'HP Core i7', 146195, 0, 'HP Core i7 (16 GB RAM/NVIDIA GeForce RTX 3060 Ti Graphics/1 TB Hard Disk/1 TB SSD Capacity/Windows 11 Home (64-bit)/8 GB Graphics Memory) Gaming Tower  (TG01-2005in)\r\n    Processor Type: Intel 2.5 GHz\r\n    8 GB NVIDIA GeForce RTX 3060 Ti Graphics\r\n    Octa Core Gaming Tower\r\n    16 GB DDR4 RAM\r\n    Hard Disk Capacity: 1 TB\r\n    SSD Capacity: 1 TB', 18, '16583281272-5-tg01-2005in-1-hp-original-imag8vyayr5dkeda.webp'),
(18, 18, 2021, 'Lenovo 23.8 inch Full HD (D24-20)', 15790, 46, 'Lenovo 23.8 inch Full HD VA Panel 3-Side Near Edgeless with TUV Eye Care Monitor (D24-20)  (Response Time: 4 ms, 60 Hz Refresh Rate)\r\n    Panel Type: VA Panel\r\n    Screen Resolution Type: Full HD\r\n    Response Time: 4 ms | Refresh Rate: 60 Hz', 45, '1659009080d24-20-66aekac1in-lenovo-original-imag2qwzazcdmqtb.webp'),
(18, 18, 2022, 'SAMSUNG 24 inch Full HD (LF24T350FHWXXL)', 19100, 42, 'SAMSUNG 24 inch Full HD LED Backlit IPS Panel with 3-Sided Borderless Display, Game & Free Sync Mode, Eye Saver Mode & Flicker Free Monitor (LF24T350FHWXXL)  (AMD Free Sync, Response Time: 5 ms, 75 Hz Refresh Rate)\r\n    Panel Type: IPS Panel\r\n    Screen Resolution Type: Full HD\r\n    Brightness: 250 nits\r\n    Response Time: 5 ms | Refresh Rate: 75 Hz\r\n    HDMI Ports - 1', 6, '1658329327-original-imagg897ufhyvwqq.webp'),
(18, 18, 2023, 'Acer ED320QR Full HD', 29000, 36, 'Acer ED320QR Full HD VA Panel LED Curved Gaming Monitor with 165Hz Refresh Rate AMD Free Sync and 2 X HDMI 1 X Display Port (Black, 31.5 Inch, 1920 x 1080 Pixels) ', 3, '165832954371xD9dtfhjL._SL1500_.jpg'),
(19, 17, 2024, 'HP HP Pavilion Ryzen 5 Hexa Core 4600H', 76020, 30, 'HP HP Pavilion Ryzen 5 Hexa Core 4600H - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650Ti/144 Hz) 15-ec1025AX Gaming Laptop  (15.6 inch, Shadow Black, 1.98 kg)\r\n    NVIDIA GeForce GTX 1650Ti\r\n    15.6 inch Full HD IPS Micro-Edge Anti-Glare Display (250 nits Brightness, 141 PPI, 45% NTSC Color Gamut)\r\n    Light Laptop without Optical Disk Drive\r\n    Pre-installed Genuine Windows 10 OS', 1, '1658330049na-gaming-laptop-hp-original-imag7a7fgvrae7uu.webp'),
(19, 17, 2025, 'acer Aspire 7 Ryzen 5 Hexa Core 5500U', 89999, 38, 'acer Aspire 7 Ryzen 5 Hexa Core 5500U - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) A715-42G Gaming Laptop  (15.6 inch, Black, 2.15 kg)\r\n    NVIDIA GeForce GTX 1650\r\n    15.6 inch Full HD LED Backlit IPS ComfyView Display (16:9 Aspect Ratio, 45% NTSC Color Gamut)\r\n    Light Laptop without Optical Disk Drive\r\n    Pre-installed Genuine Windows 10 OS', 4, '1658330177na-gaming-laptop-acer-original-imagyhwfgwhkf3vv.webp'),
(19, 17, 2026, 'MSI GF63 Thin Core i7 10th Gen', 95990, 23, 'MSI GF63 Thin Core i7 10th Gen - (16 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce RTX 3050/144 Hz) GF63 Thin 10UC-606IN Gaming Laptop  (15.6 inch, Black, 1.86 kg)', 5, '1658330258gf63-thin-10uc-606in-gaming-laptop-msi-original-imag6xfufgkdahu8.webp'),
(19, 17, 2027, 'Lenovo IdeaPad Gaming Core i5 11th Gen', 76890, 33, 'Lenovo IdeaPad Gaming Core i5 11th Gen - (8 GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA GeForce GTX 1650) 15IHU6 Gaming Laptop  (15.6 Inch, Shadow Black, 2.25 kg)\r\n    NVIDIA GeForce GTX 1650\r\n    15.6 Inch Full HD IPS 250nits Anti-glare, 60Hz, 45% NTSC, DC dimmer\r\n    Light Laptop without Optical Disk Drive', 5, '1658330324na-gaming-laptop-lenovo-original-imag5ve3jvhgvsnx.webp'),
(19, 17, 2028, 'ASUS ROG Strix G15 Ryzen 7 Octa Core 4800H', 76990, 1, 'ASUS ROG Strix G15 Ryzen 7 Octa Core 4800H - (8 GB/512 GB SSD/Windows 10 Home/4 GB Graphics/NVIDIA GeForce GTX 1650/144 Hz) G513IH-HN086T Gaming Laptop  (15.6 inch, Eclipse Gray, 2.10 Kg)\r\n    NVIDIA GeForce GTX 1650\r\n    15.6 inch Full HD Anti-glare Display (16:9, 170 Viewing Angle, Value IPS-level Panel, 250nits Brightness, 1:1000 Contrast, 45% NTSC, 62.5% SRGB, 47.34% Adobe)\r\n    Light Laptop without Optical Disk Drive\r\n    Pre-installed Genuine Windows 10 OS', 0, '1658330388-original-imagewgtfgzf8fdd.webp'),
(19, 19, 2029, 'MICROSOFT Surface Laptop 3 Core i5 10th Gen', 104999, 4, 'MICROSOFT Surface Laptop 3 Core i5 10th Gen - (8 GB/128 GB SSD/Windows 10 Home) 1867 Laptop  (13 inch, Platinum, 1.27 kg)\r\n    Pre-installed Genuine Windows 10 OS\r\n    Light Laptop without Optical Disk Drive\r\n    13 inch Full HD+ LED Backlit PixelSense with 10 Point Multi-touch Display (3:2 Aspect Ratio, Surface Pen Enabled)', 9, '1658330749microsoft-original-imafr9qywz88mrfz.webp'),
(19, 19, 2030, 'MICROSOFT Surface Laptop 3 Ryzen 5 Quad Core 3580U', 124999, 20, 'MICROSOFT Surface Laptop 3 Ryzen 5 Quad Core 3580U - (8 GB/128 GB SSD/Windows 10 Home) 1873 Laptop  (15 inch, Platinum, 1.54 kg)\r\n    Pre-installed Genuine Windows 10 OS\r\n    Light Laptop without Optical Disk Drive\r\n    15 inch Quad HD+ LED Backlit PixelSense with 10 Point Multi-touch Display (3:2 Aspect Ratio, Surface Pen Enabled)', 4, '1658330833microsoft-original-imafr9qyecvfeyta.webp'),
(19, 20, 2031, 'APPLE 2020 Macbook Air M1', 117900, 10, 'APPLE 2020 Macbook Air M1 - (8 GB/512 GB SSD/Mac OS Big Sur) MGN73HN/A  (13.3 inch, Space Grey, 1.29 kg)\r\n    Stylish & Portable Thin and Light Laptop\r\n    13.3 inch Quad LED Backlit IPS Display (227 PPI, 400 nits Brightness, Wide Colour (P3), True Tone Technology)\r\n    Light Laptop without Optical Disk Drive', 14, '1658661651apple-original-imafxfyqkdfxqjab.webp'),
(19, 20, 2032, 'APPLE MacBook Pro with Touch Bar Core i5 10th Gen', 194900, 6, 'APPLE MacBook Pro with Touch Bar Core i5 10th Gen - (16 GB/1 TB SSD/Mac OS Catalina) MWP52HN/A  (13 inch, Space Grey, 1.4 kg)\r\n    Stylish & Portable Thin and Light Laptop\r\n    13 inch Full HD+ LED Backlit IPS Retina Display (227 PPI, 500 nits Brightness, Wide Color (P3), True Tone Technology)\r\n    Light Laptop without Optical Disk Drive', 5, '1658661803apple-na-thin-and-light-laptop-original-imafs5nmg3kxcqnz.webp'),
(19, 20, 2033, 'APPLE 2021 Macbook Pro M1 Max ', 329900, 7, 'APPLE 2021 Macbook Pro M1 Max - (32 GB/1 TB SSD/Mac OS Monterey) MK1A3HN/A  (16.2 inch, Space Grey�, 2.2 kg)\r\n    Light Laptop without Optical Disk Drive\r\n    16.2 inch Liquid Retina XDR display, Native resolution at 254 pixels per inch, Up to 1,000 nits sustained (full-screen) brightness, 1,600 nits peak brightness, 10,00,000:1 contrast ratio', 2, '1658662433mk183hn-a-laptop-apple-original-imag7yzkbgbwvwq3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `SrNo` int(10) NOT NULL,
  `ProductID` int(10) NOT NULL,
  `ProdPic` varchar(100) NOT NULL,
  `ProdName` varchar(500) NOT NULL,
  `Rate` float NOT NULL,
  `Qty` int(10) NOT NULL,
  `TotalCost` float NOT NULL,
  `OrderNo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderproducts`
--

INSERT INTO `orderproducts` (`SrNo`, `ProductID`, `ProdPic`, `ProdName`, `Rate`, `Qty`, `TotalCost`, `OrderNo`) VALUES
(15, 2020, '16583281272-5-tg01-2005in-1-hp-original-imag8vyayr5dkeda.webp', 'HP Core i7', 146195, 1, 146195, 2011),
(16, 2029, '1658330749microsoft-original-imafr9qywz88mrfz.webp', 'MICROSOFT Surface Laptop 3 Core i5 10th Gen', 100799, 1, 100799, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `OrderID` int(100) NOT NULL,
  `ShippingAddress` varchar(100) NOT NULL,
  `PaymentMethod` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `OrderDate` datetime NOT NULL,
  `BillAmount` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`OrderID`, `ShippingAddress`, `PaymentMethod`, `Username`, `OrderDate`, `BillAmount`, `Status`) VALUES
(2011, 'new state', 'Cash on Delivery', 'xyz@gmail.com', '2022-07-28 06:28:25', 146195, 'Order Placed'),
(2012, 'im rich', 'Cash on Delivery', 'xyz@gmail.com', '2022-07-28 06:30:01', 100799, 'Order Placed');

-- --------------------------------------------------------

--
-- Table structure for table `signup_page`
--

CREATE TABLE `signup_page` (
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Phone Number` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_page`
--

INSERT INTO `signup_page` (`Name`, `Username`, `Phone Number`, `Password`, `Usertype`) VALUES
('manav', 'manav@gmail.com', '456123849', '456', 'normal'),
('Manpreet Singh', 'manpreet@gmail.com', '7009895964', '000', 'admin'),
('Rohit', 'rohit@gmail.com', '123456985', '156', 'normal'),
('sarbjot', 'sarbjot@gmail.com', '15665165', '123', 'normal'),
('sooraj', 'sooraj@gmail.com', '1265496', '123', 'normal'),
('xyz', 'xyz@gmail.com', '4614656', '123', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `SubCatID` int(100) NOT NULL,
  `CatID` int(100) NOT NULL,
  `SubcatName` varchar(500) NOT NULL,
  `SubCatPic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`SubCatID`, `CatID`, `SubcatName`, `SubCatPic`) VALUES
(15, 18, 'Gaming PC', '1658055820pngwing.com(8).png'),
(16, 18, 'Apple-iMac', '1658328631apple-imac-24-inch-2021-mediumlogo.png'),
(17, 19, 'Gaming Laptops', '1658329923pngkey.com-laptop-frame-png-9433041.png'),
(18, 18, 'Monitors', '1658328738pngkey.com-computer-screen-png-82207.png'),
(19, 19, 'Microsoft Surface', '1658330615kindpng_3368709.png'),
(20, 19, 'MacBook', '1658661500pngfind.com-macbook-pro-png-383908.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartID`);

--
-- Indexes for table `managecat`
--
ALTER TABLE `managecat`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `manageproduct`
--
ALTER TABLE `manageproduct`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `signup_page`
--
ALTER TABLE `signup_page`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Phone Number` (`Phone Number`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`SubCatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `CartID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `managecat`
--
ALTER TABLE `managecat`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `manageproduct`
--
ALTER TABLE `manageproduct`
  MODIFY `ProductID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2034;

--
-- AUTO_INCREMENT for table `orderproducts`
--
ALTER TABLE `orderproducts`
  MODIFY `SrNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `OrderID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2013;

--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `SubCatID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
