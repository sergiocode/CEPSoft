<?php 
session_start();
//include('..\games\game2\controlers\bd.php');

define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'politecnics');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}



$nickname=$_POST['nombre_usuario'];
$puntuacion = $_POST['score'];
$id_game = $_POST['id_game'];
$juegofinalizado=true;



    $query = $connection->prepare("Insert into juega(id, NickName, ID_Juego, juego_finalizado,puntuacion_juego)
    values (default, :nickname, :ID_juego, :juegofinalizado, :puntuacion_juego)");
    $query->bindParam(':nickname', $nickname,PDO::PARAM_STR);
    $query->bindParam(':ID_juego', $id_game,PDO::PARAM_STR);
    $query->bindParam(':juegofinalizado', $juegofinalizado,PDO::PARAM_STR);
    $query->bindParam(':puntuacion_juego', $puntuacion,PDO::PARAM_STR);
    $result = $query->execute();

 
?>
