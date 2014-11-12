<?php

/**
 * repAnuncios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repAnuncios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repAnunciosActions extends sfActions
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
      $this->nro_anun_reg = Doctrine_Core::getTable('apkeyuser')->getNroAnunciosRegistrados();
      $this->nro_anu_reg_jl = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosJl();
      $this->nro_anu_reg_ag = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosAg();
      $this->nro_anu_reg_sp = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosSp();
      $this->nro_anu_reg_oc = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosOc();
      $this->nro_anu_reg_nv = Doctrine_Core::getTable('apkeyuser')->getNroAnuRegistradosNv();
      $this->anunciosEstado = Doctrine_Core::getTable('apkeyuser')->getAnunciosEstado();
      $this->cat_anuncios_dist = Doctrine_Core::getTable('apkeyuser')->getCategoriasAnuncios();
      $this->anunciosCathst = Doctrine_Core::getTable('apkeyuser')->getAnunciosxCategoriaHist();
      $this->anunciosVisit = Doctrine_Core::getTable('apkeyuser')->getAnunciosMasVisitados();
  }
}
