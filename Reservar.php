<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$lugar=$_POST['lugar']; 
$fecha=$_POST['fecha'];

    $sql="INSERT INTO reservaciones VALUES('$correo','$lugar','$fecha')";
    $query= mysqli_query($con,$sql);   
    
    if($query){
        Header("Location:index.html");
        
    }else {
        echo "<h1>F</h1>";
    }
 
?>