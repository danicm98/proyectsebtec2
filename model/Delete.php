<?php
include('../database2.php');
$idRegistros = $_REQUEST['id'];

$DeleteRegistro = ("DELETE FROM usuarios WHERE id= '".$idRegistros."' ");
mysqli_query($con, $DeleteRegistro);

//header("Location: ..model/eliminaruser.php");



?>