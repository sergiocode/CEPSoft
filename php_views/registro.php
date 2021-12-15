<?php

  include('../controlers/bd.php');

  session_start();

?>

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
  


  <!-- link propio-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="../style/registro.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/registrio.js"></script>
  <title>Juegos</title>
</head>

<body>
  <?php
  include("../php_partials/navBar.php");
  ?>

  <div class="overlay contenidoRegistro">
    <div class="ventada_form">
        <header class="head-form">
          <h2>Registro</h2>
        </header>
        <div>
          <button onClick="siguiente()" id="boton_2" class="fa fa-share" aria-hidden="true"></button>
          <button onClick="anterior()" id="boton_1" class="fa fa-reply" aria-hidden="true"></button>
          <img src="../media/img/avatar/perfil_user0.png" name="foto" class="img_avatar" />
         
         <!-- <div class="field-set" id=foto>Foto perfil</div>-->
        </div>
       <form id="myform" action="registro.php" method="POST">
       <input id="Diapositiva" type="hidden" name="Diapositiva" > <!-- estoe stara en -->
          <?php



if (isset($_POST['nombre'])) {
  $campos = array();
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password_hash = password_hash($password, PASSWORD_BCRYPT);//esto hace que sean 60
  $email = $_POST['email'];
  $img = $_POST['Diapositiva'];
  $curso =$_POST['curso'];

  $query = $connection->prepare("SELECT * FROM usuarios WHERE NickName= :username");
  $query->bindParam(':username', $username, PDO::PARAM_STR);
  $query->execute();

 
  if ($query->rowCount() > 0) {
    array_push($campos, "Ese NickName ya esta en uso");
  }
 
  if ($nombre == "") {
    array_push($campos, "El campo Nombre no pude estar vacío");
  }
  if ($apellido == "") {
    array_push($campos, "El campo Apellido no pude estar vacío");
  }
  if ($username == "") {
    array_push($campos, "El campo Username no pude estar vacío");
  }
  if ($password == "" || strlen($password) < 6) {
    array_push($campos, "El campo Password no puede estar vacío.");
  }
  if (strlen($password) < 6) {
    array_push($campos, "El campo Password tiene menos de 6 caracteres.");
  }
  if($email == "" || strpos($email, "@") === false){
    array_push($campos, "Ingresa un correo electrónico válido.");
  }
  
  if (count($campos) > 0) {
    echo "<div class='error'>";
    for ($i = 0; $i < count($campos); $i++) {
      echo "<li>" . $campos[$i] . "</i>";
      
    }
  } else {

    echo "<div class='correcto'>Datos correctos";
    $query = $connection->prepare("Insert into  usuarios (ID_Usuarios, Nombre, Apellido, Correo, NickName, Password, Esadmin, curso,foto) 
    values (default, :nombre, :apellido, :email, :username,:password_test, default, :curso, :img)");
    $query->bindParam(':nombre', $nombre,PDO::PARAM_STR);
    $query->bindParam(':apellido', $apellido,PDO::PARAM_STR);
    $query->bindParam(':email', $email,PDO::PARAM_STR);
    $query->bindParam(':username', $username,PDO::PARAM_STR);
    $query->bindParam(':password_test', $password_hash,PDO::PARAM_STR);
    $query->bindParam(':curso', $curso,PDO::PARAM_STR);
    $query->bindParam(':img', $img,PDO::PARAM_STR);
    $result = $query->execute();
  
   
    

}
echo "</div>";
}

          ?>
          <label>
          <br />
          <input class="inputs_class" type="text" name="nombre" placeholder=" Nombre">
          </label><br />
          <label>
          <br />
          <input class="inputs_class" type="text" name="apellido" placeholder=" Apellido">
          </label><br />
           <br />
          <input class="inputs_class" type="text" name="username" placeholder=" Usernamer">
          </label><br />
          <label>
          <br />
           <input class="inputs_class" id="pwd" type="password" placeholder=" Password" name="password" />
            </label><br />
           <!--<label> <i class="fa fa-eye" aria-hidden="true" type="button" id="ojo" style="padding: 16px 3px 18px 9px;"></i></label>-->

            <label>
            <br />
           <input class="inputs_class" type="text" name="email" placeholder=" Correo">
           </label><br /><br />

            <label>
             Curso de interes:<br />
           <select class="select_class" id="curso" name="curso">
          <option value="Daw">Diseño Aplicaciones Web</option>
           <option value="Dam">Diseño Aplicaciones Multiplataforma</option>
           <option value="Marketing">Marketing y publicidad</option>
           <option value="Turismo">Turismo</option>
            </select>
          </label></br>
        
          </br>
         

        <button class="sign-up" type="submit" value="enviar"> <i class="fas fa-sign-out-alt"></i>     Enviar</button>
       
          
     
      
        </form>
        <button class="sign-down" type="" value="enviar" onclick="location.href='login.php'"> <i class="fas fa-undo-alt"></i> Volver a login</button>
    </div>
  </div>
    
</body>

</html>