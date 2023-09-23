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
    PRIMARY KEY (`id`)
);
INSERT Users (Username, Full_Name, Passwords, Email, `is_admin`) values ('NickoBeast', 'Nick Zola', '$2y$10$Jr01rJA3zPPDC4ez0xzySO0U0MSn2toU3t/7wPaHhcCbI04c1/qlu', 'nickzola@cheese.com', 1); 

SELECT * FROM Users;

