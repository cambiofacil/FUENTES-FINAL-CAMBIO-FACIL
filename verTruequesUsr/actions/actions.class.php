<?php

/**
 * verTruequesUsr actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage verTruequesUsr
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class verTruequesUsrActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario = $this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
      $id_del_usuario=$request->getGetParameter('id_usr');
      $this->art_cambiados = Doctrine_Core::getTable('apanuncios')->getArticuloCambiados($id_del_usuario);
  }
}
