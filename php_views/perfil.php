<?php
// Se inicia la session, si no lo está ya
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['user']['id'] = 1;

require_once $_SERVER['DOCUMENT_ROOT'] . "/CEPSoft/controlers/profileUser.php";

if (isset($_SESSION['user'])) {
    $user = [];
    $user = $_SESSION['user'];
}
// else {
//     header('Location: ' . $rutas["form_login"]);
// }

// $DEFAULT_LANG = "es";
// $currentPage = "perfil.php";

// if (isset($_POST['lang'])) {
//     $_SESSION['language'] = $_POST['lang'];
// } else if (!isset($_SESSION['language'])) {
//     $_SESSION['language'] = $DEFAULT_LANG;
// }

// $contentFile = $_SERVER['DOCUMENT_ROOT'] . "-Ruta absoluta donde se ubica el fichero-" . $_SESSION['language'] . ".json";
// $contentJson = file_get_contents($contentFile);
// $content = json_decode($contentJson, true);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Perfil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../style/font_awesome/css/all.css">
        <script src="../style/font_awesome/js/all.js"></script>

        <link rel="stylesheet" href="../style/perfil.css">
    </head>
    <body>
        <div class ="container contenedor">
            <div class="col-6">
                <div class="card tarjeta">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <h3 class="card-title nombre"><?php echo $user['NickName'] ?></h3>
                                <p class="card-text texto"><?php echo $user['Nombre'] ?></p>
                                <p class="card-text texto"><?php echo $user['Apellido'] ?></p>
                                <p class="card-text texto"><?php echo $user['Correo'] ?></p>
                            </div>
                            <div class="col-4 img">
                                <img src="../media/img/avatar/perfil_user2.png" class="rounded-circle img-fluid">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p class="card-text texto">Progreso en juegos</p>
                            <div class="progresses">
                                <div class="steps-completed"> <span><i class="fa fa-check"></i></span> </div> <span class="line"></span>
                                <div class="steps"> <span class="font-weight-bold">2</span> </div> <span class="line"></span>
                                <div class="steps"> <span class="font-weight-bold">3</span> </div> <span class="line"></span>
                                <div class="steps"> <span class="font-weight-bold">4</span> </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <p class="card-text texto">Puntuación total:</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>