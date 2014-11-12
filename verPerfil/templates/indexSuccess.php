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

<style>

.range {
    display: table;
    position: relative;
    height: 25px;
    margin-top: 20px;
    background-color: rgb(245, 245, 245);
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.range input[type="range"] {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    display: table-cell;
    width: 100%;
    background-color: transparent;
    height: 25px;
    cursor: pointer;
}
.range input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range input[type="range"]::-moz-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range output {
    display: table-cell;
    padding: 3px 5px 2px;
    min-width: 40px;
    color: rgb(255, 255, 255);
    background-color: rgb(153, 153, 153);
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;

    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}
.range input[type="range"] {
    outline: none;
}

.range.range-primary input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"]::-moz-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary output {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"] {
    outline-color: rgb(66, 139, 202);
}

.range.range-success input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"]::-moz-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success output {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"] {
    outline-color: rgb(92, 184, 92);
}

.range.range-info input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"]::-moz-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info output {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"] {
    outline-color: rgb(91, 192, 222);
}

.range.range-warning input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"]::-moz-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning output {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"] {
    outline-color: rgb(240, 173, 78);
}

.range.range-danger input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger input[type="range"]::-moz-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger output {
    background-color: rgb(217, 83, 79);
}
.range.range-danger input[type="range"] {
    outline-color: rgb(217, 83, 79);
}

</style>

<script>
$(document).ready(function(){
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"900px", height:"516px", transition:"fade", scrolling   : true});
});
</script>

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

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">
<br/>
     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Información del anunciante</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span4">
        <div class="pad_bot2">
            <center><h4>&raquo; Datos del anunciante</h4></center>
            <br/>

            <?php foreach ($fanuncioss_dat_usr as $fanuncioss_dat_usrr): ?>
               <table class="table table-striped table-bordered">
                   <tr>
                       <td colspan="2"><center><img src="/uploads/fotos/s_<?php echo $fanuncioss_dat_usrr['foto']?>" alt="<?php echo $fanuncioss_dat_usrr['foto'] ?> " /></center></td>
                   </tr>
               </table>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab"><i class="icon-th-large"></i> General</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab"><i class="icon-map-marker"></i> Direcciónes</a></li>
                <li><a href="#faq-cat-3" data-toggle="tab"><i class="icon-bullhorn"></i> Teléfonos</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                              <table>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Usuario:</strong> <?php echo $fanuncioss_dat_usrr['username']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Nombres:</strong> <?php echo $fanuncioss_dat_usrr['first_name']?> <?php echo $fanuncioss_dat_usrr['last_name']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Fecha Nac:</strong> <?php echo $fanuncioss_dat_usrr['fecha_nac']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>E-mail:</strong> <?php echo $fanuncioss_dat_usrr['email_address']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Ocupación:</strong> <?php echo $fanuncioss_dat_usrr['ocupacion']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                              <table>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Provincia:</strong> <?php echo $fanuncioss_dat_usrr['nombre_prov']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Ciudad:</strong> <?php echo $fanuncioss_dat_usrr['nombre_cant']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Nacionalidad:</strong> <?php echo $fanuncioss_dat_usrr['nacionalidad']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <center><p><i class="icon-map-marker"></i> <strong>Ubicación:</strong> <a class='iframeEstAnun' href="<?php echo url_for('verMapa/index?calle='.$fanuncioss_dat_usrr['nombre_prov'].'&ciudad='.$fanuncioss_dat_usrr['nombre_cant'].'&provincia='.$fanuncioss_dat_usrr['nombre_prov'])?>" title="Ver en maps">Ver en maps</a></p></center>
                                  </td>
                              </tr>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-3">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                          <table>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Celular: </strong><?php echo $fanuncioss_dat_usrr['nro_celular']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Convencional:</strong> <?php echo $fanuncioss_dat_usrr['nro_convencional']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <blockquote>
                                          <p>&bull; <strong>Oficina:</strong> <?php echo $fanuncioss_dat_usrr['nro_oficina']?> </p>
                                      </blockquote>
                                  </td>
                              </tr>
                          </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    

