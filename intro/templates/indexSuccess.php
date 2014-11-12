<!DOCTYPE HTML>

<head>

<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<title>Bienvenido</title>

<!-- Description and Keyword -->
<meta name="keywords" content=""/>
<meta name="description" content=""/>

<!-- Stylesheet and Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
<link rel="stylesheet" href="css/flexslider.css"/>
<link rel="stylesheet" href="css/lightbox.css"/>
<link rel="stylesheet" href="css/styles.css"/>

<!-- Google Fonts -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,600italic,700italic,700" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet" type="text/css"/>


<!-- Javascript Library -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>

<script type="text/javascript" src="/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/js/jquery.nav.js"></script>
<script type="text/javascript" src="/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="/js/main.js"></script>

<!-- Favicon -->
<link rel="shortcut icon" href="/images/chance.ico" type="image/x-icon" />

<style>
    .cnt{
      width:450px;
      background-color:#DDAADD;
      margin:0px;
      padding:15px;
      /*font-weight:bold*/
    }
    .trans{
      background-color:#000000;
      color:#ffffff;
      position:absolute;
      text-align:center;
      /*top:50px;
      left:40px;
      padding:65px;
      font-size:25px;
      font-weight:bold;*/
      width:480px;
    }
  </style>

</head>
<body>

<!-- Header Start -->
<div id="header" class="header">
<div class="wrapper" >



     <!-- Logo Section -->
     <div class="logo">
     <a href="#"><img src="/images/logo.png" alt="" /></a>
     </div>

     <!-- Navigation Section -->
     <div class="navi">
     <ul class="navig">
         <li class="current"><a href="#slider1" >Inicio</a></li>
         <li><a href="#about">De q' se trata</a></li>
         <li><a href="#services">Servicios</a></li>
         <li><a href="#team">Equipo</a></li>
         <li><a href="#contact" >Contactanos</a></li>
         <?php if (!$sf_user->isAuthenticated()): ?>
         <li class="s1"><a href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>" class="external">Registrate</a></li>
         <li class="s2"><a href="<?php echo url_for('http://localhost:8687/frontend_dev.php/cuenta')?>" id="register" class="external">Log in</a></li>
         <?php endif ?>
         <?php if ($sf_user->isAuthenticated()): ?>
         &nbsp;&nbsp;&nbsp;&nbsp;
         <a href="<?php echo url_for('cuenta/index')?>" id="register" class="external"><font color="wheit"><strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
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


