<?php

/**
 * repTotalCB actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repTotalCB
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repTotalCBActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
      $this->nro_cb_reg = Doctrine_Core::getTable('apkeyuser')->getNroCBRegistrados();
      $this->cb_estado_hist = Doctrine_Core::getTable('apkeyuser')->getCBEstado();
  }
}
