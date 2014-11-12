<?php

/**
 * fichaDonacionCabGuarda actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage fichaDonacionCabGuarda
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fichaDonacionCabGuardaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usr_ok=$request->getGetParameter('id_usr_dona');
      $id_cb_ok=$request->getGetParameter('id_cb_get');
      $this->info_usuario_busca = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoUsuarioDona($id_usr_ok);
      $this->info_cb_fich = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoCBFicha($id_cb_ok);
      if($request->isMethod('post')){
          $id_usr_don=$request->getPostParameter('id_usr_dona');
          $id_cb_don=$request->getPostParameter('id_cb_dona');
          $check=$request->getPostParameter('politica_donacion');          
              $tbl_fich_cab = new ApFichaDonacionCab();
              $tbl_fich_cab->setIdUsrDonante($id_usr_don);
              $tbl_fich_cab->setIdCbDonacion($id_cb_don);
              $fecha_rep = date("Y-m-d H:i:s");
              $tbl_fich_cab->setFechaIngresoCab($fecha_rep);
              $tbl_fich_cab->setEstadoDonacCab(1);
              $tbl_fich_cab->save();
              $this->redirect('notificacionMensaje/NotifCreaFichDonac');
      }
  }

  public function executeNotifIngDonac(sfWebRequest $request)
  {

  }

  public function executeNotifIngDonacError(sfWebRequest $request)
  {

  }
}
