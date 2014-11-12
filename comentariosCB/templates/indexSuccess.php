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
<link href="http://static2.senpuu.net/assets/layouts/portal/application-6a80a6a344be15af56087f94aa6129c1.css" media="screen" rel="stylesheet" />
<link href="http://static0.senpuu.net/assets/layouts/portal/main-2a5910dc32a4ba2ef2d80071822a38f4.css" media="screen" rel="stylesheet" />
<script src="http://www.senpuu.net:9292/stream.js"></script>
<script src="http://static0.senpuu.net/assets/layouts/portal/application-b62c90be6da9a3bb086010e31db8ae83.js"></script>
<script src="http://static3.senpuu.net/assets/layouts/portal/main-998eca37f51dad39dc09fd6acb2dad3e.js"></script>

</head>
<body>

    <!-- Header Start -->
<div id="header" class="header">
<div class="wrapper" >
     <!-- Logo Section -->
     <div class="logo">
     <a href="#"><img src="/images/logo.png" alt="" /></a>
     </div>
</div><!-- Wrapper End -->
</div><!-- Header End -->

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <?php if ($sf_user->isAuthenticated()): ?>
     <font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font>
     <?php endif ?>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span8">
          <div class="span10">
                <script language="JavaScript" type="text/javascript">
                function contador (campo, cuentacampo, limite) {
                if (campo.value.length > limite) campo.value = campo.value.substring(0, limite);
                else cuentacampo.value = limite - campo.value.length;
                }
                </script>

        <form name="form1" id="planilla1" action="<?php echo url_for('comentariosCB/index')?>" method="post">

            <div style='position:relative;display:none'>
                <input type="tex" id="id_cb_post" name="id_cb_post" value="<?php echo $_GET['id_cb_coment']?>"/>
            </div>

            <table class="table table-striped table-bordered">
                <tr>
                    <td><strong><center>Escribe tu comentario</center></strong></td>
                </tr>
                <tr>
                    <td><center><textarea name="mensaje" cols="48" rows="4" onKeyDown="contador(this.form.mensaje,this.form.remLen,200);" onKeyUp="contador(this.form.mensaje,this.form.remLen,200);" name="mensaje" id="mensaje" style="background-color: transparent;border: 1px solid #000000;scrollbar-arrow-color: #000066;scrollbar-base-color: #000033;scrollbar-dark-shadow-color: #336699;scrollbar-track-color: #666633;scrollbar-face-color: #cc9933;scrollbar-shadow-color: #DDDDDD;scrollbar-highlight-color: #CCCCCC; " placeholder="Escribe el texto aquí..."></textarea> <br/>Nro. de caracteres restantes: <input readonly="readonly" maxlength="3" size="3" name="remLen" value="200" type="text" /></center></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><br/><center><input type="submit" value="Guardar comentario" class="btn btn-success"/></center><br/></td>
                </tr>
            </table>
       </form>
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
