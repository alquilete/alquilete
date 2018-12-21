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
    direccion VARCHAR(50) NOT NULL,
    telefono INT(9) NOT NULL,
    datos_bancarios VARCHAR(100) NOT NULL,
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

CREATE TABLE suelta (
    coordenadas VARCHAR(50) NOT NULL,
    PRIMARY KEY (coordenadas),
    FOREIGN KEY (coordenadas) REFERENCES ubicacion(coordenadas)  on DELETE CASCADE
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
    color VARCHAR(10) NOT NULL,
    PRIMARY KEY (cod_producto, coordenadas),
    FOREIGN KEY (coordenadas) REFERENCES ubicacion(coordenadas) on DELETE CASCADE,
    FOREIGN KEY (cif) REFERENCES proveedor(cif) on DELETE CASCADE
);


CREATE TABLE bicicleta (
    cod_producto MEDIUMINT NOT NULL,
    coordenadas VARCHAR(50) NOT NULL,
    PRIMARY KEY (cod_producto, coordenadas),
    FOREIGN KEY (cod_producto, coordenadas) REFERENCES producto(cod_producto, coordenadas) on DELETE CASCADE
);

CREATE TABLE patinete (
    cod_producto MEDIUMINT NOT NULL,
    coordenadas VARCHAR(50) NOT NULL,
    bateria VARCHAR(50) NOT NULL,
    PRIMARY KEY (cod_producto, coordenadas),
    FOREIGN KEY (cod_producto, coordenadas) REFERENCES producto(cod_producto, coordenadas) on DELETE CASCADE
);

CREATE TABLE factura (
    cod_factura MEDIUMINT NOT NULL AUTO_INCREMENT,
    cod_usuario MEDIUMINT NOT NULL,
    cod_producto MEDIUMINT NOT NULL,
    coordenadas VARCHAR(50) NOT NULL,
    fecha DATE NOT NULL,
    cantidad MEDIUMINT NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    descripcion VARCHAR(50) NOT NULL,
    precio MEDIUMINT NOT NULL,
    PRIMARY KEY (cod_factura),
    FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario) on DELETE CASCADE,
    FOREIGN KEY (cod_producto, coordenadas) REFERENCES producto(cod_producto, coordenadas) on DELETE CASCADE
);

