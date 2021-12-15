<!-- contenido natvar-->

<?php
 
    session_start();
?>
<nav>
    <div class="navLogo">
        <img src="/CEPSoft/media/img/logoCEP.png" alt="" class="cepLogo">
        <h3 class="cepTitle">Centre d'Estudis<br />Politècnics</h3>
    </div>
    <ul class="navLinks">
        <li><a class="navLink" href="/CEPSoft/index.php">Inicio</a></li>
        <li><a class="navLink" href="/CEPSoft/php_views/juegos.php">Juegos</a></li>
        <li><a class="navLink" href="/CEPSoft/php_views/contacto.php">Contacto</a></li>
        <li><a class="navLink" href="/CEPSoft/php_views/admin.php">ADMIN</a></li>
        <li><a class="loginBtn" href="/CEPSoft/php_views/login.php" id="loginBtn">Inciar sesión</a></li>
    </ul>

    <ul class="navLinks-desktop">
        <li><a class="navLink-desktop" href="/CEPSoft/index.php">Inicio</a></li>
        <li><a class="navLink-desktop" href="/CEPSoft/php_views/juegos.php">Juegos</a></li>
        <li><a class="navLink-desktop" href="/CEPSoft/php_views/contacto.php">Contacto</a></li>

        <?php
      
if(isset($_SESSION['user_id']) && $_SESSION['admin']==true){
    
    echo  '<li><a class="navLink-desktop" href="/CEPSoft/php_views/admin.php">ADMIN</a></li>';
} else{
    echo  '<li><a class="navLink-desktop">ADMIN </a></li>';
}
 ?>  
       <li><a class="loginBtn" href="/CEPSoft/php_views/login.php" id="loginBtn">
       <?php
      
if(isset($_SESSION['user_id'])){
    $variable_nav= $_SESSION['user_id'];
   echo $variable_nav;
} else{
    echo "Iniciar sesión";
}
 ?>
       </a></li>

       <?php
      
      if(isset($_SESSION['user_id'])){
          
         echo '<li><a class="sesionoff" href="/CEPSoft/php_views/login.php" id="sesionoff">Salir</a></l>';
      } else{
         
      }
       ?>
       
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>
<script src="/CEPSoft/js/navbarResponsive.js"></script>