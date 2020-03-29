-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "booking" --------------------------------------
CREATE TABLE `booking`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`customer_name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`phone_number` VarChar( 10 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`chekin_date` Timestamp NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
	`checkout_date` Timestamp NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
	`adults` Int( 10 ) NOT NULL,
	`children` Int( 10 ) NOT NULL,
	`room_types` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`messages` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	`created_date` Timestamp NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
	`checkd_in` Timestamp NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
	`checkd_in_date` Timestamp NOT NULL DEFAULT 'CURRENT_TIMESTAMP(6)',
	`reply_by` Int( 11 ) NOT NULL,
	`reply_messages` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "contacts" -------------------------------------
CREATE TABLE `contacts`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`phone_number` VarChar( 10 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`subject` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`messages` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	`reply_by` Int( 11 ) NULL,
	`reply_for` Int( 11 ) NULL,
	`created_at` Timestamp NULL DEFAULT CURRENT_TIMESTAMP,
	`reply_messages` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 6;
-- -------------------------------------------------------------


-- CREATE TABLE "customer_feedbacks" ---------------------------
CREATE TABLE `customer_feedbacks`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`address` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`avatar` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`content` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "galleries" ------------------------------------
CREATE TABLE `galleries`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`setting_id` Int( 11 ) NOT NULL,
	`status` Int( 1 ) NOT NULL,
	`img_path` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "news" -----------------------------------------
CREATE TABLE `news`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`title` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`feature_image` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`content` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`views` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
	`author_id` Int( 11 ) NOT NULL,
	`created_at` Timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------


-- CREATE TABLE "roles" ----------------------------------------
CREATE TABLE `roles`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 4;
-- -------------------------------------------------------------


-- CREATE TABLE "room_galleries" -------------------------------
CREATE TABLE `room_galleries`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`room_id` Int( 11 ) NOT NULL,
	`img_url` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "room_service_xref" ----------------------------
CREATE TABLE `room_service_xref`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`room_id` Int( 11 ) NOT NULL,
	`services_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "room_services" --------------------------------
CREATE TABLE `room_services`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "room_types" -----------------------------------
CREATE TABLE `room_types`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	`price` Int( 10 ) NOT NULL,
	`about` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`quantity` Int( 10 ) NOT NULL,
	`feature_img` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`short_desc` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "services" -------------------------------------
