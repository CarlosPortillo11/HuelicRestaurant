<?php
session_start();
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$clave=$_POST['pass'];
$clave2=$_POST['pass2'];



if($_POST["pass"]!=$_POST["pass2"]){
    $_SESSION['error']= true;
    header("Location: Registrarse.php");
}else{
    $sql="INSERT INTO usuarios (Correo,Clave) VALUES('$correo','$clave')";
    $query=mysqli_query($con,$sql);
    
    if($query){
        Header("Location: Login.php");
        
    }else {
        $_SESSION['error']= true;
         header("Location: Registrarse.php");
    }
}    
?>