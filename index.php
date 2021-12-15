<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <title>Centre d'Estudis Politècnics</title>
        <link rel="shortcut icon" href="/media/img/logoCEP.png" />
        <link rel="stylesheet" href="./style/styles.css">
        <script src="./js/sliderApp.js"></script>
</head>
<body>
    <?php
        include("../CEPSoft/php_partials/navBar.php");
    ?>

    <!-- Image slider Inicio -->
    <div class="slider">
        <!-- Info del slider -->
        <div class="infoSlider">
            <h1>Centre d'Estudis Politècnics</h1>
            <p>Especialistes en cicles formatius i metodologies actives. Descobreix una nova forma d'aprendre</p>
        </div>
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <input type="radio" name="radio-btn" id="radio5">

            <div class="slide first">
                <img src="./media/img/imageSlider/slider1.jpg" class="slideImg" alt="">
            </div>
            <div class="slide">
                <img src="./media/img/imageSlider/slider2.jpeg" class="slideImg" alt="">
            </div>
            <div class="slide">
                <img src="./media/img/imageSlider/slider3.jpeg" class="slideImg" alt="">
            </div>
            <div class="slide">
                <img src="./media/img/imageSlider/slider5.jpeg" class="slideImg" alt="">
            </div>
            <div class="slide">
                <img src="./media/img/imageSlider/slider4.jpeg" class="slideImg" alt="">
            </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
        </div>
    </div>
    

    <div class="inicioContainer">
            <div class="centreContainer">
                <h3 class="titulosInicio">El centre</h3>
                <p class="pText">Al Centre d’Estudis Politècnics disposem d’un equip professional i humà que vetlla en tot moment per satisfer l’experiència acadèmica del nostre alumnat. En tractar-se d’una formació presencial, li proposem que visqui una experiència d’aprenentatge amb els cinc sentits. A l’aula podem veure’ns, escoltar-nos, compartir, discutir i emocionar-nos. L’assistència a classe ens permet aprofitar millor l’experiència d’aprenentatge, d’una manera molt més enriquidora. Ens tenim a totes i tots per explicar, per preguntar, per dubtar, per equivocar-nos i per descobrir.</p>
                <p class="pText">Per a la Direcció del centre, la qualitat del nostre equip docent i administratiu sempre ha estat un dels principals elements de valor diferencial. Per això, el Politècnics té un equip professional i humà especialitzat, amb experiència professional en els diversos sectors dels cicles formatius que s’hi imparteixen. És fonamental un equip que conegui i combini les realitats de l’aula i de l’empresa per poder acompanyar el nostre alumnat en el seu procés d’aprenentatge, de creixement personal i d’inserció en el mercat laboral.</p>
            </div>

            <hr class="separadorHr">

            <div class="formacionesContainer">
                <h3 class="titulosInicio"> Formacions</h3>

                <div class="formacionCards">
                    <div class="formacionCard" id="formacion1" data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <div class="formacionCardHeader">
                            <h4>Informàtica i comunicacions</h4>
                            <img src="./media/img/formaciones/informaticaLogo.png" alt="">
                        </div>
                        <hr>
                        <div class="grados">
                            <h5>Grau mitjà sistemes microinformàtics i xarxes</h5>
                            <h5>Grau superior desenvolupament aplicacions web</h5>
                            <h5>Grau superior desenvolupament aplicacions multiplataforma</h5>
                        </div>
                    </div>

                    <div class="formacionCard" id="formacion2">
                        <div class="formacionCardHeader">
                            <h4>Administració i gestió</h4>
                            <img src="./media/img/formaciones/administracionLogo.png" alt="">
                        </div>
                        <hr>
                        <div class="grados">
                            <h5>Grau mitjà gestió administrativa</h5>
                            <h5>Grau superior administració i finances</h5>
                            <h5>Grau superior assistència a la direcció</h5>
                        </div>
                    </div>

                    <div class="formacionCard" id="formacion3">
                        <div class="formacionCardHeader">
                            <h4>Comerç y màrqueting</h4>
                            <img src="./media/img/formaciones/comercioLogo.png" alt="">
                        </div>
                        <hr>
                        <div class="grados">
                            <h5>Grau mitjà activitats comercials</h5>
                            <h5>Grau superior màrqueting i publicitat</h5>
                            <h5>Grau superior gestió de vendes i espais comercials</h5>
                            <h5>Grau superior comerç internacional</h5>
                        </div>
                    </div>

                    <div class="formacionCard" id="formacion4">
                        <div class="formacionCardHeader">
                            <h4>Hoteleria i turisme</h4>
                            <img src="./media/img/formaciones/hoteleriaLogo.png" alt="">
                        </div>
                        <hr>
                        <div class="grados">
                            <h5>Grau superior agències de viatges i gestió d’esdeveniments</h5>
                        </div>
                    </div>

                </div>
            </div>
            
            <hr class="separadorHr">
            
            <div class="equipoContainer">
                <h3 class="titulosInicio">L'equip</h3>

                <p class="pText" id="texto4skills">4Skills es un grup de 4 desenvolupadors web que en aquesta ocasió ha col·laborat amb el Centre d'Estudis Politècnics per treballar en millorar l'experiència de l'usuari de cara a les portes obertes del centre.</p>

                <div class="cardsGroup">
                    <div class="flip-card">
                        <div class="card-inner" id="card1">
                            <div class="card-front">
                                <div class="bitmojiCard" id="bitmojiSergio"></div>
                            </div>
                            <div class="card-back">
                                <h6>Sergio Moyano</h6>
                                <div class="socialMedia">
                                    <a href="https://www.instagram.com/thesergiomoyano/"><img class="logoScoialMedia" src="./media/img/instagram.png" alt=""></a>
                                    <a href="https://github.com/sergiocode"><img class="logoScoialMedia" src="./media/img/github.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flip-card">
                        <div class="card-inner" id="card1">
                            <div class="card-front">
                                <div class="bitmojiCard" id="bitmojiFran"></div>
                            </div>
                            <div class="card-back">
                                <h6>Fran Gonzalez</h6>
                                <div class="socialMedia">
                                    <a href="https://www.instagram.com/frankgcivic/"><img class="logoScoialMedia" src="./media/img/instagram.png" alt=""></a>
                                    <a href="https://github.com/Frankcep"><img class="logoScoialMedia" src="./media/img/github.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flip-card">
                        <div class="card-inner" id="card1">
                            <div class="card-front">
                                <div class="bitmojiCard" id="bitmojiJohnny"></div>
                            </div>
                            <div class="card-back">
                                <h6>Johnny Bermudez</h6>
                                <div class="socialMedia">
                                    <a href="https://github.com/johnnydaw2a"><img class="logoScoialMedia" src="./media/img/github.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flip-card">
                        <div class="card-inner" id="card1">
                            <div class="card-front">
                                <div class="bitmojiCard" id="bitmojiMarc"></div>
                            </div>
                            <div class="card-back">
                                <h6>Marc Martinez</h6>
                                <div class="socialMedia">
                                    <a href="https://www.instagram.com/squirledepre/"><img class="logoScoialMedia" src="./media/img/instagram.png" alt=""></a>
                                    <a href="https://github.com/MarcMayneDev"><img class="logoScoialMedia" src="./media/img/github.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
    </div>
    
    <!-- INCLUDE FOOTER -->
    <?php
            include("./php_partials/footer.html");
    ?>

    <script type="text/javascript" src="./node_modules/vanilla-tilt/src/vanilla-tilt.js"></script>
</body>
</html>