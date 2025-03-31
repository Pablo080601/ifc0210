CREATE DATABASE blog;

CREATE TABLE usuarios(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    email VARCHAR(255),
    alias VARCHAR(255),
    contraseña VARCHAR(255),
    fecha_registro DATE DEFAULT CURRENT_DATE,
);

CREATE TABLE posts(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    id_usuario INT,
    titulo VARCHAR(255),
    cuerpo TEXT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_modificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

CREATE TABLE post(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    id_post INT,
    texto TEXT,
    fecha_publicacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_post) REFERENCES posts(id)
);
