<?php

/**
 * comentariosCB actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage comentariosCB
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class comentariosCBActions extends sfActions
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
          $id_cb=$request->getPostParameter('id_cb_post');
          $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
          $fecha=$meses[date('n')-1]. date(" d, Y g:i A");
          $comentario=$request->getPostParameter('mensaje');

          $camp = new ApComentariosCb();
          $camp->setUsrComentaCb($id_usuario_comenta);
          $camp->setIdCasaBenef($id_cb);
          $camp->setFechaComentaCb($fecha);
          $camp->setDenunciaAbusoCb(false);
          $camp->setComentarioCb($comentario);
          $camp->save();

          $this->gatUpdateComentariosCB = Doctrine_Core::getTable('apcomentarioscb')->getUpdateNroComentariosCB($id_cb);

          $this->redirect('comentariosCB/confirmacion');

      }
  }

  public function executeConfirmacion(sfWebRequest $request)
  {
      
  }
}
