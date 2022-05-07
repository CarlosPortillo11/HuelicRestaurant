<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$clave=$_POST['pass'];
$clave2=$_POST['pass2'];



if($_POST["pass"]!=$_POST["pass2"]){
    echo'<script type="text/javascript"> 
            alert("Las claves no coinciden");
            window.location.href="Registrarse.php";
        </script>';
}else{
    $sql="INSERT INTO usuarios (Correo,Clave) VALUES('$correo','$clave')";
    $query=mysqli_query($con,$sql);
    
    if($query){
        Header("Location: Login.php");
        
    }else {
        echo "<h1>Intentelo de nuevo</h1>";
    }
}    
?>