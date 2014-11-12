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
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"950px", height:"560px", transition:"fade", scrolling   : true});
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
     <div class="divi1"></div><p class="title-spc">Ficha de Donaciónes</p><div class="divi1"></div>
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
            <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab">Lista de fichas de Donación</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Creadas</a></li>
                <li><a href="#faq-cat-3" data-toggle="tab">Estadisticas</a></li>
                <li><a href="#faq-cat-4" data-toggle="tab">otro</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                                <table class="table table-striped table-condensed">
              <thead>
                  <tr>
                      <th><center>Código Donación</center></th>
                      <th><center>Nombre</center></th>
                      <th><center>Dirección</center></th>
                      <th><center>Teléfonos</center></th>
                      <th><center>Pagina web</center></th>
                      <th><center>Fecha Ingreso</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php foreach ($info_donaciones_usr as $info_donaciones_usrr): ?>
                 <tr>
                    <td><center><a href="<?php echo url_for('fichaDonacionDetGuarda/index?id_fich_cb='.$info_donaciones_usrr['id_fich_cab']) ?>" title="click para ingresar detalle de ficha de donación"><?php echo $info_donaciones_usrr['id_fich_cab']?></a></center></td>
                    <td><center><?php echo $info_donaciones_usrr['nombre']?></center></td>
                    <td><center><?php echo $info_donaciones_usrr['nombre_cant']?></center></td>
                    <td><center><?php echo $info_donaciones_usrr['telefono1']?> / <?php echo $info_donaciones_usrr['telefono2']?></center></td>
                    <td><center><?php echo $info_donaciones_usrr['pagina_web_cb']?></center></td>
                    <td><center><?php echo $info_donaciones_usrr['fecha_ingreso_cab']?></center></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
    </table>
                                <br/><br/><br/><br/><br/><br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

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