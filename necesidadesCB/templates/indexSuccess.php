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
<script src="js/main-998eca37f51dad39dc09fd6acb2dad3e.js">

    function check(checkbox) {
    var elCampo = document.getElementById('textfield1');
    elCampo.disabled = checkbox.checked;
    }
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
     <div class="divi1"></div><p class="title-spc">Lo hacemos realidad</p><div class="divi1"></div>
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
            <blockquote>
                <p>&bull; Indica tus principales necesidades </p>
            </blockquote>
            <p><em>Cambiofacil pone en contacto a usuarios que desean realizar donaciones para las personas que más lo necesitan.</em></p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!ofac!l</cite></small>
            </blockquote>
            <br/><br/>

            <div class="col-md-6 col-md-offset-3">
            <!-- Nav tabs category -->
            <ul class="nav nav-tabs faq-cat-tabs">
                <li class="active"><a href="#faq-cat-1" data-toggle="tab">Categoría de Necesidades</a></li>
                <li><a href="#faq-cat-2" data-toggle="tab">Ranking</a></li>
                <li><a href="#faq-cat-3" data-toggle="tab">otro</a></li>
                <li><a href="#faq-cat-4" data-toggle="tab">otro</a></li>
            </ul>

            <!-- Tab panes -->

            <form name="form1" id="planilla1" action="<?php echo url_for('necesidadesCB/index')?>" method="post">

            <div style='position:relative;display:none'>
            <?php foreach ($idCB as $idCBB): ?>
            <input type="tex" id="id_CB" name="id_CB" value="<?php echo $idCBB['cod_casas_benef']?>"/>
            <?php endforeach; ?>
            </div>

            <div class="tab-content faq-cat-content">

                <div class="tab-pane active in fade" id="faq-cat-1">
                      <div class="panel-group" id="accordion-cat-1">
                        <div class="panel panel-default panel-faq">
                            <div class="accordion" id="leftMenu">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                                            <i class="icon-cog"></i> Alimentación
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="1" id="1" value="1"> Todo tipo de alimentación
                                                    </label>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                                            <i class="icon-cog"></i> Bienestar y comunidad
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="2" id="2" value="2"> Alfombras
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="3" id="3" value="3"> Almohadas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="4" id="4" value="4"> Armarios
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="5" id="5" value="5"> Camas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="6" id="6" value="6"> Cobijas
                                                            </label>
                                                        </td>
                                                        <td>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </td>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="7" id="7" value="7"> Colchones
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="8" id="8" value="8"> Cubiertos
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="9" id="9" value="9"> Cucharas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="10" id="10" value="10"> Esteras
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="11" id="11" value="11"> Frazadas
                                                            </label>
                                                        </td>
                                                        <td>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </td>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="12" id="12" value="12"> Maseteros
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="14" id="14" value="14"> Platos
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="15" id="15" value="15"> Sabanas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="16" id="16" value="16"> Tazas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="17" id="17" value="17"> Televisores
                                                            </label>
                                                        </td>
                                                        <td>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </td>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="18" id="18" value="18"> Vasos
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
                                            <i class="icon-cog"></i> Capacitación
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="19" id="19" value="19"> Clases de baile
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="20" id="20" value="20"> Clases de belleza
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="21" id="21" value="21"> Clases de carpintería
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="22" id="22" value="22"> Clases de conducción
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="23" id="23" value="23"> Clases de pintura
                                                            </label>

                                                        </td>
                                                        <td>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </td>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="24" id="24" value="24"> Clases de yoga
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="25" id="25" value="25"> Clases de Computación
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="26" id="26" value="26"> Clases de Matemática
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="28" id="28" value="28"> Clases de Primeros Auxilios
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFive">
                                            <i class="icon-cog"></i> Distracción y Recreación
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="29" id="29" value="29"> Bicicletas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="30" id="30" value="30"> Juegos para niños
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="31" id="31" value="31"> Música
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="33" id="33" value="33"> Películas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="53" id="53" value="53"> Juegos de Video
                                                            </label>
                                                        </td>
                                                        <td>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
                                            <i class="icon-cog"></i> Educación
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="34" id="34" value="34"> Cuadernos
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="35" id="35" value="35"> Libros
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="36" id="36" value="36"> Manuales
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="37" id="37" value="37"> Periódicos
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="38" id="38" value="38"> Revistas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="39" id="39" value="39"> Uniformes escolares
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSeven">
                                            <i class="icon-cog"></i> Informática
                                        </a>
                                    </div>
                                    <div id="collapseSeven" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="40" id="40" value="40"> Accesorios de computación
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="41" id="41" value="41"> Computadoras
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="42" id="42" value="42"> Internet
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseEight">
                                            <i class="icon-cog"></i> Juguetes
                                        </a>
                                    </div>
                                    <div id="collapseEight" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="44" id="44" value="44"> Para niños
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="45" id="45" value="45"> Para niñas
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseNine">
                                            <i class="icon-cog"></i> Salud
                                        </a>
                                    </div>
                                    <div id="collapseNine" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="46" id="46" value="46"> Medicinas
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="47" id="47" value="47"> Útiles de aseo para el hogar
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="48" id="48" value="48"> Útiles de aseo personal
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTen">
                                            <i class="icon-cog"></i> Vestimenta
                                        </a>
                                    </div>
                                    <div id="collapseTen" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="49" id="49" value="49"> Ropa de adultos
                                                            </label>
                                                            <label>
                                                                  <input type="checkbox" name="50" id="50" value="50"> Ropa de niños
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseEleven">
                                            <i class="icon-cog"></i> Zapatos
                                        </a>
                                    </div>
                                    <div id="collapseEleven" class="accordion-body collapse" style="height: 0px; ">
                                        <div class="accordion-inner">
                                            <ul>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <label>
                                                                  <input type="checkbox" name="51" id="51" value="51"> Para adultos
                                                            </label>
                                                            <label>
                                                                <input type="checkbox" name="52" id="52" value="52"> Para niños
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </ul>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                <table class="table table-striped table-bordered">
         <tr>
             <td><center><input type="submit" value="Guardar" class="btn btn-success"/></center></td>
         </tr>
     </table>

                </form>

                <div class="tab-pane fade" id="faq-cat-2">
                    <div class="panel-group" id="accordion-cat-2">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-3">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="faq-cat-4">
                    <div class="panel-group" id="accordion-cat-3">
                        <div class="panel panel-default panel-faq">
                            <div class="panel-heading">

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