<!-- Flex Slider Start -->
<div class="flex-container">
<div id="slider1" class="flexslider loading">
     <ul class="slides">

         <!-- Slide 0 -->
         <li>
         <img src="/images/slider/bg0.png" alt="" />
         <div class="flex-caption2">
         
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h5>¡Truequea tus artículos o Dónalos!</h5></p>
         </div>
         <br/><br/>
         <p><div class="cambio_usr">
                    <form name="form1" id="planilla1" action="<?php echo url_for('anunciosFiltro/index')?>" method="get">
                        <select class="form-control" name="id_cat" id="id_cat">
                          <option disabled selected>---Elige categoría---</option>
                          <?php foreach ($categorias_act as $categorias_actt): ?>
                          <option value="<?php echo $categorias_actt['id_categoria']?>"><?php echo $categorias_actt['nombre_cat']?></option>
                          <?php endforeach; ?>
                        </select>
                    <br/>

                    <!-- Slide 1
                        <select class="form-control" name="estado" id="estado">
                          <option disabled selected>---Elige estado---</option>
                          <option value="NUEVO">NUEVO</option>
                          <option value="SEMI NUEVO">SEMI NUEVO</option>
                          <option value="USADO">USADO</option>
                        </select>
                    <br/>
                    
                        <select class="form-control" name="ciudad" id="ciudad">
                          <option disabled selected>---Elige ciudad---</option>
                          <?php foreach ($ciudades_act as $ciudades_actt): ?>
                          <option value="<?php echo $ciudades_actt['id_canton']?>"><?php echo $ciudades_actt['nombre_cant']?></option>
                          <?php endforeach; ?>
                        </select>
                    <br/>-->
                    <input type="submit" value="Buscar" class="btn btn-success"/>
                    </form>
             </div>
         </p>             
             <br/><br/>
             ____________________________________________________________
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>             
         </div>
         </li>

	     <!-- Slide 1 -->
         <li>
         <img src="/images/slider/bg1.png" alt="" />
         <div class="flex-caption">
         <h3>Que es Cambio fácil..?</h3>
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h5>Cambio fácil es una herramienta web que ayuda a poner en contacto a usuarios que quieren intercambiar objetos, favores e información. Es fácil y sencillo. Todo el mundo tiene en casa artículos en desuso. En esta página podrás intercambiarlos por otras cosas que te sean de utilidad, y si no deseas intercambiarlo puedes donarlo y contribuir con el bienestar de las personas que más lo necesitan Enjoy :)</h5></p>
         </div>
         <br/><br/><br/><br/><br/><br/><br/>
         <p align="right"><a href="<?php echo url_for('buscarArticulos/index')?>" class="btn btn-large btn-info"><i class="icon-white icon-check"></i> Ahora &rsaquo;&rsaquo;</a></p>
         </div>
         </li>

		 <!-- Slide 2 -->
         <li>
         <img src="/images/slider/bg2.png" alt="" />
         <div class="flex-caption2">
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h3><a class='iframe1' href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>"><font color="white">Registrate Ahora</font></a></h3>
             <h5>Forma parte de la comunidad más grande de truequeadores y donadores del país, ya somos: <a class='iframe1' href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>">
                     <font color="orange" size="5"><strong>
                             <?php foreach ($nro_usr_reg as $nro_usr_regg): ?>
                             <?php echo $nro_usr_regg['numusrtotal']?>
                             <?php endforeach; ?>
                         </strong></font></a> usuarios</h5></p>
         </div>

         <br/><br/><br/><br/><br/><br/><br/>
         <center><a class='iframe1' href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>"> <font color="blue"><strong>Registrarme ahora &raquo;</strong></font></a></center>
         <br/><strong>Invita a un amigo a formar parte de esta comunidad ingresa su email aqui &dArr;</strong>
         <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="slide-form validate" target="_blank" novalidate>
         <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Correo electrónico" required>
         <input type="submit" value=" Ok &rsaquo;&rsaquo; " name="subscribe" id="mc-embedded-subscribe" class="button">
         </form>
         </div>
         </li>

         <!-- Slide 7 -->
         <li>
         <img src="/images/slider/bg7.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 3 -->
         <li>
         <img src="/images/slider/bg3.png" alt="" />
         <div class="flex-caption">
         <h3>Ayúdanos a Ayudar</h3>
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h5>En todo el planeta existe aproximadamente 3'000.000 de personas que necesitan la ayuda de los demás para vivir, ahora esta es tu oportunidad para realizar tu buena acción del día... Sabemos q' eres una persona de buen corazón.</h5></p>
         </div>
         <br/><br/><br/><br/><br/>
         <a href="<?php echo url_for('institucionesBeneficencia/index')?>" class="btn btn-large btn-info"><i class="icon-white icon-check"></i> Ahora &rsaquo;&rsaquo;</a>
         </div>
         </li>

		 <!-- Slide 4 -->
         <li>
         <img src="/images/slider/bg4.png" alt="" />
         <div class="flex-caption2">
         <h3>Por q' camb!ar es más fácil q' comprar...</h3>
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h5>Queremos crear una cultura de reciclaje para disminuir las cifras de consumo en los seres humanos, te invitamos a q' publiques tus anuncios con cambio fácil la web con más de 7000 usuarios activos en el Ecuador</h5></p>
         </div>
         <br/><br/><br/><br/><br/><br/>
         <a href="<?php echo url_for('buscarArticulos/index')?>" class="btn btn-large btn-info"><i class="icon-white icon-check"></i> Conocer mas &rsaquo;&rsaquo;  </a>
         </div>
         </li>

         <!-- Slide 9 -->
         <li>
         <img src="/images/slider/bg9.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             _____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 5 -->
         <li>
         <img src="/images/slider/bg5.png" alt="" />
         <div class="flex-caption2">
         <h3>Al tanto de todo</h3>
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h5>Entérate de los nuevos anuncios registrados en tiempo real, descarga nuestro gadget e instálalo en tu escritorio</h5>  </p>
         </div>

         <br/><br/><br/><br/>
         <a href="<?php echo url_for('/gadget/gadget.zip')?>" class="btn btn-large btn-info"><i class="icon-white icon-check"></i> Descargar &rsaquo;&rsaquo;  </a>

         </div>

         </li>

         <!-- Slide 6 -->
         <li>
         <img src="/images/slider/bg6.png" alt="" />
         <div class="flex-caption2">
         <a href="<?php echo url_for('buscarArticulos/index')?>"><h3>Buscar Artículos &rsaquo;&rsaquo; </h3></a>
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h5>Personas de todo el Ecuador realizan intercambios de objetos e información muy fácil, entérate como.</h5></p>
         </div>
         <br/><br/><br/><br/>
         <a href="<?php echo url_for('buscarArticulos/index')?>" class="btn btn-large btn-info"><i class="icon-white icon-check"></i> Visitar anuncios &rsaquo;&rsaquo;</a>
         </div>
         </li>

         <!-- Slide 8 -->
         <li>
         <img src="/images/slider/bg8.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 9 -->
         <li>
         <img src="/images/slider/bg10.png" alt="" />
         <div class="flex-caption">
         <br/><br/><br/><br/>
         <div class="trans" style="z-index:1;filter:alpha(opacity=60);float:left;-moz-opacity:.50;opacity:.50">
             <p><h2>Sabemos</h2><h4><strong>que eres una persona de buen corazón, Ayúdanos a Ayudar.!!!</strong></h4></p>
         </div>
         <br/><br/><br/><br/><br/><br/>
         <a href="<?php echo url_for('institucionesBeneficencia/index')?>" class="btn btn-large btn-info"><i class="icon-white icon-check"></i> Ahora &rsaquo;&rsaquo;</a>
         </div>
         </li>

         <!-- Slide 10 
         <li>
         <img src="/images/slider/bg11.png" alt="" />
         </li>-->

         <!-- Slide 11 -->
         <li>
         <img src="/images/slider/bg12.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

          <!-- Slide 12 -->
         <li>
         <img src="/images/slider/bg13.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

          <!-- Slide 13 -->
         <li>
         <img src="/images/slider/bg14.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 14 
         <li>
         <img src="/images/slider/bg15.png" alt="" />
         </li>-->

         <!-- Slide 15 -->
         <li>
         <img src="/images/slider/bg16.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

          <!-- Slide 16 -->
         <li>
         <img src="/images/slider/bg17.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             
             
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

          <!-- Slide 17 -->
         <li>
         <img src="/images/slider/bg18.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 18 -->
         <li>
         <img src="/images/slider/bg19.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 19 -->
         <li>
         <img src="/images/slider/bg20.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 19 -->
         <li>
         <img src="/images/slider/bg21.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 20 -->
         <li>
         <img src="/images/slider/bg22.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 21 -->
         <li>
         <img src="/images/slider/bg23.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 22 -->
         <li>
         <img src="/images/slider/bg24.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 23 
         <li>
         <img src="/images/slider/bg25.png" alt="" />
         </li>-->

          <!-- Slide 24 -->
         <li>
         <img src="/images/slider/bg26.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 25 
         <li>
         <img src="/images/slider/bg27.png" alt="" />
         </li>-->

         <!-- Slide 26 -->
         <li>
         <img src="/images/slider/bg28.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 27 
         <li>
         <img src="/images/slider/bg29.png" alt="" />
         </li>-->

         <!-- Slide 27 -->
         <li>
         <img src="/images/slider/bg30.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

          <!-- Slide 28 -->
         <li>
         <img src="/images/slider/bg31.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 29 -->
         <li>
         <img src="/images/slider/bg32.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

         <!-- Slide 30 -->
         <li>
         <img src="/images/slider/bg33.png" alt="" />
         <div class="flex-caption2">
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             <br/><br/>
             ____________________<br/>
             <a class='iframe1' href="<?php echo url_for('buscarArticulos/index')?>"> <font color="orange"><strong>Truequear &raquo;   </strong></font></a>&nbsp;&nbsp;&nbsp;&nbsp;
             <a class='iframe1' href="<?php echo url_for('institucionesBeneficencia/index')?>"> <font color="orange"><strong>Donar &raquo;</strong></font></a>
         </div>
         </li>

     </ul>
