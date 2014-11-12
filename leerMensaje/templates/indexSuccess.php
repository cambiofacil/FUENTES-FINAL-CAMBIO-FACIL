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

<style>
/* Badger
------------------------- */

[class*="badger"] {
    position: relative;
    margin: 15px 0;
    padding: 39px 19px 14px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
}

[class*="badger"]:after {
    content: attr(data-badger);
    position: absolute;
    top: 0;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: bold;
    background: #999;
    color: #fff;
}

.badger-left:after {
    left: 0;
    border-radius: 6px 0 6px 0;
}

.badger-right:after {
    right: 0;
    border-radius: 0 6px 0 6px;
}

.badger-danger:after {
    background: #d9534f;
}

.badger-warning:after {
    background: #f0ad4e;
}

.badger-success:after {
    background: #5cb85c;
}

.badger-info:after {
    background: #5bc0de;
}

.badger-inverse:after {
    background: #222;
}

.carousel>.carousel-inner>.item>.circleElement {
    background-color: #000;
    border-radius: 50%;
    position: absolute;
    top: 11%;
    left: 39%;
    width: 400px;
    height: 400px;
    opacity: .5;
}
.carousel-indicators {
    top: 35px;
    background: #404549;
    padding: 30px;
    border-radius: 10px;
}
.carousel-indicators li { cursor: pointer }
.carousel-control {
    width: 60px;
    height: 0;
    margin-top: -20px;
    font-size: 100px;
    background: none;
    border: none;
    font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 300;
}
.carousel-indicators li {
    background-color: #999;
    background-color: rgba(255,255,255,0.3);
}
.carousel-caption {
    padding: 35px;
    text-align: center;
}
.carousel-caption h4 {
    font-family: "lato";
    font-weight: 100;
    font-size: 61px;
}
.carousel-caption p {
    font-family: "lato";
    margin-top: 39px;
    font-size: 22px;
    margin-bottom: -8px;
    font-weight: 300;
    line-height: 30px;
}
.carousel-fade .carousel-inner .item {
    opacity: 0;
    -webkit-transition-property: opacity;
    -moz-transition-property: opacity;
    -o-transition-property: opacity;
    transition-property: opacity;
}
.carousel-fade .carousel-inner .active { opacity: 1 }
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
    left: 0;
    opacity: 0;
    z-index: 1;
}
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right { opacity: 1 }
.carousel-fade .carousel-control { z-index: 2 }
@media only screen and (max-width:767px) {
    h1 { font-size: 30px !important }
    .carousel-caption {
        padding: 15px;
        text-align: center;
    }
    .carousel-caption h4 { font-size: 30px }
    .carousel-caption p {
        margin-top: 10px;
        font-size: 10px;
        margin-bottom: -10px;
    }
    body { padding: 0 !important }
    .carousel { margin-bottom: 0 }
    .hero-unit { padding-bottom: 60px }
    .hero-unit p { font-size: 16px }
}
.carousel-container {
    width: 80% !important;
    padding-left: 10%;
    margin-top: 35px;
}
</style>

</head>
<body>

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
<!-- Content Container  -->
<div class="bg-container">

<!-- About Start -->
<div id="about" class="about">
<div class="wrapper">

     <!-- About Title -->
     <div class="title">
     <div class="divi1"></div><p class="title-spc">Mensaje recibido</p><div class="divi1"></div>
     <div class="clear"></div>

     <?php if ($sf_user->isAuthenticated()): ?>
     <p align="right">
     <?php if ($sf_user->isAuthenticated()): ?>
     <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <i class="icon-user"></i> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?> <?php echo $sf_user->getGuardUser()->getLastName(); ?></strong></font></a>
     <?php endif ?>
     </p>

<section id="fluidGridSystem">
  <div class="row-fluid show-grid">
      
      <div class="span8">
          

        <?php foreach ($ver_mensaje as $anuncios): ?>
        <table class="table table-striped table-bordered">
             <thead>
                  <tr>
                      <th colspan="2"><center><?php echo $anuncios['nombre_usu_envia']?> te ha enviado un mensaje</center></th>
                  </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>
                         <script language="JavaScript" type="text/javascript">
                            function contador (campo, cuentacampo, limite) {
                            if (campo.value.length > limite) campo.value = campo.value.substring(0, limite);
                            else cuentacampo.value = limite - campo.value.length;
                            }
                         </script>

        <form name="form1" id="planilla1" action="<?php echo url_for('leerMensaje/index')?>" method="post">
            <div style='position:relative;display:none'>
            <?php foreach ($ver_mensaje as $fanuncios): ?>
            <input type="tex" id="id_usuario" name="id_usuario" value="<?php echo $fanuncios['id']?>"/>
            <?php endforeach; ?>
            </div>

            <div style='position:relative;display:none'>
            <input type="tex" id="id_anuncio_int" name="id_anuncio_int" value="<?php echo $_GET['idanuncio']?>"/>

            <input type="tex" id="nombre" name="nombre" value="<?php echo $sf_user->getGuardUser()->getFirstName(); ?>"/>
            <input type="tex" id="apellido" name="apellido" value="<?php echo $sf_user->getGuardUser()->getLastName(); ?>"/>

            <?php foreach ($fanuncioss as $fanuncios): ?>
            <input type="tex" id="provincia" name="provincia" value="<?php echo $fanuncios['nombre_prov']?>"/>
            <input type="tex" id="ciudad" name="ciudad" value="<?php echo $fanuncios['nombre_cant']?>"/>
            <input type="tex" id="email" name="email" value="<?php echo $fanuncios['email_address']?>"/>
            <?php endforeach; ?>
            </div>

            &nbsp;&nbsp;&nbsp;&nbsp;<strong>Escribe tu mensaje</strong><br/><br/>
            <center><textarea name="mensaje" cols="48" rows="4" onKeyDown="contador(this.form.mensaje,this.form.remLen,200);" onKeyUp="contador(this.form.mensaje,this.form.remLen,200);" name="mensaje" id="mensaje" style="background-color: transparent;border: 1px solid #000000;scrollbar-arrow-color: #000066;scrollbar-base-color: #000033;scrollbar-dark-shadow-color: #336699;scrollbar-track-color: #666633;scrollbar-face-color: #cc9933;scrollbar-shadow-color: #DDDDDD;scrollbar-highlight-color: #CCCCCC; " placeholder="Responder aquí..."></textarea> <br/>Nro. de caracteres restantes: <input readonly="readonly" maxlength="3" size="3" name="remLen" value="200" type="text" /></center>
            <br/><br/>
            <center><input type="submit" value="Enviar mensaje" class="btn btn-success"/></center>
            
       </form>
                     </td>
                 </tr>
            </tbody>
        </table>
        <?php endforeach; ?>
          
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

<!-- Video PopUp -->
<!-- Register Form End -->

</body>
</html>
