<?php

/**
 * repAnunciosxCategoria actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repAnunciosxCategoria
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repAnunciosxCategoriaActions extends sfActions
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
      $this->cat_anuncios_dist = Doctrine_Core::getTable('apkeyuser')->getCategoriasAnuncios();
      $this->anunciosCathst = Doctrine_Core::getTable('apkeyuser')->getAnunciosxCategoriaHist();
  }
}
