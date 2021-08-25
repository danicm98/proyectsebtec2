<?php

require '../database2.php';

$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "priyecto";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}
$id = $_GET['id'];


 if (!empty($_POST['genre']) && !empty($_POST['name']) && !empty($_POST['sinopsis']) ) {
	 
	 $sql = "INSERT INTO movies (name, sinopsis , genre) VALUES (:name, :sinopsis , :genre )";
	 $stmt = $conn->prepare($sql);
	 $stmt->bindParam(':name', $_POST['name']);
	 $stmt->bindParam(':sinopsis', $_POST['sinopsis']);
	 $stmt->bindParam(':genre', $_POST['genre']);
	 
	if ($stmt->execute()) {
      $message = 'Successfully created new movie';
	  
    } else {
      $message = 'ERROR';
    }
	 
	 
	 
	 
	 
 }





?>