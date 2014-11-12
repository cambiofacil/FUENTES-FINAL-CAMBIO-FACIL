<!DOCTYPE HTML>

<head>

<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Artículos Publicados')?>
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
$(".iframe1").colorbox({iframe:true, fastIframe:false, width:"800px", height:"550px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe_info_contacto").colorbox({iframe:true, fastIframe:false, width:"800px", height:"350px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe_info_anuncio").colorbox({iframe:true, fastIframe:false, width:"800px", height:"500px", transition:"fade", scrolling   : false});
});
</script>

<style>
/* Badger
------------------------- */

[class*="badger"] {
    position: relative;
    margin: 15px 0;
    padding: 39px 19px 14px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
}

[class*="badger"]:after {
    content: attr(data-badger);
    position: absolute;
    top: 0;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: bold;
    background: #999;
    color: #fff;
}

.badger-left:after {
    left: 0;
    border-radius: 6px 0 6px 0;
}

.badger-right:after {
    right: 0;
    border-radius: 0 6px 0 6px;
}

.badger-danger:after {
    background: #d9534f;
}

.badger-warning:after {
    background: #f0ad4e;
}

.badger-success:after {
    background: #5cb85c;
}

.badger-info:after {
    background: #5bc0de;
}

.badger-inverse:after {
    background: #222;
}

