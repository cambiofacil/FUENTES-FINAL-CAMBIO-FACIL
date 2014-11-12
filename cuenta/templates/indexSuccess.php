<!DOCTYPE html>
<html lang='pl'>
<head>
<!-- Page Title -->
<?php slot('title') ?>
<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?>
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

<!-- Para el poupup de la informacion complementaria -->
<script type="text/javascript">
//<![CDATA[
var persistclose=0
var startX = 0
var startY = 0
var verticalpos="fromtop"
function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}
function get_cookie(Name) {
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) {
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}
function closebar(){
if (persistclose)
document.cookie="remainclosed=1"
document.getElementById("anuncio").style.visibility="hidden"
}
function staticbar(){
barheight=document.getElementById("anuncio").offsetHeight
var ns = (navigator.appName.indexOf("Netscape") != -1) || window.opera;
var d = document;
function ml(id){
var el=d.getElementById(id);
if (!persistclose || persistclose && get_cookie("remainclosed")=="")
el.style.visibility="visible"
if(d.layers)el.style=el;
el.sP=function(x,y){this.style.left=x+"px";this.style.top=y+"px";};
el.x = startX;
if (verticalpos=="fromtop")
el.y = startY;
else{
el.y = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
el.y -= startY;
}
return el;
}
window.stayTopLeft=function(){
if (verticalpos=="fromtop"){
var pY = ns ? pageYOffset : iecompattest().scrollTop;
ftlObj.y += (pY + startY - ftlObj.y)/8;
}
else{
var pY = ns ? pageYOffset + innerHeight - barheight: iecompattest().scrollTop + iecompattest().clientHeight - barheight;
ftlObj.y += (pY - startY - ftlObj.y)/8;
}
ftlObj.sP(ftlObj.x, ftlObj.y);
setTimeout("stayTopLeft()", 10);
}
ftlObj = ml("anuncio");
stayTopLeft();
}
if (window.addEventListener)
window.addEventListener("load", staticbar, false)
else if (window.attachEvent)
window.attachEvent("onload", staticbar)
else if (document.getElementById)
window.onload=staticbar
//]]>
</script>

<style type="text/css">
#anuncio {left:0;position:absolute;top:0;width:100%;z-index:1001;}
#contcpa2 {background:#fff;border:5px solid #006699;color:#333;
padding:5px;height:180px;border-radius: 15px 0px 15px 0px;
width:410px;margin:0 auto;margin-top:100px;}
</style>

<script>
function tablas(){
var yea=tabla.rows.length;
alert(yea);
}
</script>
<script>
$(document).ready(function(){
$(".iframeGaleriaAnuncios").colorbox({iframe:true, fastIframe:false, width:"510px", height:"400px", transition:"fade", scrolling   : false});
});
</script>
<script>
$(document).ready(function(){
$(".iframeCatalogoVal").colorbox({iframe:true, fastIframe:false, width:"900px", height:"400px", transition:"fade", scrolling   : true});
});
</script>
</head>

<body onload="tablas();">
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/menu_login.php"); ?>

<br/>