</div>
</div><!-- Flex Slider End -->

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">De q' se trata</p><div class="divi1"></div>
     <div class="clear"></div>
     <h3>Que es <strong> cambiofacil?</strong> </h3>
     <div class="divi2"></div>
     </div>

	 <!-- About Slider -->
     <div id="slider2" class="about-img flexslider ">
     <ul class="slides">
     <li> <img src="/images/about/image1.png" alt="" /></li>
     <li> <img src="/images/about/image2.png" alt="" /></li>
     <li> <img src="/images/about/image3.png" alt="" /></li>
     <li> <img src="/images/about/image4.png" alt="" /></li>
     <li> <img src="/images/about/image5.png" alt="" /></li>
     <li> <img src="/images/about/image6.png" alt="" /></li>
     <li> <img src="/images/about/image7.png" alt="" /></li>
     <li> <img src="/images/about/image8.png" alt="" /></li>
     </ul>
     </div>

	 <!-- About Text -->
     <div class="about-txt">
     <div class="about-txt-bg">
     <div class="about-txt-wrap">
     <h6>cambiofacil </h6>
     <div class="about-txt-div"></div>
     <div class="clear"></div>
     <p class="about-subtitle">Ayudanos a ayudar</p>
     <p>Te entregamos la oportunidad de poder realizar tu buena acción del día, solo esta en tus manos poder generar un mejor ambiente de comodidad a las personas q' mas lo necesitan... </p>    
     <a href="<?php echo url_for('buscarArticulos/index')?>" class="btn btn-large btn-info"> Mas &rsaquo;&rsaquo;</a>
     </div>
     </div>
     </div>
