<?php

/**
 * estadoAnuncios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage estadoAnuncios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadoAnunciosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->anuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getHistoricoAnuncios($id_usuario);

      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($apanuncios = Doctrine_Core::getTable('apanuncios')->find(array($request->getParameter('id_anuncio'))), sprintf('Object apanuncios does not exist (%s).', $request->getParameter('id_anuncio')));
    $this->form = new apanunciosForm($apanuncios);

    $id_usuario=$this->getUser()->getGuardUser()->getId();
    $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }
}
