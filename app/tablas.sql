CREATE DATABASE Enlazados;

CREATE TABLE `usuarios` (
    `usuario_id` int(4) NOT NULL AUTO_INCREMENT,
    `nombre` varchar(30) NOT NULL DEFAULT '',
    `apellidos` varchar(40) NOT NULL DEFAULT '',
    `dni` varchar(9) NOT NULL DEFAULT '',
    `usuario_nombre` varchar(30) NOT NULL DEFAULT '',
    `usuario_clave` varchar(32) NOT NULL DEFAULT '',
    `usuario_email` varchar(50) NOT NULL DEFAULT '',
    `usuario_freg` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`usuario_id`)
)


CREATE TABLE `administrador` (`usuario_id` int (4), `administrador_nombre` varchar(30), `administrador_clave` varchar(32));


CREATE TABLE `enlacesUsuarios` (`enlaces_id` int (4) NOT NULL AUTO_INCREMENT, `nombre` varchar(30) NOT NULL, `titulo`varchar(30), `url` varchar(100), PRIMARY KEY (`enlaces_id`));
