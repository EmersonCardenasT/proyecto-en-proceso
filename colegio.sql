CREATE DATABASE IF NOT EXISTS colegio_emanuel;

USE colegio_emanuel;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    DNI VARCHAR(20),
    usuario VARCHAR(50),
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    telefono VARCHAR(20),
    direccion VARCHAR(100),
    correo VARCHAR(100),
    contrasenia VARCHAR(100)
);
