-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 12, 2024 at 09:50 PM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u257513287_qqs_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passw` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `passw`) VALUES
(1, 'support@cargo-freightairs.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `sendersname` varchar(100) NOT NULL,
  `sendersemail` varchar(100) NOT NULL,
  `recieversname` varchar(100) NOT NULL,
  `recieversemail` varchar(100) NOT NULL,
  `recievers_phone` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `pickup_location` varchar(100) NOT NULL,
  `deliverylocation` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `percentage` varchar(100) NOT NULL,
  `trackingid` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `total_freight` varchar(200) NOT NULL,
  `pickup_date` varchar(200) NOT NULL,
  `carrier` varchar(200) NOT NULL,
  `shipment_mode` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `type_shipment` varchar(200) NOT NULL,
  `package_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `sendersname`, `sendersemail`, `recieversname`, `recieversemail`, `recievers_phone`, `weight`, `pickup_location`, `deliverylocation`, `date`, `percentage`, `trackingid`, `product_name`, `total_freight`, `pickup_date`, `carrier`, `shipment_mode`, `qty`, `status`, `type_shipment`, `package_type`) VALUES
(55, 'WHOLESALE  iSTORE Shanghai', 'lokshao239@gmail.com', 'Khan Zain', 'kzain2098@gmail.com', '+923368979053', '2.4 kg', 'China, Shanghai, Fengxian District, 986 Caichang Road, ', 'shahfaisal saima luxury homes R - 321 karachi, Pakistan ', '2023-10-23', '70', 'DNYG0ZC7IL', 'iPhone', '2.4 kg', '2023-10-20', '', 'Land shipping ', '', 'Held', 'Land', 'Box'),
(56, 'Elon Musk', 'elonreeve075@gmail.com', 'Janet Tucker', 'Jmcminingsl@gmail.com', '+ 23278792375', '54 kg', 'Los Angeles ', '3 Thomas drive hillstation Freetown Sierra leone West África ', '2023-11-09', '0', 'M3QPKR4I8U', 'iPhone & Bag ', '54 kg', '2023-10-29', '', 'Shipping by land', '', '', 'Land ', 'iPhone & Bag'),
(57, 'FXTM', 'support@fxtm-capitaltrade.com', ' Abdul Razak Allapitchay', 'zack1206@gmail.com', '+65 90148603', '7.4kg', 'USA Los Angeles ', 'Blk 61 New Upper Changi Road #03-1206 Singapore 461061', '2023-11-23', '70', 'OBR5WFIZEG', 'Box', '1', '2023-11-08', 'QUANTUMQUIKSHIP', 'Land Shipping', '', '', 'Land', 'Box'),
(58, 'FXTM ', 'support@fxtm-capitaltrade.com', 'Birdie Curtis ', 'annfx21@gmail.com', '+12424226274', '6 kg', 'USA Los Angeles ', '#9 Desmond Lane (Close), Bacardi Road', '2023-11-16', '80', 'ZFR2CP7I8K', 'Box', '1', '2023-11-06', 'QUANTOM QUICKSHIP', 'Land shipping ', '', '70', 'Land', 'Box '),
(59, 'Elon Musk', 'elonreeve075@gmail.com', ' Micah onyango okumu', 'micahokumuonyango@gmail.com', '+254 704869393', '1600 kg', 'Los Angeles ', 'Nairobi kenya Ngong town.', '2023-11-13', '0', 'WVGH7PXE2N', 'Tesla Car /Box', '2', '2023-11-06', 'QUANTUM QUIKSHIP', 'Land shipping ', '', '', 'Land ', 'Car/Box '),
(60, 'Cindy Prado', 'Undisclosed ', 'Jim Lundstorm ', 'Insteon.jl@gmail.com', 'Undisclosed', '15', 'Florida ', '1319 Angelo Ave.   Castleton , New York  12033', '2023-11-12', '10', 'PZXED1O492', 'A box ', '1', '2023-11-06', 'quantum quik ship', 'Air', '1 box ', 'Preparing for shipping ', 'Air', 'A box'),
(61, 'Taylor Kinney', 'Taylorkinny56@gmail.com', 'Tonia Mae Fain', 'toniafain@yahoo.com', '+1 816-351-8214', '4.5 kg ', 'Canada ', 'USA Missouri 2517 Seneca st 64507', '2023-11-18', '0', 'U9KPN5RYHM', 'Fan Card/Bag', '1', '2023-11-06', '1', 'Land shipping ', '', '', 'Land ', 'Box'),
(62, 'FXPRO TRADING OPTIONS', 'fxprotrade@gmail.com', 'Jamie Marie Calhoun', 'Jamie.calhoun90@gmail.com', '+1 985-285-8470', '7.4kg', 'Canada', '4137 Upperline St  Slidell, La 70461 USA', '2023-12-14', '', 'VTPRN2G6QU', 'Bag', '1', '2023-12-11', 'QUANTOMQUIKSHIP', 'Land', '', '', 'Land Shipping', 'Box'),
(63, 'Christain Chainz', 'Chriatianchainz@gmail.com', 'สุชีพ ภูมินนท์', 'suchip356030@gmail.com', '+66 0935091148', '10.4kg', 'USA ', 'บ้าเลขที่1 หมู่6 ต.เวียง อ.เทิงจ.เชียงราย รหัสไปรษณีย์57160', '2023-12-27', '', 'ESW01XFLAO', 'Bag', '1', '2023-12-21', 'Quantum quikship ', 'Shipping by Land', '', '', 'Land shipping ', 'Box'),
(65, 'Taylor Kinney ', 'taylorkinney6@gmail.com ', 'Cindy Byerly', 'cindy_byerly@yahoo.com', '281-770-3620', '0.5kg', 'USA', '1611 Beachcomber Houston Texas', '2024-01-23', '', 'IOSY9JNBG4', 'Card & Cheque', '1', '2024-01-18', 'QUANTUM QUIKSHIP ', 'Land shipping', '', '', 'Land', ''),
(66, 'Kim Jong', 'Kingjong@gmail.com', 'Ahmad Farid', 'faridsedeqi42@gmail.com', '0000000000', 'Classified ', 'Taiwan ', 'Kabul, Afghanistan ', '2024-01-25', '0', 'YVMC7OXSGE', 'Classified', 'Classified', '2024-01-23', 'Classified', 'Classified', '1', 'In process ', 'Classified ', 'Classified'),
(68, 'Mr Chen ', 'Chen23@gmail.com ', '王秀芹', '…', '13591948290', '10.87', 'Iraq', '辽宁省朝阳市双塔区南大街32号楼6单元701室', '2024-02-02', '55', 'EJU6D21K7W', 'Classified ', 'Classified ', '2024-01-30', '', 'Air ', '1', 'With held in Afghanistan ', 'Classified ', 'Classified '),
(70, 'Olivia Charlotte ', 'Oliviacharlotte@gmail.com', ' Josefina Salazar  Correo', 'azocarsalazarmarianis@gmail.com', '0412 8912482', '2.1kg', 'U.S.A. Miami Florida', 'Direccion El Dorado Edo Bolivar', '2024-02-16', '', 'P6IV94RFTB', 'Box', '1', '2024-02-12', '', 'Shipping by land ', '', '', 'Land shipping ', 'Profit'),
(72, 'Martins Ariel', 'martinsariel@gmail.com', 'Swastika Devi', 'mailto:swastikaprasad161@gmail.com', '+6799674087', '7.4kg', 'USA', 'Golf Link Cres Rifle Range Lautoka Lautoka, Western Division', '2024-03-14', '', '6NG24JTXPY', 'Profit', '1', '2024-03-11', 'Quantum quikship ', 'Shipping by land ', '', '', 'Land shipping ', 'Box'),
(73, 'Elon Musk', 'Elonmusk6@gmail.com', 'Patrick James Ford', 'pf6072959@gmail.com', '+1 562-607-2956', '2240kg', 'USA', '5404 nectar ave Hemet California 92544 USA ', '2024-04-20', '', '7PZJG9IV63', 'Tesla', '1', '2024-04-11', 'Quantum quikship', 'Land shipping ', '', '', 'Land ', 'Car'),
(76, 'Elon Musk', 'Elonmusk@gmail.com', 'Henk', 'hegro@telfort.nl', '+31 647005850', '2,250kg', 'USA ', 'Wolfraam 5, 3894DS zeewolde.', '2024-04-30', '', 'G73S6LMDFZ', 'Tesla', '1', '2024-04-12', 'Quantum Quikship', 'Land shipping ', '', '', 'Land', 'Car'),
(77, 'Zhang Cheng', '…', '吴友珍', '..', '15623299387', '4', 'Israel ', '湖北省属孝感市汉川市马口镇纺织路16号新老楼26一1一201', '2024-04-23', '68', '0298VJRAEQ', '分类', '分类', '2024-04-19', '分类', '🚢', '1', '您的包裹已被越南海关扣留，请立即联系本公司', '分类', '分类'),
(79, 'Chen ', '…', 'Cao Baoling', '…', '13784969804', '15', 'Iraq ', 'Changguo Village, Gaoyang, Baoding, Hebei', '2024-05-15', '35', '6D9GYK0PZW', 'Classified ', 'Classified ', '2024-05-10', 'Classified', 'Classified', '1', 'Arrived Afghanistan 🇦🇫 ', 'Classified ', 'Classified');

