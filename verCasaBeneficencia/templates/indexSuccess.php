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
$(".iframe2").colorbox({iframe:true, fastIframe:false, width:"450px", height:"560px", transition:"fade", scrolling   : true});
});
</script>

<script>
$(document).ready(function(){
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"900px", height:"516px", transition:"fade", scrolling   : true});
});
</script>

<script>
$(document).ready(function(){
$(".iframeVerGrafica").colorbox({iframe:true, fastIframe:false, width:"900px", height:"550px", transition:"fade", scrolling   : true});
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
     <div class="divi1"></div><p class="title-spc">Realiza tu donación</p><div class="divi1"></div>
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
                <li><a href="#faq-cat-3" data-toggle="tab">Historias</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span4">
        <div class="pad_bot2">            
            
        <?php foreach ($info_cbene_panel as $anuncios): ?>
        <div class="col-sm-6 col-md-6">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
                <a href='<?php echo url_for('verCasaBeneficencia/index?cod_casas_benef='.$anuncios['cod_casas_benef'])?>' title='<?php echo $anuncios['nombre']?>'>
                <?php echo $anuncios['nombre']?>
                </a>
                
                <hr class="message-inner-separator">
                <center>
                <p>
                <span class="glyphicon glyphicon-info-sign"></span> <strong><a href='<?php echo url_for('verCasaBeneficencia/index?cod_casas_benef='.$anuncios['cod_casas_benef'])?>' title='<?php echo $anuncios['nombre']?>'>
                <img alt="1215619359 photo1 mini" src="/uploads/fotos/<?php echo $anuncios['imagen_casa_benef']?>" width="150" height="150"/>
                </a></strong>
                    <div class='date'><p><?php echo $anuncios['nombre_prov']?> - <?php echo $anuncios['nombre_cant']?></p></div>
                </p>
                </center>
            </div>
        </div>
        <?php endforeach; ?>


        </div>
      </div>
      <div class="span8">

           <?php foreach ($info_cbene as $lanuncios): ?>
            <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th colspan="2"><center><?php echo $lanuncios['nombre']?></center></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td style="vertical-align:middle; text-align:center"><center><img alt="1215619359 photo1 mini" src="/uploads/fotos/<?php echo $lanuncios['imagen_casa_benef']?>" alt="<?php echo $lanuncios['imagen_casa_benef'] ?>" width="150" height="150"/></center></td>
                      <td>
                          <strong>Representante:</strong><br/> <?php echo $lanuncios['first_name']?> <?php echo $lanuncios['last_name']?> (<?php echo $lanuncios['email_address']?>)<br/><br/>
                          <strong>Provincia:</strong><br/> <?php echo $lanuncios['nombre_prov']?><br/><br/>
                          <strong>Ciudad:</strong><br/> <?php echo $lanuncios['nombre_cant']?><br/><br/>
                          <strong>Dirección:</strong><br/> <?php echo $lanuncios['direccion']?> <a class='iframeEstAnun' href="<?php echo url_for('verMapa/index?calle='.$lanuncios['direccion'].'&ciudad='.$lanuncios['nombre_cant'].'&provincia='.$lanuncios['nombre_prov'])?>"><i class="icon-globe"></i> Ver en maps</a><br/><br/>
                          <strong>Teléfonos:</strong><br/> <?php echo $lanuncios['telefono1']?> / <?php echo $lanuncios['telefono2']?> / <?php echo $lanuncios['telefono3']?><br/><br/>
                          <strong>Página web:</strong><br/> <?php echo $lanuncios['pagina_web_cb']?><br/><br/>
                      </td>
                  </tr>
                  <tr>
                      <td colspan="2"><strong>Razon Social:</strong><br/> <p align="justify"><?php echo $lanuncios['descripcion_casa_benef']?></p></td>
                  </tr>
                  <tr>
                      <td colspan="2"><strong>Misión:</strong><br/> <p align="justify"><?php echo $lanuncios['mision_cb']?></p></td>
                  </tr>
                  <tr>
                      <td colspan="2"><strong>Visión:</strong><br/> <p align="justify"><?php echo $lanuncios['vision_cb']?></p></td>
                  </tr>
              </tbody>
            </table>
            <?php endforeach; ?>

          
            <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th colspan="2"><center>Necesidades Primordiales</center></th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                          <div class="menu">
                            <div class="accordion">
                            <div class="accordion-group">
                            <div class="accordion-heading country">
                            <img src="/images/1407793359_donate.png" alt="country flag" width="30" height="30" style="float:left; margin: 3px 10px 0 3px; text-align:center;"/>
                            <a class="accordion-toggle" data-toggle="collapse" href="#country1">Conocer Necesidades Primordiales</a>
                            </div>
                            <div id="country1" class="accordion-body collapse">
                            <div class="accordion-inner">
                            <?php foreach ($nec_CB as $nec_CBB): ?>
                                <p align="justify"><strong><?php echo $nec_CBB['nombre_cat_nec']?>:</strong> <span class="label label-info"><?php echo $nec_CBB['nombre_det_cat_nec']?></span></p>
                            <?php endforeach; ?>
                            </div>
                            </div>
                            </div>
                            </div>
                          </div>
                      </td>
                  </tr>
              </tbody>
            </table>
           

            <script language="JavaScript" type="text/javascript">
            function contador (campo, cuentacampo, limite) {
            if (campo.value.length > limite) campo.value = campo.value.substring(0, limite);
            else cuentacampo.value = limite - campo.value.length;
            }
            </script>

            <form name="form1" id="planilla1" action="<?php echo url_for('verCasaBeneficencia/index')?>" method="post">
            <div style='position:relative;display:none'>
            <?php foreach ($info_cbene as $fanuncios): ?>
            <input type="tex" id="id_usuario" name="id_usuario" value="<?php echo $fanuncios['id']?>"/>
            <?php endforeach; ?>

            <input type="tex" id="nombre" name="nombre" value="<?php echo $sf_user->getGuardUser()->getFirstName(); ?>"/>
            <input type="tex" id="apellido" name="apellido" value="<?php echo $sf_user->getGuardUser()->getLastName(); ?>"/>
            </div>
            <table class="table table-striped table-bordered">
                <tr>
                    <td><strong><center><br/>Contactar a la casa de Beneficencia</center></strong></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Escribe tu mensaje</td>
                </tr>
                <tr class="info">
                    <td><center><textarea name="mensaje" cols="48" rows="4" onKeyDown="contador(this.form.mensaje,this.form.remLen,200);" onKeyUp="contador(this.form.mensaje,this.form.remLen,200);" name="mensaje" id="mensaje" style="background-color: transparent;border: 1px solid #000000;scrollbar-arrow-color: #000066;scrollbar-base-color: #000033;scrollbar-dark-shadow-color: #336699;scrollbar-track-color: #666633;scrollbar-face-color: #cc9933;scrollbar-shadow-color: #DDDDDD;scrollbar-highlight-color: #CCCCCC; " placeholder="Responder aquí..."></textarea> <br/>Nro. de caracteres restantes: <input readonly="readonly" maxlength="3" size="3" name="remLen" value="200" type="text" /></center></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><center><input type="submit" value="Enviar mensaje" class="btn btn-success"/></center></td>
                </tr>
            </table>
       </form>

      </div>
   </div>
</section>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                                <h3>Cantidad de donaciónes recibidas:</h3>
                                <center>
                                    <?php foreach ($nro_don_cb as $nro_don_cbb): ?>
                                    <span class="label label-info"><h4><?php echo $nro_don_cbb['valordon']?></h4></span>
                                    <?php endforeach; ?>
                                </center>
                                <h4>Historial de Donación:</h4>
                                <?php foreach ($info_cbene as $lanuncios): ?>
                                <a class='iframeVerGrafica' href="<?php echo url_for('graficaDonacionesCB/index?id_cb='.$lanuncios['cod_casas_benef'])?>"><i class="icon-indent-right"></i> Ver gráfica</a>
                                <?php endforeach; ?>
                                <br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-3">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                                <?php $val=1; ?>
                                
                                <table class="table table-striped table-bordered">
                                <?php foreach ($hist_dona_cb as $hist_dona_cbb): ?>
                                <tr>
                                    <td style="vertical-align:middle; text-align:center"><?php echo $val++; ?></td>
                                    <td style="vertical-align:middle; text-align:center">
                                            <center><strong><?php echo $hist_dona_cbb['first_name']?> <?php echo $hist_dona_cbb['last_name']?></strong><br/>
                                                <a href="" title="<?php echo $hist_dona_cbb['first_name']?> <?php echo $hist_dona_cbb['last_name']?>" class="avatar-sm-container"><img src="/uploads/fotos/s_<?php echo $hist_dona_cbb['foto']?>" alt="<?php echo $fanuncios['foto'] ?>" class="img-rounded user-avatar-sm" width="50" height="50"/></a><br/>
                                                <?php echo $hist_dona_cbb['nombre_prov']?> - <?php echo $hist_dona_cbb['nombre_cant']?>
                                            </center>
                                    </td>
                                    <td>
                                        <table class="table table-striped table-bordered">
                                          <thead>
                                              <tr>
                                                  <th><center>Cantidad</center></th>
                                                  <th><center>Artículo</center></th>
                                                  <th><center>Estado</center></th>
                                                  <th><center>Fecha</center></th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td><center><?php echo $hist_dona_cbb['cantidad_atic_dona']?></center></td>
                                                  <td><center><?php echo $hist_dona_cbb['descripcion_donac']?></center></td>
                                                  <td><center><?php echo $hist_dona_cbb['estado_fisico_donac']?></center></td>
                                                  <td><center><?php echo $hist_dona_cbb['fecha_fich_det']?></center></td>
                                              </tr>
                                          </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                </table>

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
