CREATE DATABASE IF NOT EXISTS concesionario;

USE concesionario;

CREATE TABLE coches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(255) NOT NULL,
    modelo VARCHAR(255) NOT NULL,
    color VARCHAR(255) NOT NULL,
    propietario VARCHAR(255) NOT NULL
);
