<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$lugar=$_POST['lugar']; 
$fecha=$_POST['fecha'];
$destino = $correo;


    $sql="INSERT INTO reservaciones VALUES('$correo','$lugar','$fecha')";
    $query= mysqli_query($con,$sql);   
    
    if($query){
        Header("Location:index.html");
        
    }else {
        echo "<h1>F</h1>";
    }
 

   
  
    $subject = "Reserva";
    $headers = 'From: Reserva' . "\r\n" .
                'Reply-to: Reserva' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();


    $contacto = "Tu reserva ha sido confimada con el correo: " .$correo. "\nEn el lugar: " .$lugar. "\nEn la fecha: " .$fecha. "<br>";
    
    if(mail($destino, $subject, $contacto, $headers)){
        echo "<br> Se le ha enviado un correo de confirmación para su reserva ";
    }
    else{
        echo "<br>Su reserva no ha sido exitosa";
    }

?>