window.addEventListener("load", ()=>{
        "use strict"
        
        // Variables AJAX
        username;
        let id_juego = 1;
        let score_mostrar = 100;

        const menu = document.querySelector('.menu');
        const playBtn = document.getElementById('playBtn');
        const infoBtn = document.getElementById('infoBtn');
        const infoJuego = document.querySelector('.infoJuego');
        const closeInfo = document.getElementById('closeInfo');

        const gameOver = document.querySelector('.gameOver');

        const gameFinished = document.querySelector('.gameFinished');

        const stats = document.querySelector('.stats');
        let iconoDialogo = document.getElementById('iconoDialogo');
        const textoDialogo = document.getElementById('textoDialogo');
        let numVida = document.querySelector('.numVida');

        // Audio
        const soundtrack = new Audio('./media/audio/mainTheme.wav');
        const sonidoGema = new Audio('./media/audio/sonidoGema.mp3');
        

        playBtn.addEventListener('click', () => {
            menu.style.display = "none";
            stats.style.display = "flex";
            soundtrack.play();
        });
        
        infoBtn.addEventListener('click', () => {
            infoJuego.style.display = "flex";
        });
        
        closeInfo.addEventListener('click', () => {
            infoJuego.style.display = "none";
        });
        


        // Guardamos las dimensiones de la pantalla de juego
        const gameScreen = document.getElementById("gameScreen");
        const gameScreenStyle = getComputedStyle(gameScreen);       // Recogemos el estilo de gameScreen
        const screenWidth = parseInt(gameScreenStyle.width);        // Width del screen de juego
        const screenHeight = parseInt(gameScreenStyle.height);      // Height del screen de juego



        // Guardamos el elemento del personaje en la variable character
        const character = document.getElementById('character');

        character.style.backgroundImage = "url('./media/img/alexFront1.png')";
        let vidaJugador = 1;
        numVida.innerHTML = vidaJugador;
                    
        const characterStyle = getComputedStyle(character);         // Recojemos el estilo del personaje
        let characterWidth = parseInt(characterStyle.width);
        let characterHeight = parseInt(characterStyle.height);
        let characterTop = parseInt(character.offsetTop);
        let characterLeft = parseInt(character.offsetLeft);
        let characterRight = parseInt(characterLeft+characterWidth);
        let characterBottom = parseInt(characterTop+characterHeight);

        let characterX = 48;
        let characterY = 80;
        const velocidad = 10;                                       // Velocidad = px que avanzará

        console.log(iconoDialogo);


        // Guardamos el elemento del coche
        const coche = document.querySelector('.coche');
        let cocheX = 1100;

        setInterval(() => {
            if (cocheX == 0) {
                cocheX = 1100;
            }

            cocheX -= 20;
            coche.style.left = `${cocheX}px`;
        }, 100);

        setInterval(() => {
            colisioncCoche(coche, character, vidaJugador);
        }, 500);


        // Guardamos las colisiones generales del mapa
        const colisionMapa = document.querySelectorAll("div[class^='colision']");
        console.log(colisionMapa);


        // Gemas
        const gemaF = document.getElementById('gemaF');
        const gemaR = document.getElementById('gemaR');
        const gemaA = document.getElementById('gemaA');
        const gemaS = document.getElementById('gemaS');
        const gemaE = document.getElementById('gemaE');

        let watchedF, watchedR, watchedA, watchedS, watchedE;
        let gemasWatched = [];
        
        setInterval(() => {
            console.log("F: " + gemasWatched[0] +
            "\nR: " + gemasWatched[1] +
            "\nA: " + gemasWatched[2] +
            "\nS: " + gemasWatched[3] +
            "\nE: " + gemasWatched[4]); 
        }, 500);
        

        // Finalizar juego
        const terminarJuego = document.getElementById('terminarJuego');




        document.addEventListener("keydown", (e)=>{
            switch (e.key) {
                case ("ArrowLeft"):
                    moverIzquierda();
                    break;
                case ("ArrowRight"):
                    moverDerecha();
                    break;
                case ("ArrowUp"):
                    moverArriba();
                    break;
                case ("ArrowDown"):
                    moverAbajo();
                    break;
            }
        });

        // FUNCIONES DE MOVIMIENTO //

        function moverIzquierda(){
            character.style.backgroundImage = "url('./media/img/alexLeft.gif')";
            characterX -= velocidad;
            character.style.left = `${characterX}px`;

            if (!collision(colisionMapa, character)) {
                characterX += velocidad;
                character.style.left = `${characterX}px`;
            }

            colisionF(gemaF, character);
            colisionR(gemaR, character);
            colisionA(gemaA, character);
            colisionS(gemaS, character);
            colisionE(gemaE, character);

            finalizarJuego(terminarJuego, character);
        }

        function moverDerecha(){
            character.style.backgroundImage = "url('./media/img/alexRight.gif')";
            characterX += velocidad;
            character.style.left = `${characterX}px`;

            if (!collision(colisionMapa, character)) {
                characterX -= velocidad;
                character.style.left = `${characterX}px`;
            }

            colisionF(gemaF, character);
            colisionR(gemaR, character);
            colisionA(gemaA, character);
            colisionS(gemaS, character);
            colisionE(gemaE, character);

            finalizarJuego(terminarJuego, character);
        }

        function moverArriba(){
            character.style.backgroundImage = "url('./media/img/alexBack.gif')";
            characterY -= velocidad;
            character.style.top = `${characterY}px`;

            if (!collision(colisionMapa, character)) {
                characterY += velocidad;
                character.style.top = `${characterY}px`; 
            }

            colisionF(gemaF, character);
            colisionR(gemaR, character);
            colisionA(gemaA, character);
            colisionS(gemaS, character);
            colisionE(gemaE, character);

            finalizarJuego(terminarJuego, character);
        }

        function moverAbajo(){
            character.style.backgroundImage = "url('./media/img/alexFront.gif')";
            characterY += velocidad;
            character.style.top = `${characterY}px`;

            if (!collision(colisionMapa, character)) {
                characterY -= velocidad;
                character.style.top = `${characterY}px`;
            }

            colisionF(gemaF, character);
            colisionR(gemaR, character);
            colisionA(gemaA, character);
            colisionS(gemaS, character);
            colisionE(gemaE, character);

            finalizarJuego(terminarJuego, character);
        }
        

        // FUNCIONES DE COLISIONES

        function colisionF(gemaF, character) {

            const gemaBox = gemaF.getBoundingClientRect();
            const characterBox = character.getBoundingClientRect();
            let fWatched = false;

            if (gemaBox.x < characterBox.x + characterBox.width &&
                characterBox.x < gemaBox.x + gemaBox.width &&
                gemaBox.y < characterBox.y + characterBox.height &&
                characterBox.y < gemaBox.y + gemaBox.height) {
                    
                    sonidoGema.play();
                    console.log('COLISION GEMA F');
                    iconoDialogo.style.backgroundImage = "url('./media/img/gemaF.gif')";
                    gemaF.style.backgroundColor = "#ad0707";
                    textoDialogo.innerHTML = "FLEXIBILIDAD. Dispón de diversas rutas y espacios para poder seguir diferentes ritmos de aprendizaje.";
                    fWatched = true;
            }

            if (fWatched) {
                gemasWatched[0] = true;
            }

        }

        function colisionR(gemaR, character) {

            const gemaBox = gemaR.getBoundingClientRect();
            const characterBox = character.getBoundingClientRect();
            let rWatched = false;

            if (gemaBox.x < characterBox.x + characterBox.width &&
                characterBox.x < gemaBox.x + gemaBox.width &&
                gemaBox.y < characterBox.y + characterBox.height &&
                characterBox.y < gemaBox.y + gemaBox.height) {
                    
                    sonidoGema.play();
                    console.log('COLISION GEMA R');
                    iconoDialogo.style.backgroundImage = "url('./media/img/gemaR.gif')";
                    gemaR.style.backgroundColor = "#dbdb00";
                    textoDialogo.innerHTML = "RESPONSABILIDAD. Gestiona el aprendizaje siguiendo tu propio camino. Conoce los objetivos, mide los progresos y trabaja de manera continua.";
                    rWatched = true;
            }

            if (rWatched) {
                gemasWatched[1] = true;
            }
        }
        
        function colisionA(gemaA, character) {

            const gemaBox = gemaA.getBoundingClientRect();
            const characterBox = character.getBoundingClientRect();
            let aWatched = false;

            if (gemaBox.x < characterBox.x + characterBox.width &&
                characterBox.x < gemaBox.x + gemaBox.width &&
                gemaBox.y < characterBox.y + characterBox.height &&
                characterBox.y < gemaBox.y + gemaBox.height) {
                    
                    sonidoGema.play();
                    console.log('COLISION GEMA A');
                    iconoDialogo.style.backgroundImage = "url('./media/img/gemaA.gif')";
                    gemaA.style.backgroundColor = "#a628f1";
                    textoDialogo.innerHTML = "AUTÓNOMO. No tengas miedo a cometer errores, fomenta el pensamiento analítico y crítico, la capacidad de autoevaluación y automotivación.";
                    aWatched = true;
            }

            if (aWatched) {
                gemasWatched[2] = true;
            }
        }
        
        function colisionS(gemaS, character) {

            const gemaBox = gemaS.getBoundingClientRect();
            const characterBox = character.getBoundingClientRect();
            let sWatched = false;

            if (gemaBox.x < characterBox.x + characterBox.width &&
                characterBox.x < gemaBox.x + gemaBox.width &&
                gemaBox.y < characterBox.y + characterBox.height &&
                characterBox.y < gemaBox.y + gemaBox.height) {
                    
                    sonidoGema.play();
                    console.log('COLISION GEMA S');
                    iconoDialogo.style.backgroundImage = "url('./media/img/gemaS.gif')";
                    gemaS.style.backgroundColor = "#2a8b19";
                    textoDialogo.innerHTML = "SOCIAL. Mejorar la comunicación entre el estudiante y el profesorado. Aprovecha el apoyo del profesorado a lo largo del camino. Aprende a recibir y dar ayuda. Participa activamente en una comunidad de aprendizaje mientras trabajas en grupos dinámicos.";
                    sWatched = true;
            }

            if (sWatched) {
                gemasWatched[3] = true;
            }
        }
        
        function colisionE(gemaE, character) {

            const gemaBox = gemaE.getBoundingClientRect();
            const characterBox = character.getBoundingClientRect();
            let eWatched = false;

            if (gemaBox.x < characterBox.x + characterBox.width &&
                characterBox.x < gemaBox.x + gemaBox.width &&
                gemaBox.y < characterBox.y + characterBox.height &&
                characterBox.y < gemaBox.y + gemaBox.height) {
                    
                    sonidoGema.play();
                    console.log('COLISION GEMA E');
                    iconoDialogo.style.backgroundImage = "url('./media/img/gemaE.gif')";
                    gemaE.style.backgroundColor = "#095b8f";
                    textoDialogo.innerHTML = "EXCELENCIA. Disfruta haciendo las cosas bien, a enorgullecerte de los progresos. Siente la necesidad de crecer, de dominar los conceptos y de tener más de un 5.";
                    eWatched = true;
            }

            if (eWatched) {
                gemasWatched[4] = true;
            }
        }

        let colisioncCoche = (coche, character, vidaJugador) => {
            const cocheBox = coche.getBoundingClientRect();
            const characterBox = character.getBoundingClientRect();

            if ((cocheBox.x < characterBox.x + characterBox.width &&
                characterBox.x < cocheBox.x + cocheBox.width &&
                cocheBox.y < characterBox.y + characterBox.height &&
                characterBox.y < cocheBox.y + cocheBox.height)) {
                    
                    vidaJugador -= 1;
                    numVida.innerHTML = vidaJugador;
                    if (vidaJugador <= 0) {
                        soundtrack.pause();
                        gameOver.style.display = "flex";
                    }    
            }
        };

        // function colisioncCoche(coche, character, vidaJugador) {

        //     const cocheBox = coche.getBoundingClientRect();
        //     const characterBox = character.getBoundingClientRect();

        //     if ((cocheBox.x < characterBox.x + characterBox.width &&
        //         characterBox.x < cocheBox.x + cocheBox.width &&
        //         cocheBox.y < characterBox.y + characterBox.height &&
        //         characterBox.y < cocheBox.y + cocheBox.height)) {
                    
        //             vidaJugador -= 1;
        //             numVida.innerHTML = vidaJugador;
        //             console.log('Vida: ' + vidaJugador);
                    
                    
        //     }
        // }

        function finalizarJuego(terminarJuego, character) {
            
            const terminarBox = terminarJuego.getBoundingClientRect();
            const characterBox = character.getBoundingClientRect();

            if (terminarBox.x < characterBox.x + characterBox.width &&
                characterBox.x < terminarBox.x + terminarBox.width &&
                terminarBox.y < characterBox.y + characterBox.height &&
                characterBox.y < terminarBox.y + terminarBox.height) {
                    
                    if (gemasWatched[0] && gemasWatched[1] && gemasWatched[2] && gemasWatched[3] && gemasWatched[4]) {
                        console.log('JUEGO TERMINADO');
                        gameFinished.style.display = "flex";
                        ajax_mandar(); 
                    } else {
                        console.log('Juego no terminado');
                    }
            }
            
        }

        function collision(colisionMapa, character) {

            let esta = false;
            let indice = 0;
            
            for(let i = 0; i < colisionMapa.length; i++) {
                let isIntersect = true;
      
                const collisionBox = colisionMapa[i].getBoundingClientRect();
                const characterBox = character.getBoundingClientRect();
      
                if (collisionBox.x > characterBox.x + characterBox.width ||
                    characterBox.x > collisionBox.x + collisionBox.width ||
                    collisionBox.y > characterBox.y + characterBox.height ||
                    characterBox.y > collisionBox.y + collisionBox.height) {

                    isIntersect = false;
                }

      
                if (!isIntersect) {
                    colisionMapa[i].dataset.esta = 0;
                } else {
                    colisionMapa[i].dataset.esta = 1;
                }
            }
      
            while(!esta && indice < colisionMapa.length) {
              if (colisionMapa[indice].dataset.esta == 1) {
                esta = true;
              }
      
              indice++;
            }
      
            return esta;
        }

        // FUNCIÓN PARA MANDAR POR POST A conections_form.php

        function ajax_mandar(){
            $.ajax({
              method: 'Post',
              url: 'http://localhost/CEPSoft/games/game1/conections_form.php', //cambia la direccion a tu juego 
              data: {nombre_usuario:username, score:score_mostrar, id_game:id_juego},
              success:function(){
              console.log(username);
              console.log(score_mostrar);
              console.log(id_juego);
              }
           
            })
        }
        
    });