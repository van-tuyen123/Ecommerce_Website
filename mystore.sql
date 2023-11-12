-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 01:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `username`, `admin_email`, `admin_password`) VALUES
(1, 'tuyen123', 'vantuyen@gmail.com', '$2y$10$aFAWdcmILvu9bEsT8xMFXOmnyb1XudC2GDtZRNjQdZJldjq0iSN3u'),
(2, 'vantuyen123', 'tuyen@gmail.com', '$2y$10$idN3IXkniF/YxAq8LOgfhOOk8AcCqEqmVLfHHw.ud/dYOlW/GUGAm'),
(3, 'vantuyen', '123@gmail.com', '$2y$10$Z0NyF/n5yw2jiLjmRdljRuYeWD7M7L9g3xCSYmx//.CKrBMMNSuAK');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, ' Louis Vuitton'),
(2, 'Gucci'),
(3, 'Chanel'),
(4, ' Nike'),
(5, 'Converse'),
(6, 'Adidas');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(2, 'T-Shirt'),
(3, 'Trousers'),
(8, 'Bag'),
(10, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(2, 1, 321002139, 3, 1, 'pending'),
(3, 1, 46219180, 1, 1, 'pending'),
(4, 1, 2072753815, 4, 1, 'pending'),
(5, 1, 1133217607, 3, 2, 'pending'),
(6, 1, 1515916678, 5, 1, 'pending'),
(7, 1, 253912303, 4, 1, 'pending'),
(8, 1, 1651859304, 1, 1, 'pending'),
(9, 1, 1750430588, 3, 1, 'pending'),
(10, 7, 929572935, 4, 1, 'pending'),
(11, 7, 1096461180, 13, 2, 'pending'),
(12, 1, 1935869744, 2, 1, 'pending'),
(13, 1, 1161748613, 1, 1, 'pending'),
(14, 1, 700880283, 14, 2, 'pending'),
(15, 1, 1736601232, 1, 1, 'pending'),
(16, 1, 1118454016, 10, 1, 'pending'),
(17, 1, 1197952093, 17, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(1, 'Áo Gucci', 'Áo thiết kế đẹp đường may tỉ mỉ, chất liệu Cotton ', ', áo, cotton, gucci, ', 2, 2, 'T-shrit-gucci-01.jpg', 'T-shirt-gucci-02.jpg', 'T-shrit-gucci-03.jpg', ' 150', '2023-10-22 16:38:04', 'true'),
(2, 'Giày Nike', 'Mẫu mã đa dạng, đẹp mắt và giá luôn tốt nhất', ', giày, nike, đẹp', 10, 4, 'shoes-nike-01.jpg', 'shoes-nike-02.jpg', 'shoes-nike-03.jpg', ' 200', '2023-10-22 16:27:10', 'true'),
(3, 'Giày Adidas', 'Nhập khẩu Chính Hãng, Giá cực tốt, Mẫu mã độc', ', giày, adidas, dẹp', 10, 6, 'shoes-adidas-01.jpg', 'shoes-adidas-02.jpg', 'shoes-adidas-03.jpg', ' 180', '2023-10-22 16:38:41', 'true'),
(9, 'Áo Nike', 'Sử dụng chất liệu mềm mịn, thoáng khí,', ', áo, nike, mềm', 2, 4, 'T-shirt-nike-01.jpg', 'T-shirt-nike-02.jpg', 'T-shirt-nike-03.jpg', ' 100', '2023-10-21 14:54:20', 'true'),
(10, 'Quần Converse', 'Thun co giãn, phối dây rút dễ dàng ', ', quần, converse, thun', 3, 5, 'trousers-converse-01.jpg', 'trousers-converse-02.jpg', 'trousers-converse-03.jpg', ' 150', '2023-10-21 14:55:35', 'true'),
(11, 'Áo Louis Vuitton', ' Chất đẹp vải cotton co dãn thấm hút mồ hôi tốt', ', áo, louis, cotton', 2, 1, 'T-shirt-Luisonvuiton-01.jpg', 'T-shirt-louisvuitton-02.jpg', 'T-shirt-louisvuitton-03.jpg', ' 300', '2023-10-21 14:57:30', 'true'),
(14, 'Túi Chanel', 'Thương hiệu dành cho giới quý tộc tại Pháp', ', túi, chanel, pháp', 8, 3, 'bag-chanel-01.jpg', 'bag-chanel-02.jpg', 'bag-chanel-03.jpg', ' 400', '2023-10-22 16:39:17', 'true'),
(15, 'Giày Converse', ' Một thương hiệu giày thể thao nổi tiếng của Mỹ', ', giày, converse, mỹ', 10, 5, 'shoes-converse-01.jpg', 'shoes-converse-02.jpg', 'shoes-converse-03.jpg', ' 300', '2023-10-22 16:44:40', 'true'),
(16, 'Túi Gucci', 'Thường có sự kết hợp màu sắc tinh tế và hài hòa', ', túi, gucci, tinh tế', 8, 2, 'bag-gucci-01.jpeg', 'bag-gucci-02.jpeg', 'bag-gucci-03.jpeg', ' 250', '2023-10-22 16:51:47', 'true'),
(17, 'Quần Adidas', ' Mang lại sự thoải mái và độ linh hoạt ', ', quần, adidas, thoải mai', 3, 6, 'trousers-adidas-01.jpg', 'trousers-adidas-02.jpg', 'trousers-adidas-03.jpg', ' 100', '2023-10-22 17:00:13', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(1, 1, 150, 1736601232, 1, '2023-11-06 16:09:20', 'Complete'),
(2, 1, 150, 1118454016, 1, '2023-11-06 16:28:26', 'pending'),
(3, 1, 500, 1197952093, 2, '2023-11-08 13:38:56', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(2, 2, 2072753815, 400, '', '2023-10-09 17:04:29'),
(3, 3, 1133217607, 600, '', '2023-10-09 17:14:36'),
(4, 4, 1515916678, 150, '', '2023-10-09 17:14:40'),
(5, 5, 253912303, 200, '', '2023-10-10 03:25:10'),
(6, 1, 1750430588, 300, '', '2023-10-17 14:48:58'),
(7, 3, 1096461180, 300, '', '2023-10-21 13:35:04'),
(8, 4, 1935869744, 350, '', '2023-10-24 07:32:20'),
(9, 1, 1736601232, 150, '', '2023-11-06 16:09:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'tuyen123', 'nguyenvantuyen3030@gmail.com', '$2y$10$TzDh3i0rq2bGyamJawtKauoSQM5XeEcJ1dEu2/266.U6KTJx4D0Si', 'T-shirt-louisvuitton-02.jpg', '::1', 'Hà Nội', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
