<?php

/**
 * repMensajesDenunciados actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage repMensajesDenunciados
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class repMensajesDenunciadosActions extends sfActions
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
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->infomsjdenun = Doctrine_Core::getTable('apmensajes')->getInfoMensajesDenunciados($id_usuario);
      $this->nro_msj_denun = Doctrine_Core::getTable('apmensajes')->getNroMensajesDenunciados();
  }
}