-- --------------------------------------------------------

--
-- Table structure for table `packageupdate`
--

CREATE TABLE `packageupdate` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `note` varchar(13000) NOT NULL,
  `typenow` varchar(200) NOT NULL,
  `trackingid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packageupdate`
--

INSERT INTO `packageupdate` (`id`, `date`, `note`, `typenow`, `trackingid`) VALUES
(76, '2023-09-28', 'We are delighted to inform you that your package is now prepared and ready for shipping. Your order [Order Number] has been carefully processed, packed, and is all set to make its way to your doorstep', 'InTransist', '07EQ5S26H4'),
(80, '2023-09-23', 'We hope this message finds you well. We regret to inform you that there has been a development regarding your recent shipment, [Order Number]. The package has been temporarily held by customs officers for inspection and clearance.', 'Held', '07EQ5S26H4'),
(81, '0000-00-00', '89', '', 'PCBT8KVQ6X'),
(82, '0000-00-00', 'We are writing to inform you that your recent shipment of goods has encountered a delay due to customs processing. The package is currently being held by customs authorities for inspection and clearance.', 'Held', '0GWM2HCXJ1'),
(83, '2023-09-24', 'We are pleased to inform you that your goods, which were held by customs for inspection and clearance, have been successfully released. The inspection process is now complete, and we are excited to resume the shipping process to ensure your package reaches you as soon as possible.', 'InTransist', '0GWM2HCXJ1'),
(84, '2023-09-27', 'We are pleased to inform you that your goods, which were held by customs for inspection and clearance, have been successfully released. The inspection process is now complete, and we are excited to resume the shipping process to ensure your package reaches you as soon as possible.', 'InTransist', '0GWM2HCXJ1'),
(85, '2023-10-27', 'We are pleased to inform you that your goods, which were held by customs for inspection and clearance, have been successfully released. The inspection process is now complete, and we are excited to resume the shipping process to ensure your package reaches you as soon as possible.', 'Held', '0GWM2HCXJ1'),
(86, '2023-09-29', 'We are pleased to inform you that your goods, which were held by customs for inspection and clearance, have been successfully released. The inspection process is now complete, and we are excited to resume the shipping process to ensure your package reaches you as soon as possible.', 'Delivered', '0GWM2HCXJ1'),
(87, '2023-09-28', 'Package held by customs ', 'Held', '0GWM2HCXJ1'),
(88, '2023-11-18', 'Package is 20min into being delivered to the delivery address ', 'InTransist', 'FND1VB9UH5'),
(89, '0000-00-00', '89', '', 'PCBT8KVQ6X'),
(90, '0000-00-00', '', 'Held', 'BYUX35QJKR'),
(91, '0000-00-00', '', 'Held', 'BYUX35QJKR'),
(92, '2023-10-09', 'Held ', 'Held', 'BYUX35QJKR'),
(93, '2023-10-09', 'Held ', 'Held', 'BYUX35QJKR'),
(94, '2023-10-09', '', 'Held', 'BV0MTSCHGZ'),
(95, '2023-10-09', '', 'Held', 'BV0MTSCHGZ'),
(96, '2023-10-09', '', 'Held', 'BV0MTSCHGZ'),
(97, '0000-00-00', '', 'Held', 'BV0MTSCHGZ'),
(98, '0000-00-00', '', 'Held', '278BN3HXO5'),
(99, '2023-10-10', 'Held ', 'Held', '278BN3HXO5'),
(100, '2023-10-11', '', 'InTransist', 'LJD3RFXZYV'),
(101, '2023-10-11', 'Ready to move ', 'InTransist', 'HZB90UXQCE'),
(102, '2023-10-11', 'Ready to move ', 'InTransist', 'HZB90UXQCE'),
(103, '2023-10-12', 'Arriving ', 'InTransist', 'HZB90UXQCE'),
(104, '2023-10-12', 'Arriving ', 'InTransist', 'LJD3RFXZYV'),
(105, '2023-10-24', 'I hope this message finds you well. We regret to inform you that your package has been temporarily held due to unforeseen circumstances. Our team is working diligently to resolve the issue and expedite the delivery process. We apologize for any inconvenience this may cause and appreciate your understanding. We will keep you updated on the status of your package.', 'Held', '09PCAOVJUM'),
(106, '2023-10-26', 'We are pleased to inform you that your package is now ready to ship again. The previous delay has been resolved, and we are committed to ensuring a swift and secure delivery of your goods. Thank you for your patience, and we appreciate your continued trust in our services.', 'InTransist', '09PCAOVJUM'),
(107, '2023-10-22', 'Package held by customs ', 'Held', 'DNYG0ZC7IL'),
(108, '2023-12-01', '', 'InTransist', 'ZFR2CP7I8K'),
(114, '2023-12-05', 'This package has been held by custom', 'Held', 'ZFR2CP7I8K'),
(115, '0000-00-00', '', 'Delivered', 'ESW01XFLAO'),
(116, '0000-00-00', '', 'Delivered', 'ESW01XFLAO'),
(117, '0000-00-00', '', 'Delivered', 'ESW01XFLAO'),
(118, '0000-00-00', '', 'Delivered', 'ESW01XFLAO'),
(119, '0000-00-00', '', 'InTransist', 'OBR5WFIZEG'),
(120, '0000-00-00', '', 'InTransist', 'OBR5WFIZEG'),
(121, '0000-00-00', '', 'Delivered', 'EDLMNOV7SQ'),
(122, '0000-00-00', '', 'Held', 'OBR5WFIZEG'),
(123, '2024-02-02', '', 'Held', 'OBR5WFIZEG'),
(124, '2024-02-02', '', 'Held', 'OBR5WFIZEG'),
(125, '2024-02-02', '', 'Held', 'OBR5WFIZEG');