</div>
</div><!-- About End -->

<!-- Clear -->
<div class="clear"></div>

<!-- Services Start -->
<div id="services" class="services">
<div class="wrapper">

<!-- Services Title -->
<div class="title">
     <div class="divi1"></div><p class="title-spc">Servicios</p><div class="divi1"></div>
     <div class="clear"></div>
</div>

<!-- Service 1  -->
<div class="featu">
     <div class="icon"> <a href="<?php echo url_for('servicioVisibleAnuncio/index')?>"><img src="/images/services/img1.png" class="ft1" alt="" /></a></div>
     <h6> Has visible tu anuncio</h6>
     <p>Deseas que tu anuncio sea el primero en mostrarce?</p>
</div>

<div class="featu-div"></div>

<!-- Service 2  -->
<div class="featu">
    <div class="icon"> <a href="/gadget/gadget.zip"><img src="/images/services/img2.png" class="ft1" alt="" /></a></div>
     <a href="/gadget/gadget.zip"><h6> Descarga Gatget</h6></a>
     <p>Quieres estar al tanto de los nuevos anuncios de cambiar en tiempo real?</p>
</div>

<div class="featu-div"></div>

<!-- Service 3  -->
<div class="featu">
     <div class="icon"> <img src="/images/services/img3.png" class="ft1" alt="" />  </div>
     <h6>Redes sociales</h6>
     <p>Buscanos en redes sociales</p>
