<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./media/img/alexFront1.png" />
    <link rel="stylesheet" href="../../style/styles.css">
    <link rel="stylesheet" href="../../style/juegos.css">

    <!-- LINKS JUEGO -->
    <link rel="stylesheet" href="./style.css">
    <script src="./game.js"></script>
    <title>Conoce nuestra FRASE!</title>
</head>
<body>
    <?php
        include("../../php_partials/navBar.html");
    ?>
    

    <div class="juegoContainer">

        <div class="containerDialogo">
            <div class="imagenNarrador">
                <img src="./media/img/iris.png" alt="">
            </div>
            <div class="textoNarrador">
                <p class="outputTexto">Hola! Soy <b>Iris</b>, el asistente virtual de Centre d'Estudis Politècnics.
                    Esto es un ejemplo de texo en el cuadro de dálogos del juego.
                </p>
                <div class="itemsBox"></div>
            </div>
        </div>

        <div class="juego" id="gameScreen">
            <div id="character" class="alexFront"></div>
            <!-- <div class="collision"></div> -->
            <div class="coche"></div>

            <!-- Gemas -->
            <div id="gemaF" class="gema"></div>
            <div id="gemaR" class="gema"></div>
            <div id="gemaA" class="gema"></div>
            <div id="gemaS" class="gema"></div>
            <div id="gemaE" class="gema"></div>
        </div>

    </div>
    <!-- <?php
        include("../php_partials/footer.html");
    ?> -->
</body>
</html>