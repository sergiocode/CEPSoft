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
        include("../CEPSoft/php_partials/navBar.html");
    ?>

    <!-- Image slider Inicio -->
    <div class="slider">
        <!-- Info del slider -->
        <div class="infoSlider">
            <h1>Centre d'Estudis Politècnics</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur in dui in pulvinar. In eget sodales urna, vitae vehicula velit. Maecenas ut suscipit dolor. Suspendisse convallis dapibus egestas. Nam semper tellus lectus, et feugiat justo luctus quis. Sed mattis dui vitae risus dignissim, at fermentum ex sollicitudin. Maecenas rhoncus.</p>
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

            <!-- Indica la posición del slider pero se tiene que mejorar el CSS -->
            <!-- <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
                <div class="auto-btn5"></div>
            </div> -->
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
        <div class="inicioApartados">
            <div class="centreContainer">
                <h3 class="titulosInicio">El centre</h3>
                <p class="centreText">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi iaculis ultricies turpis nec porta. Donec ultricies placerat velit in viverra. Morbi consectetur diam non felis vehicula, nec posuere mauris scelerisque. Fusce sit amet aliquam justo, id ultrices dui. Sed eros est, vulputate sed pellentesque sit amet, accumsan et velit. Aliquam eget velit efficitur lectus euismod malesuada. Sed eget tempus augue, vitae condimentum nisi.

                    Suspendisse ex nisi, condimentum a ultrices eu, facilisis nec est. Sed nisi lectus, fringilla id tempor tincidunt, mattis dignissim sapien. Suspendisse non odio pulvinar, consectetur libero non, blandit felis. Pellentesque posuere finibus neque in molestie. Sed libero est, aliquet at nulla non, consectetur vestibulum lectus. Pellentesque id eros tellus. In urna lacus, volutpat et libero non, molestie facilisis orci. Morbi id porta velit. Nullam tellus ipsum, rhoncus vel mi ac, eleifend sodales mauris. Donec consequat pulvinar quam, sit amet posuere urna posuere sed. Nulla dictum accumsan dictum. Ut ut nisi rhoncus, ullamcorper leo id, varius nisl.

                    Proin mattis a lorem at porttitor. Integer ultricies turpis augue, id convallis dolor ornare et. Integer ac tristique odio, non commodo arcu. Suspendisse potenti. Aenean a dolor justo. Morbi aliquam dolor ut metus lobortis pharetra. Suspendisse sit amet porta nibh. Quisque condimentum interdum interdum. Nullam pulvinar nulla lorem, non gravida enim accumsan efficitur. Morbi in vestibulum velit. Nunc gravida lectus a sem dapibus rhoncus. Donec scelerisque faucibus lacus a accumsan.
                </p>
            </div>

            <!-- <hr class="separadorHr"> -->

            <!-- <div class="formacionesContainer">
                <h3 class="titulosInicio"> Formacions</h3>

                <div class="formacionCards">
                    <div class="formacionCard" id="formacion1">
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
            </div> -->
        </div>
    </div>
    
    <!-- INCLUDE FOOTER -->
    
</body>
</html>