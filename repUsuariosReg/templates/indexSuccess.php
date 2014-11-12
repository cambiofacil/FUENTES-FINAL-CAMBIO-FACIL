<!DOCTYPE HTML>

<head>

<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('Artículos Publicados')?>
<?php end_slot(); ?>
<link rel="shortcut icon" href="/images/chance.ico" type="image/x-icon" />
<!--[if lt IE 9]>

<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="css/application-6671d70fe98684c10f2a03b968b15224.css" media="screen" rel="stylesheet" />
<link href="css/main-2a5910dc32a4ba2ef2d80071822a38f4.css" media="screen" rel="stylesheet" />
<script src="js/stream.js"></script>
<script src="js/application-0bb47302cbdf6ed4cffeda43e8b82c17.js"></script>
<script src="js/main-998eca37f51dad39dc09fd6acb2dad3e.js"></script>

<!-- Para el poupup de la arandela -->
<link rel="stylesheet" href="http://www.formmail-maker.com/var/demo/jquery-popup-form/colorbox.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://www.formmail-maker.com/var/demo/jquery-popup-form/jquery.colorbox-min.js"></script>

<script>
$(document).ready(function(){
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"900px", height:"516px", transition:"fade", scrolling   : true});
});
</script>

<style>
#cboxOverlay{ background:#000000; }
</style>
<!-- Para el poupup de la arandela -->

<style>

#column-left {
    background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    float: left;
    position: fixed;
    min-height: 225px;
    margin-bottom: 10px;
    margin-right: 10px;
    overflow: hidden;
    /*text-align: center;*/
    width: 300px;
}

#central {
    background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    float: right;
    height: 5000px;
    margin-bottom: 10px;
    width: 985px;
}
</style>

<script>
$(function() {
var offset = $("#sidebar").offset();
var topPadding = 15;
$(window).scroll(function() {
if ($("#sidebar").height() < $(window).height() && $(window).scrollTop() > offset.top) { /* LINEA MODIFICADA POR ALEX PARA NO ANIMAR SI EL SIDEBAR ES MAYOR AL TAMAÑO DE PANTALLA */
$("#sidebar").stop().animate({
marginTop: $(window).scrollTop() - offset.top + topPadding
});
} else {
$("#sidebar").stop().animate({
marginTop: 0
});
};
});
})
</script>

<style> /*banderin*/
.cambio_usr{
float: right;
}
.cintaver {
position:relative;
width:81px;
height:50px;
background: #9a0808;
background: linear-gradient(to bottom, #9e0b0b 0%,#bf3624 3%,#9a0808 13%,#9a0808 18%,#c43b29 60%,#bc2e1e 74%,#9a0808 100%,#9a0808 100%);
float: right;
}
.cintaver:before {
position:relative;
top:50px;
display:block;
width:0;
height:0;
border-width: 41px; /*ancho banderin*/
border-style:solid;
border-color:#9A0808 #9A0808 transparent #9A0808;
content:"";
}
.cintaver:after {
position:absolute;
top: 0;
left: 8px;
padding: 40px 0 0 0;
width: 60px;
height:60px;
border-right: 1px dashed #cc3D29;
border-left: 1px dashed #cc3D29;
color:#ffffff;
content: "Cambiado HOY";
text-align:center;
text-shadow: 1px 0px  #cc3d29;
font:normal bold 10px/8px arial, serif;
}

</style>

</head>
<body>

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
         <li class="current"><a href="#about"><i class="icon-list"></i>Articulos</a></li>
         <li><a href="<?php echo url_for('institucionesBeneficencia/index')?>"><i class="icon-heart"></i>Donar</a></li>
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
<?php endif ?>

<?php if ($sf_user->isAuthenticated()): ?>
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/menu_login_BusArt.php"); ?>

<br/>

<?php endif ?>

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
         <div class="divi1"></div><p class="title-spc">Has visible tu anuncio</p><div class="divi1"></div>
     <div class="clear"></div>

<!--<center><img src="/images/aaa.png" alt=""/></center>-->
        <p align="right">
        <?php if ($sf_user->isAuthenticated()): ?>
        <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
        <?php endif ?>
        </p>

        <div class="well">
            <center><strong>Reporte de Usuarios Registrados</strong></center>
        </div>
        <br/><br/><br/><br/><br/>
        <center><h3><a class='iframeEstAnun' href="<?php echo url_for('repUsuariosRegDespliegue/index')?>" >Generar Reporte</a></h3></center>
        <br/><br/><br/><br/><br/>
        <div class="well">
            <center><strong>Generar PDF</strong></center>
        </div>

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

