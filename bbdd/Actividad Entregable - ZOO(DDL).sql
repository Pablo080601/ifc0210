CREATE DATABASE zoo;

USE zoo;

CREATE TABLE especies(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_generico VARCHAR(255) NOT NULL,
    nombre_cientifico VARCHAR(255) NOT NULL,
    familia VARCHAR(255) NOT NULL,
    info_trabajadores TEXT,
    cuidados_especificos TEXT NOT NULL,
    explicacion TEXT NOT NULL
);

CREATE TABLE cuidadores(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    primer_apellido VARCHAR(255) NOT NULL,
    segundo_apellido VARCHAR(255),
    dni CHAR(9) NOT NULL,
    telefono CHAR(9) NOT NULL
);

CREATE TABLE voluntarios(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    primer_apellido VARCHAR(255) NOT NULL,
    segundo_apellido VARCHAR(255),
    dni CHAR(9) NOT NULL,
    telefono CHAR(9) NOT NULL,
    fecha_nacimiento DATE NOT NULL
);

CREATE TABLE ejemplares(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_especie INT NOT NULL,
    padre INT,
    madre INT,
    nombre VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    fecha_muerte DATE,
    FOREIGN KEY (id_especie) REFERENCES especies(id),
    FOREIGN KEY (padre) REFERENCES ejemplares(id),
    FOREIGN KEY (madre) REFERENCES ejemplares(id)
);


CREATE TABLE habilitados(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_especie INT NOT NULL,
    id_cuidador INT NOT NULL,
    FOREIGN KEY (id_especie) REFERENCES especies(id),
    FOREIGN KEY (id_cuidador) REFERENCES cuidadores(id)
);

CREATE TABLE encargados(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_ejemplar INT NOT NULL,
    id_cuidador INT NOT NULL,
    FOREIGN KEY (id_ejemplar) REFERENCES ejemplares(id),
    FOREIGN KEY (id_cuidador) REFERENCES cuidadores(id)
);


CREATE TABLE preferencias(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_ejemplar INT NOT NULL,
    id_voluntario INT NOT NULL,
    FOREIGN KEY (id_ejemplar) REFERENCES ejemplares(id),
    FOREIGN KEY (id_voluntario) REFERENCES voluntarios(id)
);

CREATE TABLE visitas(
	id INT AUTO_INCREMENT PRIMARY KEY,
    id_ejemplar INT NOT NULL,
    id_cuidador INT NOT NULL,
    id_voluntario INT NOT NULL,
    fecha_hora TIMESTAMP NOT NULL,
    incidencias TEXT,
    FOREIGN KEY (id_ejemplar) REFERENCES ejemplares(id),
    FOREIGN KEY (id_cuidador) REFERENCES cuidadores(id),
    FOREIGN KEY (id_voluntario) REFERENCES voluntarios(id)
);
