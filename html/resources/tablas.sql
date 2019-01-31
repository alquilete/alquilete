DROP TABLE IF EXISTS incidencia;
DROP TABLE IF EXISTS pago;
DROP TABLE IF EXISTS factura;
DROP TABLE IF EXISTS patinete;
DROP TABLE IF EXISTS bicicleta;
DROP TABLE IF EXISTS producto;
DROP TABLE IF EXISTS proveedor;
DROP TABLE IF EXISTS estacion;
DROP TABLE IF EXISTS suelta;
DROP TABLE IF EXISTS ubicacion;
DROP TABLE IF EXISTS premium;
DROP TABLE IF EXISTS usuario;


CREATE TABLE usuario (
    cod_usuario MEDIUMINT NOT NULL AUTO_INCREMENT,
    dni VARCHAR(9) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contrasena VARCHAR(100) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono INT(9) NOT NULL,
    datos_bancarios VARCHAR(100) NOT NULL,
    subscrito BOOLEAN NOT NULL,
    PRIMARY KEY (cod_usuario)
);


CREATE TABLE premium (
    cod_usuario MEDIUMINT NOT NULL,
    cuota MEDIUMINT NOT NULL,
    descuento MEDIUMINT NOT NULL,
    PRIMARY KEY (cod_usuario),
    FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario) on DELETE CASCADE
);

CREATE TABLE ubicacion (
    coordenadas VARCHAR(50) NOT NULL,
    cp MEDIUMINT NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    municipio VARCHAR(50) NOT NULL,
    PRIMARY KEY (coordenadas)
);

CREATE TABLE estacion (
    coordenadas VARCHAR(50) NOT NULL,
    PRIMARY KEY (coordenadas),
    FOREIGN KEY (coordenadas) REFERENCES ubicacion(coordenadas) on DELETE CASCADE
);

CREATE TABLE proveedor (
    cif VARCHAR(9) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono INT(9) NOT NULL,
    detalles VARCHAR(100),
    PRIMARY KEY (cif)
);


CREATE TABLE producto (
    cod_producto MEDIUMINT NOT NULL AUTO_INCREMENT,
    coordenadas VARCHAR(50) NOT NULL,
    cif VARCHAR(9) NOT NULL,
    tipo VARCHAR(15) NOT NULL,
    color VARCHAR(10) NOT NULL,
    bateria VARCHAR(10),
    PRIMARY KEY (cod_producto),
    FOREIGN KEY (coordenadas) REFERENCES ubicacion(coordenadas) on DELETE CASCADE,
    FOREIGN KEY (cif) REFERENCES proveedor(cif) on DELETE CASCADE
);

CREATE TABLE factura (
    cod_factura MEDIUMINT NOT NULL AUTO_INCREMENT,
    cod_usuario MEDIUMINT NOT NULL,
    cod_producto MEDIUMINT NOT NULL,
    fecha DATE NOT NULL,
    cantidad MEDIUMINT NOT NULL,
    descripcion VARCHAR(50) NOT NULL,
    precio MEDIUMINT NOT NULL,
    PRIMARY KEY (cod_factura),
    FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario) on DELETE CASCADE,
    FOREIGN KEY (cod_producto) REFERENCES producto(cod_producto) on DELETE CASCADE
);

CREATE TABLE pago (
    cod_usuario MEDIUMINT NOT NULL,
    cod_producto MEDIUMINT NOT NULL,
    cod_factura MEDIUMINT NOT NULL,
    f_ini DATE NOT NULL,
    f_fin DATE NOT NULL,
    PRIMARY KEY (cod_usuario, cod_producto, cod_factura),
    FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario) on DELETE CASCADE,
    FOREIGN KEY (cod_producto) REFERENCES producto(cod_producto) on DELETE CASCADE,
    FOREIGN KEY (cod_factura) REFERENCES factura(cod_factura) on DELETE CASCADE
);

CREATE TABLE incidencia (
    cod_incidencia MEDIUMINT NOT NULL AUTO_INCREMENT,
    cod_producto MEDIUMINT NOT NULL,
    motivo VARCHAR(50) NOT NULL,
    detalles VARCHAR(100) NOT NULL,
    PRIMARY KEY (cod_incidencia),
    FOREIGN KEY (cod_producto) REFERENCES producto(cod_producto) on DELETE CASCADE
);


INSERT INTO usuario (cod_usuario, dni, nombre, email, contrasena, direccion, telefono, datos_bancarios) VALUES
    (1, '11111111A','Jose García Pérez', 'jose@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ pez 25', 611111111,'ES11 1111 1111 1111 1111 1111'),
    (2, '22222222B','María López López', 'maria@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ sol 2', 622222222,'ES22 2222 2222 2222 2222 2222'),
    (3, '33333333C','Cristian Rubio Pérez', 'cristian@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ luna 3', 633333333,'ES33 3333 3333 3333 3333 3333'),
    (4, '44444444D','Dolores Gómez López', 'dolores@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ leo 4', 644444444,'ES44 4444 4444 4444 4444 4444'),
    (5, '55555555E','Álvaro Gómez Pérez', 'alvaro@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ princesa 5', 655555555,'ES55 5555 5555 5555 5555 5555'),
    (6, '66666666F','Pablo Abarca López', 'pablo@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ caoba 6', 666666666,'ES66 6666 6666 6666 6666 6666'),
    (7, '77777777G','Cristina Rubio Garcia', 'caristina@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ villablanca 7', 677777777,'ES77 7777 7777 7777 7777 7777'),
    (8, '88888888H','Pedro García García ', 'pedro@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ sol 8', 688888888,'ES88 8888 8888 8888 8888 8888'),
    (9, '99999999I','Sergio Valle Garcia', 'sergio@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ legazpi 9', 699999999,'ES99 9999 9999 9999 9999 9999'),
    (10, '10101010J','Clara Ávila Gómez ', 'clara@gmail.com', '$2y$10$pMLaxBP9yyWfevfn/5/fWOpRx09AZ/fY70KpWvmTLfGADrEl5fmTO', 'C/ gran via 10', 610101010,'ES10 1010 1010 1010 1010 1010');

