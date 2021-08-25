<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="../styles/eliminaruser.css" rel="stylesheet" type="text/css">
    
   
</head>
<body>
    
    
<div class="delete_users">
<center><h1>Delete user<a href="../controller/admin_controller" class="back" >Back</a></h1><center>
<br>

<?php
require_once ('../database2.php');
$QuerySql      = ("SELECT * FROM usuarios ORDER BY id");
$resultadoQuerySql  = mysqli_query($con, $QuerySql);
?>



<?php

//recorro y muestro los usuarios

	while ($dataRegistros = mysqli_fetch_assoc($resultadoQuerySql)) { ?>
		<!--Este envia la id para ocultarla,tengo que hacerlo siempre porque es por cada usuario-->
		<div class="registro" id="registro<?php echo  $dataRegistros['id']; ?>">
			<div><h1 class="drop__name"> Name: <?php echo $dataRegistros['username']; ?> </h1></div>
				<!--Este muestra la id-->
				<div class="circulo"><h2>Id: <?php echo $dataRegistros['id']; ?> </h2></div>            
			

				<!--Este envia la id cuando se hace click en barra-->
			<div class="barra" id="<?php echo $dataRegistros['id']; ?>">
					<a href="#" class="boton" class="editar">
						
						Delete
					</a>
			</div>

		</div>
			<?php } ?>








</div>

     


<script type="text/javascript" charset="utf-8" src="../assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
//es una funcion que se ejecuta cuando se carga la pagina completamente,siempre es así
$(document).ready(function() {
	//cuando hago click en la clase barra rescato el id
$( ".barra" ).click(function() {
	//cojo el valor del id
    var id = $(this).attr("id");
	//lo coloco en una variable
    var dataString = 'id='+ id;
	//envio el formulario a este archivo
    url = "Delete.php";
        $.ajax({
            type: "POST",
            url: url,
            data: dataString,
            success: function(data)
            {
				//la hago desaparecer para no tener que actualizar y le paso el id de la clase registro y lo elimina de forma dinamica y no hay que recargar la pagina
                $("#registro" + id).hide();
              
                $('#resp').html(data);
            }
        }); 
    }); 
});
</script>
</body>
</html>

