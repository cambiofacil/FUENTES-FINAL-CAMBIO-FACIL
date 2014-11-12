<?php

/**
 * repValoracionesDenunciadas actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repValoracionesDenunciadas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repValoracionesDenunciadasActions extends sfActions
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
      $this->nro_valorac_denun = Doctrine_Core::getTable('apincidentesdet')->getNroValoracionesDenun();
      $this->msj_denunciados = Doctrine_Core::getTable('apincidentesdet')->getMensajesDenunciados();
  }
}
