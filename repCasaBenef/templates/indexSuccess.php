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
                  <td><center><script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaLineal', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'line'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte de CB registradas'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
				categories: ['Jul','Ago','Sep','Oct'],
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
		                name: 'Casas de Beneficencia',
		                data: [0,<?php foreach ($nro_cb_reg_ag as $nro_cb_reg_agg): ?>
                                       <?php echo $nro_cb_reg_agg['valorcbag']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_cb_reg_sp as $nro_cb_reg_spp): ?>
                                       <?php echo $nro_cb_reg_spp['valorcbsp']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_cb_reg_oc as $nro_cb_reg_occ): ?>
                                       <?php echo $nro_cb_reg_occ['valorcboc']?>
                                       <?php endforeach; ?>]
		            }],
		});
	});
</script>
                                <div id="graficaLineal" style="width: 100%; height: 500px; margin: 0 auto">
                                </div></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>

                  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

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
              <tr>
                  <td colspan="2"><center>

                          <table class="table table-striped table-bordered">
              <tr>
                  <td><center><strong>TOTAL DE DONACIONES</strong><br/>
                  <?php foreach ($nro_total_donac as $nro_total_donacc): ?>
                        <a href="<?php echo url_for('repCasaBenef/index')?>" class="btn btn-default tip" title="Instituciónes de Beneficencia"><?php echo $nro_total_donacc['numdonac']?> <i class="icon-home"></i></a>
                  <?php endforeach; ?>
                  </center></td>
              </tr>
    </table>
                          <div class="menu">
    <div class="accordion">
    <div class="accordion-group">
    <div class="accordion-heading country">
    <img src="/images/1376042442_advertisment.png" alt="country flag" width="30" height="30" style="float:left; margin: 3px 10px 0 3px; text-align:center;"/>
    <a class="accordion-toggle" data-toggle="collapse" href="#country1">CATALOGO DE CB</a>
    </div>
    <div id="country1" class="accordion-body collapse">
    <div class="accordion-inner">
    <table class="table table-striped table-condensed">
              <thead>
                  <tr>
                      <th><center>Código</center></th>
                      <th><center>Logo</center></th>
                      <th><center>Nombre</center></th>
                      <th><center>Dirección</center></th>
                      <th><center>Teléfonos</center></th>
                      <th><center>Fecha de Ingreso</center></th>
                      <th><center>Ciudad</center></th>
                      <th><center>Web</center></th>
                      <th><center>Nro de Viitas</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php foreach ($catalogo_cb_rep as $catalogo_cb_repp): ?>
                 <tr>
                    <td><center><?php echo $catalogo_cb_repp['cod_casas_benef']?></center></td>
                    <td><center><img src="/uploads/fotos/s_<?php echo $catalogo_cb_repp['imagen_casa_benef']?>" alt="<?php echo $catalogo_cb_repp['imagen_casa_benef']?>" class="img-rounded user-avatar-sm" width="40" height="40"/></center></td>
                    <td><center><?php echo $catalogo_cb_repp['nombre']?></center></td>
                    <td><center><?php echo $catalogo_cb_repp['direccion']?></center></td>
                    <td><center><?php echo $catalogo_cb_repp['telefono1']?> <br/> <?php echo $catalogo_cb_repp['telefono2']?> <br/> <?php echo $catalogo_cb_repp['telefono3']?></center></td>
                    <td><center><?php echo $catalogo_cb_repp['fecha_ingreso']?></center></td>
                    <td><center><?php echo $catalogo_cb_repp['nombre_cant']?></center></td>
                    <td><center><?php echo $catalogo_cb_repp['pagina_web_cb']?></center></td>
                    <td><center><?php echo $catalogo_cb_repp['nro_visitas_cb']?></center></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>

                          <script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaColumn', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'column'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte Casas de Benef - Donaciónes'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
            categories: [
                'CASAS DE BENEFICENCIA'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'TOTAL DONACIONES'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:1f} donaciones</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [
            <?php foreach ($nro_donac_rep as $nro_donac_repp): ?>
            {
            name: '<?php echo $nro_donac_repp['id_cb_donacion']?>',
            data: [<?php echo $nro_donac_repp['numdonac']?>]
            },<?php endforeach; ?>]
    });
});
</script>
                                <div id="graficaColumn" style="width: 100%; height: 500px; margin: 0 auto">
                                </div></td>
              </tr>
               <tr>
                   <td colspan="2">

     <script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
                                renderTo: 'graficaColumnhoriz',
				type: 'bar'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte Casas de Benef - Provincias'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
            categories: [
                            'PROVINCIA',
                         
                ],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad de casas de beneficencia (unidades)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' casa(s) de beneficencia'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [
            <?php foreach ($cbxprovincias as $cbxprovinciass): ?>
            {
            name: '<?php echo $cbxprovinciass['provincia']?>',
            data: [<?php echo $cbxprovinciass['valorcb']?>]
            },<?php endforeach; ?>]
    });
});
</script>
                <div id="graficaColumnhoriz" style="width: 100%; height: 500px; margin: 0 auto">
                </div>

                       <center><h5>CATALOGO DE PROVINCIAS</h5></center>

                       <table class="table table-striped table-condensed">
              <thead>
                  <tr>
                      <th><center>Codigo</center></th>
                      <th><center>Provincia</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php foreach ($catprov as $catprovv): ?>
                 <tr>
                    <td><center><?php echo $catprovv['id_provincia']?></center></td>
                    <td><center><?php echo $catprovv['nombre_prov']?></center></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
    </table>
                       
            </td>
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
