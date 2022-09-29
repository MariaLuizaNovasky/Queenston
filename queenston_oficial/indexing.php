<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'><link rel="stylesheet" href="dist/style.css">
        <link rel="shortcut icon" href="logo.ico" />

        <?php
        include_once './head.php';
        ?>


    </head>
    <body>
        <?php
        include_once './topoing.php';
        ?>
        <div id="slider">
            <!-- partial:index.partial.html -->
            <div class="swiper-container main-slider loading">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider1ing.png)">
                            <img src="imagem/slider1ing.png.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                            <span class="caption"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider2.png)">
                            <img src="imagem/slider2.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                            <span class="caption"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider3.png)">
                            <img src="imagem/slider3.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                            <span class="caption"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider4.png)">
                            <img src="imagem/slider4.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                            <span class="caption"></span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider5.png)">
                            <img src="imagem/slider5.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                            <span class="caption"></span>
                        </div>
                    </div>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>
            </div>

            <!-- Thumbnail navigation -->
            <div class="swiper-container nav-slider loading">
                <div class="swiper-wrapper" role="navigation">
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider1ing.png)">
                            <img src="imagem/slider1ing.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider2.png)">
                            <img src="imagem/slider2.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider3.png)">
                            <img src="imagem/slider3.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider4.png)">
                            <img src="imagem/slider4.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure class="slide-bgimg" style="background-image:url(imagem/slider5.png)">
                            <img src="imagem/slider5.png" class="entity-img" />
                        </figure>
                        <div class="content">
                            <p class="title"></p>
                        </div>
                    </div>
                </div>
            </div>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js'></script><script  src="dist/script.js"></script>
        </div>
        <div id="chamadas">
            <div class="icon">
                <img src="imagem/ico1.png" alt="icone"/>
                <a href="paginaextraing.php">Check out our courses</a>
            </div>
            <div class="icon">
                <img src="imagem/ico2.png" alt="icone"/>
                <a href="ContatoConosco.php">Pay your resume to our company.</a>
            </div>
            <div class="icon">
                <img src="imagem/ico3.png" alt="icone"/>
                <a href="sustentabilidadeing.php">Meet our waste disposal.</a>
            </div>
        </div>
        <?php
        include_once './rodapeing.php';
        ?>
    </body>
</html>