CREATE TABLE `services`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`feature_img` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`introduce` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`role_id` Int( 11 ) NOT NULL,
	`phone_number` VarChar( 10 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL,
	`avatar` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 9;
-- -------------------------------------------------------------


-- CREATE TABLE "web_setting" ----------------------------------
CREATE TABLE `web_setting`( 
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	`name` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`status` Int( 1 ) NOT NULL,
	`logo` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`phone_number` VarChar( 10 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`address` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`email` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`map_url` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`youtube_url` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`facebook_url` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`background_img` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`overview_img` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`introduce_content` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`intro_welcome` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`intro_service` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`intro_client_feedback` Text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
	`news_id` Int( 11 ) NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_unicode_ci
ENGINE = InnoDB
AUTO_INCREMENT = 1;
-- -------------------------------------------------------------


-- Dump data of "booking" ----------------------------------
-- ---------------------------------------------------------


-- Dump data of "contacts" ---------------------------------
INSERT INTO `contacts`(`id`,`name`,`phone_number`,`email`,`subject`,`messages`,`status`,`reply_by`,`reply_for`,`created_at`,`reply_messages`) VALUES 
( '1', 'customer1', '0868456456', 'customer1@gmail.com', 'Phản hồi vu vơ 1', 'Nội dung 1', '1', '1', '1', '2020-03-26 21:02:23', 'Nội dung phản hồi customer 1' ),
( '2', 'customer2', '0123456789', 'customer2@gmail.com', 'Phản hồi vu vơ 2', 'Nội dung phản hồi vu vơ 2', '1', '1', '2', '2020-03-26 21:02:16', 'Nội dung phản hồi khách hàng 2' ),
( '3', 'customer 3', '0987654311', 'customer3@gmail.com', 'Phản ánh vu vơ', 'Nội dung phản ảnh vu vơ', '0', NULL, NULL, '2020-03-26 08:58:18', NULL ),
( '4', 'customer 4', '0123456789', 'customer4@gmail.com', 'Phản hồi vu vơ 2', 'Nội dung demo', '0', NULL, NULL, '2020-03-26 12:30:19', NULL ),
( '5', 'customer 5', '0934934892', 'customer5@gmail.com', 'Phan Hoi Vu vo 5', 'Noi DUng Phan Hoi Vu vo 5', '0', NULL, NULL, '2020-03-25 11:04:02', NULL );
-- ---------------------------------------------------------


-- Dump data of "customer_feedbacks" -----------------------
-- ---------------------------------------------------------


-- Dump data of "galleries" --------------------------------
-- ---------------------------------------------------------


-- Dump data of "news" -------------------------------------
INSERT INTO `news`(`id`,`title`,`feature_image`,`content`,`views`,`author_id`,`created_at`) VALUES 
( '1', 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube', 'public/img/5e7ed12a3182b-df91f064e30c428fa67f3528e5600c35.1000x1000x1.jpg', 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube
Bài hát Love The Way You Lie - Skylar G được phát trên youtube', '1', '1', '2003-07-20 10:16:00' ),
( '2', 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube', 'public/img/5e7edbf035ba0-df91f064e30c428fa67f3528e5600c35.1000x1000x1.jpg', 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube', '0', '1', '2020-03-28 12:10:54' ),
( '3', 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube', 'public/img/5e7edc76104b1-df91f064e30c428fa67f3528e5600c35.1000x1000x1.jpg', 'Bài hát Love The Way You Lie - Skylar G được phát trên youtube', '0', '1', '2020-03-28 12:11:18' );
-- ---------------------------------------------------------


-- Dump data of "roles" ------------------------------------
INSERT INTO `roles`(`id`,`name`,`status`) VALUES 
( '1', 'Customer - User', '1' ),
( '2', 'Staff - Admin', '1' ),
( '3', 'Manager - Super Admin', '2' );
-- ---------------------------------------------------------


-- Dump data of "room_galleries" ---------------------------
-- ---------------------------------------------------------


-- Dump data of "room_service_xref" ------------------------
-- ---------------------------------------------------------


-- Dump data of "room_services" ----------------------------
-- ---------------------------------------------------------


-- Dump data of "room_types" -------------------------------
-- ---------------------------------------------------------


-- Dump data of "services" ---------------------------------
-- ---------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`name`,`password`,`email`,`role_id`,`phone_number`,`avatar`) VALUES 
( '1', 'QuAn Nguyen', '$2y$10$kCP.861/vA5.Nzuc8Mhft.8hp9ymkDnB8JhJFNlUg68wL56bs6Lo6', 'helgrindxxx@gmail.com', '3', '914946200', 'public/img/5e773a07d6076-avartar.png' ),
( '2', 'Harry', '$2y$10$kCP.861/vA5.Nzuc8Mhft.8hp9ymkDnB8JhJFNlUg68wL56bs6Lo6', 'harry@gmail.com', '2', '0987654321', 'public/img/5e773982aa40f-about-us-staff-six.jpg' ),
( '3', 'Maria', '$2y$10$kCP.861/vA5.Nzuc8Mhft.8hp9ymkDnB8JhJFNlUg68wL56bs6Lo6', 'maria@gmail.com', '1', '0123456789', 'public/img/5e7ed0ca73014-about-us-staff-seven.jpg' ),
( '4', 'Khách Hàng 1', '$2y$10$bUauX78vPaPIXNCeosVy1.oKLg7gOiZe9bccEcvFv/v6Armygztr6', 'khachhang1@gmail.com', '1', '', 'public/img/default-image.jpg' ),
( '5', 'Khách Hàng 2', '$2y$10$A.G.dDw8JLSwfiKd7r4WGeyORA22wGJ4Y5jM7pWjNPCyq3SWaz88a', 'khachhang2@gmail.com', '1', '', 'public/img/default-image.jpg' ),
( '7', 'Khách Hàng 3', '$2y$10$SKyi7QiAeGaUeMVpb.l0kOckTAF8SGNVBZ/lqSlfbyWCRfBXWd56.', 'khachhang3@gmail.com', '1', '', 'public/img/default-image.jpg' ),
( '8', 'NGuyen tu Bien', '$2y$10$/HYvfMuOIpD2MIvFyZ/Fnul8cvPWonxdrj2RwU9bAZL1sufuqo3Dy', 'bien@gmail.com', '1', '', 'public/img/default-image.jpg' );
-- ---------------------------------------------------------


-- Dump data of "web_setting" ------------------------------
-- ---------------------------------------------------------


-- CREATE INDEX "role_id" --------------------------------------
CREATE INDEX `role_id` USING BTREE ON `users`( `role_id` );
-- -------------------------------------------------------------


-- CREATE LINK "users_ibfk_1" ----------------------------------
ALTER TABLE `users`
	ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY ( `role_id` )
	REFERENCES `roles`( `id` )
	ON DELETE Restrict
	ON UPDATE Restrict;
-- -------------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


