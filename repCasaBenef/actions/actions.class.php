<?php

/**
 * repCasaBenef actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repCasaBenef
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repCasaBenefActions extends sfActions
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
      $this->nro_cb_reg_ag = Doctrine_Core::getTable('apkeyuser')->getNroCbRegistradosAg();
      $this->nro_cb_reg_sp = Doctrine_Core::getTable('apkeyuser')->getNroCBRegistradosSp();
      $this->nro_cb_reg_oc = Doctrine_Core::getTable('apkeyuser')->getNroCBRegistradosOc();
      $this->cb_estado_hist = Doctrine_Core::getTable('apkeyuser')->getCBEstado();
      $this->nro_donac_rep = Doctrine_Core::getTable('apcasasbeneficencia')->getDonacionesCBRep();
      $this->catalogo_cb_rep = Doctrine_Core::getTable('apcasasbeneficencia')->getCatalogCB();
      $this->cbxprovincias = Doctrine_Core::getTable('apcasasbeneficencia')->getCBxProvincia();
      $this->catprov = Doctrine_Core::getTable('apkeyuser')->getCatalogoProvincias();
      $this->nro_total_donac = Doctrine_Core::getTable('apfichadonacionCab')->getNroTotalDonaciones();
  }
}
