<!DOCTYPE HTML>

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

<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,300);
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

.range {
    display: table;
    position: relative;
    height: 25px;
    margin-top: 20px;
    background-color: rgb(245, 245, 245);
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

.range input[type="range"] {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    display: table-cell;
    width: 100%;
    background-color: transparent;
    height: 25px;
    cursor: pointer;
}
.range input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range input[type="range"]::-moz-slider-thumb {
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    -ms-appearance: none !important;
    -o-appearance: none !important;
    appearance: none !important;

    width: 11px;
    height: 25px;
    color: rgb(255, 255, 255);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0px;
    background-color: rgb(153, 153, 153);
}

.range output {
    display: table-cell;
    padding: 3px 5px 2px;
    min-width: 40px;
    color: rgb(255, 255, 255);
    background-color: rgb(153, 153, 153);
    text-align: center;
    text-decoration: none;
    border-radius: 4px;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
    width: 1%;
    white-space: nowrap;
    vertical-align: middle;

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;

    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: -moz-none;
    -o-user-select: none;
    user-select: none;
}
.range input[type="range"] {
    outline: none;
}

.range.range-primary input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"]::-moz-slider-thumb {
    background-color: rgb(66, 139, 202);
}
.range.range-primary output {
    background-color: rgb(66, 139, 202);
}
.range.range-primary input[type="range"] {
    outline-color: rgb(66, 139, 202);
}

.range.range-success input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"]::-moz-slider-thumb {
    background-color: rgb(92, 184, 92);
}
.range.range-success output {
    background-color: rgb(92, 184, 92);
}
.range.range-success input[type="range"] {
    outline-color: rgb(92, 184, 92);
}

.range.range-info input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"]::-moz-slider-thumb {
    background-color: rgb(91, 192, 222);
}
.range.range-info output {
    background-color: rgb(91, 192, 222);
}
.range.range-info input[type="range"] {
    outline-color: rgb(91, 192, 222);
}

.range.range-warning input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"]::-moz-slider-thumb {
    background-color: rgb(240, 173, 78);
}
.range.range-warning output {
    background-color: rgb(240, 173, 78);
}
.range.range-warning input[type="range"] {
    outline-color: rgb(240, 173, 78);
}

.range.range-danger input[type="range"]::-webkit-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger input[type="range"]::-moz-slider-thumb {
    background-color: rgb(217, 83, 79);
}
.range.range-danger output {
    background-color: rgb(217, 83, 79);
}
.range.range-danger input[type="range"] {
    outline-color: rgb(217, 83, 79);
}

</style>
</head>
<body>

<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/menu_login.php"); ?>

<!-- Content Container  -->
<div class="bg-container">

