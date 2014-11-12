<?php

/**
 * leerComentariosCB actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage leerComentariosCB
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class leerComentariosCBActions extends sfActions
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
      $id_cb_coment=$request->getGetParameter('cod_casas_benef_coment');
      $this->info_cb_coment = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoComentCB($id_cb_coment);
      $this->info_cb_titulo = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoCBTitulo($id_cb_coment);
  }
}
