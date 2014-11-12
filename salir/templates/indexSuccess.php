<!DOCTYPE HTML>

<head>
    <meta charset="utf-8">
    <title></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/chance.ico" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">

        .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
        }
        </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">window.alert = function(){}</script>

    <script type="text/javascript">
    jQuery(document).ready(function($) {

        $('#myCarousel').carousel({
                interval: 5000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
    </script>
</head>
<body>

<!-- Header Start -->
<?php if (!$sf_user->isAuthenticated()): ?>
<!-- Header Start -->
<div id="header" class="header">
<div class="wrapper" >

     <!-- Logo Section -->
     <div class="logo">
     <a href="#"><img src="/images/logo.png" alt="" /></a>
     </div>

     <!-- Navigation Section -->
     <div class="navi">
     <ul>
         <li><a href="<?php echo url_for('intro/index')?>"><i class="icon-home"></i>Inicio</a></li>
         <li><a href="<?php echo url_for('buscarArticulos/index')?>"><i class="icon-list"></i>Articulos</a></li>
         <li class="current"><a href=""><i class="icon-heart"></i>Donar</a></li>
         <li><a href="#team"><i class="icon-flag"></i>Politicas</a></li>
         <li><a href="#contact" ><i class="icon-move"></i>Terminos</a></li>
         <?php if (!$sf_user->isAuthenticated()): ?>
         <li class="s1"><a href="<?php echo url_for('cuenta/index')?>" class="external">Log in</a></li>
         <li class="s2"><a class='iframe2' href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>" id="register" >Registrate</a></li>
         <?php endif ?>
     </ul>
     </div>
	 <div class="navi2"><a  class="closed" id="mobile"></a></div>
	 <div class="clear"></div>

</div><!-- Wrapper End -->

<!-- Mobile Menu ( ONLY ON MOBILE )-->
<div id="mobi-menu" class="off">
    <ul>
	<li><a href="#slider1">Home</a></li>
	<li><a href="#about">About</a></li>
	<li><a href="#services">Services</a></li>
	<li><a href="#team">Team</a></li>
	<li><a href="#contact">Contact</a></li>

	</ul>
</div>
<!-- Mobile Menu End -->

</div><!-- Header End -->
<?php endif ?><!-- Header End -->

<!-- Content Container  -->
<div class="bg-container">





<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Empresas q' confian </p><div class="divi1"></div>
     <div class="clear"></div>
     
     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      
     <!-- Slider -->
                <div class="row">
                    <div class="span12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="span8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="/images/utn_g.png"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="/images/mi_g.png"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="/images/floralp_g.png"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="/images/gpi_g.png"></div>

                                        <div class="item" data-slide-number="4">
                                        <img src="/images/exa_g.png"></div>

                                        <div class="item" data-slide-number="5">
                                        <img src="/images/laguna_g.png"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>

                            <div id="slide-content" >
                                <div id="slide-content-0">
                                    <h4>&nbsp;&nbsp;&nbsp;&bull; <a href="<?php echo url_for('cuenta/index')?>">Ingresar a mi cuenta</a></h4>
                                    <h4>&nbsp;&nbsp;&nbsp;&bull; <a href="http://localhost:8687/backend_dev.php/guard/users/new">Registrarme</a></h4>
                                    <h4>&nbsp;&nbsp;&nbsp;&bull; <a href="#">Publicidad en cambiofacil</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-phone" id="slider-thumbs">
                    <div class="span12">
                        <!-- Bottom switcher of slider -->

                        <ul class="thumbnails">
                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="/images/utn_p.png"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="/images/mi_p.png"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="/images/floralp_p.png"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="/images/gpi_p.png"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-4"><img src="/images/exa_p.png"></a>
                            </li>

                            <li class="span2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="/images/laguna_p.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
   </div>

</section>

     


     <div class="divi2"></div>
     </div>
</div>
</div><!-- About End -->

<!-- Clear -->
<div class="clear"></div>

</div><!-- Content Container End  -->

<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

</body>
</html>
