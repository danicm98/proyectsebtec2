
<?php


//para cerrar sesion

    include_once 'database.php';

    session_start();
	
		$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "priyecto";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}
	
	
	//public function login {

		
			if(isset($_POST['username']) && isset($_POST['password'])   ){
				$username = $_POST['username'];
				//$password = $_POST['password'];

				$db = new Database();
				$query = $db->connect()->prepare('SELECT username,password,rol_id FROM usuarios WHERE username = :username ');
				$query->bindParam(':username', $_POST['username']);
				$query->execute();
				
				$row = $query->fetch(PDO::FETCH_ASSOC);
				
				
				$user=$_POST['username'];
		  
				$usuario = "SELECT * from usuarios WHERE username='$user' ";
				$result=mysqli_query($mysqli,$usuario);
				
				
				if(empty($_POST['password']) && empty($_POST['username']) ){
					
					$message = "Enter data";
					
				}elseif(mysqli_num_rows($result) < 1){
				
				$message = "the user does not exist" ;
					
				}elseif(count($row) > 0 &&   password_verify($_POST['password'], $row['password']) ){
					// validar rol,el tercer campo es el rol
					$rol = $row['rol_id'];
					$_SESSION['rol'] = $rol;

					switch($_SESSION['rol']){
						case 1:
						
							//$admini=explode("/," , '');
							header('location: controller/admin_controller');
						break;
			
						case 2:
						header('location: controller/colab_controller');
						break;
			
						default:
					}
					
				}else{
					// no existe el usuario
					$message = "The username or password is incorrect";
					
				}
			
		$_SESSION['var']= $username;

		}
	
	
	
	
	
	
    

?>
