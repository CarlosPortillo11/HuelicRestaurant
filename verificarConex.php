<?php
    require("conexion.php");

    $conex = ConectarDB();

    if($conex){
        echo "Conexión exitosa";
    }
    else{
        echo "Conexión fallida";
    }
?>