CREATE DATABASE base;
USE base;
CREATE TABLE usuarios(
     id INT(11) NOT NULL auto_increment,
     nombre VARCHAR (50) NOT NULL,
     email VARCHAR(50) NOT NULL,
     user VARCHAR (40) NOT NULL,
     password VARCHAR (100) NOT NULL,
     PRIMARY KEY (id)
)
    ENGINE= InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;