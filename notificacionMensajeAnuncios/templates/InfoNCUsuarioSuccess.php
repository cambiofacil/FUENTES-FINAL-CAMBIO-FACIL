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
$(".iframe").colorbox({iframe:true, fastIframe:false, width:"450px", height:"560px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe1").colorbox({iframe:true, fastIframe:false, width:"600px", height:"580px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframe2").colorbox({iframe:true, fastIframe:false, width:"900px", height:"560px", transition:"fade", scrolling   : true});
});
</script>

<script>
$(document).ready(function(){
$(".iframe3").colorbox({iframe:true, fastIframe:false, width:"500px", height:"200px", transition:"fade", scrolling   : true});
});
</script>


<script>
$(document).ready(function(){
$(".iframeEstAnun").colorbox({iframe:true, fastIframe:false, width:"800px", height:"560px", transition:"fade", scrolling   : false});
});
</script>

<script>
$(document).ready(function(){
$(".iframeGaleriaAnuncios").colorbox({iframe:true, fastIframe:false, width:"510px", height:"400px", transition:"fade", scrolling   : false});
});
</script>


<style>
#cboxOverlay{ background:#000000; }
</style>
<!-- Para el poupup de la arandela -->

<style>

#column-left {
    background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    float: left;
    position: fixed;
    min-height: 225px;
    margin-bottom: 10px;
    margin-right: 10px;
    overflow: hidden;
    /*text-align: center;*/
    width: 300px;
}

#central {
    background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    float: right;
    height: 5000px;
    margin-bottom: 10px;
    width: 985px;
}
</style>

<script>
$(function() {
var offset = $("#sidebar").offset();
var topPadding = 15;
$(window).scroll(function() {
if ($("#sidebar").height() < $(window).height() && $(window).scrollTop() > offset.top) { /* LINEA MODIFICADA POR ALEX PARA NO ANIMAR SI EL SIDEBAR ES MAYOR AL TAMAÑO DE PANTALLA */
$("#sidebar").stop().animate({
marginTop: $(window).scrollTop() - offset.top + topPadding
});
} else {
$("#sidebar").stop().animate({
marginTop: 0
});
};
});
})
</script>

<style> /*banderin*/
.cambio_usr{
float: right;
}
.cintaver {
position:relative;
width:81px;
height:50px;
background: #9a0808;
background: linear-gradient(to bottom, #9e0b0b 0%,#bf3624 3%,#9a0808 13%,#9a0808 18%,#c43b29 60%,#bc2e1e 74%,#9a0808 100%,#9a0808 100%);
float: right;
}
.cintaver:before {
position:relative;
top:50px;
display:block;
width:0;
height:0;
border-width: 41px; /*ancho banderin*/
border-style:solid;
border-color:#9A0808 #9A0808 transparent #9A0808;
content:"";
}
.cintaver:after {
position:absolute;
top: 0;
left: 8px;
padding: 40px 0 0 0;
width: 60px;
height:60px;
border-right: 1px dashed #cc3D29;
border-left: 1px dashed #cc3D29;
color:#ffffff;
content: "Cambiado HOY";
text-align:center;
text-shadow: 1px 0px  #cc3d29;
font:normal bold 10px/8px arial, serif;
}

</style>

</head>
<body>

<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

<!--<center><img src="/images/aaa.png" alt=""/></center>-->

        <div class="bs-docs-example">
            <div class="alert alert-info">
              <center>
               <strong>EL NIVEL DE CONFIANZA (NC)</strong> <br/>Esta relacionado directamente con la reputacion del
               usuario en el portal, es decir entre mejor puntuaci&oacute;n tenga el usuario en una escala de 1%
               a 100% es un indicador para conocer de manera inmediata que tan ver&iacute;dica es la informaci&oacute;n de
               los anuncios del usuario que los registro ya que esta calificaci&oacute;n viene dada por la
               valoraci&oacute;n de los truequeadores al momento de realizar intercambios como tambien
               la valoraci&oacute;n de las casas de beneficencia al momento de realizar donaciones y por la informaci&oacute;n
               personal que el usuario registro en el sistema.
              </center>
            </div>
        </div>


     <div class="divi2"></div>
     </div>

</div>
</div><!-- About End -->

</body>
</html>