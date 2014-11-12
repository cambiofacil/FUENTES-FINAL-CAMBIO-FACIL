<?php

/**
 * catalogoMedallasUsr actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage catalogoMedallasUsr
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class catalogoMedallasUsrActions extends sfActions
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
      $this->medallas_catalogo = Doctrine_Core::getTable('apcatalogomedallas')->getMedallasCatalogoUsr();
  }
}
