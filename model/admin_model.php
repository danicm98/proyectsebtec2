<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: controller/index.controller');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: controller/index.controller');
        }
    }
?>