//trabajos

// https://www.ifp.es/blog/las-salidas-laborales-de-la-fp-en-desarrollo-de-aplicaciones-web

const jobs = [
  {
    name: "job1",//base de datos manager
    name_marca: "Job1",
    color: "#ff0000",
    background: "img/daw/job1_limpio.png",
    description: "Soy un Back-end developer, me dedico a la creacion y mantenimiento de las base de datos de la compañia. ",
    need: "Base de datos manager"
  },
  {
    name: "job2",//programador api
    name_marca: "Job2",
    color: "#fd5c63",
    background: "img/daw/job2_limpio.png",
    description: "Me dedico a la creacion de interfaces que interactuan con codigos de terceros para permitir conexion entre 2 equipos",
       need: "Programador Api"
  },
  {
    name: "job3", //programador multimedia
    name_marca: "job3",
    color: "#333333",
    background: "img/daw/job3_limpio.png",
    description: "Desarrollo aplicaciones para diferentes dispositivos con diferentes tipos de contenidos como imágenes, gráficos, videoclips, realidad virtual, animación digital, etc",
       need: "Programador multimedia"
  },
  {
    name: "job4", //Administrador de aplicaciones en entorno web
    name_marca: "job4",
    color: "#a4c639",
    background: "img/daw/job4_limpio.png",
    description: "Andministro aplicaciones en diferentes entornos web, para tener conexion entre nuestra web y la base de datos",
       need: "Administrador entorno web"
    
  },
  {
    name: "job5", //Asesor o consultor en desarrollo web
    name_marca: "job5",
    color: "#000000",
    background: "img/daw/job5_limpio.png",
    description: "Soy uno de los principales responsables en el asesoramiento y adminsitracion de nuestros clientes a la hora de informarles sobre nuestros poyectos",
       need: " Consultor en desarrollo web"
  },
  {
    name: "job6",  //Especialista en analítica web
    name_marca: "job6",
    color: "#b52e31",
    background: "img/daw/job6_limpio.png",
    description:"Me encargo de la integracion de diferentes fuentes de datos (Google Analytics, Omniture...) analizar los indicadores para de generar un dashboard digital.",
     need: "Analista Web"
  },
  {
    name: "job7",  //Diseñador de interfaces graficas
    name_marca: "job7",
    color: "#5fc9f8",
    background: "img/daw/job7_limpio.png",
    description: "Soy el encargado de frond-end, me encardo de la creacion de interfaces web con la finalidad de craer diseños simples y faciles de entender.",
    need: "Diseñador interficies Graficas"
  },
   {
    name: "job8",  //especialista en QA
    name_marca: "job8",
    color: "#5fc9f8",
    background: "img/daw/job8_limpio.png",
    description: "Soy el responsable de la calidad de nuestros servicios, me encargo de la supervision de clearCode y optimizacion de codigo",
       need: "Especialista en QA"
  },
  {
    name: "job9",  //arquitecto de sistemaas
    name_marca: "job9",
    color: "#5fc9f8",
    background: "img/daw/job9_limpio.png",
    description: "Soy el responsable de la arquitectura de los componentes del sitema y de su segumiento despues de su instalacion y uso.",
       need: "Arquitecto de sistemaas"
  },
  {
    name: "job10",  //User Experience
    name_marca: "job10",
    color: "#5fc9f8",
    background: "img/daw/job10_limpio.png",
    description: "Me encargo de entender a los usuarios que entraran a al web y crear diseños entorno a sus necesidades",
    need: "User Experience"
  }

  
  
  
   
];

 //menu de deificulta opne inicial
var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup_easy = document.getElementById('btn-cerrar-facil'),
	btnCerrarPopup_normal = document.getElementById('btn-cerrar-medio'),
	btnCerrarPopup_hard = document.getElementById('btn-cerrar-dificil');
	btredirect = document.getElementById('btn-otros');
/*btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});*/

//al dar clisc a la segunda centana que abre redirect a juegos
btredirect.addEventListener('click', function(e){
  window.location.href = 'conections_form.php';

	window.location.href = "http://localhost/CEPSoft/php_views/juegos.php";
});

//iniciar juego
btnCerrarPopup_easy.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
  max_jobs =5; //numero de trabajos que quiero
  max_spots_meter = 5; // espacios 
  cantidadNumeros = 5;
  initiateGame();
  var timer = 60,
  display = document.querySelector('#time');
  multiplicador_score= 0,3;
  startTimer(timer, display);
});

btnCerrarPopup_normal.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
   max_jobs =7; //numero de trabajos que quiero
  max_spots_meter = 7; // espacios 
  cantidadNumeros = 7;
  initiateGame();
  var timer = 80,
  display = document.querySelector('#time');
  multiplicador_score= 0.5;
  startTimer(timer, display);
});

