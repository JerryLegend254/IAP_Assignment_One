CREATE DATABASE IF NOT EXISTS `Usersdatabase`;

USE `Userdatabase`;
SELECT DATABASE();

DROP TABLE IF EXISTS `UsersTabled`;
CREATE TABLE IF NOT EXISTS `UsersTabled` (
    `id` int(5) NOT NULL AUTO_INCREMENT,
    `Name` varchar(65),
	`Username` varchar(62),
    `Email` varchar(100),
    `Passwords` varchar(58),
    `is_admin` tinyint(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
);
INSERT Users (Username, Full_Name, Passwords, Email, `is_admin`) values ('Cheese', 'Jerry', '$2y$10$Jr01rJA3zPPDC4ez0xzySO0U0MSn2toU3t/7wPaHhcCbI04c1/qlu', 'JerryMouse@cheese.com', 1); 

SELECT * FROM Users;

DROP TABLE IF EXISTS `keys`;
CREATE TABLE IF NOT EXISTS `keys` (
    `id` int(5) NOT NULL AUTO_INCREMENT,
    `key` varchar(100),
    `user_id` int(5),
    PRIMARY KEY (`id`)
);

INSERT into `keys` (`key`, `user_id`) values ('1234567890', 1);

SELECT * FROM `keys`;