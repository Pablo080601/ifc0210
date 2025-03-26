CREATE DATABASE ecommerce;

CREATE TABLE categorias(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    nombre VARCHAR(255)
);

CREATE TABLE productos(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    id_categoria INT,
    nombre VARCHAR(255),
    marca VARCHAR(255),
    referencia VARCHAR(255),
    precio FLOAT,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);

CREATE TABLE direcciones(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    provincia VARCHAR(255),
    codigo_postal CHAR(9),
    ciudad VARCHAR(255),
    piso VARCHAR(255),
    calle VARCHAR(255)
);

CREATE TABLE usuarios(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    id_direccion INT,
    nombre VARCHAR(255),
    email VARCHAR(255),
    contraseña VARCHAR(255),
    FOREIGN KEY (id_direccion) REFERENCES direcciones(id)
);

CREATE TABLE compras(
	id INT AUTO_INCREMENT PRIMARY KEY ,
    id_usuario INT,
    id_producto INT,
    referencia VARCHAR(255),
    fecha_compra DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_producto) REFERENCES productos(id)
);

