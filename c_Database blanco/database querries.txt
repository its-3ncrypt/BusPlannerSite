Querries:

create table Users (
    ID_User int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(100),
    Pasword varchar(100),
    Voornaam varchar(100),
    Naam varchar(100),
    Email varchar(100),
    Bevestigd bit,
    Refused bit,
    Rol varchar(100),
    ConfirmedMail bit,
    ID_Afdeling int);

create table Afdelingen (
    ID_Afdeling int PRIMARY KEY AUTO_INCREMENT,
    Naam varchar(100));

create table Bussen (
    ID_Bus int PRIMARY KEY AUTO_INCREMENT,
    Nummerplaat varchar(100),
    Statuus boolean);

create table Reservaties (
    ID_Reservaties int PRIMARY KEY AUTO_INCREMENT,
    Startdatum date,
    Stopdatum date,
    Startuur time,
    Stopuur time,
    ID_User int,
    ID_Bus int,
    Controle bit,
    Geweigerd bit);

create table Berichten (
    ID_Bericht int PRIMARY KEY AUTO_INCREMENT,
    ID_User int,
    Bericht varchar(1000),
    Datum date);