<br/>

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Completa tu información</p><div class="divi1"></div>
     <div class="clear"></div>

     <?php if ($sf_user->isAuthenticated()): ?>
     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span4">
        <div class="pad_bot2">
            <blockquote>
                <p>&bull; Cabe indicar </p>
            </blockquote>
            <p><em>Q' al completar tu información personal, tu nivel de confianza aumentara en un 25% para que otros usuarios confien ciegamente en ti y en tus anuncios.</em></p>
            <blockquote class="pull-right">
            <small><cite title="Source Title">camb!o fác¡l</cite></small>
            </blockquote>
        </div>
      </div>
      <div class="span8">

        <h2>Completa tu información</h2>

        <form name="form1" id="planilla1" action="<?php echo url_for('guardInfoUsuario/infoCompUsuarios')?>" method="post">

        <div style='position:relative;display:none'>
            <input type="tex" id="id_usuario_ll" name="id_usuario_ll" value="<?php echo $sf_user->getGuardUser()->getId(); ?>"/>
        </div>

        <table class="table table-striped table-bordered">
            <tr>
                <td><center>Provincia:</center></td>
                <td><input type="text" id="txt_prov" name="txt_prov" data-provide="typeahead" placeholder="Ingresa tu provincia"
                data-source='["AZUAY","BOLIVAR","CAÑAR","CARCHI","COTOPAXI","CHIMBORAZO","EL ORO","ESMERALDAS",
                              "GUAYAS","IMBABURA","LOJA","LOS RIOS","MANABI","MORONA SANTIAGO","NAPO","PASTAZA",
                              "PICHINCHA","SANTA ELENA","SANTO DOMINGO DE LOS TSÁCHILAS","TUNGURAHUA","ZAMORA CHINCHIPE",
                              "GALÁPAGOS","SUCUMBIOS","ORELLANA"]'></td>
            </tr>
            <tr>
                <td><center>Ciudad:</center></td>
                <td><input type="text" id="txt_ciudad" name="txt_ciudad" data-provide="typeahead" placeholder="Ingresa tu ciudad"
                data-source='["24 DE MAYO","AGUARICO","ALAUSI","ALFREDO BAQUERIZO MORENO","AMBATO","AMBUQUI","ANTONIO ANTE",
                              "ARAJUNO","ARCHIDONA","ARENILLAS","ATACAMES","ATAHUALPA","AZOGUES","BABA","BABAHOYO","BALAO",
                              "BALSAS","BALZAR","BAÑOS DE AGUA SANTA","BIBLIAN","BOLIVAR","BOLIVAR","BUENA FE","CALUMA",
                              "CALVAS","CAMILO PONCE ENRIQUEZ","CAÑAR","CARLOS JULIO AROSEMENA T.","CASCALES",
                              "CATAMAYO","CAYAMBE","CELICA","CENTINELA DEL CONDOR","CEVALLOS","CHAGUARPAMBA",
                              "CHAMBO","CHILLA","CHILLANES","CHIMBO","CHINCHIPE","CHONE","CHORDELEG","CHUNCHI",
                              "COLIMES","COLTA","CORONEL MARCELINO MARIDUEÑA","COTACACHI","CUENCA","CUMANDA",
                              "CUMBAYA","CUYABENO","DAULE","DELEG","DURAN","ECHEANDIA","EL CARMEN","EL CHACO",
                              "EL EMPALME","EL GUABO","EL PAN","EL PANGUI","EL TAMBO","EL TRIUNFO","ELOY ALFARO",
                              "ESMERALDAS","ESPEJO","ESPINDOLA","FLAVIO ALFARO","GENERAL ANTONIO ELIZALDE (BUCAY)",
                              "GIRON","GONZALO PIZARRO","GONZANAMA","GUACHAPALA","GUALACEO","GUALAQUIZA",
                              "GUAMOTE","GUANO","GUARANDA","GUAYAQUIL","HUAMBOYA","HUAQUILLAS","IBARRA",
                              "ISABELA","ISIDRO AYORA","JAMA","JARAMIJO","JIPIJAPA","JUNIN","LA JOYA DE LOS SACHAS",
                              "LA LIBERTAD","LA LIBERTAD","LA MANA","LA TRONCAL","LAGO AGRIO","LAS LAJAS",
                              "LAS NAVES","LATACUNGA","LIMON - INDANZA","LOGROÑO","LOJA","LOJA","LOMAS DE SARGENTILLO",
                              "LORETO","MACARA","MACHACHI","MACHALA","MANTA","MARCABELI","MEJIA","MERA","MILAGRO",
                              "MIRA (CHONTAHUASI)","MOCACHE","MOCHA","MONTALVO","MONTECRISTI","MONTUFAR","MORONA",
                              "MUISNE","NABON","NANGARITZA","NARANJAL","NARANJITO","NOBOL (VICENTE PIEDRAHITA)",
                              "NUEVA LOJA","OLMEDO","OLMEDO","OÑA","ORELLANA","OTAVALO","PABLO VI","PAJAN",
                              "PALANDA","PALENQUE","PALESTINA","PALLATANGA","PALORA","PALTAS","PANGUA",
                              "PAQUISHA","PASAJE","PASTAZA","PATATE","PAUTE","PEDERNALES","PEDRO MONCAYO",
                              "PEDRO VICENTE MALDONADO","PENIPE","PICHINCHA","PIFO","PIMAMPIRO","PINDAL",
                              "PIÑAS","PLAYAS (GENERAL VILLAMIL)","PORTOVELO","PORTOVIEJO","PUCARA","PUEBLO VIEJO",
                              "PUEMBO","PUERTO LOPEZ","PUERTO QUITO","PUJILI","PUTUMAYO","PUYANGO","QUERO",
                              "QUEVEDO","QUIJOS","QUILANGA","QUININDE","QUITO","RIOBAMBA","RIOVERDE",
                              "ROCAFUERTE","RUMIÑAHUI","SALCEDO","SALINAS","SALINAS","SAMBORONDON",
                              "SAN CRISTOBAL","SAN FERNANDO","SAN GABRIEL","SAN JACINTO DE YAGUACHI",
                              "SAN JUAN DON BOSCO","SAN LORENZO","SAN MIGUEL","SAN MIGUEL DE LOS BANCOS",
                              "SAN MIGUEL DE URCUQUI","SAN PEDRO DE HUACA","SAN PEDRO DE PELILEO",
                              "SAN RAFAEL","SAN VICENTE","SANTA ANA","SANTA CLARA","SANTA CRUZ",
                              "SANTA ELENA","SANTA ELENA","SANTA ISABEL (CHAGUARURCO)","SANTA LUCIA",
                              "SANTA ROSA","SANTIAGO","SANTIAGO DE PILLARO","SANTO DOMINGO","SANTO DOMINGO DE LOS COLORADOS",
                              "SAQUISILI","SARAGURO","SEVILLA DE ORO","SHUSHUFINDI","SIGCHOS","SIGSIG",
                              "SIMON BOLIVAR","SOZORANGA","SUCRE","SUCUA","SUCUMBIOS","SUSCAL","TAISHA",
                              "TENA","TISALEO","TIWINTZA","TOSAGUA","TULCAN","TUMBACO","URBINA JADO","URDANETE",
                              "VALENCIA","VENTANAS","VINCES","YACUAMBI","YANZATZA","ZAMORA","ZAPOTILLO",
                              "ZARUMA","ZULETA"]'></td>
            </tr>
            <tr>
                <td><center>Foto de perfil:</center></td>
                <td><input id="uploadedfile_img_perfil" name="uploadedfile_img_perfil" type="file" /></td>
            <tr/>
            <tr>
                <td><center>Teléfono Celular:</center></td>
                <td><input type="text" id="txt_cel" name="txt_cel" data-provide="typeahead" placeholder="# Celular"></td>
            </tr>
            <tr>
                <td><center>Teléfono Convencional:</center></td>
                <td><input type="text" id="txt_conve" name="txt_conve" data-provide="typeahead" placeholder="# Convencional"></td>
            </tr>
            <tr>
                <td><center>Teléfono Oficina:</center></td>
                <td><input type="text" id="txt_ofi" name="txt_ofi" data-provide="typeahead" placeholder="# Trabajo"></td>
            </tr>
            <tr>
                <td><center>Nacionalidad:</center></td>
                <td><input type="text" id="txt_nacional" name="txt_nacional" data-provide="typeahead" placeholder="Nacionalidad"></td>
            </tr>
            <tr>
                <td><center>Fecha de Nacimiento:</center></td>
                <td><input type="text" id="txt_f_nac" name="txt_f_nac" data-provide="typeahead" placeholder="DD/MM/YYYY"></td>
            </tr>
            <tr>
                <td><center>Ocupacion:</center></td>
                <td>
                    <select id="ocupacion" name="ocupacion" size="5" multiple>
                      <option selected>-Selecciona una opcion-</option>
                      <option value="Agricultor">Agricultor</option>
                      <option value="Estudiante">Estudiante</option>
                      <option value="Empleado Publico">Empleado Publico</option>
                      <option value="Empleado Privado">Empleado Privado</option>
                      <option value="Otro">Otro</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <br/>
                    
                    <center><input type="submit" value="Enviar mensaje" class="btn btn-success"/></center>
                    
                </td>
            </tr>
        </table>

        </form>
        

      </div>
   </div>
</section>

<?php endif ?>

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