</div>

</div>
</div><!-- Services End -->



</div><!-- Content Container End  -->

<!-- Video Start -->
<div id="video" class="video">
     <div class="video-decor1"></div>
     <div class="video-txt video-button">
     <div class="icon2"> <img src="/images/video-icon.png" class="ft1" alt="" />  </div>
     <h6> <span class="label label-info">Conoce cual es nuestra <strong> misión</strong></span></h6>
     <div class="divi3"></div>
     <a > Dale play al video </a>
     </div>
     <div class="video-decor2"></div>
</div>
<!-- Video End -->

<!-- Content Container  -->
<div class="bg-container">

<!-- Team Start -->
<div class="team" id="team">
<div class="wrapper">

<!-- Team Titlte -->
<div class="title">
<div class="divi1"></div><p class="title-spc">Testimonios</p><div class="divi1"></div>
<div class="clear"></div>
<h3>Día a día las personas del mundo <strong> nos dan una lección</strong> de como ayudar </h3>
<div class="divi2"></div>
</div>
<!-- Team List -->

<ul class="row-fluid teami">

<?php foreach ($top_3_donantes as $top_3_donantess): ?>
<li class="span4 team-s">
    <div class="icon3"><center><img src="/uploads/fotos/<?php echo $top_3_donantess['foto']?>" alt="<?php echo $top_3_donantess['foto'] ?>" width="150" height="150"/></center>
    </div>
<div class="clear"></div>
<h6><?php echo $top_3_donantess['first_name']?> <?php echo $top_3_donantess['last_name']?></h6>
<p><?php echo $top_3_donantess['ocupacion']?></p>
</li>
<?php endforeach; ?>

</ul><!-- Team List  End -->
</div>
</div><!-- Team End -->


</div><!-- Content Container End  -->

<!-- Testimonials Start -->
<div class="testimonials">
<div class="wrapper testi-container">
<div class="testi flexslider" id="testi-slider">
<ul class="slides">

     <!-- Testimonials 1 -->
     <li>
     <div class="testi-img"><img src="/images/testimonials/testi1.gif" alt="" /> </div>
     <p> "Fue una gran experiencia el haber desarrollado esta herramienta web para contribuir con un granito de arena en el bienestar de las personas que mas lo necesitan" </p>
     <p class="testio">Ing. Andrés Collaguazo -<strong> ClonSoft Corporation </strong> </p>
     </li>

	 <!-- Testimonials 2 -->
     <li>
     <div class="testi-img"><img src="/images/testimonials/testi2.gif" alt="" /> </div>
     <p> "Este es uno de los mejores proyectos de investigación que ha patrocinado la UTN, ya que se ha enfocado en un problema social de la actualidad" </p>
     <p class="testio">Dra. María de la Portilla -<strong> Vicerrectora Academica UTN </strong> </p>
     </li>

     <!-- Testimonials 3 -->
     <li>
     <div class="testi-img"><img src="/images/testimonials/testi3.jpg" alt="" /> </div>
     <p>"Me enorgullece el haber podido dirigir este magnifico proyecto implementado con herramientas libres, el cual lo hemos enfocado en la ayuda social Imbabureña y por que no de todo el pais"</p>
     <p class="testio">Ing. Miguel Orquera-<strong> Docente UTN </strong> </p>
     </li>


</ul>

<!-- Testimonials Slider Controls Prev and Next -->
<ul class="flexslider-manual-controls"><li><a href="#prev" class="previ"><img src="/images/testimonials/prev.png" alt="" /></a></li><li><a href="#next" class="nexti"><img src="/images/testimonials/next.png" alt="" /></a></li></ul>

