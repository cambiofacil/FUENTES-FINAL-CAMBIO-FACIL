<?php

/**
 * verTrueques actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage verTrueques
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class verTruequesActions extends sfActions
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
      $this->art_cambiados = Doctrine_Core::getTable('apanuncios')->getArticuloCambiados($id_usuario);
  }
}
