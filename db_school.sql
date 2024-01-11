
create database school;
use database school;

create table teacher (
    id int primary key auto_increment,
    `name` varchar(55) not null,
    id_license int not null,
    email varchar(55) not null,
    `password` varchar(55) not null
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
    `name` varchar(55) not null,
    class int,
    fouls int,
    M1 decimal(2,1),
    M2 decimal(2,1),
    average decimal(2,1),
    situation varchar(255),
    foreign key(class) references class(id)
);
