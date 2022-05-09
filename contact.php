<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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
    <!--header section-->
    <header>
        <!-- component -->
        <div class=" w-full mBrown">
            <div x-data="{ open: false }" class="flex flex-col  px-4 md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                    <a id="logosName" href="index.php" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="resources/images/huelic-white.png" alt="Logo del restaurante" id="restaurantLogo"></a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 img_logo">
                            <path  x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
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
                    </div>
                </nav>
            </div>
        </div>
        <!-- component -->
    </header>
    <!--Content section-->
    <section class="main_content">
        <section class="into-main">
            <h1 class="contact_text">Contáctanos</h1>
            <div class="mainContainer_Descp">
                <div class="main_text">
                    <p>Queremos oír lo que tienes que decir.<br><br>
                        Porque garantizar la satisfacción de nuestros clientes es casi tan importante como entregar felicidad por medio de nuestra comida.</p>
                </div>
                <div class="form">
                    <?php
                    echo "<form method=\"POST\">";
                    echo "<label for=\"nombre\">Nombre:</label><br>";
                    echo "<input type=\"text\" name=\"nombre\" id=\"nombre\" placeholder= \"Introduzca su nombre\" required=\" \"/><br>";
                    echo "<label for=\"mail\">Correo Electrónico:</label><br>";
                    echo "<input type=\"email\" name=\"mail\" id=\"mail\" placeholder=\"Introduzca su correo eléctronico\" required=\" \"/><br>";
                    echo "<label for=\"description\">¿Qué nos quieres decir?</label><br>";
                    echo "<input type=\"text\" name=\"description\" id=\"description\" placeholder=\"Escríbenos tu comentario\" required=\" \"/><br>";
                    echo "<input type=\"submit\" value=\"Envíanos tus comentarios\" class=\"button\"/>";
                    echo "";
                    echo "</form>";

                    //Envío de datos
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $cliente = $_POST["nombre"];
                        $correo = $_POST["mail"];
                        $mensaje = $_POST["description"];
                        $destino = "LISHuelic@gmail.com";
                        $subject = "Contacto Cliente";
                        $headers = 'From: Clientes Restaurante' . "\r\n" .
                            'Reply-to: Clientes Restaurante' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();


                        $contacto = "Nombre del cliente: " . $cliente . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje . "<br>";

                        if (mail($destino, $subject, $contacto, $headers)) {
                            echo "<br> Gracias por por ponerte en contacto con nostros, tu mensaje ha sido enviado con éxito";
                        } else {
                            echo "<br>No se pudo enviar el mensaje";
                        }
                    }

                    ?>
                </div>
            </div>
        </section>
    </section>
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