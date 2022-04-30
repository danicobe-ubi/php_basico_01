CREATE DATABASE inyeccion_sql;
CREATE TABLE usuarios(
  id BIGINT AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(20),
  clave varchar(200)
);

INSERT INTO usuarios (nombre, clave) values('gato','miau');
INSERT INTO usuarios (nombre, clave) values('perro','guau');
INSERT INTO usuarios (nombre, clave) values('pato','cuack');

-- INYECCION','SQL'); #SELECT 1