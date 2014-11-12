<?php

/**
 * administracionIntereses actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage administracionIntereses
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administracionInteresesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->int_usr = Doctrine_Core::getTable('apintereses')->get_intereses_usuario($id_usuario);
  }
}