<?php endforeach; ?>

        </div>
      </div>

      <div class="span8">          

            <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>Importante: </strong> Toma mucho en cuenta que la información del usuario sea lo mas veridica posible.
            </div>

              <table class="table table-striped table-bordered">
                  <tr>
                      <?php foreach ($lanuncioss as $lanuncios): ?>
                      <td colspan="3"><i class="icon-ok"></i><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lanuncios['titulo']?></strong></td>
                      <?php endforeach; ?>
                  </tr>
                  <tr>
                      <?php foreach ($fanuncioss_dat_usr as $fanuncioss_dat_usrr): ?>
                      <td><center>Ciudad<br/><strong> <a class='iframeEstAnun' href="<?php echo url_for('verMapa/index?calle='.$fanuncioss_dat_usrr['nombre_prov'].'&ciudad='.$fanuncioss_dat_usrr['nombre_cant'].'&provincia='.$fanuncioss_dat_usrr['nombre_prov'])?>" title="Ver en maps"><?php echo $fanuncioss_dat_usrr['nombre_cant']?></a></strong></center></td>
                      <?php endforeach; ?>
                      <?php foreach ($nro_visitas as $anuncios_var): ?>
                      <td><center># Visitas<br/><strong><?php echo $anuncios_var['numvisitas']?></strong></center></td>
                      <?php endforeach; ?>
                      <?php foreach ($lanuncioss as $lanuncios): ?>

                        <?php $estado_fisico_art = 'NO INDICADO';?>

                        <?php if($lanuncios['estado'] == 1){
                            $estado_fisico_art = 'NUEVO';
                        }elseif($lanuncios['estado'] == 2){
                            $estado_fisico_art = 'SEMI NUEVO';
                        }elseif($lanuncios['estado'] == 3){
                            $estado_fisico_art = 'USADO';
                        }?>

                      <td><center>Estado<br/><strong><span class="label label-info"><?php echo $estado_fisico_art?></span></strong></center></td>
                      <?php endforeach; ?>
                  </tr>
              </table>

     <?php foreach ($lanuncioss as $lanuncios): ?>
            <table class="table table-striped table-bordered">
            <tr>
                <td><strong><i class="icon-tasks"></i>&nbsp;&nbsp;&nbsp;&nbsp;Categoria:</strong></td>
                <td><?php echo $lanuncios['nombre_cat']?></td>
            </tr>
            <tr>
                <td><strong><i class="icon-calendar"></i>&nbsp;&nbsp;&nbsp;&nbsp;Fecha de Publicación:</strong></td>
                <td><?php echo $lanuncios['fecha_public']?></td>
            </tr>
            <tr>
                <td><strong><i class="icon-wrench"></i>&nbsp;&nbsp;&nbsp;&nbsp;Estado:</strong></td>

                <?php $estado_fisico_art = 'NO INDICADO';?>

                <?php if($lanuncios['estado'] == 1){
                $estado_fisico_art = 'NUEVO';
                }elseif($lanuncios['estado'] == 2){
                $estado_fisico_art = 'SEMI NUEVO';
                }elseif($lanuncios['estado'] == 3){
                $estado_fisico_art = 'USADO';
                }?>

                <td><span class="label label-info"><?php echo $estado_fisico_art?></span></td>
            </tr>
            <tr>
                <td><strong><i class="icon-upload"></i>&nbsp;&nbsp;&nbsp;&nbsp;Observaciones:</strong></td>
                <td><?php echo $lanuncios['observaciones']?></td>
            </tr>
            <tr>
                <td><strong><i class="icon-refresh"></i>&nbsp;&nbsp;&nbsp;&nbsp;Lo cambiaría por:</strong></td>
                <td><?php echo $lanuncios['lo_cambiaria_por']?></td>
            </tr>
            <tr>
                <td><strong><i class="icon-thumbs-up"></i>&nbsp;&nbsp;&nbsp;&nbsp;Nivel de confianza</strong></td>
                <td>
                    <div class="range range-primary">
                        <input type="range" name="range" min="1" max="100" value="75" onchange="rangePrimary.value=value" disabled="true">
                    <output id="rangePrimary"><strong><?php echo $lanuncios['valoracion_sum_total']?>%</strong></output>
                    </div>
                </td>
            </tr>
            </table>

            <table class="table table-striped table-bordered">
            <tr>
                <td colspan="3"><center><strong>Imágenes del artículo</strong></center></td>
            </tr>
            <tr>
                <td><br/>
                    <center>
                    <a class="lightbox-go" href="/uploads/fotos/<?php echo $lanuncios['imagen_p']?>">
                    <img alt="<?php echo $lanuncios['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $lanuncios['imagen_p']?>" width="100" height="50" />
                    </a>
                    </center>
                </td>
                <td><br/>
                    <center>
                    <a class="lightbox-go" href="/uploads/fotos/<?php echo $lanuncios['imagen_s']?>" rel='prettyPhoto[wallpapers]'>
                    <img alt="<?php echo $lanuncios['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $lanuncios['imagen_s']?>" width="100" height="50" />
                    </a>
                    </center>
                </td>
                <td><br/>
                    <center>
                    <a class="lightbox-go" href="/uploads/fotos/<?php echo $lanuncios['imagen_t']?>" rel='prettyPhoto[wallpapers]'>
                    <img alt="<?php echo $lanuncios['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $lanuncios['imagen_t']?>" width="100" height="50" />
                    </a>
                    </center>
                </td>
            </tr>
            </table>

        <script language="JavaScript" type="text/javascript">
        function contador (campo, cuentacampo, limite) {
        if (campo.value.length > limite) campo.value = campo.value.substring(0, limite);
        else cuentacampo.value = limite - campo.value.length;
        }
        </script>

        <form name="form1" id="planilla1" action="<?php echo url_for('verPerfil/index')?>" method="post">
            <div style='position:relative;display:none'>
            <?php foreach ($fanuncioss_dat_usr as $fanuncioss_dat_usrr): ?>
            <input type="tex" id="id_usuario" name="id_usuario" value="<?php echo $fanuncioss_dat_usrr['id']?>"/>
            <?php endforeach; ?>
            </div>

            <div style='position:relative;display:none'>
            <?php foreach ($lanuncioss as $lanuncios): ?>
            <input type="tex" id="id_anuncio_int" name="id_anuncio_int" value="<?php echo $lanuncios['id_anuncio']?>"/>
            <?php endforeach; ?>

            <input type="tex" id="nombre" name="nombre" value="<?php echo $sf_user->getGuardUser()->getFirstName(); ?>"/>
            <input type="tex" id="apellido" name="apellido" value="<?php echo $sf_user->getGuardUser()->getLastName(); ?>"/>

            <?php foreach ($fanuncioss_dat_usr as $fanuncioss_dat_usrr): ?>
            <input type="tex" id="provincia" name="provincia" value="<?php echo $fanuncioss_dat_usrr['nombre_prov']?>"/>
            <input type="tex" id="ciudad" name="ciudad" value="<?php echo $fanuncioss_dat_usrr['nombre_cant']?>"/>
            <input type="tex" id="email" name="email" value="<?php echo $fanuncioss_dat_usrr['email_address']?>"/>
            <?php endforeach; ?>
            </div>

            <!--<?php foreach ($fanuncioss_dat_usr as $fanuncioss_dat_usrr): ?>
                <?php foreach ($apultimosmsjs as $apultimosmsj): ?>

                    <?php if($apultimosmsj['id_usuarioenvia']==$sf_user->getGuardUser()->getId() && $apultimosmsj['id_usuariorecibe']==$fanuncios['id']) {?>

                        <?php echo 'se elimina la fila en la BDD' ?>

                    <?php } else { ?>

                        <div style='position:relative;display:none'>
                        <?php foreach ($fanuncioss_dat_usr as $fanuncioss_dat_usrr): ?>
                        <input type="tex" id="id_usuario1" name="id_usuario1" value="<?php echo $fanuncioss_dat_usrr['id']?>"/>
                        <?php endforeach; ?>

                        <?php foreach ($lanuncioss as $lanuncios): ?>
                        <input type="tex" id="id_anuncio_int1" name="id_anuncio_int1" value="<?php echo $lanuncios['id_anuncio']?>"/>
                        <?php endforeach; ?>

                        <input type="tex" id="nombre1" name="nombre1" value="<?php echo $sf_user->getGuardUser()->getFirstName(); ?>"/>
                        <input type="tex" id="apellido1" name="apellido1" value="<?php echo $sf_user->getGuardUser()->getLastName(); ?>"/>

                        <?php foreach ($fanuncioss_dat_usr as $fanuncioss_dat_usrr): ?>
                        <input type="tex" id="provincia1" name="provincia1" value="<?php echo $fanuncioss_dat_usrr['nombre_prov']?>"/>
                        <input type="tex" id="ciudad1" name="ciudad1" value="<?php echo $fanuncioss_dat_usrr['nombre_cant']?>"/>
                        <input type="tex" id="email1" name="email1" value="<?php echo $fanuncioss_dat_usrr['email_address']?>"/>
                        <?php endforeach; ?>
                        </div>

                    <?php }?>

                <?php endforeach; ?>
            <?php endforeach; ?> -->



            <table class="table table-striped table-bordered">
                <tr>
                    <td><strong><center><br/>Contactar al anunciante</center></strong></td>
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
            <?php endforeach; ?>

       </form>
          
      </div>
   </div>
