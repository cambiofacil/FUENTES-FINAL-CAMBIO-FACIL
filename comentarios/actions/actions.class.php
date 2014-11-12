<?php

/**
 * comentarios actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage comentarios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comentariosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      if($request->isMethod('post')){
          $id_usuario_comenta=$this->getUser()->getGuardUser()->getId();
          $id_anuncio=$request->getPostParameter('id_anuncio');
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $comentario=$request->getPostParameter('mensaje');
          
          $camp = new ApComentarios();
          $camp->setIdUsuarioComenta($id_usuario_comenta);
          $camp->setIdAnuncio($id_anuncio);
          $camp->setFechaComenta($fecha);
          $camp->setDenunciaAbuso(false);
          $camp->setCometario($comentario);         
          $camp->save();

          $this->gatUpdateComentarios = Doctrine_Core::getTable('apcomentarios')->getUpdateNroComentarios($id_anuncio);
          $this->redirect('comentarios/confirmacion');
          
      }
  }

  public function executeConfirmacion(sfWebRequest $request)
  {

  }
}
