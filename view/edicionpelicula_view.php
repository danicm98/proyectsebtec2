<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>crearpelicula</title>
	<link href="../styles/admin.css" rel="stylesheet" type="text/css">
</head>


<body>
    <h1>Editar peícula</h1>
	
	<?php
	
	$old="SELECT * from movies WHERE id = '$id'";
	$result=mysqli_query($mysqli,$old);
	$mostrar=mysqli_fetch_array($result)
	
	
	
	
	?>
	
	
	
	<form action="edicion.php" method="post">
	<!--creo otro imput con id para pasarlo al archivo que modifica y enviar el id   -->
		<input type="hidden" value ="<?php echo $mostrar['id'];?>"    name="id">

      <label for="">Genre: </label>
      <select value="<?php echo $mostrar['genre'];?> " name="genre"   id="">
		
        <option value="Action">Action</option>
        <option value="Animation">Animation</option>
        <option value="Comedy">Comedy</option>
        <option value="Drama">Drama</option>
		<option value="Fantasy">Fantasy</option>
		<option value="Horror">Horror</option>
		<option value="Science fiction">Science fiction</option>
	  </select>
      <label for="">Name: </label>
      <input type="text" value ="<?php echo $mostrar['name'];?>"  placeholder="<?php echo $mostrar['name']; ?>" name="name">
      <label for="">Sinopsis: </label>
      <input type="text" value ="<?php echo $mostrar['sinopsis'];?>"  placeholder="<?php echo $mostrar['sinopsis']; ?>" name="sinopsis">
      <input type="submit" value="Actualizar" class="container_submit">
    </form>
	
	
	
	<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
	
	
</body>






</html>

