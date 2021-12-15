<!-- <?php
  session_start();
  include('../controlers/bd.php');

?> -->

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
    <link rel="stylesheet" href="../style/juegos.css">
    <title>Juegos</title>
</head>
<body>
    <?php
        include("../php_partials/navBar.php");
    ?>
    <div class="containerJuegos">
        <h1>Juegos</h1>
        <hr>
        <p class="presentacionJuegos">Desde Centre d'Estudis Politècnics volem mostrar el centre des d'un punt de vista interactiu. Oferim 4 jocs que reflecteixen la manera que tenim d'ensenyar i sobretot d'aprendre junts, a més dels mòduls i perfils professionals.</p>
        <?php
          if(!isset($_SESSION['user_id'])){
            echo  '<h2>Inicia sessió per jugar</h2>';
            echo '<a class="loginBtn" href="./login.php" id="loginBtn">Inciar sessió</a>';
          }
        ?>
        
        <div class="coleccionJuegos">



        <!---------------------------------------------------------------------------------juegos-->
        <?php
        //juego1 siempre activo 
        if(isset($_SESSION['user_id'])){
            echo  '<div class="miniaturaJuego" id="juego1">';
            echo '<a href="../games/game1/game1.php" class="accederJuegoBtn">Jugar Frase</a> </div>';
        }
        else{
            echo  '<div class="miniaturaJuego" id="juego1">';
            echo '<a class="accederJuegoBtn">BLOKEADO</a> </div>';
        }

        //sacaremos el select de el juego 1 
        if(isset($_SESSION['user_id'])){//si tiene sesion
         $username = $_SESSION['user_id'];
         $query = $connection->prepare("SELECT ID_Juego FROM juega WHERE NickName= :username and ID_Juego=1");
         $query->bindParam(':username', $username, PDO::PARAM_STR);
         $query->execute();
      
         $result = $query->fetch(PDO::FETCH_ASSOC);
      
      if(!$result){//SI ESTA VACIO
        echo  '<div class="miniaturaJuego" id="juego2">';
        echo '<a class="accederJuegoBtn">Pasa anterior</a> </div>';
       
      } else{//SI PUEDE ENTRAR
        echo  '<div class="miniaturaJuego" id="juego2">';
        echo '<a href="../games/game2/game2.php" class="accederJuegoBtn"> Salidas Profesionales!</a> </div>';
          
      }
      }else{//si la sesion no esta inicada
        echo  '<div class="miniaturaJuego" id="juego2">';
        echo '<a href="login.php" class="accederJuegoBtn"> BLOKEADO2</a> </div>';

          }  
    if(isset($_SESSION['user_id'])){//si tiene sesion
            $username = $_SESSION['user_id'];
            $query = $connection->prepare("SELECT ID_Juego FROM juega WHERE NickName= :username and ID_Juego=2");
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->execute();
         
            $result2 = $query->fetch(PDO::FETCH_ASSOC);
         
         if(!$result2){//SI ESTA VACIO
           echo  '<div class="miniaturaJuego" id="juego3">';
           echo '<a  class="accederJuegoBtn">Pasa anterior</a> </div>';
          
         } else{//SI PUEDE ENTRAR
           echo  '<div class="miniaturaJuego" id="juego3">';
           echo '<a href="../games/game3/game3.php" class="accederJuegoBtn">Modulos</a> </div>';
             
         }
         }else{//si la sesion no esta inicada
           echo  '<div class="miniaturaJuego" id="juego3">';
           echo '<a href="login.php" class="accederJuegoBtn"> BLOKEADO</a> </div>';
   
             }

             if(isset($_SESSION['user_id'])){//si tiene sesion
                $username = $_SESSION['user_id'];
               $query = $connection->prepare("SELECT ID_Juego FROM juega WHERE NickName= :username and ID_Juego=3");
                $query->bindParam(':username', $username, PDO::PARAM_STR);
                $query->execute();
             
                $result3 = $query->fetch(PDO::FETCH_ASSOC);
             
             if(!$result3){//SI ESTA VACIO
               echo  '<div class="miniaturaJuego" id="juego4">';
               echo '<a  class="accederJuegoBtn">Pasa anterior</a> </div>';
              
             } else{//SI PUEDE ENTRAR
               echo  '<div class="miniaturaJuego" id="juego4">';
               echo '<a href="../games/game4/game4.php" class="accederJuegoBtn">Modulos</a> </div>';
                 
             }
             }else{//si la sesion no esta inicada
               echo  '<div class="miniaturaJuego" id="juego4">';
               echo '<a href="login.php" class="accederJuegoBtn"> BLOKEADO2</a> </div>';
       
                 }

       ?>
            
          
            
            
        </div>

        <?php
            include("../php_partials/footer.html");
        ?>
    </div>
    
</body>
</html>