</section>




   <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab"><h4><i class="icon-plus-sign"></i> Información Adicional</h4></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                              <div class="bs-docs-example">
                                <div class="tabbable tabs-right">
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a href="#rA" data-toggle="tab">Intercambios Realizados</a></li>
                                    <li class=""><a href="#rB" data-toggle="tab">Valoraciónes Obtenidas</a></li>
                                    <li class=""><a href="#rC" data-toggle="tab">Medalla obtenida</a></li>
                                  </ul>
                                  <div class="tab-content">
                                    <div class="tab-pane active" id="rA">
                                        <table class="table table-striped table-bordered">
                                            <tr>
                                                <td><center>&bull; <strong>Trueques realizados: &bull;</strong></center></td>
                                                <td><center>&bull; <strong>Donaciónes realizadas: &bull;</strong></center></td>
                                            </tr>
                                            <tr>
                                                <td><center><?php foreach ($nro_trueques as $nro_truequess): ?>
                                                     <a href="<?php echo url_for('verTruequesUsr/index?id_usr='.$lanuncios['id'])?>" class="btn btn-default tip" title="Intercambios exitosos"><?php echo $nro_truequess['resulttrueques']?> <i class="icon-resize-full"></i></a>
                                                    <?php endforeach; ?></center></td>
                                                <td><center><?php foreach ($nro_donaciones as $nro_donacioness): ?>
                                                     <a href="<?php echo url_for('estadisticasDonacionesUsr/index?id_usr='.$lanuncios['id'])?>" class="btn btn-default tip" title="Total de donaciones realizadas"><?php echo $nro_donacioness['numdonaciones']?> <i class="icon-heart"></i></a>
                                                    <?php endforeach; ?></center></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="rB">
                                      <p>&bull; <strong>Ultima valoración recibida:</strong>
                                      <table class="table table-striped table-bordered">
                                          <tr>
                                              <td><strong><center>Codigo</center></strong></td>
                                              <td><strong><center>Valoración</center></strong></td>
                                              <td><strong><center>Motivo Valoración</center></strong></td>
                                              <td><strong><center>Fecha</center></strong></td>
                                              <td><strong><center>Anuncio relacionado</center></strong></td>
                                          </tr>
                                          <tr>
                                              <?php foreach ($ult_val as $ult_vall): ?>
                                              <td><center><?php echo $ult_vall['id_ap_nc_det']?></center></td>
                                              <td><center>
                                                      <?php if($ult_vall['valoracion_porcent']==0){ ?>
                                                                <font color="red"><strong><?php echo $ult_vall['valoracion_porcent']?></strong></font>
                                                                <br/><br/><center><img src="/images/0.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                                                        <?php } else if($ult_vall['valoracion_porcent']==25){?>
                                                                <font color="red"><strong><?php echo $ult_vall['valoracion_porcent']?></strong></font>
                                                                <br/><br/><center><img src="/images/75.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                                                        <?php }else if($ult_vall['valoracion_porcent']==50){?>
                                                                <font color="orange"><strong><?php echo $ult_vall['valoracion_porcent']?></strong></font>
                                                                <br/><br/><center><img src="/images/25.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                                                        <?php }else if($ult_vall['valoracion_porcent']==75){?>
                                                                <font color="orange"><strong><?php echo $ult_vall['valoracion_porcent']?></strong></font>
                                                                <br/><br/><center><img src="/images/50.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                                                        <?php }else if($ult_vall['valoracion_porcent']==100){?>
                                                                <font color="green"><strong><?php echo $ult_vall['valoracion_porcent']?></strong></font>
                                                                <br/><br/><center><img src="/images/100.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                                                        <?php } ?>
                                                  </center></td>
                                              <td><?php echo $ult_vall['motivo_valoracion']?></td>
                                              <td><center><?php echo $ult_vall['fecha_ing']?></center></td>
                                              <td><strong><center><?php echo $ult_vall['titulo']?></center></strong><br/>
                                                  <center>
                                                      <a class="lightbox-go" href="/uploads/fotos/<?php echo $ult_vall['imagen_p']?>">
                                                        <img alt="<?php echo $ult_vall['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $ult_vall['imagen_p']?>" width="50" height="50" />
                                                      </a>
                                                      <a class="lightbox-go" href="/uploads/fotos/<?php echo $ult_vall['imagen_s']?>">
                                                        <img alt="<?php echo $ult_vall['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $ult_vall['imagen_s']?>" width="50" height="50" />
                                                      </a>
                                                      <a class="lightbox-go" href="/uploads/fotos/<?php echo $ult_vall['imagen_t']?>">
                                                        <img alt="<?php echo $ult_vall['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $ult_vall['imagen_t']?>" width="50" height="50" />
                                                      </a>
                                                  </center>
                                              </td>
                                              <?php endforeach; ?>
                                          </tr>
                                      </table>
                                                                         
                                    </div>
                                    <div class="tab-pane" id="rC">
                                        <table>
                                            <tr>
                                                <td><h4>El usuario a realizado <?php echo $nro_donacioness['numdonaciones']?> donaciones
                                                        <?php if($nro_donacioness['numdonaciones'] == 0) {?>
                                                         por lo tanto no posee medallas
                                                        <?php } ?>
                                                        <?php if($nro_donacioness['numdonaciones'] > 0) {?>
                                                         y posee esta medalla</h4></td>
                                                        <td>&nbsp;&nbsp;&nbsp;</td>
                                                        <td><?php foreach ($primera_medalla as $primera_medallaa): ?>
                                                                <a href="<?php echo url_for('catalogoMedallasUsr/index')?>"><img alt="<?php echo $primera_medallaa['nombre_medall']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $primera_medallaa['nombre_medall']?>" width="80" height="80" title="<?php echo $primera_medallaa['descripcion_medall']?>"/></a>
                                                            <?php endforeach; ?></td>
                                                        <?php } ?>
                                            </tr>
                                        </table>
                                    </div>
                                  </div>
                                </div> <!-- /tabbable -->
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

<?php if (!$sf_user->isAuthenticated()): ?>
     <br/><br/><br/>
     <h2><center>ATENCIÓN..!!!</center></h2>
     <br/>
     <table>
         <tr>
             <td><p align="center"><font size="3">Para poder mirar la información del usuario q' publicó este anuncio debes registrarte, aún no eres miembro de camb!o fác¡l…?? <br/>Que estas esperando</font>
             <a href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>"><strong> ::. REGISTRATE AHORA .:: </strong></a>
             <font size="3"><strong>es gratis y lo seguirá siendo.</strong></font></p></td>
         </tr>
     </table>
     <br/><br/><br/><br/>
     <center><a href="<?php echo url_for('cuenta/index')?>">&laquo; Ingresar a mi cuenta &raquo; </a> <font color="black"><strong>|</strong></font>
     <a class='iframe' href="<?php echo url_for('http://localhost:8687/backend_dev.php/guard/users/new')?>">&laquo; Registrarme &raquo;</a></center>
     <br/>
     <center><img src="/images/.png" alt="" /></center>
     <br/>
     <center><a href="<?php echo url_for('intro/index')?>" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Ir a inicio</a></center>

<?php endif ?>

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