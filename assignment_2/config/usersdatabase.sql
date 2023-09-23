DROP TABLE IF EXISTS `Usersdatabase`;
CREATE DATABASE IF NOT EXISTS `Usersdatabase`;

USE `Usersdatabase`;


DROP TABLE IF EXISTS `UsersTabled`;
CREATE TABLE IF NOT EXISTS `UsersTabled` (
    `id` int(5) NOT NULL AUTO_INCREMENT,
    `l_name` varchar(65) NOT NULL DEFAULT '',
    `f_name` varchar(65) NOT NULL DEFAULT '',
    `username` varchar(65) NOT NULL DEFAULT '',
    `email` varchar(100) NOT NULL DEFAULT '',
    `password` varchar(58) NOT NULL DEFAULT '',
    
    PRIMARY KEY (`id`),
    UNIQUE KEY (`email`),
    UNIQUE KEY (`username`)
);

