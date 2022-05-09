<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Carrito.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Huelic Restaurant</title>
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

        include("conexion.php");
        $conn=conectar();

        $query = "SELECT * FROM Ordenes WHERE Correo = '$logUser'";
        $request = mysqli_query($conn,$query);

        $totalAmount = 0;
    ?>
        <!--header section-->
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
                            echo"<form class=\"h-full flex items-center px-3\" id=\"logged_out\" method=\"POST\">";
                            echo"<input type=\"submit\" value=\"Cerrar sesión\" id=\"log_out\" class=\"mx-2\" style=\"font-weight:bold; color:white; padding:5px;\"/>";
                            echo"</form>";
                        }
                    ?>
                </div>
            </nav>
        </header>
        <!--Content section-->
        
        <main class="content">
            <section class="cart_confirm">
                <section class="main_text">
                    <h1>Carrito de compras</h1>
                </section>
                <table class="sub_content">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                    </tr>
                    <?php while($result = mysqli_fetch_array($request)){ ?>
                        <tr>
                            <td> <?php echo $result['Platillo'] ?> </td>
                            <td> <?php echo $result['Cantidad'] ?> </td>
                            <td> $<?php echo $result['Precio'] ?> </td>
                            <td> $<?php echo $result['Total'] ?> </td>
                        </tr>
                    <?php 
                        $totalAmount += bcdiv($result['Total'], '1', 2);
                    } ?>
                    
                </table><hr>
                <section class="purchase">
                    <form action="https://www.paypal.com/signin" target="_blank">
                        <section>
                            <label class="summary">Subtotal:</label>
                            <label class="summary"> $<?php echo $totalAmount ?> </label>
                        </section>
                        <section>
                            <label class="summary">Total:</label>
                            <label class="summary"> $<?php echo $totalAmount ?> </label>
                        </section>
                        <input type="submit" value="Proceder al pago" id="facturar" class="w-2/3 mx-auto mt-1 button"/>
                    </form>
                </section>
            </section>
        </main>

        <!--footer section-->
        <footer class="w-full bg-black">
            <p class="font-semibold text-white text-xl text-center py-5">Si deseas ordenar a través de nuestro call center llama al (503) 2257-7777</p>
            <div class="w-full py-2 flex">
                <div class="w-1/3 flex justify-center py-4 border-r-2 border-gray">
                    <a href="Login.php">
                        <p class="text-white">Cuenta</p>
                    </a>
                </div>
                <div class="w-1/3 flex justify-center py-4 border-r-2 border-gray">
                    <a href="">
                        <p class="text-white">Servicio al cliente</p>
                    </a>
                </div>
                <div class="w-1/3 flex justify-center py-4 ">
                    <a href="contact.php">
                        <p class="text-white">Contáctanos</p>
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
    </body>
</html>