
drop database if exists  learning_zend;

create database learning_zend;

create table if not exists book(
    `id` int NOT NULL AUTO_INCREMENT,
    `title` varcahr(225) NOT NULL,
    `author` varcahr(225) NOT NULL,
    primary key(id)
);