CREATE TABLE pago (
    cod_usuario MEDIUMINT NOT NULL,
    cod_producto MEDIUMINT NOT NULL,
    coordenadas VARCHAR(50) NOT NULL,
    cod_factura MEDIUMINT NOT NULL,
    f_ini DATE NOT NULL,
    f_fin DATE NOT NULL,
    PRIMARY KEY (cod_usuario, cod_producto, coordenadas, cod_factura),
    FOREIGN KEY (cod_usuario) REFERENCES usuario(cod_usuario) on DELETE CASCADE,
    FOREIGN KEY (cod_producto, coordenadas) REFERENCES producto(cod_producto, coordenadas) on DELETE CASCADE,
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


INSERT INTO usuario (cod_usuario, dni, nombre, email, direccion, telefono, datos_bancarios) VALUES
    (1, '11111111A','Jose García Pérez', 'jose@gmail.com','C/ pez 25', 611111111,'ES11 1111 1111 1111 1111 1111'),
    (2, '22222222B','María López López', 'maria@gmail.com','C/ sol 2', 622222222,'ES22 2222 2222 2222 2222 2222'),
    (3, '33333333C','Cristian Rubio Pérez', 'cristian@gmail.com','C/ luna 3', 633333333,'ES33 3333 3333 3333 3333 3333'),
    (4, '44444444D','Dolores Gómez López', 'dolores@gmail.com','C/ leo 4', 644444444,'ES44 4444 4444 4444 4444 4444'),
    (5, '55555555E','Álvaro Gómez Pérez', 'alvaro@gmail.com','C/ princesa 5', 655555555,'ES55 5555 5555 5555 5555 5555'),
    (6, '66666666F','Pablo Abarca López', 'pablo@gmail.com','C/ caoba 6', 666666666,'ES66 6666 6666 6666 6666 6666'),
    (7, '77777777G','Cristina Rubio Garcia', 'caristina@gmail.com','C/ villablanca 7', 677777777,'ES77 7777 7777 7777 7777 7777'),
    (8, '88888888H','Pedro García García ', 'pedro@gmail.com','C/ sol 8', 688888888,'ES88 8888 8888 8888 8888 8888'),
    (9, '99999999I','Sergio Valle Garcia', 'sergio@gmail.com','C/ legazpi 9', 699999999,'ES99 9999 9999 9999 9999 9999'),
    (10, '10101010J','Clara Ávila Gómez ', 'clara@gmail.com','C/ gran via 10', 610101010,'ES10 1010 1010 1010 1010 1010');

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

INSERT INTO suelta (coordenadas) VALUES
    ('40.402516, -3.641120', 28030, 'Madrid','Madrid'),
    ('40.406333, -3.687845', 28007, 'Madrid','Madrid'),
    ('40.382964, -3.706469', 28026, 'Madrid','Madrid'),
    ('40.432896, -3.729289', 28008, 'Madrid','Madrid'),
    ('40.448626, -3.720824', 28040, 'Madrid','Madrid'),
    ('40.411494, -3.669599', 28007, 'Madrid','Madrid');


INSERT INTO estacion (coordenadas VALUES
    ('40.387561, -3.645011', 28018, 'Madrid','Madrid'),
    ('40.393666, -3.694656', 28045, 'Madrid','Madrid'),
    ('40.418310, -3.697936', 28014, 'Madrid','Madrid'),
    ('40.429675, -3.686838', 28001, 'Madrid','Madrid');                  

INSERT INTO proveedor (cif , nombre, direccion, telefono, detalles) VALUES
    ('A66666666','Patin S.A', 'c/ serrano, 5', 666666661,''),
    ('B77777777','Bicis S.L', 'c/ gris, 6','C/ villablanca 7', 677777772,''),
    ('C88888888','Pat S.L ', 'pedro@gmail.com','C/ sol 8', 688888883,''),
    ('D99999999','Alquilar S.A', 'sergio@gmail.com','C/ legazpi 9', 699999994,''),
    ('E10101010','Patinetes S.B', 'clara@gmail.com','C/ gran via 10', 610101015,'');

INSERT INTO producto (cod_producto, coordenadas, cif, color) VALUES
    (1, '40.402516, -3.641120', 'A66666666'),
    (2, '40.406333, -3.687845', 'B77777777'),
    (3, '40.382964, -3.706469', 'C88888888'),
    (4, '40.432896, -3.729289', 'D99999999'),
    (5, '40.448626, -3.720824', 'E10101010'),
    (6, '40.411494, -3.669599', 'B77777777'),
    (7, '40.387561, -3.645011', 'E10101010'),
    (8, '40.393666, -3.694656', 'B77777777'),
    (9, '40.418310, -3.697936', 'D99999999'),
    (10, '40.429675, -3.686838', 'C88888888');

INSERT INTO bicicleta (cod_producto, coordenadas) VALUES
    (2, '40.406333, -3.687845')
    (4, '40.432896, -3.729289'),
    (8, '40.393666, -3.694656'),
    (9, '40.418310, -3.697936'),
    (6, '40.411494, -3.669599');

INSERT INTO patinete (cod_producto, coordenadas, bateria) VALUES
    (1, '40.402516, -3.641120','B-111'),
    (3, '40.382964, -3.706469','C-123'),
    (5, '40.448626, -3.720824','D-456'),
    (7, '40.387561, -3.645011','E-789'),
    (10, '40.429675, -3.686838','F-321');

INSERT INTO factura (cod_factura, cod_usuario, cod_producto, coordenadas, fecha, cantidad, tipo, descripcion, precio) VALUES 
    (1, 2 , 1,'40.402516, -3.641120', '01/12/2018', 1, 'bici', 'Bicileta', 10),
    (2, 5, 2, '40.406333, -3.687845', '05/12/2018', 1, 'patin', 'Patinete', 10),
    (3, 3, 3, '40.382964, -3.706469','07/11/2018', 1, 'bici', 'Bicileta', 15),
    (4, 1, 4, '40.432896, -3.729289', '05/12/2018', 1, 'patin', 'Patinete', 15),
    (5, 10, 5, '40.448626, -3.720824', '02/11/2018', 1, 'bici', 'Bicileta', 10),
    (6, 8, 6, '40.411494, -3.669599', '12/12/2018', 1, 'patin', 'Patinete', 15),
    (7, 9, 7, '40.387561, -3.645011', '20/12/2018', 1, 'patin', 'Patinete', 15),
    (8, 7, 8, '40.393666, -3.694656', '15/12/2018', 1, 'bici', 'Bicileta', 10),
    (9, 6, 9, '40.418310, -3.697936', '09/11/2018', 1, 'patin', 'Patinete', 15),
    (10, 4, 10, '40.429675, -3.686838', '15/11/2018', 1, 'bici', 'Bicileta', 15);

INSERT INTO pago (cod_usuario, cod_producto, coordenadas, cod_factura, f_ini, f_fin) VALUES
    (1, 1, 2,'40.402516, -3.641120', '01/12/2018', '02/12/2018'),
    (2, 2, 5, '40.406333, -3.687845', '05/12/2018', '06/12/2018'),
    (3, 3, 3, '40.382964, -3.706469', '07/11/2018', '07/11/2018'),
    (4, 4, 1, '40.432896, -3.729289', '05/12/2018', '05/12/2018'),
    (5, 5, 10, '40.448626, -3.720824', '02/11/2018', '03/11/2018'),
    (6, 6, 8, '40.411494, -3.669599', '12/12/2018', '13/12/2018'),
    (7, 7, 9, '40.387561, -3.645011', '20/12/2018', '20/12/2018'),
    (8, 8, 7, '40.393666, -3.694656', '15/12/2018', '15/12/2018'),
    (9, 9, 6, '40.418310, -3.697936', '09/11/2018', '09/11/2018'),
    (10, 10, 4, '40.429675, -3.686838', '15/11/2018', '16/11/2018')

INSERT INTO incidencia (cod_incidencia, cod_producto, motivo,detalles) VALUES
    (1, 5,' Rueda', 'Pinchazo de una rueda'),
    (2, 9, 'Bateria', 'Se rompió la batería'),
    (3, 2, 'Ruedas', 'Pinchazo de las ruedas');
   