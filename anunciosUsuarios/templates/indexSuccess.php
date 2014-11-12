<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<?php slot('title') ?>
<?php echo sprintf('cambiar.com | Crear anuncio')?>
<?php end_slot(); ?>
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
        <li class="first"><a href="<?php echo url_for('intro/index')?>">Inicio</a></li>
	<li><a href="<?php echo url_for('buscarArticulos/index')?>">Buscar Articulos</a></li>
	<li><a href="<?php echo url_for('institucionesBeneficencia/index')?>">Donaciones</a></li>
	<li><a href="<?php echo url_for('cuenta/index')?>">Mi cuenta</a></li>
	<li><a href="#">Acerca de</a></li>
        <li><a href="<?php echo url_for('cuenta/index')?>">Volver</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper col4">
  <div id="container">

    <div id="content">
        
        <table>
            <tr>
                <td>id_usuario</td>
                <td><input type="tex" name="id_usuario" id="id_usuario" /></td>
            </tr>
            <tr>
                <td>id_categoria</td>
                <td><input type="tex" name="id_categoria" id="id_categoria" /></td>
            </tr>
            <tr>
                <td>Imagen P</td>
                <td><input type="tex" name="imagen_p" id="ima_p" /></td>
            </tr>
            <tr>
                <td>Imagen S</td>
                <td><input type="tex" name="ima_s" id="ima_s" /></td>
            </tr>
            <tr>
                <td>Imagen T</td>
                <td><input type="tex" name="ima_t" id="ima_t" /></td>
            </tr>
            <tr>
                <td>Titulo</td>
                <td><input type="tex" name="titulo" id="titulo" /></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><input type="tex" name="estado" id="estado" /></td>
            </tr>
            <tr>
                <td>Observaciones</td>
                <td><input type="tex" name="obser" id="obser" /></td>
            </tr>
            <tr>
                <td>Lo cambiaria por</td>
                <td><input type="tex" name="lo_cam_por" id="lo_cam_por" /></td>
            </tr>
            <tr>
                <td>Fecha Publicacion</td>
                <td><input type="tex" name="f_public" id="f_public" /></td>
            </tr>
            <tr>                
                <td colspan="2"><center><br/><br/><input type="submit" value="Crear nuevo anuncio"/></center></td>
            </tr>
        </table>        

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
  <div id="footer">
    <!-- End Company Details -->
    <div id="copyright">
      <p class="fl_left">Copyright &copy; 2012 - Todos los derechos reservados - <a href="#">cambiar.com</a></p>
      <p class="fl_right">Una idea de <a href="" title="ClonSoft Corporation">ClonSoft Corporation</a></p>
      <br class="clear" />
    </div>
    <div class="clear"></div>
  </div>
</div>
</body>
</html>