-- --------------------------------------------------------

--
-- Table structure for table `websetting`
--

CREATE TABLE `websetting` (
  `id` int(11) NOT NULL,
  `btcadd` varchar(200) NOT NULL,
  `ethadd` varchar(200) NOT NULL,
  `usdtadd` varchar(200) NOT NULL,
  `btcqr` varchar(200) NOT NULL,
  `ethqr` varchar(200) NOT NULL,
  `usdtqr` varchar(200) NOT NULL,
  `paypal` varchar(100) NOT NULL,
  `cashapp` varchar(100) NOT NULL,
  `zelle` varchar(100) NOT NULL,
  `bnbqr` varchar(200) NOT NULL,
  `btcx` varchar(100) NOT NULL,
  `ethx` varchar(100) NOT NULL,
  `usdtx` varchar(100) NOT NULL,
  `kycfee` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `websetting`
--

INSERT INTO `websetting` (`id`, `btcadd`, `ethadd`, `usdtadd`, `btcqr`, `ethqr`, `usdtqr`, `paypal`, `cashapp`, `zelle`, `bnbqr`, `btcx`, `ethx`, `usdtx`, `kycfee`) VALUES
(1, '12345', '12345', '12345', 'de3af892952a6007873f656b5cdba512.png', 'bf59ffbdf73d4634ec9f38f6327625aa.png', '9250821f8168c5dffe6a89a0d3a3765b.png', '12345paypal', '12345cashapp', '12345zelle', '6c6a83c173d96ca345263a47d5db14d7.jpeg', '29,609.70', '1,843.28', '308.61', '2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packageupdate`
--
ALTER TABLE `packageupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websetting`
--
ALTER TABLE `websetting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `packageupdate`
--
ALTER TABLE `packageupdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `websetting`
--
ALTER TABLE `websetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
