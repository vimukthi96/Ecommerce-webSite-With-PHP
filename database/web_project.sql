-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 05:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web project`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_product_detail`
--

CREATE TABLE `table_product_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `net_tec` varchar(50) NOT NULL,
  `body_dim` varchar(50) NOT NULL,
  `body_weight` varchar(50) NOT NULL,
  `body_build` varchar(50) NOT NULL,
  `body_sim` varchar(50) NOT NULL,
  `plat_os` varchar(50) NOT NULL,
  `plat_chip` varchar(50) NOT NULL,
  `plat_cpu` varchar(50) NOT NULL,
  `plat_gpu` varchar(50) NOT NULL,
  `ty_type` varchar(50) NOT NULL,
  `ty_weight` varchar(50) NOT NULL,
  `ty_build` varchar(50) NOT NULL,
  `ty_sim` varchar(50) NOT NULL,
  `mem_card_slot` varchar(50) NOT NULL,
  `mem_internal` varchar(50) NOT NULL,
  `cam_pri` varchar(50) NOT NULL,
  `cam_feat` varchar(50) NOT NULL,
  `cam_vedio` varchar(50) NOT NULL,
  `cam_sec` varchar(50) NOT NULL,
  `fea_sen` varchar(50) NOT NULL,
  `fea_mass` varchar(50) NOT NULL,
  `fea_brow` varchar(50) NOT NULL,
  `bat_cap` varchar(50) NOT NULL,
  `bat_talk` varchar(50) NOT NULL,
  `bat_mus` varchar(50) NOT NULL,
  `misc_color` varchar(50) NOT NULL,
  `misc_sar` varchar(50) NOT NULL,
  `misc_sareu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_product_detail`
--

INSERT INTO `table_product_detail` (`id`, `name`, `image`, `price`, `net_tec`, `body_dim`, `body_weight`, `body_build`, `body_sim`, `plat_os`, `plat_chip`, `plat_cpu`, `plat_gpu`, `ty_type`, `ty_weight`, `ty_build`, `ty_sim`, `mem_card_slot`, `mem_internal`, `cam_pri`, `cam_feat`, `cam_vedio`, `cam_sec`, `fea_sen`, `fea_mass`, `fea_brow`, `bat_cap`, `bat_talk`, `bat_mus`, `misc_color`, `misc_sar`, `misc_sareu`) VALUES
(1, 'Samsung Galaxy S8-64GB', 'sam_s8.jpg', 89000, 'GSM / HSDPA  / LTE ', '148.9 x 68.1 x 8 mm (5.86 x 2.68 x 0.31 in)', '155 g (5.47 oz)', 'Front/back glass (Gorilla Glass 5), aluminum frame', ' Single SIM (Nano-SIM) or Hybrid Dual SIM', 'Android 7.0 (Nougat), upgradable to Android 8.0 (O', 'Exynos 8895 Octa - EMEA', 'Octa core made by EMEA and USA & China', 'Mali-G71 MP20 - EMEA ;  Adreno 540 - USA & China', 'Super AMOLED capacitive touchscreen, 16M colors', '5.8 inches, 84.8 cm2 (~83.6% screen-to-body ratio)', '1440 x 2960 pixels, 18.5:9 ratio (~570 ppi density', 'Yes', 'microSD, up to 512 GB (uses SIM 2 slot) - dual SIM', '64 GB, 4 GB RAM', '12 MP, f/1.7, 26mm, 1/2.5\", 1.4Âµm, OIS, dual pixe', 'LED flash, auto-HDR, panorama', '2160p@30fps, 1080p@60fps, 720p@240fps, HDR, dual-v', '8 MP, f/1.7, 25mm, 1/3.6\", 1.22Âµm, AF', 'Iris scanner, fingerprint (rear-mounted), accelero', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'Non-removable Li-Ion 3000 mAh battery (11.55 Wh)', 'Up to 20 h (3G)', 'Up to 67 h', 'Midnight Black, Orchid Gray, Arctic Silver, Coral ', '0.44 W/kg (head)     0.75 W/kg (body)  ', '0.32 W/kg (head)     1.27 W/kg (body)     '),
(2, 'Samsung Galaxy J1', 'sam_j1.jpg', 10000, 'GSM/HSPA', '129 x 68.2 x 8.9 mm (5.08 x 2.69 x 0.35 in)', '122 g (4.30 oz) ', 'Plastic body', 'Single SIM (Micro-SIM) or Dual SIM (Micro-SIM, dua', 'Android 4.4.4 (KitKat) ', 'Spreadtrum', 'Dual-core 1.2 GHz Cortex-A7', 'Mali-400', 'TFT capacitive touchscreen, 16M colors ', '4.3 inches, 52.6 cm2 (~59.8% screen-to-body ratio)', '480 x 800 pixels, 5:3 ratio (~217 ppi density) ', 'Yes', 'microSD, up to 256 GB (dedicated slot)', '4 GB, 512 MB RAM', '5 MP, f/2.2, 31mm, AF', 'LED flash', '720p@30fps', '2MP', 'Accelerometer, proximity', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML', 'Removable Li-Ion 1850 mAh battery', 'Up to 10 h (3G)', 'Up to 40 h', 'White, Black, Blue', '0.65 W/kg (head)     0.87 W/kg (body)', '0.57 W/kg (head)     0.77 W/kg (body)     '),
(3, 'samsung galaxy j2-8GB', 'sam_j2.jpg', 14000, 'GSM/HSPA/LTE', '136.5 x 69 x 8.4 mm (5.37 x 2.72 x 0.33 in)', '129 g (4.55 oz) ', 'Plastic body SIM 	', 'Single SIM (Micro-SIM) or Dual SIM (Micro-SIM, dua', 'Android 5.1.1 (Lollipop)', 'Exynos 3475 Quad', 'Quad-core 1.3 GHz Cortex-A7', 'Mali-T720', 'Super AMOLED capacitive touchscreen, 16M colors', '4.7 inches, 60.9 cm2 (~64.7% screen-to-body ratio)', '540 x 960 pixels, 16:9 ratio (~234 ppi density) ', 'Yes', 'microSD, up to 256 GB (dedicated slot) ', '8 GB, 1 GB RAM', '5 MP, f/2.2 , AF', 'LED flash', '720p@30fps', '2MP , f/2.2', 'Accelerometer, proximity', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML', 'Removable Li-Ion 2000 mAh battery', 'Up to 11 h (3G)', 'Up to 41 h', 'White, Black, Gold', '1.18 W/kg (head)     1.27 W/kg (body)    ', '0.57 W/kg (head)     0.45 W/kg (body)     '),
(4, 'Samsung Galaxy J5 Prime', 'sam_j5.jpg', 25000, 'GSM/HSPA/LTE', '142.7 x 69.6 x 8.1 mm (5.62 x 2.74 x 0.32 in)', '-', 'Front glass, aluminum body', 'Dual SIM (Nano-SIM, dual stand-by)', 'Android 7.1.1 (Nougat)', 'Exynos 7570 Quad ', 'Quad-core 1.4 GHz Cortex-A53', 'Mali-T720 MP2  	', 'IPS LCD capacitive touchscreen, 16M colors Size ', '5.0 inches, 68.9 cm2 (~69.4% screen-to-body ratio)', '720 x 1280 pixels, 16:9 ratio (~294 ppi density)', 'Yes', 'microSD, up to 256 GB (dedicated slot', '16/32 GB, 3 GB RAM', '13 MP, f/1.9, 28mm, AF ', 'LED flash, panorama, HDR', '1080p@30fps ', '8 MP, f/2.0', 'Fingerprint (front-mounted), accelerometer, proxim', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'Non-removable Li-Ion 2500 mAh battery', '-', '-', 'Black, Gold', '-', '-'),
(5, 'Samsung Galaxy J7 pro', 'sam_j7.jpg', 50000, 'GSM/HSPA/LTE', '152.5 x 74.8 x 8 mm (6.00 x 2.94 x 0.31 in)', '181 g (6.38 oz)', 'Front glass, aluminum body', 'Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual ', 'Android 7.0 (Nougat)', 'Exynos 7870 Octa - EMEA ', 'Octa-core 1.6 GHz Cortex-A53', 'Mali-T830 MP1', 'Super AMOLED capacitive touchscreen, 16M colors', '5.5 inches, 83.4 cm2 (~73.1% screen-to-body ratio)', '1080 x 1920 pixels, 16:9 ratio (~401 ppi density)', 'Yes', 'microSD, up to 256 GB (dedicated slot)', '32/64 GB, 3 GB RAM', '13 MP, AF, f/1.7', 'LED flash, panorama, HDR', '1080p@30fps', '13 MP, f/1.9      LED flash', 'Fingerprint (front-mounted), accelerometer, gyro, ', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'Non-removable Li-Ion 3600 mAh battery', 'Up to 24 h (3G)', 'Up to 91 h', 'Black, Blue, Gold, Rose Gold', '0.71 W/kg (head) ', '0.57 W/kg (head)     1.33 W/kg (body)     '),
(6, 'Samsung Galaxy S5', 'sam_s5.jpg', 55000, 'GSM/HSPA/LTE', '142 x 72.5 x 8.1 mm (5.59 x 2.85 x 0.32 in)', '145 g (5.11 oz)', 'Plastic body', 'Micro-SIM', 'Android 4.4.2 (KitKat), upgradable to 6.0 (Marshma', 'Qualcomm MSM8974AC Snapdragon 801', 'Quad-core 2.5 GHz Krait 400', 'Adreno 330', 'Super AMOLED capacitive touchscreen, 16M colors', '5.1 inches, 71.7 cm2 (~69.6% screen-to-body ratio)', '1080 x 1920 pixels, 16:9 ratio (~432 ppi density)', 'Yes', 'microSD, up to 256 GB (dedicated slot)', '16/32 GB, 2 GB RAM', '16 MP, f/2.2, 31mm, 1/2.6\", 1.12Âµm, PDAF', 'LED flash, panorama, HDR', '2160p@30fps, 1080p@60fps, 720p@120fps, HDR, dual-v', '2 MP, f/2.4, 22mm', 'Fingerprint (front-mounted), accelerometer, gyro, ', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'Removable Li-Ion 2800 mAh battery', 'Up to 21 h', 'Up to 67 h', 'Charcoal Black, Copper Gold, Electric Blue, Shimme', '1.20 W/kg (head)     1.58 W/kg (body)     ', '0.56 W/kg (head)     0.41 W/kg (body)    '),
(7, 'Apple Iphone 5 -16GB', 'app_i5.jpg', 45000, 'GSM/HSPA/LTE/CDMA', '123.8 x 58.6 x 7.6 mm (4.87 x 2.31 x 0.30 in)', '112 g (3.95 oz)', 'Front glass, aluminum body', 'Nano-SIM', 'iOS 6, upgradable to iOS 10.3.3', 'Apple A6', 'Dual-core 1.3 GHz Swift (ARM v7-based)', 'PowerVR SGX 543MP3 (triple-core graphics)', 'LED-backlit IPS LCD, capacitive touchscreen, 16M c', '4.0 inches, 44.1 cm2 (~60.8% screen-to-body ratio)', '640 x 1136 pixels, 16:9 ratio (~326 ppi density)', 'Yes', 'No', '16/32/64 GB, 1 GB RAM DDR2', '8 MP, f/2.4, 33mm, 1/3.2\", 1.4µm, AF', 'LED flash, panorama, HDR', '1080p@30fps', '1.2 MP, f/2.4, 35mm', 'Accelerometer, gyro, proximity, compass', 'iMessage,SMS(threaded view), MMS,Email', 'HTML5', 'Non-removable Li-Po 1440 mAh battery (5.45 Wh)', 'Up to 8 h (2G) / Up to 8 h (3G)', 'Up to 40 h', 'Black/Slate, White/Silver', '1.18 W/kg (head)     1.18 W/kg (body)     ', '0.95 W/kg (head)     0.90 W/kg (body)     '),
(8, 'Huawei Nova 2', 'hua_nova.jpg', 36000, 'GSM/HSPA/LTE/CDMA', '142.2 x 68.9 x 6.9 mm (5.60 x 2.71 x 0.27 in)', '143 g (5.04 oz)', 'Front glass, aluminum body', 'Single SIM (Nano-SIM) or Hybrid Dual SIM (Nano-SIM', 'Android 7.0 (Nougat)', 'HiSilicon Kirin 659', 'Octa-core (4x2.36 GHz Cortex-A53 & 4x1.7 GHz Corte', 'Mali-T830 MP2', 'LTPS IPS LCD capacitive touchscreen, 16M colors', '5.0 inches, 68.3 cm2 (~69.7% screen-to-body ratio)', '1080 x 1920 pixels, 16:9 ratio (~443 ppi density)', 'Yes', 'microSD, up to 256 GB (uses SIM 2 slot)', '64 GB, 4 GB RAM', '12, f/1.8, 1.25Âµm, PDAF 8 MP', 'LED flash, panorama, HDR', '1080p@30fps', '20MP', 'Fingerprint (rear-mounted), accelerometer, gyro, p', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'Non-removable Li-Po 2950 mAh battery', '-', '-', 'Aurora Blue, Grass Green, Streamer Gold, Obsidian ', '-', '-'),
(9, 'HTC 10', 'htc_10.jpg', 50000, 'GSM/HSPA/LTE', '145.9 x 71.9 x 9 mm (5.74 x 2.83 x 0.35 in)', '161 g (5.68 oz)', 'Front glass, aluminum body', 'Nano-SIM', 'Android 6.0.1 (Marshmallow), upgradable to Android', 'Qualcomm MSM8996 Snapdragon 820', 'Quad-core (2x2.15 GHz Kryo & 2x1.6 GHz Kryo)', 'Adreno 530', 'Super LCD5 capacitive touchscreen, 16M colors', '5.2 inches, 74.5 cm2 (~71.1% screen-to-body ratio)', '1440 x 2560 pixels, 16:9 ratio (~565 ppi density)1', 'Yes', 'microSD, up to 512 GB (dedicated slot)', '32/64 GB, 4 GB RAM', '12 MP, f/1.8, 26mm, 1/2.3\", 1.55Âµm, OIS, laser AF', 'Dual-LED dual-tone flash, HDR, panorama', '2160p@30fps, 720p@120fps, HDR, stereo sound rec.', '5 MP, f/1.8, 23mm, 1.34Âµm, OIS, AF ,HDR', 'Fingerprint (front-mounted), accelerometer, gyro, ', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'Non-removable Li-Ion 3000 mAh battery', 'Up to 27h (3G)', '-', 'Carbon Gray, Topaz Gold, Glacier Silver, Camellia ', '-', '-'),
(10, 'Nokia 6', 'no_6.jpg', 30000, 'GSM/HSPA/LTE', '154 x 75.8 x 7.9 mm (6.06 x 2.98 x 0.31 in)', '169 g (5.96 oz)', 'Front glass, aluminum body', 'Hybrid Dual SIM (Nano-SIM, dual stand-by)', 'Android 7.1.1 (Nougat), upgradable to Android 8.0 ', 'Qualcomm MSM8937 Snapdragon 430', 'Octa-core 1.4 GHz Cortex-A53', 'Adreno 505', 'IPS LCD capacitive touchscreen, 16M colors', '5.5 inches, 82.6 cm2 (~70.7% screen-to-body ratio)', '1080 x 1920 pixels, 16:9 ratio (~403 ppi density)', 'Yes', 'microSD, up to 256 GB (uses SIM 2 slot) ', '32 GB, 3 GB RAM - Matte Black, Tempered Blue, Silv', '16 MP, f/2.0, 1.0Âµm, PDAF', 'Dual-LED dual-tone flash, panorama, HDR', '1080p@30fps', '8 MP, f/2.0, 1.12Âµm, AF', 'Fingerprint (front-mounted), accelerometer, gyro, ', 'SMS(threaded view), MMS, Email, Push Email, IM', 'HTML5', 'Non-removable Li-Ion 3000 mAh battery', 'Up to 18 h (3G)', 'Up to 22h', 'Arte Black, Matte Black, Tempered Blue, Silver, Co', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `name` varchar(30) NOT NULL,
  `passward` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`name`, `passward`) VALUES
('', ''),
('admin', 'admin'),
('admin', 'admin'),
('abc', '1234'),
('rr', ''),
('rfr', '152'),
('', ''),
('', ''),
('', ''),
('fff', '1234'),
('vimukthi', '1230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_product_detail`
--
ALTER TABLE `table_product_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_product_detail`
--
ALTER TABLE `table_product_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
