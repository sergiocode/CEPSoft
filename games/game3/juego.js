
window.onload = function () {

    //Variables 
    username;
    let id_juego = 3;

    var juego = false;

    var puntuacion = 0;
    var contador = 60;

    var botonIniciar = document.getElementById("empezar");
    var siguiente = document.getElementById("siguiente");


    //variables productos 
    var clase1 = document.getElementById("clase1");
    var clase2 = document.getElementById("clase2");
    var clase3 = document.getElementById("clase3");


    // variables estudiante y movimineto teclado 
    var estudiante = document.getElementById("estudiante");
    var izquierda = 37;
    var derecha = 39;


    // variables para detector de colisiones
    var estudiantew, estudianteh, estudiantex, estudiantey;
    var clase1w, clase1h, clase1x, clase1y;
    var clase2w, clase2h, clase2x, clase2y;
    var clase3w, clase3h, clase3x, clase3y;

    //velociddades en las que se mueven los divs
    var velocitat = 25;
    var aumentarvelocidad = 10;

    siguiente.style.visibility = "hidden";

    document.addEventListener("keydown", function (key) { // movimiento de las teclas 

        if (key.keyCode == izquierda) {
            var posicionestudiante = parseInt(window.getComputedStyle(estudiante).getPropertyValue("left"));
            console.log(posicionestudiante);
            if (posicionestudiante >= 22) {
                var posicionNueva = posicionestudiante - velocitat;
                estudiante.style.left = posicionNueva + 'px';
            }
        }
        else if (key.keyCode == derecha) {
            var posicionestudiante = parseInt(window.getComputedStyle(estudiante).getPropertyValue("left"));
            if (posicionestudiante < 720) {
                var posicionNueva = posicionestudiante + velocitat;
                estudiante.style.left = posicionNueva + 'px';
            }
        }
    });

    setInterval(function () { // funcio per a que els productes caiguin en un interval de temps 
        if (juego == true) {//condicion para que se pare el juego 
            var clase1top = parseInt(window.getComputedStyle(clase1).getPropertyValue("top"));
            var clase2top = parseInt(window.getComputedStyle(clase2).getPropertyValue("top"));
            var clase3top = parseInt(window.getComputedStyle(clase3).getPropertyValue("top"));
            var posiciontopnueva1;
            var posiciontopnueva2;
            var posiciontopnueva3;

            if (clase1top < 450) {
                posiciontopnueva1 = clase1top + 6;
                clase1.style.top = posiciontopnueva1 + 'px';

            } else if (clase1top >= 450) {
                clase1.style.top = '0px';
                clase1.style.left = numAleatorio() + 'px';
                clase1.style.backgroundImage = imagenAleatoria();//recoremos la funcion para cambio de imagenes 
            }
            if (clase2top < 450) {
                posiciontopnueva2 = clase2top + 4;
                clase2.style.top = posiciontopnueva2 + 'px';

            } else if (clase2top >= 450) {
                clase2.style.top = '0px';
                clase2.style.left = numAleatorio() + 'px';
                clase2.style.backgroundImage = imagenAleatoria();//recoremos la funcion para cambio de imagenes 
            }
            if (clase3top < 450) {
                posiciontopnueva3 = clase3top + 6;
                clase3.style.top = posiciontopnueva3 + 'px';
            } else if (clase3top >= 450) {
                clase3.style.top = '0px';
                clase3.style.left = numAleatorio() + 'px';
                clase3.style.backgroundImage = imagenAleatoria();//recoremos la funcion para cambio de imagenes 
            }
        }
    }, 50);

    function numAleatorio() { // funcio per que els productes es moguin aleatoriament 
        var numAleatorio = Math.floor(Math.random() * 10);

        switch (numAleatorio) {
            case 0: var posicionleft = 40;
                break;
            case 1: var posicionleft = 90;
                break;
            case 2: var posicionleft = 180;
                break;
            case 3: var posicionleft = 260;
                break;
            case 4: var posicionleft = 330;
                break;
            case 5: var posicionleft = 410;
                break;
            case 6: var posicionleft = 490;
                break;
            case 7: var posicionleft = 580;
                break;
            case 8: var posicionleft = 650;
                break;
            case 9: var posicionleft = 700;
                break;
        }
        return posicionleft;
    }


    function imagenAleatoria() {// funcio per imatges aleatorias 

        var numAleatorioImg = Math.floor(Math.random() * 7);

        switch (numAleatorioImg) {
            case 0: var imagen = "url('img/php.png')";
                break;
            case 1: var imagen = "url('img/javascript.png')";
                break;
            case 2: var imagen = "url('img/cplus.png')";
                break;
            case 3: var imagen = "url('img/css.png')";
                break;
            case 4: var imagen = "url('img/html.png')";
                break;
            case 5: var imagen = "url('img/java.png')";
                break;
            case 6: var imagen = "url('img/bash.png')";
                break;
        }
        return imagen;
    }

/*     var img = getRandomImage();

    const getRandomImage = () => {
        const numAleatorioImg = Math.floor(Math.random() * 7);
        const images = [
            "img/php.png",
            "img/javascript.png",
            "img/cplus.png"
        ]

        return `url('${images[numAleatorioImg]}')`;
    } */

    setInterval(function deteccioncolision() { // deteccion de los productos con la estudiante 


        //   const colision =  document.querySelectorAll(".productos"); 

        estudiantew = estudiante.offsetWidth;
        estudianteh = estudiante.offsetHeight;
        estudiantex = estudiante.offsetLeft;
        estudiantey = estudiante.offsetTop;

        clase1w = clase1.offsetWidth;
        clase1h = clase1.offsetHeight;
        clase1x = clase1.offsetLeft;
        clase1y = clase1.offsetTop;

        clase2w = clase2.offsetWidth;
        clase2h = clase2.offsetHeight;
        clase2x = clase2.offsetLeft;
        clase2y = clase2.offsetTop;

        clase3w = clase3.offsetWidth;
        clase3h = clase3.offsetHeight;
        clase3x = clase3.offsetLeft;
        clase3y = clase3.offsetTop;

        if (juego == true) {// condicio para iniciar 
            // comprobamos que alla colision prducto1
            if ((estudiantex + estudiantew) > clase1x && estudiantex < (clase1x + clase1w)
                && (estudiantey + estudianteh) > clase1y && estudiantey < (clase1y + clase1h)) {
                // hacemos que al hacer colision desaparezca
                puntuacion = puntuacion + 5;
                clase1.style.top = '0px';
                clase1.style.left = numAleatorio() + 'px';
                clase1.style.backgroundImage = imagenAleatoria();//recoremos la funcion para cambio de imagenes 
            }

            // comprobamos que alla colision clase2
            if ((estudiantex + estudiantew) > clase2x && estudiantex < (clase2x + clase2w)
                && (estudiantey + estudianteh) > clase2y && estudiantey < (clase2y + clase2h)) {
                // hacemos que al hacer colision desaparezca
                puntuacion = puntuacion + 5;
                clase2.style.top = '0px';
                clase2.style.left = numAleatorio() + 'px';
                clase2.style.backgroundImage = imagenAleatoria();//recoremos la funcion para cambio de imagenes 
            }

            // comprobamos que alla colision clase3
            if ((estudiantex + estudiantew) > clase3x && estudiantex < (clase3x + clase3w)
                && (estudiantey + estudianteh) > clase3y && estudiantey < (clase3y + clase3h)) {
                // hacemos que al hacer colision desaparezca
                puntuacion = puntuacion + 5;
                clase3.style.top = '0px';
                clase3.style.left = numAleatorio() + 'px';
                clase3.style.backgroundImage = imagenAleatoria();//recoremos la funcion para cambio de imagenes 
            }
        }
    });

    //contador para que el jugador tenga un minuto ,repetimos la funcion en un intervalo de (1 segundo)
    var tiempojuego = setInterval(function () {

        if (juego == true) {
            contador = contador - 1;
            document.getElementById("contador").innerHTML = "<p> Tiempo <br>" + contador + "</p>";
            if (contador <= 0) {
                clearInterval(tiempojuego);
                final();
            }
        } else {
            juego == false;
        }
    }, 1000);


    intervalpuntuacion = setInterval(function () {//funcio per a la puntuacio 
        document.getElementById("puntuacion").innerHTML = "<p> puntuacion <br>" + puntuacion + "</p>";
            if (puntuacion >= 100) {
                // alert("fin de juego");
                clearInterval(intervalpuntuacion);
                final();
            }
    }, 100);

    function final() { //funcion para terminar juego 
        clase1.style.display = "none";
        clase2.style.display = "none";
        clase3.style.display = "none";
        alert("juego finalizado");
        juego = false;
        ajax_mandar();
    }

    botonIniciar.addEventListener("click", function () {//funcion para empezar juego 
        juego = true;
        botonIniciar.style.visibility = "hidden";
        clase1.style.display = "block";
        clase2.style.display = "block";
        clase3.style.display = "block";
    })
    function ajax_mandar(){
        $.ajax({
            method: 'Post',
            url: 'conections_form.php', //cambia la direccion a tu juego 
            data: {nombre_usuario:username, score:puntuacion, id_game:id_juego},
            success:function(){
            console.log(username);
            console.log(puntuacion);
            console.log(id_juego);
            }   
        })
    }
}