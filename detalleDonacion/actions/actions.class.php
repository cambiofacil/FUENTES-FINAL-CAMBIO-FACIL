<?php

/**
 * detalleDonacion actions.
 *
 * @package    ok_AplicativoTesisEACLL
 * @subpackage detalleDonacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class detalleDonacionActions extends sfActions
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
      $id_fich_d_cab = $request->getGetParameter('id_fic_cab');

      $this->donacion_descrip = Doctrine_Core::getTable('apcasasbeneficencia')->getDetalleDonacion($id_usuario, $id_fich_d_cab);
  }
}
