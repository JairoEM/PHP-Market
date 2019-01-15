/* DATA BASE CREATION */
CREATE DATABASE bdcarro;

/* TABLE CREATION */
CREATE TABLE articulos(
	articulo_id INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	articulo_des VARCHAR(30),
	articulo_precio DOUBLE, 
	articulo_stock INT
);

/* USERS */
CREATE TABLE usuarios( 
	usuario_nombre VARCHAR(8) PRIMARY KEY NOT NULL,
	usuario_pass VARCHAR(12) NOT NULL,
	usuario_mail VARCHAR(30) NOT NULL
);

/* ORDER */
CREATE TABLE pedidos(
	pedido_id INT(5) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	pedido_des VARCHAR(30),
	articulo_precio DOUBLE, 
	articulo_stock INT
);

/* ORDER DETAIL */
CREATE TABLE detalle_pedido(
	pedido_id INT(5) NOT NULL,
	articulo_id INT(5) NOT NULL,
	articulo_cantidad INT,
	PRIMARY KEY (pedido_id,articulo_id)
);

/* FOREIGN KEYS */
ALTER TABLE detalle_pedido 
	ADD CONSTRAINT detalle_pedido_fk
		FOREIGN KEY (pedido_id) REFERENCES pedidos (pedido_id)
		ON UPDATE CASCADE,
	ADD CONSTRAINT detalle_articulo_fk
		FOREIGN KEY (articulo_id) REFERENCES articulos (articulo_id)
		ON UPDATE CASCADE;