<?php foreach ($usr_info_com as $usr_info_comm): ?>
<?php if ($usr_info_comm['resulta'] == 0){ ?>
<div id="anuncio" style="text-align: center;">
<div id="contcpa2"><a onclick="closebar(); return false" href="Javascript:void"><img alt="" src="http://img.webme.com/pic/c/cssplantillas/cerrarcp.png" align="right" border="0" /></a>
<br/>Hola <?php echo $usr_info_comm['resulta']?> <?php echo $sf_user->getGuardUser()->getFirstName(); ?> bienvenid@ <br/><br/>
Te recomendamos que completes la información de tu perfil, así los truequeadores podrán reconocerte más rápido <br/>
&raquo; <a href="<?php echo url_for('informacionUsuario/new')?>">Completa la información del perfil</a>
</div>
</div>
<?php } ?>
<?php endforeach; ?>

    <!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

    <div class="row">
            <?php foreach ($frase_ramdom as $frase_ramdomm): ?>
                <p align="right"><em>&bull; <?php echo $frase_ramdomm['frase_motivacion']?> &mdash;<?php echo $frase_ramdomm['autor_frase_motiv']?></em></p>
            <?php endforeach; ?>
            <div class="col-md-4">                
                <p class="lead" >
                    <?php foreach ($fanuncioss as $fanuncios): ?>
                            <a href="" title="<?php echo $sf_user->getGuardUser()->getFirstName(); ?>" class="avatar-sm-container"><img src="/uploads/fotos/s_<?php echo $fanuncios['foto']?>" alt="<?php echo $fanuncios['foto'] ?>" class="img-rounded user-avatar-sm"/></a>
                    <?php endforeach; ?>

                    <?php foreach ($usr_info_com as $usr_info_comm): ?>
                        <?php if ($usr_info_comm['resulta'] == 0){ ?>
                            <a href="informacionUsuario/new" title="Cambiar foto de Perfil" class="avatar-sm-container"><img src="/images/1415703287_add-user.png" alt="" width="150" height="150" class="img-rounded user-avatar-sm"/></a>
                        <?php } ?>
                    <?php endforeach; ?>

                    <a href="" title="click"><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></a>

                    <?php foreach ($nro_donaciones as $nro_donacioness): ?>
                        <?php $tipomedalla = ''; ?>
                        <?php if($nro_donacioness['numdonaciones'] == 0) { ?>
                        <?php $tipomedalla = 'Ninguna'; ?>
                        <?php } ?>
                        <?php if($nro_donacioness['numdonaciones'] > 0 && $nro_donacioness['numdonaciones'] <= 5) { ?>
                        <?php $tipomedalla = 'Bronce'; ?>
                        <?php } ?>
                        <?php if($nro_donacioness['numdonaciones'] > 5 && $nro_donacioness['numdonaciones'] <= 20) { ?>
                        <?php $tipomedalla = 'Plata'; ?>
                        <?php } ?>
                        <?php if($nro_donacioness['numdonaciones'] > 20 && $nro_donacioness['numdonaciones'] <= 70) { ?>
                        <?php $tipomedalla = 'Oro'; ?>
                        <?php } ?>
                        <?php if($nro_donacioness['numdonaciones'] > 70) { ?>
                        <?php $tipomedalla = 'Corona'; ?>
                        <?php } ?>
                        <a href="<?php echo url_for('catalogoMedallasUsr/index')?>" title="Medalla obtenia"><span class="label label-primary"><?php echo $tipomedalla ?></span></a>
                    <?php endforeach; ?>
                    <?php foreach ($ult_val as $ult_vall): ?>
                        <a href="<?php echo url_for('administracionValoraciones/index') ?>" title="Ultima Valoración"><span class="label label-primary"><?php echo $ult_vall['valoracion_porcent']?>/100</span></a>
                    <?php endforeach; ?>

                    <?php foreach ($nc_usr_register as $nc_usr_registerr): ?>
                    <a href="" title="Nivel de confianza"><span class="label label-primary"><?php echo $nc_usr_registerr['valoracion_sum_total']?>%</span></a>
                    <?php endforeach; ?>
                </p>
            </div>
            <div class="col-md-8">
                <div class="text-right">
                    <p class="text-right">
                    <?php foreach ($nroVisitasTotal as $visitasTotal): ?>
                        <a href="<?php echo url_for('estadisticasAnuncios/index') ?>" class="btn btn-default tip" title="Visitas a tus a nuncios"><?php echo $visitasTotal['numvisitastotal']?> <i class="icon-eye-open"></i></a>
                    <?php endforeach; ?>

                    <?php foreach ($nroComentariosTotal as $comentTotal): ?>
                    <a href="<?php echo url_for('verComentarios/index')?>" class="btn btn-default tip" title="Comentarios realizados"><?php echo $comentTotal['numcomentariostotal']?> <i class="icon-comment"></i></a>
                    <?php endforeach; ?>

                    <?php foreach ($nro_donaciones as $nro_donacioness): ?>
                    <a href="<?php echo url_for('estadisticasDonaciones/index')?>" class="btn btn-default tip" title="Total de donaciones realizadas"><?php echo $nro_donacioness['numdonaciones']?> <i class="icon-heart"></i></a>
                    <?php endforeach; ?>

                    <?php foreach ($nro_trueques as $nro_truequess): ?>
                    <a href="<?php echo url_for('verTrueques/index')?>" class="btn btn-default tip" title="Intercambios exitosos"><?php echo $nro_truequess['resulttrueques']?> <i class="icon-resize-full"></i></a>
                    <?php endforeach; ?>
                    </p>
                </div>
            </div>
        </div>

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Bienvenidos</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">

          <div class="bs-docs-example">
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Buen trabajo!</strong> Esperamos q' tu estancia aqui sea excelente, enjoy.
            </div>
          </div>

    <div class="row-fluid show-grid">
    <div class="span4">
        <div class="pad_bot2">
            <center>
                        <h2><strong><center><?php echo $sf_user->getGuardUser()->getUsername(); ?></center></strong></h2>
                        <?php foreach ($primera_medalla as $primera_medallaa): ?>
                        
                            <a href="<?php echo url_for('catalogoMedallasUsr/index')?>"><img alt="<?php echo $primera_medallaa['nombre_medall']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $primera_medallaa['nombre_medall']?>" width="80" height="80" title="<?php echo $primera_medallaa['descripcion_medall']?>"/></a>
                        
                        <?php endforeach; ?><br/><br/>
            </center>
                 <div class="accordion" id="leftMenu">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                                <i class="icon-user"></i> Información del usuario
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <?php foreach ($usr_info_com as $usr_info_comm): ?>
                                        <?php if ($usr_info_comm['resulta'] == 0){ ?>
                                            <li>&raquo; <a href="<?php echo url_for('informacionUsuario/new')?>">Completar información del perfil</a></li>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($usr_info_com as $usr_info_comm): ?>
                                        <?php if ($usr_info_comm['resulta'] == 1){ ?>
                                            <li>&raquo; <a href="<?php echo url_for('informacionUsuario/edit?id_info_com_usu='.$fanuncios['id_info_com_usu'])?>">Editar Información del perfil</a></li>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                    <li>&raquo; <a href="<?php echo url_for('administracionMensajes/index')?>"><img src="/images/mensaje.png" alt="" width="15" height="15" class="left" />  Mensajes</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('administracionValoraciones/index')?>"><img src="/images/check.png" alt="" width="15" height="15" class="left" />  Valoraciónes</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('administracionIntereses/index')?>"><img src="/images/intereses.png" alt="" width="15" height="15" class="left" />  Intereses</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('fichaDonacionDet/index')?>"><img src="/images/lgo_donaciones.png" alt="" width="15" height="15" class="left" />  Donaciónes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                                <i class="icon-star-empty"></i> Anuncios
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <?php foreach ($usr_info_com as $usr_info_comm): ?>
                                        <?php if ($usr_info_comm['resulta'] == 0){ ?>
                                            <li>&raquo; <a href="<?php echo url_for('notificacionMensaje/NotifInfoCompUsuNuevoAnuncio')?>"><img src="/images/1376043331_Create.png" alt="" width="15" height="15" class="left" />  Crear nuevo anuncio</a></li>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                    <?php foreach ($usr_info_com as $usr_info_comm): ?>
                                        <?php if ($usr_info_comm['resulta'] == 1){ ?>
                                            <li>&raquo; <a href="<?php echo url_for('anuncios/new')?>"><img src="/images/1376043331_Create.png" alt="" width="15" height="15" class="left" />  Crear nuevo anuncio</a></li>
                                        <?php } ?>
                                    <?php endforeach; ?>
                                    <li>&raquo; <a href="<?php echo url_for('estadisticasAnuncios/index')?>"><img src="/images/icono_analytics.png" alt="" width="18" height="18" class="left" />  Ver estadisticas</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('estadoAnuncios/index')?>">Cambiar estado</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('verComentarios/index')?>">Ver comentarios</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('verTrueques/index')?>">Trueques realizados</a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
                                <i class="icon-check"></i> Donaciónes
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="<?php echo url_for('CasasBeneficencia/new')?>">Crear organización de beneficencia</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('institucionesBeneficencia/index')?>">Ver organizaciones de beneficencia</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('catalogoMedallasUsr/index')?>">Ver catalogo de medallas</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('estadisticasDonaciones/index')?>"><img src="/images/icono_analytics.png" alt="" width="18" height="18" class="left" />  Ver estadisticas</a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFive">
                                <i class="icon-check"></i> Valoraciones y Grupos
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="<?php echo url_for('administracionValoraciones/index')?>">Valoraciones</a></li>
                                    <li>&raquo; <a class='iframeCatalogoVal' href="<?php echo url_for('catalogoValoraciones/index')?>">Catálogo de calificación</a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-cog"></i> Servicios
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="#">Haz visible tu anuncio</a></li>
                                    <li>&raquo; <a href="#">Publicidad en camb!o fác¡l</a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
                </div>

                    </div>
    </div>
    <div class="span8">
        
    <table class="table table-striped table-bordered">
              <tr>
                  <td><center><strong>&bull; Mensajes &bull;</strong></center></td>
                  <td><center><strong>&bull; Valoraciónes &bull;</strong></center></td>
                  <td><center><strong>&bull; Intereses &bull;</strong></center></td>
                  <td><center><strong>&bull; Donaciónes &bull;</strong></center></td>
              </tr>
              <tr>
                  <td><center><a href="<?php echo url_for('administracionMensajes/index') ?>"><img src="/images/mensaje.png" alt="" width="50" height="50" title="Haz click"/></a>
                 <?php foreach ($MSJnuevos as $anunciosAC): ?>
                 <a href="<?php echo url_for('administracionMensajes/index') ?>" title="Mensajes nuevos"><span class="badge badge-info"><?php echo $anunciosAC['nummsj'] ?></span></a>
                 <?php endforeach; ?>
                      </center></td>
                  <td><center><a href="<?php echo url_for('administracionValoraciones/index') ?>"><img src="/images/check.png" alt="" width="50" height="50" class="left" /></a>
                 <?php foreach ($nroValoracionesTotal as $nroValoracionesTotall): ?>
                 <a href="<?php echo url_for('administracionValoraciones/index') ?>" title="Mensajes nuevos"><span class="badge badge-info"><?php echo $nroValoracionesTotall['numval'] ?></span></a>
                 <?php endforeach; ?>
                      </center></td>
                      <td><center><a href="<?php echo url_for('interesesUsuarios/index') ?>" title="Elegir intereses"><img src="/images/intereses.png" alt="" width="50" height="50" class="left" /></a></center></td>
                      <td><center>
                              <?php foreach ($nro_donaciones_usr as $nro_donaciones_usrr): ?>
                              <a href="<?php echo url_for('fichaDonacionDet/index') ?>" title="Ayudanos ayudar"><img src="/images/lgo_donaciones.png" alt="" width="45" height="45" class="left" /><span class="badge badge-info"><?php echo $nro_donaciones_usrr['valdonaciones'] ?></span></a>
                              <?php endforeach; ?>
                          </center></td>
              </tr>
      </table>

      
        <?php foreach ($usr_info_com as $usr_info_comm): ?>
            <?php if ($usr_info_comm['resulta'] == 0){ ?>
      <p align="right"><a href="<?php echo url_for('notificacionMensaje/NotifInfoCompUsuNuevoAnuncio')?>"><img src="/images/1376043331_Create.png" alt="" class="left marg_right1"  /> Crear nuevo anuncio</a></p>
            <?php } ?>
        <?php endforeach; ?>
      

      <?php foreach ($fanuncioss as $fanuncios): ?>
        <?php foreach ($usr_info_com as $usr_info_comm): ?>
            <?php if ($usr_info_comm['resulta'] == 1){ ?>
      <p align="right"><a href="<?php echo url_for('anuncios/new')?>"><img src="/images/1376043331_Create.png" alt="" class="left marg_right1"  /> Crear nuevo anuncio</a></p>
            <?php } ?>
        <?php endforeach; ?>
      <?php endforeach; ?>

      <strong>Estos son tus Anuncios &dArr;&dArr;&dArr;</strong>
      <br/><br/>

    <div class="menu">
    <div class="accordion">
    <div class="accordion-group">
    <div class="accordion-heading country">
    <img src="/images/1376042442_advertisment.png" alt="country flag" width="30" height="30" style="float:left; margin: 3px 10px 0 3px; text-align:center;"/>
    <a class="accordion-toggle" data-toggle="collapse" href="#country1">Ver mis Anuncios</a>
    </div>
    <div id="country1" class="accordion-body collapse">
    <div class="accordion-inner">
    <table class="table table-striped table-condensed">
              <thead>
                  <tr>
                      <th><center>Editar</center></th>
                      <th><center>Categoría</center></th>
                      <th><center>Título</center></th>
                      <th><center>Fecha</center></th>
                      <th><center>Estado</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php foreach ($anuncioss as $anuncios): ?>
                 <tr>
                    <td><center><a href="<?php echo url_for('anuncios/edit?id_anuncio='.$anuncios['id_anuncio']) ?>"><img src="/images/edit-20.png" alt="" class="left marg_right1"  /></a></center></td>
                    <td><center><?php echo $anuncios['nombre_cat']?></center></td>
                    <td><center><?php echo $anuncios['titulo']?></center></td>
                    <td><center><?php echo $anuncios['fecha_public']?></center></td>
                    <td><center><?php echo $anuncios['estado_anuncio']?></center></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>    

    <table class="table table-striped table-bordered">
        <?php foreach ($infoCBUsr as $infoCBUsrr): ?>
              <tr>
                  <td><center><img src="/uploads/fotos/s_<?php echo $infoCBUsrr['imagen_casa_benef']?>" alt="<?php echo $infoCBUsrr['imagen_casa_benef']?>" class="img-rounded user-avatar-sm" width="40" height="40"/></center></td>
                  <td><center><h5><?php echo $infoCBUsrr['nombre'] ?></h5></center></td>
                  <td><center><h5><?php echo $infoCBUsrr['nro_visitas_cb'] ?> Visitas</h5></center></td>
                  <td><center><a href="<?php echo url_for('CasasBeneficencia/edit?cod_casas_benef='.$infoCBUsrr['cod_casas_benef']) ?>"><img src="/images/edit-20.png" alt="" class="left marg_right1" title="Editar información" /></a></center></td>
                  <td><center><a href="<?php echo url_for('fichaDonacionCab/index?id_CB='.$infoCBUsrr['cod_casas_benef']) ?>"><img src="/images/1412070202_page_white_add.png" alt="" class="left marg_right1"  height="20" width="20" title="Crear ficha de donación"/></a></center></td>
              </tr>
        <?php endforeach; ?>
    </table>

      <p><div id="backtotop"><a href="#top" class="topOfPage">Ir a inicio de página</a></div></p>
    
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
