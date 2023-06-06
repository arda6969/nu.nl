DROP DATABASE IF EXISTS `nu`;

CREATE DATABASE `nu`;

USE `nu`;

CREATE TABLE `users` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(40) NULL,
    wachtwoord VARCHAR(100) NOT NULL,
    joined_at DATE NULL
);

CREATE TABLE `artikel` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(40) NULL,
    img VARCHAR(40) NULL,
    toegevoeg_at date NOT NULL,
    artikel VARCHAR(10000) NOT NULL,
    onderwep VARCHAR(40) enum(economie, sports, tech) NULL
    sub-onderwep VARCHAR(40) enum(stocks, voetbal, gamen) NULL
);

CREATE TABLE `reacties` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    account_id VARCHAR(40) NULL,
    reactie VARCHAR(1000) NOT NULL,
    gepost_at DATE NULL
);
