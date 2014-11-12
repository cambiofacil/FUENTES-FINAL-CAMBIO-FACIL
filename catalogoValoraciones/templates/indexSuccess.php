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

<script>
$(document).ready(function(){
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"450px", height:"560px", transition:"fade", scrolling   : false});
});
</script>
</head>

<body>


<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">


<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      <div class="span8">
          <div class="span10">
              <div class="container">
              <div class="row">


               <table class="table table-striped table-bordered">
                  <tr>
                      <td colspan="5">
                          <center><strong>Valoraci&oacute;n /100</strong></center>
                      </td>
                  </tr>
                  <tr>
                      <td><br/><br/><center><img src="/images/0.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val1" value="0"> 0</center></td>
                      <td><br/><br/><center><img src="/images/25.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val2" value="25"> 25</center></td>
                      <td><br/><br/><center><img src="/images/50.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val3" value="50"> 50</center></td>
                      <td><br/><br/><center><img src="/images/75.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val4" value="75"> 75</center></td>
                      <td><br/><br/><center><img src="/images/100.png" alt="" class="left marg_right1" height="40" width="40"/><br/><input type="radio" name="val" id="val5" value="100" checked="true"> 100</center></td>
                  </tr>
                  
              </table>


              <table>
                  <tr>
                      <td>
                          <font size="0.5"><p align="justify"><strong>NOTA:</strong> Tu valoración se mostrará en el perfil del usuario valorado, pero no la verás aparecer inmediatamente, antes será revisada y verificada por el usuario valorado y si es hallada inapropiada, ofensiva o de mala fe será descartada.
                            Sólo se admite una valoración por usuario, de modo que si posteriormente vuelves a valorar al mismo usuario únicamente se tendrá en cuenta la última de tus valoraciones.</p>
                          </font>
                      </td>
                  </tr>
              </table>




            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
          </div>
      </div>
               </div>
                              </div>
   </div>
</section>


</div>
</div><!-- About End -->

<!-- Clear -->


</div><!-- Content Container End  -->


<!-- Footer Start -->
<?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
<!-- Footer End -->

</body>
</html>



