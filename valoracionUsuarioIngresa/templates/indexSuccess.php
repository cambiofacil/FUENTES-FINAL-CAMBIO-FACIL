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

<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,300);
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

.range {
    display: table;
    position: relative;
    height: 25px;
    margin-top: 20px;
    background-color: rgb(245, 245, 245);
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.range input[type="range"] {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    display: table-cell;
    width: 100%;
    background-color: transparent;
    height: 25px;
    cursor: pointer;
}
.range input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range input[type="range"]::-moz-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range output {
    display: table-cell;
    padding: 3px 5px 2px;
    min-width: 40px;
    color: rgb(255, 255, 255);
    background-color: rgb(153, 153, 153);
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;

    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}
.range input[type="range"] {
    outline: none;
}

.range.range-primary input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"]::-moz-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary output {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"] {
    outline-color: rgb(66, 139, 202);
}

.range.range-success input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"]::-moz-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success output {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"] {
    outline-color: rgb(92, 184, 92);
}

.range.range-info input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"]::-moz-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info output {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"] {
    outline-color: rgb(91, 192, 222);
}

.range.range-warning input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"]::-moz-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning output {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"] {
    outline-color: rgb(240, 173, 78);
}

.range.range-danger input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger input[type="range"]::-moz-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger output {
    background-color: rgb(217, 83, 79);
}
.range.range-danger input[type="range"] {
    outline-color: rgb(217, 83, 79);
}

</style>

<script>
$(document).ready(function(){
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"450px", height:"560px", transition:"fade", scrolling   : false});
});
</script>
</head>

<body>


<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">


<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span8">
          <div class="span10">
              <div class="container">
              <div class="row">
                  
              <?php foreach ($info_usuario_get as $info_usuario_gett): ?>
                  <table class="table table-striped table-bordered">
                  <tr>
                      <td colspan="2"><center><strong>Datos del Truequedor</strong></center></td>
                  </tr>
                  <tr>
                      <td>
              <table class="table">
                <thead>
                    <tr>
                        <th><center>Codigo</center></th>
                        <th><center>Nombre</center></th>
                        <th><center>Usuario</center></th>
                        <th><center>Email</center></th>
                        <th><center>Ciudad</center></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001-<?php echo $info_usuario_gett['id']?></td>
                        <td><?php echo $info_usuario_gett['first_name']?>_<?php echo $info_usuario_gett['last_name']?></td>
                        <td><center><?php echo $info_usuario_gett['username']?></center></td>
                        <td><?php echo $info_usuario_gett['email_address']?></td>
                        <td><center><?php echo $info_usuario_gett['nombre_cant']?></center></td>
                    </tr>
                </tbody>
              </table>
                  </td>
                  </tr>
                  </table>

           <?php if($info_usuario_gett['id']!=$sf_user->getGuardUser()->getId()){ ?>

           <form name="form2" id="planilla2" action="<?php echo url_for('valoracionUsuarioIngresa/index')?>" method="post">

            <div style='position:relative;display:none'>
            <input type="tex" id="usr_name_dat" name="usr_name_dat" value="<?php echo $_GET['usernamedat']?>"/>
            <input type="tex" id="id_usr_val" name="id_usr_val" value="<?php echo $_GET['id_usr_valorado']?>"/>
            <input type="tex" id="id_anuncio_val" name="id_anuncio_val" value="<?php echo $_GET['id_anuncio_para_val']?>"/>
            <?php foreach ($info_usuario_nc_cab as $info_usuario_nc_cabb): ?>
            <input type="tex" id="id_nc_val" name="id_nc_val" value="<?php echo $info_usuario_nc_cabb['id_ap_nc_cab']?>"/>
            <input type="tex" id="valor_actual_nc" name="valor_actual_nc" value="<?php echo $info_usuario_nc_cabb['valoracion_sum_total']?>"/>
            <?php endforeach; ?>
            </div>
            <script language="JavaScript" type="text/javascript">
            function contador (campo, cuentacampo, limite) {
            if (campo.value.length > limite) campo.value = campo.value.substring(0, limite);
            else cuentacampo.value = limite - campo.value.length;
            }
            </script>

              <table class="table table-striped table-bordered">
                  <tr>
                      <td colspan="5">
                          <center><strong>Valoraci&oacute;n /100</strong></center>
                      </td>
                      <td rowspan="2"><center>Comentario:<br/>
                              <textarea name="mensaje" cols="48" rows="4" onKeyDown="contador(this.form.mensaje,this.form.remLen,150);" onKeyUp="contador(this.form.mensaje,this.form.remLen,150);" name="mensaje" id="mensaje" style="background-color: transparent;border: 1px solid #000000;scrollbar-arrow-color: #000066;scrollbar-base-color: #000033;scrollbar-dark-shadow-color: #336699;scrollbar-track-color: #666633;scrollbar-face-color: #cc9933;scrollbar-shadow-color: #DDDDDD;scrollbar-highlight-color: #CCCCCC; " placeholder="Responder aquí..."></textarea> <br/>Nro. de caracteres restantes: <br/><input readonly="readonly" maxlength="3" size="3" name="remLen" value="150" type="text" style="text-align:center" /></center>
                      </td>
                  </tr>
                  <tr>
                      <td><br/><br/><center><img src="/images/0.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val1" value="0"> 0</center></td>
                      <td><br/><br/><center><img src="/images/75.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val2" value="25"> 25</center></td>
                      <td><br/><br/><center><img src="/images/25.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val3" value="50"> 50</center></td>
                      <td><br/><br/><center><img src="/images/50.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val4" value="75"> 75</center></td>
                      <td><br/><br/><center><img src="/images/100.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val5" value="100" checked="true"> 100</center></td>
                  </tr>
                  <tr>
                      <td colspan="6"><br/><center><input type="submit" value="Guardar Valoración" class="btn btn-success"/></center></td>
                  </tr>
              </table>
           </form>

              <table>
                  <tr>
                      <td>
                          <font size="0.5"><p align="justify"><strong>NOTA:</strong> Tu valoración se mostrará en el perfil del usuario valorado, pero no la verás aparecer inmediatamente, antes será revisada y verificada por el usuario valorado y si es hallada inapropiada, ofensiva o de mala fe será descartada.
                            Sólo se admite una valoración por usuario, de modo que si posteriormente vuelves a valorar al mismo usuario únicamente se tendrá en cuenta la última de tus valoraciones.</p>
                          </font>
                      </td>
                  </tr>
              </table>
            <?php } ?>

            <?php if($info_usuario_gett['id']==$sf_user->getGuardUser()->getId()){ ?>
              <table>
                  <tr>
                      <td>
                          <font size="2"><p align="justify"><strong>NOTA:</strong> La valoración de usuarios no es permitida para el mismo usuario</p>
                          </font>
                      </td>
                  </tr>
              </table>
            <?php } ?>
                  
           <?php endforeach; ?>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
          </div>
      </div>
               </div>
                              </div>
   </div>
</section>


</div>
</div><!-- About End -->

<!-- Clear -->


</div><!-- Content Container End  -->


<br/><br/><br/>
<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

</body>
</html>



