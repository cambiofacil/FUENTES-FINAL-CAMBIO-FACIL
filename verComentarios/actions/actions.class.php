<?php

/**
 * verComentarios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage verComentarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class verComentariosActions extends sfActions
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

      $this->coment_todos = Doctrine_Core::getTable('apcomentarios')->getComentariosAnunciosTodos($id_usuario);
  }
}
