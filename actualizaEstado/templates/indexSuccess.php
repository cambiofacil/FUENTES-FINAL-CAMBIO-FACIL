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

<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/style7.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

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

              <div class="title">
                 <div class="divi1"></div><p class="title-spc">Cambiar estado del anuncio</p><div class="divi1"></div>
                 <div class="clear"></div>
             </div>

        <form name="form1" id="planilla1" action="<?php echo url_for('actualizaEstado/index')?>" method="post">

            <div style='position:relative;display:none'>
                <input type="tex" id="id_anuncio" name="id_anuncio" value="<?php echo $_GET['idanuncio']?>"/>
            </div>            

            <br/>

            <?php foreach ($datos_anuncio as $datos_anuncioo): ?>
            <table class="table table-striped table-bordered">
                <tr>
                    <td colspan="3"><h2><small><center><i class="icon-check"></i> <?php echo $datos_anuncioo['titulo']?></center></small></h2></td>
                </tr>
                <tr>                      
                    <td><center><strong><i class="icon-th"></i> Cod # <br/></strong><?php echo $datos_anuncioo['id_anuncio']?></center></td>
                    
                    <?php $estado_fisico_art = 'NO INDICADO';?>

                    <?php if($datos_anuncioo['estado'] == 1){
                        $estado_fisico_art = 'NUEVO';
                    }elseif($datos_anuncioo['estado'] == 2){
                        $estado_fisico_art = 'SEMI NUEVO';
                    }elseif($datos_anuncioo['estado'] == 3){
                        $estado_fisico_art = 'USADO';
                    }?>
                    
                    <td><center><strong><i class="icon-edit"></i> Estado Físico <br/></strong><?php echo $estado_fisico_art?></center></td>
                    <td><center><strong><i class="icon-calendar"></i> Fecha Public <br/></strong><?php echo $datos_anuncioo['fecha_public']?></center></td>
                </tr>
                <tr>
                    <td colspan="3"><center>Estado actual: <strong><?php echo $datos_anuncioo['estado_anuncio']?></strong></center></td>
                </tr>
            </table>
            <table class="table table-striped table-bordered">
                <tr>
                    <td><strong><center><i class="icon-refresh"></i> Nuevo estado: <select class="selectpicker" disabled="true">
                                <option>CAMBIADO</option>                                
                                </select>
                                </center>
                        </strong>
                    </td>
                </tr>
            </table>
            <?php endforeach; ?>

            <div style='position:relative;display:none'>
             <?php foreach ($var_id_anuncio as $var_id_anuncioo): ?>
                <input type="tex" id="id_anuncio1" name="id_anuncio1" value="<?php echo $var_id_anuncioo['id_anuncio']?>"/>
             <?php endforeach; ?>
            </div>

            <center><input type="submit" value="Guardar Estado" class="btn btn-success"/></center>
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

</body>
</html>
