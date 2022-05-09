<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['correo'] = "";
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
                            echo "<a href=\"Login.php\" class=\"h-full flex items-center py-5\">";
                            echo "<img src=\"resources/images/profile-user.png\" alt=\"Login\" id=\"userLogin\">";
                            echo "</a>";
                            ?>
                            <a href="carrito.php" class="h-full py-5 " id="cartContainer"> <img class="mx-6" src="resources/images/carro.png" alt="Carrito de compras" id="shopCart"></a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- component -->

        
        </header>
        <section class="min-h-screen flex items-center flex-col justify-center">
            <div class="bg-white mx-auto max-w-500 py-10 px-40 shadow rounded-lg border border-amber-900 border-4">
                <div class="mb-1">
                    </div>
                    <div class="flex content-center justify-center">
                       <img src="resources\images/huelic-white.png" class="img_logo w-2/4" alt="">
                    </div>
                    <h2 class="Iniciar_S mb-4 text text-center text-3xl font font-medium"> Iniciar Sesión </h2>
                <form action="iniciarsesion.php" method="POST" >
                    <div>
                        <h3 class="font-semibold"> Correo Electronico: </h3>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="correo" class="apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                    </div>
                    <div>
                        <h3 class="font-semibold"> Contraseña: </h3>
                    </div>
                    <div class="mb-6">
                        <input type="password" name="pass" class="apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" >
                    </div>
                    <div class="mb-4">
                        <input type="submit" class="inline-block w-full px-8 py-3 leading-none text-white bg-amber-800 rounded hover:bg-amber-900 font-semibold shadow" value="Iniciar Sesión">
                    </div>
                    <div>
                        <h4 class="mb-8 text text-xs font-semibold">Al continuar, aceptas las Condiciones de uso y el Aviso de privacidad de Huelic.</h4>
                    </div>
                    <div>
                        <h3 class="mb-2 text text-center font-semibold"> ---------- Eres Nuevo en Huelic ----------</h3>
                    </div>
                    <div class="mb-8">
                        <a href="Registrarse.php" class=" font-semibold inline-block w-full px-8 py-3 leading-none text-white bg-slate-400 rounded hover:bg-slate-500 font-semibold shadow border border-amber-900 border-2 text text-center"><input type="button" value="Crear tu cuenta Huelic"></a>
                    </div>
                </form>
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
</body>
</html>