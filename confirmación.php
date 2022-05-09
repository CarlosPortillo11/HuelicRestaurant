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
        <link rel="stylesheet" href="css/confirmation_Styles.css">
        <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'coffee': '#664638',
                        'lightCoffee': '#897759'
                    }
                }
            }
        }
    </script>
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
                    <a href="Carrito.php" class="h-full flex items-center px-3" id="cartContainer">
                        <img class="mx-2" src="resources/images/carro.png" alt="Carrito de compras" id="shopCart">
                    </a>
                    <?php
                        if(!$logUser==""){
                            echo"<form class=\"h-full flex items-center\" id=\"logged_out\" action=\"unlog.php\" method=\"POST\">";
                            echo"<input type=\"submit\" value=\"Cerrar sesión\" id=\"log_out\" class=\"h-full cursor-pointer hover:bg-lightCoffee\" style=\"font-weight:bold; color:white; padding:12px;\"/>";
                            echo"</form>";
                        }
                    ?>
                </div>
            </nav>
        </header>
        <section id="orderContainer">
            <div class="flex flex-col mx-20 my-8 p-6 border-8 border-coffee rounded-xl">
                <div class="flex justify-between tracking-wide border-b-4 border-gray-400 rounded">
                    <?php
                        echo "<h1 class=\"text-4xl font-semibold pl-2\">$orderNameCon</h1>";
                        echo "<h1 class=\"text-4xl font-semibold pr-2\">$$orderPriceCon</h1>";
                    ?> 
                </div>
                <div class="flex w-full pt-8 pb-4">
                    <div class="w-1/2 flex flex-col">
                        <?php
                            echo "<img class=\"orderImg rounded-lg border-8 border-coffee\" src=\"resources/images/MenuImgs/$orderImgCon.jpg\" alt=\"$orderNameCon\">";
                        ?>
                    </div>
                    <div class="w-fit h-fit mx-auto my-auto flex flex-col bg-white rounded-xl justify-center items-center border border-coffee">
                        <?php 
                        echo "<form id=\"orderForm\" class=\"flex flex-col justify-center items-center\"
                         action=\"confirmación.php?orderName=$orderNameCon&orderPrice=$orderPriceCon&orderImg=$orderImgCon\" method=\"POST\">"
                        ?>
                            <label class="text-2xl font-medium my-8 mx-20" for="quantitySelect">¿Cuánto deseas ordenar? </label>
                            <div class="w-full flex items-center mb-8 justify-center">
                                <select class="w-1/5 text-lg text-center font-semibold ml-2 border-4 border-gray-400 rounded" name="quantitySelect" id="quantitySelect">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <input class="ordenButton text-center px-4 py-2 cursor-pointer ml-8" type="submit" value="Confirmar Orden">
                            </div>
                        </form>
                        <?php
                            if(isset($_POST['quantitySelect'])){
                                $quantityOrderCon = $_POST['quantitySelect'];

                                include("conexion.php");
                                $conn = conectar();

                                if($quantityOrderCon > 0){
                                    $totalOrder = round(($orderPriceCon*$quantityOrderCon), 2);

                                    switch($logUser){
                                        case "":
                                            echo "<div class=\"w-9/12 bg-red-600 py-3 px-6 text-white font-medium rounded flex justify-center items-center mb-8\">";
                                                echo "<img class=\"w-8\" src=\"resources/images/incorrecto.png\" alt=\"Order Error\">";
                                                echo "<p class=\"mx-2 text-center tracking-wide\">Algo ocurrió con tu orden, ingresa en tu cuenta o intenta más tarde.</p>";
                                                echo "<a href=\"menu.php\" id=\"menuArrow\" class=\"w-fit h-fit p-2 bg-transparent rounded border-2 border-white cursor-pointer\">";
                                                    echo "<img class=\"w-8\" src=\"resources/images/right-arrow.png\" alt=\"Ir al menú\">";
                                                echo "</a>";
                                            echo "</div>";
                                        break;
                                        default:
                                            $sql = "INSERT INTO ordenes (Correo, Platillo, Cantidad, Precio, Total) VALUES ('$logUser', '$orderNameCon', $quantityOrderCon, $orderPriceCon, $totalOrder)";
                                            $query=mysqli_query($conn,$sql);
                                            
                                            if($query){
                                                echo "<div class=\"w-9/12 bg-green-600 py-3 px-6 text-white font-medium rounded flex justify-center items-center mb-8\">";
                                                    echo "<img class=\"w-8\" src=\"resources/images/carro.png\" alt=\"Order Made\">";
                                                    echo "<p class=\"mx-2 text-center tracking-wide\">Tu orden se registró completamente, puedes regresar al menú.</p>";
                                                    echo "<a href=\"menu.php\" id=\"menuArrow\" class=\"w-fit h-fit p-2 bg-transparent rounded border-2 border-white cursor-pointer\">";
                                                        echo "<img class=\"w-8\" src=\"resources/images/right-arrow.png\" alt=\"Ir al menú\">";
                                                    echo "</a>";
                                                echo "</div>";
                                            }else{
                                                echo "<div class=\"w-9/12 bg-red-600 py-3 px-6 text-white font-medium rounded flex justify-center items-center mb-8\">";
                                                    echo "<img class=\"w-8\" src=\"resources/images/incorrecto.png\" alt=\"Order Error\">";
                                                    echo "<p class=\"mx-2 text-center tracking-wide\">Algo ocurrió con tu orden, ingresa en tu cuenta o intenta más tarde.</p>";
                                                    echo "<a href=\"menu.php\" id=\"menuArrow\" class=\"w-fit h-fit p-2 bg-transparent rounded border-2 border-white cursor-pointer\">";
                                                        echo "<img class=\"w-8\" src=\"resources/images/right-arrow.png\" alt=\"Ir al menú\">";
                                                    echo "</a>";
                                                echo "</div>";
                                            }
                                        break;
                                    }
                                }
                                
                                /*$sql = "INSERT INTO ordenes (Correo, Platillo, Cantidad, Total) VALUES ('$logUser', '$orderNameCon', $quantityOrderCon, $totalOrder)";
                                $query=mysqli_query($conn,$sql);

                                if($query){
                                    echo "<div class=\"w-9/12 bg-green-600 py-3 px-6 text-white font-medium rounded flex justify-center items-center mb-8\">";
                                        echo "<img class=\"w-8\" src=\"resources/images/carro.png\" alt=\"Order Made\">";
                                        echo "<p class=\"mx-2 text-center tracking-wide\">Tu orden se registró completamente, puedes regresar al menú.</p>";
                                        echo "<a href=\"menu.php\" id=\"menuArrow\" class=\"w-fit h-fit p-2 bg-transparent rounded border-2 border-white cursor-pointer\">";
                                            echo "<img class=\"w-8\" src=\"resources/images/right-arrow.png\" alt=\"Ir al menú\">";
                                        echo "</a>";
                                    echo "</div>";
                                }else{
                                    echo "<div class=\"w-9/12 bg-red-600 py-3 px-6 text-white font-medium rounded flex justify-center items-center mb-8\">";
                                        echo "<img class=\"w-8\" src=\"resources/images/incorrecto.png\" alt=\"Order Error\">";
                                        echo "<p class=\"mx-2 text-center tracking-wide\">Algo ocurrió con tu orden, ingresa en tu cuenta o intenta más tarde.</p>";
                                        echo "<a href=\"menu.php\" id=\"menuArrow\" class=\"w-fit h-fit p-2 bg-transparent rounded border-2 border-white cursor-pointer\">";
                                            echo "<img class=\"w-8\" src=\"resources/images/right-arrow.png\" alt=\"Ir al menú\">";
                                        echo "</a>";
                                    echo "</div>";
                                }/**/
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <footer class="w-full bg-black">
            <p class="font-semibold text-white text-xl text-center py-5">Si deseas ordenar a través de nuestro call center llama al (503) 2257-7777</p>
            <div class="w-full py-2 flex">
                <div class="w-1/3 flex justify-center py-4 border-r-2 border-gray">
                    <a href="Login.php">
                        <p class="text-white hover:underline hover:underline-offset-1">Cuenta</p>
                    </a>
                </div>
                <div class="w-1/3 flex justify-center py-4 border-r-2 border-gray">
                    <a href="">
                        <p class="text-white hover:underline hover:underline-offset-1">Servicio al cliente</p>
                    </a>
                </div>
                <div class="w-1/3 flex justify-center py-4 ">
                    <a href="contact.php">
                        <p class="text-white hover:underline hover:underline-offset-1">Contáctanos</p>
                    </a>
                </div>
            </div>
            <p class="mt-10 mx-12 font-semibold text-sm text-white text-center">
                © 2022 Huelic Restaurant, LLC. Todos los derechos reservados. El nombre Huelic, logos, imágenes y marcas relacionadas son marcas registradas of Huelic, Inc. para Estados Unidos y Alimentos y Turismo S.A. de C.V. para El Salvador.
                <br><br>
                Disponibilidad de masas, áreas de cobertura, horarios, garantía de 30 minutos pueden variar por área. Muchas promociones descritas y ofrecidas en este Sitio Web son exclusivamente para la compra en línea.
                <br><br>
                Para pedidos pagados con tarjeta de crédito, el dueño de la tarjeta deberá estar presente al momento de recibir el pedido para firmar el mismo y presentar su tarjeta de crédito y DUI.
            </p>
            <div class="mt-12 pb-3 flex justify-between">
                <div class="w-1/6 flex justify-around items-center">
                    <img class="socialLogo" src="resources/images/whatsapp.png" alt="Whatsapp Logo">
                    <img class="socialLogo" src="resources/images/facebook.png" alt="Facebook Logo">
                    <img class="socialLogo" src="resources/images/twitter.png" alt="Twitter Logo">
                </div>
                <div class="w-1/6 flex justify-center">
                    <img class="footerLogo" src="resources/images/huelic-white.png" alt="Logo del restaurante" id="restaurantLogo">
                </div>
                <div class="w-1/6 flex justify-around items-center pr-2">
                    <img class="creditLogo" src="resources/images/mc_symbol_opt_63_1x.png" alt="Mastercard Logo">
                    <img class="creditLogo" src="resources/images/american-express.png" alt="American Express Logo">
                    <img class="creditLogo" src="resources/images/visa.png" alt="Visa Logo">
                </div>
            </div>
        </footer>
    </div>
</body>
</html>