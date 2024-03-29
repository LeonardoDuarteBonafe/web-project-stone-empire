<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="stylesheet" type="text/css" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>

    <link rel="icon" href="Images/Site-Icon/site-icon.webp">
    <title>Stone Empire</title>

    <body>

        <?php
        include 'php/navbar.html';
        include 'php/side-menu.html';
        ?>


        <div id="top-carousel" class="carousel vert slide" data-ride="carousel" data-interval="5000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#top-carousel" data-slide-to="0" id="0" class="active"></li>
                <li data-target="#top-carousel" data-slide-to="1"></li><!--
<li data-target="#top-carousel" data-slide-to="2"></li>
<li data-target="#top-carousel" data-slide-to="3"></li>
<li data-target="#top-carousel" data-slide-to="4"></li>-->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="nome">
                        <p>ACQUABELA</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/acquabela.webp">
                    <section class="top-info">
                        <h1>
                            Exclusive designs for pleasant and cozy kitchens
                        </h1>
                    </section>
                </div>
                <div class="carousel-item">
                    <div class="nome">
                        <p>OCEAN</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/ocean.webp">
                    <section class="top-info">
                        <h1>
                            Modern and high quality projects
                        </h1>
                    </section>
                </div><!--
<div class="carousel-item">
<div class="nome">
<p>BLUE ROMA</p>
</div>
<img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/blue-roma.webp">
</div>
<div class="carousel-item">
<div class="nome">
<p>FABERGÉ</p>
</div>
<img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/faberge.webp">
</div>
<div class="carousel-item">
<div class="nome">
<p>OCEAN</p>
</div>
<img class="d-block mx-auto img-fluid" src="Images/Index/Carousel-Top/ocean.webp">
</div>-->
            </div>
        </div>





        <section class="best-sellers">
            <h2>BEST</h2>
            <h1>SELLERS</h1>
            <div class="swiper mySwiper swiperBestSeller">
                <div class="swiper-wrapper imagens">
                    <div class="swiper-slide">
                        <a href="Images/Index/Best-Sellers/acquabela.webp" data-lightbox="best12345aa" data-title="ACQUABELA"><img src="Images/Index/Best-Sellers/acquabela.webp"></a>
                        <p>ACQUABELA</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Best-Sellers/azul-doro.webp" data-lightbox="bestSellersGallery2" data-title="AZUL D'ORO"><img src="Images/Index/Best-Sellers/azul-doro.webp"></a>
                        <p>AZUL D'ORO</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Best-Sellers/blue-roma.webp" data-lightbox="bestSellersGallery3" data-title="BLUE ROMA"><img src="Images/Index/Best-Sellers/blue-roma.webp"></a>
                        <p>BLUE ROMA</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Best-Sellers/faberge.webp" data-lightbox="bestSellersGallery4" data-title="FABERGÉ"><img src="Images/Index/Best-Sellers/faberge.webp"></a>
                        <p>FABERGÉ</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Best-Sellers/ocean.webp" data-lightbox="bestSellersGallery5" data-title="OCEAN"><img src="Images/Index/Best-Sellers/ocean.webp"></a>
                        <p>OCEAN</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>        




        <section class="materials">
            <h2>see our line of</h2>
            <h1>materials</h1>
            <div class="swiper mySwiper swiperMaterials">
                <div class="swiper-wrapper imagens">
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/acquamare.webp" data-lightbox="ourMaterialsGallery1" data-title="ACQUAMARE"><img src="Images/Index/Materials/acquamare.webp"></a>
                        <p>ACQUAMARE</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/acquamare2.webp" data-lightbox="ourMaterialsGallery1" data-title="ACQUAMARE"><img src="Images/Index/Materials/acquamare2.webp"></a>
                        <p>ACQUAMARE</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/adamantium.webp" data-lightbox="ourMaterialsGallery2" data-title="ADAMANTIUM"><img src="Images/Index/Materials/adamantium.webp"></a>
                        <p>adamantium</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/ancara.webp" data-lightbox="ourMaterialsGallery3" data-title="ANCARA"><img src="Images/Index/Materials/ancara.webp"></a>
                        <p>ancara</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/calacatta-crystallo.webp" data-lightbox="ourMaterialsGallery4" data-title="CALACATTA CRYSTALLO"><img src="Images/Index/Materials/calacatta-crystallo.webp"></a>
                        <p>calacatta crystallo</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/cristallo-azul.webp" data-lightbox="ourMaterialsGallery5" data-title="CRISTALLO AZUL"><img src="Images/Index/Materials/cristallo-azul.webp"></a>
                        <p>cristallo azul</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/cristallo-polished.webp" data-lightbox="ourMaterialsGallery6" data-title="CRISTALLO POLISHED"><img src="Images/Index/Materials/cristallo-polished.webp"></a>
                        <p>cristallo polished</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/cristallo-rosa.webp" data-lightbox="ourMaterialsGallery7" data-title="CRISTALLO ROSA"><img src="Images/Index/Materials/cristallo-rosa.webp"></a>
                        <p>cristallo rosa</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/crystal-fantasy.webp" data-lightbox="ourMaterialsGallery8" data-title="CRYSTAL FANTASY"><img src="Images/Index/Materials/crystal-fantasy.webp"></a>
                        <p>crystal fantasy</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/eclipse.webp" data-lightbox="ourMaterialsGallery9" data-title="ECLIPSE"><img src="Images/Index/Materials/eclipse.webp"></a>
                        <p>eclipse</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/fenix.webp" data-lightbox="ourMaterialsGallery10" data-title="FENIX"><img src="Images/Index/Materials/fenix.webp"></a>
                        <p>fenix</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/fusion.webp" data-lightbox="ourMaterialsGallery11" data-title="FUSION"><img src="Images/Index/Materials/fusion.webp"></a>
                        <p>fusion</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/maori.webp" data-lightbox="ourMaterialsGallery12" data-title="MAORI"><img src="Images/Index/Materials/maori.webp"></a>
                        <p>maori</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/red-quartzite.webp" data-lightbox="ourMaterialsGallery13" data-title="RED QUARTZITE"><img src="Images/Index/Materials/red-quartzite.webp"></a>
                        <p>red quartzite</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/sea-pearl-2cm.webp" data-lightbox="ourMaterialsGallery14" data-title="SEA PEARL 2CM"><img src="Images/Index/Materials/sea-pearl-2cm.webp"></a>
                        <p>sea pearl 2cm</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/sea-pearl-3cm.webp" data-lightbox="ourMaterialsGallery15" data-title="SEA PEARL 3CM"><img src="Images/Index/Materials/sea-pearl-3cm.webp"></a>
                        <p>sea pearl 3cm</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/shadow-storm.webp" data-lightbox="ourMaterialsGallery16" data-title="SHADOW STORM"><img src="Images/Index/Materials/shadow-storm.webp"></a>
                        <p>shadow storm</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/statuario.webp" data-lightbox="ourMaterialsGallery17" data-title="STATUARIO"><img src="Images/Index/Materials/statuario.webp"></a>
                        <p>statuario</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/taj-mahal.webp" data-lightbox="ourMaterialsGallery18" data-title="TAJ MAHAL"><img src="Images/Index/Materials/taj-mahal.webp"></a>
                        <p>taj mahal</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/vulcanic.webp" data-lightbox="ourMaterialsGallery19" data-title="VULCANIC"><img src="Images/Index/Materials/vulcanic.webp"></a>
                        <p>vulcanic</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/white-diamond.webp" data-lightbox="ourMaterialsGallery20" data-title="WHITE DIAMOND"><img src="Images/Index/Materials/white-diamond.webp"></a>
                        <p>white diamond</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/white-pearl.webp" data-lightbox="ourMaterialsGallery21" data-title="WHITE PEARL"><img src="Images/Index/Materials/white-pearl.webp"></a>
                        <p>white pearl</p>
                    </div>
                    <div class="swiper-slide">
                        <a href="Images/Index/Materials/white-soul.webp" data-lightbox="ourMaterialsGallery22" data-title="WHITE SOUL"><img src="Images/Index/Materials/white-soul.webp"></a>
                        <p>white soul</p>
                    </div>
                </div><!--
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>-->
            </div>
            <button class="btn-more">SEE MORE</button>
        </section>



        <section class="carried-out">
            <h2>PROJECTS</h2>
            <h1>CARRIED OUT</h1>
            <li class ="menu">
                <ul id="kitchen">kitchen</ul>
                <ul id="bathroom">bathroom</ul>
                <ul id="fireplace">fireplace</ul>
                <ul id="swimming">swimming pools</ul>
            </li>
            <div class="imagens">
                <div>
                    <img src="Images/Index/Carried-Out/imagem1.webp">
                </div>
                <div>
                    <img src="Images/Index/Carried-Out/imagem2.webp">
                </div><!--
