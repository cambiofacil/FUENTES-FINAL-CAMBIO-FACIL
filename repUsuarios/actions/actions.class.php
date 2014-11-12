<?php

/**
 * repUsuarios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repUsuarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repUsuariosActions extends sfActions
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
      $this->rep_anun_categ = Doctrine_Core::getTable('apkeyuser')->getReporteAnunciosxCateg();
      $this->cat_anuncios_dist = Doctrine_Core::getTable('apkeyuser')->getCategoriasAnuncios();
      $this->usuarios_act_inac = Doctrine_Core::getTable('apkeyuser')->getUsuariosActivosInactivos();
      $this->anunciosxcateg = Doctrine_Core::getTable('apkeyuser')->getUsuariosxProvinciaHist();
      $this->catprov = Doctrine_Core::getTable('apkeyuser')->getCatalogoProvincias();
  }
}
