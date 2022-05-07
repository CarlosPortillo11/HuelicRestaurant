<?php
    $logUser = "";
    session_start();
    error_reporting(0);
    if($_SESSION['correo'] == ""){

    }
    else{
        $logUser = $_SESSION['correo'];
    }
    $orderNameCon = $_GET['orderName'];
    $orderPriceCon = $_GET['orderPrice'];
    $orderImgCon = $_GET['orderImg'];
 ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        echo "<title>$orderNameCon</title>";
        ?>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="css/confirmationStyles.css">
</head>
<body>
    <?php
        $logUser = "";
        session_start();
        error_reporting(0);
        if($_SESSION['correo'] == ""){

        }
        else{
            $logUser = $_SESSION['correo'];
        }
    ?>
    <div class="contain">
        <header>
            <nav class="w-full mBrown flex items-center">
                <div id="logosName" class="flex w-1/3">
                    <a href="index.php">
                        <img src="resources/images/huelic-white.png" class="" alt="Logo del restaurante" id="restaurantLogo">
                    </a>
                </div>
                <div id="navTabs" class="w-1/3 flex flex-row justify-center">
                    <a href="index.php" class="text-white text-xl font-semibold py-5 px-8">Home</a>
                    <a href="menu.php" class="text-white text-xl font-semibold py-5 px-8">Menú</a>
                    <a href="Reservaciones.php" class="text-white text-xl font-semibold py-5 px-8">Reservación</a>
                    <a href="contact.php" class="text-white text-xl font-semibold py-5 px-8">Contacto</a>
                </div>
                <div id="userTabs" class="w-1/3 h-full flex justify-end items-center">
                    <?php
                        if($logUser == ""){
                            echo "<a href=\"Login.php\" class=\"h-full flex items-center px-3\">";
                                echo "<img src=\"resources/images/profile-user.png\" alt=\"Login\" id=\"userLogin\">";
                            echo "</a>";
                        }else{
                            echo "<a href=\"Login.php\" class=\"h-full flex items-center px-3\">";
                                echo "<p class=\"mx-2 text-white text-lg font-medium\">Bienvenido </p>";
                                echo "<img src=\"resources/images/profile-user.png\" alt=\"Login\" id=\"userLogin\">";
                            echo "</a>";
                        }
                    ?>
                    <a href="index.php" class="h-full flex items-center px-3" id="cartContainer">
                        <img src="resources/images/carro.png" alt="Carrito de compras" id="shopCart">
                        <p class="ml-2 text-white font-semibold">$00.00</p>
                    </a>
                </div>
            </nav>
        </header>
        <section id="orderContainer">
            <?php 
            echo "<form id=\"orderForm\" action=\"confirmación.php?orderName=$orderNameCon&orderPrice=$orderPriceCon&orderImg=$orderImgCon\" method=\"POST\">"
            ?>
                <label for="quantitySelect">Cuantas desea ordenar? </label>
                <select name="quantitySelect" id="quantitySelect">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <input type="submit" value="Confirmar Orden">
            </form>
        </section>
        <?php

            if(isset($_POST['quantitySelect'])){
                $quantityOrderCon = $_POST['quantitySelect'];

                include("conexion.php");
                $conn = conectar();

                if($quantityOrderCon > 0){
                    $totalOrder = round(($orderPriceCon*$quantityOrderCon), 2);
                    $sql = "INSERT INTO ordenes (Correo, Platillo, Cantidad, Total) VALUES ('$logUser', '$orderNameCon', $quantityOrderCon, $totalOrder)";
                    $query=mysqli_query($conn,$sql);

                    if($query){
                        echo "<p>Su orden se realizó, ordenó $quantityOrderCon unidades.</p>";
                    }else{
                        echo "<p>Algo ocurrió con tu orden, intenta de nuevo más tarde.</p>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>