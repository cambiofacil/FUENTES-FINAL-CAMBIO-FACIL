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
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"950px", height:"560px", transition:"fade", scrolling   : true});
});
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
     <div class="divi1"></div><p class="title-spc">Detalle Ficha de Donaciónes</p><div class="divi1"></div>
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
        <table>
        <tr>
            <td><center><h2><center> <img src="/images/1412070202_page_white_add.png" alt="" title="Haz click"/> Detalle ficha de donación</center></h2></center></td>
        </tr>
        </table>

        <div class="container">
        <div class="row">
            <blockquote>
                <p>&bull; Donaciónes </p>
            </blockquote>
            <p><em>Cambio fácil pone en contacto a usuarios que desean realizar donaciónes para las personas que mas lo necesitan</em></p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!o fac!l</cite></small>
            </blockquote>
            <br/>
            <h4>Detalle de donación</h4>
            <br/>

<style type="text/css">

.fila-base{ display: none; } /* fila base oculta */
.eliminar{ cursor: pointer; color: #000; }
/*input[type="text"]{ width: 60px; }*/ /* ancho a los elementos input="text" */

</style>


<script type="text/javascript">

$(function(){
	// Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
	$("#agregar").on('click', function(){
		$("#tabla tbody tr:eq(0)").clone().removeClass('fila-base').appendTo("#tabla tbody");
	});

	// Evento que selecciona la fila y la elimina
	$(document).on("click",".eliminar",function(){
		var parent = $(this).parents().get(0);
		$(parent).remove();
	});
});

</script>

<!-- Botón para agregar filas -->
<input class="btn btn-primary" type="button" id="agregar" value="Agregar fila" />
<br/><br/>
<form name="form1" id="planilla1" action="<?php echo url_for('fichaDonacionDetGuarda/index')?>" method="post">
<div style='position:relative;display:none'>
    <input type="tex" id="id_ficha_don_cab" name="id_ficha_don_cab" value="<?php echo $_GET['id_fich_cb'] ?>"/>
</div>

    <table id="tabla" class="table table-striped table-bordered">
	<!-- Cabecera de la tabla -->
	<thead>
		<tr>
                      <th><center>Cantidad</center></th>
                      <th><center>Descripción Articulo</center></th>
                      <th><center>Estado Físico</center></th>
                      <th><center>Fecha Ingreso</center></th>
                </tr>
	</thead>

	<!-- Cuerpo de la tabla con los campos -->
	<tbody>
            <?php $i=1;?>
                <?php for($j=0; $j<3; $j++){ ?>
		<tr>
                    <td><center><input type="text"  id="txt_cantidad_donac" name="txt_cantidad_donac<?php echo $i ?>" placeholder="Ingrese la cantidad" ></center></td>
                    <td><center><input type="text" id="txt_descrip_donac" name="txt_descrip_donac<?php echo $i ?>" data-provide="typeahead" placeholder="Ejemplo: zapatos"
                                   data-source='["Abrigos",
                                                "Almohadas",
                                                "Balón de básquet",
                                                "Balón de futbol",
                                                "Bicicletas",
                                                "Blusas",
                                                "Borradores",
                                                "Camas",
                                                "Camisetas",
                                                "Chompas",
                                                "Cobijas",
                                                "Cocinas",
                                                "Computadoras",
                                                "Correas",
                                                "Cuadernos",
                                                "Diccionarios",
                                                "Equipos de sonido",
                                                "Escritorios",
                                                "Esferos",
                                                "Frazadas",
                                                "Gorras",
                                                "Juguetes",
                                                "Lápices",
                                                "Lavadoras",
                                                "Libros",
                                                "Máquina de ejercicio",
                                                "Medias",
                                                "Mochilas",
                                                "Pantalones",
                                                "Peluches",
                                                "Refrigeradoras",
                                                "Sabanas",
                                                "Sacos",
                                                "Sombreros",
                                                "Televisores",
                                                "Ternos",
                                                "Toallas",
                                                "Utensilios de cocina",
                                                "Útiles de aseo para personal",
                                                "Utilices de aseo para el hogar",
                                                "Vicicleta",
                                                "Zapatos",
                                                "Zapatos"
                                            ]' ></center></td>
                    <td><center><select class="estado" name="estado_don<?php echo $i ?>" id="estado_don">
					<option value="0">- Elige un estado -</option>
					<option value="Nuevo">Nuevo</option>
					<option value="Seminuevo">Seminuevo</option>
                                        <option value="Usuado">Usuado</option>
                                        <option value="Viejo">Viejo</option>
				</select></center></td>
                    <td><center><?php $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");?>
                                <?php $fecha=$meses[date('n')-1]. date(" d, Y g:i A");?>
                                <?php echo $fecha?></center></td>
                    <td class="eliminar"><center><span class="label label-important">Eliminar</span></center></td>
		</tr>
		<?php $i = $i+1;?>
                <?php }?>
	</tbody>
</table>

    <center><input type="submit" value="Guardar ficha donación" class="btn btn-success"/></center>
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

<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

</body>
</html>