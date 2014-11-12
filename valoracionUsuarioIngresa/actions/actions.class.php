<?php

/**
 * valoracionUsuarioIngresa actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage valoracionUsuarioIngresa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class valoracionUsuarioIngresaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $username_post=$request->getGetParameter('usernamedat');
      $this->info_usuario_get = Doctrine_Core::getTable('apvaloracionesusuario')->getDatossUsuariosValoracion($username_post);
      $this->info_usuario_nc_cab = Doctrine_Core::getTable('apvaloracionesusuario')->getUsuarioValorado($username_post);

      if($request->isMethod('post')){
          $id_usuario=$this->getUser()->getGuardUser()->getId();
          $id_nc_cab=$request->getPostParameter('id_nc_val');
          $valoracion = $request->getPostParameter('val');
          $comentario = $request->getPostParameter('mensaje');
          $valor_nc_usr = $request->getPostParameter('valor_actual_nc');
          $id_anuncio_valoracion = $request->getPostParameter('id_anuncio_val');

          $ap_nc_det = new ApNcUsuarioDet();
          $ap_nc_det->setIdApNcCab($id_nc_cab);
          $ap_nc_det->setValoracionPorcent($valoracion);
          $ap_nc_det->setMotivoValoracion('Valoración ingresada por trueque -> Comentario: '.$comentario);
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $ap_nc_det->setFechaIng($fecha);
          $ap_nc_det->setActivo(true);
          $ap_nc_det->setIdUsrIngresa($id_usuario);
          $ap_nc_det->setIdAnuncioVal($id_anuncio_valoracion);
          $ap_nc_det->save();

          $id_usr_valoradoo=$request->getPostParameter('id_usr_val');

          if($valoracion==0){
              $this->valoracion_nc = Doctrine_Core::getTable('apncusuariocab')->getUpdateNCValoracion($valor_nc_usr,$id_usr_valoradoo);
          }
          if($valoracion==25){
              $this->valoracion_nc = Doctrine_Core::getTable('apncusuariocab')->getUpdateNCValoracion($valor_nc_usr,$id_usr_valoradoo);
          }
          if($valoracion==50){
              $this->valoracion_nc = Doctrine_Core::getTable('apncusuariocab')->getUpdateNCValoracion($valor_nc_usr+1,$id_usr_valoradoo);
          }
          if($valoracion==75){
              $this->valoracion_nc = Doctrine_Core::getTable('apncusuariocab')->getUpdateNCValoracion($valor_nc_usr+2,$id_usr_valoradoo);
          }
          if($valoracion==100){
              $this->valoracion_nc = Doctrine_Core::getTable('apncusuariocab')->getUpdateNCValoracion($valor_nc_usr+3,$id_usr_valoradoo);
          }

          $this->redirect('notificacionMensaje/NotifIngresoValoracion');
      }
  }
}
