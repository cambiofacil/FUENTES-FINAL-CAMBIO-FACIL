<?php

/**
 * activacionCuenta actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage activacionCuenta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class activacionCuentaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$request->getGetParameter('id');
      $key_usuario=$request->getGetParameter('activationKey');
      $this->info_usr = Doctrine_Core::getTable('sfguarduser')->getExtraeKeyUsuario($id_usuario,$key_usuario);
      
      if($request->isMethod('post')){

          $var_id_usuario=$request->getPostParameter('v_id_user');
          $var_key_usuario_param=$request->getPostParameter('v_key_user');
          $var_key_usuario=$request->getPostParameter('usr_key');

          $bandera_is_active=$request->getPostParameter('is_active');
          $bandera_is_super_admin=$request->getPostParameter('is_super_admin');

          if($var_key_usuario==$var_key_usuario_param && $bandera_is_active==false && $bandera_is_super_admin==false ) {
              $this->info_usr = Doctrine_Core::getTable('sfguarduser')->getUpdateUsuarioActivo($var_id_usuario);

              $apncusuariocab = new ApNcUsuarioCab();
              $apncusuariocab->setIdUsuario($var_id_usuario);
              $apncusuariocab->setValoracionSumTotal(25);//se valora el 25% de NC al usuario por activacion de su cuenta
              $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
              $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
              $apncusuariocab->setFechaModif($fecha);
              $apncusuariocab->save();

              $var_id_nc_cab=1;

              $apncusuariodet = new ApNcUsuarioDet();
              $apncusuariodet->setIdApNcCab($var_id_nc_cab);
              $apncusuariodet->setValoracionPorcent(100);//se valora el 25% de NC al usuario por activacion de su cuenta
              $apncusuariodet->setMotivoValoracion("Activación de la cuenta");
              $meses1 = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
              $fecha1=$meses1[date('n')-1]. date(" d, Y g:i A");
              $apncusuariodet->setFechaIng($fecha1);
              $apncusuariodet->setActivo(1);
              $apncusuariodet->setIdUsrIngresa($var_id_usuario);
              $apncusuariodet->setIdAnuncioVal(132);// ojo numero de anuncio para las valoraciones en el modulo de cuenta
              $apncusuariodet->save();

              $this->ult_id_nc_cab = Doctrine_Core::getTable('apinfousuarios')->get_id_nc_cab($var_id_usuario);

              $this->redirect('http://localhost:8687/frontend_dev.php/cuenta');
          }
          else{
            $mensaje='Existio un error en la activación de tu cuenta favor comunica el inconveniente a info@cambiofacil.com';
            $this->redirect('notificacionMensaje/NotifErrorActivCuenta');
          }
      }
  }
}
