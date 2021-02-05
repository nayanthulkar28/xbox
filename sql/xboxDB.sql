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

create table games (
	gameId varchar(50) primary key not null,
	gameName varchar(50) not null,
	category varchar(50) not null,
	price int(11) not null,
	disc varchar(255),
	downloads int(11) not null,
	imgDir varchar(255) not null
);

insert into games(gameId,gameName,category,price,disc,downloads,imgDir)
	values ('apex-legend','Apex Legend','shooting',0,'Fun multiplayer game',0,'./images/games/apex-legend.jpg'),
	 ('battlefield-5','BattleField 5','shooting',2500,'Fun multiplayer game',0,'./images/games/battlefield-5.jpg'),
	 ('cod-warzone','Call of Duty Warzone','shooting',0,'Fun multiplayer game',0,'./images/games/cod-warzone.jpg'),
	 ('cricket-19','International Edition Cricket-19','sports',2000,'Fun sports game',0,'./images/games/cricket-19.jpg'),
	 ('destiny-2','Destiny 2','action',3000,'Take the damage',0,'./images/games/destiny-2.jpg'),
	 ('fifa20','Fifa 20','sports',1500,'Real fun football',0,'./images/games/fifa20.jpg'),
	 ('fortnite','Fortnite','battle royal',0,'Fun multiplayer game',0,'./images/games/fortnite.jpg'),
	 ('forza-horizon-4','Forza Horizon 4','racing',4000,'speed is unlimited',0,'./images/games/forza-horizon-4.jpg'),
	 ('gta5','Grand Theft Auto 5','RPG',2500,'open the world',0,'./images/games/gta5.jpg'),
	 ('minecraft','Minecraft','RPG',1200,'open the world',0,'./images/games/minecraft.jpg'),
	 ('rdr-2','Red Dead Redemption 2','RPG',4000,'open the world',0,'./images/games/rdr-2.jpg'),
	 ('rocket-league','Rocket League','sports',2000,'race it',0,'./images/games/rocket-league.jpg'),
	 ('sw-jedi-fallen-orders','Star wars: jedi fallen orders','RPG',3000,'face it',0,'./images/games/sw-jedi-fallen-orders.jpg'),
	 ('witcher-3','Witcher 3 : wild hunt','RPG',2500,'lets go',0,'./images/games/witcher-3.jpg');

create table cart (
	userId int(11) not null,
	gameId varchar(50) not null,
	primary key (userId,gameId),
	foreign key (userId) references users(userId),
	foreign key (gameId) references games(gameId) 
);

create table bought (
	userId int(11) not null,
	gameId varchar(50) not null,
	freq int(11) not null,
	primary key (userId,gameId),
	foreign key (userId) references users(userId),
	foreign key (gameId) references games(gameId)
);