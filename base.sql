CREATE TABLE 'usuarios'(
    'id' int(11) NOT NULL auto_increment,
    'nombre' varchar (50) NOT NULL,
    'email' varchar(50) NOT NULL,
    'user' varchar (40) NOT NULL,
    'password' varchar (100) NOT NULL,
    PRIMARY KEY ('id')
)
    ENGINE= InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;