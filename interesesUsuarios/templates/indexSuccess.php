<!DOCTYPE HTML>

<head>
<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Intereses')?>
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
     <div class="divi1"></div><p class="title-spc">Intereses</p><div class="divi1"></div>
     <div class="clear"></div>

     <?php if ($sf_user->isAuthenticated()): ?>
     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
              <h2>Selecciona tus Intereses</h2>

      <form name="form1" id="planilla1" action="<?php echo url_for('interesesUsuarios/index')?>" method="post">
	<table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th><center>Seleccionar</center></th>
                      <th><center>Categoría</center></th>
                      <th><center>Descripción</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php $i=1;?>
                 <?php foreach ($infocatt as $infocat): ?>
                 <tr>
                     <td><center><input type="checkbox" name="intereses<?php echo $i ?>" id="intereses" value="<?php echo $infocat->getIdCategoria() ?>"/></center></td>
                    <td><?php echo $infocat->getNombreCat() ?></td>
                    <td><?php echo $infocat->getDescripcionCat() ?></td>
                 </tr>
                 <?php $i=$i+1;?>
                <?php endforeach; ?>
            </tbody>
        </table>
            <center><input type="submit" value="Guardar Intereses" class="btn btn-success"/></center>
        </form>

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

<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

<!-- Register Form End -->

</body>
</html>
