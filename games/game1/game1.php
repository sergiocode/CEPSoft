<?php
    session_start();
    $variable_php= $_SESSION['user_id'];
    echo '<script languaje="JavaScript"> var username="'.$variable_php.'"; </script>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./media/img/alexFront1.png"/>

    <!-- LINKS JUEGO -->
    <link rel="stylesheet" href="./style.css">
    <script src="./game.js"></script>

    <!-- ajax -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- importo el jQuery para poder utilizar ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>Conoce nuestra FRASE!</title>
</head>
<body>

    <div class="screen">

        <div class="juego" id="gameScreen">
            <div class="menu">
                <div class="btns">
                    <button class="menuBtns" id="playBtn">Jugar!</button>
                    <button class="menuBtns" id="infoBtn">Como jugar</button>
                </div>
            </div>

            <div class="infoJuego">
                <div id="closeInfo"></div>
                <div class="infoJuegoContent">
                    <h2>Como jugar</h2>
                    <p class="instruccionesP">Utiliza las flechas direccionales para mover a Alex!</p>
                    <img src="./media/img/cruceta.png" alt="">
                    <p class="instruccionesP">Recoge las gemas con letra para obtener información sobre FRASE, pero recuerda evitar los coches. Cunado recojas todas las gemas dirígete al final del camino para finalizar el juego!</p>
                </div>
            </div>

            <div class="gameOver">
                <h2>Game Over :(</h2>
                <button class="menuBtns" id="reiniciarBtn"><a href="./game1.php">Reiniciar</a></button>
            </div>

            <div class="gameFinished">
                <h2>Enhorabuena!</h2>
                <p class="instruccionesP">Ahora conoces la metodología de nuestro centro! Disfruta de otros juegos disponibles.</p>
                <button class="menuBtns" id="finBtn"><a id="exitGame" href="../../php_views/juegos.php"></a></button>
            </div>

            <div id="character" class="alexFront"></div>
                            
            <div data-esta="1" class="colision" id="colision1"></div>
            <div data-esta="0" class="colision" id="colision2"></div>
            <div data-esta="0" class="colision" id="colision3"></div>
            <div data-esta="0" class="colision" id="colision4"></div>
            <div data-esta="0" class="colision" id="colision5"></div>
            <div data-esta="0" class="colision" id="colision6"></div>
            <div data-esta="0" class="colision" id="colision7"></div>
            <div data-esta="0" class="colision" id="colision8"></div>
            <div data-esta="0" class="colision" id="colision9"></div>
            <div data-esta="0" class="colision" id="colision10"></div>
            <div data-esta="0" class="colision" id="colision11"></div>
            <div data-esta="0" class="colision" id="colision12"></div>
            <div data-esta="0" class="colision" id="carretera"></div>
            
            <!-- Gemas -->
            <div class="gema" id="gemaF"></div>
            <div class="gema" id="gemaR"></div>
            <div class="gema" id="gemaA"></div>
            <div class="gema" id="gemaS"></div>
            <div class="gema" id="gemaE"></div> 
        
            <div class="coche"></div>

            <div id="terminarJuego"></div>
        </div>

        <div class="stats">
            <div class="dialogos">
                <div class="iconoDialogo" id="iconoDialogo"></div>
                <p id="textoDialogo">Hola! Bienvenido a FRASE, un juego que te permitirá conocer el método de aprendizaje empleado en Centre d'Estudis Politècnics.

Alex estudia en nuestro centro y quiere conocer más sobre nosotros. Recoge las gemas con letras para conocer de que se trata cada una, pero OJO! Ten cuidado en la carretera ;)</p>
            </div>
            <div class="characterStats">
                <div class="iconoAlex"></div>
                <div class="vidaAlex">
                    <p class="numVida"></p>
                    <div class="heart"></div>
                </div>
            </div>
        </div>

    </div>   
    <button class="volverJuegos"><a href="../../php_views/juegos.php">Volver</a></button>
</body>
</html>