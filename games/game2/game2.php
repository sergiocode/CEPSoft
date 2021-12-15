
<?php
session_start();
        
            $variable_php= $_SESSION['user_id'];
            echo '<script languaje="JavaScript">     
                  var username="'.$variable_php.'";
                        
                              
            </script>';
            
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
    <link rel="shortcut icon" href="/media/img/logoCEP.png" />
    <!-- estilos-->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/dogica" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/pixel-operator" type="text/css"/>
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/mr-pixel" type="text/css"/>
    
    <link rel="stylesheet" href="../../style/styles.css">
    <link rel="stylesheet" href="../../style/juegos.css">
    <link href="media/estilos.css" rel="stylesheet" type="text/css">

    <!-- ajax -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
   <!-- importo el jQuery para poder utilizar ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   

    <title>Juego 2 - Franci13sco</title>
</head>

<body>
    <?php
    include("../../php_partials/navBar.php");
    ?>
    <!-- menu juego-->
    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <h3>Salidas profesionales</h3>
            <h4>Salidas laborales tiene el ciclo superior de DAW</h4>
            <h2>Como jugar</h2><br>
            <p>Cada trabajador tendra una descripcion que lo relacionara con la opcion dentro de los cuadros
                rojos en de la zona de trabajo, estas
                zonas tiene una descripcion al pasar el raton por encima y tendras que encagar cada trabajador
                en su zona correspondiente. </p>
            <p>Dependiendo la dificultad, el tiempo y la puntuacion maxima optenidas cambiara </p><br>
           
            <img src="https://i.gyazo.com/1f01d839db3d288774582a6fd0913ef0.gif" alt="Image from Gyazo" id="gif" /></a>
            <button href="#" id="btn-cerrar-facil" class="btn-cerrar-facil">Easy<i class="boton_Facil"></i></BUTTON>
            <button href="#" id="btn-cerrar-medio" class="btn-cerrar-medio">Medium<i class="boton_medio"></i></BUTTON>
            <button href="#" id="btn-cerrar-dificil" class="btn-cerrar-dificil">Hard<i class="boton_Dif"></i></BUTTON>
        </div>
    </div>

    <!-- menu juego al cerrar-->
    <div class="overlay" id="overlay2">
        <div class="popup" id="popup2">
            <h3>Juego finalizado</h3>
            <h4>Salidas laborales tiene el ciclo superior de DAW</h4>
            <p>Como puedes ver cada salida profesional tiene diferentes salidas profesionales y depende en que quieres especializarte tendremos diferentes salidas relacionadas entre si o completamente diferente.</p>
            <p id="aciertos" style="color: rgb(137, 245, 49);"  class="acioertos_js"></p>
            <p id="errores" style="color: rgb(173, 43, 34);" class="errores_js"></p>
            <p id="margin_border">- - - - - - - - - - - - - - - - - - - - - - - -</p>
            <p id="FINAL SCORE" ></p>
            <p id="score_final" style="font-size: 45px;"></p>

            <button href="https://www.google.es" id="btn-otros" class="btn-cerrar">Volver a los juegos<i class="boton_Facil"></i></BUTTON>
        </div>
    </div>




    <div class="juego_fondo">
        <!--test texto flotable -->
        <section class="draggable-items">
            <!--aqui saldran los arrastables-->
        </section>
        <section class="matching-pairs">
            <!--aqui saldran los dropeables-->
        </section>


    </div>
    </section>
    <div class="timer">Timer <span id="time">--:--</span></div>
    <section class="score">
        <span class="correct">0</span>/<span class="total">0</span>

        <!--<button id="play-again-btn">Reintentar</button>-->

        <script src="js/js.js"></script>
        
    </section>
    <div class="juego">
    </div>
    </div>
    <!-- <?php
            include("../../php_partials/footer.html");
            ?> -->
</body>
<script>
    window.onload = function() {
        overlay.classList.add('active');
        popup.classList.add('active');
    }
</script>

</html>