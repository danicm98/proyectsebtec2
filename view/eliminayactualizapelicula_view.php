
<!DOCTYPE html>
<html>
	


	<head>
		<meta charset="UTF-8">
		
		<script src="js/jquery-3.1.1.min.js"></script>
		
		<link href="../styles/admin.css" rel="stylesheet" type="text/css">
	</head>
	
<body>


	<div class="row table-responsive">
		<center><table class="tabledeleteedit">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Genre</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			
			<tbody>
			
			<?php 
		$sql="SELECT * from movies";
		$result=mysqli_query($mysqli,$sql);
				while($mostrar=mysqli_fetch_array($result)) { ?>
							<tr>
							<center>	<td><?php echo $mostrar['id']; ?></td>
								<td><?php echo $mostrar['name']; ?></td>
								<td><?php echo $mostrar['genre']; ?></td>
								<td>
								<a href="edicionpelicula_controller?id=<?php echo $mostrar['id'];?>"  
								class = "Editar">Edit
								</a></td>
								<td>
								<a href="eliminarpelicula_controller?id=<?php echo $mostrar['id'];?>"  
								class = "Eliminar">Delete
								</a></td>
								<td>
								<a href="../img/uploadimage_controller?id=<?php echo $mostrar['id'];?>"  
								class = "Eliminar">upload image
								</a></td>
							</tr>
				<?php } ?>
				
				
			
			</tbody>
		
		
		
		</table>
	</div>
	
	</div>
	
	<center><a href="admin_controller" class="back" >Back</a><center>
		
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	

</body>
</html>