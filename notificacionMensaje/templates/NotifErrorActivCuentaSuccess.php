<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php slot('title') ?>
<?php echo sprintf('Error de activación de cuenta')?>
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
              Exist&iacute;o un problema con la activaci&oacute;n de tu cuenta <strong>por favor comunicate con nosostros a info@cambiofacil.com</strong> o
              verifica que copiaste bien el link que hemos enviado a tu correo, vuelve a copiarlo e intenta activar tu cuenta de nuevo... <em>También es posible que tu cuenta ya este activa</em>
              </center>
            </div>
        </div>
            
            <form name="form1" id="planilla1" action="<?php echo url_for('notificacionMensaje/index')?>" method="post">
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
