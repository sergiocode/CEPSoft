 <?php
    // Se inicia la session, si no lo está ya
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['id'] = $_POST['id'];

    require_once $_SERVER['DOCUMENT_ROOT'] . "/proyecto/controladores/selectUser.php";
    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="/style/font_awesome/css/all.css">
        <script src="style/font_awesome/js/all.js"></script>
    </head>
    <body>
        <div class="container mt-3">
            <form action="controladores/updateUser.php" method="POST" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="id" name="id" placeholder="Id" value="<?php echo $user['id'] ?>" readonly required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Nombre" value="<?php echo $user['Nombre'] ?>" required autofocus>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="apellido" name="Apellido" placeholder="Apellido" value="<?php echo $user['Apellido'] ?>" required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="usuario" name="Usuario" placeholder="Usuario" value="<?php echo $user['Nickname'] ?>" required>
                </div>
                <div class="input-group mb-3">
                    <input type="mail" class="form-control" id="correo" name="Correo" placeholder="Correo" value="<?php echo $user['Correo'] ?>" required>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" name="Password" placeholder="Password" value="<?php echo $user['Password'] ?>" required>
                </div>
                <a href="admin.php" class="btn btn-secondary">Volver</a>
                <button type="submit" class="btn btn-primary" id="submit" name="submit">Guardar cambios</button>
            </form>
        </div>
    </body>
</html>