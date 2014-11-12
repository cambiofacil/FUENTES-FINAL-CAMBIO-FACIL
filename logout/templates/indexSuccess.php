<!DOCTYPE HTML>

<head>

<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Adios')?>
<?php end_slot(); ?>

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

<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png"/>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-72x72-precomposed.png"/>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-114x114-precomposed.png"/>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-144x144-precomposed.png"/>
<link href="http://bootsnipp.com/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet"/>
<link href="http://bootsnipp.com/css/bootstrap-responsive.min.css" media="all" type="text/css" rel="stylesheet"/>
<link href="http://bootsnipp.com/css/prettify.css" media="all" type="text/css" rel="stylesheet"/>

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
     <ul>
         <li><a href="<?php echo url_for('intro/index')?>">Inicio</a></li>
         <li class="current"><a href="#about">Articulos</a></li>
         <li><a href="<?php echo url_for('institucionesBeneficencia/index')?>">Donaciones</a></li>
         <li><a href="#team">Politicas</a></li>
         <li><a href="#contact" >Terminos uso</a></li>
         <li class="s1"><a href="#fr" class="external">Log in</a></li>
         <li class="s2"><a href="#fr" id="register" class="external">Registrate</a></li>
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

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Fue un gusto</p><div class="divi1"></div>
     <div class="clear"></div>

<!--<center><img src="/images/aaa.png" alt=""/></center>-->
        <p align="right">
        <?php if ($sf_user->isAuthenticated()): ?>
        <font color="wheit"><img src="/images/iconos 3.jpg" alt="" height="15" width="15"/> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font>
        <?php endif ?>
        </p>
        <?php if (!$sf_user->isAuthenticated()): ?>
        <br/>
        <?php endif ?>

        <div class="well">
        <h2><center>Buen trabajo</center></h2>
        </div>

        <br/>

        
        


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
