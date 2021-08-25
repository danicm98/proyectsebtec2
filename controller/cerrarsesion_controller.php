<?php

session_start();
    
    if (isset($_SESSION["admin"])){

        unset($_SESSION["admin"]);

    }

    if (isset($_SESSION["user"])){

        unset($_SESSION["user"]);

    }

   
    
    session_destroy();
	//esta puesto admin.php porque si cieerro sesión y vuelvpo a cargar admin.php por un codigo de antes me vuelve a index.php
    header("Location: ../index");


?>


