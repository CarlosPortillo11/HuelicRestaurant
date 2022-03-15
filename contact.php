<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/contact.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Huelic Restaurant</title>
    </head>
    <body>
        <!--header section-->
        <header>
            <nav class="w-full mBrown flex items-center">
                <div id="logosName" class="flex w-1/3">
                    <a href="">
                        <img src="resources/images/placeholder.png" alt="Logo del restaurante" id="restaurantLogo">
                    </a>
                </div>
                <div id="navTabs" class="w-1/3 flex flex-row justify-center">
                    <a href="" class="text-white text-xl font-semibold py-5 px-8">Home</a>
                    <a href="" class="text-white text-xl font-semibold py-5 px-8">Menú</a>
                    <a href="" class="text-white text-xl font-semibold py-5 px-8">Reservación</a>
                    <a href="" class="text-white text-xl font-semibold py-5 px-8">Contacto</a>
                </div>
                <div id="userTabs" class="w-1/3 h-full flex justify-end items-center">
                    <a href="" class="h-full flex items-center px-3">
                        <img src="resources/images/profile-user.png" alt="Login" id="userLogin">
                    </a>
                    <a href="" class="h-full flex items-center px-3" id="cartContainer">
                        <img src="resources/images/carro.png" alt="Carrito de compras" id="shopCart">
                        <p class="ml-2 text-white font-semibold">$00.00</p>
                    </a>
                </div>
            </nav>
        </header>
        <!--Content section-->
        <div class="main_content">
            <h1 class="contact_text">Contáctanos</h1>
            <div class="mainContainer_Descp">
                <div class="main_text">
                    <p>Queremos oír lo que tienes que decir.<br><br>
                    Porque garantizar la satisfacción de nuestros clientes es casi tan importante como entregar felicidad por medio de nuestra comida.</p>
                </div>
                <div class="form">
                    <?php
                        echo "<form>";
                            echo "<label for=\"nombre\">Nombre:</label><br>";
                            echo "<input type=\"text\" name=\"nombre\" id=\"nombre\" placeholder= \"Introduzca su nombre\" /><br>";
                            echo "<label for=\"mail\">Correo Electrónico:</label><br>";
                            echo "<input type=\"email\" name=\"mail\" id=\"mail\" placeholder=\"Introduzca su correo eléctronico\"/><br>";
                            echo "<label for=\"description\">¿Qué nos quieres decir?</label><br>";
                            echo "<input type=\"text\" name=\"description\" id=\"description\" placeholder=\"Escríbenos tu comentario\"/><br>";
                            echo "<input type=\"submit\" value=\"Envíanos tus comentarios\" class=\"button\"/>";
                            echo "";
                        echo "</form>";
                    ?>     
                </div>
            </div>
        </div>
        <!--footer section-->
        <footer class="w-full bg-black">
            <p class="font-semibold text-white text-xl text-center py-5">Si deseas ordenar a través de nuestro call center llama al (503) 2257-7777</p>
            <div class="w-full py-2 flex">
                <div class="w-1/3 flex justify-center py-4 border-r-2 border-gray">
                    <a href="">
                        <p class="text-white">Cuenta</p>
                    </a>
                </div>
                <div class="w-1/3 flex justify-center py-4 border-r-2 border-gray">
                    <a href="">
                        <p class="text-white">Servicio al cliente</p>
                    </a>
                </div>
                <div class="w-1/3 flex justify-center py-4 ">
                    <a href="">
                        <p class="text-white">Contáctanos</p>
                    </a>
                </div>
            </div>
            <p class="mt-10 mx-12 font-semibold text-sm text-white text-center">
                © 2019 Pizza Hut International, LLC. Todos los derechos reservados. El nombre Pizza Hut, logos, imágenes y marcas relacionadas son marcas registradas of Pizza Hut, Inc. para Estados Unidos y Alimentos y Turismo S.A. de C.V. para El Salvador.
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
                    <img class="footerLogo" src="resources/images/placeholder.png" alt="">
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