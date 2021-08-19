<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'priyecto';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

$con = mysqli_connect($server, $username, $password) or die("Conexion error");
mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");
$db = mysqli_select_db($con, $database) or die("Data base error");

?>
