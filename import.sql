DROP DATABASE IF EXISTS `eindprojectdata`;
CREATE DATABASE `eindprojectdata`;
USE `eindprojectdata`;

DROP TABLE IF EXISTS `kleding`;
CREATE TABLE kleding (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam varchar(30) NOT NULL,
    prijs varchar(30) NOT NULL,
    catergory ENUM('shirt', 'rok', 'trui'),
    size ENUM('S', 'M', 'L'),
    foto varchar(30) NOT NULL, 
    vooraad varchar(30) NOT NULL
);

INSERT INTO kleding (naam, prijs, catergory, size, foto, vooraad) VALUES
    ('Groene/witte croptop', '€15', 'shirt', 'S', 'shirt1.png', '8'),
    ('Groene/witte croptop', '€15', 'shirt', 'M', 'shirt1.png', '10'),
    ('Groene/witte croptop', '€15', 'shirt', 'L', 'shirt1.png', '12'),
    ('Zwart/witte croptop', '€15', 'shirt', 'S', 'shirt2.png', '8'),
    ('Zwart/witte croptop', '€15', 'shirt', 'M', 'shirt2.png', '10'),
    ('Zwart/witte croptop', '€15', 'shirt', 'L', 'shirt2.png', '12'),
    ('Groen/witte shirt', '€10', 'shirt', 'S', 'shirt3.png', '8'),
    ('Groen/witte shirt', '€10', 'shirt', 'M', 'shirt3.png', '10'),
    ('Groen/witte shirt', '€10', 'shirt', 'L', 'shirt3.png', '12'),
    ('Zwart/witte shirt', '€10', 'shirt', 'S', 'shirt4.png', '8'),
    ('Zwart/witte shirt', '€10', 'shirt', 'M', 'shirt4.png', '10'),
    ('Zwart/witte shirt', '€10', 'shirt', 'L', 'shirt4.png', '12'),
    ('Rode bloemetjes rok', '€20', 'rok', 'S', 'rok1.png', '8'),
    ('Rode bloemetjes rok', '€20', 'rok', 'M', 'rok1.png', '10'),
    ('Rode bloemetjes rok', '€20', 'rok', 'L', 'rok1.png', '12'),
    ('Blauwe bloemetjes rok', '€20', 'rok', 'S', 'rok2.png', '8'),
    ('Blauwe bloemetjes rok', '€20', 'rok', 'M', 'rok2.png', '10'),
    ('Blauwe bloemetjes rok', '€20', 'rok', 'L', 'rok2.png', '12'),
    ('Paarsen bloemetjes rok', '€20', 'rok', 'S', 'rok3.png', '8'),
    ('Paarsen bloemetjes rok', '€20', 'rok', 'M', 'rok3.png', '10'),
    ('Paarsen bloemetjes rok', '€20', 'rok', 'L', 'rok3.png', '12'),
    ('Kleurijke bloemetjes rok', '€20', 'rok', 'S', 'rok4.png', '8'),
    ('Kleurijke bloemetjes rok', '€20', 'rok', 'M', 'rok4.png', '10'),
    ('Kleurijke bloemetjes rok', '€20', 'rok', 'L', 'rok4.png', '12'),
    ('Paarsen wole trui', '€35', 'trui', 'S', 'trui1.png', '8'),
    ('Paarsen wole trui', '€35', 'trui', 'M', 'trui1.png', '10'),
    ('Paarsen wole trui', '€35', 'trui', 'L', 'trui1.png', '12'),
    ('Groene wole trui', '€35', 'trui', 'S', 'trui2.png', '8'),
    ('Groene wole trui', '€35', 'trui', 'M', 'trui2.png', '10'),
    ('Groene wole trui', '€35', 'trui', 'L', 'trui2.png', '12'),
    ('Bruin/witte wole trui', '€40', 'trui', 'S', 'trui3.png', '8'),
    ('Bruin/witte wole trui', '€40', 'trui', 'M', 'trui3.png', '10'),
    ('Bruin/witte wole trui', '€40', 'trui', 'L', 'trui3.png', '12'),
    ('Bruin/blauwe wole trui', '€40', 'trui', 'S', 'trui4.png', '8'),
    ('Bruin/blauwe wole trui', '€40', 'trui', 'M', 'trui4.png', '10'),
    ('Bruin/blauwe wole trui', '€40', 'trui', 'L', 'trui4.png', '12'),
    ('Witte wole trui', '€40', 'trui', 'S', 'trui5.png', '8'),
    ('Witte wole trui', '€40', 'trui', 'M', 'trui5.png', '10'),
    ('Witte wole trui', '€40', 'trui', 'L', 'trui5.png', '12'),
    ('Bruine wole trui', '€40', 'trui', 'S', 'trui6.png', '8'),
    ('Bruine wole trui', '€40', 'trui', 'M', 'trui6.png', '10'),
    ('Bruine wole trui', '€40', 'trui', 'L', 'trui6.png', '12');


