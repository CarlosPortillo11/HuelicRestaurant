<?php
    session_start();
    $_SESSION['correo'] = "";

    echo "Hola Buenas KK";

    if($_SESSION['correo'] == ""){
        Header("Location:index.php");
    }
?>