DROP DATABASE IF EXISTS `nu`;

CREATE DATABASE `nu`;

USE `nu`;

CREATE TABLE `users` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(40) not NULL,
    wachtwoord VARCHAR(100) NOT NULL,
    joined_at DATE NULL
);

CREATE TABLE `artikel` (
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam VARCHAR(40) not NULL,
    img VARCHAR(40) not NULL,
    toegevoeg_at DATETIME NOT NULL,
    authuur VARCHAR(40) not null,
    artikel VARCHAR(10000) NOT NULL
);
create table `onderwerp` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    main_onderwerp VARCHAR(40) not NULL,
    sub_onderwep VARCHAR(40) not NULL
);

create table `artikelOnderwerp`(
	id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    artikel_id int not null, 
    onderwerp_id int not null
);

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
('media en cultuur', 'boeken'),
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
('overig', 'vakantie');


insert into artikel (naam, img, authuur) values
('Nederland telt ruim 500.000 laadpunten, waarvan de meeste aan huis', 'nederland-telt-ruim-500000-laadpunten-waarvan-de-meeste-aan-huis.jpg', 'NU.nl'),
('Megabatterijen in elke provincie nodig om groene stroom op te slaan voor later', 'tennet-megabatterij', 'onze economieredactie'),
('Toezichthouders moeten ons beter beschermen tegen de gevaren van AI', 'toezichthouders-moeten-ons-beter-beschermen-tegen-de-gevaren-van-ai', 'onze techredactie'),
("Weg met de vaste energiecontracten? 'Ze bieden alleen nepzekerheid'", 'hoogspanning', 'Jeroen Kraan'),
('Nog geen belastingaangifte gedaan? Hier kun je op letten om geld te besparen', 'nog-geen-belastingaangifte-gedaan-hier-kun-je-op-letten-om-geld-te-besparen', 'Robert Hüsken'),
('Zo zeg je nee tegen je baas zonder schuldgevoel, ook buiten kantooruren', 'zo-zeg-je-nee-tegen-je-baas-zonder-schuldgevoel-ook-buiten-kantooruren', 'Elsemieke Wormhoudt'),
('Het loopt geen storm met subsidiepotje voor nieuwe elektrische auto', 'het-loopt-geen-storm-met-subsidiepotje-voor-nieuwe-elektrische-auto', 'Eva Schouten'),
('Arsenal brengt miljoenenbod uit op Ajax-verdediger en Oranje-international Timber', 'arsenal-brengt-miljoenenbod-uit-op-ajax-verdediger-en-oranje-international-timber', 'onze sportredactie'),
('Overzicht: Alle zomertransfers in de Eredivisie', 'overzicht-alle-zomertransfers-in-de-eredivisie', 'onze sportredactie'),
('Meervoudig wereldkampioenen genieten van gezamenlijk podium in Canada', 'verstappen', 'Joost Nederpelt'),
('Van der Poel grijpt eindzege in Ronde van België, Jakobsen wint slotrit', 'mathieu-van-der-poel', 'onze sportredactie'),
("Griekspoor overwint zenuwen in Rosmalen: 'Was de mooiste week uit mijn leven'", 'griekspoor-overwint-zenuwen-in-rosmalen-was-de-mooiste-week-uit-mijn-leven', 'onze sportredactie'),
('Chantal Janzen en Tina de Bruin maken Videoland-serie over gênante situaties', 'chantal-janzen-en-tina-de-bruin-maken-videoland-serie-over-genante-situaties', 'onze entertainmentredactie'),
('Staatssecretaris Uslu investeert miljoenen in regionale filmprojecten', 'staatssecretaris-uslu-investeert-miljoenen-in-regionale-filmprojecten', 'onze entertainmentredactie'),
("Recensieoverzicht: 'Show Beyoncé spectaculair, maar pauzes duurden te lang'", 'recensieoverzicht-show-beyonce-spectaculair-maar-pauzes-duurden-te-lang', 'onze entertainmentredactie'),
("Kalvijn met geld overgehaald tot presentatie flop Avastars: 'Moest bruiloft betalen'", 'kalvijn-met-geld-overgehaald-tot-presentatie-flop-avastars-moest-bruiloft-betalen', 'onze entertainmentredactie'),
('Jörgen Raymann toegetreden tot Nationaal Comité 4 en 5 mei', 'jorgen-raymann-toegetreden-tot-nationaal-comite-4-en-5-mei', 'onze entertainmentredactie'),
('Doodverklaarde vrouw die levend uit doodskist kwam alsnog overleden', 'doodskist', 'onze nieuwsredactie'),
('Borstkankerbehandeling kan prettiger en goedkoper met minder medicijn', 'borstkankerbehandeling-kan-prettiger-en-goedkoper-met-minder-medicijn', 'Fitria Jelyta'),
('Nieuwe behandeling zou kans op overlijden bij nierfalen met kwart verkleinen', 'nieuwe-behandeling-zou-kans-op-overlijden-bij-nierfalen-met-kwart-verkleinen', 'onze nieuwsredactie'),
('Deze voeding kan je helpen om geconcentreerd je examens door te komen', 'foto-ter-illustratie', 'Sarah Sitanala'),
('Wat wil jij weten over de huizenprijzen? Stel hier je vragen', 'wat-wil-jij-weten-over-de-huizenprijzen-stel-hier-je-vragen', 'onze interactieredactie'),
('Dagje vrij of buiten schooltijd op vakantie? Dit zijn de leerplichtregels', 'dagje-vrij-of-buiten-schooltijd-op-vakantie-dit-zijn-de-leerplichtregels', 'Esther Villerius'),
('Roompot mag Landal GreenParks overnemen na verkoop deel vakantieparken', 'roompot-mag-landal-greenparks-overnemen-na-verkoop-deel-vakantieparken', 'onze economieredactie'),
('De vogelopvang heeft het druk, want de mussen vallen letterlijk van het dak', 'de-vogelopvang-heeft-het-druk-want-de-mussen-vallen-letterlijk-van-het-dak', 'Linda van Beest'),
("NUcheckt: Het 'wonder' van de Turkse stad Erzin is eenvoudig te verklaren", 'nucheckt-het-wonder-van-de-turkse-stad-erzin-is-eenvoudig-te-verklaren', 'Robbert van der Linde'),
("Marktplaats, Bruna en Libris gaan met bol.com antisemitische boeken weren", 'marktplaats-bruna-en-libris-gaan-met-bolcom-antisemitische-boeken-weren', 'Afran Groenewoud'),
("Lil Kleine gaat toch niet in beroep tegen straf voor mishandeling in club", 'lil-kleine-gaat-toch-niet-in-beroep-tegen-straf-voor-mishandeling-in-club', 'onze nieuwsredactie'),
("Koningspaar in België: onderonsjes en eten in de koninklijke serre", 'koningspaar-in-belgie-onderonsjes-en-eten-in-de-koninklijke-serre', 'onze entertainmentredactie'),
("Vegan ramadan: 'Dadels in plaats van schapen, die trend komt terug'", 'vegan-ramadan-dadels-in-plaats-van-schapen-die-trend-komt-terugs', 'Elise Vermeeren');
insert into artikelOnderwerp (artikel_id, onderwerp_id) values
(1, 6),
(2, 2),
(3, 2),
(4, 1),
(5, 4),
(6, 5),
(7, 6),
(8, 11),
(9, 11),
(10, 12),
(11, 9),
(12, 13),
(13, 14),
(14, 15),
(15, 17),
(16, 17),
(17, 27),
(18, 28),
(19, 25),
(19, 28),
(20, 25),
(21, 3),
(22, 22),
(23, 29),
(24, 23),
(25, 26),
(26, 16),
(27, 18),
(28, 19),
(29, 24);