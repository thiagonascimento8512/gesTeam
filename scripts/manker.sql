create database manker;

use manker;

create table user_status (
id int unsigned auto_increment not null,
descricao varchar(45) not null,
primary key(id)
);

create table users (
id int unsigned not null auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
sexo ENUM('f','m') not null,
telefone varchar(20) not null,
nascimento date not null,
senha varchar(45) not null,
data_cad datetime not null,
user_status int unsigned not null,
primary key(id),
constraint fk_status foreign key(user_status) references user_status(id) on update cascade
);