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
    
    <div class="row">
            <div class="col-md-8">
                <div class="text-right">
                    <p class="text-right">
                        <?php $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
                              $fecha=$meses[date('n')-1]. date(" d, Y g:i A");?>
                    <a href="" title="Categoria de Usuario"><span class="label label-primary"><?php echo $fecha ?></span></a>
                    </p>
                </div>
            </div>
        </div>

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Administración del  portal</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

     <strong>Información de 1era mano &dArr;&dArr;&dArr;</strong>
    <table class="table table-striped table-bordered">
              <tr>
                  <td><center><strong>Usuarios Registrados</strong><br/>
                  <?php foreach ($nro_usr_reg as $nro_usr_regg): ?>
                        <a href="<?php echo url_for('repUsuarios/index')?>" class="btn btn-default tip" title="Nro total de usuarios registrados"><?php echo $nro_usr_regg['numusrtotal']?> <i class="icon-user"></i></a>
                  <?php endforeach; ?></center></td>
                  <td><center><strong>Anuncios Registrados</strong><br/>
                      <?php foreach ($nro_anun_reg as $nro_anun_regg): ?>
                        <a href="<?php echo url_for('repAnuncios/index')?>" class="btn btn-default tip" title="Nro total de anuncios registrados"><?php echo $nro_anun_regg['numanunciostotal']?> <i class="icon-comment"></i></a>
                        <?php endforeach; ?>
                      </center></td>
                  <td><center><strong>Instituciones de Beneficencia</strong><br/>
                  <?php foreach ($nro_cb_reg as $nro_cb_regg): ?>
                        <a href="<?php echo url_for('repCasaBenef/index')?>" class="btn btn-default tip" title="Instituciónes de Beneficencia"><?php echo $nro_cb_regg['numcbtotal']?> <i class="icon-home"></i></a>
                        <?php endforeach; ?>
                  </center></td>
                  <td><center><strong>Donaciones</strong><br/><?php foreach ($nro_total_donac as $nro_total_donacc): ?>
                        <a href="<?php echo url_for('repTotalDonaciones/index')?>" class="btn btn-default tip" title="Instituciónes de Beneficencia"><?php echo $nro_total_donacc['numdonac']?> <i class="icon-heart"></i></a>
                  <?php endforeach; ?></center></td>
              </tr>
    </table>

