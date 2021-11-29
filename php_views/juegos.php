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
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="../style/juegos.css">
    <title>Juegos</title>
</head>
<body>
    <?php
        include("../php_partials/navBar.html");
    ?>
    <div class="containerJuegos">
        <h1>Juegos</h1>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id ligula vitae sem faucibus iaculis. Cras ligula ex, gravida quis consequat pharetra, ornare eu tellus. Fusce venenatis ex et elit porta semper vel sit amet sapien. Pellentesque magna erat, ultrices in mauris et, pharetra sodales odio. In a vehicula libero. Vivamus commodo elit diam, a euismod dui dignissim eget. Fusce a venenatis odio, id posuere ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur sed fringilla massa, vel rutrum lacus. Aenean dictum ligula blandit imperdiet malesuada.</p>
        <h2>Inicia sesión para jugar</h2>
        <a class="loginBtn" href="#" id="loginBtn">Inciar sesión</a>

        <div class="coleccionJuegos">
            <div class="miniaturaJuego" id="juego1">
                <a href="../games/game1/game1.php" class="accederJuegoBtn"> Jugar a FRASE!</a>
            </div>
            <div class="miniaturaJuego" id="juego2">
                <a href="" class="accederJuegoBtn"></a>
            </div>
            <div class="miniaturaJuego" id="juego3">
                <a href="" class="accederJuegoBtn"></a>
            </div>
            <div class="miniaturaJuego" id="juego4">
                <a href="" class="accederJuegoBtn"></a>
            </div>
        </div>

        <?php
            include("../php_partials/footer.html");
        ?>
    </div>
    
</body>
</html>