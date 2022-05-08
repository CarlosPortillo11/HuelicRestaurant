<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles-reservacion.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Reservación</title>
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
                <div id="navTabs" class="w-1/3 flex flex-row justify-center ">
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
                    <a href="carrito.php" class="h-full flex items-center px-3" id="cartContainer">
                        <img class="mx-2" src="resources/images/carro.png" alt="Carrito de compras" id="shopCart">
                    </a>
                </div>
            </nav>
        </header>
        <section class="contenedor">
            <h1 class="text-3xl text-center font font-medium border-b-4 mx-20 border-[#664638]"> Reservaciones </h1>
            <div class="cajas">
                <div>
                    <h3 class="text-left titulos">TERRAZA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 items-center content-center">
                 
                        <img class="items-center content-center img-reservacion" src="resources/Imagenes Reservacion/terraza.png" alt="">
                   
                    <form action="Reservar.php" method="post">
                        <div class="text-center caja-texboxs">
                            <div class="texbox-labels">
                                <div>
                                    <h3 class="font-semibold text-xl"> Correo Electronico: </h3>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="correo" class=" apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                                </div>
                            </div>
                            <div class="texbox-labels">
                                <div>
                                    <h3 class=" text-xl font-semibold">Lugar: </h3>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="lugar" value="Terraza" class=" apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" readonly>
                                </div>
                            </div>
                            <div class="texbox-labels">
                                <label for="fecha">¿Qué día deseas reservar?</label>
                                <input type="datetime-local" id="fecha" name="fecha" value="2022-03-26T19:00">
                            </div>
                            <input type="submit" value="Reservar" class="ReservarButton text-center inline-block w-full px-8 py-3 leading-none text-white bg-amber-800 rounded hover:bg-amber-900 font-semibold shadow">
                        </div>
                    </form>
                </div>
            </div>
            <div class="cajas">
                <div>
                    <h3 class="text-right titulos2">SALA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 items-center content-center">
                    <div class="text-center caja-texboxs">
                        <form action="Reservar.php" method="post">
                            <div class="text-center caja-texboxs">
                                <div class="texbox-labels">
                                    <div>
                                        <h3 class="text-xl font-semibold"> Correo Electronico: </h3>
                                    </div>
                                    <div class="mb-6">
                                        <input type="text" name="correo" class=" apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                                    </div>
                                </div>
                                <div class="texbox-labels">
                                    <div>
                                        <h3 class="text-xl font-semibold">Lugar: </h3>
                                    </div>
                                    <div class="mb-6">
                                        <input type="text" name="lugar" value="Sala" class=" apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" readonly>
                                    </div>
                                </div>
                                <div class="texbox-labels">
                                    <label for="fecha">¿Qué día deseas reservar?</label>
                                    <input type="datetime-local" id="fecha" name="fecha" value="2022-03-26T19:00">
                                </div>
                                <input type="submit" value="Reservar" class="ReservarButton text-center inline-block w-full px-8 py-3 leading-none text-white bg-amber-800 rounded hover:bg-amber-900 font-semibold shadow">
                            </div>
                        </form>
                    </div>
                    
                        <img  class="items-center content-center img-reservacion" src="resources/Imagenes Reservacion//sala.png" alt="">
                </div>
            </div>
            <div class="cajas">
                <div>
                    <h3 class="text-left text-left titulos">JARDIN</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 items-center content-center">
                    
                        <img class="items-center content-center img-reservacion"  src="resources/Imagenes Reservacion/jardin.png" alt="">
                   
                    <form action="Reservar.php" method="post">
                        <div class="text-center caja-texboxs">
                            <div class="texbox-labels">
                                <div>
                                    <h3 class="text-xl font-semibold"> Correo Electronico: </h3>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="correo" class=" apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                                </div>
                            </div>
                            <div class="texbox-labels">
                                <div>
                                    <h3 class="text-xl font-semibold">Lugar: </h3>
                                </div>
                                <div class="mb-6">
                                    <input type="text" name="lugar" value="Jardin" class=" apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" readonly>
                                </div>
                            </div>
                            <div class="texbox-labels">
                                <label for="fecha">¿Qué día deseas reservar?</label>
                                <input type="datetime-local" id="fecha" name="fecha" value="2022-03-26T19:00">
                            </div>
                            <input type="submit" value="Reservar" class="ReservarButton text-center inline-block w-full px-8 py-3 leading-none text-white bg-amber-800 rounded hover:bg-amber-900 font-semibold shadow">
                        </div>
                    </form>
                </div>
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
                © 2022 Huelic Restaurant, LLC. Todos los derechos reservados. El nombre Huelic , logos, imágenes y marcas relacionadas son marcas registradas of Huelic, Inc. para Estados Unidos y Alimentos y Turismo S.A. de C.V. para El Salvador.
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