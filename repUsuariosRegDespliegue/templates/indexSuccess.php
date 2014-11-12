<!DOCTYPE HTML>

<head>

<!-- Define Charset -->
<meta charset="utf-8"/>

<!-- Responsive Metatag -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<!-- Page Title -->
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
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"900px", height:"516px", transition:"fade", scrolling   : true});
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

</head>
<body>

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

<!--<center><img src="/images/aaa.png" alt=""/></center>-->
        <p align="right">
        <?php if ($sf_user->isAuthenticated()): ?>
        <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
        <?php endif ?>
        </p>

        <img src="/images/logo_negro.png" alt=""/><br/><br/>

        <div class="well">
            <center><strong><h1>Reporte de Usuarios Registrados</h1></strong></center>
        </div>

        <input type="button" value="Exportar a PDF" onclick="javascript:window.print()" class="btn btn-success" />

        <table class="table table-striped table-bordered" border="1">
        <tr>
            <td><center><strong>Nro</strong></center></td>
            <td><center><strong>Foto</strong></center></td>
            <td><center><strong>Apellidos</strong></center></td>
            <td><center><strong>Nombres</strong></center></td>
            <td><center><strong>Telefonos de Contacto</strong></center></td>
            <td><center><strong>Nacionalidad</strong></center></td>
            <td><center><strong>F. Nacimiento</strong></center></td>
            <td><center><strong>Provincia</strong></center></td>
            <td><center><strong>Ciudad</strong></center></td>
            <td><center><strong>Ocupación</strong></center></td>
            <td><center><strong>Correo</strong></center></td>
            <td><center><strong>F. Registro</strong></center></td>
            <td><center><strong>F. Ultimo Imgreso</strong></center></td>
        </tr>
        <?php $var = 1;?>
        <?php foreach ($info_usr_registrados as $info_usr_registradoss): ?>
        <tr>
            <td><center><?php echo $var++; ?></center></td>
            <td style="vertical-align:middle; text-align:center"><center><img alt="" class="img-polaroid" src="/uploads/fotos/<?php echo $info_usr_registradoss['foto']?>" width="50" height="50" /></center></td>
            <td><center><?php echo $info_usr_registradoss['last_name']?></center></td>
            <td><center><?php echo $info_usr_registradoss['first_name']?></center></td>
            <td><center><?php echo $info_usr_registradoss['nro_celular']?><br/>
                        <?php echo $info_usr_registradoss['nro_convencional']?><br/>
                        <?php echo $info_usr_registradoss['nro_oficina']?>
                </center></td>
            <td><center><?php echo $info_usr_registradoss['nacionalidad']?></center></td>
            <td><center><?php echo $info_usr_registradoss['fecha_nac']?></center></td>
            <td><center><?php echo $info_usr_registradoss['nombre_prov']?></center></td>
            <td><center><?php echo $info_usr_registradoss['nombre_cant']?></center></td>
            <td><center><?php echo $info_usr_registradoss['ocupacion']?></center></td>
            <td><center><?php echo $info_usr_registradoss['email_address']?></center></td>
            <td><center><?php echo $info_usr_registradoss['created_at']?></center></td>
            <td><center><?php echo $info_usr_registradoss['last_login']?></center></td>
        </tr>
        <?php endforeach; ?>
        </table>

        <center><img src="/images/logo_negro.png" alt="" /></center>

        <div class="divi2"></div>
     </div>
</div>
</div><!-- About End -->

<!-- Clear -->
<div class="clear"></div>

</div><!-- Content Container End  -->

</body>
</html>

