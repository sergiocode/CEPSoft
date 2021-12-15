<?php
    session_start();
    $DEFAULT_LANG = "es";
    $currentPage = "juego.php";

    if (isset($_POST['lang'])) {
        $_SESSION['language'] = $_POST['lang'];
    } else if (!isset($_SESSION['language'])) {
        $_SESSION['language'] = $DEFAULT_LANG;
    }

    
    $variable_php= $_SESSION['user_id'];
    echo '<script languaje="JavaScript"> var username="'.$variable_php.'";</script>';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/juego.css" type="text/css">
    <link rel="stylesheet" href="../assets/libraries/Font-awesome/css/all.css">

        <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Ajax -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Importo jQuery para poder utilizar ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <script src="juego.js" language="javascript" type="text/javascript"></script>
    <title>Juego</title>

</head>
<body>

    <div id="fondoJuego" class="container"> 
        <div id="estudiante" class="estudiante">  </div>
        <div id="clase1" class="clase"> </div>
        <div id="clase2" class="clase"> </div>
        <div id="clase3" class="clase"> </div>
        <div id="contador" class="border 1px"></div>
        <div id="puntuacion" class="border 1px"></div>
        <button type="button" id="empezar" class="border 1px">Empezar</button>
        <button type="button" id="siguiente" class="border 2px"></button>
    </div>
    <!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/vendor/counterup/counterup.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script></script>
</html>