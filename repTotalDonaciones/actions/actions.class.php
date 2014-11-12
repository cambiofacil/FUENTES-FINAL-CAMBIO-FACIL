<?php

/**
 * repTotalDonaciones actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repTotalDonaciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repTotalDonacionesActions extends sfActions
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
      $this->catalogo_cb_rep = Doctrine_Core::getTable('apcasasbeneficencia')->getCatalogCB();
      $this->nro_cb_reg = Doctrine_Core::getTable('apkeyuser')->getNroCBRegistrados();
      $this->nro_donac_rep = Doctrine_Core::getTable('apcasasbeneficencia')->getDonacionesCBRep();
      $this->nro_total_donac = Doctrine_Core::getTable('apfichadonacionCab')->getNroTotalDonaciones();

  }
}
