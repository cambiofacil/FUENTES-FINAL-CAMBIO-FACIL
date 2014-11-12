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
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"750px", height:"560px", transition:"fade", scrolling   : true});
});
</script>

<script>
$(document).ready(function(){
$(".iframe1").colorbox({iframe:true, fastIframe:false, width:"900px", height:"580px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe2").colorbox({iframe:true, fastIframe:false, width:"900px", height:"560px", transition:"fade", scrolling   : true});
});
</script>

<script>
$(document).ready(function(){
$(".iframe3").colorbox({iframe:true, fastIframe:false, width:"800px", height:"365px", transition:"fade", scrolling   : true});
});
</script>


<script>
$(document).ready(function(){
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"800px", height:"560px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframeGaleriaAnuncios").colorbox({iframe:true, fastIframe:false, width:"510px", height:"400px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe_denuncia_anuncios").colorbox({iframe:true, fastIframe:false, width:"710px", height:"445px", transition:"fade", scrolling   : true});
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

<?php endif ?>

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
         <div class="divi1"></div><p class="title-spc">Porque camb!ar es más f&aacute;cil que comprar</p><div class="divi1"></div>
     <div class="clear"></div>

<!--<center><img src="/images/aaa.png" alt=""/></center>-->
        <p align="right">
        <?php if ($sf_user->isAuthenticated()): ?>
        <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
        <?php endif ?>
        </p>

        <div class="well">
            <center><strong>ARTÍCULOS PUBLICADOS</strong></center>
        </div>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span4">
        <div class="pad_bot2">
          <?php if ($sf_user->isAuthenticated()): ?>
            <ol class="breadcrumb" style="margin-bottom: 5px;">
              <li class="active">+ Crear nuevo:</li>
              <li><a href="<?php echo url_for('anuncios/new')?>">Anuncio </a>/</li>
              <li><a href="<?php echo url_for('institucionesBeneficencia/index')?>">Donación</a></li>
            </ol>
          <?php endif ?>
            <h2>&raquo; <small>CATEGORIAS</small></h2>
                <h5>&raquo; <a href="<?php echo url_for('buscarArticulos/index')?>">TODAS</a></h5>
                <?php foreach ($infocatt as $infocat): ?>
                <p class="more">
                <h5>&raquo; <a href="<?php echo url_for('anunciosFiltro/index?id_cat='.$infocat['id_categoria'])?>"><?php echo $infocat['nombre_cat'] ?></a></h5>
                </p>
                <?php endforeach; ?>
        </div>
      </div>
      <div class="span8">

          <div style='position:relative;display:none'>
              <input type="tex" id="id_cat_fil" name="id_cat_fil" value="<?php echo $_GET['id_cat']?>"/>
              <input type="tex" id="estado_fil" name="estado_fil" value="<?php echo $_GET['estado']?>"/>
              <input type="tex" id="ciudad_fil" name="ciudad_fil" value="<?php echo $_GET['ciudad']?>"/>
         </div>

         <?php foreach ($pager as $pagerr): ?>
    <table class="table table-striped table-bordered">
            <tr>
                <td colspan="4"><img src="/images/1376042442_advertisment.png" alt="" class="left marg_right1" height="30" width="30"/>  <strong><a href="<?php echo url_for('verPerfil/index?username='.$pagerr['usernamee'].'&id='.$pagerr['id_usr'].'&idanuncio='.$pagerr['id_anun'])?>"><font color="black"><?php echo $pagerr['titulo_anun']?></font></a></strong> (Cod # <?php echo $pagerr['id_anun']?>)<div class="contcinta">

                  <?php if($pagerr['est_anuncio']=="CAMBIADO"){ ?>
                    <div class="cintaver"></div>
                  <?php } ?>

                  <?php if ($sf_user->isAuthenticated()): ?>
                  <?php $var=$sf_user->getUsername(); ?>
                  <?php if($pagerr['usernamee']==$var && $pagerr['est_anuncio']!="CAMBIADO"){ ?>
                    <div class="cambio_usr">
                    <ul class="nav navbar-nav">
                        <li class="dropdown ">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-star-empty"></i><font color="orange">Ya lo cambiaste?</font><b class="caret"></b></a>
                           <ul class="dropdown-menu">
                               <li class="">
                                   <a class='iframeEstAnun' href="<?php echo url_for('actualizaEstado/index?id_anuncio='.$pagerr['id_anun']) ?>"><i class="icon-refresh"></i> Actualiza estado anuncio</a>
                               </li>
                               <li class="">
                                   <a class='iframe1' href="<?php echo url_for('valoracionUsuario/index?id_anuncio='.$pagerr['id_anun'].'&username='.$pagerr['usernamee']) ?>"><i class="icon-check"></i> Valora al Truequeador</a>
                               </li>
                           </ul>
                         </li>
                    </ul>
                    </div>
                  <?php } ?>
                  <?php endif ?>

                </td>
                <td>
                    <ul class="nav navbar-nav">
                        <li class="dropdown ">
                           <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> <b class="caret"></b></a>
                           <ul class="dropdown-menu">
                               <li class="">
                                   <a class='iframe' href="<?php echo url_for('comentarios/index?username='.$pagerr['usernamee'].'&id='.$pagerr['id_usr'].'&idanuncio='.$pagerr['id_anun'])?>"><i class="icon-comment"></i> Comentar</a>
                               </li>
                               <li class="">
                                   <a class='iframe_denuncia_anuncios' href="<?php echo url_for('administracionIncidentes/index?idanuncio='.$pagerr['id_anun'])?>"><i class="icon-volume-up"></i> Denunciar</a>
                               </li>
                           </ul>
                         </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><strong>Publicado por:</strong></td>
                <td><?php echo $pagerr['fname']?> <?php echo $pagerr['lname']?> (<?php echo $pagerr['usernamee']?>)</td>
                <td rowspan="3">
                    <center><a href="<?php echo url_for('verPerfil/index?username='.$pagerr['usernamee'].'&id='.$pagerr['id_usr'].'&idanuncio='.$pagerr['id_anun'].'&idusuario='.$pagerr['id_usr'])?>">Ver Perfil<br/><img src="/images/1376042332_edit-group.png" alt="" class="left marg_right1" height="40" width="40"/></a></center>
                </td>
                <td rowspan="3" style="vertical-align:middle; text-align:center">
                    <center>
                    <a class='lightbox-go' href="/uploads/fotos/<?php echo $pagerr['img_p']?>" title="<?php echo $pagerr['titulo_anun']?>">
                    <img alt="<?php echo $pagerr['titulo_anun']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $pagerr['img_p']?>" width="80" height="80" />
                    </a>
                    </center>
                </td>
            </tr>
            <tr>
                <td><strong>Categoría:</strong></td>
                <td><?php echo $pagerr['categoria']?></td>
            </tr>
            <tr>
                <td><strong>Ubicación:</strong></td>
                <td><?php echo $pagerr['provin_usr']?> - <?php echo $pagerr['ciud_usr']?></td>
            </tr>
        </table>
        <p>
        <i class="icon-calendar"></i> <?php echo $pagerr['f_public']?>
        | <i class="icon-comment"></i> <a href="<?php echo url_for('leerComentarios/index?id='.$pagerr['id_anun'])?>"><?php echo $pagerr['n_coment']?> Comentarios</a>

        <?php $estado_fisico_art = 'NO INDICADO';?>

        <?php if($pagerr['estado_anun'] == 1){
            $estado_fisico_art = 'NUEVO';
        }elseif($pagerr['estado_anun'] == 2){
            $estado_fisico_art = 'SEMI NUEVO';
        }elseif($pagerr['estado_anun'] == 3){
            $estado_fisico_art = 'USADO';
        }?>

        | <i class="icon-wrench"></i> <a href="<?php echo url_for('verPerfil/index?username='.$pagerr['usernamee'].'&id='.$pagerr['id_usr'].'&idanuncio='.$pagerr['id_anun'])?>"><span class="label label-info"><?php echo $estado_fisico_art ?></span></a>
        | <i class="icon-hand-right"></i> <a class='iframe3' href="<?php echo url_for('notificacionMensajeAnuncios/InfoNCUsuario')?>"><?php echo $pagerr['valor_nc_usr']?> % NC</a>
        | <i class="icon-eye-open"></i> <span class="label label-info"><?php echo $pagerr['nro_visi']?> Visitas</span>
        </p>
        <br/><br/>
    <?php endforeach; ?>
      </div>
   </div>
</section>

        <!--
    <div class="pagination pagination-centered">
    <ul>
    <?php if ($pager->haveToPaginate()): ?>

    <?php echo link_to('<img src="/images/1409971152_Fast-forward_1.png" alt="" />', 'anunciosFiltro/index?page='.$pager->getFirstPage()) ?>
    <?php echo link_to('<img src="/images/1409971241_Go_2.png" alt="" />', 'anunciosFiltro/index?page='.$pager->getPreviousPage()) ?>

    <?php $links = $pager->getLinks();?>
    <?php endif ?>

    <?php foreach ($links as $page): ?>
    <span class="label"><?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'anunciosFiltro/index?page='.$page) ?></span>
    <?php endforeach; ?>

    <?php echo link_to('<img src="/images/1409971241_Go.png" alt="" />', 'anunciosFiltro/index?page='.$pager->getNextPage()) ?>
    <?php echo link_to('<img src="/images/1409971152_Fast-forward.png" alt="" />', 'anunciosFiltro/index?page='.$pager->getLastPage()) ?>
    </ul>
    </div>

    <div class='pagination_desc'>
    <strong>Total anuncios:</strong> <?php echo $pager->getNbResults() ?>
    <?php if ($pager->haveToPaginate()): ?>
    <strong>Pagina </strong><?php echo $pager->getPage() ?> de <?php echo $pager->getLastPage() ?>
    <?php endif ?>
    </div>
        -->

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