-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 10:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking-hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chekin_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `checkout_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `adults` int(10) NOT NULL,
  `children` int(10) NOT NULL,
  `room_types` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `messages` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `checkd_in` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `checkd_in_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `reply_by` int(11) NOT NULL,
  `reply_messages` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `messages` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `reply_for` int(11) DEFAULT NULL,
  `reply_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone_number`, `email`, `subject`, `messages`, `status`, `reply_for`, `reply_by`, `created_at`) VALUES
(1, 'customer1', '0987654321', 'customer1@gmail.com', 'Phản hồi vu vơ 1', 'Nội dung phản hồi vu vơ 1', 1, 0, 0, '2020-03-24 06:45:51'),
(2, 'customer2', '0123456789', 'customer2@gmail.com', 'Phản hồi vu vơ 2', 'Nội dung phản hồi vu vơ 2', 0, 0, 0, '2020-03-24 06:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedbacks`
--

CREATE TABLE `customer_feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `setting_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `img_path` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `feature_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `feature_image`, `content`, `author_id`, `created_at`) VALUES
(1, 'Nhân tố enzym', 'public/img/5e7dbf6dac5b1-cS-25.jpg', 'Nhân tố Enzyme - Cuốn sách mang đến cho bạn đọc những phương pháp sống lâu, khỏe mạnh từ việc không tiêu tốn hết \"enzyme diệu kỳ\". Tác phẩm Nhân tố Enzyme của tác giả Hiromi Shinya. Bên cạnh đó, Nhân tố Enzyme khiến bạn phải giật mình khi nhận ra những suy nghĩ được cho là tốt với sức khỏe lại chứa nhiều yếu tố gây hại trong cơ thể.', 1, '2020-03-27 14:52:24.000000'),
(2, 'Nhân Tố Enzyme - Trọn bộ 4 quyển', 'public/img/5e7dcda72068f-adcf0ad981ffbfecee8fd50069e4b711.jpg', 'Nhân tố Enzyme - Nhân Tố Enzyme (Trọn Bộ 4 Cuốn)\r\n\r\nTừ kết quả lâm sàng khi tiến hành kiểm tra dạ dày của hơn 300.000 người, bác sĩ Hiromi Shinya đã rút ra kết luận: “Người có sức khỏe tốt là người có dạ dày đẹp, ngược lại, người có sức khỏe kém là người có dạ dày không đẹp.”\r\n\r\nÔng thường ví tình trạng của dạ dày, đường ruột là “vị tướng” và “tràng tướng” như người ta hay gọi “nhân tướng” vậy. Người có vị tướng và tràng tướng tốt thì cơ thể và tâm trí của người đấy cũng khỏe mạnh. Ngược lại, người có vị tướng và tràng tướng xấu tức là trong cơ thể, tâm trí của anh ta đang có vấn đề ở chỗ nào đó. Nói tóm lại, vị tướng và tràng tướng của người có sức khỏe tốt thường rất tốt còn vị tướng, tràng tướng của người có sức khỏe kém thường xấu. Hay nói ngược lại, nếu giữ được vị tướng và tràng tướng tốt cũng đồng nghĩa với giữ được sức khỏe tốt. Và yếu tố ảnh hưởng lớn nhất đến vị tướng và tràng tướng chính là thói quen ăn uống cũng như thói quen sinh hoạt hàng ngày.\r\n\r\nKhi khám bệnh, ông thường yêu cầu các bệnh nhân trả lời vào phiếu điều tra về thói quen ăn uống, sinh hoạt của họ. Và kết quả nhận thấy những đặc điểm hết sức rõ ràng trong thói quen ăn uống, sinh hoạt của những người có vị tướng, tràng tướng tốt và những người có vị tướng, tràng tướng xấu.\r\n\r\nTrong cuốn sách này, Hiromi Shinya sẽ giới thiệu với các bạn về phương pháp sống lâu và khỏe mạnh mà ông đã dày công nghiên cứu cùng với sự trợ giúp của đông đảo các bệnh nhân của ông.\r\n\r\nVậy, làm thế nào để có thể sống lâu và khỏe mạnh? Nếu nói ngắn gọn trong một câu thôi thì đó là sống mà không tiêu tốn hết “enzyme diệu kỳ”.\r\n\r\nCó lẽ sẽ có nhiều người thắc mắc về cụm từ “enzyme diệu kỳ”. Nói một cách đơn giản, “enzyme diệu kỳ” là enzyme nguyên mẫu của hơn 5.000 loại enzyme trong cơ thể, đảm nhiệm các hoạt động duy trì sự sống của con người.  Các ezyme cần thiết này hình thành ngay trong tế bào của cơ thể sống và chúng ta còn có thể tự tổng hợp enzyme qua các bữa ăn hàng ngày.\r\n\r\nVậy điều khiến chúng ta tiêu tốn enzyme diệu kỳ, làm thế nào để để bổ sung enzyme diệu kỳ hãy cùng tìm hiểu trong cuốn sách Nhân tố Ezyme này nhé', 1, '2020-03-27 07:52:29.346945'),
(3, 'Nhân tố enzym', 'public/img/5e7d8846bee28-error_bg.jpg', 'Nhân tố Enzyme -', 1, '2020-03-27 07:52:37.000000'),
(4, 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube', 'public/img/5e7dbbb4e1ba2-cS-45.jpg', 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube\r\nBài hát Love The Way You Lie - Skylar G được phát trên youtube\r\nBài hát Love The Way You Lie - Skylar G được phát trên youtube\r\nBài hát Love The Way You Lie - Skylar G được phát trên youtube\r\nBài hát Love The Way You Lie - Skylar G được phát trên youtubeBài hát Love The Way You Lie - Skylar G được phát trên youtubeBài hát Love The Way You Lie - Skylar G được phát trên youtubeBài hát Love The Way You Lie - Skylar G được phát trên youtube', 1, '2020-03-27 08:39:42.000000');

-- --------------------------------------------------------

--
-- Table structure for table `new_categories`
--

CREATE TABLE `new_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro_content` text COLLATE utf8_unicode_ci NOT NULL,
  `allow_content` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `status`) VALUES
(1, 'Customer - User', 1),
(2, 'Staff - Admin', 1),
(3, 'Manager - Super Admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `room_galleries`
--

CREATE TABLE `room_galleries` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_services`
--

CREATE TABLE `room_services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_service_xref`
--

CREATE TABLE `room_service_xref` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `services_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `price` int(10) NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `feature_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `feature_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduce` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role_id`, `phone_number`, `avatar`) VALUES
(1, 'QuAn Nguyen', '123456', 'helgrindxxx@gmail.com', 3, '914946200', 'avartar.png'),
(2, 'Minh', '123123', 'minh@gmail.com', 2, '122345656', 'public/img/5e7d86ca67b9c-avatar_image.png'),
(3, 'customer1', '$2y$10$TgV5FDfaX0o49P/0L2n1S.cKyWffcqUnTuw6gPO3Xm27EsLORBNI6', 'customer1@gmail.com', 1, '0987654321', 'public/img/5e7d86de56546-5e773982aa40f-about-us-staff-six.jpg'),
(4, 'customer2', '$2y$10$l2IsNCp/BjmXBmIc4PpRSeunTB6BTnrl6rhBLZBFOgiZNmCSJyajW', 'customer2@gmail.com', 1, '0987654311', 'public/img/5e7d86e924b13-about-us-staff-one.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE `web_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `map_url` text COLLATE utf8_unicode_ci NOT NULL,
  `youtube_url` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_url` text COLLATE utf8_unicode_ci NOT NULL,
  `background_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `overview_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduce_content` text COLLATE utf8_unicode_ci NOT NULL,
  `intro_welcome` text COLLATE utf8_unicode_ci NOT NULL,
  `intro_service` text COLLATE utf8_unicode_ci NOT NULL,
  `intro_client_feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `discovery_cate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_feedbacks`
--
ALTER TABLE `customer_feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_categories`
--
ALTER TABLE `new_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_galleries`
--
ALTER TABLE `room_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_services`
--
ALTER TABLE `room_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_service_xref`
--
ALTER TABLE `room_service_xref`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `web_setting`
--
ALTER TABLE `web_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_feedbacks`
--
ALTER TABLE `customer_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_categories`
--
ALTER TABLE `new_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_galleries`
--
ALTER TABLE `room_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_services`
--
ALTER TABLE `room_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_service_xref`
--
ALTER TABLE `room_service_xref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_setting`
--
ALTER TABLE `web_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
