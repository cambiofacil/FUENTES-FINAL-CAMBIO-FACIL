<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php slot('title') ?>
<?php echo sprintf('Completa tu información')?>
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
                Estimad@ <?php echo $sf_user->getGuardUser()->getFirstName(); ?> <br/><br/>Tus datos han sido registrados correctamente
                <img src="/images/1408583078_accepted_48.png" alt="" height="30" width="30" />
            </center>
        </h4>
        <br/>

        
        <div class="bs-docs-example">
            <div class="alert alert-info">
              <center>
               Excelente trabajo, ahora tu nivel de confianza (NC) aumento en un 25%
              </center>
            </div>
        </div>
            
            <form name="form1" id="planilla1" action="<?php echo url_for('notificacionMensaje/NotifInfoCompUsuFormCompl')?>" method="post">

                <div style='position:relative;display:none'>
                <?php foreach ($info_nc_cab as $info_nc_cabb): ?>
                <input type="tex" id="id_serial_nc_cab" name="id_serial_nc_cab" value="<?php echo $info_nc_cabb['id_ap_nc_cab']?>"/>
                <?php endforeach; ?>
                </div>
                
                <center>
                    <input type="submit" value="Continuar" class="btn btn-success"/>
                </center>
            </form>
       
</div>
</div>
</body>
</html>
