CREATE DATABASE IF NOT EXISTS oishidb;
USE oishidb;

CREATE TABLE `user` (
	`uid` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`username` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`first_name` varchar(255),
	`last_name` varchar(255),
	`avatar` MEDIUMBLOB,
	`created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
);

CREATE TABLE `review` (
	`cid`int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`pid` int(11) NOT NULL,
	`name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`content` varchar(300) NOT NULL,
	`image` MEDIUMBLOB,
	`rating` tinyint(1) NOT NULL,
	`submit_date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
) 