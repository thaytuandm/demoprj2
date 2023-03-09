CREATE DATABASE `sample-plus`;

USE `sample-plus`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tiêu đề',
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mô tả',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'User Name',
  `fullname` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Họ và tên',
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Email',
  `phone` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Số điện thoại',
  `address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Địa chỉ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `posts` ADD PRIMARY KEY (`id`);
ALTER TABLE `posts` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `users` ADD PRIMARY KEY (`id`);
ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

INSERT INTO `posts` (`title`, `description`) VALUES
('Tiêu đề sample', 'Mô tả sample');

INSERT INTO `users` (`username`, `fullname`, `email`, `phone`, `address`) VALUES
('anguyen.it', 'Nguyễn Văn A', 'anguyen.it@aptech.com', '0921244436', 'Hà Nội');
INSERT INTO `users` (`username`, `fullname`, `email`, `phone`, `address`) VALUES
('ble.it', 'Lê Thị B', 'ble.it@aptech.com', '0921288836', 'Hải Phòng');
INSERT INTO `users` (`username`, `fullname`, `email`, `phone`, `address`) VALUES
('cha.it', 'Hà Văn C', 'cha.it@aptech.com', '0921233336', 'Nam Định');