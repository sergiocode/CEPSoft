<?php

define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'politecnics');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}



function conectbs(){

$servername = "localhost";
$username = "root";
$password = "";

  $conexion = new PDO("mysql:host=$servername;dbname=politecnics", $username, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conexion->exec("set names utf8");//

  return $conexion;

}

function closebd(){
    return null;
}

function selec_user(){
    $conectarse = conectbs();

    $senteciaText ="select * from usuarios";
    

    $sentencia->execute();
    $resultado=$sentencia->fetchAll();
    $conectarse =closebd(); 
    return $resultado;
}

function registrar_usuario($nombre,$apellido,$email, $username,$password, $curso, $img){
    $default="defaul";
    $false="false";
    $conectarse = conectbs();

    $senteciaText ="Insert into  usuarios (ID_Usuarios, Nombre, Apellido, Correo, NickName, Password, Esadmin, curso,foto) 
    values (default, :nombre, :apellido, :email, :username,:password_test, default, :curso, :img) ";
    $sentencia=$conectarse->prepare($senteciaText);
   
    $sentencia->bindParam(':nombre', $nombre);
    $sentencia->bindParam(':apellido', $apellido);
    $sentencia->bindParam(':email', $email);
    $sentencia->bindParam(':username', $username);
    $sentencia->bindParam(':password_test', $password);
    $sentencia->bindParam(':curso', $curso);
    $sentencia->bindParam(':img', $img);
    
    $sentencia->execute();
  
    $conectarse =closebd(); 

}



?>