create database HuelicRestaurant;

use database HuelicRestaurant;

DROP TABLE IF EXISTS Usuarios;
CREATE TABLE IF NOT EXISTS Usuarios(
Id MEDIUMINT not null AUTO_INCREMENT,
Correo varchar(100) not null,
Clave varchar(100) not null,
PRIMARY KEY (Id)
);

INSERT into usuarios(Correo, Clave) VALUES(
'mirna.espinoza@gmail.com',
'1234'
);

DROP TABLE IF EXISTS Reservaciones;
CREATE TABLE IF NOT EXISTS Reservaciones (
Correo varchar(100) NOT NULL,
Lugar varchar(100) NOT NULL,
Fecha datetime(6) NOT NULL
)

DROP TABLE IF EXISTS Ordenes;
CREATE TABLE IF NOT EXISTS Ordenes(
Id MEDIUMINT not null AUTO_INCREMENT,
Correo varchar(100) not null,
Platillo varchar(100) not null,
Cantidad int not null,
Precio decimal(5,2) not null,
Total decimal(5,2) not null,
PRIMARY KEY (Id)
)