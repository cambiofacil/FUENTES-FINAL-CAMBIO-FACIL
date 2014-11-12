<?php

/**
 * estadisticasDonacionesUsr actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage estadisticasDonacionesUsr
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadisticasDonacionesUsrActions extends sfActions
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
      $id_usr_perfil=$request->getGetParameter('id_usr');
      $this->consulta_queso = Doctrine_Core::getTable('apcatalogomedallas')->getNroDonacionesUsrQueso($id_usr_perfil);
      $this->donac_realiza = Doctrine_Core::getTable('apanuncios')->getDonacionesRealizadasUsr($id_usr_perfil);
      $this->info_usr_perfil = Doctrine_Core::getTable('apinfocompusuarios')->getDatosUsuarioReporte($id_usr_perfil);
  }
}