.carousel>.carousel-inner>.item>.circleElement {
    background-color: #000;
    border-radius: 50%;
    position: absolute;
    top: 11%;
    left: 39%;
    width: 400px;
    height: 400px;
    opacity: .5;
}
.carousel-indicators {
    top: 35px;
    background: #404549;
    padding: 30px;
    border-radius: 10px;
}
.carousel-indicators li { cursor: pointer }
.carousel-control {
    width: 60px;
    height: 0;
    margin-top: -20px;
    font-size: 100px;
    background: none;
    border: none;
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 300;
}
.carousel-indicators li {
    background-color: #999;
    background-color: rgba(255,255,255,0.3);
}
.carousel-caption {
    padding: 35px;
    text-align: center;
}
.carousel-caption h4 {
    font-family: "lato";
    font-weight: 100;
    font-size: 61px;
}
.carousel-caption p {
    font-family: "lato";
    margin-top: 39px;
    font-size: 22px;
    margin-bottom: -8px;
    font-weight: 300;
    line-height: 30px;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    -webkit-transition-property: opacity;
    -moz-transition-property: opacity;
    -o-transition-property: opacity;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active { opacity: 1 }
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right { opacity: 1 }
.carousel-fade .carousel-control { z-index: 2 }
@media only screen and (max-width:767px) {
    h1 { font-size: 30px !important }
    .carousel-caption {
        padding: 15px;
        text-align: center;
    }
    .carousel-caption h4 { font-size: 30px }
    .carousel-caption p {
        margin-top: 10px;
        font-size: 10px;
        margin-bottom: -10px;
    }
    body { padding: 0 !important }
    .carousel { margin-bottom: 0 }
    .hero-unit { padding-bottom: 60px }
    .hero-unit p { font-size: 16px }
}
.carousel-container {
    width: 80% !important;
    padding-left: 10%;
    margin-top: 35px;
}
</style>

</head>

<body>
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/menu_login.php"); ?>

<!--
<div class='subnav subnav-fixed navbar navbar-fixed-top'>
<div class='subnav-inner'>
<div class='container'>
<a class='btn btn-navbar' data-target='#sub-menu' data-toggle='collapse' type='button'>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>
</a>
<div class='nav-collapse collapse' id='sub-menu'>
<ul class='nav nav-pills'>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
Completar info
<b class='caret'></b>
</a>
<ul class='dropdown-menu'>
<li>
<a href="/aktualnosci" title="Przejdź do: Aktualności">Informacion del perfil</a>
</li>
</ul>
</li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
Anuncios
<b class='caret'></b>
</a>
<ul class='dropdown-menu'>
<li>
<a href="/naruto-shippuuden-biografie" title="Przejdź do: Biografie postaci">Activos</a>
</li>
<li>
<a href="/naruto-shippuuden-biografie" title="Przejdź do: Biografie postaci">Inactivos</a>
</li>
<li>
<a href="/naruto-shippuuden-biografie" title="Przejdź do: Biografie postaci">Intercambiados</a>
</li>
</ul>
</li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
Donaciones
<b class='caret'></b>
</a>
<ul class='dropdown-menu'>
<li>
<a href="/naruto-shippuuden-techniki-jutsu" title="Przejdź do: Opisy technik">Casas de Beneficencia</a>
</li>
<li>
<a href="/naruto-shippuuden-techniki-jutsu" title="Przejdź do: Opisy technik">Donaciones relizadas</a>
</li>
</ul>
</li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
Intercambios
<b class='caret'></b>
</a>
<ul class='dropdown-menu'>
<li>
<a href="/naruto-shippuuden-gry-online" title="Przejdź do: Gry Naruto online">Informacion</a>
</li>
<li>
<a href="/naruto-shippuuden-gry-online" title="Przejdź do: Gry Naruto online">Documentos</a>
</li>
<li>
<a href="/naruto-shippuuden-gry-online" title="Przejdź do: Gry Naruto online">Mas</a>
</li>
</ul>
</li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' href='#'>
Bit Coins
<b class='caret'></b>
</a>
<ul class='dropdown-menu'>
<li>
<a href="/pytania" title="Przejdź do: Pytania i wskazówki">Obtener Bit Coins</a>
</li>
<li>
<a href="/pytania" title="Przejdź do: Pytania i wskazówki">Redencion de Bit Coins</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
<br/><br/><br/>
-->
<br/>

    <!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Trueques</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

     <h3><i class="icon-resize-full"></i> Historial de intercambios <i class="icon-resize-full"></i></h3>

     <?php foreach ($art_cambiados as $art_cambiadoss): ?>
     <div class="badger-left badger-info" data-badger="<?php echo $art_cambiadoss['titulo']?>">
         
         <table>             
             <tr>
                 <td><img alt="<?php echo $art_cambiadoss['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $art_cambiadoss['imagen_p']?>" width="50" height="50" /></td>
                 <td rowspan="3">
                     <table>
                         <tr>
                             <td>&nbsp;&nbsp;&nbsp;<strong>Categoria:</strong></td>
                             <td>&nbsp;<?php echo $art_cambiadoss['nombre_cat']?></td>
                         </tr>
                         <tr>
                             <td>&nbsp;&nbsp;&nbsp;<strong>Estado Físico:</strong></td>
                             <td>&nbsp;
                             <?php $estado_fisico_art = 'NO INDICADO';?>
                             <?php if($art_cambiadoss['estado'] == 1){
                                $estado_fisico_art = 'NUEVO';
                             }elseif($art_cambiadoss['estado'] == 2){
                                $estado_fisico_art = 'SEMI NUEVO';
                             }elseif($art_cambiadoss['estado'] == 3){
                                $estado_fisico_art = 'USADO';
                             }?>
                             <?php echo $estado_fisico_art ?></td>
                         </tr>
                         <tr>
                             <td>&nbsp;&nbsp;&nbsp;<strong>Observaciones:</strong></td>
                             <td>&nbsp;<?php echo $art_cambiadoss['observaciones']?></td>
                         </tr>
                         <tr>
                             <td>&nbsp;&nbsp;&nbsp;<strong>Lo cambiaría por:</strong></td>
                             <td>&nbsp;<?php echo $art_cambiadoss['lo_cambiaria_por']?></td>
                         </tr>
                         <tr>
                             <td>&nbsp;&nbsp;&nbsp;<strong>Nro de Visitas:</strong></td>
                             <td>&nbsp;<span class="label label-warning"><?php echo $art_cambiadoss['nro_visitas']?></span></td>
                         </tr>
                         <tr>
                             <td>&nbsp;&nbsp;&nbsp;<strong>Nro de Comentarios:</strong></td>
                             <td>&nbsp;<span class="label label-warning"><?php echo $art_cambiadoss['nro_comentarios']?></span></td>
                         </tr>
                     </table>
                 </td>
             </tr>
             <tr>
                 <td><img alt="<?php echo $art_cambiadoss['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $art_cambiadoss['imagen_s']?>" width="50" height="50" /></td>
             </tr>
             <tr>
                 <td><img alt="<?php echo $art_cambiadoss['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $art_cambiadoss['imagen_t']?>" width="50" height="50" /></td>
             </tr>             
         </table>
         <br/>
         <table>
         <tr>
             <td colspan="2">
                 <blockquote class="pull-right">
                        <small><i class="icon-calendar"></i> Fecha Publicación: <?php echo $art_cambiadoss['fecha_public']?><cite title="Source Title"></cite></small>
                 </blockquote>
             </td>
         </tr>
         </table>
     </div>
     <?php endforeach; ?>

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