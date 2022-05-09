<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrito.css">
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

    include("conexion.php");
    $conn = conectar();

    $query = "SELECT * FROM Ordenes WHERE Correo = '$logUser'";
    $request = mysqli_query($conn, $query);

    $query2 = "SELECT * FROM reservaciones WHERE correo = '$logUser'";
    $request2 = mysqli_query($conn, $query2);

    $totalAmount = 0;
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
                                echo "<a href=\"Login.php\" class=\"h-full flex items-center py-5 px-3\">";
                                echo "<img src=\"resources/images/profile-user.png\" alt=\"Login\" id=\"userLogin\">";
                                echo "</a>";
                            } else {
                                echo "<a href=\"Login.php\" class=\"h-full flex items-center py-5 px-3\">";
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
                <?php while ($result = mysqli_fetch_array($request)) { ?>
                    <tr>
                        <td> <?php echo $result['Platillo'] ?> </td>
                        <td> <?php echo $result['Cantidad'] ?> </td>
                        <td> $<?php echo $result['Precio'] ?> </td>
                        <td> $<?php echo $result['Total'] ?> </td>
                    </tr>
                <?php
                    $totalAmount += bcdiv($result['Total'], '1', 2);
                } ?>
            </table>
            <section class="main_text">
                <h1>Reservas activas</h1>
            </section>
            <table class="sub_content">
                <tr>
                    <th>Correo</th>
                    <th>Zona</th>
                    <th>Fecha</th>
                </tr>
                <?php while ($result2 = mysqli_fetch_array($request2)) { 
                    $date = date_create($result2['Fecha']);
                    $date2 =  date_format($date, 'd-m-Y');
                    ?>
                    <tr>
                        <td> <?php echo $result2['Correo'] ?> </td>
                        <td> <?php echo $result2['Lugar'] ?> </td>
                        <td> <?php echo $date2 ?> </td>
                    </tr>
                <?php
                } ?>
            </table>
            <hr>
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
                    <input type="submit" value="Proceder al pago" id="facturar" class="w-2/3 mx-auto mt-1 button" />
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