<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php slot('title') ?>
<?php echo sprintf('Envio exitoso')?>
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Estimad@:
            <?php foreach ($fanuncioss as $fanuncios): ?>
            <a href="<?php echo url_for('cuenta/index')?>" title="<?php echo $sf_user->getGuardUser()->getFirstName(); ?>" class=""><img src="/uploads/fotos/s_<?php echo $fanuncios['foto']?>" alt="<?php echo $fanuncios['foto'] ?>" class="img-rounded user-avatar-sm" width="30" height="30"/></a>
                <?php endforeach; ?> &nbsp;
            <a href="<?php echo url_for('cuenta/index')?>"><font color="wheit"> <strong><?php echo $sf_user->getGuardUser()->getFirstName(); ?></strong></font></a>
        </h4>
        <br/>

        <div style="float:left; width:385px;">
        <div class="bs-docs-example">
            <div class="alert alert-info">              
              Tu mensaje ha sido enviado <strong>correctamente.</strong>
            </div>
        </div>        
            <br/>
            <form name="form1" id="planilla1" action="<?php echo url_for('notificacionMensaje/index')?>" method="post">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="submit" value="Aceptar" class="btn btn-success"/>
            </form>        
        </div>
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="/images/1388837900_MB__mail_sent.png" alt="" />
        </div>        	
</div>
</div>
</body>
</html>
