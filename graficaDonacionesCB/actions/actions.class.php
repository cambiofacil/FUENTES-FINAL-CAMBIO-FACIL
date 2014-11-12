<?php

/**
 * graficaDonacionesCB actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage graficaDonacionesCB
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class graficaDonacionesCBActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_cbene=$request->getGetParameter('id_cb');
      $this->nro_don_cb_ag = Doctrine_Core::getTable('apcasasbeneficencia')->getNroDonacionesCBAg($id_cbene);
      $this->nro_don_cb_sp = Doctrine_Core::getTable('apcasasbeneficencia')->getNroDonacionesCBSp($id_cbene);
      $this->nro_don_cb_oc = Doctrine_Core::getTable('apcasasbeneficencia')->getNroDonacionesCBOc($id_cbene);
      $this->nro_don_cb_nv = Doctrine_Core::getTable('apcasasbeneficencia')->getNroDonacionesCBNv($id_cbene);
  }
}
