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
<script src="http://code.highcharts.com/highcharts-more.js"></script>
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
     <div class="divi1"></div><p class="title-spc">Mensajes Denunciados</p><div class="divi1"></div>
     <div class="clear"></div>

     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">

    <table class="table table-striped table-bordered">
              <tr>
                  <td><center>

     <script type="text/javascript">
	var chart;
	$(document).ready(function() {

		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'graficaVelocimetro', 	// Le doy el nombre a la gráfica
				type: 'gauge',
                                plotBackgroundColor: null,
                                plotBackgroundImage: null,
                                plotBorderWidth: 0,
                                plotShadow: false	// Pongo que tipo de gráfica es
			},
			title: {
				text: 'Reporte de mensajes denunciados'	// Titulo (Opcional)
			},
			pane: {
                        startAngle: -150,
                        endAngle: 150,
                        background: [{
                        backgroundColor: {
                            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                            stops: [
                                [0, '#FFF'],
                                [1, '#333']
                            ]
                        },
                        borderWidth: 0,
                        outerRadius: '109%'
            }, {
                backgroundColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                borderWidth: 1,
                outerRadius: '107%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 0,
                outerRadius: '105%',
                innerRadius: '103%'
            }]
        },

        // the value axis
        yAxis: {
            min: 0,
            max: 200,//limite maximo del velocimetro (cantidad maxima de msj denunciados)

            minorTickInterval: 'auto',
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'inside',
            minorTickColor: '#666',

            tickPixelInterval: 30,
            tickWidth: 2,
            tickPosition: 'inside',
            tickLength: 10,
            tickColor: '#666',
            labels: {
                step: 2,
                rotation: 'auto'
            },
            title: {
                text: 'cambiofacil.com'
            },
            plotBands: [{
                from: 0,
                to: 120,
                color: '#55BF3B' // green
            }, {
                from: 120,
                to: 160,
                color: '#DDDF0D' // yellow
            }, {
                from: 160,
                to: 200,
                color: '#DF5353' // red
            }]
        },

        series: [{
            name: 'Cantidad',
            <?php foreach ($nro_msj_denun as $nro_msj_denunn): ?>
            data: [<?php echo $nro_msj_denunn['valormsj']?>],//valor a mostrar en el velocimetro
            <?php endforeach; ?>
            tooltip: {
                valueSuffix: ' mensajes'
            }
        }]

    }//funcion que actualiza los valores que mueven la aguja del reloj automaticamente
    /*,
        // Add some life
        function (chart) {
            if (!chart.renderer.forExport) {
                setInterval(function () {
                    var point = chart.series[0].points[0],
                        newVal,
                        inc = Math.round((Math.random() - 0.5) * 20);

                    newVal = point.y + inc;
                    if (newVal < 0 || newVal > 200) {
                        newVal = point.y - inc;
                    }

                    point.update(newVal);

                }, 3000);
            }
        }*/);
});
</script>
            <div id="graficaVelocimetro" style="width: 100%; height: 500px; margin: 0 auto">
            </div>

                  </center></td>
              </tr>
    </table>

    <table class="table table-striped table-bordered">
        <tr>
            <td><center><strong><h4>MENSAJES DENUNCIADOS</h4></strong></center></td>
        </tr>
    </table>


    <table class="table table-striped table-bordered">
              <thead>
                  <tr>
                      <th><center>Nro</center></th>
                      <th><center>Id</center></th>
                      <th><center>Usuario Envia</center></th>
                      <th><center>Usuario Recibe</center></th>
                      <th><center>Mensaje</center></th>
                      <th><center>Fecha</center></th>
                  </tr>
             </thead>
             <tbody>
                 <?php $cont = 1; ?>
                 <?php foreach ($infomsjdenun as $infomsjdenunn): ?>
                 <tr>
                    <td><center><?php echo $cont++ ?></center></td>
                    <td><center><?php echo $infomsjdenunn['id_mensaje']?></center></td>
                    <td><center><span class="label label-warning"><?php echo $infomsjdenunn['nombre_usu_envia']?> <?php echo $infomsjdenunn['apellido_usu_envia']?></span></center>
                                <strong>Ciudad:</strong> <?php echo $infomsjdenunn['ciudad_usu_envia']?><br/><strong>Email:</strong> <?php echo $infomsjdenunn['email_usu_envia']?></td>
                    <td><center><span class="label label-info"><?php echo $infomsjdenunn['first_name']?> <?php echo $infomsjdenunn['last_name']?></span></center>
                                <strong>Email:</strong> <?php echo $infomsjdenunn['email_address']?></td>
                    <td><center><textarea name="mensaje" cols="48"><?php echo $infomsjdenunn['mensaje']?></textarea></center></td>
                    <td><center><?php echo $infomsjdenunn['fecha']?></center></td>
                 </tr>
                 <?php endforeach; ?>
            </tbody>
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
