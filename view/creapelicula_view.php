
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>crearpelicula</title>
	<link href="../styles/admin.css" rel="stylesheet" type="text/css">
</head>


<body>
<div name="options">
	
	
	
	
    <h1>Movie creator</h1>
	
	<form action="creapelicula_controller" method="post">
      <label for="">Genre: </label>
      <select name="genre" id="">
        <option value="Action">Action</option>
        <option value="Animation">Animation</option>
        <option value="Comedy">Comedy</option>
        <option value="Drama">Drama</option>
		<option value="Fantasy">Fantasy</option>
		<option value="Horror">Horror</option>
		<option value="Science fiction">Science fiction</option>
	  </select>
      <label for="">Name: </label>
      <input type="text" name="name">
      <label for="">Sinopsis: </label>
      <input type="text" name="sinopsis">
	  
	  <?php if(!empty($message)): ?>
      <center><p> <?= $message ?></p>
    <?php endif; ?>
      <input type="submit" value="Create">
    </form>
	
	
	</div>
	
	<center><a href="admin_controller" class="back" >Back</a><center>
		
	</div>
	
	
	
	
	
	
</body>






</html>