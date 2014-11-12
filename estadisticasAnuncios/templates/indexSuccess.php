<!DOCTYPE html>
<html lang='pl'>
<head>
<!-- Page Title -->
<?php slot('title') ?>
<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?>
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

<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!--<script type="text/javascript" src="js/highcharts/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/highcharts/highcharts.js"></script>
<script type="text/javascript" src="js/highcharts/exporting.js"></script>-->


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
     <div class="divi1"></div><p class="title-spc">Estad&iacute;sticas de tus Anuncios</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

     <section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span8">
        <div class="span10">
        

        <div class="container">
        <div class="row">            
            <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab"># de Visitas que se realizaron a tus anuncios</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Historial de Anuncios</a></li>
                <li><a href="#faq-cat-3" data-toggle="tab">Anuncios Publicados</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content faq-cat-content">
                <div class="tab-pane active in fade" id="faq-cat-1">
                    <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                
                                <script type="text/javascript">
	var chart;
	$(document).ready(function() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaCircular'
			},
			title: {
				text: 'Porcentaje de visitas a tus anuncios'
			},
			subtitle: {
				text: '<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?> <?php echo "- cambiofacil.com" ?>'
			},
			plotArea: {
				shadow: null,
				borderWidth: null,
				backgroundColor: null
			},
			tooltip: {
				formatter: function() {
					return '<b>'+ this.point.name +'</b>: '+ this.y +' visitas';
				}
			},
			plotOptions: {
				pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
						enabled: true,
						color: '#000000',
						connectorColor: '#000000',
						formatter: function() {
							return '<b>'+ this.point.name +'</b>: '+ this.y +' visitas';
						}
					}
				}
			},
		    series: [{
				type: 'pie',
				name: 'Browser share',
				data: [


                                <?php foreach ($anuncios_usuario as $anuncios_usr): ?>
                                    ['<?php echo $anuncios_usr['titulo']?>',<?php echo $anuncios_usr['nro_visitas']?>],
                                <?php endforeach; ?>
						
					]
			}]
		});
	});
</script>

                                <div id="graficaCircular" style="width: 100%; height: 500px; margin: 0 auto">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                
                                <table>
              <tr>
                  <td><script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaLineal', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'line'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte de Anuncios Registrados'	// Titulo (Opcional)
			},
			subtitle: {
				text: '<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?> - cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
				categories: ['Jul','Ago','Sep','Oct','Nov'],
				// Pongo el título para el eje de las 'X'
				title: {
					text: 'Meses Año 2014'
				}
			},
			yAxis: {
				// Pongo el título para el eje de las 'Y'
				title: {
					text: 'Nº Anuncios Registrados'
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
		                name: 'Anuncios Registrados',
		                data: [<?php foreach ($nro_anu_reg_jl as $nro_anu_reg_jll): ?>
                                       <?php echo $nro_anu_reg_jll['valoranujlusr']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_anu_reg_ag as $nro_anu_reg_agg): ?>
                                       <?php echo $nro_anu_reg_agg['valoranuagusr']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_anu_reg_sp as $nro_anu_reg_spp): ?>
                                       <?php echo $nro_anu_reg_spp['valoranuspusr']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_anu_reg_oc as $nro_anu_reg_occ): ?>
                                       <?php echo $nro_anu_reg_occ['valoranuocusr']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_anu_reg_nv as $nro_anu_reg_nvv): ?>
                                       <?php echo $nro_anu_reg_nvv['valoranunvusr']?>
                                       <?php endforeach; ?>]
		            }],
		});
	});
</script>
                                <div id="graficaLineal" style="width: 50%; height: 500px; margin: 0 auto">
                                </div></td>

              </tr>
              </table>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-3">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">
                                <table>
                                    <tr>
                                <td><center>
                                    <script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaQueso3D', 	// Le doy el nombre a la gráfica
				type: 'pie'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Anuncios Activos, Inactivos y Cambiados'	// Titulo (Opcional)
			},
			subtitle: {
				text: '<?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?> - cambiofacil.com'		// Subtitulo (Opcional)
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
                <?php foreach ($anunciosEstado as $anunciosEstadoo): ?>
                ['<?php echo $anunciosEstadoo['estado_anuncio']?>: <?php echo $anunciosEstadoo['valanun']?>', <?php echo $anunciosEstadoo['valanun']?>],
                <?php endforeach; ?>
            ]
        }]
    });
});
</script>
                                <div id="graficaQueso3D" style="width: 50%; height: 500px; margin: 0 auto">
                                </div></center>
                                </td>
                                </tr>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
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

<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

</body>
</html>