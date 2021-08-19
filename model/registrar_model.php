<?php

$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "priyecto";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

 //traigo mi base de datps
  require '../database2.php';
   require '../database.php';

  $message = '';


	
	


  
  
  
  
  
  
  //compruebo que mis entradas no estén vacías,en el php están los nombres de las variables
  if (!empty($_POST['name']) && !empty($_POST['password']) && $_POST['name']) {
	  
		$user=$_POST['name'];
	  
		$usuario = "SELECT * from usuarios WHERE username='$user' ";
		$result=mysqli_query($mysqli,$usuario);
		
		if(mysqli_num_rows($result) > 0){
			
			$message = "ya existe";
		}else{
			//inserto los datos en la tabla, y le adjudico un rol de administrado como predeterminado ya que solo hay un admin,primero indico el nombre de las variables
	//de la base de datos y luego adjudico valore,los introducidos y el numero que es el rol
    $sql = "INSERT INTO usuarios (username, password , rol_id) VALUES (:name, :password , 2)";
	//creo la variable y hago la cosulta de sql con el metodo prepare  
    $stmt = $conn->prepare($sql);
	//ahora vinculo los parámetros
    $stmt->bindParam(':name', $_POST['name']);
	//encripto la contraseña
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	//vinculo la contraseña
    $stmt->bindParam(':password', $password);

	//si la ejecutamos y no hay errores imprimios el mensaje y lo envio a su pagina personal
    if ($stmt->execute()) {
      $message = 'Successfully created new user';
	  
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
			
		}
			
			
		

	
	  
	 
	
  }