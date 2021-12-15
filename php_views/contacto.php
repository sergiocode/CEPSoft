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
    <link rel="stylesheet" href="../style/contacto.css">
    <title>Contacte</title>
</head>
<body>
    <?php
        include("../php_partials/navBar.php");
    ?>
    
    <div class="contactContent">
        <div class="infoContacto">
            <div class="header">
                <h1>Contacte</h1>
                <p>Disposem de dos edificis, un a la Plaça Urquinaona i altre a Carrer de Santa Anna. Les nostres formacions presencials es reparteixen en aquests dos.</p>
            </div>
            
        </div>
        <div class="mapasDirecciones">
            <div class="col" id="colUrquinaona">
                <h2>Centre Urquinaona</h2>
                <li class="listaInfo">
                    <ul>Plaça Urquinaona, 10 08010 Barcelona</ul>
                    <ul>93 302 02 24</ul>
                    <ul>info@politecnics.barcelona</ul>
                </li>
                
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.3285394118598!2d2.1710863161251557!3d41.388670979264035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f05d80e233%3A0x999036411babe70f!2sCentre%20d&#39;Estudis%20Polit%C3%A8cnics%3A%20Urquinaona!5e0!3m2!1ses!2ses!4v1639090371648!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col" id="colSantaAnna">
                <h2>Centre Santa Anna</h2>
                <li class="listaInfo">
                    <ul>C/Santa Anna, 28 08002 Barcelona</ul>
                    <ul>93 302 41 06</ul>
                    <ul>info@politecnics.barcelona</ul>
                </li>
                
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.476200196105!2d2.1698725161250403!3d41.38546367926437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2f6d5a85583%3A0xfae8012bd1a41d1c!2sCentre%20d&#39;Estudis%20Polit%C3%A8cnics%3A%20Santa%20Anna!5e0!3m2!1ses!2ses!4v1639090397484!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

</body>
</html>