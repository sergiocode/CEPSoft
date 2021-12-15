username;
let id_juego = 4;

// VARIABLES PARA CONTROLAR EL JUEGO
var puntuacion = 0;
var juego = false;
var items = 0;

// INICIAMOS EL JUEGO CON EL BOTON JUGAR
function jugar() {
    // Mostramos los iconos y los contenedores
    document.getElementById("jugar").style.display = "none";
    document.getElementById("correcto").style.display = "flex";
    document.getElementById("incorrecto").style.display = "flex";
    document.getElementById("uno").style.display = "block";
    document.getElementById("dos").style.display = "block";
    document.getElementById("tres").style.display = "block";
    document.getElementById("cuatro").style.display = "block";
    document.getElementById("cinco").style.display = "block";
    document.getElementById("seis").style.display = "block";
    document.getElementById("siete").style.display = "block";
    document.getElementById("ocho").style.display = "block";
    document.getElementById("nueve").style.display = "block";
    document.getElementById("diez").style.display = "block";

    var contador = 60; // Variable del tiempo

    juego = true;

    // CONTROLAMOS LOS DROPS
    var comprobar = setInterval(function () {
        if (items == 10) {
            terminado();
            clearInterval(comprobar);
        }
    }, 100);

    // CONTROLAMOS EL CONTADOR
    var tiempo = setInterval(function () {
        if (juego == true) {
            if (contador != 0) {
                contador = contador - 1;
                document.getElementById("segundos").innerHTML = contador;
                if (contador == 0) {
                    terminado();
                    clearInterval(tiempo);
                }
            }
        } else {
            juego == false;
        }
    }, 1000);

    // CONTROLAMOS LA PUNTUACION
    var puntos = setInterval(function () {
        if (contador != 0) {
            document.getElementById("valor").innerHTML = puntuacion;
            if (puntuacion == 1000) {
                clearInterval(puntos);
            }
        }
    }, 100);
}

// GENERAMOS IMAGENES ALEATORIAS
// Creamos un numero aleatorio
function aleatorio(n) {
    return(Math.floor(Math.random() * n + 1 ));
}

// Creamos un array de imagenes
var imagenes = new Array();
imagenes[0] = "media/correcto/1.png";
imagenes[1] = "media/correcto/2.png";
imagenes[2] = "media/correcto/3.png";
imagenes[3] = "media/correcto/4.png";
imagenes[4] = "media/correcto/5.png";
imagenes[5] = "media/correcto/6.png";
imagenes[6] = "media/correcto/7.png";
imagenes[7] = "media/correcto/8.png";
imagenes[8] = "media/correcto/9.png";
imagenes[9] = "media/correcto/10.png";
imagenes[10] = "media/correcto/11.png";
imagenes[11] = "media/correcto/12.png";
imagenes[12] = "media/incorrecto/1.png";
imagenes[13] = "media/incorrecto/2.png";
imagenes[14] = "media/incorrecto/3.png";
imagenes[15] = "media/incorrecto/4.png";
imagenes[16] = "media/incorrecto/5.png";
imagenes[17] = "media/incorrecto/6.png";
imagenes[18] = "media/incorrecto/7.png";
imagenes[19] = "media/incorrecto/8.png";
imagenes[20] = "media/incorrecto/9.png";
imagenes[21] = "media/incorrecto/10.png";
imagenes[22] = "media/incorrecto/11.png";
imagenes[23] = "media/incorrecto/12.png";
imagenes[24] = "media/incorrecto/13.png";
imagenes[25] = "media/incorrecto/14.png";
imagenes[26] = "media/incorrecto/15.png";

// ESTÁ EN EL BODY, ONLOAD PARA QUE NO SE REPITAN LAS IMAGENES AL ACTUALIZAR LA PÁGINA
function cambiarImagen() {
    // Generamos en los divs con los siguientes ids imagenes aleatorios
    document.getElementById("ia1").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia2").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia3").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia4").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia5").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia6").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia7").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia8").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia9").src = imagenes[aleatorio(imagenes.length)-1];
    document.getElementById("ia10").src = imagenes[aleatorio(imagenes.length)-1];
}

