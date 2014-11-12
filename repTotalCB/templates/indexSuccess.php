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

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts-3d.js"></script>

<link href="css/application-6671d70fe98684c10f2a03b968b15224.css" media="screen" rel="stylesheet" />
<link href="css/main-2a5910dc32a4ba2ef2d80071822a38f4.css" media="screen" rel="stylesheet" />
<script src="js/stream.js"></script>
<script src="js/application-0bb47302cbdf6ed4cffeda43e8b82c17.js"></script>
<script src="js/main-998eca37f51dad39dc09fd6acb2dad3e.js"></script>
<script language="javascript" src="js/jquery-1.2.6.min.js"></script>
<script language="javascript">
function recargar(){
     // Limita el contador a solo 5 elementos
    if ($actual<=5) {
        $actual=$actual+1;
    } else {
        $actual=1;
    }
     // Setea la variable que vamos a enviar a php
    var variable_post=$actual;
    // Enviamos los valores a miscript.php
    $.post("miscript.php", { variable: variable_post }, function(data){
               /// Actualizamos el div recargado
        $("#recargado").html(data);
    });
}
$actual=0;
// Establecemos el temporizador a 2 segundos
timer = setInterval("recargar()", 2000);
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
     <div class="divi1"></div><p class="title-spc">Información Casas de Beneficencia</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

    <table class="table table-striped table-bordered">
              <tr>
                  <td><center><strong>Instituciones de Beneficencia</strong><br/>
                  <?php foreach ($nro_cb_reg as $nro_cb_regg): ?>
                        <a href="<?php echo url_for('repCasaBenef/index')?>" class="btn btn-default tip" title="Instituciónes de Beneficencia"><?php echo $nro_cb_regg['numcbtotal']?> <i class="icon-home"></i></a>
                        <?php endforeach; ?>
                  </center></td>
              </tr>
    </table>

<section id="fluidGridSystem">

          <div class="bs-docs-example">
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Buen trabajo!</strong> Esperamos q' tu estancia aqui sea excelente, enjoy.
            </div>
          </div>

    <table class="table table-striped table-bordered">
              <tr>
                  <td>
                  <center><script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaQueso3D', 	// Le doy el nombre a la gráfica
				type: 'pie'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'CB Activos, Inactivos'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Anuncios por categoría',
            data: [
                <?php foreach ($cb_estado_hist as $cb_estado_histt): ?>
                ['<?php echo $cb_estado_histt['estado_cb']?>: <?php echo $cb_estado_histt['valcb']?>', <?php echo $cb_estado_histt['valcb']?>],
                <?php endforeach; ?>
            ]
        }]
    });
});
</script>
                                <div id="graficaQueso3D" style="width: 100%; height: 500px; margin: 0 auto">
                                </div></center></td>
              </tr>
    </table>

    <div class="row-fluid show-grid">
    <div class="span8">

    <p><div id="backtotop"><a href="#top" class="topOfPage">Ir a inicio de página</a></div></p>

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
