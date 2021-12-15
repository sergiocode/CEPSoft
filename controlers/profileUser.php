<?php
    // Se inicia la session, si no lo está ya
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Se añaden la conexión y cierre con la BD
    require $_SERVER['DOCUMENT_ROOT'] . "/CEPSoft/controlers/conectarBD.php";
    require_once $_SERVER['DOCUMENT_ROOT'] . "/CEPSoft/controlers/cerrarBD.php";

    // Mediante la variable session se obtiene el ID a buscar
    $id = $_SESSION['user']['id'];

    try {
        // Preparamos la sentencia MySQL utilizando PDO
        $sentencia = $conn->prepare('SELECT * FROM Usuarios WHERE (id_usuarios = :id)');
        // BindParam relaciona los datos con la consulta y asegura un valor correcto
        $sentencia->bindParam(':id', $id);
        $sentencia->execute();

        $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user'] = $resultado;
    }
    // En caso de error, se muestra un mensaje de error
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>