// FUNCIONES - ELEMENTOS ARRASTRADOS
function dragStart(event) {
    event.dataTransfer.setData('text/plain', event.target.id);
    event.currentTarget.style.border = "3px solid #ccc";
    event.currentTarget.style.opacity = "0.001";
}

function dragEnd(event) {
    event.currentTarget.style.border = "2px solid #fff";
    event.currentTarget.style.opacity = "";
}

// FUNCIONES - CAJAS DONDE SE ARRASTRAN LOS ELEMENTOS
function dragEnter(event) {
    event.preventDefault();
    event.currentTarget.style.background = "#f4f4f4";
}

function dragLeave(event) {
    event.currentTarget.style.background = "white";
}

function dragOver(event) {
    event.preventDefault();
}

// CAJA CORRECTA
function dropCorrect(event) {
    event.currentTarget.style.background = "#ABEBC6";
    
    // Guardamos el id del elemento que arrastramos para hacer modificaciones sobre él
    let id = event.dataTransfer.getData('text');
    let elementoSeleccionado = document.getElementById(id);

    // Guardamos el tipo de imagen que es
    let imagenCorrecta = elementoSeleccionado.src;
    let resultado = imagenCorrecta.substring(48, 56);

    items++; // Guardamos el numero de iconos soltados
    
    // Sumamos si soltamos el icono correcto en el contenedor
    if (resultado === "correcto") {
        puntuacion += 100;
    }

    // Eliminamos el icono que soltamos
    elementoSeleccionado.remove();
    event.dataTransfer.clearData();
}

// CAJA INCORRECTA
function dropIncorrect(event) {
    event.currentTarget.style.background = "#F5B7B1";

    // Guardamos el id del elemento que arrastramos para hacer modificaciones sobre él
    let id = event.dataTransfer.getData('text');
    let elementoSeleccionado = document.getElementById(id);

    // Guardamos el tipo de imagen que es
    let imagenIncorrecta = elementoSeleccionado.src;
    let resultado = imagenIncorrecta.substring(48, 58);

    items++; // Guardamos el numero de iconos soltados

    // Sumamos si soltamos el icono correcto en el contenedor
    if (resultado === "incorrecto") {
        puntuacion += 100;
    }

    // Eliminamos el icono que soltamos
    elementoSeleccionado.remove();
    event.dataTransfer.clearData();
}

// FINAL DEL JUEGO - CUANDO FINALIZA EL TIEMPO
function terminado() {
    // Ocultamos los iconos y los contenedores al finalizar el juego
    document.getElementById("correcto").style.display = "none";
    document.getElementById("incorrecto").style.display = "none";
    document.getElementById("uno").style.display = "none";
    document.getElementById("dos").style.display = "none";
    document.getElementById("tres").style.display = "none";
    document.getElementById("cuatro").style.display = "none";
    document.getElementById("cinco").style.display = "none";
    document.getElementById("seis").style.display = "none";
    document.getElementById("siete").style.display = "none";
    document.getElementById("ocho").style.display = "none";
    document.getElementById("nueve").style.display = "none";
    document.getElementById("diez").style.display = "none";

    // Si conseguimos el máximo de puntos, muestra un mensaje
    // Sino, muestra otro
    if (puntuacion == 1000) {
        alert("¡Felicidades, has conseguido la puntuación máxima!\nTu puntuación: " + puntuacion + " puntos");
    } else {
        alert("Tu puntuación: " + puntuacion + " puntos");
    }
    
    juego = false;

    ajax_mandar();
}

// ENVIAR PUNTUACIÓN A LA BD
function ajax_mandar() {
    $.ajax({
        method: 'Post',
        url: 'conections_form.php',
        data: {nombre_usuario:username, score:puntuacion, id_game:id_juego},
        success:function() {
            console.log(username);
            console.log(puntuacion);
            console.log(id_juego);
        }
    })
}