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
$(".iframe1").colorbox({iframe:true, fastIframe:false, width:"800px", height:"400px", transition:"fade", scrolling   : false});
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
     <div class="divi1"></div><p class="title-spc">Administración de Valoraciones</p><div class="divi1"></div>
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
        <table>
        <tr>
            <td><center><h2><center> <img src="/images/check.png" alt="" width="50" height="50" title="Haz click"/> Valoraciones</center></h2></center></td>
        </tr>
        </table>

        <div class="container">
        <div class="row">
            <blockquote>
                <p>&bull; Valoraciones </p>
            </blockquote>
            <p><em>Las Valraciones entre usuarios es un proceso de vital importancia que permite establecer un parámetro
                   del cual define el nivel de confianza de cada uno de los truequeadores a fin de poder establecer una
                   escala con información importante para los usuarios interesados en los anuncios.</em></p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!o fác¡l</cite></small>
            </blockquote>
            <br/><br/>
            <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab">Valoraciones Realizadas</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Catálogo de Valoraciónes</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">                                

             <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th><center>Contacto</center></th>
                      <th><center>Anuncio</center></th>
                      <th><center>Fecha</center></th>
                      <th><center>Calificación</center></th>
                      <th><center>Acción</center></th>
                  </tr>
             </thead>
             <tbody>

                 <?php foreach ($info_valoracion as $info_valoracionn): ?>
                 <tr>
                     <td>
                     <a class='iframe_info_contacto' href="<?php echo url_for('informacionUsuario/index?id_usr_contacto='.$info_valoracionn['id_usr_ingresa'])?>"><strong><?php echo $info_valoracionn['first_name']?> <?php echo $info_valoracionn['last_name']?></strong></a>
                     <br/>
                     Comentario:<br/>
                         <table>
                             <tr>
                                 <td>
                                 <center>
                                 <textarea name="mensaje" cols="15" rows="2" id="mensaje" style="background-color: transparent;border: 1px solid #000000;scrollbar-arrow-color: #000066;scrollbar-base-color: #000033;scrollbar-dark-shadow-color: #336699;scrollbar-track-color: #666633;scrollbar-face-color: #cc9933;scrollbar-shadow-color: #DDDDDD;scrollbar-highlight-color: #CCCCCC;" readonly><?php echo $info_valoracionn['motivo_valoracion']?></textarea>
                                 </center>
                                 </td>
                             </tr>
                         </table>

                     </td>
                    <td>
                        <table>
                            <tr>
                                <td rowspan="2">
                                    <center>
                                        Foto art&iacute;culo<br/><img alt="<?php echo $info_valoracionn['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $info_valoracionn['imagen_p']?>" width="50" height="50" />
                                    </center>
                                </td>
                                <td><strong><?php echo $info_valoracionn['titulo']?></strong></td>
                            </tr>
                            <tr>
                                <td>Publicado: <?php echo $info_valoracionn['fecha_public']?></td>
                            </tr>
                        </table>
                    </td>
                    <td><center><?php echo $info_valoracionn['fecha_ing']?></center></td>

                    <td><center>
                    <?php if($info_valoracionn['valoracion_porcent']==0){ ?>
                            <font color="red"><strong><?php echo $info_valoracionn['valoracion_porcent']?></strong></font>
                            <br/><br/><center><img src="/images/0.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                    <?php } else if($info_valoracionn['valoracion_porcent']==25){?>
                            <font color="red"><strong><?php echo $info_valoracionn['valoracion_porcent']?></strong></font>
                            <br/><br/><center><img src="/images/75.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                    <?php }else if($info_valoracionn['valoracion_porcent']==50){?>
                            <font color="orange"><strong><?php echo $info_valoracionn['valoracion_porcent']?></strong></font>
                            <br/><br/><center><img src="/images/25.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                    <?php }else if($info_valoracionn['valoracion_porcent']==75){?>
                            <font color="orange"><strong><?php echo $info_valoracionn['valoracion_porcent']?></strong></font>
                            <br/><br/><center><img src="/images/50.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                    <?php }else if($info_valoracionn['valoracion_porcent']==100){?>
                            <font color="green"><strong><?php echo $info_valoracionn['valoracion_porcent']?></strong></font>
                            <br/><br/><center><img src="/images/100.png" alt="" class="left marg_right1" height="30" width="30"/></center>
                    <?php } ?>
                    </center></td>

                    <td><center><a class='iframe1' href="<?php echo url_for('administracionValoracionesRechazo/index?id_valoracion_det='.$info_valoracionn['id_ap_nc_det'])?>"><strong>Rechazar <br/>Valoración&raquo;</strong></a>
                        </center></td>

                 </tr>

                 <tr>
                     <td colspan="5">

                     </td>
                 </tr>
                 <?php endforeach; ?>

            </tbody>
        </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <table class="table table-striped table-bordered">
                                  <tr>
                                      <td colspan="5">
                                          <center><strong>Valoraci&oacute;n /100</strong></center>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td><br/><br/><center><img src="/images/0.png" alt="" class="left marg_right1" height="40" width="40"/><br/> <font color="red"><strong>0</strong></font></center></td>
                                      <td><br/><br/><center><img src="/images/75.png" alt="" class="left marg_right1" height="40" width="40"/><br/> <font color="red"><strong>25</strong></font></center></td>
                                      <td><br/><br/><center><img src="/images/25.png" alt="" class="left marg_right1" height="40" width="40"/><br/> <font color="orange"><strong>50</strong></font></center></td>
                                      <td><br/><br/><center><img src="/images/50.png" alt="" class="left marg_right1" height="40" width="40"/><br/> <font color="orange"><strong>75</strong></font></center></td>
                                      <td><br/><br/><center><img src="/images/100.png" alt="" class="left marg_right1" height="40" width="40"/><br/> <font color="green"><strong>100</strong></font></center></td>
                                  </tr>
                                  <tr>
                                      <td colspan="5"><center>Puntaje que afecta el nivel de confianza</center></td>
                                  </tr>
                                  <tr>
                                      <td><center><strong>0</strong></center></td>
                                      <td><center><strong>0</strong></center></td>
                                      <td><center><strong>1</strong></center></td>
                                      <td><center><strong>2</strong></center></td>
                                      <td><center><strong>3</strong></center></td>
                                  </tr>
                                </table>

                                <br/>
                                <center>
                                Este es el catálogo de valoraciones que los usuarios utilizan para generar una valoración relacionada con el intercambio de artículos, si ya realizaste trueques con la comunidad es posible que ya te hayan valorado, en caso de que no estés de acuerdo con tu valoración tienes la opción de rechazarla.
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