btnCerrarPopup_hard.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
  max_jobs =10; //numero de trabajos que quiero
  max_spots_meter = 10; // espacios 
   cantidadNumeros = 10;
  initiateGame();
  var timer =100,
  display = document.querySelector('#time');
  multiplicador_score= 0.8;
  startTimer(timer, display);
});
/*////////////////////////////////////////////////////////////
/////////////////////timer/////////////////////////////
//////////////////////////////////////////////////////////*/

function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  var contador =setInterval(function () {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;
      display.textContent = minutes + ":" + seconds;
      if (--timer < 0) {
          timer = duration;
         clearInterval(contador); 
         check_game++;
       endgame_timer();
      }}, 1000);
    
}

// randomizador que em arrancO de vida
function generador_random(n, originalArray) {
  let res = [];
  let clonedArray = [...originalArray];
  if(n>clonedArray.length) n=clonedArray.length;
  for(let i=1; i<=n; i++) {
    const randomIndex = Math.floor(Math.random()*clonedArray.length);
    res.push(clonedArray[randomIndex]);
    clonedArray.splice(randomIndex, 1);
  }
  return res;
}

//////////////////VARIABKLES//////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////
username; //esto se recoger del js imnico del php
let id_juego = 002;
///////////////
let multiplicador_score=0;
let correct = 0;
let error = 0;
let total = 0;
let max_jobs =0; //numero de trabajos que quiero
let max_spots_meter =0; // espacios 
var audio = document.getElementById("audio");
let check_game=0;
//sacar audios
let error_sound = new Audio('sonidos/error.wav');
error_sound.playbackRate = 4;
let acierto_sound = new Audio('sonidos/acierto.wav');
let fondo = new Audio('sonidos/fondo_music.wav');
fondo.volume = 0.1



//variables
const puntuacion = document.querySelector(".score");//selectores de score
const correctSpan = puntuacion.querySelector(".correct");//aciertos
const totalSpan = puntuacion.querySelector(".total"); //total
const playAgainBtn = puntuacion.querySelector("#play-again-btn");

const draggableItems = document.querySelector(".draggable-items");
const matchingPairs = document.querySelector(".matching-pairs");
let elemento_arrastrable;
let elemento_dropeable;

//initiateGame();

/*codigo juego */
function initiateGame() {
  fondo.play();

  const random_job = generador_random(max_jobs, jobs); //mando los trabajos con cuantos spots queiro
  //preguntar francisco 
    const randomDroppablejobs = max_spots_meter<max_jobs ? generador_random(max_spots_meter, random_job) : random_job;
  //ordenar la array de manera ascendiente
   const array_jobs = [...randomDroppablejobs].sort((a,b) => a.name_marca.toLowerCase().localeCompare(b.name_marca.toLowerCase()));

  // crear los objeto arrastables (PREGUNTAR A FRANCISCO SI ESTA BIEN)
  for(let i=0; i<random_job.length; i++) {
    draggableItems.insertAdjacentHTML("beforeend", `
    <div class="con-tooltip bottom">

    <img class="${random_job[i].name} draggable" draggable="true" src="${random_job[i].background}" style="color: ${random_job[i].color};" id="${random_job[i].name}"></img><div class="tooltip"><p>"${random_job[i].description}</p></div></div>
    `);  
  }
  
  // los droppeables 
//Define la cantidad de numeros aleatorios.

var myArray = []
while(myArray.length < cantidadNumeros ){
  var numeroAleatorio = Math.ceil(Math.random()*cantidadNumeros);
  var existe = false;
  for(var i=0;i<myArray.length;i++){
	if(myArray [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    myArray[myArray.length] = numeroAleatorio;
  }

}



  
  for (let i = 0; i < array_jobs.length; i++) {
   
    //<div class="matching-pair" id="${array_jobs[i].name}">
    matchingPairs.insertAdjacentHTML("beforeend", `
      <div class="matching-pair" id="${"job" + myArray[i]}">
        <span class="droppable" drop_id="${array_jobs[i].name}">${array_jobs[i].need}</span>
      </div>
    `);
  }
  


  elemento_arrastrable = document.querySelectorAll(".draggable");//lo que se arrastra
  elemento_dropeable = document.querySelectorAll(".droppable");//lo que se deja
  

  
  elemento_arrastrable.forEach(elem => { //lamo las funciones de drag
    elem.addEventListener("dragstart", dragStart);
    // elem.addEventListener("drag", drag);
    // elem.addEventListener("dragend", dragEnd);
  });
  
  elemento_dropeable.forEach(elem => { //llamo funcioens de drop
    elem.addEventListener("dragenter", dragEnter);
    elem.addEventListener("dragover", dragOver);
    elem.addEventListener("dragleave", dragLeave);
    elem.addEventListener("drop", drop);
  });
}//FIN JUEGO


//funciones

// Eventos  sobre el objetivo el arrastrar

function dragStart(event) {
  event.dataTransfer.setData("text", event.target.id); 
}

//eventos sobre el drop
function dragEnter(event) { //entrar al drop 
  if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
    event.target.classList.add("droppable-hover"); //meteremos la clase droppable-hover para css
  }
}

function dragOver(event) {//drag encima
  if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
    event.preventDefault(); //esto cansela la accion 
  }
}

