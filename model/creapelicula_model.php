<?php

require '../database2.php';

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