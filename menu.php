<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/MenuStyles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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
    <title>Huelic Restaurant</title>
</head>

<body>
    <?php
    $logUser = "";
    session_start();
    error_reporting(0);
    if ($_SESSION['correo'] == "") {
    } else {
        $logUser = $_SESSION['correo'];
    }

    ?>
    <div class="contain">
        <header>
            <!-- component -->
            <div class=" w-full mBrown">
                <div x-data="{ open: false }" class="flex flex-col  px-4 md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="p-4 flex flex-row items-center justify-between">
                        <a id="logosName" href="index.php" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="resources/images/huelic-white.png" alt="Logo del restaurante" id="restaurantLogo"></a>
                        <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 img_logo">
                                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav id="navTabs" :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                        <a class="text-white text-xl font-semibold py-5 px-8 mt-2" href="index.php">Home</a>
                        <a class="mt-2 text-white text-xl font-semibold py-5 px-8 mt-2" href="menu.php">Menú</a>
                        <a class="mt-2 text-white text-xl font-semibold py-5 px-8 mt-2" href="Reservaciones.php">Reservación</a>
                        <a class="mt-2 text-white text-xl font-semibold py-5 px-8 mt-2" href="contact.php">Contacto</a>
                        <div id="userTabs" class="w-1/3 h-full flex justify-end items-center">
                            <?php
                            if ($logUser == "") {
                                echo "<a href=\"Login.php\" class=\"h-full flex items-center py-5\">";
                                echo "<img src=\"resources/images/profile-user.png\" alt=\"Login\" id=\"userLogin\">";
                                echo "</a>";
                            } else {
                                echo "<a href=\"Login.php\" class=\"h-full flex items-center py-5 \">";
                                echo "<p class=\"mx-2 text-white text-lg font-medium\">Bienvenido </p>";
                                echo "<img src=\"resources/images/profile-user.png\" alt=\"Login\" id=\"userLogin\">";
                                echo "</a>";
                            }
                            ?>
                            <a href="carrito.php" class="h-full py-5 " id="cartContainer"> <img class="mx-6" src="resources/images/carro.png" alt="Carrito de compras" id="shopCart"></a>
                            <?php
                                if(!$logUser==""){
                                    echo"<form class=\"h-full flex items-center\" id=\"logged_out\" action=\"unlog.php\" method=\"POST\">";
                                    echo"<input type=\"submit\" value=\"Cerrar sesión\" id=\"log_out\" class=\"h-full cursor-pointer hover:bg-lightCoffee\" style=\"font-weight:bold; color:white; padding:12px;\"/>";
                                    echo"</form>";
                                }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- component -->
        </header>
        <section id="PizzasSection">
            <div class="w-10/12 mt-10 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Pizzas</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto">
                <?php


                class pizzaObject
                {
                    public $pizzaName;
                    public $pizzaPrice;
                    public $pizzaCode;
                }

                $pizzas = array();

                $pizzas[0] = new pizzaObject();
                $pizzas[0]->pizzaName = 'Pizza Con Piña';
                $pizzas[0]->pizzaPrice = bcdiv(4.50, '1', 2);
                $pizzas[0]->pizzaCode = "pizza1";

                $pizzas[1] = new pizzaObject();
                $pizzas[1]->pizzaName = 'Pizza Con Anchoas';
                $pizzas[1]->pizzaPrice = bcdiv(5.20, '1', 2);
                $pizzas[1]->pizzaCode = "pizza2";

                $pizzas[2] = new pizzaObject();
                $pizzas[2]->pizzaName = 'Pizza De Pepperoni';
                $pizzas[2]->pizzaPrice = bcdiv(4.00, '1', 2);
                $pizzas[2]->pizzaCode = "pizza3";

                $pizzas[3] = new pizzaObject();
                $pizzas[3]->pizzaName = 'Pizza Con Hongos';
                $pizzas[3]->pizzaPrice = bcdiv(7.00, '1', 2);
                $pizzas[3]->pizzaCode = "pizza4";

                $pizzas[4] = new pizzaObject();
                $pizzas[4]->pizzaName = 'Pizza Vegetariana';
                $pizzas[4]->pizzaPrice = bcdiv(14.00, '1', 2);
                $pizzas[4]->pizzaCode = "pizza5";

                $pizzas[5] = new pizzaObject();
                $pizzas[5]->pizzaName = 'Pizza Spicy-Italian';
                $pizzas[5]->pizzaPrice = bcdiv(20.00, '1', 2);
                $pizzas[5]->pizzaCode = "pizza6";

                echo "<div class=\"w-full flex flex-wrap justify-center\">";
                foreach ($pizzas as $pizza) {
                    echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                    echo "<img class=\"foodImage w-full\" src=\"resources/images/MenuImgs/$pizza->pizzaCode.jpg\" alt=\"$pizza->pizzaName\">";
                    echo "<div class=\"w-full my-3 flex justify-between\">";

                    echo "<p class=\"w-9/12 font-semibold text-2xl\">" . $pizza->pizzaName . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $pizza->pizzaName . "\" value=\"$pizza->pizzaCode\">";

                    echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$" . $pizza->pizzaPrice . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $pizza->pizzaPrice . "\" value=\"$pizza->pizzaPrice\">";

                    echo "</div>";
                    echo "<div class=\"flex items-center\">";

                    echo "<a href=\"confirmación.php?orderName=$pizza->pizzaName&orderPrice=$pizza->pizzaPrice&orderImg=$pizza->pizzaCode\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                ?>
            </div>
        </section>
        <section id="SaladsSection">
            <div class="w-10/12 mt-12 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Ensaladas</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto">
                <?php
                class saladObject
                {
                    public $saladName;
                    public $saladPrice;
                    public $saladCode;
                }

                $salads = array();

                $salads[0] = new saladObject();
                $salads[0]->saladName = 'Ensalada Tradicional';
                $salads[0]->saladPrice = bcdiv(3.50, '1', 2);
                $salads[0]->saladCode = "salad1";

                $salads[1] = new saladObject();
                $salads[1]->saladName = 'Ensalada Griega';
                $salads[1]->saladPrice = bcdiv(3.50, '1', 2);
                $salads[1]->saladCode = "salad2";

                $salads[2] = new saladObject();
                $salads[2]->saladName = 'Ensalada Caesar';
                $salads[2]->saladPrice = bcdiv(3.50, '1', 2);
                $salads[2]->saladCode = "salad3";

                $salads[3] = new saladObject();
                $salads[3]->saladName = 'Ensalada Verde';
                $salads[3]->saladPrice = bcdiv(3.50, '1', 2);
                $salads[3]->saladCode = "salad4";

                echo "<div class=\"w-full flex flex-wrap ml-2\">";
                foreach ($salads as $salad) {
                    echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                    echo "<img class=\"foodImage w-full\" src=\"resources/images/MenuImgs/$salad->saladCode.jpg\" alt=\"$salad->saladName\">";
                    echo "<div class=\"w-full my-3 flex justify-between\">";

                    echo "<p class=\"w-9/12 font-semibold text-2xl\">" . $salad->saladName . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $salad->saladName . "\" value=\"$salad->saladCode\">";

                    echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$" . $salad->saladPrice . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $salad->saladPrice . "\" value=\"$salad->saladPrice\">";

                    echo "</div>";
                    echo "<div class=\"flex items-center\">";
                    echo "<a href=\"confirmación.php?orderName=$salad->saladName&orderPrice=$salad->saladPrice&orderImg=$salad->saladCode\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                ?>
            </div>
        </section>
        <section id="PastasSection">
            <div class="w-10/12 mt-12 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Pastas</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto">
                <?php
                class pastaObject
                {
                    public $pastaName;
                    public $pastaPrice;
                    public $pastaCode;
                }

                $pastas = array();

                $pastas[0] = new pastaObject();
                $pastas[0]->pastaName = 'Alffredo con Pollo';
                $pastas[0]->pastaPrice = bcdiv(3.50, '1', 2);
                $pastas[0]->pastaCode = "pasta1";

                $pastas[1] = new pastaObject();
                $pastas[1]->pastaName = 'Pollo Parmesano';
                $pastas[1]->pastaPrice = bcdiv(4.20, '1', 2);
                $pastas[1]->pastaCode = "pasta2";

                $pastas[2] = new pastaObject();
                $pastas[2]->pastaName = 'Lassagna Clásica';
                $pastas[2]->pastaPrice = bcdiv(3.00, '1', 2);
                $pastas[2]->pastaCode = "pasta3";

                $pastas[3] = new pastaObject();
                $pastas[3]->pastaName = 'Tour de Italia';
                $pastas[3]->pastaPrice = bcdiv(6.00, '1', 2);
                $pastas[3]->pastaCode = "pasta4";

                $pastas[4] = new pastaObject();
                $pastas[4]->pastaName = 'Fettuccine Alfredo';
                $pastas[4]->pastaPrice = bcdiv(13.00, '1', 2);
                $pastas[4]->pastaCode = "pasta5";

                echo "<div class=\"w-full flex flex-wrap ml-2\">";
                foreach ($pastas as $pasta) {
                    echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                    echo "<img class=\"foodImage w-full\" src=\"resources/images/MenuImgs/$pasta->pastaCode.jpg\" alt=\"$pasta->pastaName\">";
                    echo "<div class=\"w-full my-3 flex justify-between\">";

                    echo "<p class=\"w-9/12 font-semibold text-2xl\">" . $pasta->pastaName . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $pasta->pastaName . "\" value=\"$pasta->pastaCode\">";

                    echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$" . $pasta->pastaPrice . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $pasta->pastaPrice . "\" value=\"$pasta->pastaPrice\">";

                    echo "</div>";
                    echo "<div class=\"flex items-center\">";

                    echo "<a href=\"confirmación.php?orderName=$pasta->pastaName&orderPrice=$pasta->pastaPrice&orderImg=$pasta->pastaCode\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                ?>
            </div>
        </section>
        <section id="SteakSection">
            <div class="w-10/12 mt-12 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Steaks</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto mb-28">
                <?php
                class steakObject
                {
                    public $steakName;
                    public $steakPrice;
                    public $steakCode;
                }

                $steaks = array();

                $steaks[0] = new steakObject();
                $steaks[0]->steakName = 'Filete Biseye';
                $steaks[0]->steakPrice = bcdiv(3.50, '1', 2);
                $steaks[0]->steakCode = "steak1";

                $steaks[1] = new steakObject();
                $steaks[1]->steakName = 'Filete con Hongos';
                $steaks[1]->steakPrice = bcdiv(4.20, '1', 2);
                $steaks[1]->steakCode = "steak2";

                $steaks[2] = new steakObject();
                $steaks[2]->steakName = 'Costillas de Res';
                $steaks[2]->steakPrice = bcdiv(3.00, '1', 2);
                $steaks[2]->steakCode = "steak3";

                echo "<div class=\"w-full flex flex-wrap justify-center\">";
                foreach ($steaks as $steak) {
                    echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                    echo "<img class=\"foodImage w-full\" src=\"resources/images/MenuImgs/$steak->steakCode.jpg\" alt=\"$steak->steakName\">";
                    echo "<div class=\"w-full my-3 flex justify-between\">";

                    echo "<p class=\"w-9/12 font-semibold text-2xl\">" . $steak->steakName . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $steak->steakName . "\" value=\"$steak->steakCode\">";

                    echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$" . $steak->steakPrice . "</p>";
                    echo "<input type=\"hidden\" name=\"label" . $steak->steakPrice . "\" value=\"$steak->steakPrice\">";

                    echo "</div>";
                    echo "<div class=\"flex items-center\">";

                    echo "<a href=\"confirmación.php?orderName=$steak->steakName&orderPrice=$steak->steakPrice&orderImg=$steak->steakCode\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
                ?>
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