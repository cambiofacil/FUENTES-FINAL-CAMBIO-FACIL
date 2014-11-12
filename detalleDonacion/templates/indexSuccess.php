<!DOCTYPE html>
<html lang='pl'>
<head>
<!-- Page Title -->
<?php slot('title') ?>
<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?>
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

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!--<script type="text/javascript" src="js/highcharts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/highcharts/highcharts.js"></script>
<script type="text/javascript" src="js/highcharts/exporting.js"></script>-->

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
     <div class="divi1"></div><p class="title-spc">Estad&iacute;sticas de tus Donaciones</p><div class="divi1"></div>
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
                <li class="active"><a href="#faq-cat-1" data-toggle="tab"># de Donaciones Realizadas</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                                <table class="table table-striped table-bordered">
                                          <tr>
                                              <td><center><strong>Nro</strong></center></td>
                                              <td><center><strong><i class="icon-upload"></i> Cantidad</strong></center></td>
                                              <td><center><strong><i class="icon-shopping-cart"></i> Artículo</strong></center></td>
                                              <td><center><strong><i class="icon-wrench"></i> Estado</strong></center></td>
                                              <td><center><strong><i class="icon-calendar"></i> Fecha</strong></center></td>
                                          </tr>
                                          <?php $cont=1; ?>
                                          <?php foreach ($donacion_descrip as $donacion_descripp): ?>
                                          <tr>
                                              <td><center><?php echo $cont++?></center></td>
                                              <td><center><?php echo $donacion_descripp['cantidad_atic_dona']?></center></td>
                                              <td><?php echo $donacion_descripp['descripcion_donac']?></td>
                                              <td><center><?php echo $donacion_descripp['estado_fisico_donac']?></center></td>
                                              <td><center><?php echo $donacion_descripp['fecha_fich_det']?></center></td>
                                          </tr>
                                          <?php endforeach; ?>
                                  </table>

                                <br/><br/><br/><br/>

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