<div>
<img src="Images/Index/Carried-Out/imagem3.webp">
</div>-->
                <div>
                    <img src="Images/Index/Carried-Out/imagem4.webp">
                </div>
                <div>
                    <img src="Images/Index/Carried-Out/imagem5.webp">
                </div><!--
<div>
<img src="Images/Index/Carried-Out/imagem6.webp">
</div>-->
                <div>
                    <img src="Images/Index/Carried-Out/imagem7.webp">
                </div><!--
<div>
<img src="Images/Index/Carried-Out/imagem8.webp">
</div>-->
                <div>
                    <img src="Images/Index/Carried-Out/imagem9.webp">
                </div><!--
<div>
<img src="Images/Index/Carried-Out/imagem10.webp">
</div>-->
                <div>
                    <img src="Images/Index/Carried-Out/imagem11.webp">
                </div>
                <div>
                    <img src="Images/Index/Carried-Out/imagem12.webp">
                </div>
            </div>
            <div class="div-btn">
                <button class="btn-more" id="kitchen">SEE MORE</button>
            </div>
        </section>


        <div id="quarry-carousel" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#quarry-carousel" data-slide-to="0" id="0" class="active"></li>
                <li data-target="#quarry-carousel" data-slide-to="1"></li>
                <li data-target="#quarry-carousel" data-slide-to="2"></li><!--
