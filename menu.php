<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="css/menu_styles.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'coffee': '#664638'
                    }
                }
            }
        }
    </script>
    <title>Huelic Restaurant</title>
</head>
<body>
    <?php
        session_start();
    ?>
    <div class="contain">
        <header>
            <nav class="w-full mBrown flex items-center">
                <div id="logosName" class="flex w-1/3">
                    <a href="">
                        <img src="resources/images/huelic-white.png" alt="Logo del restaurante" id="restaurantLogo">
                    </a>
                </div>
                <div id="navTabs" class="w-1/3 flex flex-row justify-center">
                    <a href="index.php" class="text-white text-xl font-semibold py-5 px-8">Home</a>
                    <a href="menu.php" class="text-white text-xl font-semibold py-5 px-8">Menú</a>
                    <a href="Reservaciones.php" class="text-white text-xl font-semibold py-5 px-8">Reservación</a>
                    <a href="contact.php" class="text-white text-xl font-semibold py-5 px-8">Contacto</a>
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
        <section id="foodNav">
            <nav class="w-auto mx-96 flex mt-1">
                <a href="" class="w-1/5 text-white text-lg text-center font-semibold flex items-center justify-center">Pizzas</a>
                <a href="" class="w-1/5 text-white text-lg text-center font-semibold flex items-center justify-center">Ensaladas</a>
                <a href="" class="w-1/5 text-white text-lg text-center font-semibold flex items-center justify-center">Lassagna</a>
                <a href="" class="w-1/5 text-white text-lg text-center font-semibold flex items-center justify-center">Steaks</a>
                <a href="" class="w-1/5 text-white text-lg text-center font-semibold flex items-center justify-center">Postres</a>
            </nav>
        </section>
        <section id="PizzasSection">
            <div class="w-10/12 mt-10 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Pizzas</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto">
                <?php
                    

                    class pizzaObject{
                        public $pizzaName;
                        public $pizzaPrice;
                        public $pizzaCode;
                    }

                    $pizzas = array();
                    
                    $pizzas[0] = new pizzaObject();
                    $pizzas[0] -> pizzaName = 'Pizza Con Piña';
                    $pizzas[0] -> pizzaPrice = 4.50;
                    $pizzas[0] -> pizzaCode = "pizza1";
                    
                    $pizzas[1] = new pizzaObject();
                    $pizzas[1] -> pizzaName = 'Pizza Con Anchoas';
                    $pizzas[1] -> pizzaPrice = 5.20;
                    $pizzas[1] -> pizzaCode = "pizza2";
                    
                    $pizzas[2] = new pizzaObject();
                    $pizzas[2] -> pizzaName = 'Pizza De Pepperoni';
                    $pizzas[2] -> pizzaPrice = 4.00;
                    $pizzas[2] -> pizzaCode = "pizza3";
                    
                    $pizzas[3] = new pizzaObject();
                    $pizzas[3] -> pizzaName = 'Pizza Con Hongos';
                    $pizzas[3] -> pizzaPrice = 7.00;
                    $pizzas[3] -> pizzaCode = "pizza4";

                    $pizzas[4] = new pizzaObject();
                    $pizzas[4] -> pizzaName = 'Pizza Vegetariana';
                    $pizzas[4] -> pizzaPrice = 14.00;
                    $pizzas[4] -> pizzaCode = "pizza5";

                    $pizzas[5] = new pizzaObject();
                    $pizzas[5] -> pizzaName = 'Pizza Spicy-Italian';
                    $pizzas[5] -> pizzaPrice = 20.00;
                    $pizzas[5] -> pizzaCode = "pizza6";
                    $pizzaImg;
                    $count = 1;

                    echo "<div class=\"w-full flex flex-wrap justify-center\">";
                    foreach($pizzas as $pizza){
                        echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                            echo "<img class=\"foodImage w-full\" src=\"resources/images/MenuImgs/$pizza->pizzaCode.jpg\" alt=\"$pizza->pizzaName\">";
                            echo "<div class=\"w-full my-3 flex justify-between\">";

                                echo "<p class=\"w-9/12 font-semibold text-2xl\">".$pizza->pizzaName."</p>";
                                echo "<input type=\"hidden\" name=\"label".$pizza->pizzaName."\" value=\"$pizza->pizzaCode\">";

                                echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$".$pizza->pizzaPrice."</p>";
                                echo "<input type=\"hidden\" name=\"label".$pizza->pizzaPrice."\" value=\"$pizza->pizzaPrice\">";
                                
                                echo "</div>";
                                echo "<div class=\"flex items-center\">";

                                    echo "<a href=\"confirmación.php?orderName=$pizza->pizzaName&orderPrice=$pizza->pizzaPrice&orderImg=$pizza->pizzaCode\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                            echo "</div>";            
                        echo "</div>";
                        $count++;
                        }
                    echo "</div>";
                ?>
            </div>
        </section>
        <section id="SaladsSection">
            <div class="w-10/12 mt-12 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Ensaladas</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto">
            <?php
                    class saladObject{
                        public $saladName;
                        public $saladPrice;
                        public $saladCode;
                    }
                    
                    $salads = array();

                    $salads[0] = new saladObject();
                    $salads[0] -> saladName = 'Ensalada Tradicional';
                    $salads[0] -> saladPrice = 3.50;
                    $salads[0] -> saladCode = "salad1";

                    $salads[1] = new saladObject();
                    $salads[1] -> saladName = 'Ensalada Griega';
                    $salads[1] -> saladPrice = 3.50;
                    $salads[1] -> saladCode = "salad2";

                    $salads[2] = new saladObject();
                    $salads[2] -> saladName = 'Ensalada Caesar';
                    $salads[2] -> saladPrice = 3.50;
                    $salads[2] -> saladCode = "salad3";

                    $salads[3] = new saladObject();
                    $salads[3] -> saladName = 'Ensalada Verde';
                    $salads[3] -> saladPrice = 3.50;
                    $salads[3] -> saladCode = "salad4";
                    
                    echo "<div class=\"w-full flex flex-wrap justify-center\">";
                    foreach($salads as $salad){
                        echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                            echo "<img class=\"foodImage w-full\" src=\"resources/images/MenuImgs/$salad->saladCode.jpg\" alt=\"$salad->saladName\">";
                            echo "<div class=\"w-full my-3 flex justify-between\">";

                                echo "<p class=\"w-9/12 font-semibold text-2xl\">".$salad->saladName."</p>";
                                echo "<input type=\"hidden\" name=\"label".$salad->saladName."\" value=\"$salad->saladCode\">";

                                echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$".$salad->saladPrice."</p>";
                                echo "<input type=\"hidden\" name=\"label".$salad->saladPrice."\" value=\"$salad->saladPrice\">";
                                
                                echo "</div>";
                                echo "<div class=\"flex items-center\">";
                                    echo "<a href=\"confirmación.php?orderName=$salad->saladName&orderPrice=$salad->saladPrice&orderImg=$salad->saladCode\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                            echo "</div>";            
                        echo "</div>";
                    }
                    echo "</div>";
                ?>
            </div>
        </section>
        <section id="LasagnaSection">
            <div class="w-10/12 mt-12 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Lasañas</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto">
                <?php
                    class lasagnaObject{
                        public $lasagnaName;
                        public $lasagnaPrice;
                    }

                    $lasagnas = array();
                    
                    $lasagnas[0] = new lasagnaObject();
                    $lasagnas[0] -> lasagnaName = 'Lasaña con carne';
                    $lasagnas[0] -> lasagnaPrice = 3.50;
                    
                    $lasagnas[1] = new lasagnaObject();
                    $lasagnas[1] -> lasagnaName = 'Lasaña griega';
                    $lasagnas[1] -> lasagnaPrice = 4.20;

                    $lasagnas[2] = new lasagnaObject();
                    $lasagnas[2] -> lasagnaName = 'Lasaña de espinaca';
                    $lasagnas[2] -> lasagnaPrice = 3.00;
                    
                    $lasagnas[3] = new lasagnaObject();
                    $lasagnas[3] -> lasagnaName = 'Lasaña de aguacate';
                    $lasagnas[3] -> lasagnaPrice = 6.00;

                    $lasagnas[4] = new lasagnaObject();
                    $lasagnas[4] -> lasagnaName = 'Lasaña con tocino';
                    $lasagnas[4] -> lasagnaPrice = 13.00;

                    echo "<div class=\"w-full flex flex-wrap justify-center\">";
                    foreach($lasagnas as $lasagna){
                        echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                            echo "<img class=\"foodImage w-full\" src=\"resources/images/pinneaple-pizza.jpg\" alt=\"Pizza con piña\">";
                            echo "<div class=\"w-full my-3 flex justify-between\">";

                                echo "<p class=\"w-9/12 font-semibold text-2xl\">".$lasagna->lasagnaName."</p>";

                                echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$".$lasagna->lasagnaPrice."</p>";
                                
                                echo "</div>";
                                echo "<div class=\"flex items-center\">";

                                    echo "<a href=\"\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                                
                            echo "</div>";            
                        echo "</div>";
                        }
                    echo "</div>";
                ?>
            </div>
        </section>
        <section id="SteakSection">
            <div class="w-10/12 mt-12 pb-4 mx-auto foodBar">
                <p class="text-5xl font-semibold text-center text-black">Steaks</p>
            </div>
            <div id="foodsContainer" class="w-11/12 mx-auto">
            <?php
                    class steakObject{
                        public $steakName;
                        public $steakPrice;
                    }

                    $steaks = array();

                    $steaks[0] = new steakObject();
                    $steaks[0] -> steakName = 'Steak a la parrilla';
                    $steaks[0] -> steakPrice = 3.50;

                    $steaks[1] = new steakObject();
                    $steaks[1] -> steakName = 'Steak Bissogne';
                    $steaks[1] -> steakPrice = 4.20;
                    
                    $steaks[2] = new steakObject();
                    $steaks[2] -> steakName = 'Steak en vinagre';
                    $steaks[2] -> steakPrice = 3.00;
                    
                    echo "<div class=\"w-full flex flex-wrap justify-center\">";
                    foreach($steaks as $steak){
                        echo "<div class=\"w-3/12 flex flex-col mt-10 mx-12\">";
                            echo "<img class=\"foodImage w-full\" src=\"resources/images/pinneaple-pizza.jpg\" alt=\"Pizza con piña\">";
                            echo "<div class=\"w-full my-3 flex justify-between\">";

                                echo "<p class=\"w-9/12 font-semibold text-2xl\">".$steak->steakName."</p>";

                                echo "<p id=\"priceLabel\" class=\"font-semibold text-2xl mr-3\">$".$steak->steakPrice."</p>";
                                
                            echo "</div>";
                                echo "<div class=\"flex items-center\">";

                                    echo "<a href=\"\" 
                                    class=\"w-full ordenButton text-center\">Ordenar</a>";
                                
                                echo "</div>";            
                        echo "</div>";
                    }
                    echo "</div>";
                ?>
            </div>
        </section>
    </div>
</body>
</html>