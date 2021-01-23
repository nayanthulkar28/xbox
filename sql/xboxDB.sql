-- INFO

server = "localhost"
user = "root"
password = "password"
dbname = "xbox"

-- Create database name xbox
create database xbox;

-- Use that database
use xbox;

-- Creating tables

create table users (
	userId int(11) auto_increment primary key not null,
	firstName varchar(50) not null,
	lastName varchar(50) not null,
	email varchar(50) not null,
	password varchar(255) not null,
	country varchar(50),
	dob date,
	type varchar(10) not null
);

-- For demo purpose insert this value
insert into users(firstName,lastName,email,password,country,dob,type) 
values('Nayan','Thulkar','nayanthulkar1@gmail.com','Nayan137!!!','India','1999-06-28','admin');