function dragLeave(event) {//drag soltar
  if(event.target.classList && event.target.classList.contains("droppable") && !event.target.classList.contains("dropped")) {
    event.target.classList.remove("droppable-hover"); //droppable-hover sera eliminada
  }
}




function drop(event) { //dropear objeto
  event.preventDefault(); //por si la he cagado
  event.target.classList.remove("droppable-hover");//quito la clase
  const arrastable = event.dataTransfer.getData("text");
  const dropeable = event.target.getAttribute("drop_id");//sacar el atributio de drop_id
  const son_iguales = arrastable===dropeable;
  total++;

  if(son_iguales) { //si es correcto
    acierto_sound.play();
    const elemento_arrastrable = document.getElementById(arrastable);
    event.target.classList.add("dropped");
    elemento_arrastrable.classList.add("dragged");
    elemento_arrastrable.setAttribute("draggable", "false");
    //event.target.innerHTML = `<i class="fab fa-${arrastable}" style="color: ${elemento_arrastrable.style.color};"></i>`;
    
    //no consigo poner la foto 
    //event.target.innerHTML = `<i class="${arrastable}" src="job3.png"></i>`;
    //esto noe s el m etodo correcto pero mira 
    const $ruta="img/daw/"+arrastable + ".png"
    event.target.innerHTML = `<img class="img_drop" src="${$ruta} "></img>`;
    correct++;    
 

  }else{
    error_sound.play();
    error++;}
    puntuacion.style.opacity = 0; //cone sta opacidad cambio cuando aparece y desaparece la puntuacion
     setTimeout(() => { //CONTROL DEL EFECTO A MEDIDA QUE PASA EL TIEMPO SALE LA PUNTUACION
    correctSpan.textContent = correct;
    totalSpan.textContent = total;
    puntuacion.style.opacity = 1;
  }, 200);
   

/******************************************************************************************* */
/******************************************************************************************* */
/******************************************************************************************* */
/******************************************************************************************* */
/******************************************************************************************* */

  //che fin  juego 
  if(correct===Math.min(max_spots_meter, max_jobs)) {
    check_game++;
    endgame_timer();
  }
}

function endgame_timer(){
 // playAgainBtn.style.display = "block";
 if (check_game==1){
    document.getElementById("aciertos").innerHTML += "ACIERTOS:   " +correct + "</br>";
    document.getElementById("errores").innerHTML += "ERRORES:   " +error + "</br>";
    operador_final =correct - error;
    score_total= operador_final * 10;

    if(score_total>=100){
      score_mostrar =100;
      document.getElementById("score_final").innerHTML += "SOCRE:   " +score_mostrar + "</br>";
    }
    else if(score_total< 100 && score_total>=1){
      score_mostrar =score_total;
      document.getElementById("score_final").innerHTML += "SOCRE:   " +score_mostrar + "</br>";
    }
    else if(score_total<=0){
      score_mostrar =00;
      document.getElementById("score_final").innerHTML += "SOCRE " +score_mostrar + "</br>";
    }
//lo que ammdaremos al ajax
    let pasar_juego= true;

    overlay2.classList.add('active');
    popup2.classList.add('active');


    ajax_mandar();}
    
      
    //setTimeout(() => {playAgainBtn.classList.add("play-again-btn-entrance"); }, 200);
  }//FIN JUEGO

function ajax_mandar(){
  $.ajax({
    method: 'Post',
    url: 'http://localhost/CEPSoft/games/game2/conections_form.php',
    data: {nombre_usuario:username, score:score_mostrar, id_game:id_juego},
    success:function(){
    console.log(username);
    console.log(score_mostrar);
    console.log(id_juego);
    }
 
  })
}


// volver a jugar lo quito ya que antes es solo un botton pero por sis e queire viovler a poner
//playAgainBtn.addEventListener("click", playAgainBtnClick);

//funcion
/*
function playAgainBtnClick() {
  //playAgainBtn.classList.remove("Xº-entrance");

  playAgainBtn.classList.remove();

  //RESET VARIABLES
  correct = 0;
  total = 0;
  draggableItems.style.opacity = 0;
  matchingPairs.style.opacity = 0;
  setTimeout(() => {
    puntuacion.style.opacity = 0;
  }, 100);
  setTimeout(() => {
    playAgainBtn.style.display = "none";
    while (draggableItems.firstChild) draggableItems.removeChild(draggableItems.firstChild);
    while (matchingPairs.firstChild) matchingPairs.removeChild(matchingPairs.firstChild);
    initiateGame();
    correctSpan.textContent = correct;
    totalSpan.textContent = total;
    draggableItems.style.opacity = 1;
    matchingPairs.style.opacity = 1;
    puntuacion.style.opacity = 1;
  }, 500);
}*/

