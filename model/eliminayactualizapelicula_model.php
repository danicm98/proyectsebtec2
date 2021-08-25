<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "priyecto";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}


//guardo toda la informacion de las peliculas en la variable movies
$movies = "SELECT * from movies";




?>