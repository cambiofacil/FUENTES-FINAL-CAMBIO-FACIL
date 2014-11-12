<?php

/**
 * repUsuariosRegDespliegue actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repUsuariosRegDespliegue
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repUsuariosRegDespliegueActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->info_usr_registrados = Doctrine_Core::getTable('apinfocompusuarios')->reporteUsrRegistrados();
  }
}
