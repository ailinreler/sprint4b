<?php

require "../conexion/conn.php";

$ejecutar = 'no';

$query = $db->prepare("CREATE TABLE usuario (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  usuario VARCHAR(80) NOT NULL,
  contrasenia VARCHAR(60) NOT NULL,
  mail VARCHAR(100) NOT NULL,
  telefono INT(11) NULL DEFAULT NULL,
  avatar VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (id))");

if ($ejecutar == 'si') {
  $query->execute();
}
