

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
	<link href="styles/login.css" rel="stylesheet" type="text/css">
    <title>Login</title>
</head>
<body>

	<h1>Register</h1>
	
	
    <form action="#" method="POST">
        Username: <br/><input type="text" name="username"><br/>
        Password: <br/><input type="password" name="password">
		
		<?php if(!empty($message)): ?>
			<center><p> <?= $message ?></p><center>
		<?php endif; ?>
		
		
		
        <input type="submit" value="Iniciar sesión">
    </form>

	<br>
	<center><a href="controller/registrar_controller" class="boton">Sign up</a><center>
	
	
    
	
	
</body>
</html>