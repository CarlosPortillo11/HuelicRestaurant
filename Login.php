<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['correo'] = "";
    ?>
<div class="contain">
        <header>
            <nav class="w-full mBrown flex items-center">
                <div id="logosName" class="flex w-1/3">
                    <a href="index.php">
                        <img src="resources/images/huelic-white.png" alt="Logo del restaurante" id="restaurantLogo">
                    </a>
                </div>
                <div id="navTabs" class="w-1/3 flex flex-row justify-center">
                    <a href="index.php" class="text-white text-xl font-semibold py-5 px-8">Home</a>
                    <a href="" class="text-white text-xl font-semibold py-5 px-8">Menú</a>
                    <a href="Reservaciones.php" class="text-white text-xl font-semibold py-5 px-8">Reservación</a>
                    <a href="contact.php" class="text-white text-xl font-semibold py-5 px-8">Contacto</a>
                </div>
                <div id="userTabs" class="w-1/3 h-full flex justify-end items-center">
                    <a href="Login.php" class="h-full flex items-center px-3">
                        <img src="resources/images/profile-user.png" alt="Login" id="userLogin">
                    </a>
                    <a href="" class="h-full flex items-center px-3" id="cartContainer">
                        <img src="resources/images/carro.png" alt="Carrito de compras" id="shopCart">
                        <p class="ml-2 text-white font-semibold">$00.00</p>
                    </a>
                </div>
            </nav>
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