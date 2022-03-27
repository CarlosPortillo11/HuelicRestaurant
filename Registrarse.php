<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/registrarse.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registrarse Huelic Restaurant</title>
</head>
<body>
<div class="contain">
        <header>
            <nav class="w-full mBrown flex items-center">
                <div id="logosName" class="flex w-1/3">
                    <a href="index.html">
                        <img src="resources/images/huelic-white.png" alt="Logo del restaurante" id="restaurantLogo">
                    </a>
                </div>
                <div id="navTabs" class="w-1/3 flex flex-row justify-center">
                    <a href="index.html" class="text-white text-xl font-semibold py-5 px-8">Home</a>
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

        <section class="flex mt-16 mb-16">
            <div class="Izquierda h-full w-2/4 ml-12 mr-18">
                <div class="flex justify-center pb-4">
                   <img src="resources\images/huelic-white.png" class="img_logo w-1/4" alt=""> 
                   <h2 class="text-4xl pl-4 pt-10 font-semibold"> Únetenos </h2>
                </div>
               <form action="Registrar.php" method="POST" class="pt-4 pl-16 pr-16">
                    <div>
                        <h3 class="font-semibold"> Correo Electronico: </h3>
                    </div>
                    <div class="mb-6">
                        <input type="text" name="correo" class=" apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
                    </div>
                    <div>
                        <h3 class="font-semibold"> Contraseña: </h3>
                    </div>
                    <div class="mb-6">
                        <input type="password" name="pass" class="apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" >
                    </div>
                    <div>
                        <h3 class="font-semibold"> Repetir Contraseña: </h3>
                    </div>
                    <div class="mb-12">
                        <input type="password" name="pass2" class="apperance-none block w-full px-4 py-2 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none" >
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Crear Cuenta" class="inline-block w-full px-8 py-3 leading-none text-white bg-amber-800 rounded hover:bg-amber-900 font-semibold shadow">
                    </div>
                </form>
            </div>
            <div class="Derecha w-2/4 h-full ml-28 mr-12">
                    <div class="pt-24 pl-20 w-3/4">
                        <h3 class="font-semibold text-xl inline"> Tambien puedes conectarte con: </h3>
                        <a href=""><img class="h-auto  mt-20 inline" src="resources/images/iniciargoogle.png" alt=""></a>
                        <a href=""><img class="h-auto  mt-10 inline" src="resources/images/iniciarfacebook.png" alt=""></a>
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