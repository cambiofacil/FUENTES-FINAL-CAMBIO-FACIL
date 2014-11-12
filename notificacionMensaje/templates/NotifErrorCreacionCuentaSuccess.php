<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php slot('title') ?>
<?php echo sprintf('Error en registro')?>
<?php end_slot(); ?>
<link rel="shortcut icon" href="/images/chance.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/estilo_popup_mensaje.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/stream.js"></script>
<script type="text/javascript">
function openDialog() {
	$('#overlay').fadeIn('fast', function() {
		$('#popup').css('display','block');
        $('#popup').animate({'left':'30%'},300);
    });
}

function closeDialog(id) {
	$('#'+id).css('position','absolute');
	$('#'+id).animate({'left':'-100%'}, 300, function() {
		$('#'+id).css('position','fixed');
		$('#'+id).css('left','100%');
		$('#overlay').fadeOut('fast');
	});
}
</script>
</head>

<body onload="openDialog();">
<div id="content">
<div id="overlay" class="overlay"></div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<img src="/images/logocambiofacil.png" />
<div id="popup" class="popup">
	<a onclick="closeDialog('popup');" class="close"></a>

        <h4>
            <center>
                &Oslash;&Oslash;&Oslash;&Oslash;...........Upss...........&Oslash;&Oslash;&Oslash;&Oslash;
            </center>
        </h4>
        <br/>

        <div style="float:left; width:385px;">
        <div class="bs-docs-example">
            <div class="alert alert-info">
              <center>
              Existi&oacute; un problema con la creaci&oacute;n de tu cuenta <strong>fallaste con el ingreso de caracteres en nuestro sistema de RE CAPTCHA,</strong> este proceso es de
              vital importancia para la creación de usuario ya que de esta forma comprobamos que el proceso lo realiza un <em>humano y no un bot</em>
              </center>
            </div>
        </div>
            
            <form name="form1" id="planilla1" action="<?php echo url_for('notificacionMensaje/NotifErrorCreacionCuenta')?>" method="post">
                <center>
                <input type="submit" value="Aceptar" class="btn btn-success"/>
                </center>
            </form>
        </div>
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="/images/face_bad126547899635.png" alt="" />
        </div>
</div>
</div>
</body>
</html>
