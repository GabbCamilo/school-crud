
create database school;
use school;

create table teacher (
    id int primary key auto_increment,
    `name` varchar(55) not null,
    `date_born` date not null,
    CPF varchar(11) not null,
    RG varchar(9) not null,
    email varchar(55) not null,
    `password` varchar(55) not null,
    id_license int not null,
    suply varchar(55) not null,
    `address_street` varchar(55) not null,
    city varchar(55) not null
);

create table class (
    id int primary key auto_increment,
    semester int not null,
    course varchar(55) not null,
    `period` varchar(55) not null
);

create table class_teacher (
    id int primary key auto_increment,
    id_teacher int,
    foreign key(id_teacher) references teacher(id),
    id_class int,
    foreign key(id_class) references class(id)
);

create table student(
    RGM int primary key auto_increment,
    `password` varchar(55) not null,
    `name` varchar(55) not null,
    class int,
    fouls int,
    M1 decimal(2,1),
    M2 decimal(2,1),
    average decimal(2,1),
    situation varchar(255),
    foreign key(class) references class(id)
);
