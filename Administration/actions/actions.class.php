<?php

/**
 * Administration actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage Administration
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class AdministrationActions extends sfActions
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
      $this->nro_usr_reg = Doctrine_Core::getTable('apkeyuser')->getNroUsrRegistrados();
      $this->nro_anun_reg = Doctrine_Core::getTable('apkeyuser')->getNroAnunciosRegistrados();
      $this->nro_cb_reg = Doctrine_Core::getTable('apkeyuser')->getNroCBRegistrados();
      $this->nro_usr_reg_ag = Doctrine_Core::getTable('apkeyuser')->getNroUsrRegistradosAgo();
      $this->nro_usr_reg_sp = Doctrine_Core::getTable('apkeyuser')->getNroUsrRegistradosSp();
      $this->nro_usr_reg_oc = Doctrine_Core::getTable('apkeyuser')->getNroUsrRegistradosOc();
      $this->nro_anu_reg_ag = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosAg();
      $this->nro_anu_reg_sp = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosSp();
      $this->nro_anu_reg_oc = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosOc();
      $this->nro_cb_reg_ag = Doctrine_Core::getTable('apkeyuser')->getNroCbRegistradosAg();
      $this->nro_cb_reg_sp = Doctrine_Core::getTable('apkeyuser')->getNroCBRegistradosSp();
      $this->nro_cb_reg_oc = Doctrine_Core::getTable('apkeyuser')->getNroCBRegistradosOc();
      $this->rep_anun_categ = Doctrine_Core::getTable('apkeyuser')->getReporteAnunciosxCateg();
      $this->cat_anuncios_dist = Doctrine_Core::getTable('apkeyuser')->getCategoriasAnuncios();
      $this->nro_total_donac = Doctrine_Core::getTable('apfichadonacionCab')->getNroTotalDonaciones();
      $this->frase_ramdom = Doctrine_Core::getTable('apfrasesmotivacion')->getFrasesRamdom();
  }
}
