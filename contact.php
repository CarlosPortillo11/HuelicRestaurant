<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/menu.css">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Huelic Restaurant</title>
    </head>
    <body>
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
    </body>
</html>