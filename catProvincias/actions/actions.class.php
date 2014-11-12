<?php

/**
 * catProvincias actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage catProvincias
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class catProvinciasActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->catprov = Doctrine_Core::getTable('apkeyuser')->getCatalogoProvincias();
  }
}
