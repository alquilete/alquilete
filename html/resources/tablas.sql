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
    detalles VARCHAR(100) NOT NULL,
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

/*
INSERT INTO bebidas (id, nombre, alcohol) VALUES
  (101,'Ron', 'S'),
  (102,'Whisky', 'S'),
  (103,'Absenta', 'S'),
  (104,'Tequila', 'S'),
  (105,'Vino', 'S'),
  (106,'Vodka', 'S'),
  (107,'Baileys', 'S'),
  (201,'Coca cola', 'N'),
  (202,'Zumo piña', 'N'),
  (203,'Fanta', 'N'),
  (204,'Zumo naranja', 'N'),
  (205,'Granadina', 'N'),
  (206,'Lima', 'N');

INSERT INTO combinados (
  nombre, bebidas_alcoholicas, bebidas_no_alcoholicas, tipo
) VALUES
  ('Kalimotxo', 'a:1:{i:0;i:105;}', 'a:1:{i:0;i:202;}', 'coctel'),
  ('Cerebrito', 'a:2:{i:0;i:106;i:1;i:107;}', 'a:2:{i:0;i:205;i:1;i:206;}', 'chupito'),
  ('Zumo multifruta', '', 'a:2:{i:0;i:202;i:1;i:204;}', 'sinalcohol')
  ;
*/
