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
</head>

<body>
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/menu_login.php"); ?>

<!-- Content Container  -->
<div class="bg-container">
<br/>
<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Catalogo de Medallas</p><div class="divi1"></div>
     <div class="clear"></div>

     <?php if ($sf_user->isAuthenticated()): ?>
     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      
        <h1>Lista de medallas</h1>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th><center>Id</center></th>
      <th><center>Nombre medalla</center></th>
      <th><center>Descripcion medalla</center></th>
      <th><center>Estado</center></th>
      <th><center>Cant donaciones</center></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($apcatalogomedallass as $apcatalogomedallas): ?>
    <tr>
      <td><a href="<?php echo url_for('catalogoMedallas/edit?id_catalogo_medall='.$apcatalogomedallas->getIdCatalogoMedall()) ?>"><?php echo $apcatalogomedallas->getIdCatalogoMedall() ?></a></td>
      <td><?php echo $apcatalogomedallas->getNombreMedall() ?></td>
      <td><?php echo $apcatalogomedallas->getDescripcionMedall() ?></td>
      <td><?php echo $apcatalogomedallas->getEstadoMedall() ?></td>
      <td><?php echo $apcatalogomedallas->getCantDonaciones() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('catalogoMedallas/new') ?>">Nuevo</a>

   </div>
</section>

<?php endif ?>

     <div class="divi2"></div>
     </div>
</div>
</div><!-- About End -->

<!-- Clear -->
<div class="clear"></div>

</div><!-- Content Container End  -->


<div class='container' id='news'>


</div>

<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

</body>
</html>
