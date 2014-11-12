<?php

/**
 * actualizaEstadoMenuCuenta actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage actualizaEstadoMenuCuenta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class actualizaEstadoMenuCuentaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_anuncio=$request->getGetParameter('id_anuncio');
      $this->datos_anuncio = Doctrine_Core::getTable('apanuncios')->getInfoAnuncio($id_anuncio);
      $this->var_id_anuncio = Doctrine_Core::getTable('apanuncios')->getIdAnuncioEstado($id_anuncio);

      if($request->isMethod('post')){
          $id_anuncio11 = $request->getPostParameter('id_anuncio1');
          $estado_anun = $request->getPostParameter('new_estado');
          $this->lanuncioss = Doctrine_Core::getTable('apanuncios')->getActualizaEstadoAnuncioMenuCuenta($estado_anun,$id_anuncio11);

          $this->redirect('buscarArticulos/mensajeConfirmacionEstado');
      }
  }
}
