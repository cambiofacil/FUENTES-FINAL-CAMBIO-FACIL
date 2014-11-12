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
$(".iframe1").colorbox({iframe:true, fastIframe:false, width:"800px", height:"550px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe_info_contacto").colorbox({iframe:true, fastIframe:false, width:"800px", height:"350px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe_info_anuncio").colorbox({iframe:true, fastIframe:false, width:"800px", height:"500px", transition:"fade", scrolling   : false});
});
</script>

</head>

<body>

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

    <!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Ficha de Donaciónes</p><div class="divi1"></div>
     <div class="clear"></div>

     <section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span8">
        <div class="span10">

        <div class="container">
        <div class="row">
            <form name="form1" id="planilla1" action="<?php echo url_for('fichaDonacionCabGuarda/index')?>" method="post">
                               <?php foreach ($info_usuario_busca as $info_usuario_buscaa): ?>
                                <?php foreach ($info_cb_fich as $info_cb_fichh): ?>

                                <div style='position:relative;display:none'>
                                  <input type="tex" id="id_usr_dona" name="id_usr_dona" value="<?php echo $info_usuario_buscaa['id']?>"/>
                                  <input type="tex" id="id_cb_dona" name="id_cb_dona" value="<?php echo $info_cb_fichh['cod_casas_benef']?>"/>
                                </div>

                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td colspan="5">&bull; Datos informativos de la institucion de beneficencia</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><center><img src="/uploads/fotos/s_<?php echo $info_cb_fichh['imagen_casa_benef']?>" alt="<?php echo $info_cb_fichh['imagen_casa_benef']?>" class="img-rounded user-avatar-sm"/></center></td>
                                        <td colspan="4"><center><h4><?php echo $info_cb_fichh['nombre']?></h4></center></td>
                                    </tr>
                                    <tr>
                                        <td><center><strong>Localidad:</strong><br/><?php echo $info_cb_fichh['nombre_prov']?> - <?php echo $info_cb_fichh['nombre_cant']?></center></td>
                                        <td><center><strong>Codigo:</strong><br/><?php echo $info_cb_fichh['cod_casas_benef']?></center></td>
                                        <td><center><strong>Página web:</strong><br/><?php echo $info_cb_fichh['pagina_web_cb']?></center></td>
                                        <td><center><strong>Fecha creación:</strong><br/><?php echo $info_cb_fichh['fecha_ingreso']?></center></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">&bull; Datos informativos del donante</td>
                                    </tr>
                                    <tr>
                                        <td><center><img src="/uploads/fotos/s_<?php echo $info_usuario_buscaa['foto']?>" alt="<?php echo $info_usuario_buscaa['foto']?>" class="img-rounded user-avatar-sm"/></center></td>
                                        <td colspan="4"><p><strong>Código:</strong> <?php echo $info_usuario_buscaa['id']?></p>
                                            <p><strong>Nombres:</strong> <?php echo $info_usuario_buscaa['first_name']?> <?php echo $info_usuario_buscaa['last_name']?></p>
                                            <p><strong>Email:</strong> <?php echo $info_usuario_buscaa['email_address']?></p>
                                            <p><strong>Username:</strong> <?php echo $info_usuario_buscaa['username']?></p>
                                            <p><strong>Lugar de Residencia:</strong> <?php echo $info_usuario_buscaa['nombre_cant']?></p>
                                            <p><strong>Tlf de contacto:</strong> <?php echo $info_usuario_buscaa['nro_celular']?> / <?php echo $info_usuario_buscaa['nro_convencional']?> / <?php echo $info_usuario_buscaa['nro_oficina']?></p>
                                            <p><strong>Nacionalidad:</strong> <?php echo $info_usuario_buscaa['nacionalidad']?></p>
                                            <p><strong>Fecha Nacimiento:</strong> <?php echo $info_usuario_buscaa['fecha_nac']?></p>
                                            <p><strong>Ocupación:</strong> <?php echo $info_usuario_buscaa['ocupacion']?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                                <table class="table table-striped table-bordered">
                                                 <tr>
                                                    <td><center>
                                                        Declaro expresamente que los datos ingresados en este formulario son verídicos y el usuario en cuestión está ligado a realizar una donación que previamente fue comunicada y/o enterada por el representante legal de la casa de beneficencia
                                                        </center></td>
                                                 </tr>
                                                </table>
                                            <center><input type="submit" value="Guardar ficha" class="btn btn-success"/></center>
                                        </td>
                                    </tr>
                                </table>
                                <?php endforeach; ?>
                                <?php endforeach; ?>
                </form>
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

</body>
</html>