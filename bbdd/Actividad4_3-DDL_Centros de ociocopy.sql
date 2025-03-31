CREATE DATABASE centros_ocio;

USE centros_ocio;

CREATE TABLE socios(
    dni CHAR(9) PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    primer_apellido VARCHAR(255) NOT NULL,
    segundo_apellido VARCHAR(255),
    telefono INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    numero_cuenta INT NOT NULL,
    fecha_nacimiento DATE NOT NULL
);

CREATE TABLE centros(
    codigo CHAR(3) PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    calle VARCHAR(255) NOT NULL,
    ciudad VARCHAR(255) NOT NULL,
    telefono INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    numero INT NOT NULL
);

CREATE TABLE actividades(
    codigo INT PRIMARY KEY,
    fecha DATE NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    explicacion TEXT NOT NULL
);

CREATE TABLE matriculas(
    id_matricula INT AUTO_INCREMENT PRIMARY KEY,
    id_socio CHAR(9),
    id_centro CHAR(3),
    id_actividad INT,
    FOREIGN KEY (id_socio) REFERENCES socios(dni),
    FOREIGN KEY (id_centro) REFERENCES centros(codigo),
	FOREIGN KEY (id_actividad) REFERENCES actividades(codigo)
    );

CREATE TABLE salas(
    nombre VARCHAR(255) PRIMARY KEY,
    id_centro CHAR(3),
    metros_cuadrados FLOAT NOT NULL,
    caracteristicas TEXT NOT NULL,
    FOREIGN KEY (id_centro) REFERENCES centros(codigo)
);

CREATE TABLE socios_en_centros(
    id_sc INT AUTO_INCREMENT PRIMARY KEY,
    id_socio CHAR(9),
    id_centro CHAR(3),
    fecha DATE NOT NULL,
    FOREIGN KEY (id_socio) REFERENCES socios(dni),
    FOREIGN KEY (id_centro) REFERENCES centros(codigo)
);


CREATE TABLE reservas(
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_socio CHAR(9),
    id_sala CHAR(255),
    fecha DATE NOT NULL,
    hora_comienzo TIME NOT NULL,
    hora_FIN TIME NOT NULL,
    FOREIGN KEY (id_socio) REFERENCES socios(dni),
    FOREIGN KEY (id_sala) REFERENCES salas(nombre)
);
