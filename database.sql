
CREATE DATABASE IF NOT EXISTS learning_zend_2_with_orm;

USE learning_zend_2_with_orm;

CREATE TABLE IF NOT EXISTS book (
   `id`     int NOT NULL AUTO_INCREMENT,
   `title`  varchar(225) NOT NULL,
   `author` varchar(225) NOT NULL,
   PRIMARY KEY (id)
);
