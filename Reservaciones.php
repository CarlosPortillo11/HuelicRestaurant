<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles-reservaciones.css">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="stylesheet" href="css/slick.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Reservación</title>
</head>

<body>
    <div class="contain">
        <header>
            <nav class="w-full mBrown flex items-center">
                <div id="logosName" class="flex w-1/3">
                    <a href="">
                        <img src="resources/images/placeholder.png" alt="Logo del restaurante" id="restaurantLogo">
                    </a>
                </div>
                <div id="navTabs" class="w-1/3 flex flex-row justify-center">
                    <a href="index.html" class="text-white text-xl font-semibold py-5 px-8">Home</a>
                    <a href="" class="text-white text-xl font-semibold py-5 px-8">Menú</a>
                    <a href="Reservaciones.php" class="text-white text-xl font-semibold py-5 px-8">Reservación</a>
                    <a href="" class="text-white text-xl font-semibold py-5 px-8">Contacto</a>
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
        <section class="contenedor">
            <h1 class="text-3xl text-center font font-medium border-b-4 mx-20 border-[#664638]"> Reservaciones </h1>
            <div class="cajas">
                <div>
                    <h3 class="text-left text-xl font font-medium">Terraza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 content-center">
                    <div class="img-reservacion">
                        <img src="resources/images/Terraza.jpg" alt="">
                    </div>
                    <div class="text-center caja-texboxs">
                        <div class="texbox-labels">
                            <p>Nombre de la reserva:</p>
                            <label for="">label</label>
                        </div>
                        <div class="texbox-labels">
                            <p>¿Qué día deseas reservar?</p>
                            <label for="">label</label>
                        </div>
                        <button class="text-white font-semibold py-2 px-4 mBrown bg-hover btn-reservacion" class="text-white font-semibold py-2 px-4 mBrown bg-hover"> Reservar </button>
                    </div>
                </div>
            </div>
            <div class="cajas">
                <div>
                    <h3 class="text-right text-xl font font-medium">Terraza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 content-center">
                    <div class="text-center caja-texboxs">
                        <div class="texbox-labels">
                            <p>Nombre de la reserva:</p>
                            <label for="">label</label>
                        </div>
                        <div class="texbox-labels">
                            <p>¿Qué día deseas reservar?</p>
                            <label for="">label</label>
                        </div>
                        <button class="text-white font-semibold py-2 px-4 mBrown bg-hover btn-reservacion" class="text-white font-semibold py-2 px-4 mBrown bg-hover"> Reservar </button>
                    </div>
                    <div class="img-reservacion">
                        <img src="resources/images/Terraza.jpg" alt="">
                    </div>

                </div>
            </div>
            <div class="cajas">
                <div>
                    <h3 class="text-left text-xl font font-medium">Terraza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequuntur cumque necessitatibus tempora debitis enim quae hic atque, minima perferendis dolores excepturi tempore. Harum, quibusdam velit. Magni quibusdam perspiciatis qui!</p>
                </div>
                <div class="contenedor-img-textbox grid grid-cols-2 gap-2 content-center">
                    <div class="img-reservacion">
                        <img src="resources/images/Terraza.jpg" alt="">
                    </div>
                    <div class="text-center caja-texboxs">
                        <div class="texbox-labels">
                            <p>Nombre de la reserva:</p>
                            <label for="">label</label>
                        </div>
                        <div class="texbox-labels">
                            <p>¿Qué día deseas reservar?</p>
                            <label for="">label</label>
                        </div>
                        <button class="text-white font-semibold py-2 px-4 mBrown bg-hover btn-reservacion" class="text-white font-semibold py-2 px-4 mBrown bg-hover"> Reservar </button>
                    </div>
                </div>
            </div>


        </section>

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
    </div>
</body>

</html>