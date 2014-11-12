<?php

/**
 * fichaDonacionCab actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage fichaDonacionCab
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class fichaDonacionCabActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $id_usuario=$this->getUser()->getGuardUser()->getId();
      $this->info_usuario_busca = Doctrine_Core::getTable('apanuncios');
      $this->info_cb_fich = Doctrine_Core::getTable('apcasasbeneficencia');
      $this->info_cb_fich_get = Doctrine_Core::getTable('apcasasbeneficencia');

      if($request->isMethod('post')){
          $id_usuario_donante=$request->getPostParameter('txt_cod_usuario');
          $id_cb=$request->getPostParameter('id_casa_benef');
          $this->info_usuario_busca = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoUsuarioDona($id_usuario_donante);
          $this->info_cb_fich = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoCBFicha($id_cb);
          $this->info_cb_fich_get = Doctrine_Core::getTable('apcasasbeneficencia')->getInfoCasaBenef($id_cb);
      }
  }
}
