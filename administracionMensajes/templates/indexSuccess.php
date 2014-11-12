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

<script>
$(document).ready(function(){
$(".iframe_denuncia_anuncios").colorbox({iframe:true, fastIframe:false, width:"710px", height:"445px", transition:"fade", scrolling   : true});
});
</script>

</head>

<body>
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/menu_login.php"); ?>

<br/>

    <!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">
  
     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Administración de Mensajes</p><div class="divi1"></div>
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
            <td><center><h2><center> <img src="/images/mensaje.png" alt="" width="50" height="50" title="Haz click"/> Mensajes</center></h2></center></td>
        </tr>
        </table>

        <div class="container">
        <div class="row">
            <blockquote>
                <p>&bull; Mensajea </p>
            </blockquote>
            <p><em>Cambio fácil pone en contacto a usuarios que desean realizar sus intercambios, ahora es mas fácil intercambiar q' comprar.</em></p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!o fác¡l</cite></small>
            </blockquote>
            <br/><br/>
            <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab">Buzon de entrada</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Leídos</a></li>
                <li><a href="#faq-cat-3" data-toggle="tab">Enviados</a></li>
                <li><a href="#faq-cat-4" data-toggle="tab">Archivados</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <form name="form1" id="planilla1" action="<?php echo url_for('administracionMensajes/index')?>" method="post">

                                <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th><center>Contacto</center></th>
                      <th><center>Anuncio</center></th>
                      <th><center>Fecha</center></th>
                      <th><center>Acción</center></th>
                  </tr>
             </thead>
             <tbody>

                 <?php foreach ($admin_mensajes as $anuncios): ?>
                 <tr>
                     <td>
                         <table>
                             <tr>
                                 <td><center><a class='iframe_info_contacto' href="<?php echo url_for('informacionUsuario/index?id_usr_contacto='.$anuncios['id_usuarioenvia'])?>"><strong><?php echo $anuncios['nombre_usu_envia']?> <?php echo $anuncios['apellido_usu_envia']?></strong></a></center></td>
                                 <td>
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown ">
                                           <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> <b class="caret"></b></a>
                                           <ul class="dropdown-menu">
                                               <li class="">
                                                   <a class='iframe' href=""><i class="icon-comment"></i> Archivar</a>
                                               </li>
                                               <li class="">
                                                   <a class='iframe' href=""><i class="icon-remove"></i> Eliminar mensaje</a>
                                               </li>
                                               <li class="">
                                                   <a class='iframe_denuncia_anuncios' href="<?php echo url_for('administracionIncidentesMsj/index?id_mensaje='.$anuncios['id_mensaje'])?>"><i class="icon-volume-up"></i> Denunciar</a>
                                               </li>
                                           </ul>
                                         </li>
                                    </ul>
                                 </td>
                            </tr>
                             <tr>
                                <td> Dice:
                                     <center>
                                     <textarea name="mensaje" cols="15" rows="2" id="mensaje" style="background-color: transparent;border: 1px solid #000000;scrollbar-arrow-color: #000066;scrollbar-base-color: #000033;scrollbar-dark-shadow-color: #336699;scrollbar-track-color: #666633;scrollbar-face-color: #cc9933;scrollbar-shadow-color: #DDDDDD;scrollbar-highlight-color: #CCCCCC;" readonly><?php echo $anuncios['mensaje']?></textarea>
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
                                        Foto art&iacute;culo<br/><img alt="<?php echo $anuncios['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $anuncios['imagen_p']?>" width="50" height="50" />
                                    </center>
                                </td>
                                <td><strong><?php echo $anuncios['titulo']?></strong></td>
                            </tr>
                            <tr>
                                <td>Publicado: <?php echo $anuncios['fecha_public']?></td>
                            </tr>
                        </table>
                    </td>
                    <td><center><?php echo $anuncios['fecha']?></center></td>

                    <td><center><a class='iframe1' href="<?php echo url_for('leerMensaje/index?id_mensaje='.$anuncios['id_mensaje'].'&username='.$anuncios['username'].'&idanuncio='.$anuncios['id_anuncio'].'&titulo='.$anuncios['titulo'].'&idusuario='.$anuncios['id_usuario'])?>">Responder <br/>mensaje&raquo;</a>
                        </center></td>

                 </tr>

                 <tr>
                     <td colspan="4">

                     </td>
                 </tr>
                 <?php endforeach; ?>

            </tbody>
        </table>
            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <form name="form1" id="planilla1" action="<?php echo url_for('administracionMensajes/index')?>" method="post">

             <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th><center>Contacto</center></th>
                      <th><center>Anuncio</center></th>
                      
                      <th><center>Acción</center></th>
                  </tr>
             </thead>
             <tbody>

                 <?php foreach ($admin_mensajes_leidos_count as $admin_mensajes_leidos_countt): ?>
                 <tr>
                     <td>
                         <a class='iframe_info_contacto' href="<?php echo url_for('informacionUsuario/index?id_usr_contacto='.$admin_mensajes_leidos_countt['id_usuarioenvia'])?>"><strong><?php echo $admin_mensajes_leidos_countt['nombre_usu_envia']?> <?php echo $admin_mensajes_leidos_countt['apellido_usu_envia']?></strong></a>
                     </td>
                       <td><center>
                         <a class='iframe_info_anuncio' href="<?php echo url_for('anuncios/index?id_anuncio='.$admin_mensajes_leidos_countt['id_anuncio'])?>"><?php echo $admin_mensajes_leidos_countt['id_anuncio']?></a>
                         </center></td>

                    <td><center>
                            <?php foreach ($info_para_link as $info_para_linkk): ?>
                            <a href="<?php echo url_for('mensajes/index?id_usr_envia='.$admin_mensajes_leidos_countt['id_usuarioenvia'].'&id_anuncio_hist_msj='.$admin_mensajes_leidos_countt['id_anuncio'].'&id_usuario_p='.$info_para_linkk['provincia'].'&id_usuario_c='.$info_para_linkk['ciudad'].'&id_usuario_e='.$info_para_linkk['email_address'])?>">Leer <br/>comverzaci&oacute;n</a>
                            <?php endforeach; ?>
                        </center></td>
                 </tr>

                 <?php endforeach; ?>

            </tbody>
        </table>
            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-3">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-4">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

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