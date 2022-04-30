CREATE DATABASE practica_07;
(CREATE TABLE usuarios(
id BIGINT AUTO_INCREMENT PRIMARY KEY,
usuario VARCHAR(50) UNIQUE,
clave VARCHAR(50) UNIQUE
)
INSERT INTO usuarios (usuario, clave) VALUES ('alberto', '4lb3rt0');
INSERT INTO usuarios (usuario, clave) VALUES ('roxana', 'clave123');
INSERT INTO usuarios (usuario, clave) VALUES ('mabel', 'password321');
INSERT INTO usuarios (usuario, clave) VALUES ('celeste', 'fibo11235');