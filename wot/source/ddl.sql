create database worldoftips

create table user_type(
	id int auto_increment primary key,
	type_user varchar(10)
)

create table users(
	id int auto_increment primary key,
	user_name varchar(100),
	birthdate date,
	mail varchar(320),
	pass varchar(100),
	situation tinyint(1),
	user_type_id int,
	foreign key (user_type_id) references user_type(id)
)
create table tips(
	id int auto_increment primary key,
	users_id int,
	title varchar(50),
	game varchar(50),
	category varchar(50),
	content longtext,
	situation tinyint(1),
	foreign key (users_id) references users(id)
)

create table avalies(
	tips_id int,
	users int,
	aval int,
	situation tinyint(1)
)