<li data-target="#quarry-carousel" data-slide-to="3"></li>
<li data-target="#quarry-carousel" data-slide-to="4"></li>-->
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="nome">
                        <p>QUARRY MATERIAL</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Quarry/imagem1.webp">
                </div>
                <div class="carousel-item">
                    <div class="nome">
                        <p>QUARRY MATERIAL</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Quarry/imagem2.webp">
                </div>
                <div class="carousel-item">
                    <div class="nome">
                        <p>QUARRY MATERIAL</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Quarry/imagem3.webp">
                </div>
                <!--<div class="carousel-item">
<div class="nome">
<p>QUARRY 4</p>
</div>
<img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/banner4.webp">
</div>
<div class="carousel-item">
<div class="nome">
<p>QUARRY 5</p>
</div>
<img class="d-block mx-auto img-fluid" src="Images/Carousel-Top/banner5.webp">
</div>-->
            </div>
        </div>


        <section class="quarry-info">
            <div class="title">
                <h2>MATERIAls<br>straight<br>from</h2>
                <h1>the</h1>
                <h1>quarry</h1>
            </div>
            <p>
                Stone Empire has connections with the most diverse quarries in Brazil.  It produces its materials in high-tech, high-delivery factories.  Everything to guarantee exclusive and superior quality Marbles, Granites, Quartzites and Crystals.  Straight from the quarry to your home, we do our best for you to have the best.
            </p>
        </section>



        <div id="our-production" class="carousel vert slide" data-ride="carousel" data-interval="5000" data-pause="false">
            <ol class="carousel-indicators">
                <li data-target="#our-production" data-slide-to="0" id="0" class="active"></li>
                <li data-target="#our-production" data-slide-to="1"></li>
                <li data-target="#our-production" data-slide-to="2"></li>
                <li data-target="#our-production" data-slide-to="3"></li>
                <li data-target="#our-production" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="nome">
                        <p>OUR PRODUCTION</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Our-Production/banner1.webp">
                </div>
                <div class="carousel-item">
                    <div class="nome">
                        <p>OUR PRODUCTION</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Our-Production/banner2.webp">
                </div>
                <div class="carousel-item">
                    <div class="nome">
                        <p>OUR PRODUCTION</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Our-Production/banner3.webp">
                </div>
                <div class="carousel-item">
                    <div class="nome">
                        <p>OUR PRODUCTION</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Our-Production/banner4.webp">
                </div>
                <div class="carousel-item">
                    <div class="nome">
                        <p>OUR PRODUCTION</p>
                    </div>
                    <img class="d-block mx-auto img-fluid" src="Images/Index/Our-Production/banner5.webp">
                </div>
            </div>
        </div>


        <section class="our-finishes">
            <h2>Our finishes<br>with the</h2>
            <h1>best quality</h1>
            <!--
<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
</p>-->
        </section>


        <section class="contato justify-content-center" id="contact">
            <div class="logo">
                <!--<img src="Images/Form/logo.webp">-->
                <h1>CONTACT US</h1>
                <!--<h2>US</h2>-->
            </div>
            <div class="form">
                <h1>MAKE YOUR BUDGET</h1>
                <!--<div class="row">-->
                <div class="info">
                    <input class= "form-text form-nome" type="text" name="nome" id="nome" placeholder="NAME">
                    <input class= "form-text form-email" type="text" name="email" id="email" placeholder="E-MAIL">
                    <input class= "form-text" type="text" name="telefone" id="telefone" placeholder="PHONE NUMBER">
                    <input class= "form-text" type="text" name="produto" id="produto" placeholder="WHICH PRODUCT ARE YOU INTERESTED IN?">
                    <button class="buttonEmail" type="button">SEND</button>
                </div>
                <!--<div class="mensagem col-12 col-md-6">
<textarea class= "form-text" type="text" name="mensagem" id="mensagem" placeholder="Mensagem" rows="5"></textarea>
</div>
<!--</div>-->
            </div>
        </section>

        <?php
        include 'php/footer.html';
        ?>

    </body>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</html>
