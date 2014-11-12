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


<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">

    <center><script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaLineal', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'line'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Gráfica de Donaciones'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
				categories: ['Ago','Sep','Oct','Nov'],
				// Pongo el título para el eje de las 'X'
				title: {
					text: 'Meses Año 2014'
				}
			},
			yAxis: {
				// Pongo el título para el eje de las 'Y'
				title: {
					text: 'Cantidad'
				}
			},
			// Doy formato al la "cajita" que sale al pasar el ratón por encima de la gráfica
			tooltip: {
				enabled: true,
				formatter: function() {
					return '<b>'+ this.series.name +'</b><br/>'+
						this.x +': '+ this.y +' '+this.series.name;
				}
			},
			// Doy opciones a la gráfica
			plotOptions: {
				line: {
					dataLabels: {
						enabled: true
					},
					enableMouseTracking: true
				}
			},
			// Doy los datos de la gráfica para dibujarlas
			series: [{
		                name: 'Donaciones',
		                data: [<?php foreach ($nro_don_cb_ag as $nro_don_cb_agg): ?>
                                       <?php echo $nro_don_cb_agg['valordoncb']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_don_cb_sp as $nro_don_cb_spp): ?>
                                       <?php echo $nro_don_cb_spp['valordoncb']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_don_cb_oc as $nro_don_cb_occ): ?>
                                       <?php echo $nro_don_cb_occ['valordoncb']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_don_cb_nv as $nro_don_cb_nvv): ?>
                                       <?php echo $nro_don_cb_nvv['valordoncb']?>
                                       <?php endforeach; ?>]
		            }],
		});
	});
</script>
                                <div id="graficaLineal" style="width: 100%; height: 500px; margin: 0 auto">
                                </div></center>

   </div>
</section>

     <div class="divi2"></div>
     </div>
</div>
</div><!-- About End -->

<!-- Clear -->
<div class="clear"></div>

</div><!-- Content Container End  -->

<!-- Video PopUp -->

</body>
</html>
