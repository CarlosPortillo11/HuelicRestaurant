<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservacion.css">
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
                        'lightCoffee': '#897759'
                    }
                }
            }
        }
    </script>
    <title>Reservación</title>
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
            </div>
            <!-- component -->
        </header>
        <section class="contenedor">
            <h1 class="text-3xl text-center font font-medium border-b-4 mx-20 border-[#664638] "> Reservaciones </h1>
            <div class="cajas">
                <div>
                    <h3 class="text-left titulos">TERRAZA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 items-center content-center">

                    <img class="items-center content-center img-reservacion" src="resources/Imagenes Reservacion/terraza.png" alt="">

                    <form method="post">
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
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        include("conexion.php");
                        $con = conectar();

                        $correo = $_POST['correo'];
                        $lugar = $_POST['lugar'];
                        $fecha = $_POST['fecha'];
                        $destino = $correo;


                        $sql = "INSERT INTO reservaciones VALUES('$correo','$lugar','$fecha')";
                        $query = mysqli_query($con, $sql);

                        $subject = "Reserva";
                        $headers = 'From: Reserva' . "\r\n" .
                            'Reply-to: Reserva' . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();


                        $contacto = "Tu reserva ha sido confimada con el correo: " . $correo . "\nEn el lugar: " . $lugar . "\nEn la fecha: " . $fecha . "<br>";

                        if (mail($destino, $subject, $contacto, $headers)) {
                            echo "<br> Se le ha enviado un correo de confirmación para su reserva ";
                        } else {
                            echo "<br>Su reserva no ha sido exitosa";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="cajas">
                <div>
                    <h3 class="text-right titulos2">SALA</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 items-center content-center">
                    <div class="text-center caja-texboxs">
                        <form action="Reservar.php" >
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
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            include("conexion.php");
                            $con = conectar();

                            $correo = $_POST['correo'];
                            $lugar = $_POST['lugar'];
                            $fecha = $_POST['fecha'];
                            $destino = $correo;


                            $sql = "INSERT INTO reservaciones VALUES('$correo','$lugar','$fecha')";
                            $query = mysqli_query($con, $sql);

                            $subject = "Reserva";
                            $headers = 'From: Reserva' . "\r\n" .
                                'Reply-to: Reserva' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();


                            $contacto = "Tu reserva ha sido confimada con el correo: " . $correo . "\nEn el lugar: " . $lugar . "\nEn la fecha: " . $fecha . "<br>";

                            if (mail($destino, $subject, $contacto, $headers)) {
                                echo "<br> Se le ha enviado un correo de confirmación para su reserva ";
                            } else {
                                echo "<br>Su reserva no ha sido exitosa";
                            }
                        }
                        ?>
                    </div>

                    <img class="items-center content-center img-reservacion" src="resources/Imagenes Reservacion//sala.png" alt="">
                </div>
            </div>
            <div class="cajas">
                <div>
                    <h3 class="text-left text-left titulos">JARDIN</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 items-center content-center">

                    <img class="items-center content-center img-reservacion" src="resources/Imagenes Reservacion/jardin.png" alt="">

                    <form action="Reservar.php">
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
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            include("conexion.php");
                            $con = conectar();

                            $correo = $_POST['correo'];
                            $lugar = $_POST['lugar'];
                            $fecha = $_POST['fecha'];
                            $destino = $correo;


                            $sql = "INSERT INTO reservaciones VALUES('$correo','$lugar','$fecha')";
                            $query = mysqli_query($con, $sql);

                            $subject = "Reserva";
                            $headers = 'From: Reserva' . "\r\n" .
                                'Reply-to: Reserva' . "\r\n" .
                                'X-Mailer: PHP/' . phpversion();


                            $contacto = "Tu reserva ha sido confimada con el correo: " . $correo . "\nEn el lugar: " . $lugar . "\nEn la fecha: " . $fecha . "<br>";

                            if (mail($destino, $subject, $contacto, $headers)) {
                                echo "<br> Se le ha enviado un correo de confirmación para su reserva ";
                            } else {
                                echo "<br>Su reserva no ha sido exitosa";
                            }
                        }
                        ?>
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