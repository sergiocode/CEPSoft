const numJuego = 1;

window.addEventListener("load", ()=>{
        "use strict"

        // Guardamos las dimensiones de la pantalla de juego
        const gameScreen = document.getElementById("gameScreen");
        const gameScreenStyle = getComputedStyle(gameScreen);       // Recogemos el estilo de gameScreen
        const screenWidth = parseInt(gameScreenStyle.width);        // Width del screen de juego
        const screenHeight = parseInt(gameScreenStyle.height);      // Height del screen de juego



        // Guardamos el elemento del personaje en la variable character
        const character = document.getElementById('character');
        character.style.backgroundImage = "url('./media/img/alexFront1.png')";
                    
        const characterStyle = getComputedStyle(character);         // Recojemos el estilo del personaje
        const characterWidth = parseInt(characterStyle.width);
        const characterHeight = parseInt(characterStyle.height);

        let characterX = 40;
        let characterY = 80;
        const velocidad = 5;                                       // Velocidad = px que avanzará

        setInterval(() => {
            console.clear();
            console.log("X : " + characterX +
                        "\nY : " + characterY +
                        "\nWidth : " + characterWidth +
                        "\nHeight : " + characterHeight
                        );
        }, 100);

        // Guardamos los elementos de los vehiculos
        // const coche = document.querySelector(".coche");
        // const cocheStyle = getComputedStyle(coche);
        
        // const cocheWidth = parseInt(cocheStyle.style.width);
        // const cocheHeight = parseInt(cocheStyle.style.height);
        //const velocidadCoche = 5;         // Aquí irá una función que devolverá un num segun la dificultad


        // Guardamos las gemas en variables
        const gemaF = document.getElementById('gemaF');
        gemaF.style.backgroundImage = "url('./media/img/gemaF.gif')";
        const gemaR = document.getElementById('gemaR');
        const gemaA = document.getElementById('gemaA');
        const gemaS = document.getElementById('gemaS');
        const gemaE = document.getElementById('gemaE');



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


        function moverIzquierda(){
            character.style.backgroundImage = "url('./media/img/alexLeft.gif')";

            if (characterX > 5) {
                characterX -= velocidad;
                character.style.left = `${characterX}px`;
            }
        }

        function moverDerecha(){
            character.style.backgroundImage = "url('./media/img/alexRight.gif')";

            if ((characterX + characterWidth) < screenWidth) {
                characterX += velocidad;
                character.style.left = `${characterX - 2}px`;
            }
        }

        function moverArriba(){
            character.style.backgroundImage = "url('./media/img/alexBack.gif')";
            
            if (characterY > 5) {
                characterY -= velocidad;
                character.style.top = `${characterY}px`;
            }
        }

        function moverAbajo(){
            character.style.backgroundImage = "url('./media/img/alexFront.gif')";

            if (characterY+characterHeight < screenHeight) {
                characterY += velocidad;
                character.style.top = `${characterY - 2}px`;
            }
        }
        
    });