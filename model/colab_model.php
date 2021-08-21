<?php
session_start();

if(!isset($_SESSION['rol'])){
    header('location: login');
}else{
    if($_SESSION['rol'] != 2){
		
        header('location: login');
    }
}


$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "priyecto";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}









?>