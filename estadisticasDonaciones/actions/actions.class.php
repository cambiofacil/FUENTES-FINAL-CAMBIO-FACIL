<?php

/**
 * estadisticasDonaciones actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage estadisticasDonaciones
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadisticasDonacionesActions extends sfActions
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
      $this->consulta_queso = Doctrine_Core::getTable('apcatalogomedallas')->getNroDonacionesUsrQueso($id_usuario);
      $this->donac_realiza = Doctrine_Core::getTable('apanuncios')->getDonacionesRealizadasUsr($id_usuario);
  }
}
