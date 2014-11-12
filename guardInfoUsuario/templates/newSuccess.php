<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Corporation</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="shortcut icon" href="/images/Chance.ico " />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="head">
    <h1><a href="#">Camb!ar.com</a></h1>
    <p>Por q' camb!ar es más facil q' comprar</p>
    <div id="topnav">
      <ul>
        <li><a class="active" href="<?php echo url_for('intro/index')?>">Home</a></li>
        <li><a href="<?php echo url_for('buscarArticulos/index')?>">Buscar Articulos</a></li>
        <li><a href="<?php echo url_for('institucionesBeneficencia/index')?>">Donaciones</a></li>
        <li><a href="<?php echo url_for('cuenta/index')?>">Mi cuenta</a></li>
        <li><a href="">Acerca de</a>
          <ul>
            <li><a href="#">Sitio</a></li>
            <li><a href="#">Demo</a></li>
            <li><a href="#">Servicios</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper col4">
  <div id="container">

    <div id="content">

       <?php include_partial('form', array('form' => $form)) ?>

    </div>
    <div id="column">
      <div id="featured">
        <ul>
          <li>
              <p></p>
          </li>
        </ul>
      </div>
      <div class="holder">
        <div class="imgholder"><img src="images/demo/290x100.gif" alt="" /></div>
        <p>Texto</p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper col5">
  <?php include("C:/xampp/htdocs/ProyectosSF/ok_AplicativoTesisEACLL/apps/frontend/modules/footer.php"); ?>
</div>
</body>
</html>

