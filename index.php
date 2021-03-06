<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/slick.css">
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
                    <a href="index.html" class="text-white text-xl font-semibold py-5 px-8">Home</a>
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
                    <a href="index.php" class="h-full flex items-center px-3" id="cartContainer">;
                        <img src="resources/images/carro.png" alt="Carrito de compras" id="shopCart">
                        <p class="ml-2 text-white font-semibold">$00.00</p>
                    </a>
                </div>
            </nav>
        </header>
        <section id="Hero">
            <div class="w-full autoplay flex justify-center py-12">
                <div class="">
                    <img class="heroImage" src="resources/images/hero_table.jpg" alt="Hero 1">
                </div>
                <div class="">
                    <img class="heroImage" src="resources/images/hero_table1.jpg" alt="Hero 2">
                </div>
                <div class="">
                    <img class="heroImage" src="resources/images/hero_table2.jpg" alt="Hero 3">
                </div>
            </div>
        </section>
        <section id="promises">
            <div id="promisesContainer" class="w-11/12 flex bg-white mx-auto px-4 py-5 border-4 justify-around my-8">
                <div class="w-1/4 flex py-2 items-center justify-around">
                    <img class="promisesLogo" src="resources/images/checked.png" alt="Buena Calidad">
                    <p class="text-center">
                        Poseemos <br> la <br> mejor calidad
                    </p>
                </div>
                <div class="w-1/4 flex py-2 items-center justify-around">
                    <img class="promisesLogo" src="resources/images/thumbs-up.png" alt="Excelente Atención">
                    <p class="text-center">
                        La mejor atención <br> al <br> cliente
                    </p>
                </div>
                <div class="w-1/4 flex py-2 items-center justify-around">
                    <img class="promisesLogo" src="resources/images/gel.png" alt="Prótocolos de Salud">
                    <p class="text-center">
                        Protocolos <br> de <br> salud
                    </p>
                </div>
            </div>
        </section>
        <section id="menu">
            <div class="w-full my-24 py-8 flex justify-around">
                <img class="menuLogo" src="resources/images/pizza-home.png" alt="Food Placeholder">
                <img class="menuLogo" src="resources/images/lasaña-home.png" alt="Food Placeholder">
                <img class="menuLogo" src="resources/images/carne-home.png" alt="Food Placeholder">
                <img class="menuLogo" src="resources/images/ensalada-home.png" alt="Food Placeholder">
            </div>
        </section>
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
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slick_carrousel.js"></script>
</body>
</html>