</div>
</div>
</div><!-- Testimonials End -->

<!-- Content Container   -->
<div class="bg-container">

<!-- Gallery Start -->
<div class="gallery">
<div class="wrapper">

<!-- Gallery Titles -->
<div class="title">
<div class="divi1"></div><p class="title-spc">Lo hacemos posible</p><div class="divi1"></div>
<div class="clear"></div>
<h3>Mira como <strong> millones de personas </strong> se ganan un espacio en el cielo </h3>
<div class="divi2"></div>
</div>
</div>

<!-- Gallery List -->
<div class="wrapper">
<div class="gallery-wrap">

<ul>

<li class="gall"> <a href="/images/screenshots/screen1.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen1.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen2.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen2.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen3.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen3.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen4.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen4.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen5.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen5.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen6.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen6.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen7.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen7.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen8.jpg" class="lightbox-go" title=""><img src="/images/screenshots/screen8.jpg" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

<li class="gall"> <a href="/images/screenshots/screen9.png" class="lightbox-go" title=""><img src="/images/screenshots/screen9.png" class="a2" alt=""/> <img src="/images/screenshots/hover.png" class="b2" alt=""/></a>   </li>

</ul>

</div>
</div>
</div><!-- Gallery End -->

</div><!-- Content Container End  -->

<!-- Contact Start -->
<div class="contact" id="contact">
<div class="wrapper">
     <div class="title">
     <div class="divix1"></div><p class="title-spc">Contactos</p><div class="divix1"></div>
     <div class="clear"></div>
     <h3 class="dark">Comunicate con nosostros <strong> envía un email </strong> </h3>
     <div class="divix2"></div>
     </div>

     <div class="cntc" id="contact_form" >
     <form id="contactform" class="form-contact"  action="mailer.php" method="post">
     <div id="success" ></div>
     <center>
     <input  placeholder="Tu nombre"  type="text" class=" input-name" id="name" name="name" />
     <input placeholder="Tu Email"   type="text" class=" input-email" id="email" name="email" />
     </center>
     <textarea placeholder="Escribe tu Mensaje..."   class="message" name="message" rows="5" cols="20"></textarea>
     <input type="submit" class="input-submit" value="Enviar" id="send" />
     <ul class="form-social">
     <li><a href="#"><img src="/images/twitter.png" alt=""  /></a></li>
     <li class="facebook"><a  href="#"><img src="/images/facebook.png" alt=""  /></a></li>
     </ul>
     </form>
     </div>
</div>
</div><!-- Contact End -->

 <!-- Footer Start -->
<div class="footer">
<div class="wrapper">
     
     <div class="data row-fluid">

	 <!-- Footer Data 1 -->
     <div class="span4">
     <div class="iconfi"> <img src="/images/f-icon1.png"   alt="" />  </div>
     <p class="data-txt">Phone : 0983591223</p>
     </div>

	 <!-- Footer Data 2 -->
     <div class="span4">
     <div class="iconfi"> <img src="/images/f-icon2.png"   alt="" />  </div>
     <p class="data-txt">Oviedo 7-29 y Bolivar.</p>
     </div>

	 <!-- Footer Data 3 -->
     <div class="span4">
     <div class="iconfi"> <img src="/images/f-icon3.png"   alt="" />  </div>
     <p class="data-txt">info@cambiofacil.com</p>
     </div>
     </div>

</div>
<!-- Footer Copyright -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>

</div>
<!-- Footer End -->


<!-- Video PopUp -->
<div class="wrap" id="overlay_form">

     <!-- Video Iframe -->
     <iframe src="http://player.vimeo.com/video/108972981"  width="800" height="450"></iframe>
     <a  id="close2" ></a>
</div>
<div id="popi-bg"></div>
<!-- Video PopUp End -->

<!-- Register Form -->

<div id="popi-bg2"></div>
<!-- Register Form End -->


</body>
</html>