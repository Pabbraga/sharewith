create database swdb;
#drop database swdb;
use swdb;

create table users (
id int auto_increment primary key,
name varchar(200),
email varchar(100),
password varchar(50)
);

insert into users(name, email, password) values('etec', 'etec@email.com', 'etec123');

create table notes (
id int auto_increment primary key,
title varchar(50),
content varchar(500)
);