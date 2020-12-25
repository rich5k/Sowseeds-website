create database SIMSAdmin;

use SIMSAdmin;

create table Admin(
    adminID int not null primary key auto_increment,
    fname varchar(255) not null,
    lname varchar(255) not null,
    username varchar(255) not null unique,
    password varchar(255)not null
);

create table events(
    eventID int not null primary key auto_increment,
    title varchar(255) not null,
    description text(65535) not null,
    startTime datetime not null,
    endTime datetime not null,
    picture varchar(255) not null
);

create table teachings(
    teachingID int not null primary key auto_increment,
    title varchar(255) not null,
    minister varchar(255) not null,
    teachDate datetime not null,
    teachDay varchar(255) not null,
    audioFile varchar(255) not null
);

create table contacts(
    contactID int not null primary key auto_increment,
    fname varchar(255) not null,
    lname varchar(255) not null,
    email varchar(255) not null,
    messageType varchar(255) not null,
    contactMessage text(65535) not null
);

create table donations(
    donationID int not null primary key auto_increment, 
    fname varchar(255) not null,
    lname varchar(255)not null,
    paymentType varchar(255) not null,
    accountDetails varchar(255) not null,
    amount float(6,2) not null
);