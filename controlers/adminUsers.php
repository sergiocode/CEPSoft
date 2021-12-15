<?php
    // Se inicia la session, si no lo está ya
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Se añade la conexión con la BD
    require_once $_SERVER['DOCUMENT_ROOT'] . "/CEPSoft/controlers/conectarBD.php";

    try {
        // Preparamos la sentencia MySQL utilizando PDO
        $sentencia = $conn->prepare('SELECT * FROM Usuarios');
        $sentencia->execute();
        // Se realiza una cuenta de filas en la BD
        $rows = $sentencia->rowCount();

        if ($rows > 0) {
            // Si cuenta 1 o más filas, muestra los usuarios de la BD
            $resultado = $sentencia->fetchALL();
            $_SESSION['usuarios'] = $resultado;
        } else {
            // Si no cuenta ningun usuario, muestra el siguiente mensaje
            $_SESSION['error'] = "No hay usuarios en la Base de Datos";
        }
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
    }
?>