<!DOCTYPE html>
<html lang='pl'>
<head>
<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Artículos Publicados')?>
<?php end_slot(); ?>
<!-- Favicon -->
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
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"450px", height:"560px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframeRegistro").colorbox({iframe:true, fastIframe:false, width:"900", height:"560px", transition:"fade", scrolling   : true});
});
</script>

<script>
$(document).ready(function(){
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"900px", height:"516px", transition:"fade", scrolling   : true});
});
</script>

<style>
#cboxOverlay{ background:#000000; }
</style>
<!-- Para el poupup de la arandela -->
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
         <li><a href="<?php echo url_for('buscarArticulos/index')?>"><i class="icon-list"></i>Articulos</a></li>
         <li class="current"><a href=""><i class="icon-heart"></i>Donar</a></li>
         <li><a href="#team"><i class="icon-flag"></i>Politicas</a></li>
         <li><a href="#contact" ><i class="icon-move"></i>Terminos</a></li>
         <?php if (!$sf_user->isAuthenticated()): ?>
         <li class="s1"><a href="<?php echo url_for('cuenta/index')?>" class="external">Log in</a></li>
         <li class="s2"><a class='iframeRegistro' href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>" id="register" >Registrate</a></li>
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
-->
<br/>


<?php endif ?>

    <!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Bienvenid@</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

     <section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span8">
        <div class="span10">        

        <div class="container">
        <div class="row">
            <blockquote>
                <p>&bull; Ayudanos a Ayudar </p>
            </blockquote>
            <p><em><strong>Sabemos q' eres una persona de buen corazón</strong>, Cambio Fácil pone en contacto a usuarios que desean realizar sus donaciónes para quienes mas lo necesitan.</em></p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!ofac!l</cite></small>
            </blockquote>
            <br/><br/>
            <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab">Instituciónes</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Estadisticas</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <?php foreach ($info_cbene as $anuncios): ?>
                               <section id="fluidGridSystem">
                                   <table class="table table-striped table-bordered">
                                       <tr>
                                           <td><h4>&raquo; <strong><a href="<?php echo url_for('verCasaBeneficencia/index?cod_casas_benef='.$anuncios['cod_casas_benef'].'&id_cb_x_get='.$anuncios['cod_usuario'])?>"><?php echo $anuncios['nombre']?></a></strong></h4></td>
                                       </tr>
                                       <tr>
                                           <td colspan="2">
                                  <div class="row-fluid show-grid">
                                      <div class="span4">
                                        <div class="pad_bot2">                                                                                        
                                               <img alt="" src="/uploads/fotos/<?php echo $anuncios['imagen_casa_benef']?>" alt="<?php echo $anuncios['imagen_casa_benef'] ?> " />
                                               <p>
                                               <br/>
                                                <i class="icon-calendar"></i> <?php echo $anuncios['fecha_ingreso']?>
                                                | <i class="icon-comment"></i> <a href="<?php echo url_for('leerComentariosCB/index?cod_casas_benef_coment='.$anuncios['cod_casas_benef'])?>"><?php echo $anuncios['nro_comentarios_cb']?> Comentarios</a>
                                                | <i class="icon-eye-open"></i> <span class="label label-info"><?php echo $anuncios['nro_visitas_cb']?> Visitas</span>
                                               </p>
                                               <center>
                                              <?php if ($sf_user->isAuthenticated()): ?>
                                              <?php  $var=$sf_user->getUsername(); ?>
                                              <?php if($anuncios['username']==$var){ ?>
                                              <div class="cambio_usr">
                                                <ul class="nav navbar-nav">
                                                    <li class="dropdown ">
                                                        <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-star-empty"></i><font color="orange"> Actualizar información</font><b class="caret"></b></a>
                                                       <ul class="dropdown-menu">
                                                           <li class="">
                                                               <a href="<?php echo url_for('necesidadesCB/index?cod_casas_benef='.$anuncios['cod_casas_benef'])?>"><i class="icon-refresh"></i> Modificar necesidades</a>
                                                           </li>
                                                       </ul>
                                                     </li>
                                                </ul>
                                              </div>
                                              <?php } ?>
                                           <?php endif ?>
                                                   </center>
                                        </div>
                                      </div>
                                      <div class="span8">
                                         <div class="bs-callout bs-callout-info">
                                             <p><i class="icon-user"></i> <strong>Publicado por:</strong> <?php echo $anuncios['first_name']?> <?php echo $anuncios['last_name']?> (<?php echo $anuncios['email_address']?>)</p>
                                             <p><i class="icon-map-marker"></i> <strong>Ubicación:</strong> <a class='iframeEstAnun' href="<?php echo url_for('verMapa/index?calle='.$anuncios['direccion'].'&ciudad='.$anuncios['nombre_cant'].'&provincia='.$anuncios['nombre_prov'])?>" title="Ver en maps"><?php echo $anuncios['nombre_prov']?> - <?php echo $anuncios['nombre_cant']?></a></p>
                                             <p><i class="icon-map-marker"></i> <strong>Dirección:</strong> <?php echo $anuncios['direccion']?></p>
                                             <p><i class="icon-headphones"></i> <strong>Teléfonos:</strong> <?php echo $anuncios['telefono1']?> / <?php echo $anuncios['telefono2']?> / <?php echo $anuncios['telefono3']?></p>
                                             <p><i class="icon-flag"></i> <strong>Página web:</strong> <?php echo $anuncios['pagina_web_cb']?></p>
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td>
                                                        <p align="justify"><?php echo $anuncios['descripcion_casa_benef']?></p>
                                                    </td>
                                                </tr>
                                            </table>
                                            
                                             <center>
                                                <table>
                                                    <tr>
                                                    <td>
                                                        <a href="<?php echo url_for('verCasaBeneficencia/index?cod_casas_benef='.$anuncios['cod_casas_benef'].'&id_cb_x_get='.$anuncios['cod_usuario'])?>" class="btn btn-large btn-info"><i class="icon-white icon-check"></i> Conocer mas &rsaquo;&rsaquo;</a>
                                                    </td>
                                                    <td>
                                                        <ul class="nav navbar-nav">
                                                        <li class="dropdown ">
                                                           <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> <b class="caret"></b></a>
                                                           <ul class="dropdown-menu">
                                                               <li class="">
                                                                   <a class='iframe' href="<?php echo url_for('comentariosCB/index?id_cb_coment='.$anuncios['cod_casas_benef'])?>"><i class="icon-comment"></i> Comentar</a>
                                                               </li>
                                                               <li class="">
                                                                   <a class='iframe_denuncia_anuncios' href="<?php echo url_for('administracionIncidentes/index?idanuncio='.$pagerr['id_anun'])?>"><i class="icon-volume-up"></i> Denunciar</a>
                                                               </li>
                                                           </ul>
                                                         </li>
                                                        </ul>
                                                    </td>
                                                    <td></td>
                                                    </tr>
                                                </table>
                                             </center>
                                          </div>
                                      </div>                                      
                                   </div>
                                               </td>
                                            </tr>
                                         </table>  
                                </section>
                                 <?php endforeach; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                                <center>
                                    <h4>Total de Donaciónes Gestionadas</h4>
                                
                                <?php foreach ($nro_total_donac as $nro_total_donacc): ?>
                                    <h3><?php echo $nro_total_donacc['numdonac']?></h3>
                                <?php endforeach; ?>

                                    <h4><em>Te invitamos a que contribuyas con el bienestar de las personas que más lo necesitan, ponte en contacto con la casa de beneficencia de tu interés y realiza tu donación. Ayúdanos ayudar </em></h4>

                                <br/>
                                
                                <img src="/images/screenshots/screen1.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen2.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen3.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen4.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen5.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen6.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen7.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen8.jpg" alt="" height="80" width="80"/>
                                <img src="/images/screenshots/screen9.jpg" alt="" height="80" width="80"/>

                                </center>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

          </div>
      </div>
   </div>
</section>
     
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