<section id="fluidGridSystem">

          <div class="bs-docs-example">
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <?php foreach ($frase_ramdom as $frase_ramdomm): ?>
                <font size="2"><em>&bull; <?php echo $frase_ramdomm['frase_motivacion']?> <strong>&mdash;<?php echo $frase_ramdomm['autor_frase_motiv']?></strong></em></font>
                <?php endforeach; ?>
            </div>
          </div>

    <div class="row-fluid show-grid">
    <div class="span4">
        <div class="pad_bot2">
            
                 <div class="accordion" id="leftMenu">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                                <i class="icon-user"></i> Información de Usuarios
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="<?php echo url_for('repTotalUsrRegistrados/index')?>">Total de Usuarios Registrados</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('repUsrxProvincia/index')?>">Reporte de Usuarios por Provincia</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('repTotalUsrRegistrados/index')?>">Usuarios Activos e Inactivos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                                <i class="icon-star-empty"></i> Anuncios Publicados
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="<?php echo url_for('repTotalAnunciosCre/index')?>">Total de Anuncios creados</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('repAnunciosxCategoria/index')?>">Anuncios por Categoría</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('repTop5Anuncios/index')?>">Top 5 anuncios mas Visitados</a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
                                <i class="icon-check"></i> Instituciones de Beneficencia
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="<?php echo url_for('repTotalCB/index')?>">Total de CB Creadas</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('repTotalDonaciones/index')?>">Nro total de Donaciones</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('repCBporProvincia/index')?>">CB por provincia</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFive">
                                <i class="icon-cog"></i> Reportes de Incidencia
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="<?php echo url_for('repMensajesDenunciados/index')?>">Mensajes Denunciados</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('repValoracionesDenunciadas/index')?>">Valoraciones Denunciadas</a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                <i class="icon-cog"></i> Parametrización
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                <ul>
                                    <li>&raquo; <a href="<?php echo url_for('nuevaCategoria/new')?>">Crear Nueva Categoría de Anuncio</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('nuevaProvincia/new')?>">Crear Nueva Provincia</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('nuevoCanton/new')?>">Crear Nueva Ciudad</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('nuevaFraseMotiv/new')?>">Crear nueva frase de motivación</a></li>
                                    <li>&raquo; <a href="<?php echo url_for('catalogoMedallas/new')?>">Crear nueva medalla por donación</a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
                </div>

                    </div>
    </div>
    <div class="span8">

      <script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaLineal', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'line'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte de Usuarios Registrados'	// Titulo (Opcional)
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
					text: 'Nº Usuarios Registrados'
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
		                name: 'Usuarios registrados',
		                data: [0,<?php foreach ($nro_usr_reg_ag as $nro_usr_reg_agg): ?>
                                       <?php echo $nro_usr_reg_agg['valorago']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_usr_reg_sp as $nro_usr_reg_spp): ?>
                                       <?php echo $nro_usr_reg_spp['valorsp']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_usr_reg_oc as $nro_usr_reg_occ): ?>
                                       <?php echo $nro_usr_reg_occ['valoroc']?>
                                       <?php endforeach; ?>]
		            },
		            {
		                name: 'Anuncios Registrados',
		                data: [0,<?php foreach ($nro_anu_reg_ag as $nro_anu_reg_agg): ?>
                                       <?php echo $nro_anu_reg_agg['valorag']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_anu_reg_sp as $nro_anu_reg_spp): ?>
                                       <?php echo $nro_anu_reg_spp['valoranusp']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_anu_reg_oc as $nro_anu_reg_occ): ?>
                                       <?php echo $nro_anu_reg_occ['valoranuoc']?>
                                       <?php endforeach; ?>]
		            },
		            {
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
                                </div>

     

      <div class="menu">
    <div class="accordion">
    <div class="accordion-group">
    <div class="accordion-heading country">
    <img src="/images/1376042442_advertisment.png" alt="country flag" width="30" height="30" style="float:left; margin: 3px 10px 0 3px; text-align:center;"/>
    <a class="accordion-toggle" data-toggle="collapse" href="#country1">Nomenclatura de Anuncios</a>
    </div>
    <div id="country1" class="accordion-body collapse">
    <div class="accordion-inner">
    <table class="table table-striped table-condensed">
              <thead>
                  <tr>
                      <th><center>Codigo</center></th>
                      <th><center>Categoría</center></th>
                      <th><center>Descripcion</center></th>
                      <th><center>Estado</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php foreach ($cat_anuncios_dist as $cat_anuncios_distt): ?>
                 <tr>
                    <td><center><?php echo $cat_anuncios_distt['id_categoria']?></center></td>
                    <td><center><?php echo $cat_anuncios_distt['nombre_cat']?></center></td>
                    <td><center><?php echo $cat_anuncios_distt['descripcion_cat']?></center></td>
                    <td><center><?php echo $cat_anuncios_distt['estado_cat']?></center></td>
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
				renderTo: 'graficaQueso3D', 	// Le doy el nombre a la gráfica
				type: 'pie'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte de Anuncios por Categoría'	// Titulo (Opcional)
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
                <?php foreach ($rep_anun_categ as $rep_anun_categg): ?>
                ['Id Categoria: <?php echo $rep_anun_categg['id_categoria']?>', <?php echo $rep_anun_categg['valanun']?>],
                <?php endforeach; ?>                
            ]
        }]
    });
});
</script>
                                <div id="graficaQueso3D" style="width: 100%; height: 500px; margin: 0 auto">
                                </div>


