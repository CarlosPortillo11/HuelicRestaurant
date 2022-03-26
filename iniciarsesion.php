<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$clave=$_POST['pass'];

$query= mysqli_query($con,"SELECT *FROM usuarios WHERE correo ='$correo' and clave = '$clave'");
$coincidencia= mysqli_num_rows($query);  //obtiene numero de coincidencias
        
    if ($coincidencia == 1 )  
        {
             header("Location: index.html");
        }
    else
        {
        echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'Login.php' </script>";
        }

?>