INSERT INTO premium (cod_usuario, cuota, descuento) VALUES
    (1, 20, 5),
    (5, 20, 5),
    (8, 20, 5),
    (2, 20, 5);
INSERT INTO ubicacion (coordenadas, cp, localidad, municipio) VALUES
    ('40.402516, -3.641120', 28030, 'Madrid','Madrid'),
    ('40.406333, -3.687845', 28007, 'Madrid','Madrid'),
    ('40.382964, -3.706469', 28026, 'Madrid','Madrid'),
    ('40.432896, -3.729289', 28008, 'Madrid','Madrid'),
    ('40.448626, -3.720824', 28040, 'Madrid','Madrid'),
    ('40.411494, -3.669599', 28007, 'Madrid','Madrid'),
    ('40.387561, -3.645011', 28018, 'Madrid','Madrid'),
    ('40.393666, -3.694656', 28045, 'Madrid','Madrid'),
    ('40.418310, -3.697936', 28014, 'Madrid','Madrid'),
    ('40.429675, -3.686838', 28001, 'Madrid','Madrid');

INSERT INTO estacion (coordenadas) VALUES
    ('40.387561, -3.645011'),
    ('40.393666, -3.694656'),
    ('40.418310, -3.697936'),
    ('40.429675, -3.686838');

INSERT INTO proveedor (cif , nombre, direccion, telefono, detalles) VALUES
    ('A66666666','Patin S.A', 'c/ serrano, 5', 666666661,''),
    ('B77777777','Bicis S.L', 'c/ gris, 6', 677777772,''),
    ('C88888888','Pat S.L ', 'C/ sol 8', 688888883,''),
    ('D99999999','Alquilar S.A','C/ legazpi 9', 699999994,''),
    ('E10101010','Patinetes S.B','C/ gran via 10', 610101015,'');

INSERT INTO producto (cod_producto, coordenadas, cif, tipo, color, bateria) VALUES
    (1, '40.402516, -3.641120', 'A66666666', 'patinete', 'azul', 'verde'),
    (2, '40.406333, -3.687845', 'B77777777', 'bicicleta', 'azul', NULL),
    (3, '40.382964, -3.706469', 'C88888888', 'patinete', 'azul', 'verde'),
    (4, '40.432896, -3.729289', 'D99999999', 'bicicleta', 'azul', NULL),
    (5, '40.448626, -3.720824', 'E10101010', 'patinete', 'verde', 'verde'),
    (6, '40.411494, -3.669599', 'B77777777', 'bicicleta', 'verde', NULL),
    (7, '40.387561, -3.645011', 'E10101010', 'patinete', 'verde', 'naranja'),
    (8, '40.393666, -3.694656', 'B77777777', 'bicicleta', 'verde', NULL),
    (9, '40.418310, -3.697936', 'D99999999', 'bicicleta', 'rojo', NULL),
    (10, '40.429675, -3.686838', 'C88888888', 'patinete', 'rojo', 'verde');

INSERT INTO factura (cod_factura, cod_usuario, cod_producto, fecha, cantidad, descripcion, precio) VALUES
    (1, 2 , 1, '2018-02-01', 1, 'Pago Alquilete', 10),
    (2, 5, 2, '2018-03-21', 1, 'Pago Alquilete', 10),
    (3, 3, 3,'2018-04-15', 1, 'Pago Alquilete', 15),
    (4, 1, 4, '2018-04-10', 1, 'Pago Alquilete', 15),
    (5, 10, 5, '2018-04-10', 1, 'Pago Alquilete', 10),
    (6, 8, 6, '2018-05-11', 1, 'Pago Alquilete', 15),
    (7, 9, 7, '2018-05-04', 1, 'Pago Alquilete', 15),
    (8, 7, 8, '2018-06-01', 1, 'Pago Alquilete', 10),
    (9, 6, 9, '2018-06-11', 1, 'Pago Alquilete', 15),
    (10, 4, 10, '2018-07-12', 1, 'Pago Alquilete', 15);

INSERT INTO pago (cod_usuario, cod_producto, cod_factura, f_ini, f_fin) VALUES
    (1, 1, 1, '2018-02-01', '2018-02-02'),
    (1, 2, 2, '2018-03-08', '2018-03-09'),
    (2, 3, 3, '2018-03-07', '2018-04-07'),
    (3, 4, 4, '2018-04-11', '2018-04-11'),
    (5, 5, 5, '2018-04-14', '2018-04-14'),
    (6, 6, 6, '2018-05-18', '2018-05-18'),
    (6, 7, 7, '2018-06-20', '2018-06-22'),
    (6, 8, 8, '2018-06-28', '2018-06-29'),
    (9, 9, 9, '2018-06-30', '2018-07-01'),
    (10, 10, 10, '2018-07-15', '2018-07-16');

INSERT INTO incidencia (cod_incidencia, cod_producto, motivo,detalles) VALUES
    (1, 5,' Rueda', 'Pinchazo de una rueda'),
    (2, 9, 'Bateria', 'Se rompió la batería'),
    (3, 2, 'Ruedas', 'Pinchazo de las ruedas');
