<?php
session_start();
include("conexion.php");
$con=conectar();

$body = file_get_contents('php://input');
$data = json_decode($body);
$correo= $data->email;

$query= mysqli_query($con,"SELECT *FROM usuarios WHERE Correo ='$correo'");
$coincidencia= mysqli_num_rows($query);  //obtiene numero de coincidencias
        
    if ($coincidencia == 1 )  
        {
            $_SESSION['correo'] = $correo;
            echo json_encode([
                "location" => "index.php"
            ]);
        }
    else
        {
            echo json_encode(["error"=>"Error feo"]);

        }
?>