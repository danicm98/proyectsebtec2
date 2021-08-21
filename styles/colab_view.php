<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
   
	<link href="../styles/colab.css" rel="stylesheet" type="text/css">
    <title>Colab</title>
</head>
<body>
    <center><h1>Collaborator <a href="cerrarsesion_controller" class="back" >Sign out </a> </h1>
	
	<div class="vistapeliculas">
	
	
	<?php 
		$sql="SELECT * from movies";
		$result=mysqli_query($mysqli,$sql);
				while($mostrar=mysqli_fetch_array($result)) { ?>
				
						<div class="peliculas">
							
							<div class="peli"> <?php echo $mostrar['name']; ?></div>
							
							
							<a href="pelicula_controller?id=<?php echo $mostrar['id'];?>"  
								class = "boton">Go to the film
								</a>
						
						</div>
							
							
							 <br>  <br>  <br>  <br> 
				<?php } ?>
	
	
	
	
	
	
	
	
	</div>
	
	
	
	
	
</body>
</html>