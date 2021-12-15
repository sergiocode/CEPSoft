<?php
    include('../controlers/bd.php');
    session_start();
 
    if(isset($_SESSION['user_id'])){
      session_destroy();
      header('Location: http://localhost/CEPSoft/index.php');
    }
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
  <link rel="stylesheet" type="text/css" href="../style/login.css" />
  <script type="text/javascript" src="../js/registrio.js"></script>
  <title>Login</title>
</head>

<body>
  
  <?php
    include("../php_partials/navBar.php");
  ?>

  <div class="contenidoLogin">
      <div class="containerLogin">
        <h1>Iniciar sesión</h1>
        <p class="textoLogin">Guarda tu progreso en los juegos iniciando sesion o crea una nueva cuenta para navegar y recibir informacion de los cursos que estes interesados, la informaion que introduzcas no sera usada en nada fuera de los juegos </p>

        <button id="open" class="login_button">Login</button>
        <div id="modal_container" class="modal-container">
          <div class="modal">
            <!-- conenido -->
            <div class=formularios>
          
            <form method="post" action="" name="signin-form">
              <header class="head-form">
                <h2>Login</h2>
              </header>

                    <?php
                  
                      if (isset($_POST['login'])) {
                      
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                    
                        $query = $connection->prepare("SELECT * FROM usuarios WHERE NickName= :username");
                        $query->bindParam(':username', $username, PDO::PARAM_STR);
                        $query->execute();
                    
                        $result = $query->fetch(PDO::FETCH_ASSOC);
                    
                        if (!$result) {
                            echo '<p class="error">Usuario no valido</p>';
                        } else {
                        
                          $passw= $result['Password'];
                          
                            /* if (password_verify( $test, $result['Contraseña'])) {//aqui comparo la contraseña */
                              if (password_verify($password, $passw)) {//aqui comparo la contraseña 
                            
                                $_SESSION['user_id'] = $result['NickName'];
                                $_SESSION['admin'] = $result['Esadmin'];
                                header("Location: ../index.php");
                                echo '<p class="success">Congratulations, you are logged in!</p>';
                            } else {
                                echo '<p class="error">Password no valido</p>';
                            }  
                          }
                        }

                    ?>
                    <div class="form-element">
                      <label></label>
                      <input class="inputs_class" type="text" name="username" placeholder=" Usernamer">
                    </div>

                    <br/>

                    <div class="form-element">
                      <label></label>
                      <input class="inputs_class" id="pwd" type="password" placeholder=" Password" name="password" />
                    </div>

                  <button type="submit" name="login" value="login">Log In</button></br>
                  <button id="close" class="reg">Cerrar</button>
            </form>
          
            </div>
          </div>

        </div>


        <button id="open2" class="reg_botton" onclick="location.href='./registro.php'">Registro</button>



        </div>
      </div>
  </div>
  
  
  <script type="text/javascript" src="../js/login_regis.js"></script>
</body>

</html>