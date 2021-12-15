<?php
    // Actualizar datos del usuario
    // Se inicia la session, si no lo está ya
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Se añaden la conexión y cierre con la BD
    require $_SERVER['DOCUMENT_ROOT'] . "/CEPSoft/controlers/conectarBD.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/CEPSoft/controlers/cerrarBD.php";

    // Se obtienen mediante método POST los datos introducidos
    $id = $_POST['id'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $usuario = $_POST['Usuario'];
    $password = $_POST['Password'];
    $correo = $_POST['Correo'];
    // $esAdmin = $_POST['esAdmin'];
    // $curso = $_POST['curso'];
    // $imagen = $_POST['imagen'];


    try {
        // Preparamos la sentencia MySQL utilizando PDO
        $sentencia = $conn->prepare('UPDATE Usuarios SET nombre = :nombre, apellido = :apellido, nickname = :nickname, password = :password, correo = :correo WHERE id_usuarios = :id');
        // BindParam relaciona los datos con la consulta y asegura un valor correcto
        $sentencia->bindParam(':id', $id);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':apellido', $apellido);
        $sentencia->bindParam(':nickname', $usuario);
        $sentencia->bindParam(':password', $password);
        $sentencia->bindParam(':correo', $correo);
        // $sentencia->bindParam(':esAdmin', $esAdmin);
        // $sentencia->bindParam(':imagen', $imagen);
        // $sentencia->bindParam(':curso', $curso);
        $sentencia->execute();
        $_SESSION['mensaje'] = "Usuario modificado correctamente";
    }
    // En caso de error, se muestra un mensaje de error
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    // Finalmente, cerramos la conexión con la BD
    finally {
        if (!is_null($conn)) {
            $conn = null;
        }
        header('Location: /CEPSoft/php_views/admin.php');
    }
?>