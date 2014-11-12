<!DOCTYPE html>
<html lang='pl'>
<head>
<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Estado Anuncios')?>
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
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"800px", height:"560px", transition:"fade", scrolling   : false});
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
     <div class="divi1"></div><p class="title-spc">Administración de Mensajes</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

     <section id="fluidGridSystem">
  <div class="row-fluid show-grid">

            <h2>Estado de tus anuncios</h2>
            <p align="justify">
                <em>
            Actualiza el estado de tus anuncios de esta forma las personas interesadas en tus artículos podrán conocer si aún esta disponible para realizar un trueque.
            <br/><br/><strong>Activo:</strong> esto indica que tu artículo está disponible para un trueque.
            <br/><br/><strong>Cambiado:</strong> esto indica que ya realizaste un intercambio y no lo tienes a disposición de un trueque, tu anuncio se mostrara con una bandera roja que indica que tu artículo ya fue cambiado.
            <br/><br/><strong>Inactivo:</strong> esto indica que ya no deseas realizar un intercambio con este artículo o talvez lo diste en donación, tu anuncio no aparecerá en la sección de anuncios
                </em>
            </p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!o fác¡l</cite></small>
            </blockquote>

	<table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th><center>Título</center></th>
                      <th><center>Estado</center></th>
                      <th><center>Cambiar estado</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php foreach ($anuncioss as $anuncios): ?>
                 <tr>
                    <td><center><?php echo $anuncios['titulo']?></center></td>
                    <td><center>
                            <?php if($anuncios['estado_anuncio'] == 'ACTIVO'){ ?>
                                <font color="wheit">&bull;</font> <?php echo $anuncios['estado_anuncio']?>
                            <?php } ?>

                            <?php if($anuncios['estado_anuncio'] == 'CAMBIADO'){ ?>
                                <font color="orange">&bull;</font> <?php echo $anuncios['estado_anuncio']?>
                            <?php } ?>

                            <?php if($anuncios['estado_anuncio'] == 'INACTIVO'){ ?>
                                <font color="red">&bull;</font> <?php echo $anuncios['estado_anuncio']?>
                            <?php } ?>

                        </center></td>
                    <td><center><a class='iframeEstAnun' href="<?php echo url_for('actualizaEstadoMenuCuenta/index?id_anuncio='.$anuncios['id_anuncio']) ?>">
                    <span class="label label-info">Cambiar el estado</span>
                    </a></center></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
        </table>            

   </div>
</section>

     </div>
</div>
</div><!-- About End -->

</div><!-- Content Container End  -->



<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

</body>
</html>

