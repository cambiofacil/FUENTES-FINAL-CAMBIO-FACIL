<!DOCTYPE HTML>

<head>

<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Autentificación')?>
<?php end_slot(); ?>

<!-- Description and Keyword -->
<meta name="keywords" content=""/>
<meta name="description" content=""/>

<!-- Stylesheet and Bootstrap -->
<link rel="stylesheet" href="/css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
<link rel="stylesheet" href="css/flexslider.css"/>
<link rel="stylesheet" href="css/lightbox.css"/>
<link rel="stylesheet" href="css/styles.css"/>
<link rel='stylesheet' href='/css/css_login/estilos.css'/>

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

<!-- Para el poupup de la arandela -->
<link rel="stylesheet" href="http://www.formmail-maker.com/var/demo/jquery-popup-form/colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://www.formmail-maker.com/var/demo/jquery-popup-form/jquery.colorbox-min.js"></script>

<script>
$(document).ready(function(){
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"450px", height:"560px", transition:"fade", scrolling   : true});
});
</script>

<style>
#cboxOverlay{ background:#000000; }
</style>
<!-- Para el poupup de la arandela -->


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
         <li><a href="<?php echo url_for('intro/index')?>"><i class="icon-home"></i>Inicio</a></li>
         <li class="current"><a href="<?php echo url_for('buscarArticulos/index')?>"><i class="icon-list"></i>Articulos</a></li>
         <li><a href="<?php echo url_for('institucionesBeneficencia/index')?>"><i class="icon-heart"></i>Donar</a></li>
         <li><a href="#team"><i class="icon-flag"></i>Politicas</a></li>
         <li><a href="#contact" ><i class="icon-move"></i>Terminos</a></li>
         <li class="s2"><a class='iframe' href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>" id="register" >Registrate</a></li>
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
     <div class="divi1"></div><p class="title-spc">Bienvenid@</p><div class="divi1"></div>
     <div class="clear"></div>

     <?php foreach ($info_usr as $info_usrr): ?>
     <h3>Hola, <font color="blue"><strong><?php echo $info_usrr['first_name']?> <?php echo $info_usrr['last_name']?></strong></font>
         es un gran placer tenerte con nosotros esperamos que puedas gestionar tus intercambios y/o donaciones de la mejor manera</h3>
     <?php endforeach; ?>

     <br/><br/><br/><br/><br/>

     <form name="form1" id="planilla1" action="<?php echo url_for('activacionCuenta/index')?>" method="post">

     <div style='position:relative;display:none'>
         <input type="tex" id="v_id_user" name="v_id_user" value="<?php echo $sf_params->get('id') ?>"/>
         <input type="tex" id="v_key_user" name="v_key_user" value="<?php echo $sf_params->get('activationKey') ?>"/>

     <?php foreach ($info_usr as $info_usrr): ?>
         <input type="tex" id="usr_key" name="usr_key" value="<?php echo $info_usrr['activation_key']?>"/>
         <input type="tex" id="is_active" name="is_active" value="<?php echo $info_usrr['is_active'] ?>"/>
         <input type="tex" id="is_super_admin" name="is_super_admin" value="<?php echo $info_usrr['is_super_admin'] ?>"/>
     <?php endforeach; ?>

     <?php foreach ($ult_id_nc_cab as $ult_id_nc_cabb): ?>
         <input type="tex" id="ult_id_nc_usr" name="ult_id_nc_usr" value="<?php echo $ult_id_nc_cabb['id_ap_nc_cab']?>"/>
     <?php endforeach; ?>

     </div>

     <center>
     <input type="submit" value="Empezar ahora" class="btn btn-success"/>
     </center>
         
     </form>

     <br/><br/><br/>

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