DROP TABLE IF EXISTS `sieraden`;
CREATE TABLE sieraden (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam varchar(30) NOT NULL,
    prijs varchar(30) NOT NULL,
    catergory ENUM('ketting', 'armband', 'oorbel'),
    foto varchar(30) NOT NULL, 
    vooraad varchar(30) NOT NULL
);

INSERT INTO sieraden (naam, prijs, catergory, foto, vooraad) VALUES
    ('Goude rainbow ketting', '€15', 'ketting', 'ketting1.png', '25'),
    ('Zilveren parel ketting', '€12', 'ketting', 'ketting2.png', '20'),
    ('4 Kleurijke kettingen', '€20', 'ketting', 'ketting3.png', '20'),
    ('Zilveren ketting', '€25', 'ketting', 'ketting4.png', '15'),
    ('Tripel armbanden', '€15', 'armband', 'armband1.png', '15'),
    ('Goud/zwarten armband', '€35', 'armband', 'armband2.png', '15'),
    ('Kleurijke kralen armband', '€7', 'armband', 'armband3.png', '30'),
    ('Goude armband', '€40', 'armband', 'armband4.png', '10'),
    ('Kleurijke diamand oorbel', '€20', 'oorbel', 'oorbel1.png', '15'),
    ('goude hardjes oorbel', '€25', 'oorbel', 'oorbel2.png', '30'),
    ('Blauwe hang oorbel', '€30', 'oorbel', 'oorbel3.png', '10'),
    ('Kleurijke rainbow oorbel', '€20', 'oorbel', 'oorbel4.png', '15');


DROP TABLE IF EXISTS `accesoires`;
CREATE TABLE accesoires (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    naam varchar(30) NOT NULL,
    prijs varchar(30) NOT NULL,
    catergory ENUM('tas', 'hoofd', 'riem'),
    foto varchar(30) NOT NULL, 
    vooraad varchar(30) NOT NULL
);

INSERT INTO accesoires (naam, prijs, catergory, foto, vooraad) VALUES
    ('Goude hardcas tas', '€40', 'tas', 'tas1.png', '10'),
    ('Cottan tas', '€15', 'tas', 'tas2.png', '40'),
    ('Roze handtas', '€25', 'tas', 'tas3.png', '15'),
    ('Blauwe handtas', '€30', 'tas', 'tas4.png', '10'),
    ('Oranje muts', '€15', 'hoofd', 'hoofd1.png', '20'),
    ('Strand hoed', '€20', 'hoofd', 'hoofd2.png', '5'),
    ('Citroen buckethead', '€20', 'hoofd', 'hoofd3.png', '15'),
    ('Blauwe pet', '€15', 'hoofd', 'hoofd4.png', '10'),
    ('Goude taile sieraden', '€25', 'riem', 'riem1.png', '15'),
    ('Strand riem', '€15', 'riem', 'riem2.png', '5'),
    ('Oranje riem', '€20', 'riem', 'riem3.png', '10'),
    ('Zwarte cowboy riem', '€35', 'riem', 'riem4.png', '20');


DROP TABLE IF EXISTS `bag`;
CREATE TABLE bag (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idpersoon varchar(30) NOT NULL,
    naam varchar(30) NOT NULL,
    prijs varchar(30) NOT NULL,
    foto varchar(30) NOT NULL
);


DROP TABLE IF EXISTS `acount`;
CREATE TABLE acount (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    voornaam varchar(30) NOT NULL,
    achternaam varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    wachtwoord varchar(30) NOT NULL
);

INSERT INTO acount (voornaam, achternaam, email, wachtwoord) VALUES
    ('test', 'test', 'test@gmail.com', '1234'),
    ('Nicky', 'Boer', 'nicky@gmail.com', '1311'),
    ('Nicky', 'Boer', 'nmjdeboer@gmail.com', '1311');