<?php
    // Se inicia la session, si no lo está ya
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    $variable_php = $_SESSION['user_id'];
    echo '<script languaje="JavaScript"> var username="'.$variable_php.'"; </script>';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Juego</title>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style/juego.css">
        <script src="js/juego.js"></script>
    </head>
    <body onload="cambiarImagen()">
        <!-- INSTRUCCIONES -->
        <div class="mensajeIncial">
            Selecciona y arrastra los iconos en las cajas que hay debajo para acumular puntos y completar el nivel.<br>
            Intenta averiguar que herramientas/programas se usan en el ciclo.<br>
            Por cada acierto, recibirás 100 puntos.
            Recuerda que hay un tiempo límite para completar el minijuego.
        </div>
        <!-- BOTÓN INICIAR JUEGO -->
        <div class="boton">
            <!-- <button id="reintentar" onclick="reitentar();">Reintentar</button> -->
            <button id="jugar" style="display: inline;" onclick="jugar();">Jugar</button>
        </div>
        <!-- DATOS DEL JUEGO -->
        <div class="datosJuego">
            <div id="contador">
                Tiempo: <span id="segundos">60</span>
            </div>
            <div id="puntuacion">
                Puntos: <span id="valor">0</span>
            </div>
        </div>
        <!-- TABLERO DEL JUEGO -->
        <div class="juego">
            <div id="uno" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia1" class="imagen1" alt="Imagen aleatoria" src="">
            </div>
            <div id="dos" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia2" class="imagen2" alt="Imagen aleatoria" src="">
            </div>
            <div id="tres" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia3" class="imagen3" alt="Imagen aleatoria" src="">
            </div>
            <div id="cuatro" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia4" class="imagen4" alt="Imagen aleatoria" src="">
            </div>
            <div id="cinco" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia5" class="imagen5" alt="Imagen aleatoria" src="">
            </div>
            <div id="seis" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia6" class="imagen6" alt="Imagen aleatoria" src="">
            </div>
            <div id="siete" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia7" class="imagen7" alt="Imagen aleatoria" src="">
            </div>
            <div id="ocho" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia8" class="imagen8" alt="Imagen aleatoria" src="">
            </div>
            <div id="nueve" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia9" class="imagen9" alt="Imagen aleatoria" src="">
            </div>
            <div id="diez" style="display: none;" ondragstart="dragStart(event);" ondragend="dragEnd(event);" draggable="true">
                <img id="ia10" class="imagen10" alt="Imagen aleatoria" src="">
            </div>
        </div>
        <!-- CONTENEDORES PARA DEJAR LOS ICONOS -->
        <div class="contenedor">
            <div id="correcto" class="cajaCorrecta" style="display: none;" ondragover="dragOver(event);" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="dropCorrect(event);">Correcto</div>
            <div id="incorrecto" class="cajaIncorrecta" style="display: none;" ondragover="dragOver(event);" ondragenter="dragEnter(event)" ondragleave="dragLeave(event)" ondrop="dropIncorrect(event);">Incorrecto</div>
        </div>
    </body>
</html>