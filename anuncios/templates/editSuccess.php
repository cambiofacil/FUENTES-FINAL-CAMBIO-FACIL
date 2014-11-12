<!DOCTYPE HTML>

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
     <div class="divi1"></div><p class="title-spc">Edici&oacute;n de anuncio</p><div class="divi1"></div>
     <div class="clear"></div>

     <?php if ($sf_user->isAuthenticated()): ?>
     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>     

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span4">
        <div class="pad_bot2">
            <blockquote>
                <p>&bull; <strong>Buen trabajo</strong> </p>
            </blockquote>
            <p><em>Vas muy bien, ahora lo q' tienes q' hacer es completar la información del formulario y presionar el boton de guardar anuncio</em></p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!o fác¡l</cite></small>
            </blockquote>
            <br/><br/>
            <blockquote>
                <p>&bull; <strong>Tus Anuncios</strong> </p>
            </blockquote>

            <table class="table table-striped table-condensed">
              <thead>
                  <tr>
                      <th><center>Título</center></th>
                      <th><center>Imágen</center></th>
                      <th><center>Fecha</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php foreach ($anuncioss as $anuncios): ?>
                 <tr>
                    <td><center><a href="<?php echo url_for('anuncios/edit?id_anuncio='.$anuncios['id_anuncio']) ?>"><?php echo $anuncios['titulo']?></a></center></td>
                    <td><center><img alt="<?php echo $anuncios['titulo']?>" class="img-polaroid" src="/uploads/fotos/<?php echo $anuncios['imagen_p']?>" width="50" height="50" /></center></td>
                    <td><center><?php echo $anuncios['fecha_public']?> <span class="label label-info"><?php echo $anuncios['estado_anuncio']?></span></center></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
        </table>
        </div>
      </div>
      <div class="span8">
          <div class="span10">
            <h2>Completa el formulario</h2>
            <?php include_partial('form', array('form' => $form)) ?>
          </div>
      </div>
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


<!-- Video PopUp -->
<div class="wrap" id="overlay_form">

     <!-- Video Iframe -->
     <iframe src="http://player.vimeo.com/video/7449107"  width="800" height="450"></iframe>
     <a  id="close2" ></a>
</div>
<div id="popi-bg"></div>
<!-- Video PopUp End -->

<!-- Register Form -->
<div class="wrap2" id="overlay_form2">
<a href="#" id="close3" ></a>
<h1>Registrate Ahora </h1>
<div class="divider2"> </div>
<form class="form-contact2"   method="post">
<table>

<tr>
<td><input type="text" id="name2" placeholder="Your Name" name="name" /></td>
</tr>

<tr>
<td><input type="text" id="email2" placeholder="Your Email" name="email" /></td>
</tr>

<tr>
<td><input type="text" id="phone2" placeholder="Your Phone" name="email" /></td>
</tr>

<tr>
<td><input type="text" id="pass2" placeholder="Your Password" name="email" /></td>
</tr>

<tr>
<td><input type="submit" class="submit2" value="Register"   /></td>
</tr>
</table>
</form>
</div>
<div id="popi-bg2"></div>
<!-- Register Form End -->

</body>
</html>
