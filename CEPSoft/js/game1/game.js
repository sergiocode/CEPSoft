window.addEventListener("load", ()=>{
        "use strict"

        // Guardamos el elemento del personaje en la variable character
        const character = document.getElementById('character');

        // Recojemos el estilo del personaje
        const characterStyle = getComputedStyle(character);
        const characterWidth = parseInt(characterStyle.width);
        const characterHeight = parseInt(characterStyle.height);

        let characterX = 20;
        let characterY = 20;
        const velocidad = 5;

        setInterval(() => {
            console.clear();
            console.log("X : " + characterX +
                        "\nY : " + characterY +
                        "\nWidth : " + characterWidth +
                        "\nHeight : " + characterHeight
                        );
        }, 350);


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
            characterX -= velocidad;
            
            character.style.left = `${characterX}px`;
            character.style.backgroundImage = "url('../js/game1/media/img/alexLeft.gif')";

        }
        function moverDerecha(){
            characterX += velocidad;
            character.style.left = `${characterX}px`;
            character.style.backgroundImage = "url('../js/game1/media/img/alexRight.gif')";
        }
        function moverArriba(){
            characterY -= velocidad;
            character.style.top = `${characterY}px`;
            character.style.backgroundImage = "url('../js/game1/media/img/alexBack.gif')";
        }
        function moverAbajo(){
            characterY += velocidad;
            character.style.top = `${characterY}px`;
            character.style.backgroundImage = "url('../js/game1/media/img/alexFront.gif')";
        }

        //////////// COLLISION ////////////

        // function bodyCollision() {

        //     setInterval(() => {
        //         console.clear();
        //         var characterTop = parseInt(character.style.top);
        //         var characterBottom = parseInt(character.style.bottom);
        //         var characterLeft = parseInt(character.style.left);
        //         var characterRight = parseInt(character.style.right);

        //         console.log("Top: " + characterTop);
        //         console.log("Bottom: " + characterBottom);
        //         console.log("Left: " + characterLeft);
        //         console.log("Right: " + characterRight);

        //         // if (characterTop < 0 || characterBottom < 0 || characterLeft < 0 || characterRight < 0) {
        //         //     mover = false;
        //         // }



        //         if (characterTop > 0) {

        //             mover();

        //         } else if (characterBottom > 0) {

        //             bodyCollision();

        //         } else if (characterLeft > 0) {

        //             bodyCollision();

        //         } else if (characterRight > 0) {

        //             bodyCollision();

        //         }
        //     }, 2000);
        // }
        
    });