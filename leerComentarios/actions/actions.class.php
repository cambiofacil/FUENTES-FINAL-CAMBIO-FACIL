<?php

/**
 * leerComentarios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage leerComentarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class leerComentariosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_anuncio=$request->getGetParameter('id');
      $this->comentarioss = Doctrine_Core::getTable('apanuncios')->getComentariosAnuncios($id_anuncio);
      $this->tituloo = Doctrine_Core::getTable('apanuncios')->getNroVisitasAnunciosInt($id_anuncio);
      $username=$request->getGetParameter('username');
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->fanuncioss = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioLoginado($id_usuario);
  }
}
