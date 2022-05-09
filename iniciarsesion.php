<?php
session_start();
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$clave=$_POST['pass'];

$query= mysqli_query($con,"SELECT *FROM usuarios WHERE Correo ='$correo' and Clave = '$clave'");
$coincidencia= mysqli_num_rows($query);  //obtiene numero de coincidencias
        
    if ($coincidencia == 1 )  
        {
            $_SESSION['correo'] = $correo;
             header("Location: index.php");
        }
    else
        {
         $_SESSION['error']= true;
         header("Location: Login.php");
        }

?>