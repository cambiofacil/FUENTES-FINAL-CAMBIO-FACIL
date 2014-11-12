<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Artículos Publicados')?>
<?php end_slot(); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenidos</title>
<link rel="shortcut icon" href="/images/Chance.ico " />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="css/styles.css"type="text/css" />

<link rel="stylesheet" href="/css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/js/js/prototype.js"></script>
<script type="text/javascript" src="/js/js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="/js/js/lightbox.js"></script>

</head>
<body>
<style type="text/css">
body
{
    background: #FFFFFF url(/images/header-home-bg_1.gif) repeat-x;
}
</style>
<div id="bg">
<div id="logo">
    <a href="#">Camb!ar.com</a>
    <h2><a href="#">Por q' camb!ar es más facil q' comprar</a></h2>
    <img src="/images/ipad-happy.png" alt="" class="left marg_right1" width="70" height="70" />
</div>
<div id="main">
<!-- header begins -->
<div id="header_buscar_articulos">
    <!-- Navigation -->
    <div id="navigation">
        <ul>
            <li class="first"><a href="<?php echo url_for('intro/index')?>">Inicio</a></li>
	    <li><a href="<?php echo url_for('buscarArticulos/index')?>">Buscar Articulos</a></li>
	    <li><a href="<?php echo url_for('institucionesBeneficencia/index')?>">Donaciones</a></li>
	    <li><a href="<?php echo url_for('cuenta/index')?>">Mi cuenta</a></li>
	    <li><a href="#">Acerca de</a></li>
	</ul>
    </div>
    <!-- End Navigation -->
    <!-- Slider -->

    <!-- End Slider -->
</div>
<!-- header ends -->
<!-- content begins -->

    <div id="content_bg">
    <div class="marg_top2">
        <div class="col2 pad_left1">
	<div class="pad">

	<!--<center><img src="/images/aaa.png" alt=""/></center>-->
        <p align="right">
        <?php if ($sf_user->isAuthenticated()): ?>
        <font color="wheit"><img src="/images/mensaje.png" alt="" height="15" width="15"/> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> tu mensaje ha sido enviado correctamente</strong></font>
        <?php endif ?>
        </p>

        </div>
        </div>
        </div>
    </div>

<br/><br/>
<div id="content_bg">
    <div id="column_box">
      <div id="bg_left"></div>
       <center><embed src="http://boing.urugate.com/rotacion_cualquier_eje.swf" quality=high width="900" height="300" TYPE="application/x-shockwave-flash" allownetworking="internal" allowscriptaccess="never" autoplay="false" wmode="transparent"></embed></center><br />
       <table>
           <tr>
               <td><center>Tu mensaje ha sido enviado correctamente <a href="<?php echo url_for('buscarArticulos/index')?>">Volver</a></center></td>
           </tr>
       </table>
    </div>
</div>

<div class="clearall"></div>
</div>

<!-- content ends -->
<!-- footer begins -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- footer ends -->
</div>
</body>
</html>