<script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaLinez3D', 	// Le doy el nombre a la gráfica
				type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Ditribución de anuncios'
        },
        subtitle: {
            text: 'Por mes'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: Highcharts.getOptions().lang.shortMonths
        },
        yAxis: {
            opposite: true
        },
        series: [{
            name: 'Anuncios creados en el mes',
            data: [0,0,0,0,0,0,0,<?php foreach ($nro_usr_reg_ag as $nro_usr_reg_agg): ?>
                                       <?php echo $nro_usr_reg_agg['valorago']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_usr_reg_sp as $nro_usr_reg_spp): ?>
                                       <?php echo $nro_usr_reg_spp['valorsp']?>
                                       <?php endforeach; ?>,
                                       <?php foreach ($nro_usr_reg_oc as $nro_usr_reg_occ): ?>
                                       <?php echo $nro_usr_reg_occ['valoroc']?>
                                       <?php endforeach; ?>,0,0]
        }]
    });
});
</script>
                                <div id="graficaLinez3D" style="width: 100%; height: 500px; margin: 0 auto">
                                </div>

      <script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaArea', 	// Le doy el nombre a la gráfica
				defaultSeriesType: 'area'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte de Usuarios Registrados'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
            allowDecimals: false,
            labels: {
                formatter: function () {
                    return this.value; // clean, unformatted number for year
                }
            }
        },
        yAxis: {
            title: {
                text: 'Nuclear weapon states'
            },
            labels: {
                formatter: function () {
                    return this.value / 1000 + 'k';
                }
            }
        },
        tooltip: {
            pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
        },
        plotOptions: {
            area: {
                pointStart: 1940,
                marker: {
                    enabled: false,
                    symbol: 'circle',
                    radius: 2,
                    states: {
                        hover: {
                            enabled: true
                        }
                    }
                }
            }
        },
        series: [{
            name: 'USA',
            data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640,
                1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
                27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342, 26662,
                26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826, 24605,
                24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344, 23586,
                22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009, 10950,
                10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295, 10104]
        }, {
            name: 'USSR/Russia',
            data: [null, null, null, null, null, null, null, null, null, null,
                5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
                4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
                15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
                33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
                35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
                21000, 20000, 19000, 18000, 18000, 17000, 16000]
        }]
    });
});
</script>
                                <div id="graficaArea" style="width: 100%; height: 500px; margin: 0 auto">
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
				text: 'Reporte de Usuarios Registrados'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Rainfall (mm)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
        series: [{
            name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

        }, {
            name: 'New York',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

        }, {
            name: 'London',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

        }, {
            name: 'Berlin',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

        }]
    });
});
</script>
                                <div id="graficaColumn" style="width: 100%; height: 500px; margin: 0 auto">
                                </div>


      <script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaComplex', 	// Le doy el nombre a la gráfica
				zoomType: 'xy'	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte de Usuarios Registrados'	// Titulo (Opcional)
			},
			subtitle: {
				text: 'cambiofacil.com'		// Subtitulo (Opcional)
			},
			// Pongo los datos en el eje de las 'X'
			xAxis: [{
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}°C',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'Temperature',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Rainfall',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} mm',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 120,
            verticalAlign: 'top',
            y: 100,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Rainfall',
            type: 'column',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            tooltip: {
                valueSuffix: ' mm'
            }

        }, {
            name: 'Temperature',
            type: 'spline',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
            tooltip: {
                valueSuffix: '°C'
            }
        }]
    });
});
</script>
                                <div id="graficaComplex" style="width: 100%; height: 500px; margin: 0 auto">
                                </div>









    <p><div id="backtotop"><a href="#top" class="topOfPage">Ir a inicio de página</a></div></p>

    </div>
    </div>






</section>


     <table class="table table-striped table-bordered">
              <tr>
                  <td><center></center></td>
                  <td><center></center></td>
              </tr>
    </table>

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
