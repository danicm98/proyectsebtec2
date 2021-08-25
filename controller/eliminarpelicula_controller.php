<?php

	require '../database2.php';

	$id = $_GET['id'];
	
	$sql = "DELETE FROM movies WHERE id = '$id'";
	$resultado = $conn->query($sql);
	
	if($resultado){
		header("Location: eliminayactualizapelicula_controller");
	}else{
		echo "ERROR";
	}
	
?>