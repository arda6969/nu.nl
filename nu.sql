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
    authuur VARCHAR(40) not null,
    artikel VARCHAR(10000) NOT NULL
);
create table `onderwerp` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    main_onderwerp VARCHAR(40) not NULL,
    sub_onderwep VARCHAR(40) not NULL
)

create table `artikelOnderwerp`(
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    artikel_id int not null foreign key references artikel(id), 
    onderwerp_id int not null foreign key references onderwerp(id)
)

CREATE TABLE `reacties` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    account_id VARCHAR(40) NULL,
    reactie VARCHAR(1000) NOT NULL,
    gepost_at DATE NULL
);
CREATE TABLE `advertenties` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    link VARCHAR(100) not NULL,
    width int(4) not null,
    height int(4) not null
);
insert into onderwerp (main_onderwerp, sub_onderwep) values
('economie', 'klimaat'),
('economie', 'tech'),
('economie', 'wonen'),
('economie', 'geld'),
('economie', 'werk'),
('economie', 'auto'),
('economie', 'aandelen'),
('economie', 'onderweg'),
('sports', 'wielrennen'),
('sports', 'sport-overig'),
('sports', 'voetbal'),
('sports', 'formule1'),
('sports', 'scorebord'),
('sports', 'sprotspellen'),
('media en cultuur', 'films'),
('media en cultuur', 'muziek'),
('media en cultuur', 'boek'),
('media en cultuur', 'media'),
('media en cultuur', 'achterklap'),
('media en cultuur', 'koningshuis'),
('media en cultuur', 'tv gids'),
('overig',' het woord' ),
('overig', 'kind en gezin'),
('overig', 'dieren'),
('overig', 'eten en drinken'),
('overig', 'gezondheid'),
('overig', 'nucheckt'),
('overig', 'opmerkelijk'),
('overig', 'wetenschap'),
('overig', 'opmerkelijk'),
('overig', 'vakantie')